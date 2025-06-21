<?php
include 'parts/head.php';
include 'parts/header.php';
?>
  <!--==============================content================================-->
  <section id="content">
    <div class="container_12">
      <div class="grid_8">
        <h2 class="top-1 p3">Home value estimator</h2>
        <div class="wrap"> <img src="images/page3-img1.jpg" alt="" class="img-border img-indent">
          <div class="extra-wrap">
            <p class="color-1 p6">Aenean quis metus lacus, a commodo libero nam lacinia blandit dui vitae malesuada donec </p>
            <p>Pellentesque scelerisque orci, ac tempor purus vulputate lobortis. Vestibulum porttitor sem mattis eros posuere vitae tristique justo congue curabitur consectetur.</p>
          </div>
        </div>
        <p class="p5">Venenatis aliquam sit amet arcu justo in commodo consectetur lacus ac ultrices cras porta dignissim turpis fermentum porttitor aenean scelerisque nunc vel turpis faucibus vestibulum aenean volutpat iaculis nunc, sed accumsan lacus imperdiet eu.</p>
        <a href="#" class="button">Read more</a>
        <h2 class="top-2 p3">Mortgage center</h2>
        <p class="color-1 p2">Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua at vero eos et accusam.</p>
        <div class="wrap"> <img src="images/page3-img2.jpg" alt="" class="img-border img-indent">
          <div class="extra-wrap">
            <p>Et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat sed diam.</p>
          </div>
        </div>
        <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod.</p>
      </div>
      <div class="grid_4">
        <div class="left-1">
          <h2 class="top-1 p3">Find your home</h2>
          <form id="form-1" class="form-1 bot-2" action="#">
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
          <h2 class="p3">Find sales</h2>
          <p class="color-1 p6"><strong>Nullam a velit felis, eget luctus elitnlla augue lorem</strong></p>
          <p class="p2">Sodales et pharetra et, porttitor vel leo. Phasellus at mi nec sem sodales egestas suscipit rhoncus, lacus ligula tristique risus eros habitasse platea enim.</p>
          <p>Vitae suscipit quam leo non leo. Donec in metus libero, quis faucibus purus. Duis sit amet risus eros. In hac habitasse platea dictums donec tellus.</p>
        </div>
      </div>
      <div class="clear"></div>
    </div>
  </section>
</div>
<?php
include 'parts/footer.php';
?>
