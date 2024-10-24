<?php

require_once("User.php");

$user1 = new User;
$user1->create("baba06","12345","baba@gmail.com","baba","wasd");
// var_dump($user1);

// $user2 = new User;
// $user2->read(4);
// var_dump($user2);

// $user3 = new User;
// $user3->read(4);
// $user3->update("nefr", "123", "coco@gmail.com", "cof", "nef");
// var_dump($user3);

// $user4 = new User;
// // $user4->read(4);
// $user4->delete(4);
?>