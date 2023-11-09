<?=
$nama = $_POST["name"];
$password = $_POST["password"];
$email = $_POST["email"];
$website = $_POST["website"];
$umur = $_POST["umur"];
$ttl = $_POST["tanggallahir"];
$jeniskelamin = $_POST["jeniskelamin"];
$warna = $_POST["warna"];
$hobbies = isset($_POST["hobby"]) ? $_POST["hobby"] : [];
$selectedHobbies = implode(", ", $hobbies);
$golongan = $_POST["golongan"];

$lomba = isset($_POST["lomba"]) ? $_POST["lomba"] : [];
$lombas = implode(", ", $lomba);

$text = $_POST["textarea"];
$photo = $_POST["foto"];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;1,100;1,200;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
</head>
<style>
    * {
        margin: 0;
        padding: 0;
    }

    body {
        font-family: 'Poppins', sans-serif;
        width: 100%;
        overflow: hidden;
    }

    .wrapper {
        width: 100%;
        padding: 0 50px;
    }

    table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 90%;
    }

    th {
        width: 150px;
    }

    tr th {
        background-color: #b2b7bf;
        border: 1px solid gray;
    }

    td,
    th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

    .btn a {
        outline: none;
        background-color: transparent;
        border: 1px solid gray;
        cursor: pointer;
        transition: ease .5s all;
    }

    .btn a:hover {
        background-color: gray;
    }

    .btn {
        padding: 20px 0;
    }

    .btn a {
        text-decoration: none;
        color: black;
        padding: 7px 10px;
        border: 1px solid black;
    }

    td a {
        color: black;
    }
</style>

<body>

    <div class="wrapper">
        <div class="btn">
            <a href="./index.php">Kembali</a>
        </div>
        <table border="1">
            <tr>
                <th>No</th>
                <td>1</td>
            </tr>
            <tr>
                <th>Nama</th>
                <td>John Doe</td>
            </tr>

            <tr>
                <th>Email</th>
                <td>johndoe@gmail.com</td>
            </tr>

            <tr>
                <th>Website</th>
                <td>www.johndoe.com</td>
            </tr>

            <tr>
                <th>Jenis Kelamin</th>
                <td>Laki - laki</td>
            </tr>

            <tr>
                <th>Foto</th>
                <td>john.png</td>
            </tr>
        </table>
    </div>
</body>

</html>