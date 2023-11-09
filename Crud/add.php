
<?php

// Check If form submitted, insert form data into users table.
if (isset($_POST['Submit'])) {
    $name = $_POST['name'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $website = $_POST['website'];
    $umur = $_POST['umur'];
    $ttl = $_POST['ttl'];
    $jeniskel = $_POST['jeniskelamin'];
    $warna = $_POST['warna'];
    $hobbies = isset($_POST["hobby"]) ? $_POST["hobby"] : [];
    $selectedHobbies = implode(", ", $hobbies);
    $gol = $_POST['golongan'];

    $des = $_POST['textarea'];
    
    


    // include database connection file
    include_once("config.php");

    // Insert user data into table
    $result = mysqli_query($mysqli, "INSERT INTO users(name,password,email,website,umur,ttl, jeniskelamin, warnafav, hobby,gol,deskripsi) VALUES('$name','$password','$email', '$website', '$umur', '$ttl', '$jeniskel', '$warna', '$selectedHobbies', '$gol', '$des')");

    // Show message when user added
    echo "User added successfully. <a href='index.php'>View Users</a>";
}
?>