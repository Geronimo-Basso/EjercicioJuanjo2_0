<?php


function my_header( $title ) {
	include 'views/header.php';
}

function my_footer() {
	include 'views/footer.php';
}

function get_style_url( $filename ) {
	return  'assets/css/' . $filename;
}

function subscribe( $subscriber ) {
	// TODO: Subscribe to the user.

	return true;
}

function check_errors($errors){
    if ( ! empty( $errors ) ) { ?>
    <div class="error-notices">
        <?php foreach ( $errors as $error_code => $error_message ) { ?>
            <p id="<?php echo $error_code; ?>"><?php echo $error_message; ?></p>
        <?php } ?>
    </div>
    <?php }
}

function check_success($success){
    if ( ! empty( $success ) ) { ?>
    <div class="success-notice">
        <p><?php echo $success; ?></p>
    </div>
    <?php }

}
