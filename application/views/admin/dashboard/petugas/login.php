<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <title></title>
    <style media="screen">
    body
    {
      font-family: cursive;
	    background: #1e90ff;
    }
    .square
    {
      border-radius: 15px;
      width: 350px;
      background: white;
      margin-top: 150px;
      padding: 100px 30px;
    }
    .login
    {
    background: #00FF7F;
  	color: white;
  	font-size: 13pt;
  	border-radius: 20px;
  	padding: 10px 20px;
    text-decoration: none;
    }
    .input
    {
      border-radius: 15PX;
      box-sizing : border-box;
      width: 100%;
      padding: 6px;
      font-size: 11pt;
      margin-bottom: 10px;
    }
    </style>
</head>
<body>	
<center>
    <div class="square">
      <form class="" action="<?php echo base_url('login/login'); ?>" method="post">
        <h1 style="margin-top:-20px">LOGIN</h1>
        <br>
          <input type="text" name="username" class="input" placeholder="Masukkan Username Anda ">
          <br>
          <br>
          <input type="password" name="password" class="input" placeholder="Masukkan Password Anda">
          <br>
          <br>
          <b>
          <input type="submit" class="login" name="login" value="LOGIN">
          <?php 
            echo $this->session->flashdata('message');
          ?>
        </b>
      </form>
    </div>
</body>
</html>