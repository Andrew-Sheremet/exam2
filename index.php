<?php get_header(); ?>
<section class="home" id="home">
    

    <div class="home-wrap">
    <div class="home-wrap__link">
            <div class="round">
                <img class="home-wrap__link__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/Like-128.png" alt="">
            </div>
        <div class="home-wrap__link__title">Good service</div>
    </div>
    <div class="home-wrap__link">
            <div class="round">
                <img class="home-wrap__link__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/instrument.png" alt="">
            </div>
            <div class="home-wrap__link__title">High performance</div>
    </div>
    <div class="home-wrap__link">
            <div class="round">
                <img class="home-wrap__link__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/star.png" alt="">
            </div> 
            <div class="home-wrap__link__title">Experience</div>
    </div>
</div>
</section>
<section class="about" id="about">
        <h2 class="about-title">
            <?php the_field('about-title'); ?>
        </h2>
        <div class="about-main">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-1"><iframe class="video" width="560" height="315" src="https://www.youtube.com/embed/ngggl6Afc3E" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
                    <div class="col-xl-6 col-lg-1">
                        <div class="about-main__text">Lorem ipsum dolor sit amet,
                             consectetur adipiscing elit. Fusce libero dui, pharetra vitae 
                             tempus id, interdum in elit. Fusce cursus interdum auctor.
                              Proin et aliquam tellus, vel egestas sapien. 
                            </div>
                       <div class="about-main__list">
                           <div class="about-main__list__item">
                            <span class="about-main__list__item__number">1</span>
                           <span class="about-main__list__item__text">Lorem ipsum dolor sit amet, consectetur adipisicing.</span>
                            </div>
                           <div class="about-main__list__item">
                            <span class="about-main__list__item__number">2</span>
                           <span class="about-main__list__item__text">Deleniti fuga minus molestias omnis perferendis voluptatem.</span>
                            </div>
                           <div class="about-main__list__item">
                            <span class="about-main__list__item__number">3</span>
                           <span class="about-main__list__item__text">Laboriosam maiores nisi nulla recusandae repellendus vero.</span>
                            </div>
                           <div class="about-main__list__item">
                            <span class="about-main__list__item__number">4</span>
                           <span class="about-main__list__item__text">Corporis, eos impedit pariatur quaerat quod reprehenderit?</span>
                            </div>
                           <div class="about-main__list__item">
                            <span class="about-main__list__item__number">5</span>
                           <span class="about-main__list__item__text">Dolore fuga illo iure quas quisquam voluptates.</span>
                            </div>
                           


                        </div>
                    </div>
                </div>
            </div>
        </div>
    
</section>
<section class="news" id="news">
    <h2 class="news-title">
        <?php the_field('news-title'); ?>
    </h2>

    <?php if (have_posts()) {while(have_posts()) { the_post(); ?>
    <div class="news-wrap2">
    <div class="news-wrap__picture1"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/livingroom-backyard.png" alt=""></div>
   <article> 
    <div class="news-wrap__text__title"><?php the_title(); ?></div>
    <div class="news-wrap__text__data"><?php the_time('F jS, Y'); ?></div>
    <div class="news-wrap__text__descr"><?php the_content(); ?></div>
    <a class="button btn-2" href="#">Read More</a>
    </article>
    
    </div>
<?php }
} ?>
    

    

                    <!-- <div class="news-wrap__picture1"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/livingroom-backyard.png" alt=""></div>
                
                
                    <div class="news-wrap__text">
                        <div class="news-wrap__text__title">News title</div>
                        <div class="news-wrap__text__data">posted 10.12.15</div>
                        <div class="news-wrap__text__descr">Lorem ipsum dolor sit amet, 
                            consectetur adipisicing elit. Ab, alias asperiores assumenda 
                            consequatur cum cumque delectus doloremque doloribus ducimus earum 
                            laboriosam laudantium nam necessitatibus nostrum praesentium quisquam 
                            ratione repellendus rerum sed tempore tenetur vel voluptate 
                            voluptatibus. Ab consectetur corporis delectus harum iusto laboriosam 
                            maxime molestiae odio quisquam quod quos sit t
                            emporibus, totam vel veniam veritatis?[...]</div>
                        <a class="button btn-2" href="#">Read More</a>
                    </div> -->
                
    
    <!-- <div class="news-wrap">
        
         <div class="news-wrap__text">
                     <div class="news-wrap__text__title">News title</div>
                            <div class="news-wrap__text__data">posted 10.12.15</div>
                            <div class="news-wrap__text__descr">Animi asperiores cupiditate distinctio ducimus id 
                                        incidunt odit ratione veniam voluptates! Accusantium earum, eligendi molestias 
                                        necessitatibus nisi provident quasi quisquam repellat repudiandae vero.
                                         Ad dolore, nobis porro quos totam vero vitae? A asperiores at culpa cumque, 
                                         ducimus earum eius exercitationem facilis ipsa laudantium 
                                        molestias odio omnis, optio recusandae repellat velit.[...]</div>
                                        <a class="button btn-2" href="#">Read More</a>
                                </div>
                   
                            <div class="news-wrap__picture2"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/invitingbackyard-272004.png" alt=""></div>
                       
               
        </div> -->
</section>

<section class="testimonials" id="testimonials">
    <h2 class="testimonials-title">Testimonials</h2>
    <div class="testimonials-sl">
        <div class="testimonials-sla">
        <div class="testimonials-sl_img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Woman_redhead_natural_portrait_copy.png" alt="">
        </div>
        <div class="testimonials-sl_text">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                Doloribus enim facilis fugiat illum 
                ipsam laudantium libero non reprehenderit totam ullam?
        </div>
        </div>
        <div class="testimonials-sla">
                <div class="testimonials-sl_img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/Woman_redhead_natural_portrait_copy.png" alt="">
                </div>
                <div class="testimonials-sl_text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                        Doloribus enim facilis fugiat illum 
                        ipsam laudantium libero non reprehenderit totam ullam?
                </div>
                </div>
                <div class="testimonials-sla">
                        <div class="testimonials-sl_img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/smiley-man-portrait-11016049_copy.png" alt="">
                        </div>
                        <div class="testimonials-sl_text">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                                Doloribus enim facilis fugiat illum 
                                ipsam laudantium libero non reprehenderit totam ullam?
                        </div>
                        </div>
    </div>


</section>  
<?php get_footer(); ?>