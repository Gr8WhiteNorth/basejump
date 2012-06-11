				<div <?php post_class(); ?>>
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
						<h2 class="entry-title"><?php the_title(); ?></h2>
					</a>
					<div class="post-info">
						<?php so_posted_on(); ?> <span class="post-comments"><?php /* http://www.social-ink.net/blog/wordpress-tips-removing-comments-off */ comments_popup_link( '<span class="leave-reply"></span>', _x( '1 Comment', 'comments number', 'basejump' ), _x( '% Comments', 'comments number', 'basejump' ), '', '' ); ?></span> <?php edit_post_link( __( '(Edit)', 'basejump' ), '<a class="post-edit-link">', '</a>' ); ?>
					</div><!-- end .postinfo -->
					<div class="entry-content">
						<?php if ( has_post_thumbnail()) : ?>
							<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
								<?php the_post_thumbnail('thumbnail', array('class' => 'alignleft post-image')); ?>
							</a>
						<?php endif; ?>
						<?php the_excerpt(); ?>
					</div><!-- end .entry-content -->
					<div class="post-meta">
						<?php if ( count( get_the_category() ) ) : ?>
							<span class="categories">
								<?php printf( __( '<span class="%1$s">Categorized under</span> %2$s', 'basejump' ), 'entry-utility-prep entry-utility-prep-cat-links', get_the_category_list( ', ' ) ); ?>
							</span>
						<?php endif; ?>
					</div><!-- end .post-meta -->
				</div><!-- end .post_class -->