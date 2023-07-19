<!-- app/Views/admin/dosen.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Admin - Dosen</title>
</head>
<body>
    <h1>Data Dosen</h1>

    <a href="<?= site_url('createDosen') ?>">Tambah Dosen Baru</a>
    <a href="mahasiswa"><button>Menuju Halaman Mahasiswa</button></a>
    <link rel="stylesheet" type="text/css" href="/css/style.css">

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Jabatan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($dosen as $dsn) : ?>
                <tr>
                    <td><?= $dsn['id'] ?></td>
                    <td><?= $dsn['nama'] ?></td>
                    <td><?= $dsn['jabatan'] ?></td>
                    <td>
                        <a href="<?= site_url('editDosen/' . $dsn['id']) ?>">Edit</a>
                        <a href="<?= site_url('deleteDosen/' . $dsn['id']) ?>">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>