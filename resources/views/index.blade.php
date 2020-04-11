<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<style >
  /* ---- reset ---- */

body {
  margin: 0;
    font-family: 'Raleway', sans-serif;
    font-weight: 100;

}

canvas {
  display: block;
  vertical-align: bottom;
}

/* ---- particles.js container ---- */

#particles-js {
  position: absolute;
  width: 100%;
  height: 100%;
  background-color: #57b200;;
  background-image: url("");
  background-repeat: no-repeat;
  background-size: cover;
  background-position: 50% 50%;
  z-index: -1;
}

/* ---- stats.js ---- */

.count-particles{
  background: #000022;
  position: absolute;
  top: 48px;
  left: 0;
  width: 80px;
  color: #13E8E9;
  font-size: .8em;
  text-align: left;
  text-indent: 4px;
  line-height: 14px;
  padding-bottom: 2px;
  font-family: Helvetica, Arial, sans-serif;
  font-weight: bold;
}

.js-count-particles{
  font-size: 1.1em;
}

#stats,
.count-particles{
  -webkit-user-select: none;
}

#stats{
  border-radius: 3px 3px 0 0;
  overflow: hidden;
}

.count-particles{
  border-radius: 0 0 3px 3px;
}
        .borde
        {
          border:  1px solid black;
        }
  .contenedor{
       width: 900px;
       position: absolute;
       margin-left: 15%;
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
<body>

<!-- particles.js container -->
<div id="particles-js"></div>

<!-- stats - count particles
<div class="count-particles">
  <span class="js-count-particles">--</span> particles
</div>
-->
<div class="container ">
  <div class="row h-100  align-items-center  contenedor">
     <div class="col text-center text-capitalize align-self-center">
        <img class="img-responsive d-block" src=" {{ asset('images/logo_h_blanco.png') }} " width="650px">
                <div class="links">
                    <a href="http://tareasvue.plusoft.co">Tareas Vue.js</a>
                    <a href="http://balquimia.plusoft.co/">Balquimia - ERP</a>
                    <a href="http://webs.plusoft.co/">Mis recursos</a>
                </div>


    </div>

</div>

</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

    <script src="{{asset('vendor/particles/particles.js')}}"></script>
   <script src="{{asset('vendor/particles/app.js')}}"></script>
</body>
</html>
