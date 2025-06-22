<?php
include 'parts/head.php';
include 'parts/header.php';
?>
  <!--==============================content================================-->
  <section id="content">
    <div class="container_12">
      <div class="grid_8">
        <h2 class="top-1 p3">Rent a living</h2>
        <div class="wrap">
          <div class="img-indent">
            <div><img src="images/page4-img1.jpg" alt="" class="img-border"></div>
            <div class="top-3"><img src="images/page4-img2.jpg" alt="" class="img-border"></div>
          </div>
          <div class="extra-wrap">
            <p class="color-1 p2">Lorem ipsum dolor sit amet consetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt </p>
            <p>Ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore.</p>
            <a href="#" class="button top-4">Read more</a> </div>
        </div>
        <h2 class="top-5 p3">Property management</h2>
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
        <a href="#" class="button">Read more</a> </div>
      <div class="grid_4">
        <div class="left-1">
            <?php
            include 'parts/search.php';
            ?>
          <h2 class="p3">Our guarantees</h2>
          <p class="color-1 p2">At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. </p>
          <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est lorem ipsum. </p>
        </div>
      </div>
      <div class="clear"></div>
    </div>
  </section>
</div>
<?php
include 'parts/footer.php';
?>
