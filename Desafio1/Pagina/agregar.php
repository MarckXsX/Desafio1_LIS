<?php
require 'validaciones.php';
if(isset($_POST)){
    $archivo = $_FILES['archivo']['name'];
    if(!isset($_POST['codigo'])||esVacio($_POST['codigo'])|| !esCodigo($_POST['codigo'])){
        echo "El campo codigo esta erroneo <br>";
    }
    if(!isset($_POST['nombre'])||esVacio($_POST['nombre']) || !esTexto($_POST['nombre'])){
        echo "El campo nombre esta erroneo <br>";
    }
    if(!isset($_POST['descripcion'])||esVacio($_POST['descripcion'])){
        echo "El campo descripcion esta erroneo <br>";
    }
    if(!isset($_POST['precio']) || !isset($_POST['precio'])>0 ||esVacio($_POST['precio'])){
        echo "El campo precio esta erroneo <br>";
    }
    if(!isset($_POST['existencias'])||esVacio($_POST['existencias']) || !isset($_POST['existencias'])>0){
        echo "El campo existencias esta erroneo <br>";
    }
    if(!isset($archivo) || $archivo == ""){
        echo "El campo foto esta vacio <br>";
    }
    else{

        $productos = simplexml_load_file('productos.xml');
        $producto = $productos->addChild('producto');
        $producto->addChild('codigo',$_POST['codigo']);
        $producto->addChild('nombre',$_POST['nombre']);
        $producto->addChild('descripcion',$_POST['descripcion']);
        $producto->addChild('categoria',$_POST['categoria']);
        $producto->addChild('precio',$_POST['precio']);
        $producto->addChild('existencias',$_POST['existencias']);

        //Guardado de la imagen en los productos
        $tipo = $_FILES['archivo']['type'];
        $tamano = $_FILES['archivo']['size'];
        $temp = $_FILES['archivo']['tmp_name'];


        //Se comprueba si el archivo a cargar es correcto observando su extensión y tamaño
        if (!((strpos($tipo, "jpg") || strpos($tipo, "png")) && ($tamano < 2000000))) {
            echo '<div><b>Error. La extensión o el tamaño de los archivos no es correcta.<br/>
          - Se permiten archivos .gif, .jpg, .png. y de 200 kb como máximo.</b></div>';
        }
        else {
          //Si la imagen es correcta en tamaño y tipo
          //Se intenta subir al servidor
          if (move_uploaded_file($temp, 'img/'.$archivo)) {
              //Cambiamos los permisos del archivo a 777 para poder modificarlo posteriormente
              chmod('img/'.$archivo, 0777);
              //Mostramos el mensaje de que se ha subido co éxito
              //echo '<div><b>Se ha subido correctamente la imagen.</b></div>';
              //Mostramos la imagen subida
              $producto->addChild('img',$archivo);
            }
            else {
             //Si no se ha podido subir la imagen, mostramos un mensaje de error
             echo '<div><b>Ocurrió algún error al subir el fichero. No pudo guardarse.</b></div>';
            }
        }
        file_put_contents("productos.xml",$productos->asXML());
        header('location:inventario.php');
    }
}
?>