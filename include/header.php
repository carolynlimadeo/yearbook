
<!DOCTYPE html>
<?php
include '../include/h_app.php'; 
include '../include/db.inc.php';    
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>SFC Yearbook Archive</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Yearbook, Digital Archive, Brooklyn, St. Francis College">
    <meta name="author" content="St. Francis College Library">

    <!-- Le styles -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.min.css">
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.0/css/font-awesome.css" rel="stylesheet">
    <script type="text/javascript">
        /*$(window).load(function(){ */
            $('#myModal').modal();
       /* }); */
    </script>
    
     <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      
      .thumbnail {
        background: #ffffff;
        color: #000000;
      }

      .sidebar-nav {
        padding: 9px 0;
      }
      .navbar{
        margin: 0px 0px 0px 0px;
        }

        .navbar-inner > .container{
        width:950px;
        }

        .navbar-inner{
        border-radius:0px;
        background: #E13A3E !important; 
        background-image: none;
        background-repeat: no-repeat;
        filter: none !important;
        border-top:1px solid #E13A3E  !important;
        border-bottom:1px solid #E13A3E !important;
        border-left:0px !important;
        border-right:0px !important;
        }

        .navbar .btn{
        background:#E13A3E  !important;  
        font-size:13px;
        padding:4px 10px;
        }

        .navbar .btn:hover{
        background:#E13A3E !important;
        }

        .navbar .caret{
        border-top-color:#fff !important;
        border-bottom-color:#fff !important;
        }

        .navbar .brand{
        color:#fff !important;
        text-shadow:none !important;
        }

        .navbar .nav{
        border-left:1px solid #E13A3E
        border-right:1px solid #E13A3E;
        }

        .navbar .nav > li > a{
        padding:12px 15px 12px;
        color:#fff !important;
        text-shadow:none !important;
        border-right: 0px solid #E13A3E;
        border-left:0px solid #E13A3E;
        -webkit-transition:background 1s ease;
        -moz-transition:background 1s ease;
        -o-transition:background 1s ease;
        transition:background 1s ease;
        }

        .navbar .nav > li > a:hover{
        background:#ce3336 !important;
        color:#fff !important;
        -webkit-transition:background 1s ease;
        -moz-transition:background 1s ease;
        -o-transition:background 1s ease;
        transition:background 1s ease;
        }

        .navbar .nav .active > a
        .navbar .nav .active > a:hover,
        .navbar .nav .active > a:focus {
        color: #ffffff;
        box-shadow:none;
        background: #ce3336 !important;
        }

        .dropdown-toggle{
        background: #E13A3E !important;
        }

        .nav-collapse a{
        font-weight:normal !important;
        text-shadow:none !important;
        }

        .dropdown-menu{
        background:#E13A3E !important;
        border-radius:0px !important;
        box-shadow:none !important;
        border-bottom:none !important;
        padding:0px 0px;
        margin:0px;
        }

        .dropdown-menu a{
        background:#E13A3E !important;
        padding:9px 10px;
        color:#fff !important;
        text-shadow:none !important;
        -webkit-transition:background 1s ease;
        -moz-transition:background 1s ease;
        -o-transition:background 1s ease;
        transition:background 1s ease;
        border-bottom:1px solid #E13A3E;
        }

        .dropdown-menu a:hover,.dropdown-menu a:focus{
        filter:none !important;
        background:#ce3336 !important;
        -webkit-transition:background 1s ease;
        -moz-transition:background 1s ease;
        -o-transition:background 1s ease;
        transition:background 1s ease;
        }

        .dropdown-menu::after, .dropdown-menu::before{
        border:none !important;
        }

        td {
    font-size: 16px;
}

      @media (max-width: 980px) {
        /* Enable use of floated navbar text */
        .navbar-text.pull-right {
          float: right;
          padding-left: 5px;
          padding-right: 5px;
        }
      }
    </style>
    <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script> -->
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="/assets/ico/apple-touch-icon-57-precomposed.png">
    <link rel="shortcut icon" href="/assets/ico/favicon.png">

  </head>

  <body>

    <div id="navbar-example" class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container" style-"width: auto;">
          <a class="brand" href="index.php">St. Francis College Yearbook Archive</a>
          <ul class="nav" role="navigation">
            <li>
              <a href="index.php">Home</a>
            </li>
            <li class>
              <a href="about.php">About</a>
           </li>
           <li class>
            <a href="advsearch.php">Advanced Search</a>
        </li>
         
            <li class="dropdown">
                <a id="drop1" href="#" role="button" class="dropdown-toggle" data-toggle="dropdown">Browse <b class="caret"></b></a>
                      <ul class="dropdown-menu" role="menu" aria-labelledby="drop1">
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="by.php">Browse by Yearbook</a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="bclub.php">Browse by Club or Team</a></li>
                      
            </ul>
            </li>

            <form action="search_result.php" method="get" class="navbar-search">
              <input type="text" name="name" class="search-query" placeholder="Search By Student Name">
            </form>

            <ul class="nav nav-list">
                <li><a href="login.php" class="pull-right"><i class="icon-wrench icon-white"></i> Admin Login</a></li>
            </ul>

              </ul>
            </li>
          </div>
        </div>
      </div>
    </div>