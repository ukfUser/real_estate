<?php
require_once('../classes/Review.php');

$id = $_POST['id'];
$text = $_POST['text'];
$review = new Review();

$review->update_review($text, $id);

header('Location: ../contacts.php');