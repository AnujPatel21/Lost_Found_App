<!DOCTYPE html>
<html lang="en-US" data-main-object="ir.ui.view(248,)" data-oe-company-name="Lost and found" data-view-xmlid="website.lost-found" data-editable="1" data-website-id="1">
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


    <script  type="text/javascript" src="JS/web.assets_common.js"></script>

    <script  type="text/javascript" src="JS/web.assets_frontend.js"></script>

    <script  type="text/javascript" src="JS/web_editor.summernote.js"></script>

    <script  type="text/javascript" src="JS/web_editor.assets_editor.js"></script>

    <script  type="text/javascript" src="JS/website.assets_editor.js"></script>

    <!-- slider -->
    <script src="http://code.jquery.com/jquery-2.1.1.js"></script>
    <script>

        $(document).ready(function() {
            $(".toggle-trigger").click(function() {
                $(this).parent().nextAll('.toggle-wrap').first().toggle('slow');
                // $(this).val("Read less");
            });
        });
    </script>
    <style>
        .toggle-wrap{
            display:none;
        }
    </style>
    <!-- slider end -->
</head>
<?php
$conn=mysqli_connect('127.0.0.1','root','mysql');
$db=mysqli_select_db($conn, 'cloud') or die('Database doesnot exist');
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



                        <!-- <li class="divider"></li>
                         <li class="dropdown">
                             <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                 <b>
                                     <span>jinal patel</span>
                                     <span class="caret"></span>
                                 </b>
                             </a>
                             <ul class="dropdown-menu js_usermenu" role="menu">
                                 <li id="o_logout"><a role="menuitem" href="/web/session/logout?redirect=/">Logout</a></li>
                             </ul>
                         </li>-->


                    </ul>
                </div>
            </div>
        </div>
    </header>
    <main>


        <div id="wrap" class="oe_structure oe_empty" data-oe-id="248" data-oe-model="ir.ui.view" data-oe-field="arch" data-oe-xpath="/t[1]/t[1]/div[1]">
            <section class="s_text_block_image_fw oe_img_bg oe_custom_bg">
                <style>
                    .s_text_block_image_fw{
                        background-image: url("images/csuf-seal2.jpg");
                    }

                </style>
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 mt64 mb64 bg-black-75">
                            <h2 style="font-size:62px">Lost &amp; Found</h2>
                            <h4 class="text-muted">&nbsp;</h4>
                            <p>Lost and Found is a cloud based web app for California State University, Fullerton by allowing a person to report a lost or found items.</p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- List lost and found -->
            <section class="s_feature_grid" style="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 col-md-offset-1">
                            <div class="col-md-12 mt16 mb16">
                                <h3 class="mb0">Lost Items</h3>
                                <h3 class="mb0">
                                    <br/>
                                </h3>
                            </div>
                            <!--list of lost items -->
                            <?php
                            $sql = "SELECT * FROM lost_found where situation = 'Lost'";
                            $res = mysqli_query($conn, $sql);

                            while($row2 = mysqli_fetch_array($res)) {
                            $id = $row2['id'];
                            $user = $row2['user_name'];
                            $email = $row2['user_email'];
                            $item = $row2['item'];
                            $desc = $row2["description"];
                            $key_point = $row2['key_point'];
                            $location = $row2['location'];

                            ?>

                            <div class="col-md-12">
                        <span style="min-width: 45px; " class="pull-left mb16 fa fa-thumbs-o-down fa-2x" title=""><img
                                src="images/thumbs-down.png" width="50" height="50" alt="thumbs down"></span>
                                <a href="#"><h4 class="mt0 mb0" style="text-transform: capitalize"><?php echo $item; ?></h4>
                                    <p style="text-transform: capitalize"><?php echo $desc; ?></p>
                                </a>
                                <p><a class="toggle-trigger">Read More..</a><p>
                                    <div class="toggle-wrap" style="margin-left: 14%">
                                        <div class="style-single">
                                <p style="text-transform: capitalize">Key Point: <?php echo $key_point; ?></p>
                                <p style="text-transform: capitalize">Location: <?php echo $location; ?></p>
                                <p><a href="contact_preson.php?id=<?php echo $id; ?>">Contact Person</a> </p>
                            </div>
                        </div>
                        <br/>

                    </div>

                    <?php
                    }
                    ?>
                    <!--list of lost items end -->
                </div>
                <div class="col-md-5">
                    <div class="col-md-12 mt16 mb16">
                        <h3 class="mb0">Found Items</h3>
                        <h3 class="mb0">
                            <br/>
                        </h3>
                    </div>
                    <!--list of found items -->
                    <?php
                    $sql = "SELECT * FROM lost_found where situation = 'Found'";
                    $res = mysqli_query($conn, $sql);

                    while($row2 = mysqli_fetch_array($res)) {
                    $id = $row2['id'];
                    $user = $row2['user_name'];
                    $email = $row2['user_email'];
                    $item = $row2['item'];
                    $desc = $row2["description"];
                    $key_point = $row2['key_point'];
                    $location = $row2['location'];

                    ?>

                    <div class="col-md-12">
                        <span style="min-width: 45px" class="pull-left mb16 fa fa-thumbs-o-up fa-2x" data-original-title="" title=""><img src="images/thumbs-up.png" width="50" height="50" alt="thumbs up"></span>
                        <a href="#"><h4 class="mt0 mb0" style="text-transform: capitalize"><?php echo $item; ?></h4>
                            <p style="text-transform: capitalize"><?php echo $desc; ?></p>
                        </a>
                        <p ><a class="toggle-trigger" >Read More..</a><p>
                            <div class="toggle-wrap" style="margin-left: 14%">
                                <div class="style-single">
                        <p style="text-transform: capitalize">Location: <?php echo $location; ?></p>
                        <p><a href="contact_preson.php?id=<?php echo $id; ?>">Contact Person</a> </p>

                    </div>
                </div>
                <br/>


        </div>

        <?php

        }
        ?>
        <!--list of found items end -->


                        </div>
                    </div>
                </div>
            </section>
            <!-- List of lost and found end -->
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


