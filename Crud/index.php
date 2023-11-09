<?php
// Create database connection using config file
include_once("config.php");

// Fetch all users' data from the database
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id ASC");
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

    tr th {
        background-color: #b2b7bf;
        border: 1px solid gray;
        min-width: 100px;
        text-align: center;
    }

    tr th:first-child {
        min-width: max-content;
    }

    td,
    th {
        border: 1px solid #dddddd;
        text-align: center;
        padding: 2px 5px;
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
            <a href="./create.php">Tambah Data</a>
        </div>
        <table border="1">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Website</th>
                <th>Jenis Kelamin</th>
                <th>Hobi</th>
                <th>Umur</th>
                <th>Tanggal Lahir</th>
                <th>Warna Kesukaan</th>
                <th>Golongan</th>
                <th>Textarea</th>
                <th>Action</th>
            </tr>
            <?php
            $count = 1;
            while ($user_data = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $count++ . "</td>";
                echo "<td>" . $user_data['name'] . "</td>";
                echo "<td>" . $user_data['email'] . "</td>";
                echo "<td>" . $user_data['website'] . "</td>";
                echo "<td>" . ($user_data['jeniskelamin'] ? $user_data['jeniskelamin'] : "N/A") . "</td>";
                echo "<td>" . $user_data['hobby'] . "</td>";
                echo "<td>" . $user_data['umur'] . "</td>";
                echo "<td>" . ($user_data['ttl'] ? $user_data['ttl'] : "N/A") . "</td>";
                echo "<td>" . ($user_data['warnafav'] ? $user_data['warnafav'] : "N/A") . "</td>";
                echo "<td>" . $user_data['gol'] . "</td>";
                echo "<td>" . $user_data['deskripsi'] . "</td>";
                echo "<td><a href='view.php?id=" . $user_data['Id'] . "'><i class='fas fa-eye'></i></a>
            <a href='edit.php?id=" . $user_data['Id'] . "'><i class='fas fa-edit'></i></a>
            <a href='delete.php?id=" . $user_data['Id'] . "'><i class='fas fa-trash'></i></a></td></tr>";
            }
            ?>
        </table>
    </div>

</body>

</html>