<?php
/**
 * Template vars.
 * @var string $title The page title.
 */
function import_style($filename){
    return  '../../assets/css/'.$filename;
    //Hola
    //hola2
    //hola 3

}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="<?php  echo import_style('styles.css'); ?>" />
    <link rel="stylesheet" href="<?php  echo import_style('backend.css'); ?>" />
</head>
<body>









