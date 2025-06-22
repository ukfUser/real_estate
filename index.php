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
            <?php
            $data = json_decode(file_get_contents("data/offers.json"),true);

            foreach ($data as $index => $offer) {
                if ($index == count($data) - 1) {
                    $class = ' class="last"';
                } else {
                    $class = '';
                }

                echo '
                    <div' . $class . '> <img src="' . $offer['img'] . '" alt="" class="img-border">
                        <h3>' . $offer['title'] . '</h3>
                        <p>' . $offer['description'] . '</p>
                        <a href="#" class="button">More</a>
                    </div>
                ';
            }
            ?>
        </div>
      </div>
      <div class="grid_4">
        <div class="left-1">
            <?php
                include 'parts/search.php';
            ?>
          <h2 class="p3">Find our office</h2>
          <img src="images/page1-img4.png" alt="">
          <div class="lists">
              <?php
              $continents_data = json_decode(file_get_contents("data/continents.json"),true);
              $columns = array_chunk($continents_data, 3);

              foreach ($columns as $index => $column) {
                  if ($index == count($columns) - 1) {
                      echo '<ul class="list-1 last">';
                  } else {
                      echo '<ul class="list-1">';
                  }

                  echo '<ul class="list-1">';
                  foreach ($column as $continent) {
                      echo '<li><a href="#">' . $continent . '</a></li>';
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
