<!-- app/Views/admin/edit_mahasiswa.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Edit Mahasiswa</title>
</head>
<body>
    <h1>Edit Mahasiswa</h1>
    <link rel="stylesheet" type="text/css" href="/css/style.css">

    <form method="post" action="<?= site_url('updateMahasiswa/' . $mahasiswa['id']) ?>">
        <label>Nama:</label>
        <input type="text" name="nama" value="<?= $mahasiswa['nama'] ?>" required><br>

        <label>Jurusan:</label>
        <input type="text" name="jurusan" value="<?= $mahasiswa['jurusan'] ?>" required><br>

        <label>Semester:</label>
        <input type="number" name="semester" value="<?= $mahasiswa['semester'] ?>" required><br>

        <button type="submit" value="Update">Update</button>
    </form>
    <a href="/mahasiswa" class="back-link">Back to Data Mahasiswa</a>
</body>
</html>