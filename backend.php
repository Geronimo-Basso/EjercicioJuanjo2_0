<?php

if ( empty( $_POST ) ) {
    return;
}

// Posted data.
$name    = ( ! empty( $_POST['name'] ) ? $_POST['name'] : '' );
$email   = ( ! empty( $_POST['email'] ) ? $_POST['email'] : '' );
$date = date('d-m-y h:i:s');

// Validation
$success = '';
$errors  = array();

if ( empty( $email )) {
    $errors['email_empty'] = 'POR FAVOR COMPLETE EL CAMPO EMAIL';
}elseif(filter_var($email,FILTER_VALIDATE_EMAIL)===false){
    $errors['email_format']='EL FORMATO DEL EMAIL ESTA MAL';
}else {
    include 'Subscriber.php';
    $subscriber= new Subscriber($name,$email,$date);
    $success = "Gracias por acceder, usuario: <BR> $subscriber";
}

/*
Funtion FILTER_VALIDATE_EMAIL to check the format of an email, returns true or false.
*/


