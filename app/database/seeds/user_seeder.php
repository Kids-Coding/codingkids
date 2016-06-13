<?php

// $_ENV = include __DIR__ . '/../../.env.php';
// require_once __DIR__ . '/../../models/User.php';

$user = new User;
$user->parentName = 'Bob Kay';
$user->studentName = 'Jerry Kay';
$user->email = 'bobkay@email.com';
$user->username = 'jerryk';
$user->password = $_ENV['USER_PASS'];
$user->confirm = $_ENV['USER_PASS'];
$user->save();

$user = new User;
$user->parentName = 'Mike Smith';
$user->studentName = 'Colby Smith';
$user->email = 'msmith@email.com';
$user->username = 'colbys';
$user->password = $_ENV['USER_PASS'];
$user->confirm = $_ENV['USER_PASS'];
$user->save();

$user = new User;
$user->parentName = 'Becky Summers';
$user->studentName = 'Ali Summers';
$user->email = 'bsummers@email.com';
$user->username = 'asummers';
$user->password = $_ENV['USER_PASS'];
$user->confirm = $_ENV['USER_PASS'];
$user->save();
