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
      <a href="index.php" class="d-flex align-items-center text-dark text-decoration-none">
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
          <center>
            <h1>Inventario</h1>
            <p>Si requiere ingresar nuevo producto al catalogo de la tienda, puede realizar el registro desde el apartado de registro.</p>
            <button type="button" class="btn btn-secondary" href="#agregar" data-bs-toggle="modal">Agregar</button>
          </center>
        </div>
      </div>
      <?php include("agregar_modal.php");?>

    </div>

    <div class="row align-items-md-stretchS py-4">

    <div class="table-responsive">
        <table class="table align-middle" style="margin-top:20px;">
                <thead>
                    <th>img</th>
                    <th>Codigo</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Categoria</th>
                    <th>Precio</th>
                    <th>Existencias</th>
                    <th>Acciones</th>
                </thead>
                <tbody>
                    <?php
                    $productos = simplexml_load_file("productos.xml");
                    foreach($productos -> producto as $product){                      
                    ?>
                    <tr>
                        <td><img src="img/<?=$product->img?>" class="card-img-top" style="width: 12rem; height: 12rem;" alt="Producto"></td>
                        <td><?=$product->codigo?></td>
                        <td><?=$product->nombre?></td>
                        <td><?=$product->descripcion?></td>
                        <td><?=$product->categoria?></td>
                        <td><?=$product->precio?></td>
                        <td><?=$product->existencias?></td>
                        <td>
                          <button type="button" class="btn btn-primary d-grid gap-2 m-3" data-bs-toggle="modal" data-bs-target="#editar_<?=$product->codigo?>">Editar</button>
                          <button type="button" class="btn btn-danger d-grid gap-2 m-3" data-bs-toggle="modal" data-bs-target="#eliminar_<?=$product->codigo?>">Eliminar</button>                    
                        </td>
                    </tr>
                    <?php

                    include('eliminar_modal.php');
                    include('editar_modal.php');
                    }
                    ?>
                </tbody>
        </table>
        <?php include("agregar_modal.php");?>

    </div>

    <!-- -->

    </div>

    <footer class="pt-3 mt-4 text-muted border-top">
      Marco Gerardo Serrano Lopez SL182556
    </footer>
  </div>
</main>
<?php include('agregar_modal.php'); ?>
  </body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>