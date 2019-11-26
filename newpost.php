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

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    </head>
    <body>
    <header>
        <!-- Fixed navbar -->
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <a class="navbar-brand" href="#">NSMB</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <br><br>
    <br><br>

        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <form method="POST" >
                        <label for="title" >Title: </label>
                        <input type="text" name="title" id="title" >

                        <br><br>

                        <label for="content" >Content: </label>
                        <input type="text" name="content" id="content" >

                        <br><br>

                        <input type="submit" name="submit" value="Submit" class="btn btn-success">
                    </form>
                </div>
            </div>
        </div>

    </body>
</html>



