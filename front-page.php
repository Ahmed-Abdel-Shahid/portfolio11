<div class="grid">
<?php get_header(); ?>
  
 
      <main
        class="relative col-start-1 row-start-1 h-[70vh] bg-cover bg-bottom"
        style="
          background-image: linear-gradient(to right, #0e7490f3, #0e7490f3),
            url(<?php echo get_theme_file_uri("./img/web.jpg") ?>);
        "
      >
        <div
          class="z-5 absolute left-[50%] top-[50%] -translate-x-[50%] -translate-y-[50%] text-center text-white"
        >
          <div>
            <h1 class="text-center font-poppin text-5xl text-white">Welcome</h1>
            <p class="text-center font-poppin text-xl text-white">
              Check Our Blog
            </p>
            <a href="<?php echo site_url("blog")  ?>">
              <button
                class="mt-6 w-40 rounded-xl bg-gray-800 px-8 py-4 font-poppin text-xl hover:bg-gray-900"
              >
                Blog
              </button></a
            >
          </div>
        </div>
      </main>
    </div>

    <section>
      <div class="mx-auto max-w-6xl px-6 py-8 font-poppin md:px-8">
        <h2
          class="text-center text-xl font-semibold text-gray-700 md:text-left"
        >
          Popular Blogs
        </h2>
        <p class="mt-2 text-center text-gray-600 md:text-left">
          Keep Up with our latest news.
        </p>

        <div
          class="mt-4 grid gap-6 font-poppin md:grid-cols-2 xl:w-auto xl:grid-cols-3"
        >
     
<?php
$the_query = new wp_query(array(
"post_type" => "post",
"posts_per_page" => 6,
));

while($the_query ->have_posts()) {
  $the_query ->the_post(); ?>



 <div
            class="mx-auto max-w-full rounded-lg bg-gray-800 p-6 shadow md:mx-0"
          >
            <a href="#">
              <h5 class="mb-2 text-2xl font-bold tracking-tight text-white">
              <?php  the_title(); ?>
              </h5>
            </a>
            <p class="mb-3 font-normal text-white">
            <?php echo wp_trim_words(get_the_content() , 9) ; ?>   
          
          </p>
            <a
              href="<?php the_permalink(); ?>"
              class="inline-flex items-center rounded-lg bg-rose-800 px-3 py-2 text-center text-sm font-medium text-white hover:bg-rose-900"
            >
              Read more
              <span class="ml-1.5 text-xl">&rarr;</span>
            </a>
          </div>

<?php }
?>
          

          


     
        </div>
      </div>
    </section>
    <?php get_footer(); ?>
