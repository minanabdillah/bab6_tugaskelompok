<!-- app/Views/admin/create_dosen.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Create Dosen</title>
</head>
<body>
    <h1>Create Dosen</h1>
    <link rel="stylesheet" type="text/css" href="/css/style.css">

    <form method="post" action="<?= site_url('storeDosen') ?>">
        <label>Nama:</label>
        <input type="text" name="nama" required><br>

        <label>Jabatan:</label>
        <input type="text" name="jabatan" required><br>

        <button type="submit" value="Submit">Simpan</button>
    </form>
    <a href="dosen" class="back-link">Back to Data Dosen</a>
</body>
</html>