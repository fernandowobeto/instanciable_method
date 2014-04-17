<?php

include('Instanciable.php');
include('User.php');

$user1 = new User();

echo $user1->getId();

echo '<br><br>';

$user2 = $user1->newInstance('ID_');

echo $user2->getId();