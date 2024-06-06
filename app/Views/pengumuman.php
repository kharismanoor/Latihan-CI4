<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="css/style2.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <style>
        .container {
            max-width: 800px;
            margin-top: 20px;
            font-family: "Poppins", sans-serif;
            font-size: small;
        }
        body{
            font-family: "Poppins", sans-serif;
        }
        .card-header {
            background-color: #800000;
            color: white;
        }

        .btn-primary {
            background-color: #800000;
            color: white;
            border: none;
            justify-content: end;
        }
    </style>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#800000;">
        <div class="container">
            <div>
                <ul class="navbar-nav">
                </ul>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="<?= site_url('/admin') ?>">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="<?= site_url('/pengumuman') ?>">Pengumuman</a></li>
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="<?= site_url('/user') ?>">User</a></li>
                    <li class="nav-item" style="margin-left: 460px;">
                        <button class="btn btn-sm btn-light" style="background-color: #800000;" type="button">
                            <a class="nav-link active" aria-current="page" href="<?= site_url('/logout') ?>">
                                Logout
                        </button>
                        </a>

                    </li>
                </ul>

            </div>
        </div>
    </nav>


<body>
<body>
<div class="container">
        <div class="card">
            <h5 class="card-header">Selamat Datang di Pengumuman</h5>
            <div class="card-body">
                <a href="<?= site_url('isi_pengumuman'); ?>" class="btn btn-primary">+ Isi Pengumuman Baru</a>
            </div>
        </div>
</div>
<div class="container">
        <div class="card">
            <h5 class="card-header">Tabel Pengumuman</h5>
            <div class="card-body">
            <table class="table">
                <thead>
                    <tr>

                        <th>Judul</th>
                        <th>Pengumuman</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($pengumuman as $key => $post) : ?>
                    <tr>
                        <td><?php echo $post['judul'] ?></td>
                        <td><?php echo $post['pengumuman'] ?></td>
                        <td>
                        <button class="btn btn-warning btn-sm">
                            <a class="text-white" href="<?= site_url('edit_pengumuman/' . $post['id']) ?>" >Edit</a>
                        </button>
                        <button class="btn btn-danger btn-sm" >
                            <a class="text-white" href="<?= site_url('delete_pengumuman/' . $post['id']) ?>" >Delete</a>
                        </button>
                        </td>
                    </tr>
                    

                    <?php endforeach ?>
                </tbody>
            </table>

            </div>
        </div>
</div>


    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>