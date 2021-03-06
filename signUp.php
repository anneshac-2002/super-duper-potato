<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Teacher Sign up | myTeacher</title>
	<link href="https://fonts.googleapis.com/css?family=Nunito:400,700,800" rel="stylesheet">
	<link rel="apple-touch-icon" sizes="180x180" href="../apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="header.PNG">
	<link rel="icon" type="image/png" sizes="16x16" href="header.PNG">
	<link rel="manifest" href="../site.webmanifest">
	<link rel="mask-icon" href="../safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#00aba9">
	<meta name="theme-color" content="#3b7977">
	<style>
		.divider-text {
    position: relative;
    text-align: center;
    margin-top: 15px;
    margin-bottom: 15px;
}
.divider-text span {
    padding: 7px;
    font-size: 12px;
    position: relative;   
    z-index: 2;
}
.divider-text:after {
    content: "";
    position: absolute;
    width: 100%;
    border-bottom: 1px solid #ddd;
    top: 55%;
    left: 0;
    z-index: 1;
}

.btn-facebook {
    background-color: #405D9D;
    color: #fff;
}
.btn-twitter {
    background-color: #42AEEC;
    color: #fff;
}
	</style>
</head>
<body>
	<link href="cdn3.css" rel="stylesheet" id="bootstrap-css">

<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">




<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">
	<h4 class="card-title mt-3 text-center">Sign Up</h4>
	<p class="text-center">Get started with your free account</p>
	
	
	<form action="registration.php" method="post">
	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i></span>
		 </div>
        <input name="full_name" class="form-control" placeholder="Full name" type="text" required>
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 </div>
        <input name="email" class="form-control" placeholder="Email address" type="email" required>
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
		</div>
		
		
		</select>
    	<input name="phone_number" class="form-control" placeholder="Phone number" type="text" required>
	</div> <!-- form-group// -->

	<div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"><i class="fa fa-building"></i></span>
		</div>
		<select class="form-control" name="stream" required>
			<option selected disabled>Stream</option>
			<option>Science</option>
			<option>Arts</option>
			<option>Commerce</option>
		</select>
		<select class="form-control" name="subject" required="required">
			<option selected disabled>Subject</option>
			<option>Physics</option>
			<option>Chemistry</option>
			<option>Mathmetics</option>
			<option>Computer Science</option>
			<option>Biology</option>
			<option>Bengali</option>
			<option>English</option>
			<option>Computer Application</option>
			<option>Other</option>
		</select>
		<select class="form-control" name="tution_mode">
			<option selected disabled>Tution mode</option>
			<option>Online</option>
			<option>Offline</option>
			<option>Both</option>
		</select>
	</div> <!-- form-group end.// -->
     <!-- form-group end.// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fas fa-graduation-cap"></i> </span>
		</div>
		<select class="form-control">
			<option selected="" name="qualification"> Select Your Qualification</option>
			<option>Bachelor</option>
			<option>Masters</option>
			<option>Doctorate</option>
			<option>B.Ed</option>
			<option>M.Ed</option>
		</select>
	</div> <!-- form-group end.// -->
	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></i></span>
		 </div>
        <input name="address" class="form-control" placeholder="Address" type="text" required>
    </div> <!-- form-group// -->

    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i></span>
		</div>
        <input class="form-control" placeholder="Create password" type="password" name="password" required>
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input class="form-control" placeholder="Confirm password" type="password" required>
    </div> <!-- form-group// -->                                      
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block"> Create Account  </button>
    </div> <!-- form-group// -->      
    <p class="text-center">Have an account? <a href="teacherLogin.html">Log In</a></p>                                                                 
</form>
</article>
</div> <!-- card.// -->

</div> 
<!--container end.//-->


</body>
</html>