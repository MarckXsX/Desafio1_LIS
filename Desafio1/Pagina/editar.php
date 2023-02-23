<?php
$cod= $_GET['cod'];
$productos = simplexml_load_file('productos.xml');
$i = 0;
$index = -1;
foreach($productos->producto as $product){
    if($cod == $product->codigo){
        $index = $i;
        break;
    }
    $i++;
}
if($index >= 0){
    //$productos->producto[$index]->codigo = $_POST['codigo'];
    $productos->producto[$index]->nombre = $_POST['nombre'];
    $productos->producto[$index]->descripcion = $_POST['descripcion'];
    $productos->producto[$index]->categoria = $_POST['categoria'];
    $productos->producto[$index]->precio = $_POST['precio'];
    $productos->producto[$index]->existencias = $_POST['existencias'];
    if (isset($_POST['add'])) {
        //Recogemos el archivo enviado por el formulario
        $archivo = $_FILES['archivo']['name'];
        //Si el archivo contiene algo y es diferente de vacio
        if (isset($archivo) && $archivo != "") {
           //Obtenemos algunos datos necesarios sobre el archivo
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
                 $productos->producto[$index]->img = $archivo;
             }
             else {
                //Si no se ha podido subir la imagen, mostramos un mensaje de error
                echo '<div><b>Ocurrió algún error al subir el fichero. No pudo guardarse.</b></div>';
             }
           }
        }
     }

}
file_put_contents("productos.xml",$productos->asXML());
//var_dump($_POST['codigo']);
//var_dump($_POST['nombre']);
//var_dump($_POST['categoria']);
//var_dump($_POST['descripcion']);
//var_dump($_POST['precio']);
//var_dump($_POST['existencias']);

//var_dump($_FILES['archivo']['name']);
//var_dump($_FILES['archivo']['type']);
//var_dump($_FILES['archivo']['size']);
//var_dump($_FILES['archivo']['tmp_name']);
//Si se quiere subir una imagen
header('location:inventario.php');
?>