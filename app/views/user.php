<?php $this->layout('master', ['title'=>$title])?>

<h1>User</h1>

<form action="/phpoo_routes/user/update/12" method="post">
    <input type="text" name="firstName" value="Arthur"><br>
    <input type="text" name="lastName" value="Guirro"><br>
    <input type="text" name="email" value="arthurguirro@gmail.com"><br>
    <input type="password" name="password" value="123456"><br>

    <button type="submit">Atualizar</button>
</form>