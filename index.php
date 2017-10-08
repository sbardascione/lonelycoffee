
<!DOCTYPE html>
<html lang="en">

<head>
   <link rel="shortcut icon" href="http://faviconist.com/icons/4d2ce5e76747cdcf1429c8ea135970d7/favicon.ico" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LonelyCoffee</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/lonelycoffee.css">

    


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="./home">Home</a>
                    </li>
                    <li>
                        <a href="./chisiamo">Chi Siamo</a>
                    </li>
                    <li>
                        <a href="./media">Media</a>
                    </li>
                    <li>
                        <a href="./contatti">Contatti</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
<div class="container">
<?php

$requestURI = explode('/', $_SERVER['REQUEST_URI']);
$scriptName = explode('/',$_SERVER['SCRIPT_NAME']);

for ($i= 0; $i < sizeof($scriptName); $i++)
{
    if ($requestURI[$i] == $scriptName[$i])
    {
        unset($requestURI[$i]);
    }
}

$command = array_values($requestURI);

if(isset($command[0]))
{
	switch($command[0]){
		case "home":
			require_once('home.php');
			break;
		case "chisiamo":
			require_once('chisiamo.php');
			break;
		case "contatti":
			require_once('contatti.php');
			break;
		case "media":
			require_once('media.php');
			break;
		default:
			require_once('home.php');
	}
}
else{
		require_once('home.php');	
	}
?>
</div>

<script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

</body>

</html>
