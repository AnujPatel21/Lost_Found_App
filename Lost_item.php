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
                            <a href="/page/contactus">
                                <span data-oe-model="website.menu" data-oe-id="3" data-oe-field="name" data-oe-type="char" data-oe-expression="submenu.name">Contact us</span>
                            </a>
                        </li>




                        <li>
                            <a href="#">
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


        <div id="wrap" class="oe_structure oe_empty" data-oe-id="248" data-oe-model="ir.ui.view" data-oe-field="arch" data-oe-xpath="/t[1]/t[1]/div[1]">
            <section class="s_text_block_image_fw oe_img_bg oe_custom_bg">
                <div id="main" class="copy">
                    <p align="center">
                        <div id="slideleft" class="slide">
                            <img src="images/CSUF-map.jpg" width="940" height="556" alt="Campus Map" usemap="#image_map"
                                 border="1" />
                            <map name="image_map" id="image_map">
                                <area id="AF" class="location" title="Anderson Field (AF)" alt="Anderson Field (AF)" shape="poly" coords=" 637,111, 659,111, 660,128, 638,130, 636,114"
                                      href="#" />
                                <area id="B" class="location" title="Bookstore/Titan shops (B)" alt="Bookstore/Titan shops (B)" shape="poly"
                                      coords=" 358,208, 378,207, 378,224, 360,224, 359,213, 359,211" href="#" />
                                <area id="BA" class="location" title="Becker Amphitheater (BA)" alt="Becker Amphitheater (BA)" shape="poly"
                                      coords=" 308,233, 330,234, 330,250, 306,252, 306,238, 307,234" href="#" />
                                <area id="CC" class="location" title="Children's Center (CC)" alt="Children's Center (CC)" shape="poly"
                                      coords=" 441,38, 461,39, 462,59, 440,60, 441,43, 440,41" href="#" />
                                <area id="CP" class="location" title="College Park (CP)" alt="College Park (CP)" shape="poly" coords=" 346,462, 368,462, 369,485, 348,485, 348,468"
                                      href="#" />
                                <area id="CPAC" class="location" title="Clayes Performing Arts Center (CPAC)" alt="Clayes Performing Arts Center (CPAC)"
                                      shape="poly" coords=" 301,269, 323,269, 323,290, 301,291, 301,273" href="#" />
                                <area id="CY" class="location" title="Corporation Yard (CY)" alt="Corporation Yard (CY)" shape="poly"
                                      coords=" 344,100, 366,100, 367,123, 344,121, 344,105" href="#" />
                                <area id="CS" class="location" title="Computer Science (CS)" alt="Computer Science (CS)" shape="poly"
                                      coords=" 626,273, 645,273, 645,294, 623,294, 625,279, 623,273" href="#" />
                                <area id="DBH" class="location" title="Dan Black Hall (DBH)" alt="Dan Black Hall (DBH)" shape="poly"
                                      coords=" 270,351, 291,351, 292,371, 270,371, 270,357, 270,354" href="#" />
                                <area id="E" class="location" title="Engineering (E)" alt="Engineering (E)" shape="poly" coords=" 583,263, 605,261, 607,282, 582,281, 584,266"
                                      href="#" />
                                <area id="EC" class="location" title="Education Classroom (EC)" alt="Education Classroom (EC)" shape="poly"
                                      coords=" 477,276, 498,275, 501,294, 476,295, 476,276" href="#" />
                                <area id="EPS" class="location" title="Eastside Parking Structure (EPS)" alt="Eastside Parking Structure (EPS)"
                                      shape="poly" coords=" 592,386, 613,387, 614,406, 593,406, 591,386" href="#" />
                                <area id="G" class="location" title="Golleher Alumni House" alt="Golleher Alumni House" shape="poly"
                                      coords=" 239,135, 259,135, 261,157, 242,157, 238,156, 237,139, 238,137" href="#" />
                                <area id="GF" class="location" title="Goodwin Field (GF)" alt="Goodwin Field (GF)" shape="poly" coords=" 662,60, 686,59, 687,78, 663,78, 663,63"
                                      href="#" />
                                <area id="H" class="location" title="Humanities-Social Sciences (H)" alt="Humanities-Social Sciences (H)"
                                      shape="poly" coords=" 445,308, 466,307, 468,328, 444,328, 442,311" href="#" />
                                <area id="KHS" class="location" title="Kinesiology & Health Science (KHS)" alt="Kinesiology & Health Science (KHS)"
                                      shape="poly" coords=" 466,206, 488,205, 490,226, 465,226, 466,209" href="#" />
                                <area id="LH" class="location" title="Langsdorf Hall (LH)" shape="poly" alt="Langsdorf Hall (LH)" shape="poly"
                                      coords=" 344,363, 367,363, 367,383, 346,382, 343,363" href="#" />
                                <area id="MH" class="location" title="McCarthy Hall (MH)" shape="poly" alt="McCarthy Hall (MH)" shape="poly"
                                      coords=" 330,322, 351,323, 353,342, 331,343, 329,322" href="#" />
                                <area id="P" class="location" title="Parking and Transportation Office (P)" alt="Parking and Transportation Office (P)"
                                      shape="poly" coords=" 375,68, 396,68, 396,88, 378,89, 375,71" href="#" />
                                <area id="RH" class="location" title="Residence Halls (RH)" alt="Residence Halls (RH)" shape="poly" coords=" 798,156, 819,155, 819,173, 799,174, 797,157"
                                      href="#" />
                                <area id="PL" class="location" title="Pollak Library (PL)" alt="Pollak Library (PL)" shape="poly" coords=" 421,250, 442,250, 442,270, 422,270, 420,252"
                                      href="#" />
                                <area id="RGC" class="location" title="Ruby Gerontology Center (RGC)" alt="Ruby Gerontology Center (RGC)"
                                      shape="poly" coords=" 645,211, 665,210, 667,228, 645,230, 645,227, 643,212" href="#" />
                                <area id="SHCC" class="location" title="Student Health and Counseling Center (SHCC)" alt="Student Health and Counseling Center (SHCC)"
                                      shape="poly" coords=" 559,217, 583,217, 583,234, 560,237, 560,222" href="#" />
                                <area id="SGMH" class="location" title="Steven G. Mihaylo Hall (SGMH)" alt="Steven G. Mihaylo Hall (SGMH)"
                                      shape="poly" coords=" 417,423, 441,422, 441,445, 415,444, 418,428" href="#" />
                                <area id="SH" class="location" title="Student Housing (SH)" alt="Student Housing (SH)" shape="poly" coords=" 700,236, 723,235, 724,255, 700,254, 699,236"
                                      href="#" />
                                <area id="SRC" class="location" title="Student Rec Center (SRC)" alt="Student Rec Center (SRC)" shape="poly"
                                      coords=" 367,151, 389,152, 388,170, 368,168, 367,154" href="#" />
                                <area id="TG" class="location" title="Titan Gymnasium (TG)" alt="Titan Gymnasium (TG)" shape="poly" coords=" 455,174, 479,171, 479,192, 455,192, 453,176, 450,176"
                                      href="#" />
                                <area id="TH" class="location" title="Titan House (TH)" alt="Titan House (TH)" shape="poly" coords=" 599,180, 620,180, 620,197, 599,198, 598,183"
                                      href="#" />
                                <area id="TS" class="location" title="Titan Stadium (TS)" alt="Titan Stadium (TS)" shape="poly" coords=" 544,54, 564,54, 566,72, 545,71, 542,56"
                                      href="#" />
                                <area id="TSU" class="location" title="Titan Student Union (TSU)" alt="Titan Student Union (TSU)" shape="poly"
                                      coords=" 279,184, 302,185, 302,202, 281,203, 278,186" href="#" />
                                <area id="UH" class="location" title="University Hall (UH)" alt="University Hall (UH)" shape="poly" coords=" 402,342, 423,340, 425,361, 399,360, 402,346"
                                      href="#" />
                                <area id="UP" class="location" title="University Police (UP)" alt="University Police (UP)" shape="poly"
                                      coords=" 267,108, 290,108, 290,125, 268,125, 266,109" href="#" />
                                <area id="VA" class="location" title="Visual Arts (VA)" alt="Visual Arts (VA)" shape="poly" coords=" 191,232, 213,232, 213,251, 191,250, 190,233"
                                      href="#" />
                                <area id="NPS" class="location" title="Nutwood Parking Structure (NPS)" alt="Nutwood Parking Structure (NPS)"
                                      shape="poly" coords=" 124,288, 148,287, 149,303, 124,307, 126,291" href="#" />
                                <area id="SCPS" class="location" title="State College Parking Structure (SCPS)" alt="State College Parking Structure (SCPS)"
                                      shape="poly" coords=" 317,126, 339,125, 339,141, 320,143, 316,128" href="#" />
                            </map>
                            <div class="slidePanel">
                                <input type="button" class="closeButton" value="Close" />
                                <div id="divAF">
                                    <h3>Anderson Field</h3>
                                    <label>Item Name:</label><input type="text" name="lost_item" id="lost_item">
                                    <label>Description:</label><textarea name="desc" id="desc"></textarea>
                                    <label>Key point:</label><input type="text" name="key_point" id="key_point">
                                    <label>Location:</label><input type="text" name="location" id="location" value="Anderson Field"><br/>
                                    <input type="submit" value="Add" id="submit" name="submit" style="margin-top: 5px">

                                </div>
                                <div id="divB">

                                    <h3 style="margin-top: 20%">Bookstore/Titan Shops</h3>
                                    <label>Item Name:</label><input type="text" name="found_item" id="lost_item">
                                    <label>Description:</label><textarea name="desc" id="desc"></textarea>
                                    <label>Key point:</label><input type="text" name="key_point" id="key_point">
                                    <label>Location:</label><input type="text" name="location" id="location" value="Bookstore/Titan Shops"><br/>
                                    <input type="submit" value="Add" id="submit" name="submit" style="margin-top: 5px">
                                </div>

                                <div id="divBA">

                                    <h3 style="margin-top: 20%">Becker Amphitheater</h3>
                                    <label>Item Name:</label><input type="text" name="found_item" id="lost_item">
                                    <label>Description:</label><textarea name="desc" id="desc"></textarea>
                                    <label>Key point:</label><input type="text" name="key_point" id="key_point">
                                    <label>Location:</label><input type="text" name="location" id="location" value="Becker Amphitheater"><br/>
                                    <input type="submit" value="Add" id="submit" name="submit" style="margin-top: 5px">
                                </div>

                                <div id="divCC">

                                    <h3 style="margin-top: 20%">Children's Center</h3>
                                    <label>Item Name:</label><input type="text" name="found_item" id="lost_item">
                                    <label>Description:</label><textarea name="desc" id="desc"></textarea>
                                    <label>Key point:</label><input type="text" name="key_point" id="key_point">
                                    <label>Location:</label><input type="text" name="location" id="location" value="Children's Center"><br/>
                                    <input type="submit" value="Add" id="submit" name="submit" style="margin-top: 5px">
                                </div>

                                <div id="divCP">

                                    <h3 style="margin-top: 20%">College Park</h3>
                                    <label>Item Name:</label><input type="text" name="found_item" id="lost_item">
                                    <label>Description:</label><textarea name="desc" id="desc"></textarea>
                                    <label>Key point:</label><input type="text" name="key_point" id="key_point">
                                    <label>Location:</label><input type="text" name="location" id="location" value="College Park"><br/>
                                    <input type="submit" value="Add" id="submit" name="submit" style="margin-top: 5px">
                                </div>

                                <div id="divCPAC">

                                    <h3 style="margin-top: 20%">Clayes Performing Arts Center</h3>
                                    <label>Item Name:</label><input type="text" name="found_item" id="lost_item">
                                    <label>Description:</label><textarea name="desc" id="desc"></textarea>
                                    <label>Key point:</label><input type="text" name="key_point" id="key_point">
                                    <label>Location:</label><input type="text" name="location" id="location" value="Clayes Performing Arts Center"><br/>
                                    <input type="submit" value="Add" id="submit" name="submit" style="margin-top: 5px">
                                </div>

                                <div id="divCY">

                                    <h3 style="margin-top: 20%">Corporation Yard</h3>
                                    <label>Item Name:</label><input type="text" name="found_item" id="lost_item">
                                    <label>Description:</label><textarea name="desc" id="desc"></textarea>
                                    <label>Key point:</label><input type="text" name="key_point" id="key_point">
                                    <label>Location:</label><input type="text" name="location" id="location" value="Corporation Yard"><br/>
                                    <input type="submit" value="Add" id="submit" name="submit" style="margin-top: 5px">
                                </div>

                                <div id="divCS">

                                    <h3 style="margin-top: 20%">Computer Science</h3>
                                    <label>Item Name:</label><input type="text" name="found_item" id="lost_item">
                                    <label>Description:</label><textarea name="desc" id="desc"></textarea>
                                    <label>Key point:</label><input type="text" name="key_point" id="key_point">
                                    <label>Location:</label><input type="text" name="location" id="location" value="Computer Science"><br/>
                                    <input type="submit" value="Add" id="submit" name="submit" style="margin-top: 5px">
                                </div>

                                <div id="divDBH">

                                    <h3 style="margin-top: 20%">Dan Black Hall</h3>
                                    <label>Item Name:</label><input type="text" name="found_item" id="lost_item">
                                    <label>Description:</label><textarea name="desc" id="desc"></textarea>
                                    <label>Key point:</label><input type="text" name="key_point" id="key_point">
                                    <label>Location:</label><input type="text" name="location" id="location" value="Dan Black Hall"><br/>
                                    <input type="submit" value="Add" id="submit" name="submit" style="margin-top: 5px">
                                </div>

                                <div id="divE">

                                    <h3 style="margin-top: 20%">Engineering</h3>
                                    <label>Item Name:</label><input type="text" name="found_item" id="lost_item">
                                    <label>Description:</label><textarea name="desc" id="desc"></textarea>
                                    <label>Key point:</label><input type="text" name="key_point" id="key_point">
                                    <label>Location:</label><input type="text" name="location" id="location" value="Engineering"><br/>
                                    <input type="submit" value="Add" id="submit" name="submit" style="margin-top: 5px">
                                </div>

                                <div id="divEC">


                                    <h3 style="margin-top: 20%">Education Classroom</h3>
                                    <label>Item Name:</label><input type="text" name="found_item" id="lost_item">
                                    <label>Description:</label><textarea name="desc" id="desc"></textarea>
                                    <label>Key point:</label><input type="text" name="key_point" id="key_point">
                                    <label>Location:</label><input type="text" name="location" id="location" value="Education Classroom"><br/>
                                    <input type="submit" value="Add" id="submit" name="submit" style="margin-top: 5px">
                                </div>

                                <div id="divEPS">

                                    <h3 style="margin-top: 20%">Eastside Parking Structure</h3>
                                    <label>Item Name:</label><input type="text" name="found_item" id="lost_item">
                                    <label>Description:</label><textarea name="desc" id="desc"></textarea>
                                    <label>Key point:</label><input type="text" name="key_point" id="key_point">
                                    <label>Location:</label><input type="text" name="location" id="location" value="Eastside Parking Structure"><br/>
                                    <input type="submit" value="Add" id="submit" name="submit" style="margin-top: 5px">
                                </div>

                                <div id="divG">

                                    <h3 style="margin-top: 20%">Golleher Alumni House</h3>
                                    <label>Item Name:</label><input type="text" name="found_item" id="lost_item">
                                    <label>Description:</label><textarea name="desc" id="desc"></textarea>
                                    <label>Key point:</label><input type="text" name="key_point" id="key_point">
                                    <label>Location:</label><input type="text" name="location" id="location" value="Golleher Alumni House"><br/>
                                    <input type="submit" value="Add" id="submit" name="submit" style="margin-top: 5px">
                                </div>

                                <div id="divGF">

                                    <h3 style="margin-top: 20%">Goodwin Field</h3>
                                    <label>Item Name:</label><input type="text" name="found_item" id="lost_item">
                                    <label>Description:</label><textarea name="desc" id="desc"></textarea>
                                    <label>Key point:</label><input type="text" name="key_point" id="key_point">
                                    <label>Location:</label><input type="text" name="location" id="location" value="Goodwin Field"><br/>
                                    <input type="submit" value="Add" id="submit" name="submit" style="margin-top: 5px">
                                </div>

                                <div id="divH">

                                    <h3 style="margin-top: 20%">Humanities-Social Sciences</h3>
                                    <label>Item Name:</label><input type="text" name="found_item" id="lost_item">
                                    <label>Description:</label><textarea name="desc" id="desc"></textarea>
                                    <label>Location:</label><input type="text" name="location" id="location" value="Humanities-Social Sciences"><br/>
                                    <input type="submit" value="Add" id="submit" name="submit" style="margin-top: 5px">
                                </div>

                                <div id="divKHS">

                                    <h3 style="margin-top: 20%">Kinesiology & Health Science</h3>
                                    <label>Item Name:</label><input type="text" name="found_item" id="lost_item">
                                    <label>Description:</label><textarea name="desc" id="desc"></textarea>
                                    <label>Key point:</label><input type="text" name="key_point" id="key_point">
                                    <label>Location:</label><input type="text" name="location" id="location" value="Kinesiology & Health Science"><br/>
                                    <input type="submit" value="Add" id="submit" name="submit" style="margin-top: 5px">
                                </div>

                                <div id="divLH">

                                    <h3 style="margin-top: 20%">Langsdorf Hall</h3>
                                    <label>Item Name:</label><input type="text" name="found_item" id="lost_item">
                                    <label>Description:</label><textarea name="desc" id="desc"></textarea>
                                    <label>Key point:</label><input type="text" name="key_point" id="key_point">
                                    <label>Location:</label><input type="text" name="location" id="location" value="Langsdorf Hall"><br/>
                                    <input type="submit" value="Add" id="submit" name="submit" style="margin-top: 5px">
                                </div>

                                <div id="divMH">

                                    <h3 style="margin-top: 20%">McCarthy Hall</h3>
                                    <label>Item Name:</label><input type="text" name="found_item" id="lost_item">
                                    <label>Description:</label><textarea name="desc" id="desc"></textarea>
                                    <label>Key point:</label><input type="text" name="key_point" id="key_point">
                                    <label>Location:</label><input type="text" name="location" id="location" value="McCarthy Hall"><br/>
                                    <input type="submit" value="Add" id="submit" name="submit" style="margin-top: 5px">
                                </div>

                                <div id="divP">

                                    <h3 style="margin-top: 20%">Parking and Transportation</h3>
                                    <label>Item Name:</label><input type="text" name="found_item" id="lost_item">
                                    <label>Description:</label><textarea name="desc" id="desc"></textarea>
                                    <label>Key point:</label><input type="text" name="key_point" id="key_point">
                                    <label>Location:</label><input type="text" name="location" id="location" value="Parking and Transportation"><br/>
                                    <input type="submit" value="Add" id="submit" name="submit" style="margin-top: 5px">
                                </div>

                                <div id="divRH">

                                    <h3 style="margin-top: 20%">Residence Halls</h3>
                                    <label>Item Name:</label><input type="text" name="found_item" id="lost_item">
                                    <label>Description:</label><textarea name="desc" id="desc"></textarea>
                                    <label>Key point:</label><input type="text" name="key_point" id="key_point">
                                    <label>Location:</label><input type="text" name="location" id="location" value="Residence Halls"><br/>
                                    <input type="submit" value="Add" id="submit" name="submit" style="margin-top: 5px">
                                </div>

                                <div id="divPL">

                                    <h3 style="margin-top: 20%">Pollak Library</h3>
                                    <label>Item Name:</label><input type="text" name="found_item" id="lost_item">
                                    <label>Description:</label><textarea name="desc" id="desc"></textarea>
                                    <label>Key point:</label><input type="text" name="key_point" id="key_point">
                                    <label>Location:</label><input type="text" name="location" id="location" value="Pollak Library"><br/>
                                    <input type="submit" value="Add" id="submit" name="submit" style="margin-top: 5px">
                                </div>

                                <div id="divRGC">

                                    <h3 style="margin-top: 20%">Ruby Gerontology Center</h3>
                                    <label>Item Name:</label><input type="text" name="found_item" id="lost_item">
                                    <label>Description:</label><textarea name="desc" id="desc"></textarea>
                                    <label>Key point:</label><input type="text" name="key_point" id="key_point">
                                    <label>Location:</label><input type="text" name="location" id="location" value="Ruby Gerontology Center"><br/>
                                    <input type="submit" value="Add" id="submit" name="submit" style="margin-top: 5px">
                                </div>

                                <div id="divSHCC">

                                    <h3 style="margin-top: 20%">Student Health and Counseling Center</h3>
                                    <label>Item Name:</label><input type="text" name="found_item" id="lost_item">
                                    <label>Description:</label><textarea name="desc" id="desc"></textarea>
                                    <label>Key point:</label><input type="text" name="key_point" id="key_point">
                                    <label>Location:</label><input type="text" name="location" id="location" value="Student Health and Counseling Center"><br/>
                                    <input type="submit" value="Add" id="submit" name="submit" style="margin-top: 5px">
                                </div>

                                <div id="divSGMH">

                                    <h3 style="margin-top: 20%">Steven G. Mihaylo Hall</h3>
                                    <label>Item Name:</label><input type="text" name="found_item" id="lost_item">
                                    <label>Description:</label><textarea name="desc" id="desc"></textarea>
                                    <label>Key point:</label><input type="text" name="key_point" id="key_point">
                                    <label>Location:</label><input type="text" name="location" id="location" value="Steven G. Mihaylo Hall"><br/>
                                    <input type="submit" value="Add" id="submit" name="submit" style="margin-top: 5px">
                                </div>

                                <div id="divSH">

                                    <h3 style="margin-top: 20%">Student Housing</h3>
                                    <label>Item Name:</label><input type="text" name="found_item" id="lost_item">
                                    <label>Description:</label><textarea name="desc" id="desc"></textarea>
                                    <label>Key point:</label><input type="text" name="key_point" id="key_point">
                                    <label>Location:</label><input type="text" name="location" id="location" value="Student Housing"><br/>
                                    <input type="submit" value="Add" id="submit" name="submit" style="margin-top: 5px">
                                </div>

                                <div id="divSRC">

                                    <h3 style="margin-top: 20%">Student Rec Center</h3>
                                    <label>Item Name:</label><input type="text" name="found_item" id="lost_item">
                                    <label>Description:</label><textarea name="desc" id="desc"></textarea>
                                    <label>Key point:</label><input type="text" name="key_point" id="key_point">
                                    <label>Location:</label><input type="text" name="location" id="location" value="Student Rec Center"><br/>
                                    <input type="submit" value="Add" id="submit" name="submit" style="margin-top: 5px">
                                </div>

                                <div id="divTG">

                                    <h3 style="margin-top: 20%">Titan Gymnasium</h3>
                                    <label>Item Name:</label><input type="text" name="found_item" id="lost_item">
                                    <label>Description:</label><textarea name="desc" id="desc"></textarea>
                                    <label>Key point:</label><input type="text" name="key_point" id="key_point">
                                    <label>Location:</label><input type="text" name="location" id="location" value="Titan Gymnasium"><br/>
                                    <input type="submit" value="Add" id="submit" name="submit" style="margin-top: 5px">
                                </div>

                                <div id="divTH">

                                    <h3 style="margin-top: 20%">Titan House</h3>
                                    <label>Item Name:</label><input type="text" name="found_item" id="lost_item">
                                    <label>Description:</label><textarea name="desc" id="desc"></textarea>
                                    <label>Key point:</label><input type="text" name="key_point" id="key_point">
                                    <label>Location:</label><input type="text" name="location" id="location" value="Titan House"><br/>
                                    <input type="submit" value="Add" id="submit" name="submit" style="margin-top: 5px">
                                </div>

                                <div id="divTS">

                                    <h3 style="margin-top: 20%">Titan Stadium</h3>
                                    <label>Item Name:</label><input type="text" name="found_item" id="lost_item">
                                    <label>Description:</label><textarea name="desc" id="desc"></textarea>
                                    <label>Key point:</label><input type="text" name="key_point" id="key_point">
                                    <label>Location:</label><input type="text" name="location" id="location" value="Titan Stadium"><br/>
                                    <input type="submit" value="Add" id="submit" name="submit" style="margin-top: 5px">
                                </div>

                                <div id="divTSU">

                                    <h3 style="margin-top: 20%">Titan Student Union</h3>
                                    <label>Item Name:</label><input type="text" name="found_item" id="lost_item">
                                    <label>Description:</label><textarea name="desc" id="desc"></textarea>
                                    <label>Key point:</label><input type="text" name="key_point" id="key_point">
                                    <label>Location:</label><input type="text" name="location" id="location" value="Titan Student Union"><br/>
                                    <input type="submit" value="Add" id="submit" name="submit" style="margin-top: 5px">
                                </div>

                                <div id="divUH">

                                    <h3 style="margin-top: 20%">University Hall</h3>
                                    <label>Item Name:</label><input type="text" name="found_item" id="lost_item">
                                    <label>Description:</label><textarea name="desc" id="desc"></textarea>
                                    <label>Key point:</label><input type="text" name="key_point" id="key_point">
                                    <label>Location:</label><input type="text" name="location" id="location" value="University Hall"><br/>
                                    <input type="submit" value="Add" id="submit" name="submit" style="margin-top: 5px">
                                </div>

                                <div id="divUP">

                                    <h3 style="margin-top: 20%">University Police</h3>
                                    <label>Item Name:</label><input type="text" name="found_item" id="lost_item">
                                    <label>Description:</label><textarea name="desc" id="desc"></textarea>
                                    <label>Key point:</label><input type="text" name="key_point" id="key_point">
                                    <label>Location:</label><input type="text" name="location" id="location" value="University Police"><br/>
                                    <input type="submit" value="Add" id="submit" name="submit" style="margin-top: 5px">
                                </div>

                                <div id="divVA">

                                    <h3 style="margin-top: 20%">Visual Arts</h3>
                                    <label>Item Name:</label><input type="text" name="found_item" id="lost_item">
                                    <label>Description:</label><textarea name="desc" id="desc"></textarea>
                                    <label>Key point:</label><input type="text" name="key_point" id="key_point">
                                    <label>Location:</label><input type="text" name="location" id="location" value="Visual Arts"><br/>
                                    <input type="submit" value="Add" id="submit" name="submit" style="margin-top: 5px">
                                </div>

                                <div id="divNPS">

                                    <h3 style="margin-top: 20%">Nutwood Parking Structure</h3>
                                    <label>Item Name:</label><input type="text" name="found_item" id="lost_item">
                                    <label>Description:</label><textarea name="desc" id="desc"></textarea>
                                    <label>Key point:</label><input type="text" name="key_point" id="key_point">
                                    <label>Location:</label><input type="text" name="location" id="location" value="Nutwood Parking Structure"><br/>
                                    <input type="submit" value="Add" id="submit" name="submit" style="margin-top: 5px">
                                </div>

                                <div id="divSCPS">

                                    <h3 style="margin-top: 20%">State College Parking Structure</h3>
                                    <label>Item Name:</label><input type="text" name="found_item" id="lost_item">
                                    <label>Description:</label><textarea name="desc" id="desc"></textarea>
                                    <label>Key point:</label><input type="text" name="key_point" id="key_point">
                                    <label>Location:</label><input type="text" name="location" id="location" value="State College Parking Structure"><br/>
                                    <input type="submit" value="Add" id="submit" name="submit" style="margin-top: 5px"></div>
                                </div>
</div>
</p>

</section>
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
                <div class="col-md-12">
                    <span style="min-width: 45px" class="pull-left mb16 fa fa-thumbs-o-down fa-2x" title=""><img src="images/thumbs-down.png" width="50" height="50" alt="thumbs down"></span>
                    <a href="#"> <h4 class="mt0 mb0">Phone</h4>
                        <p>Add description</p>
                    </a>
                    <br/>
                </div>
                <div class="col-md-12">
                    <span style="min-width: 45px" class="pull-left mb16 fa fa-thumbs-o-down fa-2x" data-original-title="" title=""><img src="images/thumbs-down.png" width="50" height="50" alt="thumbs down"></span>
                    <a href="#"> <h4 class="mt0 mb0">Laptop charger</h4>
                        <p>Add description</p></a>
                    <br/>
                </div>
                <div class="col-md-12">
                    <span style="min-width: 45px" class="pull-left mb16 fa fa-thumbs-o-down fa-2x"><img src="images/thumbs-down.png" width="50" height="50" alt="thumbs down"></span>
                    <a href="#"> <h4 class="mt0 mb0">book</h4>
                        <p>add description</p></a>
                    <br/>
                </div>
            </div>
            <div class="col-md-5">
                <div class="col-md-12 mt16 mb16">
                    <h3 class="mb0">Found Items</h3>
                    <h3 class="mb0">
                        <br/>
                    </h3>
                </div>
                <div class="col-md-12">
                    <span style="min-width: 45px" class="pull-left mb16 fa fa-thumbs-o-up fa-2x" data-original-title="" title=""><img src="images/thumbs-up.png" width="50" height="50" alt="thumbs up"></span>
                    <a href="#"><h4 class="mt0 mb0">Phone</h4>
                        <p>Add description</p>
                    </a>
                    <br/>
                </div>
                <div class="col-md-12">
                    <span style="min-width: 45px" class="pull-left mb16 fa fa-thumbs-o-up fa-2x" data-original-title="" title=""><img src="images/thumbs-up.png" width="50" height="50" alt="thumbs up"></span>
                    <a href="#"><h4 class="mt0 mb0">Laptop charger</h4>
                        <p>Add description</p>
                    </a>
                    <br/>
                </div>
                <div class="col-md-12">
                    <span style="min-width: 45px" class="pull-left mb16 fa fa-thumbs-o-up fa-2x"><img src="images/thumbs-up.png" width="50" height="50" alt="thumbs up"></span>
                    <a href="#"><h4 class="mt0 mb0">book</h4>
                        <p>add description</p></a>
                    <br/>
                </div>
            </div>
        </div>
    </div>
</section>
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
                        <a href="/page/website.contactus">Contact us</a>
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


