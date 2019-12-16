<form action="<?php echo home_url( '/' ); ?>" action="get" class="search-form">
    <div class="input-group mb-5">
        <input type="search" name="s" class="form-control" required="required">

        <button type="submit" class="btn-link">
            <li class="fas fa-search"></li>
        </button>

        <input type="hidden" value="post" name="post_type" id="post_type">
    </div>
</form>
