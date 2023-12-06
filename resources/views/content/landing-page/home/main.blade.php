@extends('layouts.landingpage')
@push('style')
<link href="{{asset('plugins/datatable/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet">
<style>
</style>
@endpush

@section('content')
<h5>Hello World!</h5>
@endsection
@push('script')
<script src="{{asset('plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('plugins/datatable/js/dataTables.bootstrap5.min.js')}}"></script>
<script type="text/javascript">
</script>
@endpush
