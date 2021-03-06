<!---->
<!--<!DOCTYPE html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="utf-8">-->
<!--    <meta http-equiv="X-UA-Compatible" content="IE=edge">-->
<!--    <meta name="viewport" content="width=device-width, initial-scale=1">-->
<!--    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<!--    <title>Register</title>-->
<!---->
<!--    <!-- Bootstrap -->
<!--    <link href="--><?php //echo base_url();?><!--assets/css/bootstrap.min.css" rel="stylesheet">-->
<!---->
<!--    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!--    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--    <!--[if lt IE 9]>-->
<!--    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>-->
<!--    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>-->
<!--    <![endif]-->
<!--</head>-->
<!--<body>-->

<div class="jumbotron vertical-center">
    <h2>Register</h2><br>
    <?php if (isset($_SESSION['success'])) { ?>
        <div class="alert alert-success"> <?php echo $_SESSION['success']; ?></div>
        <?php
    } ?>
    <?php echo validation_errors('<div class="alert alert-danger">', '</div>'); ?>
    <form action="" method="POST">
        <div class="form-group">
            <label for="username">Username:</label>
            <input class="form-control" name="username" id="username" type="text">
        </div>
        <div class="form-group">
            <label for="firstname">First Name:</label>
            <input class="form-control" name="firstname" id="firstname" type="text">
        </div>
        <div class="form-group">
            <label for="lastname">Last Name:</label>
            <input class="form-control" name="lastname" id="lastname" type="text">
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input class="form-control" name="password" id="password" type="password">
        </div>

        <div class="form-group">
            <label for="">Confirm Password:</label>
            <input class="form-control" name="confirmpass" id="confirmpass" type="password">
        </div>

        <div>
            <button class="btn btn-primary" name="register">Register</button>
        </div>
    </form>
</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
<!--</body>-->
<!--</html>-->