<?php
mail('pro.martinrouxel@gmail.com', $_POST['nom'], $_POST['message'], 'From: contact@martinrouxel.fr\r\nReply-to:' . $_POST['email'];
?>

