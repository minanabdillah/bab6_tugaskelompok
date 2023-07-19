<!-- app/Views/admin/create_mahasiswa.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Create Mahasiswa</title>
</head>
<body>
    <h1>Create Mahasiswa</h1>
    <link rel="stylesheet" type="text/css" href="/css/style.css">

    <form method="post" action="<?= site_url('storeMahasiswa') ?>">
        <label>Nama:</label>
        <input type="text" name="nama" required><br>

        <label>Jurusan:</label>
        <input type="text" name="jurusan" required><br>

        <label>Semester:</label>
        <input type="number" name="semester" required><br>

        <button type="submit" value="Submit">Simpan</button>
    </form>
    <a href="mahasiswa" class="back-link">Back to Data Mahasiswa</a>
</body>
</html>