<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Process\Process;

class PublicationController extends Controller
{
    public function datadriver()
    {
        // $results = [];
        $facc = DB::select('select distinct fullname as fac from facpublications');
        $fac_name = [];
        foreach ($facc as $f) {
            $fac_name[] = $f->fac;
        }

        return view('publication.facfilter', compact('fac_name'));
    }

    public function facultydata(Request $request)
    {

        $fullname = $request->filter;

        $ID = DB::select('select google_scholar_id as g from facpublications where fullname = ?', [$fullname]);



        $gscID = $ID[0]->g;

        //******************************************************************KEY
        $key = "dc6cffab505c9fa7737419184008156209727fee5ee5812a9d5260eb548514e0";


        $ext = shell_exec("python publicationScripts/ext.py $gscID $key");
        $title = shell_exec("python publicationScripts/title.py $gscID $key");

        //===================================================================================================================
        //FOR TESTING PURPOSE WE CAN USE THIS TO KNOW WHERE THE EROR IS IN SCRIPT

        // $title = shell_exec("python " . app_path() . "\title.py " . escapeshellarg($url));
        // dd($title);
        // $process = new Process(['python', public_path() . '/ext.py'], null, ['SYSTEMROOT' => getenv('SYSTEMROOT'), 'PATH' => getenv("PATH")]);

        // $process->run();

        // if (!$process->isSuccessful()) {
        //     dd($process->getErrorOutput());
        // }

        // dd($process->getOutput());
        //====================================================================================================================
        $publications = shell_exec("python publicationScripts/publications.py $gscID $key");
        $authors = shell_exec("python publicationScripts/authors.py $gscID $key");
        $citations = shell_exec("python publicationScripts/citations.py $gscID $key");
        $year = shell_exec("python publicationScripts/year.py $gscID $key");
        $links = shell_exec("python publicationScripts/links.py $gscID $key");

        // dd($citations);
        //title------------------------------------------------------------------------>
        $ch = "";
        $i = 27;
        $title_array = [];
        while ($title[$i] != "]") {

            if ($title[$i] == "[") {

            } elseif ($title[$i] != ",") {

                $ch = $ch . $title[$i];
            } elseif ($title[$i] == ",") {
                $title_array[] = $ch;
                $ch = "";
            }
            $i = $i + 1;
        }
        $title_array[] = $ch;

        //Links------------------------------------------------------------------->
        $ch = "";
        $i = 27;
        $links_array = [];
        while ($links[$i] != "]") {

            if ($links[$i] == "[") {

            } elseif ($links[$i] != ",") {

                $ch = $ch . $links[$i];
            } elseif ($links[$i] == ",") {
                $links_array[] = $ch;
                $ch = "";
            }
            $i = $i + 1;
        }
        $links_array[] = $ch;

        // //publications------------------------------------------------------------------------>
        // $ch = "";
        // $i = 27;
        // $publications_array = [];
        // while ($publications[$i] != "]") {

        //     if ($publications[$i] == "[") {

        //     } elseif ($publications[$i] != ",") {

        //         $ch = $ch . $publications[$i];
        //     } elseif ($publications[$i] == ",") {
        //         $publications_array[] = $ch;
        //         $ch = "";
        //     }
        //     $i = $i + 1;
        // }
        // $publications_array[] = $ch;


        //authors------------------------------------------------------------------------>
        $ch = "";
        $i = 27;
        $authors_array = [];
        while (true) {
            if ($authors[$i] == "]" && $authors[$i + 1] == "]") {
                break;
            }
            if ($authors[$i] == "[" || $authors[$i] == ",") {

            } elseif ($authors[$i] == "]") {
                $authors_array[] = $ch;
                $ch = "";

            } else {
                $ch = $ch . $authors[$i];
            }
            $i = $i + 1;
        }
        $authors_array[] = $ch;


        //citations------------------------------------------------------------------------>
        $ch = "";
        $i = 27;
        $citations_array = [];
        $citations = str_replace(' ', '', $citations);
        while ($citations[$i] != "]") {

            if ($citations[$i] == "[") {

            } elseif ($citations[$i] != ",") {

                $ch = $ch . $citations[$i];
            } elseif ($citations[$i] == ",") {
                $ch = (int) $ch;
                $citations_array[] = $ch;
                $ch = "";
            }
            $i = $i + 1;
        }
        $citations_array[] = (int) $ch;


        //year------------------------------------------------------------------------>
        $ch = "";
        $i = 27;
        $year_array = [];
        $year = str_replace(' ', '', $year);

        while ($year[$i] != "]") {

            if ($year[$i] == "[") {

            } elseif ($year[$i] != ",") {

                $ch = $ch . $year[$i];
            } elseif ($year[$i] == ",") {
                // $ch = (int) $ch;
                $year_array[] = $ch;
                $ch = "";
            }
            $i = $i + 1;
        }
        $year_array[] = $ch;
        // dd($year_array);


        $find = array("'");
        $replace = array("");

        $findauth = array("' '");
        $replaceauth = array(",");

        $size = sizeof($title_array);

        for ($i = 0; $i < $size; $i++) {
            $title_array[$i] = str_replace($find, $replace, $title_array[$i]);
            $authors_array[$i] = str_replace($findauth, $replaceauth, $authors_array[$i]);
            $authors_array[$i] = str_replace($find, $replace, $authors_array[$i]);
            $year_array[$i] = str_replace($find, $replace, $year_array[$i]);
            $links_array[$i] = str_replace($find, $replace, $links_array[$i]);
        }
        $y_g = array_unique($year_array);


        //storing unique years
        $year_graph = [];
        foreach ($y_g as $y) {
            static $i = 0;
            $year_graph[$i] = $y;
            $i++;
        }


        //merging the years and adding the citations acc to years
        $cit_add = [];
        $j = 0;
        for ($i = 0; $i < sizeof($year_array) - 1; $i++) {
            $cit_add[$j] = 0;
            while ($year_array[$i] == $year_array[$i + 1]) {
                $cit_add[$j] = $cit_add[$j] + $citations_array[$i];
                $i++;
            }
            $cit_add[$j] = $cit_add[$j] + $citations_array[$i];
            $j++;
        }


        //removing "" from the years array
        for ($i = 0; $i < sizeof($year_graph); $i++) {
            if ($year_graph[$i] == "") {
                unset($year_graph[$i]);
            }
        }

        //for graphs with merged the multiple years and added teh citations according to them
        $citations_array_graph = $cit_add;
        $year_array_graph = $year_graph;


        //counting the years for getting the publications data
        $pb = array_count_values($year_array);
        $publications_count = [];

        //storing the publications count for graph

        foreach ($pb as $key => $field) {
            $publications_count[] = $field;
        }

        return view('publication.facultypub', compact(['size', 'fullname', 'publications_count', 'year_array_graph', 'citations_array_graph', 'title_array', 'authors_array', 'year_array', 'citations_array', 'links_array']));

    }
}