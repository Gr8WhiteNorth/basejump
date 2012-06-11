<div id="footer-widgets">
    <div class="footer-widgets-1">
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer #1') ) : ?>
            <h4 class="widgettitle"><?php _e("Footer Widget 1", 'basejump'); ?></h4>
            <p><?php _e("This is an example of a widgeted area that you can place text to describe a particular product or service. You can also use other WordPress widgets such as recent posts, recent comments, a tag cloud or more.", 'basejump'); ?></p>
	    <?php endif; ?> 
    </div><!-- end .footer-widgets-1 -->
    <div class="footer-widgets-2">
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer #2') ) : ?>
            <h4 class="widgettitle"><?php _e("Footer Widget 2", 'basejump'); ?></h4>
            <p><?php _e("This is an example of a widgeted area that you can place text to describe a particular product or service. You can also use other WordPress widgets such as recent posts, recent comments, a tag cloud or more.", 'basejump'); ?></p>
	    <?php endif; ?> 
    </div><!-- end .footer-widgets-2 -->
    <div class="footer-widgets-3">
        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer #3') ) : ?>
            <h4 class="widgettitle"><?php _e("Footer Widget 3", 'basejump'); ?></h4>
            <p><?php _e("This is an example of a widgeted area that you can place text to describe a particular product or service. You can also use other WordPress widgets such as recent posts, recent comments, a tag cloud or more.", 'basejump'); ?></p>
	    <?php endif; ?> 
    </div><!-- end .footer-widgets-3 -->
	    <div class="footer-widgets-4">
	        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer #4') ) : ?>
	            <h4 class="widgettitle"><?php _e("Footer Widget 4", 'basejump'); ?></h4>
	            <p><?php _e("This is an example of a widgeted area that you can place text to describe a particular product or service. You can also use other WordPress widgets such as recent posts, recent comments, a tag cloud or more.", 'basejump'); ?></p>
		    <?php endif; ?> 
	    </div><!-- end .footer-widgets-4 -->
</div><!-- end #footer-widgets -->