// profile.php

<?php
$user_id = $_GET["id"];

$db = new Database();
$query = "SELECT * FROM users WHERE id = ?";
$stmt = $db->prepare($query);
$stmt->execute([$user_id]);
$user_data = $stmt->fetch();

$user = new User($user_data["name"], $user_data["email"], $user_data["password"]);

?>

<h1>User Profile</h1>
<p>Name: <?= $user->getName() ?></p>
<p>Email: <?= $user->getEmail() ?></p>
