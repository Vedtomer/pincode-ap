<!DOCTYPE html>
<html lang="en">
<head>
	<title>Search Pincode | India Pincode</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Search Near by pincode details">
    <meta name="keywords" content="pincode,postal code,indian pincode">
<meta name="description" content="India Post, Ministry of Communication &amp; Technology" />
<meta name="author" content="India Post, Ministry of Communication &amp; Technology" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />


<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{ URL::asset('images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ URL::asset('vendor/bootstrap/css/bootstrap.min.css') }}">
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
			
		</div>
	</div>



	

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


  

  function getDistrict(data) {
	let url="{{  url('/') }}/"+data;
	window.location.href =url;
	

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


    let url="{{  url('/') }}"+"/{{$reqdata['state'] ??''}}/"+data;
	window.location.href =url;


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



function getoffice(data) {

	let url="{{  url('/') }}"+"/{{$reqdata['state'] ??''}}/"+"{{$reqdata['city'] ??''}}/"+data;
	window.location.href =url;

}




</script>

</body>
</html>
