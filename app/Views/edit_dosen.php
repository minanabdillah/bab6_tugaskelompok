<!-- app/Views/admin/edit_dosen.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Edit Dosen</title>
</head>
<body>
    <h1>Edit Dosen</h1>
    <link rel="stylesheet" type="text/css" href="/css/style.css">

    <form method="post" action="<?= site_url('updateDosen/' . $dosen['id']) ?>">
        <label>Nama:</label>
        <input type="text" name="nama" value="<?= $dosen['nama'] ?>" required><br>

        <label>Jabatan:</label>
        <input type="text" name="jabatan" value="<?= $dosen['jabatan'] ?>" required><br>

        <button type="submit" value="Update">Update</button>
    </form>
    <a href="/dosen" class="back-link">Back to Data Dosen</a>
</body>
</html>