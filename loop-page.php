				<div <?php post_class(); ?>>
					<h1 class="entry-title"><?php the_title(); ?></h1>
					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'basejump' ), 'after' => '</div>' ) ); ?>
						<?php edit_post_link( __( '(Edit)', 'basejump' ), '<a class="post-edit-link">', '</a>' ); ?>
					</div><!-- end .entry-content -->
				</div><!-- end .postclass -->