<?php
/**
 * Template vars.
 * @var string $title The page title.
 */
function importFile($filename){
    ?>
    <link rel="stylesheet" href="../../assets/css/<?php $filename?>">
    <?php
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
    <?php
    importFile('styles.css');
    importFile('backend.css');
    ?>
</head>
<body>









