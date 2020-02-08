<style>
#authorization, #registration{
    display: none;
}

</style>

<h3 id="authorization-block">Авторизация</h3>
<h3 id="registration-block">Регистрация</h3>
<div id="setting-user">
<ul>
<li class="setting_name_user">Добавить имя</li>
	<li>Добавить местро проживание</li>
	<li>Изменить язык:</li>
	<select><? foreach($langs as $lan){echo"<option>$lan</option>";}?></select>
		
	<li>Добавить ваш пол:  Мужчина - <input id="sex-men" type="radio">  Женщина - <input id="sex-women" type="radio"></li>
	<li>Добавить номер телефона: <input id="phone-user" type="text"></li>
	<li>Добавить вашу страну</li>
	<input type="button" value="Сохранить изменение">	
</ul>	
</div>
<div id="registration">
<center>
    <input id="registration-email" placeholder="Введите емайл" type="email"><br><br>
    <input id="registration-password" placeholder="Введите пароль" type="password"><br><br>
    <input id="registration-password2" placeholder="Повторите ваш пароль" type="password"><br><br>
    <input id="button-registration" type="button" value="Регистрация">

</center>
</div>

<div id="authorization">
<center>
	<input id="authorization_email" type="text" placeholder="Введите ваш емайл"><br><br>
	<input id="authorization_password" type="placeholder" placeholder="Введите ваш пароль"><br><br>
	<input id="authorization-button" type="button" value="Авторизация">
</center>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="view/js/regestration.js"></script>
