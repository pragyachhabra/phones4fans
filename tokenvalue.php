<?php
include("dbconfig.php");
session_start();
if (!isset($_SESSION['login_user'])) {
    header("Location: admin_login.php");
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title></title>
    <link href="../admin/css/bootstrap.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="../admin/css/admin.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link href="../admin/css/flags.css" rel="stylesheet">

    <style type='text/css'>
        .nDiv {
width:75%;
            font-size: 50px;
            text-align: center;
            padding-top: 87px;
            margin-left: 267px;
        }

        #sub-header {
            margin-top: 52px;
        }
        .nav > li > a:hover, .nav > li > a:focus,  .nav > li > a:active {
            text-decoration: none;color:#fff;
            background-color:#8aba30 !important;cursor: pointer;
        }
        .nav-pills > li.active > a, .nav-pills > li.active > a:hover, .nav-pills > li.active > a:focus {
            color: #fff;
            background-color: #8aba30 !important;cursor: pointer;
        }
        .nav-pills > li > a{border-radius:0px !important; color: rgba(255, 255, 255, 0.47);}
        .link {

            border-bottom: 1px solid rgba(107, 108, 109, 0.19);

        }

        body {

            position: relative;
        }

        #sidebar {
            height: 100%;
            position: fixed;
            background-color: #2c445a;
            top: 0px;
            left: 0px;
            width: 25%;
            text-align: center;
            z-index: 1;
        }


.records_content table tr th{font-weight:bold;}

    </style>

    <script type='text/javascript'>
        $(window).load(function () {
            function goToByScroll(id) {
                $('html,body').animate({
                        scrollTop: ($("#" + id).offset().top)
                    },
                    'slow');
            }

            $(".link").click(function (e) {
                goToByScroll($(this).attr("targerdiv"));
            });
        });
		
		$(document).ready(function(){
$("#mytable #checkall").click(function () {
        if ($("#mytable #checkall").is(':checked')) {
            $("#mytable input[type=checkbox]").each(function () {
                $(this).prop("checked", true);
            });

        } else {
            $("#mytable input[type=checkbox]").each(function () {
                $(this).prop("checked", false);
            });
        }
    });
    
    $("[data-toggle=tooltip]").tooltip();
});


    </script>

</head>

<body>

<div class="container">
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                        aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href=""><img src="../assets/logo.png"/></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href=""></a></li>
                    <li><a href=""></a></li>
                    <li><a href=""></a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false">
                            <span class="glyphicon glyphicon-user"></span> <?php

                            if (isset($_SESSION['login_user'])) {
                                $login_session = $_SESSION['login_user'];
                                echo '<span>Welcome ' . $login_session . '</span>';
                            }
                            ?>&nbsp;<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><span class="glyphicon glyphicon-user"></span>&nbsp;View Profile</a></li>
                            <li><a href="logout.php""><span class="glyphicon glyphicon-log-out"></span>&nbsp;Sign
                                Out</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>

</div>
<div id="sidebar">
    <div>
        <h1></h1>
    </div>
    <div id="sub-header">

        <ul class="nav nav-pills nav-stacked">
            <li class="active link" targerdiv="div1"><a><span class=" glyphicon glyphicon-book"></span>&nbsp;Language</a></li>
            <li class="link" targerdiv="div2"><a><span class="glyphicon glyphicon-font"></span>&nbsp;Translation</a></li>
            <li class="link" targerdiv="div3"><a><span class="glyphicon glyphicon-upload"></span>&nbsp;File Upload</a></li>

        </ul>
    </div>
</div>

<div class="container">
	<div class="row">
		
        
        <div class="col-md-12">
    <div class="row nDiv" id="div1">
    <div class="pull-right">
            </div>
            <br/>
            <div class="records_content"></div>
    </div>
 
</div>
<!-- /Content Section -->


<!-- Bootstrap Modals -->
<!-- Modal - Add New Record/User -->
<div class="modal fade" id="add_new_record_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Add New Record</h4>
            </div>
            <div class="modal-body">

                <div class="form-group">
                    <label for="first_name">Name</label>
                    <input type="text" id="first_name" placeholder="Name" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="last_name">Value</label>
                    <input type="text" id="last_name" placeholder="Value" class="form-control"/>
                </div>

               

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" onclick="addtokenvalue()">Add Record</button>
            </div>
        </div>
    </div>
</div>
<!-- // Modal -->

<!-- Modal - Update User details -->
<div class="modal fade" id="update_user_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Update</h4>
            </div>
            <div class="modal-body">

                <div class="form-group">
                    <label for="update_first_name">Language</label>
                    <input type="text" id="update_first_name" placeholder="Enter Language" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="update_last_name">Language Code</label>
                    <input type="text" id="update_last_name" placeholder="Enter Language Code" class="form-control"/>
                </div>

          

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" onclick="UpdatetokenvalueDetails()" >Save Changes</button>
                <input type="hidden" id="hidden_user_id">
            </div>
        </div>
    </div>
</div>
<!-- // Modal -->
                 
               


  </div>
            
        </div>
	</div>
</div>


        </div>
    </div>
</div>
<div class="nDiv row" id="div2">

</div>
<div class="nDiv" id="div3">
    DIV - 3
</div>
<div class="nDiv" id="div4">

    DIV - 4
</div>


</div>

<!-- Jquery JS file -->
<script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>

<!-- Bootstrap JS file -->
<script type="text/javascript" src="bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>

<!-- Custom JS file -->
<script type="text/javascript" src="js/tokenvalue.js"></script>

</body>
</html>

