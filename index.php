<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Report Card</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            body {
                padding-top: 60px;
                padding-bottom: 40px;
            }
            .more-on-treehouse a {
                opacity: .6;
                position: relative;
                display: inline-block;
                top: 4px;
                font-weight: 600;
                font-family: helvetica neue;
                -webkit-font-smoothing: antialiased;
                z-index: 1 !important;
                background-image: url('../img/gray-badge.png');
                width: 100%;
                background-position: 0px 0px;
                background-repeat: no-repeat;
                background-size: contain;
            }
        </style>
        <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
        <link rel="stylesheet" href="css/badges.css">

        <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="#">Report Card</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav">
                            <li class="active"><a target="_blank" href="http://rileyh.com">Rileyh.com</a></li>
                            <li class="dropdown pull-right">
                                <a href="#" class="dropdown-toggle pull-right" data-toggle="dropdown">Get Social <b class="caret"></b></a>
                                

                                <ul class="dropdown-menu">
                                    <li><a href="https://twitter.com/rileyhSD" target="_blank">Twitter</a></li>
                                    <li><a href="http://www.linkedin.com/in/rileyhilliard" target="_blank">Linked In</a></li>
                                    <li><a href="https://github.com/rileyhilliard" target="_blank">GitHub</a></li>
                                    <li><a href="http://teamtreehouse.com/rileyhilliard" target="_blank">Treehouse</a></li>
                                    <li><a href="http://www.codecademy.com/users/rileyhilliard" target="_blank">Codecademy</a></li>
                                    <li><a href="http://www.codeschool.com/users/djri" target="_blank">CodeSchool</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>

        <div class="container">

            <!-- Main hero unit for a primary marketing message or call to action -->
            <div class="hero-unit">
                <h1>Treehouse Badges Widget</h1>
                <p>Welcome to the open source Report Card widget! Right now this project is only compatible with <a href="http://teamtreehouse.com" target="_blank">Treehouse</a>. More coding schools may be added in the future if there is enough demand.</p>
                <p><a href="instructions.html" class="btn btn-primary btn-large" style="margin-right:15px;">Instructions</a><a href="https://github.com/rileyhilliard/reportcard" class="btn btn-success btn-large" target="_blank">Download via GitHub &raquo;</a></p>

            </div>

            <!-- Example row of columns -->
            <div class="row">
                <div class="span12"> 
                    <div class="well clearfix ">
                        <div class="report-card treehouse"></div>
                    </div>
                </div>
            </div>
             <div class="row">
                <div class="span4"> 
                    <div class="well clearfix ">
                        <div class="report-card treehouse"></div>
                    </div>
                </div>
                <div class="span8"> 
                    <div class="well clearfix ">
                        <div class="report-card treehouse"></div>
                    </div>
                </div>
            </div>


             <!-- Example row of columns -->
            <div class="row">
                <div class="span12"> 
                    <div class="well clearfix ">
                        <div class="report-card codeschool"></div>
                    </div>
                </div>
            </div>
             <div class="row">
                <div class="span4"> 
                    <div class="well clearfix ">
                        <div class="report-card codeschool"></div>
                    </div>
                </div>
                <div class="span8"> 
                    <div class="well clearfix ">
                        <div class="report-card codeschool"></div>
                    </div>
                </div>
            </div>

            <hr>

            <footer>
                <p>&copy; Riley Hilliard</p>
            </footer>

        </div> <!-- /container -->

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.1.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/reportcard.js"></script>
        <script>
            $('.report-card.treehouse').reportCard({
                userName: 'rileyhilliard',
                site: 'treehouse',
                badgesAmount: 7
            });

            $('.report-card.codeschool').reportCard({
                userName: 'djri',
                site: 'codeschool',
                badgesAmount: 6
            });
        </script>
    </body>
</html>
