<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Form</title>
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
                <li><a href="homeuser.php">Home</a></li>
                <li><a href="businessfields.php">Business Fields</a></li>
                <li class="active"><a href="memberaccount.php">Form</a></li>
                <li><a href="terms.php">Terms & Conditions</a></li>
                <li><a href="index.php" class="btn-merah">Log Out</a></li>
            </ul>
        </div>
    </header>
    <main id="main"> 
        <section class="ktk" data-aos="fade-up" data-aos-duration="1500">
            <div class ="textmmbr">
            <center><h1>Data Member Account</h1></center>
            </div>
            <div class="kotak">
                <table style="margin-left:auto;margin-right:auto; font-size: 23px;">
                <tr>
                    <td>Username</td>
                    <td>: <span id="ak_username"></span></td>
                </tr>
                <tr>
                    <td>Full Name</td>
                    <td>: <span id="ak_nama"></span></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>: <span id="ak_email"></span></td>
                </tr>
                <tr>
                    <td>Phone</td>
                    <td>: <span id="ak_nohp"></span></td>
                </tr>
                <tr>
                    <td>Nationality</td>
                    <td>: <span id="ak_na"></span></td>
                </tr>
                <tr>
                    <td>Required Service</td>
                    <td>: <span id="service"></span></td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td>: <span id="gender"></span></td>
                </tr>                
            </table>
            </div>
        </section>  
    </main>

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

<script src="folderjs/memberaccount.js"></script>

</body>
</html>