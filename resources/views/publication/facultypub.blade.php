<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Document</title>
        <link
            rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200"
        />
        <!-- CSS only -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
            crossorigin="anonymous"
        />
        <!-- JavaScript Bundle with Popper -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
            crossorigin="anonymous"
        ></script>
        <link rel="stylesheet" href="/dropdown.css" />
        <script src="/dropdown.js"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@200&display=swap"
            rel="stylesheet"
        />
        <script
            type="text/javascript"
            src="https://www.gstatic.com/charts/loader.js"
        ></script>
    </head>

    <style>
        tr:nth-child(odd) {
            background-color: #edb2ae47;
        }
        .col{
            margin-top: 50px;
            margin-bottom:50px;
        }
    </style>

    <body>
        <div
            class="container col-lg-12 d-block m-auto mt-3"
            style="margin-top: -30px !important"
        >
            <h2>
                <b>{{ $fullname }}</b>
            </h2>
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead class="thead-dark" style="background-color: #e7473c">
                        <tr style="color: white; font-size: 20px">
                            <th>Title</th>
                            <th>Authors</th>
                            <th>Citations</th>
                            <th>Year</th>
                        </tr>
                    </thead>

                    <tbody>
                        @for ($i = 0; $i < $size; $i++)
                        <tr>
                            <td>
                                <a
                                    style="text-decoration: none"
                                    target="_blank"
                                    href="{{ $links_array[$i] }}"
                                    >{{ $title_array[$i] }}</a
                                >
                            </td>
                            <td>{{ $authors_array[$i] }}</td>
                            <td>{{ $citations_array[$i] }}</td>
                            <td>{{ $year_array[$i] }}</td>
                        </tr>
                        @endfor
                    </tbody>
                </table>
            </div>
        </div>
        <script>
            google.charts.load("current", { packages: ["bar"] });
            google.charts.setOnLoadCallback(drawChart);

          function drawChart() {
            let year = @json($year_array_graph);
            let cit = @json($citations_array_graph);

            var dataRows = [['Year', 'Citations']];
            for (var i = 0; i < Object.keys(year).length; i++) {
                dataRows.push([year[i],cit[i]]);
              }

              var data = google.visualization.arrayToDataTable(dataRows);

                var options = {
                    chart: {
                        title: "Faculty Citations",
                        subtitle: "Till Date Data",
                    },
                    bars: "vertical",
                    vAxis: { format: "decimal" },
                    height: 400,
                    colors: ["#7570b3"],
                };

                var chart = new google.charts.Bar(
                    document.getElementById("chart_div_cit")
                );

                chart.draw(data, google.charts.Bar.convertOptions(options));
            }
        </script>

        <script>
            google.charts.load("current", { packages: ["bar"] });
            google.charts.setOnLoadCallback(drawChart);

            function drawChart() {
            let year = @json($year_array_graph);
            let pub = @json($publications_count);
            var dataRows = [['Year', 'Publications']];
            for (var i = 0; i < Object.keys(year).length; i++) {
                dataRows.push([year[i], pub[i]]);
              }

              var data = google.visualization.arrayToDataTable(dataRows);

                var options = {
                    chart: {
                        title: "Faculty Publications",
                        subtitle: "Till Date Data",
                    },
                    bars: "vertical",
                    vAxis: { format: "decimal" },
                    height: 400,
                    colors: ["#d95f02"],
                };

                var chart = new google.charts.Bar(
                    document.getElementById("chart_div_pub")
                );

                chart.draw(data, google.charts.Bar.convertOptions(options));
            }
        </script>
        <div class="container">
            <div style="margin-bottom: 50px; margin-top: 50px">
                <span class="material-symbols-outlined icons"> bar_chart </span>
                &nbsp&nbsp&nbsp
                <span style="font-size: 45px" class="mt-8 text-2xl"
                    >Graph Analysis</span
                >
            </div>
            <div class="row">
                <div class="col">
                    <span class="material-symbols-outlined">
                        published_with_changes
                    </span>
                    <h2>Publications</h2>
                    <div id="chart_div_pub"></div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <span class="material-symbols-outlined"> inventory </span>
                    <h2>Citations</h2>
                    <div id="chart_div_cit"></div>
                </div>
            </div>
            
        </div>
    </body>
</html>
