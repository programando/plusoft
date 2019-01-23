<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Pruebas</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <style >
        .borde
        {
          border:  1px solid black;
        }
        body,html {
        height: 100%;
                 /*background-color: #57b200;
                color: #FFFFFF;*/
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                z-index: -2;
}



.panel {
    position: absolute;
    z-index: 2;
    background-color: #57b200;
    padding: 20px;
    border-radius: 4px;
    box-sizing: border-box;

    left: 50%;
    margin-left: -400px;
  }

      .links > a {
        color: #FFFFFF;
        padding: 0 25px;
        font-size: 12px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }
  </style>
</head>
<body>


<div class="container h-100">
  <div class="row h-100  align-items-center borde">
     <div class="col text-center text-capitalize borde">
        <img class="img-responsive d-block" src=" {{ asset('images/logo_h_blanco.png') }} " width="650px">
                <div class="links">
                    <a href="http://tareasvue.plusoft.co">Tareas Vue.js</a>
                    <a href="http://balquimia.plusoft.co/">Balquimia - ERP</a>
                    <a href="http://cripack.plusoft.co/">Cripack - ERP</a>
                    <a href="http://webs.plusoft.co/">Mis recursos</a>
                </div>


    </div>
        <div class="panel d-block" id="particles-js" style="width: 100%;"  ></div>
        <div id="particles-js"></div>
</div>
</div>




<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

        <script src="{{asset('vendor/particles/particles.js')}}"></script>
</body>
</html>
