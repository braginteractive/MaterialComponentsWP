<?php
/**
 * searchform.php
 *
 * Search for main menu.
 *
 *
 */
?>

<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<div class="mdc-textfield">
	  <input type="text" id="my-textfield" class="mdc-textfield__input" value="<?php echo get_search_query() ?>" name="s">
	  <label class="mdc-textfield__label" for="my-textfield">Search</label>
	</div>
</form>


