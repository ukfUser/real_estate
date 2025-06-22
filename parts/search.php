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