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
  <div class="form-group">
  <label for="username">Username:</label>
   <input type="text" class="form-control" id="username" name="username" required>
 </div>
 <div class="form-group">
   <label for="password">Password:</label>
    <input type="password" class="form-control" id="password" name="password" required>
  </div>
  <div class="form-group">
   <label for="genderId">Gender:</label>
   <select class="form-control" id="genderId" name="genderId" required>
      <option value="0">Male</option>
     <option value="1">Female</option>
    </select>
  </div>
  <div class="form-group">
   <label for="roleId">Role:</label>
   <select class="form-control" id="roleId" name="roleId" required>
    <option value="0">User </option>
      <option value="1">Admin</option>
   </select>
  </div>
  <div class="form-group">
    <label for="phone_number">Phone Number:</label>
    <input type="tel" class="form-control" id="phone_number" name="phone_number" required>
  </div>
  <button type="submit" class="btn btn-primary">Sign up</button>
</form>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootswatch/4.0.0/cosmo/bootstrap.min.css">