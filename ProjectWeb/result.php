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
            <div class="container">
                <div class="icerik">
                    <h3>SEÇİLEN LOGOLAR</h3>
                    <!-- <form action="logopost.php" method="post"> -->
                        <div class="logo">
                            <?php
                                if(isset($_POST['submit'])){
                                    if(!empty($_POST['logos'])) {
                                        foreach($_POST['logos'] as $value){
                                            foreach (choicepicture($value) as $picture){
                            ?>
                                                <div class="picture">
                                                    <img src="<?php echo $picture['imagepath'] ?>" class="center"/>
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
                    <form action="logopost.php" method="post">
                        <h3>ÖNERİLEN LOGOLAR</h3>
                        <p>Senin logon hangisi?</p>
                        <div class="logo">
                            <?php
                                if(isset($_POST['submit'])){
                                    if(!empty($_POST['logos'])) {
                                        foreach($_POST['logos'] as $value){
                                            foreach (outputpicture($value) as $picture){
                            ?>
                                                        <div class="picture">
                                                            <img src="<?php echo $picture['imagepath'] ?>" class="center"/>
                                                            <input type="checkbox" id="checkboximage" class="checkboximage" name="finallogos[]" value="<?php echo $picture['id'] ?>">
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
                        <input type="submit" value="Devam" name="submit" class="buton">
                        <script>
                            var checkboxpicimage=document.querySelectorAll(".checkboximage"); 
                            var buton=document.querySelector("#buton");
                            var sayac = 0;
                            buton.onclick=function(){
                                checkboxpicimage.forEach(function(element){
                                    if(element.checked==true){
                                        sayac = sayac+1;
                                    }
                                });
                                if(sayac == 0 ){
                                    window.alert("Bir resim seçiniz!");
                                }
                                if(sayac > 1 ){
                                    window.alert("Sadece bir resim seçebilirsiniz!");
                                }
                            }
                        </script>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>