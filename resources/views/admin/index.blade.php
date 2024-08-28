
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Welcome Back Admin | Login</title>
		<!-- Google Font: Source Sans Pro -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="{{url('admin/plugins/fontawesome-free/css/all.min.css')}}">
		<!-- Ionicons -->
		<!-- JQVMap -->
		<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
		<!-- Theme style -->
		<link rel="stylesheet" href="{{url('admin/dist/css/adminlte.min.css')}}">
		<!-- overlayScrollbars -->
		<link rel="stylesheet" href="{{url('admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
		<!-- Daterange picker -->
		<!-- summernote -->
		<link rel="stylesheet" href="{{url('admin/plugins/fontawesome-free/css/font-awesome.min.css')}}">
		<link rel="stylesheet" href="{{url('admin/plugins/fontawesome-free/css/all.min.css')}}">
		<style>
		.panel {
			padding: 15px;
			margin-bottom: 20px;
			background-color: #fff;
			border: 1px solid transparent;
			border-radius: 4px;
			-webkit-box-shadow: 0 1px 1px rgb(0 0 0 / 5%);
			box-shadow: 0 1px 1px rgb(0 0 0 / 5%);
		}
		
		@media only screen and (max-width: 600px) {
			body {
				padding-left: 35px;
				padding-right: 35px;
			}
		}
		
		@media only screen and (max-width: 768px) {
			body {
				padding-left: 60px;
				padding-right: 60px;
			}
		}
		</style>

		<body>
			<section class="login_section bg_image">
			
				<div class="container">
					
					<div class="row d-flex justify-content-center align-items-center">

						<div class="col-md-4 col-md-offset-6" style="margin-top:50px;">
							<div class="logo d-flex justify-content-center align-items-center mb-1"> 
							    <h1 style="font-weight: bolder;color: #fff;
    text-shadow: 3px 2px black;"><i class="fa fa-gear fa-spin"></i> ADMIN PANEL</h1>
							</div>
							<div class="login-panel panel panel-default text-center"> <img src="{{url('admin/dist/img/enquiry.png')}}" class="img-responsive center-block rounded-circle mb-4" alt="Logo" width="100px" style="border-radius: 50%;border:1px solid #ccc;" />
								<div class="panel-body text-center">
									<form class="form-signin" method="post" action="{{ route('login')}}" enctype="multipart/form-data" onsubmit="return validateForm()" name="myForm">
										@csrf
										<fieldset>
										@if(Session::has('failed'))
										<p class="text-danger">{{ Session::get('failed')}}</p>	
										@endif

										@if(Session::has('success'))
										<p class="text-danger">{{ Session::get('success')}}</p>
										@endif
											<div class="form-group">
												<input class="form-control" placeholder="E-mail" name="email" type="text" autofocus title="Please Enter Email" required=""> </div>
											<div class="form-group">
												<input class="form-control" placeholder="Password" name="password" type="password" value="" title="Please Enter Password" required=""> </div>
											<!-- <a href="#" class="btn btn-link pull-right" type="button" data-toggle="modal" data-target="#chang_password">Forgot Password?</a> -->
											<button class="btn btn-success btn-block" type="submit">Login</button>
											<input type="hidden" name="submit" value="Login"> </fieldset>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section class="content mb-3">
				<div class="container-fluid">
					<!-- Small boxes (Stat box) -->
					<div class="row">
						<div class="modal fade" id="chang_password">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-body">
										<div class="col-sm-12 text-center mb-2">
											<center> <img src="{{url('admin/dist/img/enquiry.png')}}" style="width:80px;height: 80px; border-radius:50%;" /> </center>
										</div>
										<div class="col-sm-12">
											<h5 class="ml-4"><i class="fas fa-envelope text-success"></i> PLEASE FILL CAREFULLY DETAILS HERE !</h5></div>
										<form class="form-horizontal" action="pay_fee_action.php" method="post" enctype="multipart/form-data">
											<div class="card-body">
												<div class="form-group">
													<input type="text" name="paid_by" class="form-control" placeholder="Current Password"> </div>
												<div class="form-group">
													<input type="text" name="amount" class="form-control" id="amount" placeholder="New Password"> </div>
												<div class="form-group ">
													<input type="text" name="total_dues" class="form-control" id="dues_amount" placeholder="Confirm Password"> </div>
												<div class="form-group ">
													<input type="hidden" class="form-control" name="student_id" > </div>
												<div class="form-group ">
													<input type="submit" name="payfees" class="btn form-control" style="background-color: yellowgreen;color:white;"> </div>
											</div>
											<!-- /.card-body -->
											<!-- /.card-footer -->
										</form>
									</div>
								</div>
								<!-- /.modal-content -->
							</div>
							<!-- /.modal-dialog -->
						</div>
						<!-- /.modal -->
					</div>
				</div>
			</section>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.min.js" integrity="sha256-lSjKY0/srUM9BE3dPm+c4fBo1dky2v27Gdjm2uoZaL0=" crossorigin="anonymous"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

<!-- Bootstrap 4 -->
<script src="{{url('admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->

<script src="{{url('admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>

<script src="{{url('admin/dist/js/admin.js')}}"></script>

<!-- datatable -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>



<script>





$(document).ready(function() {
  $('.select2').select2();
});

$(document).ready(function(){
          $('#confirm_password').on('keyup', function () {
        if ($('#password').val() == $('#confirm_password').val()) {
          $('#message').html('Matching').css('color', 'green');
        } else 
          $('#message').html('Not Matching').css('color', 'red');
      });
  });
  //signup show password
$(document).ready(function(){
  $(".p-show-icon").click(function(){
    if($(".current_password_p").attr("type") == "password")
    { 
      $(this).css({color: "green"});
      $(".current_password_p").attr("type","text");
    }
    else
    { 
      $(this).css({color: "#ccc"});
      $(".current_password_p").attr("type","password");
    }
  });
});

// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})();

function validateNumberInput(inputElement) {
      // Get the input value
      const inputValue = inputElement.value;

      // Use a regular expression to check if the input contains only numbers
      if (/^\d+$/.test(inputValue)) {
        // console.log('Valid input: ' + inputValue);
      } else {
        // If the input is not a valid number, remove non-numeric characters
        inputElement.value = inputValue.replace(/\D/g, '');
        alert("Sorry ! Only Numbers Allowed")
      }
    }


function copyInputValue(value) {
     var result = confirm("Are you sure you want to use as a whatsapp Number ?");
      // Check the result
      if (result) {
      document.getElementById('whatsapp_number').value = value;
      }      
    }






</script>





<script>

var bgimages = ['bg-01.webp','bg-02.webp','bg-03.webp','bg-04.webp','bg-05.webp','bg-06.webp','bg-07.webp','bg-08.webp','bg-09.webp','bg-10.webp','bg-11.webp','bg-12.webp','bg-13.webp','bg-14.webp','bg-15.webp','bg-16.webp','bg-17.webp','bg-18.webp','bg-19.webp','bg-20.webp','bg-21.webp','bg-22.webp','bg-23.webp','bg-24.webp','bg-25.webp','bg-26.webp','bg-27.webp','bg-28.webp','bg-29.webp','bg-30.webp','bg-31.webp','bg-32.webp','bg-33.webp','bg-34.webp'];
var number = Math.floor(Math.random()*34)+0;
document.body.style.background = "url(/admin/dist/bg-img/"+bgimages[number]+")";
document.body.style.backgroundSize = "cover";


</script>
</body>
</html>