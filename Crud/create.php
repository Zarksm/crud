<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran</title>
    <link rel="stylesheet" href="vendor/style.css">
</head>

<body>
    <div class="wrapper">
        <div class="card">
            <div class="title">
                <h2 class="tit">Form Pendaftaran</h2>
                <form action="add.php" method="post" autocomplete="off" enctype="multipart/form-data">
                    <div class="img-wrap">
                        <div class="previmg">
                            <img id="preview" src="" alt="Image Preview">
                        </div>
                        <div class="notes">
                            <p>Masukan Photo. Max ukuran 1kb :)</p>
                        </div>
                        <label for="fileInput" class="custom-file">Browse</label>
                        <input type="file" name="foto" id="fileInput" accept=".jpg, .jpeg, .png" onchange="previewImage()" capture="capture">
                    </div>

                    <div class="input-cstm">
                        <label for="name">Nama</label>
                        <input type="text" name="name" id="name" required>
                    </div>

                    <div class="input-cstm">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" required>
                    </div>

                    <div class="input-cstm-2">
                        <div>
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" required>
                        </div>
                        <div>
                            <label for="website">Website</label>
                            <input type="url" name="website" id="website">
                        </div>
                    </div>

                    <div class="input-cstm-2">
                        <div>
                            <label for="umur">Umur</label>
                            <input type="number" name="umur" id="umur" min="0" max="150">
                        </div>
                        <div>
                            <label for="tanggallahir">Tanggal Lahir</label>
                            <input type="date" name="ttl" id="tanggallahir">
                        </div>
                    </div>

                    <div class="input-cstm genby">
                        <div class="jeniskelamin">
                            <label for="jeniskelamin">Jenis Kelamin</label>
                            <select id="jeniskelamin" name="jeniskelamin">
                                <option value="laki-laki">Laki-laki</option>
                                <option value="perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="warnakesukaan">
                            <label for="warna">Warna Kesukaan</label>
                            <input type="color" id="warna" name="warna">
                        </div>
                    </div>

                    <div class="input-cstm">
                        <div class="hobi">
                            <label>Hobi</label>
                            <div class="hobby">
                                <div class="hobby-options">
                                    <div class="hobi-card">
                                        <input type="checkbox" id="hobby1" name="hobby[]" value="Main Game">
                                        <label for="hobby1">Main Game</label>
                                    </div>

                                    <div class="hobi-card">
                                        <input type="checkbox" id="hobby2" name="hobby[]" value="Nonton">
                                        <label for="hobby2">Nonton</label>
                                    </div>

                                    <div class="hobi-card">
                                        <input type="checkbox" id="hobby3" name="hobby[]" value="Memasak">
                                        <label for="hobby3">Memasak</label>
                                    </div>
                                </div>
                                <div class="hobby-options">
                                    <div class="hobi-card">
                                        <input type="checkbox" id="hobby4" name="hobby[]" value="Berkebun">
                                        <label for="hobby4">Berkebun</label>
                                    </div>

                                    <div class="hobi-card">
                                        <input type="checkbox" id="hobby5" name="hobby[]" value="Menulis">
                                        <label for="hobby5">Menulis</label>
                                    </div>

                                    <div class="hobi-card">
                                        <input type="checkbox" id="hobby6" name="hobby[]" value="Musik">
                                        <label for="hobby6">Musik</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="input-cstm">
                        <div class="gol">
                            <div class="golongan">
                                <label for="golongan">Golongan</label>
                                <select id="golongan" name="golongan">
                                    <option value="Mahasiswa">Mahasiswa</option>
                                    <option value="Dosen">Dosen</option>
                                    <option value="Staff Karyawan">Staff Karyawan</option>
                                    <option value="Umum">Umum</option>
                                </select>
                            </div>


                        </div>
                        <div class="textarea">
                            <label for="textarea">Textarea</label>
                            <textarea id="textarea" name="textarea" rows="4"></textarea>
                        </div>
                    </div>
                    <input type="submit" name="Submit" value="Daftar"></input>
                </form>
            </div>
        </div>
    </div>

    <script src="vendor/script.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var checkboxes = document.querySelectorAll('input[type="checkbox"]');

            checkboxes.forEach(function(checkbox) {
                checkbox.addEventListener('change', function() {
                    var hobiCard = checkbox.parentElement;

                    if (checkbox.checked) {
                        hobiCard.classList.add('checked');
                    } else {
                        hobiCard.classList.remove('checked');
                    }
                });
            });
        });
    </script>
</body>

</html>

<!-- 
                            <div class="lomba">
                                <label for="lomba">Lomba Yg diikutin</label>
                                <select id="lomba" name="lomba[]" multiple>
                                    <option value="Makan Kerupuk">Makan Kerupuk</option>
                                    <option value="Panjat Pindang">Panjat Pindang</option>
                                    <option value="Catur">Catur</option>
                                    <option value="Balap Karung">Balap Karung</option>
                                    <option value="Sendok Kelereng">Sendok Kelereng</option>
                                </select>
                            </div> -->