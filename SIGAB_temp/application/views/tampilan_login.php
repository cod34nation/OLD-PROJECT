<html>
 <head>
  <title>Form Login</title>
  <style>
   body
   {
    font-family:Calibri;
    margin:50px;
   }

   #form-login{
   margin:auto;
   width:500px;
   padding:10px;
   border:1px #ccc solid;
   font-size:18px;
   font-weight:bold;
   color:#FF6600;
   }

   .inputan
   {
    padding:3px;
    font-family:Calibri;
    border:1px solid #ccc;
   }

   .tombol
   {
    padding:5px;
    background:#FF6600;
    color:#FFF;
    font-weight:bold;
    font-family:Calibri;
    font-size:15px;
    border:#eee 1px solid;
   }

   .error
   {
    color:#FF6600;
    font-size:11px;
   }


  </style>
  <script type='text/javascript'>
  function cekorm()
  {
    if(!#("username").val()){
      alert('Username tidak bole kosong ');
      ("#username").focus();
      return false;
    }
  }
  </script>
 </head>
 <body>
 <form action="<?php echo base_url();?>index.php/web/login" method="post" name="login" onsubmit="return cekform">
  <div id="form-login">
      Administrator Page - Plase Login First
      <br><br>
      <table border="0" cellpadding="4">
       <tr>
        <td>Username</td>
        <td>:</td>
        <td><input type="text" size="40" name="username" value="<?php echo set_value('username');?>" class="inputan"> <?php echo form_error('username');?></td>
       </tr>
       <tr>
        <td>Password</td>
        <td>:</td>
        <td><input type="password" size="40" name="password" value="<?php echo set_value('password');?>" class="inputan"> <?php echo form_error('password');?></td>
       </tr>
      

       <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><input type="submit" name="login" value="Login" class="tombol"> </td>
       </tr>
      </table>
  </div>
  </form>
 </body>
</html>
