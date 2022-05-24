<?php
/**
 * Template vars.
 * @var string $title The page title.
 */
function import_style($filename){
    ?>
    <link rel="stylesheet" href="../../assets/css/<?php echo $filename; ?>" />
    <?php
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
    <?php
    import_style('styles.css');
    import_style('backend.css');
    ?>
</head>
<body>









