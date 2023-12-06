<link rel="icon" href="{{asset('admin/image-rs/auth/favicon.ico')}}" type="image/png"> <!--favicon-->

<!--plugins-->
<link rel="stylesheet" href="{{asset('admin/plugins/vectormap/jquery-jvectormap-2.0.2.css')}}">
<link rel="stylesheet" href="{{asset('admin/plugins/simplebar/css/simplebar.css')}}">
<link rel="stylesheet" href="{{asset('admin/plugins/perfect-scrollbar/css/perfect-scrollbar.css')}}">
<link rel="stylesheet" href="{{asset('admin/plugins/metismenu/css/metisMenu.min.css')}}">
<link href="{{asset('admin/plugins/select2/css/select2.min.css')}}" rel="stylesheet" />
	<link href="{{asset('admin/plugins/select2/css/select2-bootstrap4.css')}}" rel="stylesheet" />

<!-- loader-->
<link rel="stylesheet" href="{{asset('admin/css/pace.min.css')}}">
<script src="{{asset('admin/js/pace.min.js')}}"></script>

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{asset('admin/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('admin/css/bootstrap-extended.css')}}">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap">
<link rel="stylesheet" href="{{asset('admin/css/app.css')}}">
<link rel="stylesheet" href="{{asset('admin/css/icons.css')}}">

<!-- Theme Style CSS -->
<link rel="stylesheet" href="{{asset('admin/css/dark-theme.css')}}">
<link rel="stylesheet" href="{{asset('admin/css/semi-dark.css')}}">
<link rel="stylesheet" href="{{asset('admin/css/header-colors.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>
	.fwhite{
		color: white;
	}
	.fred{
		color: red;
	}
	html.color-sidebar .sidebar-wrapper{
		background-size: unset;
	}
	html.color-sidebar .sidebar-wrapper{
		background-color: #171717;
	}

	html.color-sidebar .logo-icon{
		filter: unset;
	}
	.pointer{
		cursor: pointer;
	}
	.select2-middle{
		text-align: center;
		vertical-align: middle;
	}
	.fw5{
		font-weight: 500;
	}
	.fw5i{
		font-weight: 500;
		font-style: italic;
	}
</style>
@stack('style')
