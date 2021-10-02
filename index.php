<?php get_header(); ?>
    <div id="ttr_main" class="row">
        <div id="ttr_content" class="col-lg-8 col-sm-8 col-md-8 col-xs-12">

            <div class="row">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                        <h1><?php the_title(); ?></h1>
                        <h4>Posted on <?php the_time('F jS, Y') ?></h4>
                        <p><?php the_content(__('(more...)')); ?></p>

                        <!-- code obtained from following freecodecamp.org's 'How to Create a Custom
                        WordPress Theme' video posted on their YouTube channel. Led by Andrew Wilson. -->
                        <!-- Video can be found at https://youtu.be/-h7gOJbIpmo -->
                        <div class="comments-wrapper">
                            <div class="comments" id="comments">
                                <div class="comments-header">
                                    <h6 class="comment-reply-title">
                                        <?php
                                        if(! have_comments()){
                                            echo ("Leave a Comment");
                                        } else{
                                            echo (get_comments_number(). " Comments");
                                        }
                                        ?>
                                    </h6><!-- .comments-title -->
                                </div><!-- .comments-header -->
                                <!-- displaying number of comments -->
                                <?php
                                the_tags('<span class="tag"><i class="fa fa-tag"></i>',
                                    '</span><span class="tag"><i class="fa fa-tag"></i>', '</span>');
                                ?>
                                <span class="comment"><a href="#comments"><i class="fa fa-comment"></i>
                                <?php comments_number();?></a></span>
                                <div class="comments-inner">
                                    <?php
                                    wp_list_comments(
                                        array(
                                            'avatar_size' => 120,
                                            'style' => 'div'
                                        )
                                    );
                                    ?>
                                </div><!-- .comments-inner -->
                            </div><!-- comments -->
                            <hr class="" aria-hidden="true">
                            <?php
                            if(comments_open()) {
                                comment_form(
                                    array(
                                        'class_form' => '',
                                        'title_reply_before' => '<h6 id="reply-title" class="comment-reply-title">',
                                        'title_reply_after' => '</h6>'
                                    )
                                );
                            }
                            ?>
                            <!-- end of code from Wilson's tutorial -->

                        </div>
                    </div>
                <?php endwhile; else: ?>
                    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                <?php endif; ?>
            </div>
        </div>
        <?php get_sidebar(); ?>
    </div>

<?php get_footer(); ?>