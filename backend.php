<?php

if ( empty( $_POST ) ) {
    return;
}

// Posted data.
$name    = ( ! empty( $_POST['name'] ) ? $_POST['name'] : '' );
$email   = ( ! empty( $_POST['email'] ) ? $_POST['email'] : '' );

// Validation
$success = '';
$errors  = array();

if ( empty( $email )) {
    $errors['email_empty'] = 'POR FAVOR COMPLETE EL CAMPO EMAIL';
}elseif(filter_var($email,FILTER_VALIDATE_EMAIL)===false){
    $errors['email_format']='EL FORMATO DEL EMAIL ESTA MAL';
}else {

    $success = "Gracias por acceder, usuario: $email";
}

/*
Funtion FILTER_VALIDATE_EMAIL to check the format of an email, returns true or false.
*/

//crear objeto de tipo usuario , Suscriber($name,$email);
// luego suscribir al usuario
//crear function suscribirse.
//