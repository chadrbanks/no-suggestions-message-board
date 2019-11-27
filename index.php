<?php

session_start();
$sid = session_id();

include( 'controller.php' );

$page = 'home';

if( isset( $_GET['post'] ) )
{
    $page = 'post';
}

include('view.php');
$view = new View();
$view -> render( $page );

?>


