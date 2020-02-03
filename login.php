<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap Core CSS -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	<title>Atom Jaya Group</title>
</head>

<style type="text/css">
	body {
		background: url(images/bg.png) repeat; 
	}
    .judul {
        width: 80%;
        color: #678889;
    }
    .pt{
        width: 80%;
        color: #345556;
        font-size: 20px;
    }
    .input {
        width: 80%;
        padding: 10px 15px;
        border-radius: 5px;
        border:1px solid #ddd;

        font-size: 14px;
        color: #4a4a4a;

        box-shadow: inset 0 1px 2px rgba(0,0,0,0.25);
        -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.25);
        -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.25);
    }
    .input:focus {
        background: #dfe9ec;
        color: #414848;

        box-shadow: inset 0 1px 2px rgba(0,0,0,0.25);
        -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.25);
        -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.25);
    }
</style>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                    <br>
                        <center>
                       
                            <br><img src="images/AtomJaya.png" width="70%">
                            <br>
                            <br>
                             <p ><strong class="judul" >ATOM JAYA Group</strong></p><br>
                           
                        </center>
                    <br>
                        <form method="post" class="form-signin" action="sendemail.php?op=in">
                            <fieldset>
                                <div class="form-group">
                                    <center><input type="text" class="input name" placeholder="Username" name="username"></center>
                                </div>
                                <div class="form-group">
                                    <center><input class="input pass" placeholder="Password" name="password" type="password"></center>
                                </div>
                                <center>
                                <div class="judul">
                                    <button name="login" class="btn btn-lg btn-primary btn-block">Masuk</button>
                                </div>
                                </center>
                                <br>
                                
                            </fieldset> 
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

</body>
</html>