<?php require "database.php";
include_once "function.php"; ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>LOGO TASARIMI</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>

    <header>
        <div class="header">
           <div class="resim">
               <a href="index.php"><img src="image\main.jpg" width="250px" height="80px"/></a> 
           </div>
        </div>    
    </header>

    <div class="content">
        <div class="container">
            <div class="icerik">
                <!-- <form action="" method="post"> -->
                    <h3>SENİN LOGON!</h3>
                    <div class="logo">
                        <?php
                            if(isset($_POST['submit'])){
                                if(!empty($_POST['finallogos'])) {
                                    foreach($_POST['finallogos'] as $value){
                                        foreach (finalpicture($value) as $picture){
                        ?>
                                            <div class="pictureson">
                                                <img src="<?php echo $picture['imagepath'] ?>" class="center"/>
                                                <label id="demo" class="demo"></label>
                                            </div>
                        <?php
                                        }
                                    }
                                }
                            }
                        ?>
                        <div style="clear:both;"></div>
                    </div>
                    <div class="divider"></div>
                    <h2>Firma Adın Nedir ?</h2>
                    <input class="input" type="text" id="logoname" name="logoname" placeholder="  Firma Adı Giriniz...">
                    <div class=poststyle>
                        <div class=post>
                            <h2>Yazı Rengi Seçiniz!</h2>
                            <input id="color_picker" type="color" class="colorpicker" onchange="showHex();"> <span id="color_hex_value"></span>
                        </div>
                    <div>
                    <input type="submit" value="Göster" name="submit" class="buton" onclick="logoson()">
                    <script>
                        function showHex(){
                            var demo = document.getElementById("demo");
                                demo.style.color = document.getElementById("color_picker").value
                            
                                // hex = document.querySelector("#color_hex_value"),
                                // h1 = document.querySelector("h1");
                                // h1.style.color = document.querySelector("#color_picker").value      
                        }     
                        function logoson(){
                            var companyname = document.getElementById("logoname").value;
                            document.getElementById("demo").innerHTML = companyname;
                        }
                    </script>
                <!-- </form> -->
                </div>
        </div>
    </div>
</body>

</html>