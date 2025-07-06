<?php
get_header();
?>
<section class="container_hero" id="hero_container">
        <div class="hero_col_1">
                <div class="top_box">
                <h1 class="main_heading">Ready To Go</h1>
                <h2>Smart and efficient websites</h2>
                <p class="h_paragraph">We specialize in building high-quality, template-based websites that save you time, energy, and money without sacrificing design or functionality.</p>
                <div class="hero_buttons">
                        <button class="h_left_btn button">Our Websites</button>
                        <button class="h_right_btn button">Talk to us</button>
                </div>
                </div>
                <div class="bottom_box">
                          <img src="<?php echo get_template_directory_uri(); ?>/asstes/img/arrowdown.png" />
                        <h5 class="hero_cta">Affordable options</h5>
                </div>

         </div>
          <div class="hero_col_2">
                <img src="<?php echo get_template_directory_uri(); ?>/asstes/img/hcol2.png" />
        </div>
</section>

<section id="website_blog" class="container">

                <div class="website_blog_upper_layer" id="website_first_box">
                        <div class="first_box_column1">
                        <h2 class="website_blog_heading">
                                Our Websites
                        </h2>
                        <span>
                             <img id='leftimg' src="<?php echo get_template_directory_uri(); ?>/asstes/img/leftarrow.png "/>
                             <img id="rightimg" src="<?php echo get_template_directory_uri(); ?>/asstes/img/rightarrow.png"/>   
                        </span>
                        </div>

                        <div class="first_box_column2">
                                <button class="buttons">Our Websites</button>

                        </div>
                </div>

        <div class="swiper mySwiper">
                <div id="leftarrow" class="swiper-button-prev"></div>
                <div id="rightarrow" class="swiper-button-next"></div>
                  <div class="swiper-wrapper">
                  <?php 
                  
                        $args = array(
                                "post_type" => "website",
                                "post_per_page" => -1,
                        );

                        $query = new WP_Query($args);
                                if($query->have_posts()):
                                        while($query->have_posts()): $query->the_post();
                                        ?>
                                                <div class="swiper-slide">
                                                      
                                                        
                                                        <div class="website_post_image">
                                                                <?php the_post_thumbnail("full"); ?>
                                                        </div>

                                                        <h3 class="website_post_title">
                                                                <?php the_title(); ?>
                                                        </h3>
                                                        <p class="website_post_desc">
                                                              <?php   the_excerpt(); ?>
                                                        </p>
                                                        
                                                </div>


 

                                        <?php
                                        endwhile;
                                        wp_reset_postdata();
                                endif;
                                        ?>

                  ?>      
                </div>
        </div>

                        </section>
                         <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
                         <script>

                                
                                document.addEventListener("DOMContentLoaded",()=>{
                                const larrow = document.querySelector("#leftarrow")
                                const rarrow = document.querySelector("#rightarrow")
                                const leftimg = document.querySelector("#leftimg")
                                const rightimg = document.querySelector("#rightimg")
                                        console.log(leftarrow)
                                       leftimg.addEventListener("click",()=>{
                                        larrow.click()
                                       })
                                       rightimg.addEventListener("click",()=>{
                                        rarrow.click()
                                       })

                                })

const swiper = new Swiper('.mySwiper',{
    slidesPerView:3.5,
    spaceBetween:20, 
    loop:true, 
      navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

})
                         </script>
<?php
get_footer();
?>