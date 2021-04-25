<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body{
			margin:50px;
			/*color:#6a6f8c;
			background:#c8c8c8;*/
			color:white;
			background:white;
			font:600 16px/18px 'Open Sans',sans-serif;
		}
		*,:after,:before{
			box-sizing:border-box
		}
		.clearfix:after,.clearfix:before{
			content:'';
			display:table
		}
		.clearfix:after{
			clear:both;
			display:block
		}
		a{color:inherit;text-decoration:none}

		.login-wrap{
			width:100%;
			margin:auto;
			max-width:525px;
			min-height:570px;
			position:relative;
			border-radius: 40px;
			background:url(https://raw.githubusercontent.com/khadkamhn/day-01-login-form/master/img/bg.jpg) no-repeat center;
			box-shadow:0 12px 15px 0 rgba(0,0,0,.24),0 17px 50px 0 rgba(0,0,0,.19);
			/*border-radius: 40px;*/
		}
		.login-html{
			width:100%;
			height:100%;
			position:absolute;
			padding:40px 70px 20px 70px;
			/*background:rgba(40,57,101,.9);*/
			/*background: #FF9933;*/
			background:rgba(255, 168, 0, 0.5);
			border-radius: 40px;
		}
		.login-html .sign-in-htm,
		.login-html .sign-up-htm{
			top:0;
			left:0;
			right:0;
			bottom:0;
			position:absolute;
			transform:rotateY(180deg);
			backface-visibility:hidden;
			transition:all .4s linear;
		}
		.login-html .sign-in,
		.login-html .sign-up,
		.login-form .group .check{
			display:none;
		}
		.login-html .tab,
		.login-form .group .label,
		.login-form .group .button{
			text-transform:uppercase;
		}
		.login-html .tab{
			font-size:22px;
			margin-right:15px;
			padding-bottom:5px;
			margin:0 15px 10px 0;
			display:inline-block;
			/*border-bottom:2px solid transparent;*/
			border-bottom: 2px solid white;
		}
		.login-html .sign-in:checked + .tab,
		.login-html .sign-up:checked + .tab{
			/*color:#fff;
			border-color:#1161ee;*/
			color:white;
			border-color:#FF9933;
		}
		.login-form{
			min-height:345px;
			position:relative;
			perspective:1000px;
			transform-style:preserve-3d;
		}
		.login-form .group{
			margin-bottom:15px;
		}
		.login-form .group .label,
		.login-form .group .input,
		.login-form .group .button{
			width:100%;
			/*color:#fff;*/
			color: black;
			display:block;
		}
		.login-form .group .input,
		.login-form .group .button{
			border:none;
			padding:15px 20px;
			border-radius:25px;
			/*background:rgba(255,255,255,.1);*/
			background:rgb(255, 249, 205);
		}
		.login-form .group input[data-type="password"]{
			text-security:circle;
			-webkit-text-security:circle;
		}
		.login-form .group .label{
			/*color:#aaa;*/
			color: white;
			font-size:12px;
		}
		.login-form .group .button{
			/*background:#1161ee;*/
			background: rgba(255, 118, 0, 1);
		}
		.login-form .group label .icon{
			width:15px;
			height:15px;
			border-radius:2px;
			position:relative;
			display:inline-block;
			background:rgba(255,255,255,.1);
		}
		.login-form .group label .icon:before,
		.login-form .group label .icon:after{
			content:'';
			width:10px;
			height:2px;
			background:#fff;
			position:absolute;
			transition:all .2s ease-in-out 0s;
		}
		.login-form .group label .icon:before{
			left:3px;
			width:5px;
			bottom:6px;
			transform:scale(0) rotate(0);
		}
		.login-form .group label .icon:after{
			top:6px;
			right:0;
			transform:scale(0) rotate(0);
		}
		.login-form .group .check:checked + label{
			color:#fff;
		}
		.login-form .group .check:checked + label .icon{
			background:#1161ee;
			
		}
		.login-form .group .check:checked + label .icon:before{
			transform:scale(1) rotate(45deg);
		}
		.login-form .group .check:checked + label .icon:after{
			transform:scale(1) rotate(-45deg);
		}
		.login-html .sign-in:checked + .tab + .sign-up + .tab + .login-form .sign-in-htm{
			transform:rotate(0);
		}
		.login-html .sign-up:checked + .tab + .login-form .sign-up-htm{
			transform:rotate(0);
		}

		.hr{
			height:2px;
			margin:30px 0 30px 0;
			/*background:rgba(255,255,255,.2);*/
			background: white;
		}
		.foot-lnk{
			text-align:center;
			color:white;
		}
		/*succes ***************************/
	</style>
</head>
<body>
	<div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
		<div class="login-form">
			
			<div class="sign-in-htm">	
				<div class="group">
					<label for="user" class="label">Username</label>
					<input id="user" type="text" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input id="pass" type="password" class="input" data-type="password">
				</div>
				<div class="group">
					<input id="check" type="checkbox" class="check" checked>
					<label for="check"><span class="icon"></span> Keep me Signed in</label>
				</div>
				<div class="group">
					<!-- <input type="submit" class="button" value="Log In" onclick="show(this)"> -->
					<button class="button" onclick="show(this)">Login</button>

				</div>

				<div class="hr"></div>
				<div class="foot-lnk">
					<a href="#forgot">Forgot Password?</a>
				</div>
			</div>
			<div class="sign-up-htm">
				
				<form action="{{ route('user.create') }}" method="POST" enctype="multipart/form-data">
					@csrf
					<div class="group">
						<label for="username" class="label">Username</label>
						<input name="username" id="user" type="text" class="input">
					</div>
					<div class="group">
						<label for="email" class="label">Email Address</label>
						<input name="email" id="pass" type="text" class="input">
					</div>
					<div class="group">
						<label for="password" class="label">Password</label>
						<input name="password" id="pass" type="password" class="input" data-type="password">
					</div>
					<div class="group">
						<label for="repeat_password" class="label">Repeat Password</label>
						<input name="repeat_password" id="pass" type="password" class="input" data-type="password">
					</div>

					<div class="group">
						<!-- <input type="submit" class="button" value="Register" onclick="show(this)"> -->
						<button class="button" id="click" onclick="show(this)">Register</button>
					</div>
				</form>
				
				<div class="hr"></div>
				<div class="foot-lnk">
					<label for="tab-1">Already Member?</a>
				</div>
			</div>
		</div>
	</div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script type="text/javascript">
	$('#click').on('click',function () {
		Swal.fire({
		  position: 'top-end',
		  icon: 'success',
		  title: 'Your successfully regestraited',
		  showConfirmButton: false,
		  timer: 1500
		})
	});
	function show(argument){
		var a = argument.innerHTML;
    	var b = a.charAt(0);
    	if(b != 'L' && b == 'R'){
			document.location.reload(true);
    		//document.getElementById('alert').style.display = "block";

    	}
    	else if(b == 'L'){
   //  		alert("succes");
   //  		window.open('','_parent','');
			// window.close();
    		Swal.fire({
			  title: 'Welcome to Beeline!',
			  text: "We hope you enjoy everything",
			  icon: 'success',
			  confirmButtonColor: '#3085d6',
			  confirmButtonText: 'Yes'
			}).then((result) => {
		 		if (result.isConfirmed) {
		 			document.location.reload(true);

		   			//window.open('','_parent','');
					// window.close();
		  		}
			})
    	}
	}
</script>

</body>
</html>