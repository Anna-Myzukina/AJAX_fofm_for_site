<?php

$recepient = "webcrev@gmail.com";
$sitename = "webcrev.com";

$name = trim($_POST["name"]);
$phone = trim($_POST["phone"]);
$text = trim($_POST["text"]);
$massage = "Name: $name \nPhone: $phone \ne-mail: $e-mail \n Text: $text";

$pagetitle = "Новая заявка с сайта \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain"; charset-\"utf-8\"\n From: $_POST)