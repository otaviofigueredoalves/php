<?php
include __DIR__ . '/back_login.php'; 
?>
<h1>CADASTRO</h1>
<form action="" method="POST">
   <div>
       <label for="user_name">Nome</label>
       <input type="text" name="user_name" id="user_name">
   </div>
   <div>
       <label for="user_email">Email</label>
       <input type="text" name="user_email" id="user_email">
   </div>
   <div>
       <label for="user_password">Senha</label>
       <input type="text" name="user_password" id="user_password">
   </div>
   <input type="submit" value="Enviar">
</form>