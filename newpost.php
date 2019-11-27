<?php
/**
 * newpost.php
 *
 * Chapter 17
 *
 * @category   Examples
 * @package    N/A
 * @author     Chad Banks <crbanks1@hfcc.edu>
 * @version    2019.11.26
 * @link       https://cislinux.hfcc.edu/~crbanks1/nsmb
 */

session_start();
$sid = session_id();

include( 'controller.php' );

include('view.php');
$view = new View();
$view -> render( 'new_post' );