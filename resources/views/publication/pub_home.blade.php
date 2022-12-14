<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bungee+Inline&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Bungee+Inline&display=swap');

    .title{
        font-size: 50px;
        font-family: 'Bungee Inline', cursive;
        color: #E7473C;
    }
    .bt{
        height: 120px;
        width: 520px;
        background-color: transparent;
        color: #4db7e5;
        border: none;
        font-size: 50px;
        transition: 0.5s;
        border-radius: 50%;
    }
    .bt:hover{
        color: #E7473C;
        transition: 0.5s;
        font-size: 60px;
        scale: 1.4;
    }
    
</style>
<body>
    <div class="container text-center" style="margin-top:40px">
        <div class="row">
            <div class="col">
                <div class="card" style="width: 500px;">
                    <img class="card-img-top" src="{{asset('/img/publication/prof.png')}}" alt="Card image cap">
                    
                </div>
            </div>
            <div class="col">
                <div class="card-body">
                    <p class="card-text title">Faculty Publications Scholar</p>
                  <p class="card-text" style="font-size: 30px;color:#4db7e5">Sardar Patel Institute of Techonology (S.P.I.T)</p>
                </div>
                  <div class="row">
                        <button onclick="location.href='{{ url('facfilter') }}'" class="bt"><span style="scale:3;margin-left:50px" class="material-symbols-outlined">
                                    arrow_forward
                                </span>
                        </button>
                  </div>
            </div>
        </div>
        
    </div>

    
</body>
</html>