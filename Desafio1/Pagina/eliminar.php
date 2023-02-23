<?php
$cod=$_GET['cod'];
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
    unset($productos->producto[$index]);

}
file_put_contents("productos.xml",$productos->asXML());
//var_dump($index);
header('location:inventario.php');
?>