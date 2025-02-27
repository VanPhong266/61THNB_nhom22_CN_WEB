<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edmodo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="shortcut icon" type="image/png" href="assets/img/icon.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <div id="main">
        <div id="header">
            <ul id="nav">
                <img style="margin-right: 18px;" src="assets/img/edmodo.png" alt="" class="img-fluid">
                <li>
                    <a href="#">Learn more
                        <span class="material-icons">
                            arrow_drop_down
                        </span>
                    </a>
                    <ul class="subnav">
                        <li><a href="LearnMore-Teachers.php">Teachers</a></li>
                        </br>
                        <li><a href="LearnMore-Students.php">Students</a></li>
                        </br>
                        <li><a href="LearnMore-Parents.php">Parents</a></li>
                        </br>
                        <li><a href="Learnmore-School.php">Schools, Districts, &amp; Organizations</a></li>
                        </br>
                        <li><a href="">Distance Learning Toolkit</a></li>
                    </ul>
                </li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="support.php">Support</a></li>
                <li><a href="getting-started.php">Getting Started</a></li>
                <div id="login-signup">
                    <li><a href="login.php">Login</a></li>
                    <li style="background-color: #ffca28;"><a href="signup.php">Sign Up</a></li>
                </div>
            </ul>
            </hr>
        </div>

        <div id="learnmore">
            <div style="box-sizing: border-box;" class="distance-learning-banner">
                <div class="container">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-1">
                                <div class="image-fluid rounded">
                                    <img src="assets/img/icon phone.png" width="72" height="72" style="margin-top: 3px;" alt="">
                                </div>
                            </div>
                            <div class="col-md-10">
                                <div class="text">
                                    <div class="title">
                                        <h4>Check out Edmodo's learning solutions!
                                        </h4>
                                    </div>
                                    <div style="max-width: 666px;" class="main-text">
                                        <span>As a response to emerging educational needs, we are continually evolving
                                            to
                                            meet the needs of educators and learners around the world.
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-1"><button href="Learnmore-School.php" style="margin-top: 10px;background-color: #1a237e;border-color: #1a237e;" class="btn btn-primary" name="button" value="OK" type="button" onclick="hello()">Learn more</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div style="margin-left: 88px; margin-right: 88px;" id="content">
            <div class="main_about row">
                <div class="col-md-6">
                    <img src="assets/img/1.webp" alt="" class="img-fluid rounded">
                </div>
                <div style="margin-top: 100px; margin-bottom: 100px;" class="col-md-6">
                    <h1>Learn Better Together</h1>
                    <p>Manage your classroom. Engage your students.</p>
                    <p>Safe. Simple. Free.</p>
                    <button style="background-color: #ffc107; text-decoration:none;"><a href="signup.php">Sign
                            up for a
                            free account</a></button>
                </div>
            </div>
            <hr>
            <div class="main_about row">
                <div style="margin-top: 100px; margin-bottom: 100px;" class="col-md-6">
                    <span>FOR EDUCATORS</span>
                    <h1>Tools that teachers need</h1>
                    <p>Send messages, share class materials, and make learning accessible anywhere.
                        Save
                        yourself time by bringing all your classroom tools together.</p>
                    <a style="color: #fd7e14;" href="LearnMore-Teachers.php">Show me how</a>
                </div>
                <div class="col-md-6">
                    <img src="assets/img/2.webp" alt="" class="img-fluid rounded">
                </div>
            </div>
            <hr>
            <div class="main_about row">
                <div class="col-md-6">
                    <img src="assets/img/3.webp" alt="" class="img-fluid rounded">
                </div>
                <div style="margin-top: 100px; margin-bottom: 100px;" class="col-md-6">
                    <span>FOR STUDENTS</span>
                    <h1>A platform students love</h1>
                    <p>Raise your confidence, find your voice, and experience what it means to be a
                        digital
                        citizen.
                    </p>
                    <p>Empower your learning and become part of a vibrant classroom community.</p>
                    <a style="color: #fd7e14;" href="LearnMore-Students.php">Learn more</a>
                </div>
            </div>
            <hr>
            <div class="main_about row">
                <div style="margin-top: 100px; margin-bottom: 100px;" class="col-md-6">
                    <span>FOR FAMILIES</span>
                    <h1>Updates that parents want</h1>
                    <p>Get class updates, stay in sync with teachers, and support learning at home. See
                        classroom activity and grades at a glance to help students stay on track.</p>
                    <a style="color: #fd7e14;" href="LearnMore-Parents.php">Tell me more</a>
                </div>
                <div class="col-md-6">
                    <img src="assets/img/4.webp" alt="" class="img-fluid rounded">
                </div>
            </div>
        </div>

        <hr>
        <div id="footer">
            <div class="footer-edmono container">
                <div class="row">
                    <div class="so_1 col-lg-2 col-md-2 col-sm-2">
                        <section id="anhfooter">
                            <img src="assets//img/edmodo.png" alt="">
                        </section>
                        <section id="custom_html-2" class="widget_text fusion-footer-widget-column widget widget_custom_html" style="border-style: solid;border-color:transparent;border-width:0px;">
                            <div class="textwidget custom-html-widget">
                                <p style="font-size: 18px !important">Edmodo is a global education network that helps
                                    connect all learners with the people and resources needed to reach their full potential.
                                </p>
                                <p style="font-size: 18px !important">Edmodo © 2021</p>
                                <p style="font-size: 10px !important">Edmodo is ultimately owned and controlled by NetDragon
                                    Websoft Holdings Limited, a public company principally based in Hong Kong with
                                    operations in China, traded on the Hong Kong Stock Exchange (HKSE: 777), and ultimately
                                    majority owned by Chinese persons located in China.
                                </p>
                            </div>
                            <div style="clear:both;"></div>
                        </section>
                        <div class="dropdown_footer">
                            <button class="nut_dropdown"><a href="#" class="js-wpml-ls-item-toggle wpml-ls-item-toggle"><img class="wpml-ls-flag" src="https://9kyhf3crb4ah2d0m726aoc6x-wpengine.netdna-ssl.com/wp-content/plugins/sitepress-multilingual-cms/res/flags/en.png" alt="en" title="English"><span class="wpml-ls-native"> English</span></a></button>
                            <span class="material-icons">
                                arrow_drop_down
                            </span>
                        </div>
                    </div>
                    <div class="so_2 col-lg-2 col-md-2 col-sm-2">
                        <h4>Company</h4>
                        <ul id="menu-footer-nav" class="menu">
                            <li id="menu-item-8917" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8917"><a href="#"><span class="link-text">About</span><span class="arrow"></span></a></li>
                            <li id="menu-item-3618" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3618"><a href="#"><span class="link-text">News</span><span class="arrow"></span></a></li>
                            <li id="menu-item-365" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-365"><a href="#"><span class="link-text">Careers</span><span class="arrow"></span></a></li>
                            <li id="menu-item-1512" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1512"><a href="#"><span class="link-text">Privacy</span><span class="arrow"></span></a></li>
                            <li id="menu-item-1513" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1513"><a href="#"><span class="link-text">Terms of
                                        Service</span><span class="arrow"></span></a></li>
                            <li id="menu-item-366" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-366"><a href="#"><span class="link-text">Contact Us</span><span class="arrow"></span></a></li>
                        </ul>
                    </div>
                    <div class="so_2 col-lg-2 col-md-2 col-sm-2">
                        <h4>Learn More</h4>
                        <ul id="menu-footer-nav" class="menu">
                            <li id="menu-item-1519" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1519"><a href="LearnMore-Teachers.php"><span class="link-text"> Teachers</span><span class="arrow"></span></a></li>
                            <li id="menu-item-1518" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1518"><a href="LearnMore-Students.php"><span class="link-text"> Students</span><span class="arrow"></span></a></li>
                            <li id="menu-item-1517" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1517"><a href="LearnMore-Parents.php"><span class="link-text"> Parents</span><span class="arrow"></span></a></li>
                            <li id="menu-item-1520" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1520"><a href="#"><span class="link-text"> Schools, Districts, &amp;
                                        Organizations</span><span class="arrow"></span></a></li>
                            <li id="menu-item-6676" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6676"><a href="#"><span class="link-text"> Distance
                                        Learning Toolkit</span><span class="arrow"></span></a></li>
                        </ul>
                    </div>
                    <div class="so_2 col-lg-2 col-md-2 col-sm-2">
                        <h4>Resources</h4>
                        <ul id="menu-footer-nav" class="menu">
                            <li id="menu-item-1514" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1514"><a href="blog.php"><span class="link-text"> Blog</span><span class="arrow"></span></a></li>
                            <li id="menu-item-1516" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1516"><a target="_blank" rel="noopener" href="support.php"><span class="link-text">
                                        Support</span><span class="arrow"></span></a></li>
                            <li id="menu-item-4052" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4052"><a href="getting-started.php"><span class="link-text"> Getting Started</span><span class="arrow"></span></a></li>
                        </ul>
                    </div>
                    <div class="so_2 col-lg-2 col-md-2 col-sm-2">
                        <h4>Connect</h4>
                        <ul id="menu-footer-nav" class="menu">
                            <li id="menu-item-1521" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1521"><a href="http://twitter.com/"><span class="link-text">Twitter</span><span class="arrow"></span></a></li>
                            <li id="menu-item-1522" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1522"><a href="http://www.facebook.com/nhuchuabaogiotungtontai"><span class="link-text">Facebook</span><span class="arrow"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </div>
</body>

</html>