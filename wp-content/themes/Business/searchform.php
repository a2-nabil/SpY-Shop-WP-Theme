<form role="search" method="get" class="search-form input-group" action="<?php echo home_url('/'); ?>">
    <label>
        <span class="screen-reader-text"><?php echo _x('Search for:', 'label') ?></span>
    </label>
    <input type="search" class="search-field form-control"
        placeholder="<?php echo esc_attr_x('Enter search term...', 'placeholder') ?>"
        value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x('Search for:', 'label') ?>" />

    <input type="submit" class="search-submit btn btn-primary" id="button-search"
        value="<?php echo esc_attr_x('Go!', 'submit button') ?>" />
</form>