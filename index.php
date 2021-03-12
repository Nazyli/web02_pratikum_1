<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Evry Nazyli Ciptanto - Pratikum 1</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">

</head>

<body>

	<header>
		<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary">
			<a class="navbar-brand" href="#">Evry Nazyli Ciptanto</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
				aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarCollapse">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active">
						<a class="nav-link" href="#">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="modal" data-target="#aboutMe" href="#">About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="https://github.com/Nazyli/" target="_blank">Portofolio</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" id="contact">Contact</a>
					</li>
				</ul>
			</div>
		</nav>
	</header>

	<main role="main" class="container" id="main">
		<div class="row">
			<div class="col-md-12 mb-5">
				<h2 class="mt-5 text-center text-secondary">Aplikasi Sistem Penilaian</h2>
			</div>
			<div class="col-md-12 d-flex justify-content-center">
				<div class="card mb-3 border-primary w-75">
					<div class="card-header text-white bg-primary">Form Input Nilai</div>
					<div class="card-body">
						<form action="array_siswa.php" method="POST">
							<div class="form-group row">
								<label class="col-4 col-form-label" for="name">Nama Lengkap</label>
								<div class="col-8">
									<input id="nama" name="nama" type="text" class="form-control" placeholder="Nama Mahasiswa">
								</div>
							</div>
							<div class="form-group row">
								<label for="matkul" class="col-4 col-form-label">Mata Kuliah</label>
								<div class="col-8">
									<select id="matkul" name="matkul" class="custom-select">
										<option value="Dasar-Dasar Pemrograman">Dasar-Dasar Pemrograman</option>
										<option value="Basis Data">Basis Data</option>
										<option value="Pemrograman Web">Pemrograman Web</option>
									</select>
								</div>
							</div>
							<div class="form-group row">
								<label for="uts" class="col-4 col-form-label">Nilai UTS</label>
								<div class="col-8">
									<input id="uts" name="uts" placeholder="Nilai Ujian Tengah Semester" type="text"
										class="form-control">
								</div>
							</div>
							<div class="form-group row">
								<label for="uas" class="col-4 col-form-label">Nilai UAS</label>
								<div class="col-8">
									<input id="uas" name="uas" placeholder="Nilai Ujian Akhir Semester" type="text"
										class="form-control">
								</div>
							</div>
							<div class="form-group row">
								<label for="tugas" class="col-4 col-form-label">Nilai Tugas</label>
								<div class="col-8">
									<input id="tugas" name="tugas" placeholder="Nilai Tugas / Pratikum" type="text"
										class="form-control">
								</div>
							</div>
							<div class="form-group row">
								<div class="offset-4 col-8">
									<button name="submit" type="submit" class="btn btn-success">Simpan</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>

		<div aria-live="polite" aria-atomic="true">
			<div id=toast>
				<div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
					<div class="toast-header bg-info text-white">
						<strong class="mr-auto">Email</strong>
						<small>
							<script> document.write(new Date().getDate() + "-" + (new Date().getMonth() + 1)  + "-" + new Date().getFullYear());</script>
						</small>
						<button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="toast-body">
						evrynazyli@gmail.com
					</div>
				</div>
			</div>
		</div>
		<div class="modal fade" id="aboutMe" tabindex="-1" role="dialog" aria-labelledby="aboutMeLabel"
			aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header bg-info text-white">
						<h5 class="modal-title" id="aboutMeLabel">About Me</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<blockquote class="blockquote">
							<p class="mb-0">Evry Nazyli Ciptanto.</p>
							<footer class="blockquote-footer">Teknik Informatika <cite title="Source Title"> ( TI 08
									)</cite></footer>
							<footer class="blockquote-footer">0110220045</footer>
							<p class="mt-2 text-secondary font-italic">Pratikum 1 - Pemrograman Web Lanjutan</p>
						</blockquote>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>
	</main>

	<footer class="footer">
		<div class="container my-auto">
			<div class="text-center my-auto">
				<span>Pratikum 1 &mdash;
					<script> document.write(new Date().getFullYear());</script> - Developed by
					<b><a href="https://github.com/Nazyli/" target="_blank">Evry Nazyli</a></b>
				</span>
			</div>
		</div>
	</footer>
	<script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script>
		$(document).ready(function () {
			$("#contact").click(function () {
				$('.toast').toast({ delay: 2000 });
				$('.toast').toast('show');
			});
		});
	</script>
</body>

</html>