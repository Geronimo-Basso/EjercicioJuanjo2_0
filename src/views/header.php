<?php
/**
 * Template vars.
 *
 * @var string $title The page title.
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="<?php echo get_style_url( 'styles.css' ); ?>" />
    <div class="menu-bar">
        <ul>
            <li class="active"> <a href="#"> Home </a></li>
            <li> <a href="#"> Subscriber page </a></li>
            <li> <a href="#"> Show More </a> </li>
            <li> <a href="#"> About Us </a> </li>
        </ul>
    </div>
</head>
<body>