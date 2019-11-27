<?php

?>
<div class="container">
    <div class="row">
        <div class="col-sm">
           <h1>Home Page</h1>


            <a href="newpost.php" class="btn btn-success">+ New Post</a>
        </div>
    </div>
</div>


<div class="container">
    <?php
    require( 'pdo.php' );

    $data = array();

    $sql = "SELECT * FROM `19F_Posts`;  ";

    $statment = $pdo -> prepare( $sql );

    $statment -> execute( $data );

    while( $row = $statment -> fetch( ) )
    {
        //var_dump( $row );

        ?>
        <br>
        <div class="row">
            <div class="col-sm">
                <a href="index.php?post=<?php echo $row["post_id"]; ?>" ><?php echo $row["title"]; ?></a>
            </div>
        </div>
        <?php

    }
    ?>
</div>

