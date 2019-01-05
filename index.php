<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="CHEMO CONFLUENCE is one of the main event organised by VISHWAKARMA GOVERMENT ENGINEERING college hosted by CHEMICAL DEPARTMENT">
    <meta name="keywords" content="chem-o-fluence, vishwakarma goverment engineering college, chemoconfluence2k17,akshay amabaliya, sanghani vatsal,kishan dobariya">

    <title>Calendar</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
   <!-- <link href="calendar.css" rel="stylesheet" type="text/css" />
    <!-- Theme CSS -->
    <link href="css/agency.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js" integrity="sha384-0s5Pv64cNZJieYFkXYOTId2HMA2Lfb6q2nAcx2n0RTLUnCAoTTsS0nKEO27XyKcY" crossorigin="anonymous"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js" integrity="sha384-ZoaMbDF+4LeFxg6WdScQ9nnR1QC2MIRxA1O9KWEXQwns1G8UNyIEZIQidzb0T1fo" crossorigin="anonymous"></script>
    <![endif]-->
    <style type="text/css">
        @import url(http://fonts.googleapis.com/css?family=Montserrat:400,700);


        #feedback-page{
            text-align:center;
        }

        #form-main{
            width:100%;
            float:left;
            padding-top:0px;
        }

        #form-div {
            background-color:rgba(72,72,72,0.4);
            padding-left:35px;
            padding-right:35px;
            padding-top:35px;
            padding-bottom:50px;
            width: 450px;
            float: left;
            left: 50%;
            position: absolute;
            margin-top:30px;
            margin-left: -260px;
            -moz-border-radius: 7px;
            -webkit-border-radius: 7px;
        }

        .feedback-input {
            color:#3c3c3c;
            font-family: Helvetica, Arial, sans-serif;
            font-weight:500;
            font-size: 18px;
            border-radius: 0;
            line-height: 22px;
            background-color: #fbfbfb;
            padding: 13px 13px 13px 54px;
            margin-bottom: 10px;
            width:100%;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            -ms-box-sizing: border-box;
            box-sizing: border-box;
            border: 3px solid rgba(0,0,0,0);
        }

        .feedback-input:focus{
            background: #fff;
            box-shadow: 0;
            border: 3px solid #3498db;
            color: #3498db;
            outline: none;
            padding: 13px 13px 13px 54px;
        }

        .focused{
            color:#30aed6;
            border:#30aed6 solid 3px;
        }

        /* Icons ---------------------------------- */
        #name{
            /*background-image: url(http://rexkirby.com/kirbyandson/images/name.svg);*/
            background-size: 30px 30px;
            background-position: 11px 8px;
            background-repeat: no-repeat;
        }
        #number{
            /*background-image: url(img/phon.png);*/
            background-size: 30px 30px;
            background-position: 11px 8px;
            background-repeat: no-repeat;
        }
        #college{
            /*background-image: url(img/college.png);*/
            background-size: 30px 30px;
            background-position: 11px 8px;
            background-repeat: no-repeat;
        }
        #cal{
            /*background-image: url(img/cal.png);*/
            background-size: 30px 30px;
            background-position: 11px 8px;
            background-repeat: no-repeat;
        }
        #gen{
            /*background-image: url(img/gen.png);*/
            background-size: 30px 30px;
            background-position: 11px 8px;
            background-repeat: no-repeat;
        }

        #name:focus{
            background-image: url(http://rexkirby.com/kirbyandson/images/name.svg);
            background-size: 30px 30px;
            background-position: 8px 5px;
            background-position: 11px 8px;
            background-repeat: no-repeat;
        }

        #email{
            /*background-image: url(http://rexkirby.com/kirbyandson/images/email.svg);*/
            background-size: 30px 30px;
            background-position: 11px 8px;
            background-repeat: no-repeat;
        }

        #email:focus{
            background-image: url(http://rexkirby.com/kirbyandson/images/email.svg);
            background-size: 30px 30px;
            background-position: 11px 8px;
            background-repeat: no-repeat;
        }

        #comment{
            background-image: url(http://rexkirby.com/kirbyandson/images/comment.svg);
            background-size: 30px 30px;
            background-position: 11px 8px;
            background-repeat: no-repeat;
        }

        textarea {
            width: 100%;
            height: 150px;
            line-height: 150%;
            resize:vertical;
        }

        input:hover, textarea:hover,
        input:focus, textarea:focus {
            background-color:white;
        }

        #button-blue{
            font-family: 'Montserrat', Arial, Helvetica, sans-serif;
            float:left;
            width: 100%;
            border: #fbfbfb solid 4px;
            cursor:pointer;
            background-color: #3498db;
            color:white;
            font-size:24px;
            padding-top:22px;
            padding-bottom:22px;
            -webkit-transition: all 0.3s;
            -moz-transition: all 0.3s;
            transition: all 0.3s;
            margin-top:-4px;
            font-weight:700;
        }

        #button-blue:hover{
            background-color: rgba(0,0,0,0);
            color: #0493bd;
        }

        .submit:hover {
            color: #3498db;
        }

        .ease {
            width: 0px;
            height: 74px;
            background-color: #fbfbfb;
            -webkit-transition: .3s ease;
            -moz-transition: .3s ease;
            -o-transition: .3s ease;
            -ms-transition: .3s ease;
            transition: .3s ease;
        }

        .submit:hover .ease{
            width:100%;
            background-color:white;
        }

        @media only screen and (max-width: 580px) {
            #form-div{
                left: 3%;
                margin-right: 3%;
                width: 88%;
                margin-left: 0;
                padding-left: 3%;
                padding-right: 3%;
            }
        }
    </style>

</head>

<body id="page-top" class="index">
   <!-- <div class="loader">

    </div>-->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right" style="text-align: center">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#page-top">ABOUT</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#portfolio">WORKSHOPS</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">SEMINARS</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#team">SYMPOSIUM</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">CONFERENCES</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">MORE</a>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <?php
            
                include('example-page.php');

            ?>
        </div>
    </header>



    <!-- technical Grid Section -->
    <section id="portfolio" style="background-color: #c5d5cb;margin-bottom: -50px; margin-top: 10px;" >
        <div class="container">
            <div class="row" style="margin-top: -100px; margin-bottom: 20px;background-color: transparent;">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading" >WORKSHOP</h2>
                    <!--<h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>-->
                </div>
            </div>
            <div class="row" >
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <!--<div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i>click for details</i>
                            </div>
                        </div>-->
                        <img style="width: 250px; margin-left: 50px;" src="img/work3.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption" style="background-color: transparent;">
                        <h4>IT & COMPUTER</h4>
                        <!--<p class="text-muted">Graphic Design</p>-->
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <!--<div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i>click for details</i>
                            </div>
                        </div>-->
                        <img  style="width: 250px; margin-left: 50px;" src="img/work5.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption" style="background-color: transparent;">
                        <h4>CHEMICAL</h4>
                        <!--<p class="text-muted">Website Design</p>-->
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <!--<div class="portfolio-hover">
                           <div class="portfolio-hover-content">
                                <i>click for details</i>
                            </div>
                        </div>-->
                        <img  style="width: 250px; margin-left: 50px;" src="img/work2.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption" style="background-color: transparent;">
                        <h4>MECHANICAL</h4>
                        <!--<p class="text-muted">Website Design</p>-->
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                        <!--<div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i>click for details</i>
                            </div>
                        </div>-->
                        <img style="width: 250px; margin-left: 50px;" src="img/work4.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption" style="background-color: transparent;">
                        <h4>CIVIL</h4>
                        <!--<p class="text-muted">Website Design</p>-->
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                        <!--<div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i>click for details</i>
                            </div>
                        </div>-->
                        <img style="width: 250px; margin-left: 50px;" src="img/work6.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption" style="background-color: transparent;">
                        <h4>ELECTRICAL</h4>
                        <!--<p class="text-muted">Website Design</p>-->
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                        <!--<div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i>click for details</i>
                            </div>
                        </div>-->
                        <img style="width: 250px;height: 250px; margin-left: 50px;" src="img/work1.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption" style="background-color: transparent;">
                        <h4>COMMUNICATION</h4>
                        <!--<p class="text-muted">Website Design</p>-->
                    </div>
                </div>
                
                
            </div>
        </div>
    </section>



    <!-- About Section -->
    <section id="about" style="margin-top: -60px;background-color: #e3e0cf; text-align: center;">
        <div class="container">
            <div class="row" style="margin-top: -100px; margin-bottom: 10px;">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">SEMINARS</h2>
                    <!--<h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>-->
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModaln1" class="portfolio-link" data-toggle="modal">
                        <!--<div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i>click for details</i>
                            </div>
                        </div>-->
                        <img style="width: 250px; margin-left: 50px;" src="img/work3.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption" style="background-color: transparent;">
                        <h4>IT & COMP</h4>
                        <!--<p class="text-muted">Graphic Design</p>-->
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModaln2" class="portfolio-link" data-toggle="modal">
                        <!--<div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i>click for details</i>
                            </div>
                        </div>-->
                        <img style="width: 250px; margin-left: 50px;" src="img/work5.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption" style="background-color: transparent;">
                        <h4>CHEMICAL</h4>
                        <!--<p class="text-muted">Website Design</p>-->
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModaln3" class="portfolio-link" data-toggle="modal">
                        <!--<div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i>click for details</i>
                            </div>
                        </div>-->
                        <img style="width: 250px; margin-left: 50px;" src="img/work2.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption" style="background-color: transparent;">
                        <h4>MICANICAL</h4>
                        <!--<p class="text-muted">Website Design</p>-->
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModaln4" class="portfolio-link" data-toggle="modal">
                        <!--<div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i>click for details</i>
                            </div>
                        </div>-->
                        <img style="width: 250px; margin-left: 50px;" src="img/work4.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption" style="background-color: transparent;">
                        <h4>CIVIL</h4>
                        <!--<p class="text-muted">Website Design</p>-->
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModaln5" class="portfolio-link" data-toggle="modal">
                        <!--<div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i>click for details</i>
                            </div>
                        </div>-->
                        <img style="width: 250px; margin-left: 50px;" src="img/work6.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption" style="background-color: transparent;">
                        <h4>ELECTRICAL</h4>
                        <!--<p class="text-muted">Website Design</p>-->
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModaln6" class="portfolio-link" data-toggle="modal">
                        <!--<div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i>click for details</i>
                            </div>
                        </div>-->
                        <img style="width: 250px;height: 250px; margin-left: 50px;" src="img/work1.png" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption" style="background-color: transparent;">
                        <h4>COMMUNICATION</h4>
                        <!--<p class="text-muted">Website Design</p>-->
                    </div>
                </div>

                
                
                
                
                
            </div>
        </div>
    </section>

    <section id="team" class="bg-light-gray" style="padding-top: 40px;">
        <div class="container">
            <div class="alumni-image" style="margin: 0px;padding: 0px;">
                <img src="img/symposium.jpg" style="width: 100%;height: 90%;">
            </div>
            <div class="alumni-data" >
                <h3>symposium</h3>
                <p style="font-size: 20px;">a meeting or conference for the discussion of some subject, especially a meeting at which several speakers talk on or discuss a topic before an audience.

                 <p>a collection of opinions expressed or articles contributed by several persons on a given subject or topic.</p>

                 <p>an account of a discussion meeting or of the conversation at it.</p>

                 <p>(in ancient Greece and Rome) a convivial meeting, usually following a dinner, for drinking and intellectual conversation.</p>

                 <p>(initial capital letter, italics) a philosophical dialogue (4th century b.c.) by Plato, dealing with ideal love and the vision of absolute</p> beauty.
                    <br>
                
                

            </div>
        </div>
    </section>

    <!--accomodation form-->
    <section id="contact" style="">
        <div class="container" >
            <div class="row">
                <div class="col-lg-12 text-center" style="margin-bottom: 30px;margin-top: -15px;">

                        <button type="submit" class="btn btn-xl" href="#portfolioModalr" class="portfolio-link" data-toggle="modal">TODAY</button>
                </div>

            </div>

            <div class="row">
                <div class="col-lg-12">
                    <p style="text-align: center; font-size: 30px; color: #FFFFFF"><b>Conference </b></p>
                    
                </div>
                </div>
        </div>
    </section>
    <section id="services">
        <div class="container">
            <div class="row">

            </div>
            <div class="row text-center">
                <div class="col-md-4" class="about-1">

                    <h4 class="service-heading">MORE </h4>
                    
                </div>

                <div class="col-md-4">
                    <h4 class="service-heading">Contact US </h4>
                    <p class="text-muted"></p>
                    
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                
                <div class="col-md-4">
                    <ul class="list-inline social-buttons">
                        <li><a href="https://facebook.com/chemoconfluence2k17"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li><a href="https://instagram.com/chemoconfluence2k17"><i class="fa fa-instagram"></i></a>
                        </li>
                        <li><a href="https://twitter.com/chemoconfluence"><i class="fa fa-twitter"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="list-inline quicklinks">

                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->

    <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h3>CHEM-O-MISSILE</h3>
        <b>Description</b>
        <p>We chemical engineers are very experts at explosive ideas, but wait a second, for here you need to get your mind on a way that can go much far as        possible but without explosion, and that is the main point here. So get yourself ready for the event “Chemo-missile”.
            Prepare a missile from any material that would use no explosive chemicals and would take the minds of each and every one present there to the highest point one can imagine and if you worth it, then you are just going to create history.
            With an idea of Green and clean environment we here use only water and pressure combination to make fly your rocket.
        </p>
    <ul        style="text-align: left;">
        <b>Rules and Regulations</b> 
        <br>
        <li>Only team entries are eligible, a team shall consist of minimum 2 participants and max. 3 participants</li>
        <li>Maximum 3 chances will be given to participants and highest distance among all 3 chances will be considered.</li>
        <li>Any toxic materials and chemicals are not allowed.</li>
        <li>Maximum horizontal distance will be taken as a final result from those 3 chances</li>
        <li>Missile dimension: Length: 45 cm, Diameter: 12 cm (Max.).</li>
        <li>Detailed information about round will be given on the day of event</li>
        <li>The projectile would be launched from a common launching pad, launcher pad and hand pump for chemical missile will be given from event organizers.</li>
        <li>he decision of the event manager will be final and will not be subjected to any change.</li>
    </ul>
    <ul        style="text-align: left;"><b>Judging Criteria</b>
         <li>Round 1 (Distance Round)
            <p>All the participants will have 3 chances and maximum horizontal distance will be considered from these 3 chances.
            </p>
        </li>
        <li>Round 2 (Accuraccy puzzles)
            <p>Participants who have attended maximum horizontal distance in Round 1 can go ahead in Round 2 and others will be eliminated. In this round participants should try to reach accurate horizontal distance as per given. For ex. A prop placed at 70 meter.
            </p>
        </li>
        <li>Round 3(Speed Round)
            <p>Now, the participants who have attended most accurate distance in Round 2 can go ahead in Round 3 but here the task is different from the previous 2 Rounds. In Round 3, the missiles are not to attend not only a horizontal distance but also have to attend a max speed too. Winners will be announced on the basis of horizontal distance attended and maximum speed.
            </p>
        </li>
    </ul>
    <table>
        <td><b>EVENT MANAGERS</b></td>
        <tr>    
            <td>DivyeshAgrawal</td>
            <td>7778897424</td>
        </tr>
        <tr>
            <td>Yash Kothari</td>
            <td>8866103084</td>
        </tr>
    </table>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <h3>CHEM-O–HUNT</h3>
        <b>Description</b>
        <p>A mystifying and grand event in chemical engineering history. This time it’s even more complicated, puzzled, and difficult way to reach the final treasure than earlier. Here you can apply your knowledge of chemical engineering to solve most mysterious and puzzled questions to reach the Ultimate Treasure at the END. In this event you will explore each and every section of Vishwakarmacollege and nearby places. You need to think in an innovative way having perfect qualities of EXPLORER thinking in an innovative way , which brings you one step forward to the race to the treasure. So get ready for brainstorming of mind!!!!!
        </p>
    <ul       style="text-align: left;">
        <b>Rules and Regulations</b> 
        <br>
        <li>Only team entries are eligible, a team shall consist of 2-3 members.</li>
        <li>There will be 4 rounds, First 3 rounds will be held on 1st Day.</li>
        <li>Final round will be held on the 2nd day.</li>
        <li>Multiple teams from the same college are allowed to participate in the event.</li>
        <li>Task must be completed into the given time interval.</li>
        <li>Teams completing its task before the given time interval will get extra points& advantage.</li>
        <li>Rules can be changed according to conditions in event.</li>
        <li>The teams must strictly follow all the deadlines failing to which will  lead to their disqualification.</li>
        <li>The decision of the event manager will be final and will not be subjected to any change.</li>
    </ul>
    <ul      style="text-align: left;">
    <b>Judging Criteria</b>
    <br>
         <ul>Round 1 (Elimination Round)
            <li>All teams have to participate in Round 1.</li>
            <li>Teams will be evaluated by no. of picture puzzles solved by them.</li>
            <li>The teams qualifying the Round 1 shall move on to the next round.</li>
          </ul>
        </li>
        <ul>Round 2 (Crossword puzzles)
            <li>Those teams whichwill qualify in Round 1 will have to participate in this round. </li>
            <li>This round includes crossword Puzzle.</li>
            <li>Those particular teams who solve the puzzle in the quickest time will move to 3rd round.</li>
        </ul>
        <ul>Round 3(Puzzles& Riddles)
            <li>Those teams who all are qualified in Round 2 have to participate in this round.</li>
            <li>In this round teams need to solve the riddles and puzzles given to them; who scores high moves to final round.</li>
        </ul>
        <ul>Round 4(Hunt to the treasure)
            <li>Those teams who all are qualified in Round 3 will participate in this round..</li>
            <li>It is a chemical hunt.Teams who solves the clues fastest are declared as winner.</li>
        </ul>
    </ul>
    <table>
        <td><b>EVENT MANAGERS</b></td>
        <tr>    
            <td>JigarJakhariya</td>
            <td>9978216645</td>
        </tr>
        <tr>
            <td>Jay Prajapati   </td>
            <td>8154802120</td>
        </tr>
        <tr>
            <td>SavanBhut</td>
            <td>8347141243</td>
        </tr>
    </table>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h3>CHAIN REACTION</h3>
        <b>Description</b>
        <p>Chain Reaction event is like Chain reaction machine, when you disturb only single object whole chain should be affect. Most of us have seen this event in Discovery channel’s program ‘The Unchained Reactions’. Just need to perform some energy conversion with chemicals like Volume expansion, Use of Fire, Use of Fuel etc.
        </p>
    <ul style="text-align: left;">
        <b>Rules and Regulations</b>
        <br> 
        <li>Participants have to bring their own models using waste materials with minimum 5 different energy conversions. After that it can be repeated.</li>
        <li>There should be at least one chemical energy conversion and it can be at any no. in a chain reaction.</li>
        <li>Some bonus points are kept for innovation & extra energy conversions, eco-friendly contraception and shall be decided by judge and coordinators.</li>
        <li>Participants are required to submit detailed abstract of their contraception. It should contain how you are going to perform, explaining each and every step, total number of steps, number of different energy conversions. Participants can make flowcharts to explain any step.</li>
        <li>Maximum Allowable Members: 4(four).</li>
        <li>Arena Specification: 7ft*7ft.</li>
        <li>An initial setup of 150 minutes will be given to each team.</li>
        <li>Contraception must be safe and use of explosives is not allowed.</li>
        <li>Only two trials or attempts are allowed.</li>
        <li>A setup time of 50 minutes will be given for second trial.</li>
        <li>Maximum 2 hand touches are allowed, for further hand touches points will be deducted or may lead to disqualification.</li>
        <li>External power supply is not allowed.</li>
        <li>If you want to use any other electronic items (i.e. mobile, battery, solenoid, etc) then mention it at the time of starting the competition.</li>
    </ul>
    
    <ul  style="text-align: left;">
        <b>Judging Criteria</b>
        
        <li>No of trials that the participant team attempt.</li>
        <li>The time till the continuous energy conversions take place.</li>
        <li>The outlook of the contraception design.</li>
        <li>No. of hand touches you involve in the complete process.</li>
        <li>The maximum No. of energy conversions are there in your design.</li>
        <li>Some bonus points will be given for the extra & innovative energy conversions.</li>
     </ul>
    <table>
        <td><b>EVENT MANAGERS</b></td>
        <tr>    
            <td>PallashMukherjee</td>
            <td>9904840260</td>
        </tr>
        <tr>
            <td>Neel Nagaria</td>
            <td>9099549278</td>
        </tr>
        <tr>
            <td>KarishmaPadmashali</td>
            <td>7600762702</td>
        </tr>
    </table>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h3>CHEM-O- FLOW</h3>
        <b>Description</b>
        <p>We chemical engineers are very expert painters of flow sheet, seriously!!! Where you can show your knowledge of chemical process industries to solve the most difficult puzzles of flow sheets of various products. So brush up your flowsheets, processing knowledge and  get yourself registered for the event ‘Chem-o-flow’ and Solve the puzzle of a flow sheet of any chemical product that you will face.
        </p>
    <ul   style="text-align: left;">
        <b>Rules and Regulations</b> 
        <li>Only team entries are eligible, a team shall consist of min. 2 participants and maximum 3 Participants. </li>
        <li>Participants are not allowed to use any type of book or electronic devices. </li>
        <li>Multiple teams from the same college are allowed to participate for the event. </li>
        <li>The teams must strictly follow all the deadlines failing to which will lead to their disqualification..</li>
        <li>Rules can be changed according to conditions in event.</li>
        <li>The decision of the event manager will be final and will not be subjected to any change.</li>
        
    </ul>
    <ul  style="text-align: left;">
    <b>Judging Criteria</b>
         <ul>Round 1 (Elimination Round (15points))
            <li>The teams will be evaluated by their skill to identify some devices/parts used in chemical industries. (10 pictures are shown to the teams and they should identify them  and make a list within a given time.)And also 5 questions are asked and answers should be written in above list.</li>
            <li>Top 16 teams are qualified based upon their performance.</li>
         </ul>
        </li>
        <ul>Round 2 (Battles/Semis (7 points))
            <li>16 teams are divided into 8 groups each having 2 teams. They compete with each Other and winner of the battle (8 teams) are going to compete in finale. </li>
            <li>In this round, teams should identify the missing parts of the flow sheet and try to complete them within a given time.</li>
        </ul>
        <ul>Round 3 (Finale( Jigshaw Puzzle))
            <li>In this round, a puzzle is given to the teams in batch wise manner and after every batch bottom three & two teams are eliminated per batch respectively. </li>
            <li>Top three teams are declared as winners.</li>
        </ul>
        
    </ul>
    <ul style="text-align: left;">
        <b>Judging Criteria</b>
        <li>The judgment of the competition will be done on the basis of above mentioned rounds.</li>
        <li>The selection criteria for the next round are based on timing and score given by event manager. </li>
        <li>Round 1: (+1) mark for each correct answer. (-1) mark for each wrong answer.</li>
        <li>Round 2: In the battles, team which gets higher points is qualified for finale.</li>
        <li>Round 3: Skill to solve puzzle as early and precisely as possible is considered here.  </li>
    </ul>
    <table>
        <td><b>EVENT MANAGERS</b></td>
        <tr>    
            <td>Patel Yash </td>
            <td>9737260364</td>
        </tr>
        <tr>
            <td>Patel Bhavya</td>
            <td>7575877626</td>
        </tr>
    </table>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 5 -->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                               <h3>POSTER PRESENTATION</h3>
        <b>Description</b>
        <p>
            As goes the famous quote, “A picture is worth a thousand words” 
            We believe in that and to find the living proof of that you need to do nothing but just come and join the Chem – Blusher which provides the perfect launch pad for the rocking imaginations which wait to be assembled on the canvas of the skies of your minds with chemical lochas…..
        </p>
    <ul style="text-align:left;">
        <b>Rules and Regulations</b> 
        <li>Maximum two people in one team.</li>
        <li>Poster size should be A2 (210 mm x 297mm) size.</li>
        <li>Don’t stick photos on poster.</li>
        <li>Poster can be handmade or computerized/</li>
        <li>Time duration: Presentation = 10 minutes; Question/Answer = 5 minutes.</li>
        <li>Content must be readable from at least 3m.</li>
        <li>Evaluation of poster will be depend on decision of judge.</li>
        <li>Model should be strictly related to Chemical engineering topics.</li>
        <li>Participants will have to face some questions from the judge regarding their model.</li>
        <li>Multiple teams from the same college are allowed to participate for the event. </li>
        <li>The teams must strictly follow all the deadlines failing to which will lead to their disqualification.</li>
    </ul>
    <ul style="text-align:left;">
        <b>Themes for Posters:</b>
        <li>Prevention of Ozone Layer depletion.</li>
        <li>Waste effluent (solid) treatment and disposal.</li>
        <li>Polymer Technology.</li>
        <li>Pollution control.</li>
    </ul>
    <ul style="text-align:left;">
        <b>Judging criteria</b>
        <li>Innovativeness</li>
        <li>Concepts use</li>
        <li>Economic Ideas</li>
        <li>Explanation of topic</li>
        <li>Proper response of question asked by judge</li>
    </ul>
    <table>
        <tr>
            <td>Ajay Gami</td>         
            <td>8153078079</td>
        </tr>
        <tr>
            <td>Dhaval Rankaja</td> 
            <td>8980726565</td>
        </tr>
    </table>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 6 -->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h3>CHEM-O-LIVE</h3>
        <b>Description</b>
        <p>Hey guys, it’s time to excavate your hidden skills and to build up your ability at practical level. We provide you a platform to test your practical knowledge. So here we introduce our event called CHEM-O-LIVE. It’s time to avail yourself through this event. Here you will be given live tasks like identification of Compounds given to you and many more. So get ready for the Live application of chemical engineering.
        </p>
    <ul style="text-align:left;">
        <b>Rounds</b>
        <ul style="text-align:left;">
            <b>Round 1(Elimination)</b>
            <li>The team will be selected on the basis of an elimination test for further rounds.</li>
            <li>The test will contain 15 questions.</li>
            <li>The time limit will be 15 minutes for test.</li>
            <li>From the eliminated teams only one team will get chance to appear in stage round(15 questions will be asked to each team and negative marking will be there)</li>
            <li>The selected teams shall have to appear for the stage rounds.</li>
        </ul>
        <ul style="text-align:left;">
            <b>Round 2 (Chemical Identification)</b>
            <li>Different chemicals will be given to each team.</li> 
            <li>Hints will be given as per requirements.</li>
            <li>The team have to identify the chemicals.</li>
        </ul>
        <ul style="text-align:left;">
            <b>Round 3 (surprise Task)</b>  
            <li>It will be reveal on the spot.</li>
            <li>It will be surprise for the final teams.</li>
        </ul>
    </ul>
    <ul style="text-align:left;">
        <b>Judging Criteria</b>
        <ul style="text-align:left;">Round 1 (Test your basic)
            <li>1 marks for correct answer for each question and -1/2 (half) for each  wrong answers.</li>
         </ul>
        <ul style="text-align:left;">Round 2 (chemical identification)
            <li>The teams which utilize less hints and minimum time for identification of chemicals will be selected for final round. </li>
        </ul>
        <ul>Round 3 (Finale( final round)
            <li>On the spot</li>
        </ul>
    </ul>
    <ul style="text-align:left;">
        <b>Rules and Underlines</b>
        <li>Only team entries are eligible.</li>
        <li>Team discussion will be allowed.</li>
        <li>A team shall consist of minimum three people.</li>
        <li>The decision of judge will be final and will not subject to any change.</li>
        <li>The participants shall not be allowed to use mobile phone or any other electronic instrument.</li>
        <li>Audience shall not give any hints or clues to the competitors.</li>
        <li>Replacement of any participant is  allowed after registration before an hour of starting of event in case any genuine reason.</li>
        <li>Multiple teams from the same collage are allowed to participate for the event.</li>
        <li>The team must strictly follow all the deadlines failing to which will lead to their disqualification.</li>
        <li>In case of tie, extra questions will be asked to the teams for tie breaking.</li>
    </ul>   
    <table>
        <td><b>EVENT MANAGERS</b></td>
        <tr>    
            <td>Neel Patel</td>
            <td>8128612135</td>
        </tr>
        <tr>
            <td>Kishan Rayani</td>
            <td>7405402531</td>
        </tr>
        <tr>
            <td>Akhshay</td>
            <td>7874123316</td>
        </tr>
    </table>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Modal 7 -->
    <div class="portfolio-modal modal fade" id="portfolioModal7" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                               <h3>CHEM-O- BRANIAC</h3>
        <b>Description</b>
        <p>
            Get ready for a quiz event which not only helps you bring to light your chemical engineeringknowledge but also lets you enjoy this process with an element of fun. This will be an
            experience where the questions will stimulate your thinking and problem assessment skillsas a chemical engineer. So prepare yourself to enter the ever growing and unbound world ofchemical engineering that awaits you to explore it in a unique manner.
        </p>
    <ul style="text-align: left;">
        <b>Rules and Regulations</b> 
        <li>Only team entries are eligible with a minimum of 2 team members and a maximum of 3 team members.</li>
        <li>There will be 5 rounds including the elimination round.</li>
        <li>Rounds 1, 2 and 3 will be on day 1 and rounds 4, 5 will be on day 2.</li>
        <li>Team discussion will be allowed.</li>
        <li>The participants shall not be allowed to use mobile phone or any other electronic instruments.</li>
        <li>The questions shall be in the form of multiple choice, true/ false statements, and specific answer question.</li>
        <li>Audience shall not give any hints or clues to the competitors.</li>
        <li>Replacement of any participant of a team is not allowed after registration.</li>
        <li>Multiple teams from the same collage are allowed to participate for the event.</li>
        <li>The teams must strictly follow all the deadlines failing to which will lead to their disqualification.</li>
        <li>In case of tie extra questions will be asked to the teams for tie breaking.</li>
        <li>The decision of the event managers will be final and will not be subjected to any change.</li>
    </ul>
    <ul style="text-align: left;">
        <b>Rounds and Judging Criteria :</b>
        <ul>
            <b>Round 1 (Elimination round)</b>
            <li>There will be 30 MCQs.</li>
            <li>20 minutes will be given to solve these questions.</li>
            <li>Elimination will be there.</li>
        </ul>
        <ul style="text-align: left;">
            <b>Round 2 : Housie(or bingo)</b>
            <li>This round will be based on the game of housie(or bingo).</li>
            <li>A housie card will be given to each team.</li>
            <li>Questions related to basic chemistry and chemical engineering will be asked.</li>
            <li>The answers to these questions will be numerical values.</li>
            <li>Elimination will be there.</li>
        </ul>
        <ul style="text-align: left;">
            <b>Round 3 : Photo-Visual and Buzzer round</b>
            <li>The teams will be shown an image and based on that they will be asked a question.</li>
            <li>The team which first presses the buzzer will get the chance to answer.</li>
            <li>Maximum 30 seconds will be given to answer after pressing the buzzer.</li>
            <li>Elimination will be there.</li>
        </ul>
        <ul style="text-align: left;">
            <b>Round 4 : Rapid Fire round</b>
            <li>Each team will be asked 10 questions one after another in 2 minutes.</li>
            <li>Elimination will be there.</li>
            <li>The selected teams will directly send to 5th and the final round.</li>
        </ul>
        <ul style="text-align: left;">
            <b>Round 5 : Final round</b> 
            <li>A puzzle will be given to each team. On solving the puzzle, teams will get a chance to answer 10 more questions.</li>
            <li>This round will be time based.</li>
        </ul>
    </ul>
        <ul style="text-align: left;">
            <b>Scoring</b>
            <ul style="text-align: left;">
                <b>Round 1</b>
                <li>+10 marks for each correct answer.</li>
                <li>-5 marks for each incorrect answer.</li>
            </ul>
            <ul style="text-align: left;">
                <b>Round 2</b>
                <li>Detailed information will be provided on the day of the event.</li>
            </ul>
            <ul style="text-align: left;">
                <b>Round 3</b>
                <li>+10 marks for each correct answer.</li>
                <li>-5 marks for each incorrect answer.</li>
                <li>If the team don’t answer after getting the chance then -5 marks.</li>
            </ul>
            <ul style="text-align: left;">
                <b>Round 4</b>
                <li>+10 marks for each correct answer.</li>
                <li>-5 marks for each incorrect answer.</li>
            </ul>
            <ul style="text-align: left">
                <b>Round 5</b>
                <li>+10 marks for each correct answer.</li>
                <li>-5 marks for each incorrect answer.</li>
            </ul>
        </ul>
    <table>
        <td><b>EVENT MANAGERS</b></td>
        <tr>    
            <td>Mohammad Pathan </td>
            <td>9824116092/ 7016587106</td>
        </tr>
        <tr>
            <td>Ridham Limbad </td>
            <td>9974587708/8200582812</td>
        </tr>
        <tr>
            <td>Vishwa Zaveri </td>
            <td>7600479919</td>
        </tr>
    </table>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 8 -->
    <div class="portfolio-modal modal fade" id="portfolioModal8" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                               <br>
        <h2>WORKSHOP(FTIR)</h2>
        <h3>FOURIER TRANSFORM INFRARED RESEARCH SPECTROSCOPY</h3>
        <p>Hello students!!! Welcome to the world of spectroscopy. We know what important roles  does various types of spectroscopy plays in our day to day life such as identification of substances, detection of impurities, progress of reaction and wide applications in biology, chemistry and geology.</p>
        <p>So here we provide platform to make this knowledge of spectroscopy reach to various corners of Chemical Engineering Department. Here you will be actually taught by our experts in this field with a precious FTIR instrument to do a spectroscopy on a particular compound. So be ready to absorb a great knowledge from our experts in FTIR workshop and get registered for it!!!</p>
        <br>
        <h3>CHEM-EXPO</h3>
        <p>Chem Expo being a ceaseless part of Chem-O- Confluence2k17 presented to you as a pulpit for studentsas well as the companies to display the scintilla of their knowledge in the field of Chemical Engineeringin the form of some exquisite projects and products.Projects related to different catagories such as start-up in chemical field, innovative designs and ideas and many more are heartly welcomed. Here you will get a chance to showcase your exhibited product to 3000+ spectators</p>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--NON TECHNICAL EVENTS-->
    <!--modal 1-->
     <div class="portfolio-modal modal fade" id="portfolioModaln1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h3>Engineering Got Talent</h3>
        <b>Description</b>
		<p>So ENGINEERS, do you think you got a talent besides writing the assignments in two days before submission date or giving the exams without preparations!!! Then participate in the all new event</p>“ENGINEEREEING GOT TALENT “
        <p>If you think you have got some special talent, then this is the right chance and right place to express it all on the set of CHEMO CONFLUENCE 2K17!!
        You must have heard of the show “INDIA’S GOT TALENT”; likewise this is the place where you can show your dancing skills, singing skills, magic tricks, comedy, body building, mind techniques, instrument playing and something NEW which no one has ever heard of!!</p>
                                            <p> DON’T BE SHY; this is the place to impress someone!!! </p>                           

	
	<ul style="text-align: left">
		<b>Rules and Regulations</b> 
		<li>Participation Criteria: Solo performances and Group performances.</li>
		<li>Time Limit: Maximum 5 Minutes</li>
		<li>You have to carry your own props(Instruments, gadgets, any gozmos to show your skills).</li>
		<li>Detailed information about the event will be given on the day of event especially place,time etc.</li>
		<li>Reporting time for event is: </li>
		<li>The decision of the event manager will be final and will not be subject to any change.</li>
		<li>Number of rounds will be declared on the day of event..</li>
		<li>Music system will be provided by us for the performances based on music like dancing, singing and instrument playing.</li>
	</ul>

	<table>
		<td><b>EVENT MANAGERS</b></td>
 		<tr>	
 			<td>Khushbu Patel</td>
 			<td>8306803685</td>
 		</tr>
 		<tr>
 			<td>Prince Abhangi</td>
 			<td>8238723364</td>
 		</tr>
	</table>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--modal 2-->
    <div class="portfolio-modal modal fade" id="portfolioModaln2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                 <h3>Criminal Mind</h3>
        <b>Description</b>
		<p>You think you are a fan of “Sherlock Holmes”??!! Then this event is the platform to prove your detective skills. Find the culprit by implementing the intelligence and diligence of your mind and be the SHERLOCK of CHEMO CONFLUENCE 2K17.
        This event will be full of adventure and thrill; criminals and their small mistakes, finding clues and evolving the right path to catch the culprit, silent and danger climax (Like Hollywood films, of course!!) and KABOOooooM, You are the winner and HERO of the day.
        Combination of four interesting rounds:
    <ul style="text-align: left">
        <li>Cross Word</li>
        <li>Puzzle</li>
        <li>Crime scene</li>
        <li>Criminal Hunt (Sound interesting, isn’t it?!)</li>
    </ul style="text-align:left;">

    <b>Game Play:</b><p> The event will be completed in 2 days; on the first day, Round 1 will be in play for the whole day and the winners of round 1 will play on the 2nd day in 2nd round</p>

		
	<ul style="text-align: left">
		<b>Rules and Regulations</b> 
		<li>Only team entries are eligible, a team shall consist of 2-3 members.</li>
		<li>There will be 4 rounds, First 3 rounds will be held on 1st Day.</li>
		<li>Final round will be held on the 2nd day.</li>
		<li>Multiple teams from the same college are allowed to participate in the event.</li>
		<li>Task must be completed into the given time interval.</li>
		<li>Teams completing its task before the given time interval will get extra points& advantage.</li>
		<li>Rules can be changed according to conditions in event.</li>
		<li>The teams must strictly follow all the deadlines failing to which will  lead to their disqualification.</li>
		<li>The decision of the event manager will be final and will not be subjected to any change.</li>
	</ul>
	<ul style="text-align: left"><b>Judging Criteria</b>
         <ul style="text-align: left">Round 1 (Cross Word)
         	<li>Identify the word given to you which you are given</li>
			<li>Teams will be evaluated by no. of picture puzzles solved by them.</li>
 			<li>The teams qualifying the Round 1 shall move on to the next round.</li>
          </ul>
		</li>
		<ul>Round 2 (Puzzles)
			<li>Identify the muderer or suspect from the case which you given</li>
			
 			
		</ul>
		<ul style="text-align: left">Round 3(Crime scene)
 			<li>You will be given full data of crime scene (like murder, theft etc.) on a paper sheet; you have to identify the important links like murder weapon, time of the crime………………………………</li>
			<li>From these links you have to give the answer that who is the culprit in the shortest period of time and the top 2/5 participants will enter the second and final round of this event which is “Criminal Hunt”.</li>
            <li><b>Rules for Round3-</b> A bunch of participants will be given a particular crime scene at a time and the person who will be able to find the culprit in the shortest period of time will be declared as winner of that round.</li>
		</ul>
		<ul style="text-align: left">Round 4(Criminal Hunt)
 			<li>Here the winners of Round 1 have to think out of the box to win this interesting event.
            This round is like “TREASURE HUNT” where the treasure will be the “CRIMINAL”!!
            Participants will be running in the campus to find the different clues one after another, one clue will lead to the next one and at last you will find you criminal (if you are intelligent enough!).</li>
		</ul>
	</ul>
	<table>
		<td><b>EVENT MANAGERS</b></td>
 		<tr>	
 			<td>Ronak Hirpara</td>
 			<td>8000393696</td>
 		</tr>
	</table>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--modal 3-->
    <div class="portfolio-modal modal fade" id="portfolioModaln3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h3>Prank Clip</h3>
        <b>Description</b>
		<p>Joy and Fun are the best make up for any person in this world. Then why not celebrate this CHEMOCONFLUENCE 2K17 in a most possible funny way by entertaining people around us and winning some prizes.</p>
        <p>You must have fooled your friends by playing crazy pranks on them, this event is all about that joyfulness and funny moments. Just like the YouTube prank videos, a person or a group of persons have to fool the people in the Chemo Confluence Campus during the fest by capturing their weird and funny reactions on the <u>HIDDEN CAMERA.</u></p>
	<ul style="text-align: left">
		<b>Rules and Regulations</b> 
		<li>Any annoying activity or prank which can harm any person physically or emotionally are not at all appreciated and will be resulted into direct disqualification of participant.</li>
		<li>Use of any abusive language or adult activity will not be tolerated by all means and strict actions will be taken against that participant.</li>
		<li>All the participants have to give their prank videos which they have shot by their hidden cameras/mobile phones; to the event manager/judge in a prescribed time on the event day.</li>
		<li>The idea of this event is to make everyone laugh around us; so be vigilant.  </li>
		<li>Participation Criteria: Solo performances and Group performances.</li>
		<li>You have to carry your own props(Instruments, gadgets etc.)</li>
		<li>Detailed information about the event will be given on the day of event especially place, time etc.</li>
		<li>Reporting time for event is: …………</li>
		<li>The decision of the event manager will be final and will not be subject to any change.</li>
	</ul>
	<table>
		<td><b>EVENT MANAGERS</b></td>
 		<tr>	
 			<td>Kaushik Akbari</td>
 			<td>9909008628</td>
 		</tr>
 		<tr>
 			<td>Jayvallabh Gorasiya</td>
 			<td>9825185904</td>
 		</tr>
	</table>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--modal 4-->
    <div class="portfolio-modal modal fade" id="portfolioModaln4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h3>Mini Militia</h3>
        <b>Description</b>
		<p>The only event which does not need any description or introduction!!!MINI MILITIA!!!The most epic and coolest game ever played by the youth. Whether you are 8 years old or 25 years old, you are in classroom or college canteen; hours and hours of play without getting bored, everyone loves to play this game and that is the reason that we have included this game in our <b>CHEMO CONFLUENCE 2K17.</b></p>
        <p>So each and every mad lover of this game be ready with you sharpest shot of the sniper, explode your enemy participant with your BAZOOKA, don’t  dare to go near your enemy  because he has shot gun unless you want to DIE! And how can you forget the deadly grenade!!! BOOM BOOM BOOM….</p>
                                                <center><p> <b>SO WHO’S SHARING THE HOTSPOT?</b></p></center>

		</p>
	<ul style="text-align:left;">
		<b>Rules and Regulations</b> 
		<li>Any HACKED or MODIFIED version of game will not be allowed and if any participant caught playing in any PRO or Hacked version, the whole team will be disqualified. </li>
		<li>Participation Criteria: Team of 3 players vs. Team of 3 players.</li>
		<li>Time Limit and game levels/stages will be decided by the event manager at the event place, be ready for the surprise one. </li>
		<li>You have to carry your own Mobiles(Of course!!).</li>
		<li>Minimum 1GB RAM is required for gaming.</li>
		<li>Game must be played in FLIGHT/OFFLINE MODE.</li>
        <li>If gamer lost connection in current game than he/she will disqualified for the current round.</li>
		<li>Player must respect the spirit of fair play and non-violence. </li>
        <li>When there is tie game that time more kills will be count for winner,and if kills also same that time re-match will conduct.</li>
        <li>Detailed information about the event will be given on the day of event especially place, time etc.</li>
        <li>Reporting time for event is: ………… </li>
        <li>The decision of the event manager will be final and will not be subject to any change.</li>
        <li>Number of rounds will be declared on the day of event.</li>
         
    </ul>
	<table>
		<td><b>EVENT MANAGERS</b></td>
 		<tr>	
 			<td>Gopal Saniya </td>
 			<td>9687839748</td>
 		</tr>
 		<tr>
 			<td>Pradip Chauhan</td>
 			<td>8401625409</td>
 		</tr>
	</table>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--modal 5-->
    <div class="portfolio-modal modal fade" id="portfolioModaln5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h3>JAM: Just a Minute</h3>
       	<b>Description</b>
        <p><b>“ELOCULATION”</b> or in simpler term; “Speech”, nowadays we all know the importance of communication skills. Elocution is the basis of effective communication skills .Elocution is the art of clear and concise manner of speaking. For a meaningful message, the art of elocution plays a significant role. Your voice, the style, formulation of the words, the gestures and the accent – different elements of elocution add up to the art of communication.
        So if you think you are a good speaker or you have the ability to convince someone or you want to become a marketing manager then this is the stage to show and enhance your skills. But the only constraint will be A MINUTE; one has to speak on a topic for only one minute. <b>Do you think a minute will be enough?</b></p>
    <ul style="text-align:left;" >
        <b>Rules and Regulations</b> 
        <li>Chits with topic written will be kept and the participants will have to take out random chits and will have to speak on the topic written on the chit. </li>
        <li>One will be given a topic on the spot and will be given a minute to think.</li>
        <li>Time Limit: Only ONE Minute. </li>
        <li>Detailed information about the event will be given on the day of event especially place, time etc.</li>
        <li>Reporting time for event is: …………</li>
        <li>The decision of the event manager will be final and will not be subject to any change.</li>
        <li>Number of rounds will be declared during the event.</li>
         
    </ul>
    <table>
        <td><b>EVENT MANAGERS</b></td>
        <tr>    
            <td>Ronik Modi </td>
            <td>9033539063</td>
        </tr>
        <tr>
            <td>Pranay Modi</td>
            <td>8460216421</td>
        </tr>
    </table>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--modal 6-->
    <div class="portfolio-modal modal fade" id="portfolioModaln6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h3>Water War</h3>
        <b>Description</b>
        <p>Everyone must have seen the amazing game show “Takeshi's Castle”. This game-event is inspired from the very famous FINAL stage of the original game show “Takeshi's Castle”.  The craziest game WATER WARS.</p>

        <p>As the name suggests Water-War is a game in which players fight using water. Participants will be given water cannon and water balloons to attack the opposite team. There will be two teams; each team will have FIVE PLAYERS. Participants have to attack the opponent team and break the PAPERDISK, which will be mounted on the top of the CAP. If one participant successfully breaks off the opponent participant’s paper disk ,then that player will be declared as out .</p>
    <ul style="text-align:left;">
    <li>2 players will be given water-balloons and 3 players will be given water-cannons.</li>
    <li>The two teams will be given boundary limits within which they can move and attack the opposite team.</li>
    <li>Players having the water balloons would not be allowed to move from their place and they will have to stop the opponent team by throwing balloons on them.</li>
    <li>Players having the canons are allowed to move within the boundary limit given.</li>
    </ul>
        <p>At the end of the time limit  the team which will out play the max member of opposite team will be declared as a winner of that round, at last the team having maximum number of players that team will be declared as WINNER.</p>
        <center><p><b>Let’s see who aims better!!</b> </p></center>
    <ul style="text-align:left;">
        <b>Rules and Regulations</b> 
        <li>Players having the balloons are only allowed to hit balloons on the mid body part of the opponent NOT on the paper disk; NOT on the legs; NOT on the face. </li>
        <li>Balloons thrown should NOT hurt or harm the opponent.</li>
        <li>Time limit: Max 5 min.</li>
        <li>Detailed information about the event will be given on the day of event especially place, time etc.</li>
        <li>Reporting time for event is: …………</li>
        <li>The decision of the event manager will be final and will not be subject to any change.</li>
        <li>Number of rounds will be declared during the event.</li>
         
    </ul>
    <table>
        <td><b>EVENT MANAGERS</b></td>
        <tr>    
            <td>Jigar  Parmar</td>
            <td>7698888545</td>
        </tr>
        <tr>
            <td>Ghanshyam Kathariya</td>
            <td>8980199770</td>
        </tr>
    </table>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--modal 7-->
    <div class="portfolio-modal modal fade" id="portfolioModaln7" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h3>Special 26</h3>
        <b>Description</b>
        <p>Everyone has got the fear of facing the interviews and interviewers but still there are people who think that they are IMPULSIVE (DODH DAHYO) that they can sweat out the opposite person than this is the chance to prove yourself in front of the tremendous crowd of CHEMO CONFLUENCE! </p>
        <p>This event is based on <b>“Barely speaking with Arnub”</b>- the famous web talk show of<b> “THE VIRAL FEVER”</b> in which the Interviewer tries to ROAST the participant by all means and participant also reply in the funniest way. This event is for the fun of the audience where participants will have some fun time with the humorous guys!</p>
        <center><p>So are you ready to roast or to be roasted by them!! </p></center>
</p>
    <ul style="text-align:left;">
    <b>Rules and Regulations</b>
    <li> This event will be conducted in two phases:</li>
         <ol>
            <li>1)  G.D.(Group Discussion)</li>
            <p>This round will have a group of 5-7 members; any change in number of members will be declared at the time of the event.</p>
            <li>2)  P.I. (Personal Interview)</li>
            <p>Contestants selected in the group discussion will have to face the PI and will take a step forward towards the lead.</p>
         </ol>
    <li>Detailed information about the event will be given on the day of event especially place, time etc.</li>
    <li>Reporting time for event is: …………</li>
    <li>The decision of the event manager will be final and will not be subject to any change.</li>
    </ul>
       
    <table>
        <td><b>EVENT MANAGERS</b></td>
        <tr>    
            <td>Kirtan Patel</td>
            <td>8128758240</td>
        </tr>
        <tr>
            <td>Vijay Talsaniya</td>
            <td>7359243274</td>
        </tr>
    </table>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--modal 8-->
    <div class="portfolio-modal modal fade" id="portfolioModaln8" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h3>PHOTOBOOTH</h3>
        <b>Description</b>
        <p>It’s a Selfie-Time!! Nowadays everyone is obsessed with selfies and posting it on the social networking. We love to capture our self in a picture with the front camera of our precious mobile phone. Whether we are bored or we are excited, whether we are in college campus or college class; we love to take selfies with our friends; with our professors; even with our parents.</p>                                                                       
        <p>We have made an event based on this obsession of everyone; OH YEAH!!! Now here is the deal. Everyone will be roaming in the huge campus of VGEC, where the year’s biggest event (Of course the CHEMO CONFLUENCE!!) will be going to take place; one has to take a unique and innovative selfie with any of the ongoing TECHNICAL EVENT and post it on the CHEMO CONFLUENCE page on FACEBOOK. With a unique CAPTION or a TAG LINE describing that event in a most unique way</p>


    <ul style="text-align:left;">
    <b>Rules and Regulations</b>
    
    <li>One has to post the selfie on the page of CHEMO CONFLUENCE ON FACEBOOK.</li>
    <li>Tag line or caption is must relevant to the specific Technical event.</li>
    <li>Duration to post the photo: 2 days(During the Technical Events).</li>
    <li>The decision of the event manager will be final.</li>
    <li>This event is FREE OF COST; anyone can participate in this event</li>

    </ul>
       
    <table>
        <td><b>EVENT MANAGERS</b></td>
        <tr>    
            <td>Aakash Agravat</td>
            <td>7048201120</td>
        </tr>
        <tr>
            <td>Mital Karena</td>
            <td>8128151680</td>
        </tr>
    </table>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--modal 9-->
    <div class="portfolio-modal modal fade" id="portfolioModaln9" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h3>TUG OF WAR</h3>
        <b>Description</b>
        <p>It is a sport that directly puts two teams against in a test of strength. Teams pull on opposite ends of a rope with the goal being to bring the rope to certain distance in one direction against the force of the opposing teams pull. In this game the two teams of four members in each will pull rope. The team which is stronger will pull the rope on their side and they win. This event is mainly played in mud or softened ground which eliminates the team who cross the zone or fall down.</p>


    <ul style="text-align:left;">
    <b>Rules and Regulations</b>
    
    <li>Two teams of minimum 4 members each.</li>
    <li>There will be three rounds for every pair of opponents.</li>
    <li>If a team member suddenly sits down or falls it would be considered a foul.</li>
    <li>The rope must go under the arms; pulling the rope over the shoulders will be considered a foul.</li>
    <li>Detailed information about the event will be given on the day of event especially place, time etc.</li>
    <li>Reporting time for event is: …………</li>
    <li>The decision of the event manager will be final and will not be subject to any change.</li>
    <li>NOTE: The event managers or the chemo confluence committee will not be responsible for any injuries during this event.</li>

    </ul>
       
    <table>
        <td><b>EVENT MANAGERS</b></td>
        <tr>    
            <td>Pankaj Rangpara</td>
            <td>7874313483</td>
        </tr>
        <tr>
            <td>Dhruv Mengar</td>
            <td>8347596206</td>
        </tr>
    </table>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--registration popup-->
    <div class="portfolio-modal modal fade" id="portfolioModalr" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h3>ONLINE REGISTRATIONS CLOSED</h3>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="portfolio-modal modal fade" id="portfolioModalnr" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h3>ONLINE REGISTRATIONS CLOSED</h3>
                                <h3>REGISTRATIONS ON THE SPOT</h3>
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/agency.min.js"></script>

    <!-- Registration script-->

<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    for (var d = 0; d < dropdowns.length; d++) {
      var openDropdown = dropdowns[d];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>

</body>

</html>
