<!-- app/Views/admin/mahasiswa.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Admin - Mahasiswa</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>

    <a href="<?= site_url('createMahasiswa') ?>">Tambah Mahasiswa Baru</a>
    <a href="dosen"><button>Menuju Halaman Dosen</button></a>
    <!-- <link rel="stylesheet" type="text/css" href="/css/style.css"> -->
    <link rel="stylesheet" type="text/css" href="/css/style.css">

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Jurusan</th>
                <th>Semester</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mahasiswa as $mhs) : ?>
                <tr>
                    <td><?= $mhs['id'] ?></td>
                    <td><?= $mhs['nama'] ?></td>
                    <td><?= $mhs['jurusan'] ?></td>
                    <td><?= $mhs['semester'] ?></td>
                    <td>
                        <a href="<?= site_url('editMahasiswa/' . $mhs['id']) ?>">Edit</a>
                        <a href="<?= site_url('deleteMahasiswa/' . $mhs['id']) ?>">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>