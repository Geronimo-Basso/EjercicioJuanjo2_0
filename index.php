<?php

include 'src/functions.php';
include 'src/backend.php';

my_header( 'My title' );

//Another way, not recommend by Juanjo
//global $errors;
//global $success;
//
//check_errors($errors);
//check_success($success);

/* Checking some git stuff


 This change is from working on branch dev2.0.


 * */

if(isset($errors)){
    check_errors($errors);}

if(isset($success)){
    check_success($success);
}
?>
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

<?php
my_footer();
