<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    

    <title>Biblioteca Fresca</title>
</head>

<style>
  @import url(https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700);
  @import url(https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css);

  html {
    background: mediumseagreen;
    font-size: 14px;
    -moz-osx-font-smoothing: grayscale;
    -webkit-font-smoothing: antialiased;
    min-width: 300px;
    overflow-x: hidden;
    overflow-y: scroll;
    text-rendering: optimizeLegibility;
  }

  body {
    color: #666;
    font-family: "Source Sans Pro", "Helvetica", "Arial", sans-serif;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.4;
  }

  a {
    text-decoration: none;
    transition: all 0.3s cubic-bezier(.25, .8, .25, 1);
  }

  div, h2, p, figure {
    margin: 0;
    padding: 0;
  }

  .header {
    color: white;
    padding: 40px 0 20px;
    text-align: center;
  }

  .header h1 {
    font-size: 40px;
    font-weight: bold;
  }

  .header h2 a {
    border-bottom: 1px solid rgba(255, 255, 255, 0.5);
    color: white;
    font-size: 20px;
    opacity: 0.5;
  }

  .header h2 a:hover {
    border-bottom-color: white;
    opacity: 1;
  }

  .main {
    margin: 0 auto;
    max-width: 1040px;
    padding: 10px;
  }

  .column {
    flex: 1;
    flex-direction: column;
  }

  .article {
    background: white;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
    color: #666;
    display: flex;
    flex: 1;
    flex-direction: column;
    flex-basis: auto;
    margin: 10px;
  }

  .article:hover,
  .article:focus {
    box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
    color: #444;
  }

  .article-image {
    background: #eee;
    display: block;
    padding-top: 75%;
    position: relative;
    width: 100%;
  }

  .article-image img {
    display: block;
    height: 100%;
    left: 0;
    position: absolute;
    top: 0;
    width: 100%;
  }

  .article-image.is-3by2 {
    padding-top: 66.6666%;
  }

  .article-image.is-16by9 {
    padding-top: 56.25%;
  }

  .article-body {
    display: flex;
    flex: 1;
    flex-direction: column;
    padding: 20px;
  }

  .article-title {
    color: #333;
    flex-shrink: 0;
    font-size: 1.4em;
    font-weight: 700;
    line-height: 1.2;
  }

  .article-content {
    flex: 1;
    margin-top: 5px;
  }

  .article-info {
    display: flex;
    font-size: 0.85em;
    justify-content: space-between;
    margin-top: 10px;
  }

  @media screen and (min-width: 800px) {
    .columns,
    .column {
      display: flex;
    }
  }

  @media screen and (min-width: 1000px) {
    .first-article {
      flex-direction: row;
    }

    .first-article .article-body {
      flex: 1;
    }

    .first-article .article-image {
      height: 300px;
      order: 2;
      padding-top: 0;
      width: 400px;
    }

    .main-column {
      flex: 3;
    }

    .nested-column {
      flex: 2;
    }
  }
</style>

<body class="bg-blue">
<div>

<!--barra navegacion-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">Biblioteca Fresca</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('apPrin')? 'text-success fw-bold w-bold text-decoration-line-through':'' }}" aria-current="page" href=" {{ route('apPrin') }} "> Inicio </a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link {{ request()->routeIs('apRegi')? 'text-success fw-bold text-decoration-line-through':'' }}" href= " {{ route('apRegi') }} "> Registrar Libro </a>
        </li>


      </ul>
    </div>
  </div>
</nav>
</div>
<!--Termina Barra navegación-->

<!--  Contenido -->


@yield('contenido')



<!--Pie de Pagina-->
<!--Alertas-->
<div class="alert alert-success" role="alert">
  Biblioteca Fresca.   2022 CopyRigth® 
  <?php 
  date_default_timezone_set('America/Mexico_City');

  $fechaActual = date('d/m/y h:i:s');

  echo "$fechaActual <br>";
  
  ?>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>


</html>