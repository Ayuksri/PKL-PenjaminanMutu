<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/landingPage')?>/css/bootstrap.css" />
    <!-- main css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/landingPage')?>/css/style.css" />
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <title>Login Penjaminan Mutu</title>
<style type="text/css">
.form-signin
{
    max-width: 330px;
    padding: 15px;
    margin: 0 auto;
}
.form-signin .form-signin-heading, .form-signin .checkbox
{
    margin-bottom: 10px;
}
.form-signin .checkbox
{
    font-weight: normal;
}
.form-signin .form-control
{
    position: relative;
    font-size: 16px;
    height: auto;
    padding: 10px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
.form-signin .form-control:focus
{
    z-index: 2;
}
.form-signin input[type="text"]
{
    margin-bottom: -1px;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
}
.form-signin input[type="password"]
{
    margin-bottom: 10px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
}
.account-wall
{
    margin-top: 20px;
    padding: 40px 0px 20px 0px;
    background-color: #f7f7f7;
    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
}
.login-title
{
    color: #555;
    font-size: 18px;
    font-weight: 400;
    display: block;
}
.profile-img
{
    width: 96px;
    height: 96px;
    margin: 0 auto 10px;
    display: block;
    -moz-border-radius: 50%;
    -webkit-border-radius: 50%;
    border-radius: 50%;
}
.need-help
{
    margin-top: 10px;
}
.new-account
{
    display: block;
    margin-top: 10px;
}
</style>
  </head>

  <body style = "background: url(<?=base_url('assets/landingPage')?>/home-banner.jpg) no-repeat center center fixed;height: 100%;width: 100%; background-position: center; background-repeat: no-repeat; background-size: cover;">
    <!--================ Start Home Banner Area =================-->
    <section >
      <div >
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <div class="banner_content text-center" style="margin-top: 13%;">
                <div class="container">
                    <?php if($this->session->flashdata('msg_alert_error')) { ?>
                      <div class="alert alert-danger">
                          <?=$this->session->flashdata('msg_alert_error');?>
                      </div>
                    <?php } ?>
                    <?php if($this->session->flashdata('msg_alert')) { ?>
                      <div class="alert alert-success">
                          <?=$this->session->flashdata('msg_alert');?>
                      </div>
                    <?php } ?>
                    <div class="row">
                        <div class="col-sm-6 col-md-4 col-md-offset-4">
                            <h1 class="text-center login-title">Sign in to Penjaminan Mutu</h1>
                            <div class="account-wall">
                              <img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120" alt="">
                              <form class="form-signin" method="POST" action="<?php echo base_url('login/login_a');?>" enctype="multipart/form-data">
                                <input type="text" class="form-control" placeholder="Masukkan ID" name="id_admin" required autofocus>
                                <input type="password" class="form-control" placeholder="Masukkan Password" name="password_admin" required>
                                <button class="btn btn-lg btn-primary btn-block" type="submit">
                                    Sign in</button>
                                <label class="checkbox pull-left">
                                    <input type="checkbox" value="remember-me">
                                    Remember me
                                </label>
                                <a href="#" class="pull-right need-help">Need help? </a><span class="clearfix"></span>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================ End Home Banner Area =================-->
  </body>
</html>

<!-- <!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <title></title>
    <style media="screen">
    body
    {
      font-family: sans-serif;
      background: #d5f0f3;
    }
    .square
    {
      width: 350px;
      background: white;
      margin-top: 150px;
      padding: 100px 30px;
    }
    .oke
    {
    background: #4169E1;
    color: white;
    font-size: 13pt;
    border-radius: 3px;
    padding: 10px 20px;
    text-decoration: none;
    }
    .input
    {
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
          <input type="number" name="nidn" class="input" placeholder="Masukan NIDN">
          <br>
          <br>
          <input type="text" name="password" class="input" placeholder="Password">
          <br>
          <br>
          <b>
          <input type="submit" class="oke" name="" value="LOGIN">
          <?php echo $this->session->flashdata('message');?>
        </b>
      </form>
    </div>
</body>
</html> -->