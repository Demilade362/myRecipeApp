<?php
include('config/db_connect.php');


if (isset($_POST['delete'])) {
    $id_to_delete = mysqli_real_escape_string($conn, $_POST['id_to_delete']);
    $sql = "DELETE FROM `pizzas` WHERE id = $id_to_delete";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header("Location: index.php");
    } else {
        die('Query Error' . mysqli_error($conn));
    }
}

if (isset($_GET['id'])) {
    $id = mysqli_real_escape_string($conn, $_GET['id']);
    $sql = "SELECT * FROM pizzas WHERE id = $id";

    $result = mysqli_query($conn, $sql);
    $pizza = mysqli_fetch_assoc($result);

    mysqli_free_result($result);
    mysqli_close($conn);
}

?>
<?php include('header.php') ?>
<div class="container text-center">
    <?php if ($pizza) : ?>
        <h2><?php echo htmlspecialchars($pizza['title']); ?></h2>
        <p>Created By: <?php echo htmlspecialchars($pizza['email']); ?></p>
        <p class="lead"><?php echo htmlspecialchars($pizza['summary']); ?></p>
        <p>Created At <?php echo date($pizza['createAt']); ?></p>

        <form action="details.php" method="POST">
            <input type="hidden" name="id_to_delete" value="<?php echo $_GET['id'] ?>">
            <input type="submit" name="delete" value="Delete Recipe" class="btn btn-danger btn-lg">
        </form>
    <?php else : ?>
        <div>
            <h5>No Such Pizzas Exists</h5>
            <span class="spinner-border mx-2"></span>
        </div>
    <?php endif; ?>
</div>
<?php include('footer.php') ?>