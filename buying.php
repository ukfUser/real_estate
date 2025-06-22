<?php
include 'parts/head.php';
include 'parts/header.php';
?>
  <!--==============================content================================-->
  <section id="content">
    <div class="container_12">
      <div class="grid_8">
        <h2 class="top-1 p3">About buying</h2>
        <p>Aenean quis metus lacus, a commodo libero nam lacinia blandit dui vitae malesuada donec pellentesque scelerisque orci, ac tempor purus vulputate lobortis. Vestibulum porttitor sem mattis eros posuere vitae tristique justo congue curabitur consectetur:</p>
        <div class="lists-2">
            <?php
            $data = json_decode(file_get_contents("./data/property.json"), true);
            $columns = array_chunk($data, 5);

            foreach ($columns as $index => $column) {
                if ($index == count($columns) - 1) {
                    $class = ' last';
                } else {
                    $class = '';
                }

                echo '<ul class="list-1' .  $class .'">';
                foreach ($column as $property) {
                    echo '<li><a href="#">' . $property . '</a></li>';
                }
                echo '</ul>';
            }
            ?>
        </div>
        <a href="#" class="button">Read more</a>
        <h2 class="top-2 p3">Buying guide</h2>
        <p class="p5">Maecenas quis lacus eu tortor blandit venenatis aliquam sit amet arcu justo in commodo consectetur lacus ac ultrices cras porta dignissim turpis fermentum porttitor aenean scelerisque nunc vel turpis faucibus vestibulum aenean.</p>
        <div class="wrap block-2"> <a href="#"><img src="images/page2-img1.jpg" alt="" class="img-border"></a> <a href="#"><img src="images/page2-img2.jpg" alt="" class="img-border"></a> <a href="#"><img src="images/page2-img3.jpg" alt="" class="img-border"></a> <a href="#" class="last"><img src="images/page2-img4.jpg" alt="" class="img-border"></a> </div>
      </div>
      <div class="grid_4">
        <div class="left-1">
            <?php
            include 'parts/search.php';
            ?>
          <h2 class="p3">Best offers</h2>
          <p class="color-1">Maecenas quis lacus eu tortor blandit venenatis aliquam </p>
          <p>Sit amet arcu justo in commodo consect etur lacus ac ultrices cras porta dignissim turpis fermentum porttitor aenean scelerisque nunc vel turpis faucibus vestibulum aenean volutpat iaculis nunc, sed accumsan lacus imperdiet eu. </p>
        </div>
      </div>
      <div class="clear"></div>
    </div>
  </section>
</div>
<?php
include 'parts/footer.php';
?>
