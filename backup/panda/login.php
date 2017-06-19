<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PANDA PROJECT | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    


     <link href="css/bootstrap.min.css" rel="stylesheet">
 <link rel = "stylesheet " href ="assets/bootstrap/css/bootstrap.css" type ="text/css">




    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="../../plugins/iCheck/square/blue.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

      </head>

   <header id="HOME" style="background-position: 50% -125px;">
          <div class="section_overlay">
              <nav class="navbar navbar-default navbar-fixed-top">
                <div class="container">
                  <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img src="images/pandalogo.png" alt=""></a>
                  </div>

                  <!-- Collect the nav links, forms, and other content for toggling -->
                  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                     
                     
                    </ul>
                  </div><!-- /.navbar-collapse -->
                </div><!-- /.container -->
              </nav> 

              <div class="container">
                  <div class="row">
                      <div class="col-md-12 text-center">
                          
                      </div>
                  </div>
              </div>

              <div class="container">
                  <div class="row">
                     <div class="box box-solid box-warning">...</div>
                  </div>
              </div>            
          </div>  
      </section>         
    </header>


  <style>
.login-box{
  margin: 1px auto;
  position: relative;
  border-radius:1px;
  width: 300px;
  padding: 6px;


background: #fff;

}
.about_title
 {
   margin: 60px auto;
  position: relative;
 }
 body{
  background: #D2D2D2;
 }

  </style>

  <body class="hold-transition login-page">

    <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <div class="about_title">
                        <h2>SILAHKAN MASUK</h2>
                        <img src="images/shape.png" alt="">
                    </div>
                </div>
            </div>
    <div class="login-box">
      <div class="login-logo">
        <a href="../../index.php"><b>PANDA</b>PROJECT</a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Silahkan Masuk untuk memulai kebaikan</p>
        <form action="cekLogin.php" method="post">
          <div class="form-group has-feedback">
         
  

    <div class="form-group has-feedback">
             <input type="email" class="form-control"  id="email"name ="email">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" placeholder="Password" id="password" name="password">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-8">
              <div class="checkbox icheck">
                <label>
                  <input type="checkbox"> Ingat saya
                </label>
              </div>
            </div><!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Masuk</button>
            </div><!-- /.col -->
          </div>
        </form>

        <div class="social-auth-links text-center">
          <p>- Atau -</p>
          <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Masuk dengan Facebook</a>
          <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Masuk dengan Google+</a>
        </div><!-- /.social-auth-links -->

        <a href="#">Lupa Password</a><br>
        <a href="join.php" class="text-center">Daftar Menjadi Member</a>

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.4 -->
    <script src="../../plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../../bootstrap/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="../../plugins/iCheck/icheck.min.js"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
  </body>
</html>
