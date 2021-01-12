<?php 

include 'includes/form.php';

    if(isset($_GET['verification'])) {
        if($crud->edit_table_info('users','status',1,'user_id',$_SESSION['user_id'])) {

            header('location: profile.php?profile=1');
        }
    }
    $is_trader = false;

    if(isset($_SESSION['trader_id']))
    $is_trader = true;
?>
<!--
    CUSTOMER LOGIN SESSION VARIABLES
    $_SESSION['user_id']
    $_SESSION['username'];
    $_SESSION['is_admin'];
    $_SESSION['status'];

    TRADER LOGIN SESSION VAIRABLES
    $_SESSION['username'];
    $_SESSION['is_admin'];
    $_SESSION['status'];
    $_SESSION['user_id'];
    $_SESSION['trader_name'];
    $_SESSION['trader_status'];
    $_SESSION['trader_id'];
-->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <title>Ignite E-Commerce Portal</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="icon" href="favicon.ico" type="image/x-icon">
</head>
<body>

<header >
    <div class="container logo-search-bar">
        <div>
            <div class="burger-menu" onclick="myFunction(this)"><!--burger menu for small screens-->
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>
            <div class="header-logo">
                <a href="index.php"><img src="img/ignite-logo.png"/></a>
            </div>

        </div>

        <div class="search-profile">
            <form class="pd-6"  method="POST" action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>' enctype="multipart/form-data">
                <input class = "border bg" type="text" placeholder="Search...." name="data"/> 
                <button class= "btn-search" type="submit" name="search_submit"><i class="fas fa-search fa-lg"></i></button>
            </form>
            <?php if(isset($_SESSION['user_id'])) {
                ?>
                    <?php 
                    $user_info = $crud->check_column_data('users','user_id',$_SESSION['user_id']);

                    ?>
                    <div class="profile_container">
                    <div class="header__avatar" onclick="subnavtoggle(this)"><img src="<?php echo $user_info[0]['IMG']; ?>" alt=""><div><span>&#x25BC;</span></div></div>
                    <div class="header__dropdown">
                        <ul class="user__option">
                        <?php
                        if($trader_details=$crud->check_column_data('trader', 'user_id', $_SESSION['user_id'])) {
                            $trader_details = $trader_details[0];
                            if($trader_details['STATUS']) {
                                ?>
                                <li><a href="trader/trader_dashboard.php?">Dashboard</a></li>
                                <?php 
                            }

                        } ?>
                            <li><a href="profile.php">Profile</a></li>
                            <li><a href="login.php">Logout</a></li>
                        </ul>
                    </div>
        </div>
                <?php
            }?>

        </div>

    </div>
    <nav ><!--responsive nav-->
        <div class="navbar" id = "navbar">
            <div class="border bg">
                <ul class="container">
                    <li><a href="index.php"><i class="fas fa-home"> </i>&nbsp;HOME</a></li>
                     <li><a href="AboutUs.php">ABOUT US</a></li>
                    <li class="dropdown">
                        <a href="#" class="" onclick="subnavtoggle(this)">&nbsp;SHOPS
                            <span>&#x25BC;</span>
                        </a>
                        <!--submenu below-->
                        <ul class="submenu">
                        <?php 
                            if($shop_details = $crud->fetch_table_data('shop')) {
                                foreach($shop_details as $shop) {
                                    
                                    if($trader_details=$crud->check_column_data('trader', 'trader_id',$shop['TRADER_ID'])) {
                                        if($trader_details[0]['STATUS']) {
                                            ?>
                                            <li><a href="shop.php?shop_id=<?php echo $shop['SHOP_ID']; ?>"><?php echo strtoupper($shop['SHOP_NAME']); ?></a></li>
                                        <?php
                                        }
                                    }

                                }
                            }
                        ?>
                        </ul>
                    </li>
                    <?php
                    if(isset($_SESSION['user_id'])) {
                        ?>
                        <li><a href="cart.php"><i class="fas fa-cart-arrow-down">  </i>&nbsp;CART</a></li>
                        <li><a href="profile.php"><i class="fas fa-user-circle"> </i>&nbsp;PROFILE</a></li>
                        <?php
                        if(!$crud->check_column_data('trader', 'user_id', $_SESSION['user_id'])) {
                            ?>
                        <li><a href="trader/trader_register.php"><i class="far fa-id-card"> BE A SELLER</i></a></li>
                        <?php
                        }

                    }
                    ?>

                    <?php
  
                    ?>

                    <?php
                     if(!isset($_SESSION['user_id'])) { ?>
                        <li><a href="login.php">SIGN UP</a></li>
                    <?php
                    } ?>
                    <li><a href="contactus.php">CONTACT US</a></li>
    
    
                </ul>
            </div>

        </div>

    </nav>





