<?php
include("config/db_connect.php");
$email = '';
$title = '';
$summary = '';
$errors = array('email' => '', 'title' => '', 'summary' => '');
if (isset($_POST['submit'])) {
    if (empty($_POST['email'])) {
        $errors['email'] =  'Provide Your Email Please' . '<br />';
    } else {
        $email = $_POST['email'];
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'Provide a Valid Email Address';
        }
    }

    if (empty($_POST['title'])) {
        $errors['title'] = 'Please Provide a title For your Recipe' . '<br />';
    } else {
        $title = $_POST['title'];
        if (!preg_match('/^[a-zA-Z\s]+$/', $title)) {
            $errors['title'] =  'Title must contain letters and space';
        }
    }

    if (empty($_POST['summary'])) {
        $errors['summary'] = 'Please Tell Us About Your Recipe';
    } else {
        $summary = $_POST['summary'];
        if (!preg_match('/^[a-zA-Z\s]+$/', $summary)) {
            $errors['summary'] = 'Summary Must be letters and space only too';
        }
    }


    if (!($errors['email'] || $errors['title'] || $errors['summary'])) {
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $title = mysqli_real_escape_string($conn, $_POST['title']);
        $summary = mysqli_real_escape_string($conn, $_POST['summary']);

        $sql = "INSERT INTO pizzas(title, email, summary) VALUES('$title', '$email', '$summary')";

        if (mysqli_query($conn, $sql)) {
            header('location: index.php');
        } else {
            echo "Couldn't Post to Database " . mysqli_error($conn);
        }
    }
}

?>
<?php include('header.php') ?>
<h1 class="display-5 text-center mt-5 text-light-2">Add Recipe</h1>
<div class="extra-container mt-6 p-4 rounded bg-white">
    <form action="form.php" method="POST">
        <div class="input-group mb-3">
            <span class="input-group-text">@</span><input type="email" name='email' class="form-control" placeholder='Enter Email...' value='<?php echo $email ?>' />
        </div>
        <div class="text-danger mb-2">
            <?php echo $errors['email']; ?>
        </div>
        <input type="text" name='title' class="form-control mb-3" placeholder="Give A title to Your Recipe..." value='<?php echo $title ?>' />
        <div class="text-danger mb-2">
            <?php echo $errors['title'] ?>
        </div>
        <input type="text" name='summary' class="form-control mb-3" placeholder='Write About Recipe...' rows="10" cols="5" value='<?php echo $summary ?>' />
        <div class="text-danger mb-2">
            <?php echo $errors['summary'] ?>
        </div>
        <input type="submit" value="Submit Recipe" name='submit' class="btn btn-dark col-12 btn-lg z-depth-1">
    </form>
</div>
<?php include('footer.php') ?>