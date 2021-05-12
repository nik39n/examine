<?php 
    $temp = "";
    if (filter_var($_GET["email"], FILTER_VALIDATE_EMAIL)) {
        $temp .= "E-mail адрес  указан верно.\n";
    } else {
        $temp .= "Email фадрес указан не верно\n";
    }
    if (($_GET["rpass"])!==($_GET["pass"])){
        $temp .= "Пароли не совпадаю.\n";
    }
    if(!preg_match("/^[A-Z]+$/",$_GET["pass"]) || !preg_match("/^[0-9]+$/",$_GET["pass"])){
        $temp .= " Пароль не содержит большого Символа и Цыфры ";
    }
?>

<form >
    <input type="text" name="email" id="">
    <input type="text" name="pass" id="">
    <input type="text" name="rpass" id="">
    <input type="submit">
    <?=$temp?>
</form>
