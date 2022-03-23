<?php 
    include ('conn.php'); 
    $query=" SELECT * FROM mine";
    $result= mysqli_query($conn,$query);
?>


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
    <?php 
        while($dt = mysqli_fetch_array($result)){
        $data = array(
            array($dt['nama'],$dt['job'])
        );}
        ?>
    <!-- Container 1 - Nama -->
    <?php foreach ($data as $value){ ?>

        <div class="container1">
            <div class="nama">
                    <h1><?php echo $value[0]; ?></h1>
            </div> 
        </div>
    
        <!-- Container 2 - Profesi + Fitur -->
        <div class="container2">
            <div class="profesi">
                <p><?php echo $value[1]; ?></p>
    
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
    <?php } ?>

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
                        <td class="pro-data">Muhammad Hakam Fardana</td>
                    </tr>
                    <tr class="row pro">
                        <td class="table-title">NPM</td>
                        <td class="titik">:</td>
                        <td class="pro-data">20081010198</td>
                    </tr>
                    <tr class="row pro">
                        <td class="table-title">GPA</td>
                        <td class="titik">:</td>
                        <td class="pro-data">3.90</td>
                    </tr>
                    <tr class="row pro">
                        <td class="table-title">Semester</td>
                        <td class="titik">:</td>
                        <td class="pro-data">4th</td>
                    </tr>
                    <tr class="row pro">
                        <td class="table-title">Gender</td>
                        <td class="titik">:</td>
                        <td class="pro-data">Male</td>
                    </tr>
                    <tr class="row pro">
                        <td class="table-title">Age</td>
                        <td class="titik">:</td>
                        <td class="pro-data">20 </td>
                    </tr>
                    <tr class="row pro">
                        <td class="table-title">Birthday</td>
                        <td class="titik">:</td>
                        <td class="pro-data">2002, 13 March</td>
                    </tr>
                    <tr class="row pro">
                        <td class="table-title">Address</td>
                        <td class="titik">:</td>
                        <td class="pro-data">Medokan Semampir, Kec. Sukolilo, Kota Surabaya, Jawa Timur </td>
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
                                <li>Problem Solver</li>
                                <li>Logical Thinking</li>
                                <li>Learner Anthusiast</li>
                                <li>Creative</li>
                                <li>Good Speaker (Wish)</li>
                                <li>Religius</li>
                                <li>Open Minded</li>
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
                                <li>Programmer (C/C++)</li>
                                <li>Web Developer (HTML,CSS)</li>
                                <li>Graphic Designer (CorelDraw, Photoshop)</li>
                                <li>Video Editor (Premiere)</li>
                                <li>Singer</li>
                                <li>Dancer</li>
                                <li>Engineering (Wish)</li>
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
                        Staff of Religious Organization
                    </h2>
                    <span>
                        Ikatan Pelajar Nahdlatul Ulama, Kecamatan Munjungan, 2012 - Now
                    </span>
                </div>   
                <div class="org-data">
                    <h2 class="org-header">
                        Secretary of Scouts Organization
                    </h2>
                    <span>
                        Pramuka, MA Nurul Ulum Munjungan, 2019 - 2020
                    </span>
                </div
                <div class="org-data">
                    <h2 class="org-header">
                        Staff of Religious Social Community
                    </h2>
                    <span>
                        Ansor, Desa Bangun, 2019 - Now
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