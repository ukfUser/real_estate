<?php
include 'parts/head.php';
include 'parts/header.php';
?>
  <!--==============================content================================-->
  <section id="content">
    <div class="container_12">
      <div class="grid_8">
        <h2 class="top-1 p3">Add review</h2>
        <form id="form" method="post" action="./php/create.php">
          <fieldset>
            <label><strong>Your Name:</strong>
              <input type="text" id="name" value="">
            </label>
            <label><strong>Your E-Mail:</strong>
                <input type="text" id="email">
            </label>
            <label><strong>Your Message:</strong>
              <textarea id="text"></textarea>
            </label>
            <div class="btns"><input type="submit" class="button submit" value="Send"></div>
          </fieldset>
        </form>
      </div>
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
    </div>
  </section>
</div>
<?php
include 'parts/footer.php';
?>
