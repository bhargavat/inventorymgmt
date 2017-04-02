<?php
$this->load->view('templates/header');
?>
<div class="col-lg-5 col-lg-offset-2">
    <h1>Profile Page:</h1>
    <?php if (isset($_SESSION['success'])) { ?>
        <div class="alert alert-success"> <?php echo $_SESSION['success']; ?></div>
        <?php
    } ?>

    HELLO, <?php echo $_SESSION['firstname'];?> <?php echo $_SESSION['lastname'];?>

    <br><br>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

<?php
$this->load->view('templates/footer');
?>