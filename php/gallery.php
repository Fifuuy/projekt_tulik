<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../styles/gallery.css" />
    <link rel="stylesheet" href="../styles/navbar.css">
    <title>GALERIA</title>
</head>
<body>
    <?php   
        include "navbar.php";
    ?>
    <div class="gallery_title">
        <h1>GALERIA</h1>
    </div>
    <div class="gallery_container">
        <div onclick="powieksz('galeria1.jpg')"><img src="../images/galeria1.jpg"/></div>
        <div onclick="powieksz('galeria2.jpg')"><img src="../images/galeria2.jpg"/></div>
        <div onclick="powieksz('galeria3.webp')"><img src="../images/galeria3.webp"/></div>
        <div onclick="powieksz('galeria4.jpg')"><img src="../images/galeria4.jpg"/></div>
        <div onclick="powieksz('galeria5.jpg')"><img src="../images/galeria5.jpg"/></div>
        <div onclick="powieksz('galeria6.webp')"><img src="../images/galeria6.webp"/></div>
    </div>
    <div class="overlay hidden" onclick="wyjscie()">
        <div>
            <img  src="../images/galeria1.jpg" class="overlay__photo"/>
        </div>
        
    </div>
    <script>
        function powieksz(a){
                var overlay = document.querySelector(".overlay");
                var photo = document.querySelector(".overlay__photo");

                overlay.classList.remove("hidden");
                photo.src="../images/"+a;
        }
        function wyjscie(){
                var overlay = document.querySelector(".overlay");
                overlay.classList.add("hidden");
        }
    </script>
</body>
</html>