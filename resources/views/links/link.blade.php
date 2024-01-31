<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
<title></title>

<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

<link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/all.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/plugins/fontawesome/css/fontawesome.min.css')}}">

<link rel="stylesheet" href="{{asset('assets/css/feathericon.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/plugins/morris/morris.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap-datetimepicker.min.css')}}">

<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>
<body>
@include('links.header')
@include('links.menu')

<div class="page-wrapper">
<div class="content container-fluid">
<div class="page-header">
<div class="row align-items-center">
<div class="col">
<h3 class="page-title mt-5">Ajouter un link</h3>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-12">
<form method="post" action="link" id="linkForm">
    @csrf
    @method('post')


<div class="row formtype">
<div class="col-md-4">
<div class="form-group">
<label>Href:</label>
<input id="href" type="text" class="form-control @error('href') is-invalid @enderror" name="href" value="" required autocomplete="nom" autofocus>
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<select name="id_page" class="form-control">
    @foreach($pages as $page)
    <option value="{{ $page->id }}">{{ $page->name }}</option>
    @endforeach
</select>
</div>
</div>
<div class="col-md-4">
<div class="form-group">
<button type="submit" class="btn btn-primary buttonedit ml-2">Add Link</button>
{{-- button type="button" onclick="closeFormAdd()" class="btn btn-primary buttonedit ml-2" >Close Form</button> --}}
</div>
</div>
</div>
</form>
<br><br>
{{-- <button onclick="openFormAdd()">Show Form</button> --}}
<script>
    function openFormAdd() {
        document.getElementById('modalBackgroundAdd').style.display = 'flex';
    }
    function closeFormAdd() {
        document.getElementById('modalBackgroundAdd').style.display = 'none';
    }
</script>


<script src="{{asset('assets/js/jquery-3.5.1.min.js')}}"></script>

<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/moment.min.js')}}"></script>
<script src="{{asset('assets/js/select2.min.js')}}"></script>

<script src="{{asset('assets/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>
<script src="{{asset('assets/plugins/raphael/raphael.min.js')}}"></script>

<script src="{{asset('assets/js/bootstrap-datetimepicker.min.js')}}"></script>

<script src="{{asset('assets/js/script.js')}}"></script>
<script>
		$(function () {
			$('#datetimepicker3').datetimepicker({
				format: 'LT'

			});
		});
	</script>
