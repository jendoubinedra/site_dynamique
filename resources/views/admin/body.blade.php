<!DOCTYPE html>
<html>
	<head>
		<!-- Basic Page Info -->
		<meta charset="utf-8" />
		<title>DeskApp - Bootstrap Admin Dashboard HTML Template</title>

		<!-- Site favicon -->
		<link
			rel="apple-touch-icon"
			sizes="180x180"
			href="{{asset('assets/vendors/images/apple-touch-icon.png')}}"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="32x32"
			href="{{asset('assets/vendors/images/favicon-32x32.png')}}"
		/>
		<link
			rel="icon"
			type="image/png"
			sizes="16x16"
			href="{{asset('assets/vendors/images/favicon-16x16.png')}}"
		/>

		<!-- Mobile Specific Metas -->
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1, maximum-scale=1"
		/>

		<!-- Google Font -->
		<link
			href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
			rel="stylesheet"
		/>
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="vendors/styles/core.css" />
		<link
			rel="stylesheet"
			type="text/css"
			href="{{asset('assets/vendors/styles/icon-font.min.css')}}"
		/>
		<link
			rel="stylesheet"
			type="text/css"
			href="{{asset('assets/src/plugins/datatables/css/dataTables.bootstrap4.min.css')}}"
		/>
		<link
			rel="stylesheet"
			type="text/css"
			href="{{asset('assets/src/plugins/datatables/css/responsive.bootstrap4.min.css')}}"
		/>
		<link rel="stylesheet" type="text/css" href="vendors/styles/style.css" />

		<!-- Global site tag (gtag.js) - Google Analytics -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

		<style>
			/* Style the modal background */
			.modal-background {
			    display: none;
			    position: fixed;
			    top: 0;
			    left: 0;
			    width: 100%;
			    height: 100%;
			    background: rgba(0, 0, 0, 0.5);
			    justify-content: center;
			    align-items: center;
			}

			/* Style the modal content */
			.modal-content {
			    background: white;
			    padding: 20px;
			    border-radius: 8px;
			}
		 </style>
		<script
			async
			src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"
		></script>
		<script
			async
			src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-2973766580778258"
			crossorigin="anonymous"
		></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag() {
				dataLayer.push(arguments);
			}
			gtag("js", new Date());

			gtag("config", "G-GBZ3SGGX85");
		</script>
		<!-- Google Tag Manager -->
		<script>
			(function (w, d, s, l, i) {
				w[l] = w[l] || [];
				w[l].push({ "gtm.start": new Date().getTime(), event: "gtm.js" });
				var f = d.getElementsByTagName(s)[0],
					j = d.createElement(s),
					dl = l != "dataLayer" ? "&l=" + l : "";
				j.async = true;
				j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
				f.parentNode.insertBefore(j, f);
			})(window, document, "script", "dataLayer", "GTM-NXZMQSS");
		</script>
		<!-- End Google Tag Manager -->
	</head>
	<body>

@include('admin.header')
@include('admin.menu')


		<div class="mobile-menu-overlay"></div>

		<div class="main-container">
			<div class="xs-pd-20-10 pd-ltr-20">


				<div class="container mt-5">
					<div class="row">
					    <div class="col-md-12">
						   <table class="table table-bordered">
							  <thead>
								 <tr>
									<th>Id</th>
									<th>Firstname</th>
									<th>Lastname</th>
									<th>Description</th>
									<th>Website</th>
									<th>Action</th>
								 </tr>
							  </thead>
							  <tbody>

								 <tr>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
									<td>
									    <a href="" class="btn btn-info btn-sm">Edit</a>
									    <form action="" method="post" class="d-inline">
										   @csrf
										   @method('DELETE')
										   <button type="submit" class="btn btn-danger btn-sm">Delete</button>
									    </form>
									</td>
								 </tr>

							  </tbody>
						   </table>
					    </div>
					</div>

					<div id="modalBackgroundAdd" class="modal-background">
					    <!-- The modal content -->
					    <div class="modal-content col-md-4">
						   <form action="keynote" method="post" id="linkForm">
							  @csrf
							  @method('POST')
							  <div class="form-group">
								 <label for="firstname">Firstname:</label>
								 <input type="text" name="firstname" class="form-control" required>
							  </div>

							  <div class="form-group">
								 <label for="lastname">Lastname:</label>
								 <input type="text" name="lastname" class="form-control" required>
							  </div>

							  <div class="form-group">
								 <label for="description">Description:</label>
								 <input type="text" name="description" class="form-control" required>
							  </div>

							  <div class="form-group">
								 <label for="website">Website:</label>
								 <input type="text" name="website" class="form-control" required>
							  </div>

							  <button type="submit" class="btn btn-primary">Add Speaker</button>
							  <button type="button" onclick="closeFormAdd()" class="btn btn-secondary">Close Form</button>
						   </form>
					    </div>
					</div>

					<br>
					<br>

					<button onclick="openFormAdd()" class="btn btn-success">Show Form</button>
				 </div>
				 <!-- Include Bootstrap JS and Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    function openFormAdd() {
        document.getElementById('modalBackgroundAdd').style.display = 'flex';
    }

    function closeFormAdd() {
        document.getElementById('modalBackgroundAdd').style.display = 'none';
    }
</script>

</div>
		</div>
		<!-- welcome modal start -->
		<div class="welcome-modal">
			<button class="welcome-modal-close">
				<i class="bi bi-x-lg"></i>
			</button>
			<iframe
				class="w-100 border-0"
				src="https://embed.lottiefiles.com/animation/31548"
			></iframe>
			<div class="text-center">
				<h3 class="h5 weight-500 text-center mb-2">
					Open source
					<span role="img" aria-label="gratitude">❤️</span>
				</h3>
				<div class="pb-2">
					<a
						class="github-button"
						href="https://github.com/dropways/deskapp"
						data-color-scheme="no-preference: dark; light: light; dark: light;"
						data-icon="octicon-star"
						data-size="large"
						data-show-count="true"
						aria-label="Star dropways/deskapp dashboard on GitHub"
						>Star</a
					>
					<a
						class="github-button"
						href="https://github.com/dropways/deskapp/fork"
						data-color-scheme="no-preference: dark; light: light; dark: light;"
						data-icon="octicon-repo-forked"
						data-size="large"
						data-show-count="true"
						aria-label="Fork dropways/deskapp dashboard on GitHub"
						>Fork</a
					>
				</div>
			</div>
			<div class="text-center mb-1">
				<div>
					<a
						href="https://github.com/dropways/deskapp"
						target="_blank"
						class="btn btn-light btn-block btn-sm"
					>
						<span class="text-danger weight-600">STAR US</span>
						<span class="weight-600">ON GITHUB</span>
						<i class="fa fa-github"></i>
					</a>
				</div>
				<script
					async
					defer="defer"
					src="https://buttons.github.io/buttons.js"
				></script>
			</div>
			<a
				href="https://github.com/dropways/deskapp"
				target="_blank"
				class="btn btn-success btn-sm mb-0 mb-md-3 w-100"
			>
				DOWNLOAD
				<i class="fa fa-download"></i>
			</a>
			<p class="font-14 text-center mb-1 d-none d-md-block">
				Available in the following technologies:
			</p>
			<div class="d-none d-md-flex justify-content-center h1 mb-0 text-danger">
				<i class="fa fa-html5"></i>
			</div>
		</div>
		<button class="welcome-modal-btn">
			<i class="fa fa-download"></i> Download
		</button>
		<!-- welcome modal end -->
		<!-- js -->
		<script src="{{asset('assets/vendors/scripts/core.js')}}"></script>
		<script src="{{asset('assets/vendors/scripts/script.min.js')}}"></script>
		<script src="{{asset('assets/vendors/scripts/process.js')}}"></script>
		<script src="{{asset('assets/vendors/scripts/layout-settings.js')}}"></script>
		<script src="{{asset('assets/src/plugins/apexcharts/apexcharts.min.js')}}"></script>
		<script src="{{asset('assets/src/plugins/datatables/js/jquery.dataTables.min.js')}}"></script>
		<script src="{{asset('assets/src/plugins/datatables/js/dataTables.bootstrap4.min.js')}}"></script>
		<script src="{{asset('assets/src/plugins/datatables/js/dataTables.responsive.min.js')}}"></script>
		<script src="{{asset('assets/src/plugins/datatables/js/responsive.bootstrap4.min.js')}}"></script>
		<script src="{{asset('assets/vendors/scripts/dashboard3.js')}}"></script">
		<!-- Google Tag Manager (noscript) -->
		<noscript
			><iframe
				src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS"
				height="0"
				width="0"
				style="display: none; visibility: hidden"
			></iframe
		></noscript>
		<!-- End Google Tag Manager (noscript) -->
	</body>
</html>
