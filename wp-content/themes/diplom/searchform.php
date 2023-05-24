<form role="search" method="get" id="searchform" action="/" class="search__form" >
	<input type="text" value="<?php echo get_search_query() ?>" name="s" id="s" class="search__input" placeholder="Що ви шукаєте ?"/>
	<button type="submit" id="searchsubmit"  class="search__btn">
		<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M9.16667 15.8333C12.8486 15.8333 15.8333 12.8486 15.8333 9.16667C15.8333 5.48477 12.8486 2.5 9.16667 2.5C5.48477 2.5 2.5 5.48477 2.5 9.16667C2.5 12.8486 5.48477 15.8333 9.16667 15.8333Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
			<path d="M17.5 17.5L13.875 13.875" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
		</svg>
	</button>
</form>