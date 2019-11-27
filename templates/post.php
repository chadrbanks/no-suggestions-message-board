
<div class="container">
    <div class="row">
        <div class="col-sm">
            <a href="index.php" class="btn btn-info">Back</a>




            <?php

            require( 'pdo.php' );

            $data = array( 'post' => $_GET['post'] );

            $sql = "SELECT * FROM `19F_Posts` WHERE `post_id` = :post LIMIT 1;  ";

            $statment = $pdo -> prepare( $sql );

            $statment -> execute( $data );

            $post = $statment -> fetch( );

            //var_dump($post);

            ?>

            <h1><?php echo $post['title']; ?></h1>

            <p><?php echo $post['content']; ?></p>
        </div>
    </div>
</div>



<div class="container" style="border:1px solid black;">
    <div class="row">
        <div class="col-sm">
            <form method="POST" >

                <br><br>

                <label for="comment" >Comment: </label>
                <input type="text" name="comment" id="comment" >

                <br><br>

                <input type="hidden" name="post_id" value="<?php echo $post['title']; ?>" >
                <input type="submit" name="submit" value="Comment" class="btn btn-success">
            </form>
        </div>
    </div>
</div>