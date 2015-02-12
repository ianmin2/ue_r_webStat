
<!DOCTYPE html>
<html lang="en" >
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="description" content="University OF Eastern Africa Baraton Website Assesment Tool By Rose Nyamwamu">
        <meta name="keywords" content="UEAB Web Analysis, UEAB Website Assesment">
        <meta name="author" content="Rose Nyamwamu">
        <link rel="icon" href="favicon.ico">

        <title>UEAB | Website Assesment</title>

        <!-- BOOTSTRAP CSS (REQUIRED ALL PAGE)-->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <!-- PLUGINS CSS -->		
        <link href="assets/plugins/prettify/prettify.min.css" rel="stylesheet">

        <!-- MAIN CSS (REQUIRED ALL PAGE)-->
        <link href="assets/css/style.css" rel="stylesheet">
        <link href="assets/css/style-responsive.css" rel="stylesheet">
        <link href="assets/plugins/font-awesome/css/fa.min.css" rel="stylesheet">
        <style>
            li
            {
                list-style-type: none !important;
            }

        </style>

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    </head>

    <body class="tooltips">

        <!--
===========================================================
BEGIN PAGE
===========================================================
-->
        <div class="wrapper">
            <!-- BEGIN TOP NAV -->
            <div class="top-navbar">
                <div class="top-navbar-inner">

                    <!-- Begin Logo brand -->
                    <div class="logo-brand" style="max-height: 10px;" >
                        <a href="index.html"><img src="assets/img/sentir-logo-primary.png"  alt="UEAB | Website Assesment"></a>
                    </div><!-- /.logo-brand -->
                    <!-- End Logo brand -->

                    <div class="top-nav-content no-right-sidebar" >


                        <div class="">
                            <!-- Begin page heading -->
                            <h1 class="page-heading " style="color: navy;">UNIVERSITY OF EASTERN AFRICA, BARATON  <span style="color: gray;" > |  </span><small><strong> Website Assessment Tool</strong></small></h1>
                            <br>

                            <!-- End page heading -->
                        </div>


                        <!-- Begin user session nav -->
                        <ul class="nav-user navbar-right full">
                            <li class="dropdown">
                                <a href="#notYet" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="assets/img/avatar/avatar-1.jpg" class="avatar img-circle" alt="Avatar">

                                    <strong style="text-transform: uppercase;"></strong>
                                </a>

                            </li>
                        </ul>
                        <!-- End user session nav -->

                        <!-- Begin Collapse menu nav -->

                        <div class=" collapse navbar-collapse" id="main-fixed-nav">

                        </div><!-- /.navbar-collapse -->

                        <!-- End Collapse menu nav -->

                    </div><!-- /.top-nav-content -->

                </div><!-- /.top-navbar-inner -->

            </div><!-- /.top-navbar -->
            <!-- END TOP NAV -->





            <!-- BEGIN PAGE CONTENT -->
            <div class="page-content " style="background: white !important;">

                <div class="container-fluid">

                    <br><br><br><br>

                    <center>	 	
                        <!-- Email Address Validator -->
                        <div class="alert alert-info center-block alert-bold-border fade in alert-dismissable col-lg-12 " id="doLogin">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">  &times; </button>
                            <p class="text-muted " id="resp"><u>Please fill in your <strong>UEAB</strong> email address to continue</u> </p>
                            <br>
                            <div class="row">
                                <div class="col-lg-12">
                                    <input type="text" class="text-center text-danger h4 "  style="min-height: 3em;" id="email" placeholder="user@domain.ext" >
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-12 "> 
                                    <input type="button" class="btn btn-success btn-lg perspective" id="login" VALUE="CONTINUE" >
                                </div>
                            </div>

                        </div>
                        <!-- END of  Address Validator -->
                    </center>			

                    <br><br>
                    <form action="web_proc.php" class="hidden" id="questions" method="post">

                        <!-- BEGIN ALERT -->
                        <div class="alert alert-success alert-bold-border fade in alert-dismissable" >
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"> <!-- &times; --></button>
                            <div class="panel panel-success bg-success" style="padding: 10px; color: white !important; text-align: justify; font-weight: bold;">
                            <p >This tool is designed to solicit feedback from the website users on the quality of the UEAB website. Your feedback will play a key role in helping us ensure quality of services offered on the website. The tool is divided into two parts that will take  10-15 minutes to fill in. You are kindly requested to reflect your opinion on your personal experience in using the website. Before answering the questions browse through the whole website for 2-4 minutes and try to click as many links as you can. <i class="fa fa-smile"></i></p>
                            <p></p>
                            <p >Select you appropriate answer by clicking on the options listed under each question. Scroll and fill in the Questions to the end then submit your answers</p>
                            </div>
                            <br>
                            <p><strong>Thank you!</strong></p>
                            <p > Please take your time to answer the questions below.</p>
                            <hr>


                            <!--  START OF QUESTIONS -->

                            <div class="row">

                                <!-- START OF QUESTION -->
                                <div class="col-lg-12">

                                    <div class="col-lg-4 text-info">
                                        1.	What is your Gender?
                                    </div>
                                    <div class="col-lg-6 " role="radiogroup">

                                        <li class="col-xs-3">
                                            <label><span class="">
                                                <input name="gender" value="male" role="radio"  aria-label="Male" type="radio"></span>
                                                <span class="">Male</span>
                                            </label>
                                        </li> 
                                        <li class="col-xs-3">
                                            <label><span class="">
                                                <input name="gender" value="female" role="radio" aria-label="Female" type="radio"></span>
                                                <span class="">Female</span>
                                            </label>
                                        </li>

                                    </div>

                                </div>
                                <!-- END OF QUESTION -->

                                <br>
                                <hr>

                                <!-- START OF QUESTION -->
                                <div class="col-lg-12">
                                    <div class="col-lg-4 text-info">
                                        2.	What is your position at UEAB?
                                    </div>
                                    <div class="col-lg-8" role="radiogroup">

                                        <li class="col-xs-3">
                                            <label><span class="">
                                                <input name="position" value="student" role="radio"  aria-label="Male" type="radio"></span>
                                                <span class="">Student</span>
                                            </label>
                                        </li> 
                                        <li class="col-xs-3">
                                            <label><span class="">
                                                <input name="position" value="faculty" role="radio" aria-label="faculty" type="radio"></span>
                                                <span class="">Faculty</span>
                                            </label>
                                        </li>
                                        <li class="col-xs-2">
                                            <label><span class="">
                                                <input name="position" value="staff" role="radio" aria-label="staff" type="radio"></span>
                                                <span class="">Staff</span>
                                            </label>
                                        </li>

                                    </div>
                                </div>
                                <!-- END OF QUESTION -->

                                <br>
                                <hr>

                                <!-- START OF QUESTION -->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="col-lg-4 text-info">
                                            3.	How often do you visit the UEAB website?
                                        </div>
                                        <div class="col-lg-8 " role="radiogroup">

                                            <li class="col-xs-12">
                                                <label><span class="">
                                                    <input name="visits" value="daily" role="radio"  aria-label="daily" type="radio"></span>
                                                    <span class="">Daily</span>
                                                </label>
                                            </li> 
                                            <li class="col-xs-12">
                                                <label><span class="">
                                                    <input name="visits" value="twice a week" role="radio" aria-label="twice a week" type="radio"></span>
                                                    <span class="">Twice a week</span>
                                                </label>
                                            </li>
                                            <li class="col-xs-12">
                                                <label><span class="">
                                                    <input name="visits" value="once a trimester" role="radio" aria-label="once a trimester" type="radio"></span>
                                                    <span class="">Once a trimester</span>
                                                </label>
                                            </li>

                                        </div>
                                    </div>
                                </div>
                                <!-- END OF QUESTION -->

                                <hr>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="col-lg-12">
                                            <div class="text-danger  text-center">
                                                Kindly rate the following attributes of a website in your opinion of service delivery and user satisfaction. <br>
                                                Put select the option that is applicable to you as provided.<br>

                                            </div>

                                        </div>					
                                    </div>
                                    <br>
                                    <div class="col-lg-12">
                                        <div class="col-lg-12">
                                            <div class="text-muted  text-center">
                                                Rate the statement using the 1- 4 point Likert scale provided where
                                                (4 = strongly agree, 3=agree,  2=disagree, 1=strongly disagree). 

                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <br>
                                <hr>


                                <!-- START OF QUESTION -->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="col-lg-12 text-info">
                                            1.	Usability of the website	
                                            <br>		
                                        </div>

                                        <div class="col-lg-12 text-muted">
                                            <div class="col-sm-5"></div>
                                            <div class="col-sm-2">Strongly Agree</div>
                                            <div class="col-sm-1">Agree</div>
                                            <div class="col-sm-1">Disagree</div>
                                            <div class="col-sm-2">Strongly Disagree</div>
                                        </div>

                                        <div class="col-lg-12 ">
                                            <div class="col-sm-5">It is easy to find my way to information from the homepage</div>
                                            <div class="col-sm-2"><input name="easy" value="4"  role="radio" aria-label="4" type="radio"></div>
                                            <div class="col-sm-1"><input name="easy" value="3"  role="radio" aria-label="3" type="radio"></div>
                                            <div class="col-sm-1"><input name="easy" value="2"  role="radio" aria-label="2" type="radio"></div>
                                            <div class="col-sm-2"><input name="easy" value="1"  role="radio" aria-label="1" type="radio"></div>
                                        </div>

                                        <div class="col-lg-12 text-success h5">
                                            <div class="col-sm-5">I am able to accurately predict which section of the website contains the information that am looking for</div>
                                            <div class="col-sm-2"><input name="accurate" value="4"  role="radio" aria-label="4" type="radio"></div>
                                            <div class="col-sm-1"><input name="accurate" value="3"  role="radio" aria-label="3" type="radio"></div>
                                            <div class="col-sm-1"><input name="accurate" value="2"  role="radio" aria-label="2" type="radio"></div>
                                            <div class="col-sm-2"><input name="accurate" value="1"  role="radio" aria-label="1" type="radio"></div>
                                        </div>

                                        <div class="col-lg-12 ">
                                            <div class="col-sm-5">The homepage content makes me want to explore the site further</div>
                                            <div class="col-sm-2"><input name="explore" value="4"  role="radio" aria-label="4" type="radio"></div>
                                            <div class="col-sm-1"><input name="explore" value="3"  role="radio" aria-label="3" type="radio"></div>
                                            <div class="col-sm-1"><input name="explore" value="2"  role="radio" aria-label="2" type="radio"></div>
                                            <div class="col-sm-2"><input name="explore" value="1"  role="radio" aria-label="1" type="radio"></div>
                                        </div>

                                        <div class="col-lg-12 text-success h5">
                                            <div class="col-sm-5">The website is well suited to first time visitors</div>
                                            <div class="col-sm-2"><input name="suited" value="4"  role="radio" aria-label="4" type="radio"></div>
                                            <div class="col-sm-1"><input name="suited" value="3"  role="radio" aria-label="3" type="radio"></div>
                                            <div class="col-sm-1"><input name="suited" value="2"  role="radio" aria-label="2" type="radio"></div>
                                            <div class="col-sm-2"><input name="suited" value="1"  role="radio" aria-label="1" type="radio"></div>
                                        </div>

                                        <div class="col-lg-12 ">
                                            <div class="col-sm-5">The site has characteristics that make it appealing. </div>
                                            <div class="col-sm-2"><input name="appealing" value="4"  role="radio" aria-label="4" type="radio"></div>
                                            <div class="col-sm-1"><input name="appealing" value="3"  role="radio" aria-label="3" type="radio"></div>
                                            <div class="col-sm-1"><input name="appealing" value="2"  role="radio" aria-label="2" type="radio"></div>
                                            <div class="col-sm-2"><input name="appealing" value="1"  role="radio" aria-label="1" type="radio"></div>
                                        </div>

                                    </div>
                                </div>
                                <!-- END OF QUESTION -->

                                <br>
                                <hr>

                                <!-- START OF QUESTION -->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="col-lg-12 text-info">
                                            2.	Functionality of the Website 	
                                            <br>		
                                        </div>

                                        <div class="col-lg-12 text-muted">
                                            <div class="col-sm-5"></div>
                                            <div class="col-sm-2">Strongly Agree</div>
                                            <div class="col-sm-1">Agree</div>
                                            <div class="col-sm-1">Disagree</div>
                                            <div class="col-sm-2">Strongly Disagree</div>
                                        </div>

                                        <div class="col-lg-12 ">
                                            <div class="col-sm-5">The website contains administration tools which enhance efficiency i.e. Help, FAQ</div>
                                            <div class="col-sm-2"><input name="efficiency" value="4"  role="radio" aria-label="4" type="radio"></div>
                                            <div class="col-sm-1"><input name="efficiency" value="3"  role="radio" aria-label="3" type="radio"></div>
                                            <div class="col-sm-1"><input name="efficiency" value="2"  role="radio" aria-label="2" type="radio"></div>
                                            <div class="col-sm-2"><input name="efficiency" value="1"  role="radio" aria-label="1" type="radio"></div>
                                        </div>

                                        <div class="col-lg-12 text-success h5">
                                            <div class="col-sm-5">All functionality is clearly labeled</div>
                                            <div class="col-sm-2"><input name="labeled" value="4"  role="radio" aria-label="4" type="radio"></div>
                                            <div class="col-sm-1"><input name="labeled" value="3"  role="radio" aria-label="3" type="radio"></div>
                                            <div class="col-sm-1"><input name="labeled" value="2"  role="radio" aria-label="2" type="radio"></div>
                                            <div class="col-sm-2"><input name="labeled" value="1"  role="radio" aria-label="1" type="radio"></div>
                                        </div>

                                        <div class="col-lg-12 ">
                                            <div class="col-sm-5">It is easy to navigate the websitei.e. options to return to home page, top of pages is provided.</div>
                                            <div class="col-sm-2"><input name="navigate" value="4"  role="radio" aria-label="4" type="radio"></div>
                                            <div class="col-sm-1"><input name="navigate" value="3"  role="radio" aria-label="3" type="radio"></div>
                                            <div class="col-sm-1"><input name="navigate" value="2"  role="radio" aria-label="2" type="radio"></div>
                                            <div class="col-sm-2"><input name="navigate" value="1"  role="radio" aria-label="1" type="radio"></div>
                                        </div>

                                        <div class="col-lg-12 text-success h5">
                                            <div class="col-sm-5">There are linkages to other sites that have discussions on similar topics</div>
                                            <div class="col-sm-2"><input name="linkages" value="4"  role="radio" aria-label="4" type="radio"></div>
                                            <div class="col-sm-1"><input name="linkages" value="3"  role="radio" aria-label="3" type="radio"></div>
                                            <div class="col-sm-1"><input name="linkages" value="2"  role="radio" aria-label="2" type="radio"></div>
                                            <div class="col-sm-2"><input name="linkages" value="1"  role="radio" aria-label="1" type="radio"></div>
                                        </div>

                                        <div class="col-lg-12 ">
                                            <div class="col-sm-5">The selected graphics serve a functional purpose. </div>
                                            <div class="col-sm-2"><input name="graphics" value="4"  role="radio" aria-label="4" type="radio"></div>
                                            <div class="col-sm-1"><input name="graphics" value="3"  role="radio" aria-label="3" type="radio"></div>
                                            <div class="col-sm-1"><input name="graphics" value="2"  role="radio" aria-label="2" type="radio"></div>
                                            <div class="col-sm-2"><input name="graphics" value="1"  role="radio" aria-label="1" type="radio"></div>
                                        </div>

                                    </div>
                                </div>
                                <!-- END OF QUESTION -->


                                <br>
                                <hr>

                                <!-- START OF QUESTION -->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="col-lg-12 text-info">
                                            3.	Efficiency of the website  	
                                            <br>		
                                        </div>

                                        <div class="col-lg-12 text-muted">
                                            <div class="col-sm-5"></div>
                                            <div class="col-sm-2">Strongly Agree</div>
                                            <div class="col-sm-1">Agree</div>
                                            <div class="col-sm-1">Disagree</div>
                                            <div class="col-sm-2">Strongly Disagree</div>
                                        </div>

                                        <div class="col-lg-12 ">
                                            <div class="col-sm-5">I find it easy to use the website.</div>
                                            <div class="col-sm-2"><input name="_use" value="4"  role="radio" aria-label="4" type="radio"></div>
                                            <div class="col-sm-1"><input name="_use" value="3"  role="radio" aria-label="3" type="radio"></div>
                                            <div class="col-sm-1"><input name="_use" value="2"  role="radio" aria-label="2" type="radio"></div>
                                            <div class="col-sm-2"><input name="_use" value="1"  role="radio" aria-label="1" type="radio"></div>
                                        </div>

                                        <div class="col-lg-12 text-success h5">
                                            <div class="col-sm-5">The information posted on the website is always timely.</div>
                                            <div class="col-sm-2"><input name="timely" value="4"  role="radio" aria-label="4" type="radio"></div>
                                            <div class="col-sm-1"><input name="timely" value="3"  role="radio" aria-label="3" type="radio"></div>
                                            <div class="col-sm-1"><input name="timely" value="2"  role="radio" aria-label="2" type="radio"></div>
                                            <div class="col-sm-2"><input name="timely" value="1"  role="radio" aria-label="1" type="radio"></div>
                                        </div>

                                        <div class="col-lg-12 ">
                                            <div class="col-sm-5">I am satisfied by the web content.</div>
                                            <div class="col-sm-2"><input name="satisfied" value="4"  role="radio" aria-label="4" type="radio"></div>
                                            <div class="col-sm-1"><input name="satisfied" value="3"  role="radio" aria-label="3" type="radio"></div>
                                            <div class="col-sm-1"><input name="satisfied" value="2"  role="radio" aria-label="2" type="radio"></div>
                                            <div class="col-sm-2"><input name="satisfied" value="1"  role="radio" aria-label="1" type="radio"></div>
                                        </div>

                                        <div class="col-lg-12 text-success h5">
                                            <div class="col-sm-5">The web services and functionalities are perfect.</div>
                                            <div class="col-sm-2"><input name="functionalities" value="4"  role="radio" aria-label="4" type="radio"></div>
                                            <div class="col-sm-1"><input name="functionalities" value="3"  role="radio" aria-label="3" type="radio"></div>
                                            <div class="col-sm-1"><input name="functionalities" value="2"  role="radio" aria-label="2" type="radio"></div>
                                            <div class="col-sm-2"><input name="functionalities" value="1"  role="radio" aria-label="1" type="radio"></div>
                                        </div>

                                        <div class="col-lg-12 ">
                                            <div class="col-sm-5">The website offers dialogue areas or feedback features for visitors </div>
                                            <div class="col-sm-2"><input name="dialogue" value="4"  role="radio" aria-label="4" type="radio"></div>
                                            <div class="col-sm-1"><input name="dialogue" value="3"  role="radio" aria-label="3" type="radio"></div>
                                            <div class="col-sm-1"><input name="dialogue" value="2"  role="radio" aria-label="2" type="radio"></div>
                                            <div class="col-sm-2"><input name="dialogue" value="1"  role="radio" aria-label="1" type="radio"></div>
                                        </div>

                                    </div>
                                </div>
                                <!-- END OF QUESTION -->


                                <br>
                                <hr>

                                <!-- START OF QUESTION -->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="col-lg-12 text-info">
                                            4.	Reliability of the website   	
                                            <br>		
                                        </div>

                                        <div class="col-lg-12 text-muted">
                                            <div class="col-sm-5"></div>
                                            <div class="col-sm-2">Strongly Agree</div>
                                            <div class="col-sm-1">Agree</div>
                                            <div class="col-sm-1">Disagree</div>
                                            <div class="col-sm-2">Strongly Disagree</div>
                                        </div>

                                        <div class="col-lg-12 ">
                                            <div class="col-sm-5">The website is accessible all the time.</div>
                                            <div class="col-sm-2"><input name="_accessible" value="4"  role="radio" aria-label="4" type="radio"></div>
                                            <div class="col-sm-1"><input name="_accessible" value="3"  role="radio" aria-label="3" type="radio"></div>
                                            <div class="col-sm-1"><input name="_accessible" value="2"  role="radio" aria-label="2" type="radio"></div>
                                            <div class="col-sm-2"><input name="_accessible" value="1"  role="radio" aria-label="1" type="radio"></div>
                                        </div>

                                        <div class="col-lg-12 text-success h5">
                                            <div class="col-sm-5">The links work well.</div>
                                            <div class="col-sm-2"><input name="links" value="4"  role="radio" aria-label="4" type="radio"></div>
                                            <div class="col-sm-1"><input name="links" value="3"  role="radio" aria-label="3" type="radio"></div>
                                            <div class="col-sm-1"><input name="links" value="2"  role="radio" aria-label="2" type="radio"></div>
                                            <div class="col-sm-2"><input name="links" value="1"  role="radio" aria-label="1" type="radio"></div>
                                        </div>

                                        <div class="col-lg-12 ">
                                            <div class="col-sm-5">The forms on the website are working </div>
                                            <div class="col-sm-2"><input name="forms" value="4"  role="radio" aria-label="4" type="radio"></div>
                                            <div class="col-sm-1"><input name="forms" value="3"  role="radio" aria-label="3" type="radio"></div>
                                            <div class="col-sm-1"><input name="forms" value="2"  role="radio" aria-label="2" type="radio"></div>
                                            <div class="col-sm-2"><input name="forms" value="1"  role="radio" aria-label="1" type="radio"></div>
                                        </div>

                                        <div class="col-lg-12 text-success h5">
                                            <div class="col-sm-5">The website contains some broken links</div>
                                            <div class="col-sm-2"><input name="broken" value="4"  role="radio" aria-label="4" type="radio"></div>
                                            <div class="col-sm-1"><input name="broken" value="3"  role="radio" aria-label="3" type="radio"></div>
                                            <div class="col-sm-1"><input name="broken" value="2"  role="radio" aria-label="2" type="radio"></div>
                                            <div class="col-sm-2"><input name="broken" value="1"  role="radio" aria-label="1" type="radio"></div>
                                        </div>

                                        <div class="col-lg-12 ">
                                            <div class="col-sm-5">Information on the website is regularly updated.</div>
                                            <div class="col-sm-2"><input name="updated" value="4"  role="radio" aria-label="4" type="radio"></div>
                                            <div class="col-sm-1"><input name="updated" value="3"  role="radio" aria-label="3" type="radio"></div>
                                            <div class="col-sm-1"><input name="updated" value="2"  role="radio" aria-label="2" type="radio"></div>
                                            <div class="col-sm-2"><input name="updated" value="1"  role="radio" aria-label="1" type="radio"></div>
                                        </div>

                                    </div>
                                </div>
                                <!-- END OF QUESTION -->


                                <br>
                                <hr>

                                <!-- START OF QUESTION -->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="col-lg-12 text-info">
                                            5.	Availability of the website    	
                                            <br>		
                                        </div>

                                        <div class="col-lg-12 text-muted">
                                            <div class="col-sm-5"></div>
                                            <div class="col-sm-2">Strongly Agree</div>
                                            <div class="col-sm-1">Agree</div>
                                            <div class="col-sm-1">Disagree</div>
                                            <div class="col-sm-2">Strongly Disagree</div>
                                        </div>

                                        <div class="col-lg-12 ">
                                            <div class="col-sm-5">The website is available 24/7.</div>
                                            <div class="col-sm-2"><input name="available" value="4"  role="radio" aria-label="4" type="radio"></div>
                                            <div class="col-sm-1"><input name="available" value="3"  role="radio" aria-label="3" type="radio"></div>
                                            <div class="col-sm-1"><input name="available" value="2"  role="radio" aria-label="2" type="radio"></div>
                                            <div class="col-sm-2"><input name="available" value="1"  role="radio" aria-label="1" type="radio"></div>
                                        </div>

                                        <div class="col-lg-12 text-success h5">
                                            <div class="col-sm-5">I always get the information and services that I need from the website.</div>
                                            <div class="col-sm-2"><input name="services" value="4"  role="radio" aria-label="4" type="radio"></div>
                                            <div class="col-sm-1"><input name="services" value="3"  role="radio" aria-label="3" type="radio"></div>
                                            <div class="col-sm-1"><input name="services" value="2"  role="radio" aria-label="2" type="radio"></div>
                                            <div class="col-sm-2"><input name="services" value="1"  role="radio" aria-label="1" type="radio"></div>
                                        </div>

                                        <div class="col-lg-12 ">
                                            <div class="col-sm-5">There is communication when the website is down. </div>
                                            <div class="col-sm-2"><input name="communication" value="4"  role="radio" aria-label="4" type="radio"></div>
                                            <div class="col-sm-1"><input name="communication" value="3"  role="radio" aria-label="3" type="radio"></div>
                                            <div class="col-sm-1"><input name="communication" value="2"  role="radio" aria-label="2" type="radio"></div>
                                            <div class="col-sm-2"><input name="communication" value="1"  role="radio" aria-label="1" type="radio"></div>
                                        </div>

                                        <div class="col-lg-12 text-success h5">
                                            <div class="col-sm-5">The website takes a very short time to load.</div>
                                            <div class="col-sm-2"><input name="_load" value="4"  role="radio" aria-label="4" type="radio"></div>
                                            <div class="col-sm-1"><input name="_load" value="3"  role="radio" aria-label="3" type="radio"></div>
                                            <div class="col-sm-1"><input name="_load" value="2"  role="radio" aria-label="2" type="radio"></div>
                                            <div class="col-sm-2"><input name="_load" value="1"  role="radio" aria-label="1" type="radio"></div>
                                        </div>

                                        <div class="col-lg-12 ">
                                            <div class="col-sm-5">The network infrastructure in the institution is very good and so I can access the website from anywhere on campus.</div>
                                            <div class="col-sm-2"><input name="infrastructure" value="4"  role="radio" aria-label="4" type="radio"></div>
                                            <div class="col-sm-1"><input name="infrastructure" value="3"  role="radio" aria-label="3" type="radio"></div>
                                            <div class="col-sm-1"><input name="infrastructure" value="2"  role="radio" aria-label="2" type="radio"></div>
                                            <div class="col-sm-2"><input name="infrastructure" value="1"  role="radio" aria-label="1" type="radio"></div>
                                        </div>

                                    </div>
                                </div>
                                <!-- END OF QUESTION -->


                                <br>
                                <hr>

                                <!-- START OF QUESTION -->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="col-lg-12 text-info">
                                            6.	Security of the website     	
                                            <br>		
                                        </div>

                                        <div class="col-lg-12 text-muted">
                                            <div class="col-sm-5"></div>
                                            <div class="col-sm-2">Strongly Agree</div>
                                            <div class="col-sm-1">Agree</div>
                                            <div class="col-sm-1">Disagree</div>
                                            <div class="col-sm-2">Strongly Disagree</div>
                                        </div>

                                        <div class="col-lg-12 ">
                                            <div class="col-sm-5">I am aware of the security policies regarding information protection in the institution..</div>
                                            <div class="col-sm-2"><input name="policies" value="4"  role="radio" aria-label="4" type="radio"></div>
                                            <div class="col-sm-1"><input name="policies" value="3"  role="radio" aria-label="3" type="radio"></div>
                                            <div class="col-sm-1"><input name="policies" value="2"  role="radio" aria-label="2" type="radio"></div>
                                            <div class="col-sm-2"><input name="policies" value="1"  role="radio" aria-label="1" type="radio"></div>
                                        </div>

                                        <div class="col-lg-12 text-success h5">
                                            <div class="col-sm-5">I believe that the website is well protected</div>
                                            <div class="col-sm-2"><input name="protected" value="4"  role="radio" aria-label="4" type="radio"></div>
                                            <div class="col-sm-1"><input name="protected" value="3"  role="radio" aria-label="3" type="radio"></div>
                                            <div class="col-sm-1"><input name="protected" value="2"  role="radio" aria-label="2" type="radio"></div>
                                            <div class="col-sm-2"><input name="protected" value="1"  role="radio" aria-label="1" type="radio"></div>
                                        </div>

                                        <div class="col-lg-12 ">
                                            <div class="col-sm-5">The website is protected from malicious attacks.</div>
                                            <div class="col-sm-2"><input name="malicious" value="4"  role="radio" aria-label="4" type="radio"></div>
                                            <div class="col-sm-1"><input name="malicious" value="3"  role="radio" aria-label="3" type="radio"></div>
                                            <div class="col-sm-1"><input name="malicious" value="2"  role="radio" aria-label="2" type="radio"></div>
                                            <div class="col-sm-2"><input name="malicious" value="1"  role="radio" aria-label="1" type="radio"></div>
                                        </div>

                                        <div class="col-lg-12 text-success h5">
                                            <div class="col-sm-5">The website protects unauthorized modification to information.</div>
                                            <div class="col-sm-2"><input name="protects" value="4"  role="radio" aria-label="4" type="radio"></div>
                                            <div class="col-sm-1"><input name="protects" value="3"  role="radio" aria-label="3" type="radio"></div>
                                            <div class="col-sm-1"><input name="protects" value="2"  role="radio" aria-label="2" type="radio"></div>
                                            <div class="col-sm-2"><input name="protects" value="1"  role="radio" aria-label="1" type="radio"></div>
                                        </div>

                                        <div class="col-lg-12 ">
                                            <div class="col-sm-5">The website is secure so as to avoid loss of information</div>
                                            <div class="col-sm-2"><input name="secure" value="4"  role="radio" aria-label="4" type="radio"></div>
                                            <div class="col-sm-1"><input name="secure" value="3"  role="radio" aria-label="3" type="radio"></div>
                                            <div class="col-sm-1"><input name="secure" value="2"  role="radio" aria-label="2" type="radio"></div>
                                            <div class="col-sm-2"><input name="secure" value="1"  role="radio" aria-label="1" type="radio"></div>
                                        </div>

                                    </div>
                                </div>
                                <!-- END OF QUESTION -->


                                <br>
                                <hr>

                                <!-- START OF QUESTION -->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="col-lg-12 text-info">
                                            7.	Service Quality(Quality of information)     	
                                            <br>		
                                        </div>

                                        <div class="col-lg-12 text-muted">
                                            <div class="col-sm-5"></div>
                                            <div class="col-sm-2">Strongly Agree</div>
                                            <div class="col-sm-1">Agree</div>
                                            <div class="col-sm-1">Disagree</div>
                                            <div class="col-sm-2">Strongly Disagree</div>
                                        </div>

                                        <div class="col-lg-12 ">
                                            <div class="col-sm-5">The content on the website is regularly updated</div>
                                            <div class="col-sm-2"><input name="regularly" value="4"  role="radio" aria-label="4" type="radio"></div>
                                            <div class="col-sm-1"><input name="regularly" value="3"  role="radio" aria-label="3" type="radio"></div>
                                            <div class="col-sm-1"><input name="regularly" value="2"  role="radio" aria-label="2" type="radio"></div>
                                            <div class="col-sm-2"><input name="regularly" value="1"  role="radio" aria-label="1" type="radio"></div>
                                        </div>

                                        <div class="col-lg-12 text-success h5">
                                            <div class="col-sm-5">The information posted on the website is valid and accurate</div>
                                            <div class="col-sm-2"><input name="valid" value="4"  role="radio" aria-label="4" type="radio"></div>
                                            <div class="col-sm-1"><input name="valid" value="3"  role="radio" aria-label="3" type="radio"></div>
                                            <div class="col-sm-1"><input name="valid" value="2"  role="radio" aria-label="2" type="radio"></div>
                                            <div class="col-sm-2"><input name="valid" value="1"  role="radio" aria-label="1" type="radio"></div>
                                        </div>

                                        <div class="col-lg-12 ">
                                            <div class="col-sm-5">The information presented is easy to understand</div>
                                            <div class="col-sm-2"><input name="understand" value="4"  role="radio" aria-label="4" type="radio"></div>
                                            <div class="col-sm-1"><input name="understand" value="3"  role="radio" aria-label="3" type="radio"></div>
                                            <div class="col-sm-1"><input name="understand" value="2"  role="radio" aria-label="2" type="radio"></div>
                                            <div class="col-sm-2"><input name="understand" value="1"  role="radio" aria-label="1" type="radio"></div>
                                        </div>

                                        <div class="col-lg-12 text-success h5">
                                            <div class="col-sm-5">The content on the website is varied and changing (dynamic)</div>
                                            <div class="col-sm-2"><input name="varied" value="4"  role="radio" aria-label="4" type="radio"></div>
                                            <div class="col-sm-1"><input name="varied" value="3"  role="radio" aria-label="3" type="radio"></div>
                                            <div class="col-sm-1"><input name="varied" value="2"  role="radio" aria-label="2" type="radio"></div>
                                            <div class="col-sm-2"><input name="varied" value="1"  role="radio" aria-label="1" type="radio"></div>
                                        </div>

                                        <div class="col-lg-12 ">
                                            <div class="col-sm-5">The website shows that the institution considers service quality.</div>
                                            <div class="col-sm-2"><input name="quality" value="4"  role="radio" aria-label="4" type="radio"></div>
                                            <div class="col-sm-1"><input name="quality" value="3"  role="radio" aria-label="3" type="radio"></div>
                                            <div class="col-sm-1"><input name="quality" value="2"  role="radio" aria-label="2" type="radio"></div>
                                            <div class="col-sm-2"><input name="quality" value="1"  role="radio" aria-label="1" type="radio"></div>
                                        </div>

                                    </div>
                                </div>
                                <!-- END OF QUESTION -->
                                
                                
                                
                                <br>
                                <hr>
                                
                                <!-- START OF QUESTION -->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="col-lg-12 text-info">8. Interactivity of the website</div>
                                           
                                            <div class="col-lg-12 text-muted">
                                                <div class="col-sm-5"></div>
                                                <div class="col-sm-2">Strongly Agree</div>
                                                <div class="col-sm-1">Agree</div>
                                                <div class="col-sm-1">Disagree</div>
                                                <div class="col-sm-2">Strongly Disagree</div>
                                            </div>
                                            
                                        <div class="col-lg-12 ">
                                            <div class="col-sm-5">The administrator's responsiveness to users queries is prompt.</div>
                                            <div class="col-sm-2"><input name="prompt" value="4"  role="radio" aria-label="4" type="radio"></div>
                                            <div class="col-sm-1"><input name="prompt" value="3"  role="radio" aria-label="3" type="radio"></div>
                                            <div class="col-sm-1"><input name="prompt" value="2"  role="radio" aria-label="2" type="radio"></div>
                                            <div class="col-sm-2"><input name="prompt" value="1"  role="radio" aria-label="1" type="radio"></div>
                                        </div>
                                           
                                        <div class="col-lg-12 text-success h5">
                                            <div class="col-sm-5">The website has multidimensional online contact mechanism.</div>
                                            <div class="col-sm-2"><input name="multidimensional" value="4"  role="radio" aria-label="4" type="radio"></div>
                                            <div class="col-sm-1"><input name="multidimensional" value="3"  role="radio" aria-label="3" type="radio"></div>
                                            <div class="col-sm-1"><input name="multidimensional" value="2"  role="radio" aria-label="2" type="radio"></div>
                                            <div class="col-sm-2"><input name="multidimensional" value="1"  role="radio" aria-label="1" type="radio"></div>
                                        </div>
                                           
                                        <div class="col-lg-12 ">
                                            <div class="col-sm-5">Guidelines to users on several online tools are very effective.</div>
                                            <div class="col-sm-2"><input name="effective" value="4"  role="radio" aria-label="4" type="radio"></div>
                                            <div class="col-sm-1"><input name="effective" value="3"  role="radio" aria-label="3" type="radio"></div>
                                            <div class="col-sm-1"><input name="effective" value="2"  role="radio" aria-label="2" type="radio"></div>
                                            <div class="col-sm-2"><input name="effective" value="1"  role="radio" aria-label="1" type="radio"></div>
                                        </div>
                                           
                                        <div class="col-lg-12 text-success h5">
                                            <div class="col-sm-5">The website information is available in different languages.</div>
                                            <div class="col-sm-2"><input name="languages" value="4"  role="radio" aria-label="4" type="radio"></div>
                                            <div class="col-sm-1"><input name="languages" value="3"  role="radio" aria-label="3" type="radio"></div>
                                            <div class="col-sm-1"><input name="languages" value="2"  role="radio" aria-label="2" type="radio"></div>
                                            <div class="col-sm-2"><input name="languages" value="1"  role="radio" aria-label="1" type="radio"></div>
                                        </div>
                                           
                                        <div class="col-lg-12 ">
                                            <div class="col-sm-5">Online synchronous communication facilities is available on the website.</div>
                                            <div class="col-sm-2"><input name="synchronous" value="4"  role="radio" aria-label="4" type="radio"></div>
                                            <div class="col-sm-1"><input name="synchronous" value="3"  role="radio" aria-label="3" type="radio"></div>
                                            <div class="col-sm-1"><input name="synchronous" value="2"  role="radio" aria-label="2" type="radio"></div>
                                            <div class="col-sm-2"><input name="synchronous" value="1"  role="radio" aria-label="1" type="radio"></div>
                                        </div>
                                            
                                        
                                    </div>
                                </div>
                                <!-- END OF QUESTION -->

                                <br>
                                <hr>

                                <div class="col-lg-12">
                                    <div class="col-lg-12">
                                        <div class="text-info  ">
                                            9.   What weight would you assign to each of these attributes given the range of 1-5 <code>where 5 is the most important and 1 the least important</code> 

                                        </div>
                                    </div>

                                </div>


                                

                                <!-- START OF QUESTION -->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="col-lg-12 text-muted">
                                            <div class="col-sm-5"></div>
                                            <div class="col-sm-2">5</div>
                                            <div class="col-sm-1">4</div>
                                            <div class="col-sm-1">3</div>
                                            <div class="col-sm-1">2</div>
                                            <div class="col-sm-2">1</div>
                                        </div>

                                        <div class="col-lg-12 ">
                                            <div class="col-sm-5">Usability</div>
                                            <div class="col-sm-2"><input name="usability" value="5"  role="radio" aria-label="5" type="radio"></div>
                                            <div class="col-sm-1"><input name="usability" value="4"  role="radio" aria-label="4" type="radio"></div>
                                            <div class="col-sm-1"><input name="usability" value="3"  role="radio" aria-label="3" type="radio"></div>
                                            <div class="col-sm-1"><input name="usability" value="2"  role="radio" aria-label="2" type="radio"></div>
                                            <div class="col-sm-2"><input name="usability" value="1"  role="radio" aria-label="1" type="radio"></div>
                                        </div>

                                        <div class="col-lg-12 text-success h5">
                                            <div class="col-sm-5">Functionality</div>
                                            <div class="col-sm-2"><input name="functionality" value="5"  role="radio" aria-label="5" type="radio"></div>
                                            <div class="col-sm-1"><input name="functionality" value="4"  role="radio" aria-label="4" type="radio"></div>
                                            <div class="col-sm-1"><input name="functionality" value="3"  role="radio" aria-label="3" type="radio"></div>
                                            <div class="col-sm-1"><input name="functionality" value="2"  role="radio" aria-label="2" type="radio"></div>
                                            <div class="col-sm-2"><input name="functionality" value="1"  role="radio" aria-label="1" type="radio"></div>
                                        </div>

                                        <div class="col-lg-12 ">
                                            <div class="col-sm-5">Reliability</div>
                                            <div class="col-sm-2"><input name="reliability" value="5"  role="radio" aria-label="5" type="radio"></div>
                                            <div class="col-sm-1"><input name="reliability" value="4"  role="radio" aria-label="4" type="radio"></div>
                                            <div class="col-sm-1"><input name="reliability" value="3"  role="radio" aria-label="3" type="radio"></div>
                                            <div class="col-sm-1"><input name="reliability" value="2"  role="radio" aria-label="2" type="radio"></div>
                                            <div class="col-sm-2"><input name="reliability" value="1"  role="radio" aria-label="1" type="radio"></div>
                                        </div>

                                        <div class="col-lg-12 text-success h5">
                                            <div class="col-sm-5">Efficiency</div>
                                            <div class="col-sm-2"><input name="eff" value="5"  role="radio" aria-label="5" type="radio"></div>
                                            <div class="col-sm-1"><input name="eff" value="4"  role="radio" aria-label="4" type="radio"></div>
                                            <div class="col-sm-1"><input name="eff" value="3"  role="radio" aria-label="3" type="radio"></div>
                                            <div class="col-sm-1"><input name="eff" value="2"  role="radio" aria-label="2" type="radio"></div>
                                            <div class="col-sm-2"><input name="eff" value="1"  role="radio" aria-label="1" type="radio"></div>
                                        </div>

                                        <div class="col-lg-12 ">
                                            <div class="col-sm-5">Security</div>
                                            <div class="col-sm-2"><input name="security" value="5"  role="radio" aria-label="5" type="radio"></div>
                                            <div class="col-sm-1"><input name="security" value="4"  role="radio" aria-label="4" type="radio"></div>
                                            <div class="col-sm-1"><input name="security" value="3"  role="radio" aria-label="3" type="radio"></div>
                                            <div class="col-sm-1"><input name="security" value="2"  role="radio" aria-label="2" type="radio"></div>
                                            <div class="col-sm-2"><input name="security" value="1"  role="radio" aria-label="1" type="radio"></div>
                                        </div>

                                        <div class="col-lg-12 text-success h5" >
                                            <div class="col-sm-5">Availability</div>
                                            <div class="col-sm-2"><input name="availability" value="5"  role="radio" aria-label="5" type="radio"></div>
                                            <div class="col-sm-1"><input name="availability" value="4"  role="radio" aria-label="4" type="radio"></div>
                                            <div class="col-sm-1"><input name="availability" value="3"  role="radio" aria-label="3" type="radio"></div>
                                            <div class="col-sm-1"><input name="availability" value="2"  role="radio" aria-label="2" type="radio"></div>
                                            <div class="col-sm-2"><input name="availability" value="1"  role="radio" aria-label="1" type="radio"></div>
                                        </div>

                                    </div>
                                </div>
                                <!-- END OF QUESTION -->

                                <br>
                                <hr>



                                <!-- START OF QUESTION -->
                                <div class="row">
                                    <div class="col-lg-12">

                                        <div class="col-lg-5 text-info">
                                            10.In your own opinions what improvements would you want to see on the university website? 
                                        </div>
                                        <div class="col-lg-7">
                                            <textarea class="center-block" name="q9" style="padding: 10px;"  rows="4" required cols="50"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <!-- END OF QUESTION -->

                                <br><hr>

                                <!-- START OF QUESTION -->
                                <div class="row">
                                    <div class="col-lg-12">

                                        <div class="col-lg-5 text-info">
                                            11.In your opinion is there any other attribute(parameters) that you think should be considered in evaluating the institutions website? 
                                        </div>
                                        <div class="col-lg-7">
                                            <textarea class="center-block" name="q10" style="padding: 10px;"  required rows="4" cols="50"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <!-- END OF QUESTION -->


                                <br><hr>

                                <!-- START OF QUESTION -->
                                <div class="row">
                                    <div class="col-lg-12">

                                        <div class="col-lg-5 text-info">
                                            12.Are there any services that you would wish was offered by the website? 
                                        </div>
                                        <div class="col-lg-7">
                                            <textarea class="center-block" style="padding: 10px;" name="q11" required rows="4" cols="50"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <!-- END OF QUESTION -->

                                <br><hr>



                                <!-- START OF QUESTION -->
                                <div class="col-lg-12">
                                    <div class="col-lg-5">
                                        <input type="hidden" name="contributor" id="user">
                                        <input class="btn btn-success perspective" type="submit" value="SUBMIT">
                                    </div>
                                </div>
                                <!-- END OF QUESTION -->

                            </div>


                            <!--  END OF QUESTIONS -->

                        </div>
                        <!-- END  ALERT -->
                    </form>
                </div><!-- /.container-fluid -->





                <!-- BEGIN FOOTER -->
                <footer id="footer">

                </footer>
                <!-- END FOOTER -->


            </div><!-- /.page-content -->
        </div><!-- /.wrapper -->
        <!-- END PAGE CONTENT -->






        <!--
===========================================================
END PAGE
===========================================================
-->

        <!--
===========================================================
Placed at the end of the document so the pages load faster
===========================================================
-->
        <!-- MAIN JAVASRCIPT (REQUIRED ALL PAGE)-->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/plugins/retina/retina.min.js"></script>
        <script src="assets/plugins/nicescroll/jquery.nicescroll.js"></script>
        <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
        <script src="assets/plugins/backstretch/jquery.backstretch.min.js"></script>
        <script src="assets/plugins/prettify/prettify.js"></script>

        <!-- EASY PIE CHART JS -->
        <script src="assets/plugins/easypie-chart/easypiechart.min.js"></script>
        <script src="assets/plugins/easypie-chart/jquery.easypiechart.min.js"></script>



        <!-- MAIN APPS JS -->
        <script src="assets/js/apps.js"></script>
        <script>

        $done = false;
            $(function(){

            	$("#email").focus();
            	
            	$(document).keypress(function(e){ 
					if( e.which == 13 ){
						loginValidate();
					}
            	});
               
                //_questions.removeClass("hidden");
                //_doLogin.addClass("hidden");
				_login      = $("#login");
				
                _login.click(function(){

                	loginValidate();
                    
                });

            });

			function loginValidate(){
				$(function(){ 

			 	_email      = $("#email");
                _doLogin    = $("#doLogin");
                _questions  = $("#questions");
                _user 		= $("#user");
                _resp 		= $("#resp");
							
				if(_email.val().length > 5){
                    $.post(
                        "email_proc.php", 
                        { email: _email.val() }, 
                        function(data){
                            data = JSON.parse(data);

                            //check if the server returned a success message
                            if(data.response === "SUCCESS" && $done === false ){
                            	
                                //HIDE THE EMAIL FIELD AND DISPLAY THE QUESTIONS
                                _doLogin.addClass("hidden");
                                _user.val( _email.val() );
                                //fade the questions in slowly
                                _questions.removeClass("hidden");
                                _questions.fadeIn('slow');

                                //Prevent the handling of any more login requests
                            	$done = true;

                            }else if(data.response === "ERROR" && $done === false){

                                _resp.html();
                                _resp.addClass("text-danger");
                                _resp.removeClass("text-muted");
                                _resp.addClass("h3");
                                _resp.html( data.data.message );

                            }

                        }
                    );
                }else{
                    _email.focus();
                }

				});
			}
            

        </script>

    </body>
</html>
