<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
    <div class="form-group">
		<label for="s">Search all the awesome content:</label>
        <input class="form-control" type="search" value="" placeholder="Search entire site" name="s" id="s" results="5" required="required">
		<input class="btn btn-wa" type="submit" id="searchsubmit" value="Search" />
    </div>
</form>