<!DOCTYPE html>
<html lang="en" >
<head>
	<meta charset="UTF-8">
	<title>Error - 500</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ url('assets/images/ptcn/favico.png') }}" type="image/png" />
	<link href="https://fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('admin/errors/500/style.css')}}">
</head>
<body>
	<h5>Internal Server error !</h5>
	<h1>5</h1>
	<h1>00</h1>
	<div class="box">
		<span></span><span></span>
		<span></span><span></span>
		<span></span>
	</div>
	<div class="box">
		<span></span><span></span>
		<span></span><span></span>
		<span></span>
	</div>
	<p>
        {{-- {{$exception->getMessage()}} --}}
        Kami tidak dapat menemukan apa yang terjadi!<br>
        Kami menyarankan Anda untuk<br/>
		{{-- <a href="#" onclick="history.back()">Go Back</a> --}}
		<a href="#" onclick="history.back()">kembali</a>
		atau kunjungi di sini nanti.
	</p>
</body>
</html>
