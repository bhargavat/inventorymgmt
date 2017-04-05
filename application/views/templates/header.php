<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <meta charset="utf-8">
        <title>BackRoom</title>
        <link rel="stylesheet" href="http://bootswatch.com/flatly/bootstrap.min.css">
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
        <style> .navbar-toggle{  border: none;  }</style>
    </head>
    <body>
        <nav class="navbar navbar-inverse" role="navigation"">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand"
                       href="<?php
                       if(isset($_SESSION['user_logged'])){ //dynamically change Backroom button location based on login status
                           echo base_url()."user/profile";
                       }else{
                           echo base_url()."auth/login";
                       } ?>">BackRoom
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="<?php echo base_url(); ?>about">About</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <?php
                            if(isset($_SESSION['user_logged'])){ //if user is logged in, display logout button
                               $loginstatus = "Logout";
                               $loc = base_url()."auth/logout";
                               echo "<li><p class=\"navbar-text hidden-xs\">
                                            Welcome ".$_SESSION['firstname']."
                                         </p>
                                     </li>";
                            }else{ //if user logged out, display login button
                                $loginstatus = "Login";
                                $loc = base_url()."auth/login";
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