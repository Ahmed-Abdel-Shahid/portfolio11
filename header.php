<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="header col-start-1 row-start-1 font-poppin relative">
        <nav
          class="mx-auto flex max-w-6xl items-center justify-between px-6 py-3 text-white md:px-8 md:py-4"
        >
          <div class="z-20 text-3xl font-semibold">
            <a href="<?php echo site_url("")  ?>"><?php bloginfo('name'); ?></a>
          </div>
          <ul
            class="nav-menu absolute inset-0 z-10 hidden h-[35vh] -translate-y-52 items-center space-y-6 scroll-smooth bg-gray-800 bg-opacity-100 px-6 py-3 pt-20 transition-all md:relative md:mt-0 md:flex md:h-auto md:translate-y-0 md:space-x-4 md:space-y-0 md:bg-transparent md:px-0 md:py-0"
          >
            <li class="hover:text-gray-300"><a href="<?php echo site_url("about-us")  ?>">About Us</a></li>
            <li class="hover:text-gray-300"><a href="<?php echo site_url("privacy")  ?>">Privacy</a></li>
            <li class="hover:text-gray-300"><a href="<?php echo site_url("blog")  ?>">Blog</a></li>
          </ul>

          <div class="hamburger z-10 block md:hidden">
            <a href="#">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                x="0px"
                y="0px"
                width="25"
                height="25"
                viewBox="0,0,256,256"
              >
                <g
                  fill="#ffffff"
                  fill-rule="nonzero"
                  stroke="none"
                  stroke-width="1"
                  stroke-linecap="butt"
                  stroke-linejoin="miter"
                  stroke-miterlimit="10"
                  stroke-dasharray=""
                  stroke-dashoffset="0"
                  font-family="none"
                  font-weight="none"
                  font-size="none"
                  text-anchor="none"
                  style="mix-blend-mode: normal"
                >
                  <g transform="scale(10.66667,10.66667)">
                    <path d="M2,5v2h20v-2zM2,11v2h20v-2zM2,17v2h20v-2z"></path>
                  </g>
                </g>
              </svg>
            </a>
          </div>

          <div class="closeMenu z-10 hidden md:hidden">
            <a href="#">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                x="0px"
                y="0px"
                width="25"
                height="25"
                viewBox="0,0,256,256"
              >
                <g
                  fill="#ffffff"
                  fill-rule="nonzero"
                  stroke="none"
                  stroke-width="1"
                  stroke-linecap="butt"
                  stroke-linejoin="miter"
                  stroke-miterlimit="10"
                  stroke-dasharray=""
                  stroke-dashoffset="0"
                  font-family="none"
                  font-weight="none"
                  font-size="none"
                  text-anchor="none"
                  style="mix-blend-mode: normal"
                >
                  <g transform="scale(8.53333,8.53333)">
                    <path
                      d="M7,4c-0.25587,0 -0.51203,0.09747 -0.70703,0.29297l-2,2c-0.391,0.391 -0.391,1.02406 0,1.41406l7.29297,7.29297l-7.29297,7.29297c-0.391,0.391 -0.391,1.02406 0,1.41406l2,2c0.391,0.391 1.02406,0.391 1.41406,0l7.29297,-7.29297l7.29297,7.29297c0.39,0.391 1.02406,0.391 1.41406,0l2,-2c0.391,-0.391 0.391,-1.02406 0,-1.41406l-7.29297,-7.29297l7.29297,-7.29297c0.391,-0.39 0.391,-1.02406 0,-1.41406l-2,-2c-0.391,-0.391 -1.02406,-0.391 -1.41406,0l-7.29297,7.29297l-7.29297,-7.29297c-0.1955,-0.1955 -0.45116,-0.29297 -0.70703,-0.29297z"
                    ></path>
                  </g>
                </g>
              </svg>
            </a>
          </div>
        </nav>
      </header>
