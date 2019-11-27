<?php



class View
{

    public function render( $page )
    {
        include( 'templates/top.php' );
        include( "templates/$page.php" );
        include( 'templates/bottom.php' );
    }
}