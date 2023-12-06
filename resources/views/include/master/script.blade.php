<script src="{{asset('admin/js/bootstrap.bundle.min.js')}}"></script><!--bootstrapJS-->

<!--startPlugins-->
<script src="{{asset('admin/js/jquery.min.js')}}"></script>
<script src="{{asset('admin/plugins/simplebar/js/simplebar.min.js')}}"></script>
<script src="{{asset('admin/plugins/metismenu/js/metisMenu.min.js')}}"></script>
<script src="{{asset('admin/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
<script src="{{asset('admin/js/pace.min.js')}}"></script>
<script src="{{asset('admin/plugins/select2/js/select2.min.js')}}"></script>
<!--endPlugins-->

<script src="{{url('admin/js/app.js')}}"></script><!--appJS-->

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- datepicker vanillajs start -->
<script src="https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.3.4/dist/js/datepicker-full.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.3.4/dist/css/datepicker.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.3.4/dist/css/datepicker.min.css">
<!-- datepicker vanillajs end -->

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>


<!-- custom javascript start -->
<script type="text/javascript">
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	})
	$.fn.hasScrollBar = function(){ // Check document has scrollbar
		return {
			vertical: this.height() > $(window).height(),
			horizontal: this.width() > $(window).width(),
		}
	}

	$.fn.modalCustom = function(action='',padding=''){ // Modal
		let style = {
			'overflow': 'hidden',
			'padding-right': `${padding}px`,
		}
		if(action==='open')this.css(style);
		if(action==='close'){
			$.each(style,(i,v)=>style[i] = '')
			this.css(style)
		}
	}
	$.fn.disableStore = function(bool=true){ // Disable enable button store
		let html = bool ? '<span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>LOADING...' : 'SIMPAN'
		this.attr('disabled',bool).html(html)
	}
	$.fn.disableSelect2 = function(bool=true,text='--PILIH--'){
		this.empty().append(`<option value="" selected disabled>${text}</option>`).attr('disabled',bool)
	}
	$.fn.reinitInputDate = function(id='default'){
      const name = id.replace(/-/g,"_")
		this.empty().append(`<input type="text" class="form-control pointer ${id}" name="${name}" id="${id}" readonly placeholder="dd-mm-yyyy">`)
	}

	$.fn.formatRupiah = function(prefix){
		let angka = this.val()
		var number_string = angka.toString().replace(/[^,\d]/g, '')
		// var number_string = angka.replace(/[^,\d]/g, "").toString()
		split = number_string.split(',')
		sisa = split[0].length % 3
		rupiah = split[0].substr(0, sisa)
		ribuan = split[0].substr(sisa).match(/\d{3}/gi)

		// tambahkan titik jika yang di input sudah menjadi angka ribuan
		if (ribuan) {
			separator = sisa ? '.' : ''
			rupiah += separator + ribuan.join('.')
		}
		rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah
		const result = prefix == undefined ? rupiah : rupiah ? 'Rp. ' + rupiah : ''
		this.val(result)
	}

	// Reset form start
	$.fn.resetInput = function(){
		this.find('input').each(function(i){$(this).val('')})
		this.find('textarea').each(function(i){$(this).val('')})
	}
	$.fn.resetSelect = function(){
		this.find('select').each(function(i){$(this).val('').trigger('change')})
	}
	// Reset form end


	$.fn.setRules = function(rules='a-zA-Z0-9'){
		this.on('keypress',(e)=>{
			let regex = new RegExp(`^[${rules}\b]+$`) // Rules only [ numeric ]
			let key = String.fromCharCode(!e.charCode ? e.which : e.charCode) // Get character on keypress
			if(!regex.test(key)){ // Bool, cek "key", rules regex terpenuhi(value===true)
				e.preventDefault()
				return false
			}
		})
		this.on('paste', function(){
			let el = this
			setTimeout(function(){
				const re = new RegExp(`[^${rules}]`,'g')
				let convert = $(el).val().replace(re, '')
				$(el).val(convert)
			}, 20)
		})
	}


	/*
	|--------------------------------------------------------------------------
	| DOKUMENTASI DATEPICKER VANILLAJS
	|--------------------------------------------------------------------------
	| Official : https://mymth.github.io/vanillajs-datepicker
	|
	| Options:
	|		~> autohide
	|			- Type: Boolean
	|			- Default: false
	|		~> clearButton
	|			- Type: Boolean
	|			- Default: false
	|		~> todayButton
	|			- Type: Boolean
	|			- Default: false
	|		~> todayButtonMode
	|			- Type: Number
	|			- Default: 0
	|			- Mode:
	|				a. focus(0) Move the focused date to the current date without changing the selection
	|				b. select(1) Select (or toggle the selection of) the current date
	|		~> todayHighlight
	|			- Type: Boolean
	|			- Default: false
	|		~> maxDate
	|			- Type: String|Date|Number
	|			- Default: null
	|
	| How to use: $('input').initDatePicker()
	*/
	function dateCurrent(){
		let date = new Date()
		let days = date.getDate().toString().padStart(2, 0)
		let months = (date.getMonth() + 1).toString().padStart(2, 0)
		let years = date.getFullYear().toString()
		return `${days}-${months}-${years}`
	}
	$.fn.initDatePicker = function(params,type=dateCurrent()){
		let str = type.split('-')
			isThree = str.length===3;
			str = isThree ? `${str[2]}-${str[1]}-${str[0]}` : '' // str => [0=>dd, 1=>mm, 2=>yyyy]
			date = isThree ? new Date(str) : new Date();
		let obj = {
			format: 'dd-mm-yyyy',
			autohide: true,
			todayButton: true,
			clearButton: true,
			todayButtonMode: 1,
			todayHighlight: true,
			maxDate: new Date(),
		}
		if(jQuery.inArray(params,['filter'])!==-1){
			let days = date.getDate().toString().padStart(2, 0)
			let months = (date.getMonth() + 1).toString().padStart(2, 0)
			let years = date.getFullYear().toString()
			this.val(`${days}-${months}-${years}`)

			obj['clearButton'] = false
		}
		for (const el of this) {
			const datepicker = new Datepicker(el, obj)
		}
	}
</script>
<!-- custom javascript end -->
@stack('script')
