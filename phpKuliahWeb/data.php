<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="data.css">
    <title>Hello Hakam!</title>
    <link rel = "icon" href = "assets/hello_hakam.png">
</head>
<body>
    <!-- Container 1 - Nama -->
    <div class="container1">
        <div class="nama">
            <h1><?= $_POST["headname"]; ?></h1>
        </div>
    </div>

    <!-- Container 2 - Profesi + Fitur -->
    <div class="container2">
        <div class="profesi">
            <p><?= $_POST["job"]; ?></p>
        </div>
        <div class="menu1">
            <p>
                <a class="about" href="#menu1">About Me</a>
            </p>
        </div>
        <div class="menu2">
            <p>
                <a class="contact" href="#menu2">Contact</a>
            </p>
            
        </div>
    </div>

    <!-- Container 3 - Foto Utama -->
    <div class="container3">
        <img class="foto1" src="assets/Profile-IG.jpg">
    </div>

    <!-- Adding -->
    <h2 class="add" id="menu1"></h2>

    <!-- Container 4 - Foto 2 + Deskripsi + Fitur Tambahan -->

    <div class="container4">
        <img class="foto2" src="assets/Profile-IG-2.jpg">
        <div class="full desc">
            <div class="salam">
                <p>Hello!</p>
            </div>
            <div class="desc1">
                <p class="bout">a bit about me:</p>
            </div>
            <div class="desc2">
                <p class="aku">I am a student who is pursuing a bachelor's degree at UPN "Veteran" Jawa Timur in the Department of Informatics. I was born in Malang, March 13, 2002. I live in Trenggalek City, East Java. Even so, I am now living my own life by living in a boarding house in the city of Surabaya in order to facilitate access to go to campus.</p>
            </div>
            <div class="desc3">
                <p>More About Me?</p>
            </div>
            <div class="more">
                <div class="more1">
                    <a class="pro mg-kiri" href="#prof">My Profile</a>
                </div>
                <div class="more2">
                    <a class="skl mg-kiri" href="#skills">My Skills</a>
                </div>
                <div class="more3">
                    <a class="org mg-kiri" href="#orga">My Organization</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Container 5 - Link More -->

    <div class="container5" id="prof">
<!-- Profiles -->
        <h2 class="header pro">My Profile</h2>
            <div class="tabel pro">
                <table class="tbl pro">
                    <tr class="row pro">
                        <td class="table-title">Fullname</td>
                        <td class="titik">:</td>
                        <td class="pro-data"><?= $_POST["headname"]; ?></td>
                    </tr>
                    <tr class="row pro">
                        <td class="table-title">NPM</td>
                        <td class="titik">:</td>
                        <td class="pro-data"><?= $_POST["npm"]; ?></td>
                    </tr>
                    <tr class="row pro">
                        <td class="table-title">GPA</td>
                        <td class="titik">:</td>
                        <td class="pro-data"><?= $_POST["gpa"]; ?></td>
                    </tr>
                    <tr class="row pro">
                        <td class="table-title">Grade</td>
                        <td class="titik">:</td>
                        <td class="pro-data"><?= $_POST["grade"]; ?></td>
                    </tr>
                    <tr class="row pro">
                        <td class="table-title">Gender</td>
                        <td class="titik">:</td>
                        <td class="pro-data"><?= $_POST["gender"]; ?></td>
                    </tr>
                    <tr class="row pro">
                        <td class="table-title">Age</td>
                        <td class="titik">:</td>
                        <td class="pro-data"><?= $_POST["age"]; ?></td>
                    </tr>
                    <tr class="row pro">
                        <td class="table-title">Birthday</td>
                        <td class="titik">:</td>
                        <td class="pro-data"><?= $_POST["birthday"]; ?></td>
                    </tr>
                    <tr class="row pro">
                        <td class="table-title">Address</td>
                        <td class="titik">:</td>
                        <td class="pro-data"><?= $_POST["address"]; ?></td>
                    </tr>
                </table>
            </div>
    </div>
<!-- End Profiles -->
<!-- Skills -->
    <div class="container6" id="skills">
        <h2 class="header skl">My Skills</h2>
            <div class="sub cont6">
                <table class="tabel skl">
                    <tr class="tr skl">
                        <td class="soft skl">
                            <p class="sub teks">Soft Skills</p>
                        </td>
                        <td class="titik2"></td>
                        <td class="td skl">
                            <ul class="skl-data">
                                <li><?= $_POST["skl-1"]; ?></li>
                                <li><?= $_POST["skl-2"]; ?></li>
                                <li><?= $_POST["skl-3"]; ?></li>
                                <li><?= $_POST["skl-4"]; ?></li>
                                <li><?= $_POST["skl-5"]; ?></li>
                                <li><?= $_POST["skl-6"]; ?></li>
                                <li><?= $_POST["skl-7"]; ?></li>
                            </ul>
                        </td>
                        <td class="space tabel1">  
                            <p></p>
                        </td>
                        <td class="hard skl">
                           <p class="sub teks">Hard Skills</p>
                        </td>
                        <td class="titik2"></td>
                        <td>
                            <ul class="skl-data2">
                                <li><?= $_POST["skl-11"]; ?></li>
                                <li><?= $_POST["skl-12"]; ?></li>
                                <li><?= $_POST["skl-13"]; ?></li>
                                <li><?= $_POST["skl-14"]; ?></li>
                                <li><?= $_POST["skl-15"]; ?></li>
                                <li><?= $_POST["skl-16"]; ?></li>
                                <li><?= $_POST["skl-17"]; ?></li>
                            </ul>
                        </td>
                    </tr>
                </table>
            </div>
    </div>
<!-- Akhir Skills -->
<!-- Organization -->
    <div class="container7" id="orga">
        <h2 class="header org">My Organization</h2>
            <div class="tabel org">
                <div class="org-data">
                    <h2 class="org-header">
                        <?= $_POST["org-1"]; ?>
                    </h2>
                    <span>
                        <?= $_POST["aka-1"]; ?>
                    </span>
                </div>   
                <div class="org-data">
                    <h2 class="org-header">
                        <?= $_POST["org-2"]; ?>
                    </h2>
                    <span>
                        <?= $_POST["aka-2"]; ?>
                    </span>
                </div
                <div class="org-data">
                    <h2 class="org-header">
                        <?= $_POST["org-3"]; ?>
                    </h2>
                    <span>
                        <?= $_POST["aka-3"]; ?>
                    </span>
                </div>
            </div>
    </div>
<!-- Akhir Container 7 -->

<!-- Container 8 - Contact -->
    <div class="container8" id="menu2">
        <h2 class="header cont">My Contact</h2>
        <div class="contact menu">
            <table class="cont tabel">
                <tr>
                    <td><a href="https://www.facebook.com/m.hakam.fardana"><img src="assets/FACEBOOK.png" alt=""></a></td>
                    <td><a href="https://github.com/hakamf13"><img src="assets/github.png" alt=""></a></td>
                    <td><a href="https://www.instagram.com/hakamf_/"><img src="assets/INSTAGRAM.png" alt=""></a></td>
                    <td><a href="mailto:hakamf13@gmail.com"><img src="assets/gmail.png" alt=""></a></td>
                </tr>
<!--
                <tr>
                    <td></td>
                </tr>
                <tr></tr>
                <tr class="tr tabel">
                    <td><a href="https://www.facebook.com/m.hakam.fardana">Muhammad Hakam Fardana</a></td>
                    <td><a href="https://github.com/hakamf13">hakamf13</a></td>
                    <td><a href="https://www.instagram.com/hakamf_/">hakamf_</a></td>
                    <td><a href="mailto:hakamf13@gmail.com">mhakamf13@gmail.com</a></td>
                </tr>
  -->
            </table>
        </div>
    </div>
<!-- Copyright - Footer -->
    <div class="container9">
        <footer>Copyright 2022 by Muhammad Hakam Fardana</footer>
    </div>
    <div class="container10">
        <footer>Hello Hakam!</footer>
    </div>
</body>
</html>