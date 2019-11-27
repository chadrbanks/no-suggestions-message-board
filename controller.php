<?php


if( isset( $_POST ) && count( $_POST ) > 0 )
{
    require( 'pdo.php' );

    $data = array(
        'title' => $_POST['title'],
        'content' => $_POST['content'],
        'author' => $sid
    );

    $sql = "INSERT INTO `19F_Posts` (`post_id`, `title`, `content`, `author`, `created_date`)
                VALUES( NULL, :title, :content, :author, NOW() );    ";

    $statment = $pdo -> prepare( $sql );

    $statment -> execute( $data );

    header( 'Location: index.php' );
    die;
}