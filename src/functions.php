<?php

function my_header( $title ) {
	include 'views/header.php';
}

function my_footer() {
	include 'views/footer.php';
}

function get_style_url( $filename ) {
	return  '../assets/css/' . $filename;
}
