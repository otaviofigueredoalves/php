<?php 
include __DIR__ . '/back_login.php'; 

?>
<h1>LOGIN</h1>
<form action="" method="POST">
   <div>
       <label for="user_email">Email</label>
       <input type="text" name="user_email_login" id="user_email_login">
   </div>
   <div>
       <label for="user_password">Senha</label>
       <input type="text" name="user_password_login" id="user_password_login">
   </div>
   <input type="submit" value="Enviar">
</form>