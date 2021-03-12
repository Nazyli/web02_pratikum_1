<?php
$proses = $_POST['proses'];
var_dump($_POST);
$nama_siswa = $_POST['nama'];
$matkul = $_POST['matkul'];
$nilai_uts = $_POST['uts'];
$nilai_uas = $_POST['uas'];
$nilai_tugas = $_POST['tugas'];

$ns1 = ['nama' => 'Evry Nazyli Ciptanto', 'matkul' => 'Dasar-Dasar Pemrograman', 'uts' => 80, 'uas' => 84, 'tugas' => 78];
$ns2 = ['nama' => 'Farid Muhari', 'matkul' => 'Basis Data', 'uts' => 70, 'uas' => 50, 'tugas' => 68];
$ns3 = ['nama' => 'Diny Brilianti', 'matkul' => 'Pemrograman Web', 'uts' => 60, 'uas' => 86, 'tugas' => 70];
$ns4 = ['nama' => 'Joko Supriyanto', 'matkul' => 'Basis Data', 'uts' => 90, 'uas' => 91, 'tugas' => 82];
$ns5 = ['nama' => $nama_siswa, 'matkul' => $matkul, 'uts' => $nilai_uts, 'uas' => $nilai_uas, 'tugas' => $nilai_tugas];

$ar_nilai = [$ns1, $ns2, $ns3, $ns4, $ns5];

?>


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
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
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
                <div class="card mb-3 border-primary w-100">
                    <div class="card-header text-white bg-primary">Data Nilai</div>
                    <div class="card-body">
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nama Lengkap</th>
                                    <th scope="col">Mata Kuliah</th>
                                    <th scope="col">Nilai UTS</th>
                                    <th scope="col">Nilai UAS</th>
                                    <th scope="col">Nilai Tugas</th>
                                    <th scope="col">Nilai Akhir</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($ar_nilai as $ns) {
                                ?>
                                    <tr>

                                        <th scope="row"><?= $no++ ?></th>
                                        <td><?= $ns['nama'] ?></td>
                                        <td><?= $ns['matkul'] ?></td>
                                        <td><?= $ns['uts'] ?></td>
                                        <td><?= $ns['uas'] ?></td>
                                        <td><?= $ns['tugas'] ?></td>
                                        <td><?= (30 * $ns['uts'] / 100) + (35 * $ns['uas'] / 100) + (35 * $ns['tugas'] / 100) ?></td>
                                    </tr>

                                <?php } ?>
                            </tbody>
                        </table>
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
                            <script>
                                document.write(new Date().getDate() + "-" + (new Date().getMonth() + 1) + "-" + new Date().getFullYear());
                            </script>
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
        <div class="modal fade" id="aboutMe" tabindex="-1" role="dialog" aria-labelledby="aboutMeLabel" aria-hidden="true">
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
                    <script>
                        document.write(new Date().getFullYear());
                    </script> - Developed by
                    <b><a href="https://github.com/Nazyli/" target="_blank">Evry Nazyli</a></b>
                </span>
            </div>
        </div>
    </footer>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#contact").click(function() {
                $('.toast').toast({
                    delay: 2000
                });
                $('.toast').toast('show');
            });
        });
    </script>
</body>

</html>