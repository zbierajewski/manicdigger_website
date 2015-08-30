<?php
$loggedIn = false;
$username = null;
session_start();
if(isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    $loggedIn = true;
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="A layout example that shows off a responsive pricing table.">

    <title>Manic Digger</title>

    


<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">



<!--[if lte IE 8]>
  
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-old-ie-min.css">
  
<![endif]-->
<!--[if gt IE 8]><!-->
  
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/grids-responsive-min.css">
  
<!--<![endif]-->





  
    <!--[if lte IE 8]>
        <link rel="stylesheet" href="css/layouts/pricing-old-ie.css">
    <![endif]-->
    <!--[if gt IE 8]><!-->
        <link rel="stylesheet" href="css/layouts/pricing.css">
    <!--<![endif]-->
  






</head>
<body>
<div class="the_menu pure-menu pure-menu-horizontal login_menu">
        <!--<a href="#" class="pure-menu-heading">Your Logo</a>-->
        <ul class="pure-menu-list" style="color: #ffffff;">
            <?php if($loggedIn) {?>
                <li class="pure-menu-item">Hello <?php echo $username; ?></li>
                <li class="pure-menu-item" style="color: #ffffff;"><a href="/servers/" class="pure-menu-link">Server List</a></li>
                <li class="pure-menu-item" style="color: #ffffff;"><a href="/servers/logoutuser.php?action=manual_link&link=http://manicdigger.org/index.php" class="pure-menu-link">Log Out</a></li>
            <?php } else { ?>
            <li class="pure-menu-item" style="color: #ffffff;"><form id="login" action="/servers/loginuser.php?action=manual_link" class="form-inline login-form login_toggle_link" method="post">
                    <input name="username" type="text" class="input-small" placeholder="Username" />
                    <input name="password" type="password" class="input-small" placeholder="Password" />
                    <label class="checkbox">
                        <input name="rememberme" type="checkbox" /> Remember me
                    </label>
                    <button type="submit" name="submit" class="btn btn-primary">Sign in</button>
                </form>></li>
            <?php } ?>
        </ul>
    </div>
<!--<ul class="cb-slideshow">
    <li><span>Image 01</span><div></div></li>
    <li><span>Image 02</span><div></div></li>
    <li><span>Image 03</span><div></div></li>
    <li><span>Image 04</span><div></div></li>
    <li><span>Image 05</span><div></div></li>
    <li><span>Image 06</span><div></div></li>
</ul>-->




<div class="banner pure-menu-item">
    <h1 class="banner-head">
        Manic Digger<br>
    </h1>
</div>
<center><div class="the_menu pure-menu pure-menu-horizontal">
    <!--<a href="#" class="pure-menu-heading">Your Logo</a>-->
    <ul class="pure-menu-list" style="color: #ffffff;">
        <li class="pure-menu-item" style="color: #ffffff;"><a href="#" class="pure-menu-link">Home</a></li>
        <li class="pure-menu-item" style="color: #ffffff;"><a href="#" class="pure-menu-link">Menu Button 1</a></li>
        <li class="pure-menu-item" style="color: #ffffff;"><a href="#" class="pure-menu-link">Menu Button 2</a></li>
    </ul>
</div></center>
<div class="l-content">
    <div class="pricing-tables pure-g">
        <div class="pure-u-1 pure-u-md-1-3">
            <div class="pricing-table pricing-table-free">
                <div class="pricing-table-header">
                    <span class="pure-menu-item"><a href="#" style="font-size: 19pt;" class="pure-button pure-button-primary">Download</a></span>

                    <span class="pricing-table-price">
                        <!--$5 <span>per month</span>-->
                    </span>
                </div>

                <!--<ul class="pricing-table-list">
                    <li>Free setup</li>
                    <li>Custom sub-domain</li>
                    <li>Standard customer support</li>
                    <li>1GB file storage</li>
                    <li>1 database</li>
                    <li>Unlimited bandwidth</li>
                </ul>

                <button class="button-choose pure-button">Choose</button>-->
            </div>
        </div>

        <div class="pure-u-1 pure-u-md-1-3">
            <div class="pricing-table pricing-table-biz pricing-table-selected">
                <div class="pricing-table-header">
                    <h2></h2>

                    <span class="pricing-table-price">
                        <span></span>
                    </span>
                </div>

                <!--<ul class="pricing-table-list">
                    <li>Free setup</li>
                    <li>Use your own domain</li>
                    <li>Standard customer support</li>
                    <li>10GB file storage</li>
                    <li>5 databases</li>
                    <li>Unlimited bandwidth</li>
                </ul>

                <button class="button-choose pure-button">Choose</button>-->
            </div>
        </div>

        <div class="pure-u-1 pure-u-md-1-3">
            <div class="pricing-table pricing-table-enterprise">
                <div class="pricing-table-header">
                    <span class="pure-menu-item"><a href="/servers/" style="font-size: 19pt;" class="pure-button pure-button-primary">Multiplayer Servers</a></span>

                    <span class="pricing-table-price">
                        <!--$45 <span>per month</span>-->
                    </span>
                </div>

                <!--<ul class="pricing-table-list">
                    <li>Free setup</li>
                    <li>Use your own domain</li>
                    <li>Premium customer support</li>
                    <li>Unlimited file storage</li>
                    <li>25 databases</li>
                    <li>Unlimited bandwidth</li>
                </ul>

                <button class="button-choose pure-button">Choose</button>-->
            </div>
        </div>
    </div> <!-- end pricing-tables -->

    <!--<div class="information pure-g">
        <div class="pure-u-1 pure-u-md-1-2">
            <div class="l-box">
                <h3 class="information-head">Get started today</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
                </p>
            </div>
        </div>

        <div class="pure-u-1 pure-u-md-1-2">
            <div class="l-box">
                <h3 class="information-head">Pay monthly or annually</h3>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse.
                </p>
            </div>
        </div>

        <div class="pure-u-1 pure-u-md-1-2">
            <div class="l-box">
                <h3 class="information-head">24/7 customer support</h3>
                <p>
                    Cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                </p>
            </div>
        </div>

        <div class="pure-u-1 pure-u-md-1-2">
            <div class="l-box">
                <h3 class="information-head">Cancel your plan anytime</h3>
                <p>
                    Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </div>
        </div>
    </div> <!-- end information -->
</div> <!-- end l-content -->

<div class="footer l-box">
    <p>
        This is the footer. Don't judge me.
    </p>
</div>




</body>
</html>
