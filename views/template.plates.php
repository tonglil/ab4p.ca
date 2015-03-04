<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="aaron bailey campaign">
        <meta name="author" content="http://tonyli.ca">
        <link rel="icon" type="image/png" href="assets/img/icon.png">

        <title><?php if ($title): ?><?php echo $title ?> - <?php endif; ?>Aaron Bailey for AMS President</title>

        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="//fonts.googleapis.com/css?family=Ek+Mukta:400,200,700" rel="stylesheet">
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="assets/css/main.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
        <?php echo $this->fetch('partials/nav'); ?>

        <div id="cover" class="jumbotron">
            <div id="fixed-box">
                <div class="center container">
                    <h1>
                        Aaron Bailey for AMS President
                    </h1>

                    <p>
                        Learn more about why you should vote for me as your next AMS President:
                        <a class="btn btn-default btn-xs" href="about#body" role="button">explore deeper &raquo;</a>
                    </p>
                </div>
            </div>
        </div>

        <div class="container">
            <?php echo $this->section('content') ?>

            <hr>

            <footer>
                <p class="text-center">
                    <span id="ams">
                        <a href="http://ams.ubc.ca/elections" target="_blank">
                            <img src="assets/img/ams.png">
                            <img src="assets/img/elections.png">
                        </a>
                    </span>

                    <span class="pull-left">
                        <a href="https://www.facebook.com/events/402304696607075" target="_blank">
                            <i class="fa fa-facebook-official"></i>
                        </a>
                        <a href="https://instagram.com/ab4p.ca" target="_blank">
                            <i class="fa fa-instagram"></i>
                        </a>
                        <a href="mailto:aaron@ab4p.ca">
                            <i class="fa fa-envelope-o"></i>
                        </a>
                    </span>

                    <span class="pull-right">
                        <a href="http://tonyli.ca">
                            &copy; Tony Li 2015
                        </a>
                    </span>
                </p>
            </footer>
        </div><!-- /.container -->

        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/main.js"></script>
    </body>
</html>

