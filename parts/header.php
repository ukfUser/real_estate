<!--==============================header=================================-->
  <header>
    <div>
      <h1><a href="index.php"><img src="images/logo.jpg" alt=""></a></h1> <!--!!!-->
      <div class="social-icons"> <span>Follow Us:</span> <a href="#" class="icon-3"></a> <a href="#" class="icon-2"></a> <a href="#" class="icon-1"></a> </div>
      <div id="slide">
        <div class="slider">
          <ul class="items">
              2.
              <?php
                for ($i=1; $i<4; $i++){
                    echo '<li><img src="images/slider-' . $i . '-small.jpg" alt=""></li>';
                }
              ?>
          </ul>
        </div>
        <a href="#" class="prev"></a><a href="#" class="next"></a> </div>
      <nav>
        <?php
            include_once 'nav.php';
        ?>
      </nav>
    </div>
  </header>