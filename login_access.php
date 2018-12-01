<?php
setcookie("username", "", time() - 3600);
Session::put('username', Input::get('n'));
?>