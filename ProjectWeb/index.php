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
        <div class="image">
            <img src="image/main.jpg" width="100%" height="400px">
        </div>
        <div class="container">
            <div class="icerik">
                <h2>Kendi Logonu Seç!</h2>
                <div class="divider"></div><br>
                <form action="choice.php" method="post">
                    <input type="submit" value="Başla" name="submit" class="buton">
                </form>
            </div>
        </div>
    </div>
</body>

</html>