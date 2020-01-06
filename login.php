
 <?php include('header.php'); ?>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<div class="row">
  <div class="container signup-container col-md-6">
    <!-- Material form login -->
<div class="card">

  <h5 class="card-header info-color white-text text-center py-4">
    <strong>Login</strong>
  </h5>

  <!--Card content-->
  <div class="card-body px-lg-5 pt-0">

    <!-- Form -->
    <form class="text-center" style="color: #757575;" action="logind.php" autocomplete="off" method="post">

      <!-- Email -->
      <div class="md-form">

        <input type="email" class="form-control" name="email" placeholder="Email">
        
      </div>

      <!-- Password -->
      <div class="md-form">
        <input type="password" class="form-control" name="password" placeholder="Password">

      </div>

      

      <!-- Sign in button -->
      <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Login</button>

      <!-- Register -->
      <p>Not a member?
        <a href="signup.php">Register</a>
      </p>


    </form>
    <!-- Form -->

  </div>

</div>
<!-- Material form login -->
  </div>
</div>
