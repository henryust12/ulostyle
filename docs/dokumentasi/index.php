<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/ulostyle.css">
    <link rel="stylesheet" href="../code.css">
    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="../assets/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../assets/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="../assets/images/favicon/site.webmanifest">
    <title>Ulostyle - CSS framework buatan anak indonesia dan 99% berbahasa indonesia.</title>
    <style>
        ul li{
            list-style-type: none;
        }

        .kontener img {
            max-width: 18em;
        }


        iframe {
            max-width: 280px;
        }

        .kotak300 {
            max-width: 300px;
        }

        .konten {
            padding: .6em;
        }

        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #ddd;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown:hover .dropbtn {
            background-color: #ddd;
        }
    </style>
</head>

<body>

    <div class="kontener tengah teks-us-gelap">
        <div class="kepala">
            <div class="navigasi-us-merah">
                <ul>
                    <li><a href="../">
                            <img src="../assets/images/Logo-Transparent/white-bg-transparent.png" width="25" alt="">
                            <span class="teks-besar-xl">lostyle</span>
                        </a>
                    </li>
                    <li>
                    </li>

                </ul>

            </div>
        </div>

        <div class="badan kiri">
            <div class="menu-samping-kiri">
                <div class="menu-kiri latar-us-terang">
                    <ul>
                        <li class="dropdown">
                            <a class="dropbtn">Pendahuluan</a>
                            <div class="dropdown-content">
                                <a href="./?page=download">Download</a>
                                <a href="./?page=test_test">Test</a>
                            </div>
                        </li>
                        <hr>
                        <li class="dropdown">
                            <a class="dropbtn">Elemen</a>
                            <div class="dropdown-content">
                                <a href="./?page=warna_terang_dan_gelap">Warna</a>
                            </div>
                        </li>
                        <hr>
                        <li><a href="./">Menu1</a></li>
                    </ul>
                </div>
                <div class="konten">
                    <?php
                        if(isset($_GET['page'])){
                            include 'html/'.$_GET['page'].'.php';
                        }
                    ?>
                </div>
            </div>
        </div>







        <div class="kaki latar-us-abuabu-terang-3">
            <p>
                <a href="https://www.youtube.com/playlist?list=PLgXAiWCTzIVI5vbfO0KMXhtWf81RADbJ0">
                    <img src="../assets/images/icons/youtube.png" alt="YouTube" height="25" />
                </a>
                <a href="https://github.com/henryust12/ulostyle">
                    <img src="http://portfolio.shimatech.net/assets/img/skill-and-tool/github.svg" alt="GitHub"
                        height="25" />
                </a>
            </p>
            <p>
                &copy; 2021 Ulostyle.com <br>
                Dibuat dengan <span class="teks-us-merahjambu">&hearts;</span> dan Ulostyle</p>
        </div>
    </div>



</body>

</html>