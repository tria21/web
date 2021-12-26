<html>
<title>CRUD</title>

<head>
    <link rel="stylesheet" href="style/materialize.min.css" />
</head>

<body>
<nav>
        <div class="nav-wrapper teal">
        <div class="container">
          <a href="index.php" class="brand-logo center white-text">CRUD - CREAT READ UPDATE DELETE</a>
        </div>
        </div>
</nav>
    <div class="container" style="margin-top:8%">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <p>
                    <center>
                        <h5>Tambah Data Mahasiswa</h5><hr>
                    </center>
                </p>
                <br>

                <form role="form" method="post" action="input.php">
                    <div class="form-group">
                        <label>Nama</label>
                        <input class="form-control" name="nama">
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <p>
                            <label>
                                <input name="jenis_kelamin" type="radio" value="Laki-laki" />
                                <span>Laki-laki</span>
                            </label>
                        </p>
                        <p>
                            <label>
                                <input name="jenis_kelamin" type="radio" value="Perempuan"/>
                                <span>Perempuan</span>
                            </label>
                        </p>
                    </div>
                    <!-- <div class="form-group">
                        <label>Program Studi</label>
                            <select name="program_studi">
                                <option value="" select="selected">--Pilih Program Studi--</option>
                                <option value="Sistem Informasi">Sistem Informasi</option>
                                <option value="Teknik Informatika">Teknik Informatika</option>
                            </select>
                    </div> -->
                    <div class="form-group"> 
                        <label>Program Studi</label> 
                        <select name="program_studi" class="form-control"> 
                            <option value="" select="selected">Pilih Program Studi</option> 
                            <option value="Sistem Informasi">Sistem Informasi</option> 
                            <option value="Teknik Informatika">Teknik Informatika</option> 
                        </select> 
                    </div>
                    <button type="submit" class="btn green">Simpan</button>
                    <a href="index.php" class="btn red" style="margin-right:1%;">Batal</a>
                </form>
            </div>
        </div>
        <p>
    </div>
    <script src="style/materialize.min.js"></script>
</body>

</html>