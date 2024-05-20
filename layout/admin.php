<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title> Admin </title>

    <!-- Bootstrap Core CSS -->
    <link href="../public/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../public/css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../public/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../public/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.../public/js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <script src="../public/ckeditor/ckeditor.js"></script>
<style>
input {
  outline: none;
}
input[type=search] {
  -webkit-appearance: textfield;
  -webkit-box-sizing: content-box;
  font-family: inherit;
  font-size: 100%;
}
input::-webkit-search-decoration,
input::-webkit-search-cancel-button {
  display: none; 
}


input[type=search] {
  background: #ededed url(https://static.tumblr.com/ftv85bp/MIXmud4tx/search-icon.png) no-repeat 9px center;
  border: solid 1px #ccc;
  padding: 9px 10px 9px 32px;
  width: 220px;
  
  -webkit-border-radius: 10em;
  -moz-border-radius: 10em;
  border-radius: 10em;
  
  -webkit-transition: all .5s;
  -moz-transition: all .5s;
  transition: all .5s;
}
input[type=search]:focus {
  width: 350px;
  background-color: #fff;
  border-color: #66CC75;
  
  -webkit-box-shadow: 0 0 5px rgba(109,207,246,.5);
  -moz-box-shadow: 0 0 5px rgba(109,207,246,.5);
  box-shadow: 0 0 5px rgba(109,207,246,.5);
}


input:-moz-placeholder {
  color: #999;
}
input::-webkit-input-placeholder {
  color: #999;
}
	</style>
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/Hoavu/index.php">Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    	<i class="fa fa-user"></i>
							<?php 
								echo isset($_SESSION["account"]) ? $_SESSION["name"] : "";
							?>
                    	<b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="index.php?act=logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Trang chủ </a>
                    </li>
                    <li>
                        <a href="index.php?controller=users/list"><i class="fa fa-fw fa-bar-chart-o"></i> Quản lý users</a>
                    </li>
					<li>
                        <a href="index.php?controller=casi/list"><i class="fa fa-fw fa-bar-chart-o"></i> Quản lý ca sĩ</a>
                    </li>
					
					<li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#album"><i class="fa fa-book"></i> Quản lý Album <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="album" class="collapse">
                            <li>
                                <a href="index.php?controller=album/list">Chủ đề Album</a>
                            </li>
							<li>
                     		   <a href="index.php?controller=playlist/list">Quản lý playlist</a>
                   			 </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#nhac"><i class="fa fa-book"></i> Quản lý bài hát <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="nhac" class="collapse">
                            <li>
                                <a href="index.php?controller=music_type/list">Chủ đề bài hát</a>
                            </li>
							<li>
                                <a href="index.php?controller=music/list">Danh sách bài hát</a>
                            </li>
                        </ul>
                    </li>
					 <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#mv"><i class="fa fa-book"></i> Quản lý MV <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="mv" class="collapse">
                            <li>
                                <a href="index.php?controller=mv_type/list">Chủ đề MV</a>
                            </li>
							<li>
                                <a href="index.php?controller=mv/list">Danh sách MV</a>
                            </li>
                        </ul>
                    </li>
					 <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#tailen"><i class="fa fa-book"></i> Quản lý tải lên <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="tailen" class="collapse">
                            <li>
                                <a href="index.php?controller=songtl/list">Bài hát</a>
                            </li>
							<li>
                                <a href="index.php?controller=mvtl/list">MV</a>
                            </li>
                        </ul>
                    </li>
                     
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <?php 
                	if(file_exists($controller))
                		include $controller;
                ?>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../public/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../public/js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../public/js/plugins/morris/raphael.min.js"></script>
    <script src="../public/js/plugins/morris/morris.min.js"></script>
    <script src="../public/js/plugins/morris/morris-data.js"></script>

</body>

</html>
