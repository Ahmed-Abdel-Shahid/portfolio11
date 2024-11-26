

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
    
    <div class="bg-rose-800">
      <!-- Breadcrumb -->
      <nav
        class="mx-auto flex max-w-6xl px-6 py-2 text-white md:px-8"
        aria-label="Breadcrumb"
      >
        <ul class="inline-flex items-center space-x-1 md:space-x-3">
          <li class="inline-flex items-center">
            <a
              href="#"
              class="inline-flex items-center space-x-2 text-sm font-medium"
            >
              <img class="h-4 w-4" src="<?php echo get_theme_file_uri("./img/icon/home.png") ?>" alt="Home" />
              <span>perant</span>
            </a>
          </li>
          <li>
            <div class="flex items-center md:space-x-2">
              <img
                class="h-4 w-4"
                src="<?php echo get_theme_file_uri("./img/icon/arrow.png") ?>"
                alt="arrow right"
              />
              <div href="#" class="ml-1 text-sm font-medium">child</div>
            </div>
          </li>
        </ul>
      </nav>
    </div>
    <section
      class="mx-auto max-w-6xl px-6 py-10 font-poppin text-lg text-gray-800 md:px-8"
    > 
      <div class="-mx-6 flex flex-wrap">
       
        <div class="flex-1 px-6">
        <?php the_content(); ?>
        </div>
      </div>
    </section>

    <div class="bg-gray-200">
      <!-- Global Container -->
      <div class="container mx-auto max-w-6xl p-2 px-6 py-6 md:p-10 md:px-8">
        <!-- Grid Container -->
        <div
          class="grid grid-cols-1 gap-6 text-white md:grid-cols-4 md:grid-rows-2"
        >
          <!-- Box 1 -->
          <div class="relative rounded-xl bg-purple-700 p-10 md:col-span-2">
            <!-- Quotes Image -->
            <img
              src="<?php echo get_theme_file_uri("img/bg-pattern-quotation.svg") ?>"
              alt=""
              class="absolute right-10 top-3 scale-125 md:right-24 md:top-7 md:scale-150"
            />
            <!-- Box Header -->
            <div class="z-10 flex space-x-4">
              <img
                src="<?php echo get_theme_file_uri("img/profile1.jpg") ?>"
                alt=""
                class="h-10 w-10 rounded-full ring-2 ring-purple-300"
              />
              <div class="text-sm">
                <h4 class="opacity-90">Zaker</h4>
                <p class="opacity-50">Verified Graduate</p>
              </div>
            </div>

            <!-- Large Text -->
            <p class="relative z-10 mt-6 text-xl">
              I received a job offer mid-course, and the subjects I learned were
              current, if not more so, in the company I joined. I honestly feel
              I got every penny's worth.
            </p>

            <!-- Small Text -->
            <p class="mt-6 line-clamp-6 opacity-50">
              "I was an EMT for many years before I joined the bootcamp. I've
              been looking to make a transition and have heard some people who
              had an amazing experience here. I signed up for the free intro
              course and found it incredibly fun! I enrolled shortly thereafter.
              The next 12 weeks was the best - and most grueling - time of my
              life. Since completing the course, I've successfully switched
              careers, working as a Software Engineer at a VR startup. Lorem
              ipsum dolor sit amet consectetur adipisicing elit. Ratione vero
              repudiandae, quasi atque officiis eum consectetur odio amet
              dolorem deleniti repellat expedita aut sunt laudantium cum itaque
              nam voluptatum quod! Quo totam sequi omnis deserunt? Sit nam
              molestiae excepturi, perspiciatis labore deleniti eum, eligendi
              quisquam quod sed nobis exercitationem tempora! "
            </p>
          </div>

          <!-- Box 2 -->
          <div class="rounded-xl bg-gray-600 p-10">
            <!-- Box Header -->
            <div class="flex space-x-4">
              <img
                src="<?php echo get_theme_file_uri("img/profile2.jpg") ?>"
                alt=""
                class="h-10 w-10 rounded-full ring-2 ring-purple-300"
              />
              <div class="text-sm">
                <h4 class="opacity-90">Omar</h4>
                <p class="opacity-50">Verified Graduate</p>
              </div>
            </div>

            <!-- Large Text -->
            <p class="mt-6 text-xl">
              The team was very supportive and kept me motivated
            </p>

            <!-- Small Text -->
            <p class="mt-6 line-clamp-5 opacity-50">
              "I started as a total newbie with virtually no coding skills. I
              now work as a mobile engineer for a big company. This was one of
              the best investments I've made in myself. Lorem ipsum dolor sit
              amet consectetur adipisicing elit. Atque ipsam veritatis natus
              illum ullam ab, nesciunt rerum nobis, quibusdam ad voluptatum rem
              necessitatibus facere nihil deleniti assumenda vel velit neque
              quia, nisi ipsum laudantium impedit eveniet iste. Pariatur,
              exercitationem consequuntur praesentium a est eum velit quos
              maiores ipsum facere tempora! "
            </p>
          </div>

          <!-- Box 3 -->
          <div
            class="hidden rounded-xl bg-white p-10 text-gray-900 md:row-span-2 md:block"
          >
            <!-- Box Header -->
            <div class="flex space-x-4">
              <img
                src="<?php echo get_theme_file_uri("img/profile3.jpg") ?>"
                alt=""
                class="h-10 w-10 rounded-full ring-2 ring-purple-300"
              />
              <div class="text-sm">
                <h4 class="opacity-90">Assma</h4>
                <p class="opacity-50">Verified Graduate</p>
              </div>
            </div>

            <!-- Large Text -->
            <p class="mt-6 text-xl">
              Such a life-changing experience. Highly recommended!
            </p>

            <!-- Small Text -->
            <p class="mt-6 opacity-50">
              "Before joining the bootcamp, I've never written a line of code. I
              needed some structure from professionals who can help me learn
              programming step by step. I was encouraged to enroll by a former
              student of theirs who can only say wonderful things about the
              program. The entire curriculum and staff did not disappoint. They
              were very hands-on and I never had to wait long for assistance.
              The agile team project, in particular, was outstanding. It took my
              learning to the next level in a way that no tutorial could ever
              have. In fact, I've often referred to it during interviews as an
              example of my developent experience. It certainly helped me land a
              job as a full-stack developer after receiving multiple offers.
              100% recommend!"
            </p>
          </div>

          <!-- Box 4 -->
          <div class="rounded-xl bg-white p-10 text-gray-900">
            <!-- Box Header -->
            <div class="flex space-x-4">
              <img
                src="<?php echo get_theme_file_uri("img/profile5.jpg") ?>"
                alt=""
                class="h-10 w-10 rounded-full ring-2 ring-purple-300"
              />
              <div class="text-sm">
                <h4 class="opacity-90">Eman</h4>
                <p class="opacity-50">Verified Graduate</p>
              </div>
            </div>

            <!-- Large Text -->
            <p class="mt-6 text-xl">
              An overall wonderful and rewarding experience
            </p>

            <!-- Small Text -->
            <p class="mt-6 opacity-50">
              "Thank you for the wonderful experience! I now have a job I really
              enjoy, and make a good living while doing something I love."
            </p>
          </div>

          <!-- Box 5 -->
          <div class="rounded-xl bg-gray-900 p-10 md:col-span-2">
            <!-- Box Header -->
            <div class="flex space-x-4">
              <img
                src="<?php echo get_theme_file_uri("img/profile4.jpg") ?>"
                alt=""
                class="h-10 w-10 rounded-full ring-2 ring-purple-300"
              />
              <div class="text-sm">
                <h4 class="opacity-90">Ahmed</h4>
                <p class="opacity-50">Verified Graduate</p>
              </div>
            </div>

            <!-- Large Text -->
            <p class="mt-6 text-xl">
              Awesome teaching support from TAs who did the bootcamp themselves.
              Getting guidance from them and learning from their experiences was
              easy.
            </p>

            <!-- Small Text -->
            <p class="mt-6 opacity-50">
              "The staff seem genuinely concerned about my progress which I find
              really refreshing. The program gave me the confidence necessary to
              be able to go out in the world and present myself as a capable
              junior developer. The standard is above the rest. You will get the
              personal attention you need from an incredible community of smart
              and amazing people."
            </p>
          </div>

          <!-- Box 6 -->
          <div class="rounded-xl bg-white p-10 text-gray-900 md:hidden">
            <!-- Box Header -->
            <div class="flex space-x-4">
              <img
                src="<?php echo get_theme_file_uri("img/profile1.jpg") ?>"
                alt=""
                class="h-10 w-10 rounded-full ring-2 ring-purple-300"
              />
              <div class="text-sm">
                <h4 class="opacity-90">Assma</h4>
                <p class="opacity-50">Verified Graduate</p>
              </div>
            </div>

            <!-- Large Text -->
            <p class="mt-6 text-xl">
              Such a life-changing experience. Highly recommended!
            </p>

            <!-- Small Text -->
            <p class="mt-6 opacity-50">
              "Before joining the bootcamp, I've never written a line of code. I
              needed some structure from professionals who can help me learn
              programming step by step. I was encouraged to enroll by a former
              student of theirs who can only say wonderful things about the
              program. The entire curriculum and staff did not disappoint. They
              were very hands-on and I never had to wait long for assistance.
              The agile team project, in particular, was outstanding. It took my
              learning to the next level in a way that no tutorial could ever
              have. In fact, I've often referred to it during interviews as an
              example of my developent experience. It certainly helped me land a
              job as a full-stack developer after receiving multiple offers.
              100% recommend!"
            </p>
          </div>
        </div>
      </div>
    </div>








<?php  }
?>

<?php get_footer(); ?>





