<?php require "database.php";
include_once "function.php"; ?>
<!DOCTYPE html>
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
            <div class="baslik">
                <h2>BEĞENDİĞİN LOGOLARI SEÇ</h2>
            </div>
            <div class="container">
                <div class="icerik">
                    <h3>LOGOLAR</h3>
                    <div class="divider"></div>
                    <form action="result.php" method="post" id="result" name="result">
                        <div class="logo">
                            <?php
                                foreach (inputpicture() as $picture) {
                            ?>
                                    <div class="picture">
                                        <img src="<?php echo $picture['imagepath'] ?>" class="center"/>
                                        <input type="checkbox" id="checkbox" class="checkboxpic" name="logos[]" value="<?php echo $picture['id']?>" >
                                    </div>
                            <?php 
                                }
                            ?>
                            <div style="clear:both;"></div>
                        </div>
                        <div class="divider"></div>
                        <input type="submit" value="Devam" name="submit" class="buton" id="buton">
                        <script>
                            var checkboxpic=document.querySelectorAll(".checkboxpic"); 
                            var buton=document.querySelector("#buton");
                            var sayac = 0;
                            buton.onclick=function(){
                                checkboxpic.forEach(function(element){
                                    if(element.checked==true){
                                        sayac = sayac+1;
                                    }
                                });
                                if(sayac == 0 ){
                                    window.alert("En az bir resim seçiniz");
                                }
                            }
                        </script>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>