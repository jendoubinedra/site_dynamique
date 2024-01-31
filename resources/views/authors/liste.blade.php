<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
	<title>liste</title>
	<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
	<link rel="stylesheet" href="assets/plugins/datatables/datatables.min.css">
	<link rel="stylesheet" href="assets/css/feathericon.min.css">
	<link rel="stylesheet" href="assets/plugins/morris/morris.css">
	<link rel="stylesheet" href="assets/css/style.css"> </head>
<style>
    .example button {
  float: left;
  background-color: #4E3E55;
  color: white;
  border: none;
  box-shadow: none;
  font-size: 17px;
  font-weight: 500;
  font-weight: 600;
  border-radius: 3px;
  padding: 15px 35px;
  margin: 26px 5px 0 5px;
  cursor: pointer;
}
.example button:focus{
  outline: none;
}
.example button:hover{
  background-color: #33DE23;
}
.example button:active{
  background-color: #81ccee;
}
</style>
<body>
		@include('photos.header')
		@include('photos.menu')
		<div class="page-wrapper">
			<div class="content container-fluid">
				<div class="page-header">
					<div class="row align-items-center">
						<div class="col">
							<div class="mt-5">
								<h4 class="card-title float-left mt-2">Liste des pages</h4>

                            </div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="card card-table">
							<div class="card-body booking_card">
								<div class="table-responsive">
                                @if(session()->get('success'))
                    <div class="alert alert-success">
                    {{ session()->get('success') }}
                    </div><br />
                @endif

                @if(Session::has('ErrorMessage'))


    <div class="alert alert-danger text-center">
        <strong></strong> {{Session::get('ErrorMessage')}}
    </div>


@endif

									<table class="table table-striped"  >
										<thead>
											<tr style="background-color:white">
                                               <th>Id</th>
                                               <th>firstname</th>
                                               <th>lastname</th>
                                               <th>organism</th>
                                               <th>title specialite </th>
                                               <th>description specialite </th>
                                               <th>countrie name</th>
                                               <th>action</th>
											</tr>
                                            @foreach($authors as $author)
                                            <tr>
                                                <td>{{$author->id}}</td>
                                                <td>{{$author->firstname}}</td>
                                                <td>{{$author->lastname}}</td>
                                                <td>{{$author->organism}}</td>
                                                <td>{{$author->special->title}}</td>
                                                <td>{{$author->special->description}}</td>
                                                <td>{{$author->countrie->name}}</td>

                                                <td>
                                                    <a href="author/edit/{{$author->id_authors}}">edit</a>
                                                    <form action="author/delete/{{$author->id_authors}}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            @endforeach
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

	</div>
	<script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
	<script src="assets/js/jquery-3.5.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="assets/plugins/datatables/datatables.min.js"></script>
	<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/plugins/raphael/raphael.min.js"></script>
	<script src="assets/js/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
<script type="text/javascript">

     $('.show_confirm').click(function(event) {
          var form =  $(this).closest("form");
          var name = $(this).data("name");
          event.preventDefault();
          swal({
              title: `Voulez-vous vraiment supprimer cet membre ?`,
              text: "Si vous le supprimez, il disparaîtra pour toujours..",
              icon: "warning",
              buttons: true,
              dangerMode: true,
          })
          .then((willDelete) => {
            if (willDelete) {
              form.submit();
            }
          });
      });

</script>
</body>

</html>

















