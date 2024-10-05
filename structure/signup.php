<?php
 // Include the menus.php file to display the main menu
 include_once 'menus.php';
 $menu = new menus();
 $menu->main_menu();
?>

<h1>Sign up</h1>
<form action="signuphandling.php" method="post">
  <div class="form-group">
   <label for="fullname">Full Name:</label>
    <input type="text" class="form-control" id="fullname" name="fullname" required>
  </div>
  <div class="form-group">
   <label for="email">Email:</label>
    <input type="email" class="form-control" id="email" name="email" required>
  </div>