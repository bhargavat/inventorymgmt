<?php $this->load->view("templates/header")?>
<ul class="nav nav-tabs nav-justified">
    <li role="presentation">
        <a href="<?php echo base_url();?>user/profile">My Items</a>
    </li>
    <li role="presentation" class="active"><a href="<?php echo base_url();?>user/trends">Analysis</a></li>
</ul>
    <div>
        <h2>Trends</h2>
        <!--Your code here-->
    </div>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<?php
$this->load->view('templates/footer');
?>