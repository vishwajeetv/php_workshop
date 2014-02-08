

<?php include 'header.php' ?>
<?php

require 'database.php';

$newsFeedQuery = "SELECT title, description, created_on FROM news";

$newsFeedResult = mysqli_query( $connection , $newsFeedQuery);

?>

<div id="container">
    <div class="jumbotron">
        <h1 class="text-center">News Feed</h1>

    </div>
    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-lg-6" id="newsContainer">

            <?php while ($row = mysqli_fetch_array( $newsFeedResult ))
            {
                ?>

                <div class="news">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h2 class="panel-title"><?php echo $row['title'];?></h2>
                        </div>
                        <div class="panel-body">
                            <?php echo $row['description'];?>
                        </div>
                        <div class="panel-footer">
                            <?php echo $row['created_on'];?>
                        </div>
                    </div>
                </div>
            <?php  } ?>

        </div>
        <div class="col-lg-3"></div>
    </div>
</div>
<?php mysqli_free_result($newsFeedResult);?>
<?php include 'footer.php'; ?>
