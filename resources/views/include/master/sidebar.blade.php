<div class="sidebar-wrapper" data-simplebar="true">
	<div class="sidebar-header">
		<div>
			<img src="{{asset('admin/image-rs/auth/favicon.ico')}}" class="logo-icon" alt="logo icon">
		</div>
		<div>
			<h4 class="logo-text">RANAP</h4>
		</div>
		<div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
		</div>
	</div>
	<ul class="metismenu" id="menu">
		<li>
			<a href="{{route('dashboard.main')}}">
				<div class="parent-icon"><i class='bx bx-home-circle'></i></div>
				<div class="menu-title">Dashboard</div>
			</a>
		</li>
		<li>
			<a href="{{route('ranap.main')}}">
				{{-- <div class="parent-icon"><i class='bx bx-home-circle'></i></div> --}}
				{{-- <div class="parent-icon"><i class="fa-solid fa-hospital-user"></i></div> --}}
				<div class="parent-icon"><i class="bx bx-user-circle"></i></div>
				<div class="menu-title">Pasien Rawat Inap</div>
			</a>
		</li>
        @if (Auth::user() && Auth::user()->level_user==='admin')
            <li>
                <a href="#" class="has-arrow" onclick="return false">
                    <div class="parent-icon"><i class="bx bx-category"></i></div>
                    <div class="menu-title">Data Master</div>
                </a>
                <ul>
                    <li>
                        <a href="{{route('master.pasien.main')}}"><i class="bx bx-right-arrow-alt"></i>Pasien</a>
                    </li>
                    <li>
                        <a href="{{route('master.nakes.main')}}"><i class="bx bx-right-arrow-alt"></i>Nakes</a>
                    </li>
                    <li>
                        <a href="{{route('master.ruang.main')}}"><i class="bx bx-right-arrow-alt"></i>Ruang</a>
                    </li>
                </ul>
            </li>
        @endif


		<li>
			<a href="#" onclick="return false">
				<div class="parent-icon"><i class="bx bx-support"></i></div>
				<div class="menu-title">Bantuan</div>
			</a>
		</li>
	</ul>
</div>
