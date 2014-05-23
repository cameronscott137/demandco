<?php 
    global $single_blog;
    $blog = get_post_meta(get_the_ID(), $single_blog->get_the_id(), TRUE);
    get_header(); ?>

    <div class="blog-search">
        <div class="container">
            <div class="row">
                <div class="pull-left">
                    <?php get_search_form(); ?>
                </div><!-- pull-left -->
                <div class="pull-right">
                    <a class="category-toggle">Search by Category <b class="caret"></b></a>
                    <ul class="categories">
                            <?php $args = array(
                                'title_li' => __( '' ),
                            );
                            wp_list_categories($args); ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
<main class="container" role="main" itemprop="mainContentOfPage" itemscope="itemscope"  itemtype="http://schema.org/Blog">
    <div class="row">

        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
                <article class="post-<?php the_ID(); ?> entry-content col-md-7" itemscope="itemscope" itemtype="http://schema.org/CreativeWork">
                    <div class="entry-meta">
                        <h1 class="blog-title" itemprop="headline"><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
                        <h4 class="post-meta">Posted in: <?php the_category(' '); ?> | <time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate itemprop="datePublished"><?php echo get_the_date(); ?></time> | <a href="#disqus_thread">Leave a Comment</a>
                            <?php  if ( is_user_logged_in() ) {
                                    echo " | ";
                                    edit_post_link('Edit Post');
                            } ?>

                        </h4>
                    </div>
                    	<?php the_post_thumbnail('medium');?>
                        <?php the_content(); ?>
                        <?php if (!empty($blog['blog-photo-credit'])){?>
                            <p class="citation-break">—</p>
                            <p class="citation">Photo by: <a href="<?php echo $blog['blog-photo-url'];?>"><?php echo $blog['blog-photo-credit']; ?></a></p>
                        <?php }
                        comments_template( '', true ); ?>
                </article>
        <?php endwhile; ?>
                <aside class="col-md-4 col-md-push-1 blog-sidebar">
                        <div class="cta widget">
                            <?php if (!empty($blog['blog-cta-title'])){ ?>
                                <h3><?php echo $blog['blog-cta-title']; ?></h3>
                            <?php } else { ?>
                                <h3>Are you Tradigital?</br>Sign up for the Mailing List.</h3>
                            <?php }?>
                            <p>Sign up for the Atmosferiq mailing list</p>
                            <?php echo do_shortcode('[gravityform id=3 title=false description=false ajax=true]'); ?>
                        </div><!-- /end categories -->
                        <div class="social widget">
                            <h3>Got Something to Say?</h3>
                                <a onclick="MM_openBrWindow('http://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(wp_get_shortlink()); ?>+<?php echo htmlspecialchars(urlencode(html_entity_decode(get_the_title(), ENT_COMPAT, 'UTF-8')), ENT_COMPAT, 'UTF-8'); ?>','Share Atmosferiq on Facebook','scrollbars=yes,width=650,height=500'); return false;" href="http://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(wp_get_shortlink()); ?>+<?php echo htmlspecialchars(urlencode(html_entity_decode(get_the_title(), ENT_COMPAT, 'UTF-8')), ENT_COMPAT, 'UTF-8'); ?>" target="_blank"><i class="fa fa-facebook fa-2x"></i></a>
                                <a onclick="MM_openBrWindow('http://twitter.com/intent/tweet?text=<?php echo urlencode("Via @atmosferiq -"); ?>+<?php echo htmlspecialchars(urlencode(html_entity_decode(get_the_title(), ENT_COMPAT, 'UTF-8')), ENT_COMPAT, 'UTF-8'); ?>%3A%20<?php echo urlencode(get_permalink()); ?>','Share Atmosferiq on Twitter','scrollbars=yes,width=650,height=500'); return false;" href="http://twitter.com/home?status=<?php echo urlencode("Via @atmosferiq -"); ?>+<?php echo urlencode(get_the_title()); ?>%3A%20<?php echo urlencode(wp_get_shortlink()); ?>" target="_blank"><i class="fa fa-twitter fa-2x"></i></a>
                                <a onclick="MM_openBrWindow('http://www.linkedin.com/shareArticle?mini=true&url=<?php print(urlencode(get_permalink())); ?>&title=<?php print(urlencode(the_title())); ?>&source= <?php bloginfo('url'); ?> ','google','scrollbars=yes,width=650,height=500'); return false;" href="http://www.linkedin.com/shareArticle?mini=true&url=<?php print(urlencode(get_permalink())); ?>&title=<?php print(urlencode(the_title())); ?>&source= <?php bloginfo('url'); ?>" target="_blank"><i class="fa fa-linkedin fa-2x"></i></a>
                                <div class="comments-link">
                                    <a href="#disqus_thread"><i class="fa fa-comment fa-2x"></i></a>
                                </div>
                            <script type="text/javascript">
                                function MM_openBrWindow(theURL,winName,features) {
                                  window.open(theURL,winName,features);
                                }
                            </script>
                        </div><!-- /end social -->
                </aside><!-- /col-md-4 -->
    </div> <!-- /row -->
</main>

<?php get_footer(); ?>