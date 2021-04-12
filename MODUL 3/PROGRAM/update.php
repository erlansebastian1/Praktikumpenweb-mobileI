<?php
require("function.php");
if (isset($_POST["insert"])) {
    if (insert($_POST > 0)) {
        echo "<script>
            alert('data berhasil ditambah');
            document.location.href = 'index.php';
        </script>";
    } else {
        echo "<script>
            alert('data gagal ditambah');
            document.location.href = 'index.php';
        </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
</head>

<body>
    <a href="index.php">home</a>
    <form action="" method="POST">
        <ul>
            <li>
                <label for="NIP">NIP</label>
                <input type="NIPt" name="NIP" id="NIP">
            </li>
            <li>
                <label for="nama">namak</label>
                <input type="text" name="nama" id="nama">
            </li>
            <li>
                <label for="jenis_kelamin">jenis_kelamin</label>
                <input type="text" name="jenis_kelamin" id="jenis_kelamin">
            </li>
            <li>
                <label for="telp>telp</label>
                <input type="text" name="telp" id="telp">
			 <li>
                <label for="alamat">alamat</label>
                <input type="text" name="alamat" id="alamat">
                <button type="submit" name="insert">insert</button>
            </li>
        </ul>
    </form>
</body>

</html>