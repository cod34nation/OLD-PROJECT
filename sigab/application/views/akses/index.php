<link rel="stylesheet" type="text/css" href="<?php echo base_url('application/views/akses/css/my.css')?>">
<div class="login-page">
<center>
<h1 style="color:white;">Akses Page</h1>
</center>
  <div class="form">
  <img src="<?php echo base_url('assets/img/logosmall.png')?>" style="padding-bottom: 10px;">
    <form method ="POST" class="login-form" action ="<?php echo base_url();?>login/getLogin" >
      <input type="text" placeholder="No Personil" name="no_pers" id="no_pers"/>
      <input type="password" placeholder="password" name="password" id="password"/>
      <button type="submit">login</button>
    </form>
  </div>
</div>
<script type="text/javascript" src="<?php echo base_url('application/views/akses/js/my.js')?>"></script>
