<!DOCTYPE html>
<html>
<head>
    <title>Menu CRUD</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h2>Menu CRUD</h2>
    
    <form method="post" action="process.php">
        <input type="hidden" name="id" value="">
        <label for="nama">Nama Menu:</label>
        <input type="text" name="nama" id="nama" required>
        <label for="harga">Harga:</label>
        <input type="text" name="harga" id="harga" required>
        <button type="submit" name="save">Simpan</button>
    </form>

    <table>
        <thead>
            <tr>
                <th>Nama Menu</th>
                <th>Harga</th>
                <th colspan="2">Aksi</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</body>
</html>
