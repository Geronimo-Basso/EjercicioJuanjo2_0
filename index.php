<?php
//Try the code with http://localhost:8080/EjercicioJuanjo2_0/index.php
include 'src/backend.php';

function my_header( $title ) {
    include 'src/views/header.php';
}
my_header( 'My title' );
?>
    <?php if ( ! empty( $errors ) ) { ?>
    <div class="error-notices">
        <?php foreach ( $errors as $error_code => $error_message ) { ?>
            <p id="<?php echo $error_code; ?>"><?php echo $error_message; ?></p>
        <?php } ?>
    </div>
    <?php } ?>

    <?php if ( ! empty( $success ) ) { ?>
    <div class="success-notice">
        <p><?php echo $success; ?></p>
    </div>
    <?php } else { ?>
    <h1>¡Bienvenido!</h1>

    <form action="" method="POST">
        Nombre: <input type="text" name="name"><br><br><br>
        Email: <input type="text" name="email"><br><br><br>
        <input type="submit"> <!--No me quedo muy claro como llamar a esto desde el css-->


    </form>
    <?php } ?>
<?php
include 'src/views/footer.php';