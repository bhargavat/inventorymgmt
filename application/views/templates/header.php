<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <meta charset="utf-8">
        <title>BackRoom</title>
        <link rel="stylesheet" href="http://bootswatch.com/flatly/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-static-top" role="navigation"">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand"
                       href="<?php
                            if(isset($_SESSION['user_logged'])){
                                echo base_url()."user/profile";
                            }else{
                                echo base_url()."auth/login";
                            } ?>">BackRoom</a>
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" aria-expanded="false" data-target="#navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse id="navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="<?php echo base_url(); ?>about">About</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <?php
                            if(isset($_SESSION['user_logged'])){ //
                               $loginstatus = "Logout";
                               $loc = base_url()."auth/logout";
                               echo "<li><p class=\"navbar-text\">Welcome ".$_SESSION['firstname']."</p></li>";
                            }else{
                                $loginstatus = "Login";
                                $loc = base_url();
                            }
                        ?>
                        <li>
                            <a href="<?php echo $loc ?>">
                                <?php echo $loginstatus?>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">