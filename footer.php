


<footer class="bg-gray-800 font-poppin">
      <div class="mx-auto max-w-6xl px-8 py-8">
        <div class="-ml-2 mb-2">
          <a
            class="mb-2 mr-2 inline-block rounded px-2 py-2 text-gray-500 hover:bg-gray-500 hover:text-white"
            href="<?php echo site_url("about-us")  ?>"
            >About Us</a
          >
          <a
            class="mb-2 mr-2 inline-block rounded px-2 py-2 text-gray-500 hover:bg-gray-500 hover:text-white"
            href="<?php echo site_url("privacy")  ?>"
            >Privacy</a
          >
          <a
            class="mb-2 mr-2 inline-block rounded px-2 py-2 text-gray-500 hover:bg-gray-500 hover:text-white"
            href="<?php echo site_url("blog")  ?>"
            >Blog</a
          >
        </div>
        <div>
          <p class="text-sm text-gray-500">&copy; 20<?php the_time("y"); ?> ouf</p>
        </div>
      </div>
      <?php wp_footer(); ?>
</body>
</html>
