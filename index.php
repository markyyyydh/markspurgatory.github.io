<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Template style</title>
<link id="pagestyle" rel="stylesheet" type="text/css" href="template.css">
<script type="text/javascript" src="template.js"></script>

<script type="text/javascript">
function swapStyleSheet(sheet){
document.getElementById('pagestyle').setAttribute('href', sheet);
}
</script>

</head>
  <body>
<div class="wrapper">
 
    <!-- Navigation -->
    <nav class="main-nav">
      <ul>
        <li>
          <a href="#">Home</a>
        </li>
        <li>
          <a href="login.html">login</a>
        </li>
        <li>
          <a href="#">pagina 1</a>
        </li>
        <li>
          <a href="#">pagina 2</a>
        </li>
        <li>
            <div class="dropdown">
                <a class="dropbtn">Dropdown</a>
                <div class="dropdown-content">
                    <button onclick="swapStyleSheet ('template.css') ">pentasol</button>
                    <button onclick="swapStyleSheet ('template1.css') ">minttea</button>
                    <button onclick="swapStyleSheet ('template2.css') ">bleusea</button>
                    <button onclick="swapStyleSheet ('template3.css') ">pinklady</button>
                    <button onclick="swapStyleSheet ('template4.css') ">purpleexplosion</button>
                    <button onclick="swapStyleSheet ('template5.css') ">darkcherry</button>
                    <button onclick="swapStyleSheet ('template6.css') ">cyannight</button>
                    <button onclick="swapStyleSheet ('template7.css') ">darkknight</button>
                </div>
              </div>
          </li>
      </ul>
    </nav>

    <!-- Top Container -->


    <!-- Boxes Section -->
    <section class="boxes">
      <div class="box">
          <img src="https://image.ibb.co/j4Qz8x/pic1.jpg" alt="">
        <i class="fas fa-chart-pie fa-4x"></i>
        <h3>Lorem, ipsum dolor.</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, expedita?</p>
      </div>
      <div class="box">
          <img src="https://image.ibb.co/j4Qz8x/pic1.jpg" alt="">
        <i class="fas fa-globe fa-4x"></i>
        <h3>Lorem, ipsum dolor.</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, expedita?</p>
      </div>
      <div class="box">
          <img src="https://image.ibb.co/j4Qz8x/pic1.jpg" alt="">
        <i class="fas fa-cog fa-4x"></i>
        <h3>Lorem, ipsum dolor.</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, expedita?</p>
      </div>

    </section>

    <!-- Info Section -->
    <section class="info">

      <div>
      <!-- de upload form -->
      <form action="upload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="file">
        <input type="submit" value="Upload">
      </form>

<?php

/*het laten zien van de downloads en downloadbaar maken binnen <?php en ?>*/
$files = scandir("uploads");
for($a = 2; $a < count($files); $a++) { 
  echo "<p>";
  echo '<a download "'.$files[$a].'" href="uploads/'.$files[$a].'">'.$files[$a].'</a>';
  echo "</p>";
}
?>
        
      </div>
      <img src="https://image.ibb.co/j4Qz8x/pic1.jpg" alt="">
      </section>

    <section class="info">

        <div>
          <h2>Lorem ipsum dolor sit amet.</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae alias reiciendis deleniti possimus nemo non repellendus?
            Quae atque vero modi quidem! Autem cupiditate fugit doloribus ad amet, asperiores provident commodi.</p>
          <a href="#" class="btn">Lorem, ipsum dolor.</a>
        </div>
        <img src="https://image.ibb.co/j4Qz8x/pic1.jpg" alt="">

      </section>
  
    </body>
    </html>
    <!-- Portfolio -->

    <!-- Footer -->
    <!--
    <footer>
      <p>GridBiz &copy; 2018</p>
    </footer>

  </div>
    -->
  <!-- Wrapper Ends -->