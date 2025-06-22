<?php
require_once('../classes/Review.php');

$name = $_POST['name'];
$email = $_POST['email'];
$text = $_POST['text'];
$review = new Review();

$review->add_review($name, $email, $text);

header('Location: ../contacts.php');