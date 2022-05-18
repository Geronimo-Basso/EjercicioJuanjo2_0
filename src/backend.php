<link rel="stylesheet" href="../assets/css/backend.css">
<?php

if ( empty( $_POST ) ) {
    return;
}

// Posted data.
$name    = ( ! empty( $_POST['name'] ) ? $_POST['name'] : '' );
$email   = ( ! empty( $_POST['email'] ) ? $_POST['email'] : '' );
$date = date('d-m-y h:i:s');
$listSubsribers= array();

// Validation
$success = '';
$errors  = array();

if ( empty( $email )) {
    $errors['email_empty'] = 'POR FAVOR COMPLETE EL CAMPO EMAIL';
}elseif(filter_var($email,FILTER_VALIDATE_EMAIL)===false){
    $errors['email_format']='EL FORMATO DEL EMAIL ESTA MAL';
}else {
    include 'Subscriber.php';
    $subscriber= new Subscriber($name,$email,$date);?>
    <p >
        <?php
        $success = "Gracias por acceder, usuario: <BR> $subscriber";
        ?>
    </p>
<?php
        array_push($listSubsribers, $subscriber);
        subscribe($subscriber);
} ?>

<?php
/*
Funtion FILTER_VALIDATE_EMAIL to check the format of an email, returns true or false.
*/
  function subscribe($sub){
    //Nose muy bien que hacer esta funcion
    if($sub==null){?>
        <p class="red">
            Nose pudo subsribir el usuario
        </p>
<?php
    }else{ ?>
        <p class="green">
          Se suscribio con exito al usuario
        </p>
<?php
    }
}
