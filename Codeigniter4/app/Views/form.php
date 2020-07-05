<html>
<head>
	<title>Form Login</title>
	<style rel="stylesheet" type="text/css">
	form{
	  background: linear-gradient(to bottom, rgba(0, 0, 0, 2), rgba(0, 0, 0, 0));
	  font-family: 'Open Sans', sans-serif; 
      width: 425px; 
      height:400px ; 
      border-color: transparent;
      
		}
    body{
      background-color: #68544E;
	  margin-top: 100;
    }
    .form-group{
      color: #f5f5f5;
      margin-left: 5;
      margin-right: 5;
    }
	.login {
			width: 400px;
			margin: 16px auto;
			font-size: 13px;
		}
		.login-header,.login p {
			margin-top: 2;
			margin-bottom: 0;
		}
		.login-header {
			background: #5D9B54;
			padding: 20px;
			font-size: 1.6em;
			font-weight: normal;
			text-align: center;
			color: #fff;
		}
		.login-container {
			background: #f5f5f5;
			padding: 12px;
		}
		.login p {
			padding: 9px;
		}
		.login input {
			box-sizing: border-box;
			display: block;
			width: 100%;
			border-width: 1px;
			border-style: solid;
			padding: 16px;
			outline: 0;
			font-family: inherit;
			font-size: 1.2em;
			
		}
		.login input[type="username"],.login input[type="password"] {
			background: #fff;
			border-color: #bbb;
			color: #555;
		}
		.login input[type="username"]:focus, .login input[type="password"]:focus {
			border-color: #888;
		}
    .container {
      padding: 10px;
    }
		.login input[type="submit"] {
			background: linear-gradient(to bottom, #33cc33 0%, #669999 100%);
			border-color: transparent;
			color: #fff;
			cursor: pointer;
			border-radius: 6px;

		}
		.login input[type="submit"]:hover {
			background: #69CF94;
		}
		.login input[type="submit"]:focus {
			border-color: #05a;
		}
    .alert {
      color: #EE231D;
      margin-left:10px;
    }

	</style>
</head>
<body>
<div class="container">
<div class="login">
    
    <form method="POST" action="<?= base_url('login/login_action'); ?>">
	<h2 class="login-header">Login</h2><br>
    <div class="form-group">
    <label for="username">Username</label>
		<p><input type="username" class="form-control" name="username" placeholder="Type your username"></p>
    </div>
    <div class="form-group">
    <label for="password">Password</label>
		<p><input type="password" class="form-control" name="password" placeholder="Type your password"></p>
    </div>
		<p><input type="submit" value="Login"></p>
    <p>
        <?php if(!empty(session()->getFlashdata('gagal'))) { ?>
        <div class="alert alert-warning">
        <?php echo session()->getFlashdata('gagal') ?>
        </div>
        <?php } ?>   
        </p>
   	</form>
    
</div>
</div>
</body>
</html>