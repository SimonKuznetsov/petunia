<head>
   <title>{$pageTitle}</title>
   <link rel="stylesheet" href="{$teplateWebPath}css/admin.css">
   <script src=" https://code.jquery.com/jquery-3.5.1.min.js"></script>
   <script src="/petunia/www/templates/admin/js/admin.js"></script>
</head>
<form action="/petunia/www/?controller=admin" method="post" class="admin__container">
   <div id="loginBox" class="admin">
      <div class="admin__title">
         Панель админа
      </div>
      <div class="admin__wrapper">	
         <div class="admin__form">
            <label>Логин</label>
            <input type="text" id="login" name="login">
         </div>

         <div class="admin__form">
            <label>Пароль</label>
            <input type="password" id="password" name="password">
         </div>

         <input class="admin__button" type="submit" onclick="loginAdmin();" value="Войти">
      </div>
   </div>
</form>