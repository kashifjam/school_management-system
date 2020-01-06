
<?php include('header.php'); ?> 
<br>

<div class="row">
	<div class="container signup-container col-md-6">
<!-- Material form register -->
<div class="card">

    <h5 class="card-header info-color white-text text-center py-4">
        <strong>Sign up</strong>
    </h5>

    <!--Card content-->
    <div class="card-body px-lg-5 pt-0">

        <!-- Form -->
        <form class="text-center" style="color: #757575;" method="POST" action="insert.php">

            <div class="form-row">
                <div class="col">
                    <!-- First name -->
                    <div class="md-form">
                        <input type="text" id="materialRegisterFormFirstName" class="form-control" name="first_name" placeholder="First Name">

                    </div>
                </div>
                <div class="col">
                    <!-- Last name -->
                    <div class="md-form">
                        <input type="text" id="materialRegisterFormLastName" class="form-control" name="last_name" placeholder="Last Name">

                    </div>
                </div>
            </div>

            <!-- E-mail -->
            <div class="md-form mt-0">
                <input type="email" id="materialRegisterFormEmail" class="form-control" name="email" placeholder="Email">

            </div>

            <!-- Password -->
            <div class="md-form">
                <input type="password" id="materialRegisterFormPassword" class="form-control" aria-describedby="materialRegisterFormPasswordHelpBlock" name="password" placeholder="Password">

                
            </div>

            <!-- Phone number -->
            <div class="md-form">
                <input type="text" id="materialRegisterFormPhone" class="form-control" aria-describedby="materialRegisterFormPhoneHelpBlock" name="phone_number" placeholder="Phone Number">

               
            </div>

            <!-- adress -->
            <div class="md-form">
                <input type="text" id="materialRegisterFormPhone" class="form-control" aria-describedby="materialRegisterFormPhoneHelpBlock" name="address" placeholder="Address">

               
            </div>

            <!-- gender -->
            <div class="md-form">
                

                <input type="radio" name="gender" value="Male"> Male&emsp;
				<input type="radio" name="gender" value="Female"> Female
               
            </div>
            <!-- Sign up button -->
            <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Sign Up</button>

            <hr>

            <!-- Terms of service -->
            <p>Already Have an 
                <em>Account</em> 
                Click here to
                <a href="login.php">Login</a>

        </form>
        <!-- Form -->

    </div>

</div>
<!-- Material form register -->	
</div>
</div>