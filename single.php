
<div class="grid">
<?php get_header(); ?>
<?php
while(have_posts()){
    the_post();?>





<main
        class="relative col-start-1 row-start-1 bg-cover"
        style="
          background-image: linear-gradient(to right, #0e7490cc, #0e7490cc),
            url(<?php echo get_theme_file_uri("./img/javaScript.jpg") ?>);
        "
      >
        <div
          class="z-10 mx-auto mt-32 max-w-6xl px-6 py-6 text-white md:px-8 md:py-8"
        >
          <div class="space-y-4">
            <h1 class="font-poppin text-5xl text-white"> <?php the_title(); ?> </h1>
            <p class="font-poppin text-xl text-white">
              Lorem ipsum dolor sit amet consectetur adipisicing elit.
            </p>
            
          </div>
        </div>
      </main>
      
    </div>
    
 


<section
      class="mx-auto max-w-6xl px-6 py-10 font-poppin text-lg text-gray-800 md:px-8"
    > 
    <div
                class="mt-3 flex w-full justify-between rounded bg-rose-800 p-2 text-xs font-medium text-white"
              >
                <a class="hover:text-gray-300" href=""><div><?php the_author_posts_link(); ?></div></a>
               <div><?php the_time("d/m/y"); ?></div>
                <a class="hover:text-gray-300" href=""><div><?php echo get_the_category_list(); ?></div></a>
              </div>
            <br>
              <div class="bg-cyan-800 px-6 py-2 mt-30 rounded-lg inline-block text-white  ">
    <a href="<?php echo site_url("blog")  ?>">Home Blog</a>  
    </div>
   
      <div class="p-4">
    <?php the_post_thumbnail(); ?>     

      </div>
       
        <div class="p-20 flex-1 px-6 mt-20">
        <?php the_content(); ?>
        </div>
     
      
    </section>
<?php  }
?>
 
<?php get_footer(); ?>
