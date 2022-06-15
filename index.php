<?php

include 'src/functions.php';
include 'src/backend.php';

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
	    <div class="form-field name">
		    <label for="name">Nombre:</label>
		    <input id="name" type="text" name="name" />
	    </div>

	    <div class="form-field email">
		    <label for="email">Email:</label>
		    <input id="email" type="text" name="email" />
	    </div>

	    <div class="form-field">
            <input type="submit" />
	    </div>
    </form>
    <?php } ?>
<?php
my_footer();
