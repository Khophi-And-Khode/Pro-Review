<?php
Session::put('username', Input::get('n'));
echo Input::get('n');//Session::get('username');
?>