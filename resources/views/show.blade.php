<!DOCTYPE html>
<html lang="en">
<head>
	<title>Search Pincode Information</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Search Near by pincode details">
    <meta name="keywords" content="pincode,postal code">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{ URL::asset('images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('vendor/animate/animate.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/main.css')}}">
<!--===============================================================================================-->


<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-147KKNRCL0"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-147KKNRCL0');
</script>
</head>
<body>


	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" action="find-pincode">
				<h1 class="contact100-form-title">
					 Pincode Information!
				</h1>

				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Pincode</span>
					<input class="input100" type="text" name="name" value="{{$data['pincode']}}" readonly>
					<span class="focus-input100"></span>
				</div>

                <div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Office Name</span>
					<input class="input100" type="text" name="name" value="{{$data['officename']}}" readonly>
					<span class="focus-input100"></span>
				</div>

                <div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">District Name</span>
					<input class="input100" type="text" name="name" value="{{$data['Districtname']}}" readonly>
					<span class="focus-input100"></span>
				</div>

                <div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">State Name</span>
					<input class="input100" type="text" name="name" value="{{$data['statename']}}" readonly>
					<span class="focus-input100"></span>
				</div>

                <div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Office Type</span>
					<input class="input100" type="text" name="name" value="{{$data['officeType']}}" readonly>
					<span class="focus-input100"></span>
				</div>


                <div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Delivery Status</span>
					<input class="input100" type="text" name="name" value="{{$data['Deliverystatus']}}" readonly>
					<span class="focus-input100"></span>
				</div>


                <div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Division name</span>
					<input class="input100" type="text" name="name" value="{{$data['divisionname']}}" readonly>
					<span class="focus-input100"></span>
				</div>

                <div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Region name</span>
					<input class="input100" type="text" name="name" value="{{$data['regionname']}}" readonly>
					<span class="focus-input100"></span>
				</div>

                <div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Circle Name</span>
					<input class="input100" type="text" name="name" value="{{$data['circlename']}}" readonly>
					<span class="focus-input100"></span>
				</div>

                <div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Taluk</span>
					<input class="input100" type="text" name="name" value="{{$data['Taluk']}}" readonly>
					<span class="focus-input100"></span>
				</div>

               

                <div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Telephone</span>
					<input class="input100" type="text" name="name" value="{{$data['Telephone']}}" readonly>
					<span class="focus-input100"></span>
				</div>


                <div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Related Sub-office</span>
					<input class="input100" type="text" name="name" value="{{$data['RelatedSuboffice']}}" readonly>
					<span class="focus-input100"></span>
				</div>

                <div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Related Head-office</span>
					<input class="input100" type="text" name="name" value="{{$data['RelatedHeadoffice']}}" readonly>
					<span class="focus-input100"></span>
				</div>

				
				

				

               

                

			

				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<a class="contact100-form-btn" href="{{route('index')}}">
							<span>
								back
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</span>
						</a>
					</div>
				</div>
			</form>
		</div>
	</div>



	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="{{ URL::asset('vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ URL::asset('vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ URL::asset('vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{ URL::asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ URL::asset('vendor/select2/select2.min.js')}}"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="{{ URL::asset('vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{ URL::asset('vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ URL::asset('vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{ URL::asset('js/main.js')}}"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');





</script>

</body>
</html>
