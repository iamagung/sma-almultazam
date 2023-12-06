<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{csrf_token()}}">
	<title>LOGIN | RANAP RSUD WAHIDIN</title>

	<link rel="icon" href="{{asset('admin/image-rs/auth/favicon.ico')}}" type="image/png"> <!--favicon-->
	<!-- loader-->
	<link rel="stylesheet" href="{{asset('admin/css/pace.min.css')}}">
	<script src="{{asset('admin/js/pace.min.js')}}"></script>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{asset('admin/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/css/bootstrap-extended.css')}}">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap">
	<link rel="stylesheet" href="{{asset('admin/css/app.css')}}">
	<link rel="stylesheet" href="{{asset('admin/css/icons.css')}}">
	<style>
		.mx-auto .card{
			margin-bottom: 0;
		}
	</style>
</head>

<body>
	<div class="wrapper">
		<div class="authentication-reset-password d-flex align-items-center justify-content-center">
			<div class="row">
				<div class="col-12 col-lg-10 mx-auto">
					<div class="card">
						<div class="row g-0">
							<div class="col-lg-5 border-end">
								<div class="card-body">
									<div class="p-5">
										<form class="theme-form formLogin">
											<h4 class="mt-5 font-weight-bold">Silahkan Masuk</h4>
											<p class="text-muted">Rawat Inap RSUD dr Wahidin Sudirohusodo</p>
											<div class="mb-3 mt-5">
												<label for="inputEmailAddress" class="form-label">Username</label>
												<input type="text" class="form-control" name="username" id="username" placeholder="Username">
											</div>
											<div class="mb-3">
												<label for="inputChoosePassword" class="form-label">Password</label>
												<div class="input-group" id="show_hide_password">
													<input type="password" class="form-control border-end-0" name="password" id="inputChoosePassword" placeholder="Password">
													<a href="#" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
												</div>
											</div>
											<div class="d-grid gap-2">
												<button type="submit" class="btn btn-primary btnLogin">Login</button>
											</div>
										</form>
									</div>
								</div>
							</div>
							<div class="col-lg-7">
								<img src="{{asset('admin/image-rs/auth/login.jpg')}}" class="card-img login-img h-100" alt="...">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<script src="{{asset('admin/js/bootstrap.bundle.min.js')}}"></script>
	<script src="{{asset('admin/js/jquery.min.js')}}"></script> <!--plugins-->
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

	<script>
		const doLogin = '{{route("auth.doLogin")}}', routeDashboard = '{{route("dashboard.main")}}'
	</script>
	<script src="{{asset('admin/custom-js/auth/login.js')}}"></script>
</body>
</html>