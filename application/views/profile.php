<?php
$this->load->view('templates/header');
?>
<div>
<!--    <h1>Welcome --><?php //echo $_SESSION['firstname'];?><!-- --><?php //echo $_SESSION['lastname'];?><!--</h1>-->
    <?php if (isset($_SESSION['success'])) { ?>
        <div class="alert alert-success"> <?php echo $_SESSION['success']; ?></div>
        <?php
    } ?>

    <ul class="nav nav-tabs nav-justified">
        <li role="presentation" class="active">
            <a href="<?php echo base_url();?>user/profile">My Items</a>
        </li>
        <li role="presentation"><a href="<?php echo base_url();?>user/trends">Analysis</a></li>
    </ul>
</div>
<div>
    <h2>Items</h2>
</div>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>

<?php
$this->load->view('templates/footer');
?>