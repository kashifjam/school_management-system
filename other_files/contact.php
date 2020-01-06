<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.10/css/mdb.min.css" rel="stylesheet">
<style type="text/css">
	.signup-container{
		margin-top: 30px;
	}
</style>
</head>
<body>
	<div class="row">
	<div class="container signup-container col-md-6">
	<!-- Material form contact -->
<div class="card">

    <h5 class="card-header info-color white-text text-center py-4">
        <strong>Contact us</strong>
    </h5>

    <!--Card content-->
    <div class="card-body px-lg-5 pt-0">

        <!-- Form -->
        <form class="text-center" style="color: #757575;" action="!#">

            <!-- Name -->
            <div class="md-form mt-3">
                <input type="text" id="materialContactFormName" class="form-control" name="name" placeholder="Your Name">
                
            </div>

            <!-- E-mail -->
            <div class="md-form">
                <input type="email" id="materialContactFormEmail" class="form-control" name="email" placeholder="Your Email">
                
            </div>
<div class="md-form">
            <!-- Subject -->
            <span>Subject</span>
            <select class="mdb-select">
                <option value="" disabled>Choose option</option>
                <option value="1" selected>Feedback</option>
                <option value="2">Report a bug</option>
                <option value="3">Feature request</option>
                <option value="4">Feature request</option>
            </select>
        </div>

            <!--Message-->
            <div class="md-form">
                <textarea id="materialContactFormMessage" class="form-control md-textarea" rows="3" name="message" placeholder="Your Message"></textarea>
                
            </div>

            <!-- Copy -->
            <div class="form-check">
                <input type="checkbox" class="form-check-input" id="materialContactFormCopy">
                <label class="form-check-label" for="materialContactFormCopy">Send me a copy of this message</label>
            </div>

            <!-- Send button -->
            <button class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit">Send</button>

        </form>
        <!-- Form -->

    </div>

</div>
<!-- Material form contact -->

</div>
</div>
</body>
</html>