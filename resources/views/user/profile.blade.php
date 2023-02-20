<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content=" This is website to search for apartment in aqaba for rent or buy or show your house for sell ">
    <meta name="author" content="Abdelmajied Akram Abu Suliman">
    <meta name=" Keyword " content=" aqaba , apartment , rent , buy , sell , jordan , tourism , activities in aqaba , red sea , house ">
    <meta name="Copyright" content=" Orange Coding Academy . Designed by Abdelmajied Akram Abu Suliman ">
    <meta name="refresh" content=" 1 ">
    <link rel="icon" type="image/x-icon" href="./IMG/icon.png">
    <title>Profile</title>

    <style>
        /* <?php include("./components/header.css")?>
        <?php include("./components/footer.css")?>
        <?php include("./CSS/profile.css")?> */
    </style>

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/3692f58ddc.js" crossorigin="anonymous"></script>
      <!-- Google Font -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link href="https://fonts.googleapis.com/css2?family=Annie+Use+Your+Telescope&family=Grey+Qo&family=Open+Sans:wght@300;400;600;700;800&family=Poppins:wght@100&display=swap" rel="stylesheet">

</head>

<body>

    <?php include ("./components/header.php") ?>


    <section>
        <div class="container">
            <div id="upDiv">
                <h2>Profile</h2>
                <div id="container-of-image-and-information" onmouseover="changeBGUp()">
                    <div id="img-and-information">
                        <img id="profile-pic" src="./IMG/image(4).png" alt="">
                        <h1 id="nameOfUser">Talab Yassen</h1>
                    </div>
                    <div id="edit-information">
                        <button id="edit-btn" onclick="enable_info()">Edit Your Information</button>
                        <form action="" method="">
                            <table>
                                <tr>
                                    <td><label for="">First Name</label></td>
                                    <td><input id="fname" disabled type="text" name="first-name" value="Talab"></td>
                                </tr>
                                <tr>
                                    <td><label for="">Last Name</label></td>
                                    <td><input id="lname" disabled type="text" name="last-name" value="Yasseen"></td>
                                </tr>
                                <tr>
                                    <td><label for="">Mobile</label></td>
                                    <td><input id="mobile" disabled type="number" name="mobile" value="0777777777"></td>
                                </tr>
                                <tr>
                                    <td><label for="">Password</label></td>
                                    <td><input id="pass" disabled type="text" name="password"></td>
                                </tr>
                            </table>
                            <button id="update-btn" disabled type="submit" onmouseover="changeStyle()" onmouseleave="returnStyle()">Update Profile</button>
                        </form>
                    </div>
                </div>
                <br>
                <br>
            </div>
            <div id="containerOfCoupon" onmouseover="changeBGDown()">
                <div>

                        <table style="font-size: 1.4rem;">
                            <tr>
                                <td>Your first part of code is :</td>
                                <td><pre>[9ZQ2]</pre><input id="websitePart" type="hidden" name="first-part" value="9ZQ2"></td>
                            </tr>
                            <tr>
                                <td>Your second part of code is :</td>
                                <td><input id="ownerPart" type="text" name="second-part" maxlength="4" onkeyup="typeYourCode()"></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <button disabled id="generateQR" onclick="showQR()">Generate Your QR Code</button>
                                </td>
                            </tr>
                        </table>
                    <img src="https://www.qrcode-monkey.com/img/default-preview-qr.svg" alt="QRCode" id="QRCode">
                </div>
                <div>
                    <div class="bubble bubble-bottom-left">
                        <ul>
                            <li>
                                Complete your code to have a coupon.
                            </li>
                            <li>
                                You can complete your code by rent/buy apartment, and get a second part of code from the owner.
                            </li>
                            <li>
                                You can use rent's coupon in specific restaurants and cafe's :  Tatbileh, FarahWay, Burger Makers and Al-Qaysser || Tche Tche, Zain and Arjwan.
                            </li>
                            <li>
                                You can use buy's coupon in specific markets : Al-Adham, DADA group and Samsung.
                            </li>
                        </ul>
                    </div>
                    <a href="services.php"><button id="callToActionProfile">Rent/Buy Now</button></a>
                </div>
            </div>

        </div>
    </section>







    <?php include("./components/footer.php") ?>


    <span class="up"> <i class="fa-solid fa-up-long"></i></span>

    <!-- <script src="./js/.js"></script> -->
    <script src="./js/edit.js"></script>

</body>
</html>
