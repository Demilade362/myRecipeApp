<?php 
    include("config/db_connect.php");

    $sql = "SELECT id, email, title, summary FROM pizzas ORDER BY createAt";

    $result = mysqli_query($conn, $sql);
    $pizzas = mysqli_fetch_all($result, MYSQLI_ASSOC);

    mysqli_free_result($result);
    mysqli_close($conn);
?>
<?php include('header.php') ?>
<div class="container">
    <div class="row">
        <?php foreach($pizzas as $pizza): ?>
            <div class="col-lg-6">
                <div class="card mb-4">
                    <div class="card-header">Published By (<?php echo $pizza['email'] ?>)</div>
                    <div class="card-body">
                        <div class="card-title">
                        <h2><?php echo $pizza['title'] ?></h2>
                        </div>
                        <div class="card-content">
                            <p><?php echo $pizza['summary'] ?></p>
                        </div>
                    </div>
                    <div class="card-footer text-end">
                        <a href="details.php?id=<?php echo $pizza['id'] ?>" class="lead text-decoration-none">More Info</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
    
<?php include('footer.php') ?>




