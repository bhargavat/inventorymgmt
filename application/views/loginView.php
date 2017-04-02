<div class="jumbotron vertical-center" id="loginform">
    <h3 class="header">Login</h3>
    <?php echo form_open('VerifyLogin'); ?>
        <label for="email">Email</label><br>
        <input type="text" size="30" name="email" class="form-control" placeholder="Email"><br>
        <label for="pwd">Password</label><br>
        <input type="password" size="30" name="password" class="form-control" placeholder="Password"><br>
    <?php echo validation_errors(); ?>
        <input class="btn btn-default" type="submit" value="Login">
    </form>
 </div>