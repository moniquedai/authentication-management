<?php
include 'inc/header.php';
Session::CheckLogin();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])) {

  $register = $users->userRegistration($_POST);

}

if (isset($register)) {
  echo $register;

}
 ?>


 <div class="card ">
   <div class="card-header">
          <h3 class='text-center'>User Registration</h3>
        </div>
        <div class="cad-body">
            <div style="width:600px; margin:0px auto">

            <form class="" action="" method="post">
                <div class="form-group pt-3">
                  <label for="username">User Name</label>
                  <input type="text" name="username"  class="form-control">
                </div>
                <div class="form-group">
                   <label for="password">Password</label>
                   <input type="password" name="password" class="form-control">
                   <input type="hidden" name="roleid" value="3" class="form-control">
                </div>
                <div class="form-group">
                  <label for="email">Email address</label>
                  <input type="email" name="email"  class="form-control">
                </div>
                <div class="form-group">
                   <label for="first_name">First Name</label>
                   <input type="text" name="first_name"  class="form-control">
                </div>
                <div class="form-group">
                   <label for="last_name">Last Name</label>
                   <input type="text" name="last_name"  class="form-control">
                </div>
                <div class="form-group">
                  <label for="country_origin">Country of Origin</label>
                  <input type="text" name="country_origin"  class="form-control">
                </div>

                <div class="form-group">
                    <div class="form-group">
                       <label for="sel1">Marital status</label>
                       <select class="form-control" name="marital_status" id="marital_status">
                          <option value="">Please Select</option>
                          <option value="single">Single</option>
                          <option value="married">Married</option>
                          <option value="divorced">Divorced</option>
                          <option value="widowed">Widowed</option>
                       </select>
                    </div>
                </div>

                <div class="form-group">
                  <div class="form-group">
                    <label for="sel1">Number of kids</label>
                      <input class="form-control"type="number" name="num_kids" required>
                  </div>
                </div>

                <div class="form-group">
                  <button type="submit" name="register" class="btn btn-success">Register</button>
                </div>
            </form>
          </div>
        </div>
      </div>




