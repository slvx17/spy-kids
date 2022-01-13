<?php
    // if(is_category('event')) {
    // $pagelink=get_page_link (get_page_by_title( 'event' ));
    // header("Location: $pagelink",TRUE,301);
    // }
 get_header();
 ?>

   <style type="text/css">
        .dates{
            flex-basis: 0%;
            font-size: 30px;
            font-family: 'Times New Roman', Times, serif;
          }


          .normal{
            height: 2px;
            margin: 10px 0;
            background-color: rgb(223, 166, 97);
          }

          .pastnewstitle{
            text-decoration:none;
            color: black;
            font-weight: 650;
            font-size: 30px;
          }
           .pastnewstitle:hover {
            text-decoration:underline;
            transition: 0.5s;
           }
          .pastnewsdesc{
            font-size: 20px;
          }
          img {
            margin-left:50px; 
            margin: 25px;
            /*height: 150px;*/
            /*width: 150px;*/
            max-width: 20%;
            max-height: 150px;
          }
    </style>
    <div style="margin: 50px 120px;">
        <hr style="height: 5px; background-color: maroon;">
        <div>
            <h1 style="font-size: 40px;">News Archives</h1>
        </div>
        <div style="width: 1400px;">
          <div style="flex-basis: 70%; margin: 15px;">
          <?php 
                $homepagePosts = new WP_Query(array(
                    'posts_per_page' => 10
                ));
                while($homepagePosts->have_posts()){
                    $homepagePosts->the_post();
                    ?> 
                    <div class="news" style="padding: 0; display:flex; width: 1200px;">
                    <?php the_post_thumbnail();?>
                    <div class="column pastnewstxt">
                    <!-- <h2 class="pastnewstitle"><?php the_title();?></h2> -->
                    <a class="pastnewstitle" href="<?php the_permalink();?>"><?php the_title();?></a>
                    <!-- <p class="pastnewsdesc"><?php echo wp_trim_words(get_the_content(), 18);?></p> -->
                    <p class="pastnewsdesc"><?php if (has_excerpt()) {
                    echo get_the_excerpt();
                  } else {
                    echo wp_trim_words(get_the_content(), 18);
                    } ?></p>
                    <hr class="normal">
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