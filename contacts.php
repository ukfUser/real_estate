<?php
include 'parts/head.php';
include 'parts/header.php';
?>
  <!--==============================content================================-->
  <section id="content">
    <div class="container_12">
      <div class="grid_8">

          <?php
            if (isset($_GET['update'])) {
                echo '
                    <h2 class="top-1 p3">Update review</h2>
                        <form id="form" method="post" action="crud/update.php">
                            <fieldset>
                            <input type="text" style="display: none" name="id" value="' . $_GET['update'] . '">
                            <label><strong>New Message:</strong>
                                <textarea id="text" name="text"></textarea>
                            </label>
                            <div class="btns"><input type="submit" class="button submit" value="Send"></div>
                            </fieldset>
                        </form>
                    </div>
                ';
            } else {
                echo '
                    <h2 class="top-1 p3">Add review</h2>
                        <form id="form" method="post" action="crud/create.php">
                            <fieldset>
                            <label><strong>Your Name:</strong>
                                <input type="text" id="name" name="name">
                            </label>
                            <label><strong>Your E-Mail:</strong>
                                <input type="text" id="email" name="email">
                            </label>
                            <label><strong>Your Message:</strong>
                                <textarea id="text" name="text"></textarea>
                            </label>
                            <div class="btns"><input type="submit" class="button submit" value="Send"></div>
                            </fieldset>
                        </form>
                    </div>
                ';
            }
          ?>
      <div class="grid_4">
        <div class="left-1">
            <?php
            include 'parts/search.php';
            ?>
          <h2 class="p3">Our contacts</h2>
          <dl>
            <dt class="color-1 p2"><strong>8901 Marmora Road,<br>
              Glasgow, D04 89GR.</strong></dt>
            <dd><span>Freephone:</span>+1 800 559 6580</dd>
            <dd><span>Telephone:</span>+1 959 603 6035</dd>
            <dd><span>E-mail:</span><a href="#" class="link">mail@demolink.org</a></dd>
          </dl>
        </div>
      </div>
      <div class="clear"></div>

        <div class="reviews_container">
            <?php
                include_once 'classes/Review.php';
                $review_manager = new Review();
                $reviews = $review_manager->get_reviews();

                foreach ($reviews as $review) {
                    echo '
                        <div class="review">
                            <h2>' . $review["name"] . '</h2>
                            <div>' . $review["text"] . '</div>
                            <div>
                                <a href="contacts.php?update=' . $review["review_id"] .'" class="submit">Update</a>
                                <a href="./crud/delete.php?id=' . $review["review_id"] .'" class="submit">Delete</a>
                            </div>
                        </div>
                    ';
                }
            ?>

        </div>
    </div>
  </section>
</div>
<?php
include 'parts/footer.php';
?>
