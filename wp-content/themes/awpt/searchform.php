<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ) ?>" class="search__form" >
	<input type="text" value="<?php echo get_search_query() ?>" name="s" id="s" class="search__input" placeholder="Что вы ищете?"/>
	<input type="submit" id="searchsubmit" class="search__btn" value="" />
</form>