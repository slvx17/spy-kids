<?php
 get_header();
 ?>

    <style type="text/css">
      .headline {
        margin: 0;
        font-family: "Roboto Condensed", sans-serif;
        font-weight: 300;
        
      }
      .headline--tiny {
        font-family: "Roboto", sans-serif;
        font-size: 30px;
        margin-bottom: 0.25rem;
      }
      .nu {
        text-decoration: none;
      }
      .nu:hover {
        text-decoration: underline;
      }
      .gray {
        color: #999;
      }
    </style>

    <div style="margin: 50px 120px;">
        <hr style="height: 5px; background-color: maroon;">
        <div>
            <h1 style="font-size: 40px;">Events</h1>
        </div>
        <div style="margin-top: 15px;
            display: flex;
            padding: 2%;
            padding-top: 0px;">
            <div style="flex-basis: 50%;
                margin: 15pt;
                padding: 10pt;
                padding-left: 40px;">
                <?php 
                  $today = date('Ymd');
                  $homepageEvents = new WP_Query(array(
                    'posts_per_page' => 10,
                    'post_type' => 'event',
                    'meta_key' => 'event_date',
                    'orderby' => 'meta_value_num',
                    'order' => 'ASC',
                    'meta_query' => array(
                      array(
                        'key' => 'event_date',
                        'compare' => '>=',
                        'value' => $today,
                        'type' => 'numeric'
                      )
                    )
                  ));

                  while($homepageEvents->have_posts()) {
                    $homepageEvents->the_post(); ?>
                    <div style="margin-top: 15px; display: flex; padding: 2%; padding-top: 0px;">
                      <div class="event-summary">
                        <div class="event-summary__content">
                          <!-- <a class="event-summary__date t-center" href="#"> -->
                            <!-- <span class="event-summary__month"><?php
                              $eventDate = new DateTime(get_field('event_date'));
                              echo $eventDate->format('M')
                            ?></span>
                            <span class="event-summary__day"><?php echo $eventDate->format('d') ?></span> 
                          </a>  -->
                          <h5 class="event-summary__title headline headline--tiny"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h5>
                          <p ><?php if (has_excerpt()) {
                              echo get_the_excerpt();
                            } else {
                              echo wp_trim_words(get_the_content(), 18);
                              } ?></p>
                        </div>
                      </div>
                    </div>
                    <?php
                  }
                ?>
            </div>
        </div>
    </div>

<?php
get_footer();
?>