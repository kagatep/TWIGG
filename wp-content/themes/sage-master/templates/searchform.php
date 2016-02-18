<form role="search" method="get" class="search-form form-inline" action="<?= esc_url(home_url('/')); ?>">
  <label class="sr-only"><?php _e('Search for:', 'sage'); ?></label>
  <div class="input-group">
    <input type="search" value="<?= get_search_query(); ?>" name="s" class="search-field form-control" placeholder="Search" required>
    <span class="input-group-btn">
      <!-- <button type="submit" class="search-submit btn btn-default">search</button> -->
      <button type="submit" class="fa fa-search"></button>
    </span>
  </div>
</form>
