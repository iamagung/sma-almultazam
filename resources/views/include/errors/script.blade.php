<!-- partial -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src="{{ asset('admin/errors/custom/js/in-view@0.6.1.js') }}"></script>
<script src="{{ asset('admin/errors/custom/js/script.js') }}"></script>
<script>
	$(()=>{
		const code = parseInt('{{$code}}')
		if(code!==404){
			setInterval(() => {
				location.reload()
			}, 10000)
		}
	})
</script>
