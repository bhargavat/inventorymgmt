
<?php $this->load->view("templates/header")?>
<ul class="nav nav-tabs nav-justified" xmlns="http://www.w3.org/1999/html">
    <li role="presentation">
        <a href="<?php echo base_url();?>user/profile">My Items</a>
    </li>
    <li role="presentation" class="active"><a href="<?php echo base_url();?>user/trends">Analysis</a></li>
</ul>
    <div>
        <h2>Trends</h2>
        <!--Your code here-->
        <div style="text-align:center;">
        <div class="btn-group">
            <button type="button" class="btn btn-primary">Daily</button>
            <button type="button" class="btn btn-primary">Weekly</button>
            <button type="button" class="btn btn-primary">Monthly</button>
            <button type="button" class="btn btn-primary">Quarterly</button>
        </div>
        <br><br>
        <form>
            <input type="date" name="week">
        </form>
        </div>
        <br>
        <p>
            <select name="trendType">
                <option value="">Select...</option>
                <option value="R">Revenue and Profit</option>
                <option value="S">Sales Totals</option>

            </select>
        </p>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Revenue and Profit by Day</h3>
        </div>
        <div style="text-align:center;">
        <a href="https://ibb.co/j8jPbQ"><img src="https://preview.ibb.co/bXVai5/Screen_Shot_2017_04_29_at_11_52_33_PM.png" alt="Screen_Shot_2017_04_29_at_11_52_33_PM" border="0"></a><br /><a target='_blank' href='https://imgbb.com/'></a><br />
    </div>
        </div>

    </div>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
<?php
$this->load->view('templates/footer');
?>