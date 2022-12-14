<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title>Document</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
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
        <link rel="stylesheet" href="/dropdown.css">
        <script src="/dropdown.js"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@200&display=swap" rel="stylesheet">
    </head>
    <body>
        <div class="container" style="margin-top:-50px">
            <div class="container" style="margin-bottom: auto;height:60px">
                    <span class="material-symbols-outlined icons" style="scale: 5; color:#E7473C">
                        assignment 
                    </span>
            </div>
            <div class="card-box">
                <div class="text-center p-2">         
                    <span style="font-size:35px;font-weight:bold" class="mt-8 text-3xl">Faculty Research Papers</span> 
                    
                </div>
                <div class="container col-lg-12 d-block m-auto mt-3">
                    <div class="table-responsive" style="overflow-x: hidden">
                        <div class="row">
                            <div class="form-group col-sm-6" style="margin:auto">
                                <form action="{{ route('facultyDataParser') }}" method="post">
                                    @csrf
                                    <select class="custom-select" id="inputTopic" name="filter" data-flip="false" style="height: 50px;background: white">
                                        <option class="opt" value="" disabled selected hidden>Choose Faculty...</option>
                                        @foreach($fac_name as $f)
                                        <option value="{{$f}}">{{$f}} </option>
                                        @endforeach
                                    </select>
                            </div>
                        </div>
                        <div class="container p-5">
                            <div class="row col-sm-3" style="margin-left:auto;margin-right:auto">
                                <input class="btn btn-outline-primary" type="submit" value="Show">
                            </div>
                        </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        
    </body>
</html>
