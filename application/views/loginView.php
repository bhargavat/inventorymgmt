<div class="jumbotron vertical-center" id="loginform">
    <?php echo validation_errors(); ?>
    <?php echo form_open('VerifyLogin'); ?>
        <h3 class="header">Login</h3>
        <label for="email">Email</label><br>
        <input type="text" size="30" name="email" class="form-control" placeholder="Email"><br>
        <label for="pwd">Password</label><br>
        <input type="password" size="30" name="pwd" class="form-control" placeholder="Password"><br><br>
        <input class="btn btn-default" type="submit" value="Login">
 </div>