<!DOCTYPE html>
<html lang="en">
<head>
	<title>Search Pincode</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
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
				<span class="contact100-form-title">
					Search Pincode!
				</span>

				<!-- <div class="wrap-input100 validate-input" data-validate="Name is required">
					<span class="label-input100">Your Name</span>
					<input class="input100" type="text" name="name" placeholder="Enter your name">
					<span class="focus-input100"></span>
				</div> -->

				<!-- <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<span class="label-input100">Email</span>
					<input class="input100" type="text" name="email" placeholder="Enter your email addess">
					<span class="focus-input100"></span>
				</div> -->

				<div class="wrap-input100 input100-select">
					<span class="label-input100">State</span>
					<div>
						<select class="selection-2" name="state" onchange="getDistrict(this.value)" id="state"> 
                        <option>Select State</option>   
						@foreach($data as $data)
							<option value="{{$data['statename']}}">{{$data['statename']}}</option>
							@endforeach

						</select>
					</div>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 input100-select">
					<span class="label-input100">City or District</span>
					<div>
						<select class="selection-2" name="district" id="city" onchange="getPostoffice(this.value)">
							<option>Select City</option>
							
						</select>
					</div>
					<span class="focus-input100"></span>
				</div>

                <div class="wrap-input100 input100-select">
					<span class="label-input100">Post Office</span>
					<div>
						<select class="selection-2" name="officename" id="post">
							<option>Select Post office</option>
							
						</select>
					</div>
					<span class="focus-input100"></span>
				</div>

                

				<!-- <div class="wrap-input100 validate-input" data-validate = "Message is required">
					<span class="label-input100">Message</span>
					<textarea class="input100" name="message" placeholder="Your message here..."></textarea>
					<span class="focus-input100"></span>
				</div> -->

				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn">
							<span>
								Submit
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</span>
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>



	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');


  

  function getDistrict(data) {

$.ajax({
  url: "/getDistrict",
  type: "POST",
  data: {
    "_token": "{{ csrf_token() }}",
    data: data,
  },
  success: function(response) {

    var len = 0;
    if (response['data'] != null) {
      len = response['data'].City.length;
     // pen = response['data'].District.length;
      $("#district").empty();
      $("#city").empty();
    }
    //console.log(response['data'].City[0].City);
    if (len > 0) {
		$("#city").append("<option>Select City</option>");
      for (var i = 0; i < len; i++) {

        var option = response['data'].City[i].name;
        
        var row = "<option>" + option + "</option>";
       

        $("#city").append(row);

      }
    };

  },

});


}


function getPostoffice(data) {


    


    var state=$('#state').val();
$.ajax({
  url: "/getpostoffice",
  type: "POST",
  data: {
    "_token": "{{ csrf_token() }}",
    data: data,
    state:state
  },
  success: function(response) {

    var len = 0;
    if (response['data'] != null) {
      len = response['data'].City.length;
     // pen = response['data'].District.length;
      
      $("#post").empty();
    }
    //console.log(response['data'].City[0].City);
    if (len > 0) {
      for (var i = 0; i < len; i++) {

        var option = response['data'].City[i].officename;
        
        var row = "<option>" + option + "</option>";
       

        $("#post").append(row);

      }
    };

  },

});


}






</script>

</body>
</html>
