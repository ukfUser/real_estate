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
          <ul class="list-1">
            <li><a href="#">Maecenas mattis venena</a></li>
            <li><a href="#">Nam accumsan miac</a></li>
            <li><a href="#">Rhoncus luctus erat nisl</a></li>
            <li><a href="#">Ultrices neque vel</a></li>
            <li><a href="#">Morbi ut augue ut risus</a></li>
          </ul>
          <ul class="list-1">
            <li><a href="#">Interdum mattis uisque</a></li>
            <li><a href="#">Eget erat eget mi laoreet</a></li>
            <li><a href="#">Pharetra eget tortor</a></li>
            <li><a href="#">Vestibulum scelerisque</a></li>
            <li><a href="#">Tristique ullamcorper</a></li>
          </ul>
          <ul class="list-1 last">
            <li><a href="#">Integer eros massa</a></li>
            <li><a href="#">Viverra quis pharetra</a></li>
            <li><a href="#">Ultrices mauris phasellus</a></li>
            <li><a href="#">Purus sapiepiscing</a></li>
            <li><a href="#">Tempus eget faucibus</a></li>
          </ul>
        </div>
        <a href="#" class="button">Read more</a>
        <h2 class="top-2 p3">Buying guide</h2>
        <p class="p5">Maecenas quis lacus eu tortor blandit venenatis aliquam sit amet arcu justo in commodo consectetur lacus ac ultrices cras porta dignissim turpis fermentum porttitor aenean scelerisque nunc vel turpis faucibus vestibulum aenean.</p>
        <div class="wrap block-2"> <a href="#"><img src="images/page2-img1.jpg" alt="" class="img-border"></a> <a href="#"><img src="images/page2-img2.jpg" alt="" class="img-border"></a> <a href="#"><img src="images/page2-img3.jpg" alt="" class="img-border"></a> <a href="#" class="last"><img src="images/page2-img4.jpg" alt="" class="img-border"></a> </div>
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
