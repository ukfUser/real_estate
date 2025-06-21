<?php
include 'parts/head.php';
include 'parts/header.php';
?>
  <!--==============================content================================-->
  <section id="content">
    <div class="container_12">
      <div class="grid_8">
        <h2 class="top-1 p3">Welcome message!</h2>
        <p class="p2">Real Estate is one of free website templates created by TemplateMonster.com team. This website template is optimized for 1280X1024 screen resolution. It is also XHTML &amp; CSS valid.</p>
        <p class="line-1">Download the basic package of this Real Estate Template (without PSD source) that is available for anyone without registration. If you need PSD source files, please go to the template download page at TemplateMonster to leave the e-mail address that you want the free template ZIP package to be delivered to.</p>
        <h2 class="p4">Buyers. Sellers. Proprietors. Agents.</h2>
        <div class="wrap block-1">
          <div> <img src="images/page1-img1.jpg" alt="" class="img-border">
            <h3>Selling</h3>
            <p>Nam liber tempor cum soluta no eleifend option congue nihil imperdiet doming iquod mazim placerat.</p>
            <a href="#" class="button">More</a> </div>
          <div> <img src="images/page1-img2.jpg" alt="" class="img-border">
            <h3>Investing</h3>
            <p>Nam liber tempor cum soluta no eleifend option congue nihil imperdiet doming iquod mazim placerat.</p>
            <a href="#" class="button">More</a> </div>
          <div class="last"> <img src="images/page1-img3.jpg" alt="" class="img-border">
            <h3>Renting</h3>
            <p>Nam liber tempor cum soluta no eleifend option congue nihil imperdiet doming iquod mazim placerat.</p>
            <a href="#" class="button">More</a> </div>
        </div>
      </div>
      <div class="grid_4">
        <div class="left-1">
          <h2 class="top-1 p3">Find your home</h2>
          <form id="form-1" class="form-1 bot-1" action="#">
            <div class="select-1">
              <label>Home type</label>
              <select name="select" >
                <option>Homes for sale</option>
              </select>
            </div>
            <div>
              <label>Location</label>
              <input type="text" value="Address, City, Zip" onBlur="if(this.value=='') this.value='Address, City, Zip'" onFocus="if(this.value =='Address, City, Zip' ) this.value=''">
            </div>
            <div class="select-2">
              <label>Beds</label>
              <select name="select" >
                <option>&nbsp;</option>
              </select>
            </div>
            <div class="select-2 last">
              <label>Baths</label>
              <select name="select" >
                <option>&nbsp;</option>
              </select>
            </div>
            <a class="button">Search</a>
            <div class="clear"></div>
          </form>
          <h2 class="p3">Find our office</h2>
          <img src="images/page1-img4.png" alt="">
          <div class="lists">
              <?php
              $continents_data = json_decode(file_get_contents("data/continents.json"),true);
              $continents = $continents_data["continent"];

              for($i=0;$i<count($continents)/3;$i++) {
                  if ($i == count($continents)/3 - 1) {
                      echo '<ul class="list-1 last">';
                  } else {
                      echo '<ul class="list-1">';
                  }

                  for($j=0;$j<3;$j++) {
                      $ii = $i * 3;
                      echo '<li><a href="#">' . $continents[$ii + $j] . '</a></li>';
                  }
                  echo '</ul>';
              }
              ?>
          </div>
        </div>
      </div>
      <div class="clear"></div>
    </div>
  </section>
</div>
<?php
include 'parts/footer.php';
?>
