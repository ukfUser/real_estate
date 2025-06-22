<?php
require_once('../classes/Review.php');

$id = $_GET['id'];
$review = new Review();

$review->delete_review($id);

header('Location: ../contacts.php');