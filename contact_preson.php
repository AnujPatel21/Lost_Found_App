<?php
session_start();
$user_check=$_SESSION['login_user'];

if(!isset($_SESSION["login_user"])) {
    header("Location:login.php");
    session_destroy();
    exit();
}
date_default_timezone_set('America/Los_Angeles');

?>
<?php
error_reporting(-1);
ini_set('display_errors','On');
set_error_handler("var_dump");
?>


<!DOCTYPE html>
<html lang="en-US" data-main-object="ir.ui.view(248,)" data-oe-company-name="Lost and found"
      data-view-xmlid="website.lost-found" data-editable="1" data-website-id="1" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <title>Lost and Found</title>
    <link type="image/x-icon" rel="shortcut icon" href="/web/image/website/1/favicon/"/>



    <meta name="description" data-oe-id="221" data-oe-model="ir.ui.view" data-oe-field="arch" data-oe-xpath="/t[1]/t[1]/t[4]/meta[1]"/>
    <meta name="keywords" data-oe-id="221" data-oe-model="ir.ui.view" data-oe-field="arch" data-oe-xpath="/t[1]/t[1]/t[4]/meta[2]"/>
    <meta name="generator" content="Odoo" data-oe-id="221" data-oe-model="ir.ui.view" data-oe-field="arch" data-oe-xpath="/t[1]/t[1]/t[4]/meta[3]"/>

    <meta property="og:title" data-oe-id="221" data-oe-model="ir.ui.view" data-oe-field="arch" data-oe-xpath="/t[1]/t[1]/t[4]/meta[4]" content="Homepage"/>
    <meta property="og:site_name" data-oe-id="221" data-oe-model="ir.ui.view" data-oe-field="arch" data-oe-xpath="/t[1]/t[1]/t[4]/meta[5]" content="Lost and found"/>







    <link href="css/common_0.css" rel="stylesheet"/>

    <link href="css/frontend_0.css" rel="stylesheet"/>
    <link href="css/frontend_1.css" rel="stylesheet"/>

    <link href="css/summernote_0.css" rel="stylesheet"/>

    <link href="css/asset_0.css" rel="stylesheet"/>

    <link href="css/asset_1.css" rel="stylesheet"/>

    <!-- map css-->
    <link rel="stylesheet" href="css/campusmap.css" />
    <title>
        Campus Maps
    </title>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="_resources/js/GoogleAnalytics.js"></script>

    <script type="text/javascript">
        $(function () {
            //-----------------------
            //Initializes the Accordion
            //-----------------------
            $('div.accordion h3').collapsible();
        });
    </script>
    <!-- map css end-->

    <script  type="text/javascript" src="JS/web.assets_common.js"></script>

    <script  type="text/javascript" src="JS/web.assets_frontend.js"></script>

    <script  type="text/javascript" src="JS/web_editor.summernote.js"></script>

    <script  type="text/javascript" src="JS/web_editor.assets_editor.js"></script>

    <script  type="text/javascript" src="JS/website.assets_editor.js"></script>

    <!-- map script-->
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
    <script type="text/javascript" src="_resources/js/GoogleAnalytics.js"></script>
    <!-- map script-->
    <!--**** INTERACTIVE MAP JS *****-->
    <script type="text/javascript">
        document.documentElement.className = 'js';
    </script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script type="text/javascript">

        $(document).ready(function () {

            //Move panel offscreen when JS is enabled
            $(".slidePanel").addClass("offScreen");

            $('.location').click(function () {
                //event.preventDefault();

                var $lefty = $('.slidePanel');
                $lefty.animate({
                    left: 0 ? -$lefty.outerWidth() : 0
                });

                $('.slidePanel div').addClass('displayNone');

                var maplocation = this.id;

                //alert(maplocation);

                //**** Must use image map id ***//
                $('#div' + maplocation).removeClass('displayNone');
                return false;
            });

            $('.closeButton').click(function () {
                var $lefty = $('.slidePanel');
                $lefty.animate({
                    left: parseInt($lefty.css('left'), 10) == 0 ?
                        -$lefty.outerWidth() : 0
                });
            });

        });
    </script>
    <!--**** END OF INTERACTIVE MAP JS *****-->

</head>
<?php
$conn=mysqli_connect('localhost','root','');
$db=mysqli_select_db($conn, 'lostandfound') or die('Database doesnot exist');
?>


<body class="o_connected_user">
















<nav id="oe_main_menu_navbar" class="o_main_navbar">
</nav>
<div id="wrapwrap" class="homepage">
    <header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">

                <div class="collapse navbar-collapse navbar-top-collapse">
                    <ul class="nav navbar-nav navbar-right" id="top_menu">


                        <li>
                            <a href="index.php">
                                <span data-oe-model="website.menu" data-oe-id="2" data-oe-field="name" data-oe-type="char" data-oe-expression="submenu.name">Home</span>
                            </a>
                        </li>




                        <li>
                            <a href="Lost_item.php">
                                <span data-oe-model="website.menu" data-oe-id="4" data-oe-field="name" data-oe-type="char" data-oe-expression="submenu.name">Add Lost Item</span>
                            </a>
                        </li>




                        <li>
                            <a href="Found_item.php">
                                <span data-oe-model="website.menu" data-oe-id="5" data-oe-field="name" data-oe-type="char" data-oe-expression="submenu.name">Add Found Item</span>
                            </a>
                        </li>









                        <li>
                            <a href="faqs.php">
                                <span data-oe-model="website.menu" data-oe-id="6" data-oe-field="name" data-oe-type="char" data-oe-expression="submenu.name">FAQs</span>
                            </a>
                        </li>



                        <li>

                            <a href="logout.php">
                                <span data-oe-model="website.menu" data-oe-id="6" data-oe-field="name" data-oe-type="char" data-oe-expression="submenu.name">Logout</span>
                            </a>

                        </li>





                    </ul>
                </div>
            </div>
        </div>
    </header>
    <main>
        <?php
        if($_SESSION['login_user']!="")
        {
            $sql1= "SELECT * FROM user WHERE ID='$user_check'";
            $result1=mysqli_query($conn, $sql1);
            $row1 = mysqli_fetch_array($result1);
            $user0 =$row1["username"];
            $email = $row1["email"];

        }
        ?>
        <!--Email Functionality -->
        <?php
        if(isset($_POST['submit'])){



            $item1 = $_POST['item1'];
          //  $location1 = $_POST['loc'];
            $msg = $_POST['message'];
            $to = $_POST['recipient-email'];
            $from = $_POST['sender-email'];


           // echo "<script language='javascript' type='text/javascript'>alert('".$to."');</script>";
           $subject = 'item:'. $item1;
            $body = $msg;
           $headers = array("From:". $from, "Reply-To:".$to, "X-Mailer: PHP/".  PHP_VERSION);
            $headers = implode("\r\n", $headers);

           // echo "<script language='javascript' type='text/javascript'>alert('".$headers."');</script>";
           if( mail($to, $subject, $body, $headers)){
               echo "<script language='javascript' type='text/javascript'>alert('successful');</script>";
               echo "<script language='javascript' type='text/javascript'>document.location.href ='index.php';</script>";
           }
else{
    echo "<script language='javascript' type='text/javascript'>alert('unsuccessful');</script>";
}

        }
        ?>


        <div id="wrap" class="oe_structure oe_empty" data-oe-id="248" data-oe-model="ir.ui.view" data-oe-field="arch" data-oe-xpath="/t[1]/t[1]/div[1]">



            <?php

            $bid=$_GET['id'];

            $conn=mysqli_connect('localhost','root','') or die(mysql_errno());
            $db=mysqli_select_db($conn, 'lostandfound') or die('Database doesnot exist');


            $sql="SELECT * FROM lost_found WHERE id='$bid' ";
            $result=mysqli_query($conn, $sql);

            while($row2 = mysqli_fetch_array($result)) {
                $id = $row2['id'];
                $user = $row2['user_name'];
                $email = $row2['user_email'];
                $item = $row2['item'];
                $desc = $row2["description"];
                $key_point = $row2['key_point'];
                $location = $row2['location'];
                $situation = $row2['situation'];
                //echo $user.$email.$item.$desc.$key_point.$location.$situation;
            }

            ?>



            <div id="contact" style="width: 40%; margin-left: 30%; margin-top: 6%;border:1px #EEE solid;">
                <h3 align="center">Contact Form</h3>
                <form style="margin-left: 10px; margin-right: 10px" method="post">
                    <div class="form-group">
                        <label for="recipient-name" class="control-label"><?php echo $situation; ?> Item</label>
                        <input type="text" class="form-control" id="item" name="item1" value="<?php echo $item; ?>">
                        <input type="text" hidden="true" id="recipient-id">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="control-label">Description:</label>
                        <input type="text" class="form-control" id="desc" value="<?php echo $desc; ?>">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="control-label">Location:</label>
                        <input type="text" class="form-control" id="loc" name="loc" value="<?php echo $location; ?>">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="control-label">Message:</label>
                        <textarea class="form-control" name="message" id="message" required="required"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="control-label">Email To:</label>
                        <input type="text" class="form-control" id="recipient-email" name="recipient-email"  value="<?php echo $email; ?>">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="control-label">Email from:</label>
                        <input type="email" class="form-control" id="sender-email" name="sender-email">
                    </div>
<input type="submit" name="submit" class="btn btn-primary" style="margin-left: 40%; margin-bottom: 3%" value="submit"/>
                </form>

            </div>

        </div>

</main>
<footer>
    <div id="footer" class="container hidden-print">
        <div class="row">
            <div class="col-md-4 col-lg-3" data-oe-id="228" data-oe-model="ir.ui.view" data-oe-field="arch" data-oe-xpath="/data/xpath/div/div[1]/div[1]">
                <h4>Our Products &amp; Services</h4>
                <ul class="list-unstyled" id="products">
                    <li>
                        <a href="/">Home</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4  col-lg-3" id="info">
                <h4 data-oe-id="228" data-oe-model="ir.ui.view" data-oe-field="arch" data-oe-xpath="/data/xpath/div/div[1]/div[2]/h4[1]">Connect with us</h4>
                <ul class="list-unstyled" data-oe-id="228" data-oe-model="ir.ui.view" data-oe-field="arch" data-oe-xpath="/data/xpath/div/div[1]/div[2]/ul[1]">
                    <li>
                        <a href="http://www.fullerton.edu/">Contact us</a>
                    </li>
                </ul>
                <ul class="list-unstyled">
                    <li>

                        <span data-oe-model="res.company" data-oe-id="1" data-oe-field="email" data-oe-type="char" data-oe-expression="res_company.email">California State University, Fullerton</span>
                    </li>
                </ul>
                <h2>






                </h2>
            </div>
            <div class="col-md-4 col-lg-5 col-lg-offset-1">
                <h4>
                    <span data-oe-model="res.company" data-oe-id="1" data-oe-field="name" data-oe-type="char" data-oe-expression="res_company.name">Lost and found</span>
                    <small data-oe-id="228" data-oe-model="ir.ui.view" data-oe-field="arch" data-oe-xpath="/data/xpath/div/div[1]/div[3]/h4[1]/small[1]"> - <a href="/page/website.aboutus">About us</a></small>
                </h4>
                <div data-oe-id="228" data-oe-model="ir.ui.view" data-oe-field="arch" data-oe-xpath="/data/xpath/div/div[1]/div[3]/div[1]">
                    <p>
                        We are a team of passionate people whose goal is to improve everyone's
                        life through disruptive products. We build great products to solve your
                        business problems.
                    </p>
                    <p>
                        Our products are designed for small to medium size companies willing to optimize
                        their performance.
                    </p>
                </div>

                <ul class="list-inline js_language_selector mt16">
                    <li>
                        <a class="js_change_lang" href="/en_US/page/lost-found" data-default-lang="true" data-lang="en_US">
                            English
                        </a>
                    </li>
                    <li>

                        <a data-oe-id="227" data-oe-model="ir.ui.view" data-oe-field="arch" data-oe-xpath="/t[1]/ul[1]/li[2]/a[1]" href="/web#action=base.action_view_base_language_install&amp;website_id=1&amp;url_return=/[lang]/page/lost-found?">
                            <i class="fa fa-plus-circle"></i>
                            Add a language...
                        </a>
                    </li>
                </ul>

            </div>
        </div>
    </div>
    <div class="container mt16 mb8">

        <div class="pull-left text-muted" itemscope="itemscope" itemtype="http://schema.org/Organization">
            Copyright &copy; <span data-oe-model="res.company" data-oe-id="1" data-oe-field="name" data-oe-type="char" data-oe-expression="res_company.name" itemprop="name">Lost and found</span>
        </div>
    </div>
</footer>
</div>
<div class="modal" id="o_website_add_page_modal" data-oe-id="253" data-oe-xpath="/data/xpath[3]/div" data-oe-model="ir.ui.view" data-oe-field="arch">
    <div class="modal-dialog modal-lg">
        <ul>
            <li><a href="#" data-action="new_page"><i class="fa fa-file-o"></i><p>New Page</p></a></li>
        </ul>
    </div>
</div>


</body>
</html>


