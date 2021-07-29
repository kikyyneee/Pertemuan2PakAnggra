<html>
    <head>
        <!-- title berfungsi untuk pemberian nama tab browser website anda-->
        <title> Galeri Gambar </title>

        <!-- meta berfungsi untuk search engine (SEO) membaca konten website anda-->
        <meta charset="UTF-8"></meta>
        <meta name="description" content="Berisi Kumpulan gambar atau video dari sekolah"></meta>
        <meta name="keywords" content="HTML,CSS,Website"></meta>
        <meta name="author" content="Muhammad Rizky Maulana Darmawan"></meta>
    </head>
    <body>
        <!-- ukuran dasar / template / canvas desain website anda-->
        <table border="1" width="1200px" height="700px" align="center">
            <!-- baris ini untuk memasukan konten banner dengan file png/jpg-->
            <tr height="150px">
                <td>
                    <img src="img/1.png" width="100%" height="100%">
                </td>    
            </tr>
            <!-- baris ini untuk membuat menu-->
            <tr height="50px">
                <td align="center">
                    <!-- dibawah ini adalah termasuk dalam jenis internal link-->
                    <a href="index.php"><strong>Beranda</strong></a>
                    <a href="profile.php">Profile</a>
                    <a href="galeri_gambar.php">Galeri Gambar</a>
                    <a href="galeri_vidio.php">Galeri Vidio</a>
                    <a href="kontak.php"><b>Kontak</b></a>

                </td>    
            </tr>
            <!-- baris ini adalah konten dari isi website-->
            <tr height="450px">
                <td valign="top">
                    <!-- Source code untuk memasukan konten di galeri gambar-->
                    <table>
                        <tr>
                            <!-- internal link-->
                            <td>
                                <embed autostart="false" height="100%" src="img/D1.png" width="250"></embed>
                            </td>
                            <td>
                                <embed autostart="false" height="100%" src="img/D2.png" width="250"></embed>
                            </td>
                            <td>

                            </td>
                            <td>
                                <embed autostart="false" height="100%" src="img/D3.png" width="250"></embed>
                            </td>
                            <td>
                                <embed autostart="false" height="100%" src="img/D4.png" width="250"></embed>
                            </td>
                        </tr>

                        <tr>
                            <!-- external link-->
                            <td>
                                <embed autostart="false" height="100%" src="img/osis.png" width="250"></embed>
                            </td>
                            <td></td>
                            <td>
                                <embed autostart="false" height="100%" src="img/smk4.png" width="250"></embed>
                            </td>
                            <td></td>
                            <td>
                                <embed autostart="false" height="100%" src="img/osis.png" width="250"></embed>
                            </td>
                        </tr>
                    </table>
                </td>    
            </tr>
            <!-- baris ini untuk footer-->
            <tr height="50px">
                <td align="center">
                    <!-- dibawah ini adalah termasuk dalam jenis external link-->
                    <a href="https://www.facebook.com/"><em>Facebook</em></a>
                    <a href="https://www.instagram.com/"><i>Instagram</></a>
                </td>    
            </tr>
        </table>
    </body>
</html>