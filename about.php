<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="CHEMO CONFLUENCE is one of the main event organised by VISHWAKARMA GOVERMENT ENGINEERING college hosted by CHEMICAL DEPARTMENT">
    <meta name="keywords" content="chem-o-fluence, vishwakarma goverment engineering college, chemoconfluence2k17,akshay amabaliya, sanghani vatsal,kishan dobariya">

    <title>Academic Events</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
   <link href="calendar.css" rel="stylesheet" type="text/css" />
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

<body id="page-top" class="index" style="overflow: hidden;">
   <!-- <div class="loader">

    </div>-->
    <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top" style="padding:5px 0px">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <img src="download.jpg" alt="Academic Events" height="62" width="112">
                <a class="navbar-brand page-scroll" href="#page-top"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right" style="text-align: center">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="about.php">HOME</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="workshop.php">WORKSHOPS</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="seminar.html">SEMINARS</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="symp.html">SYMPOSIUM</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="conf.html">CONFERENCES</a>
                    </li>
                   <li>
                        <a class="page-scroll" href="form.html">Registration</a>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container" style="margin-top:73px;background-color:#29586f;width:100%;height:90%;padding:0px">
           <div id="Calendar" style="float:left;width:50%;height:100%;background-color:white;"> </div>
<div id="Events" style="float:left;background-color:#29586f;width:49%;height:100%;margin-left:13px;overflow: auto;"> <span style="font-size:30px">Select date from Calendar</span></div>
        </div>
    </header>



    <!-- technical Grid Section -->
   

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>
<script language="javascript" src="calendar.js"></script>
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
