<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.108.0">
    <title>TextilExport</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/jumbotron/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

    </style>

    
  </head>
  <body>
    
<main>
  <div class="container py-4">
    <header class="pb-3 mb-4 border-bottom">
      <a href="#" class="d-flex align-items-center text-dark text-decoration-none">
        <img src="img/textil.svg" alt="logo" width="50" height="50" class="me-2" viewBox="0 0 118 94">
        <span class="fs-4">TextilExport</span>
      </a>
    </header>

    <div class="p-5 mb-4 bg-light rounded-3 ">
      <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Tienda de productos textiles y artículos promocionales.</h1>
        <p class="col-md-8 fs-4">Contamos con variedad de productos de acuerdo a tus gustos y necesidades como prendas de vestir, complementos, accesorios, tazas, termos,
          entre otros articulos de uso cotidiano.
        </p>
      </div>
    </div>

    <div class="row align-items-md-stretch">

      <div class="col-md-12">
        <div class="h-100 p-5 text-bg-dark rounded-3 ">
          <center><h1>Productos del Catalogo</h1></center>
        </div>
      </div>
    
      <!--<div class="col-md-6">
        <div class="h-100 p-5 bg-light border rounded-3">
          <h2>Add borders</h2>
          <p>Or, keep it light and add a border for some added definition to the boundaries of your content. Be sure to look under the hood at the source HTML here as we've adjusted the alignment and sizing of both column's content for equal-height.</p>
          <button class="btn btn-outline-secondary" type="button">Example button</button>
        </div>
      </div>-->

    </div>

    <div class="row align-items-md-stretchS py-4">

      <?php
      $productos = simplexml_load_file("productos.xml");
      foreach ($productos -> producto as $product) {
      ?>
      <div class="col-md-4 py-4">
        <div class="h-100 p-5 bg-light border rounded-3 ">
          <div class="card p-5" >
            <center>
              <img src="img/<?=$product->img?>" class="card-img-top" style="width: 14rem; height: 14rem;" alt="Producto">
              <div class="card-body">
                <h5 class="card-title"><?=$product->nombre?></h5>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Codigo: <?=$product->codigo?></li>
                <li class="list-group-item">Categoria: <?=$product->categoria?></li>
                <li class="list-group-item">Precio: $<?=$product->precio?></li>
              </ul>
              <div class="card-body">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#ver_<?=$product->codigo?>">Ver mas</button>
              </div>
            </center>
          </div>
        </div>
      </div>
      <?php
      include('info_modal.php');
      }
      ?>

    </div>

     <div class="row align-items-md-stretch">

      <div class="col-md-12">
        <div class="h-100 p-5 text-bg-dark rounded-3 ">
          <center>
            <h2>Administracion</h2>
            <p>Zona para personal de la tienda. Si desea agregar, editar y eliminar productos; ingresar al siguiente apartado que presetara
              una pagina principal para administrara la informacion de los productos.
            </p>
            <a href="inventario.php" class="btn btn-secondary" type="button">Ingresar</a>
          </center>
        </div>
      </div>
    
      <!--<div class="col-md-6">
        <div class="h-100 p-5 bg-light border rounded-3">
          <h2>Add borders</h2>
          <p>Or, keep it light and add a border for some added definition to the boundaries of your content. Be sure to look under the hood at the source HTML here as we've adjusted the alignment and sizing of both column's content for equal-height.</p>
          <button class="btn btn-outline-secondary" type="button">Example button</button>
        </div>
      </div>-->

    </div>

    <footer class="pt-3 mt-4 text-muted border-top">
      Marco Gerardo Serrano Lopez SL182556
    </footer>
  </div>
</main>
  </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>

