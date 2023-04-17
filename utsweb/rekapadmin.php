<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="style.css">
    <title>Rekap Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>
<body>
    <!--header-->
    <div class="medsos">
        <div class="container">
            <ul>
                <li><a href="https://www.facebook.com/posindonesia/?locale=id_ID"><i class="fa-brands fa-facebook"></i></a></li>
                <li><a href="https://www.youtube.com/@PosIndonesiajuara"><i class="fa-brands fa-youtube"></i></a></li>
                <li><a href="https://twitter.com/PosIndonesia?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor"><i class="fa-brands fa-twitter"></i></a></li>
                <li><a href="https://www.instagram.com/posindonesia.ig/"><i class="fa-brands fa-instagram"></i></a></li>
            </ul>
        </div>
    </div>
    <header>
        <div class="container">
            <h1><a href="">HALO POS</a></h1>
            <ul>
                <li><a href="homeadmin.php">Home & List Product</a></li>
                <li class="active"><a href="rekapadmin.php">Calculation</a></li>
                <li><a href="kariradmin.php">Career</a></li>
                <li><a href="visimisi.php">Company Purpose</a></li>
                <li><a href="index.php" class="btn-merah">Log Out</a></li>
            </ul>
        </div>
    </header>

    <div class="hitung">
        <br>
        <h1>Form Perhitungan Hasil Penjualan Jasa Bisnis PT Halo Pos</h1>
        </br>

        <form method="rkp">
            <br>
                <div class="htg">
                    <label for="input">Jenis Produk Jasa Bisnis<span class="required" >*</span></label>
                    <input type="text" placeholder="Masukkan jenis produk bisnis" id="produk" required>
                    <br>
                    <label for="jumlah">Total Jenis Produk Jasa Bisnis Terjual per Hari<span class="required" >*</span></label>
                    <input type="number" id="angka1" required placeholder="Masukan total terjual">
                    </br>
                    <br>
                    <select id="operator">
                        <option value="*">*</option>
                        <option value="+">+</option>
                        <option value="-">-</option>
                        <option value="/">/</option>
                    </select>
                    </br>
                    <br>
                    <label for="jumlah">Harga Jenis Produk Jasa Bisnis<span class="required" >*</span></label>
                    <input type="number" id="angka2" placeholder="Masukan harga per jenis produk bisnis">
                    </br>
                    <br>
                    <center><button type="button" onclick="hitung()">Hitung</button></center>
                    </br>
                    <br>
                    <input type="text" id="hasil" value="hasil" required placeholder="Hasil">
                </div>
            </br>
        </form>
    </div>
    
    <!--footer-->
    <footer class="footer">
        <div class="footer-left">
            <p>Copyright &copy; Halo Pos. 2023</p>
        </div>

        <div class="footer-center">
            <div>
                <i class="fa fa-map-marker"></i>
                <p><span> Gedung Graha Halo Pos
                    </span>Jl. Banda No.30 Bandung</p>
            </div>
            <div>
                <i class="fa fa-phone"></i>
                <p>Hallo Pos: 1500161</p>
            </div>
            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="#">halopos@posindonesia.co.id</a></p>
            </div>
        </div>

        <div class="footer-right">
            <p class="footer-about">
                <span>About</span>
                Halo Pos merupakan sebuah Badan Usaha Milik Negara (BUMN) Indonesia 
                yang bergerak di bidang layanan pos. Saat ini, bentuk badan usaha Halo Pos 
                merupakan Perseroan Terbatas dan sering disebut dengan PT. Pos Indonesia. 
                Bentuk usaha Halo Pos ini berdasarkan Peraturan Pemerintah Republik Indonesia 
                Nomor 5 Tahun 1995. Peraturan Pemerintah tersebut berisi tentang pengalihan bentuk 
                awal Halo Pos yang berupa perusahaan umum (perum) menjadi sebuah perusahaan persero.
            </p>
        </div>
        
    </footer>
        
</body>
<script src="folderjs/rekap.js"></script>
</html>