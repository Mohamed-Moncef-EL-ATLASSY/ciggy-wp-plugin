<?php

/**
 * @package CiggyPlugin
 */



/*
Plugin Name: Ciggy
Plugin URI: https://github.com/Ciggy340/ciggy-wp-plugin
Description: Ciggy's plugin for footer editing purposes
Author: Mohamed Moncef EL ATLASSY
Author URI: https://github.com/Ciggy340
Version: 1.0.0
*/

// Security & vulnerability / Safety precaution
defined( 'ABSPATH' ) or die('You cannot accesss this plugin.');



add_action('admin_menu', 'my_admin_menu');

function my_admin_menu()
{
    add_menu_page('Footer title', 'Footer Settings', 1, 'footer_setting_page', 'mt_settings_page', 'dashicons-share');
}
// mt_settings_page() displays the page content for the Test Settings submenu
function mt_settings_page()
{
    echo '<h2>' .   ('Ciggy Footer plugin editor') . '</h2>';
    include_once 'footer.php';
}
function your_function()
{
    echo "<!-- Footer -->
<footer class='text-center text-lg-start bg-light text-muted'>
  <!-- Section: Social media -->
  <section
    class='d-flex justify-content-center justify-content-lg-between p-4 border-bottom mt-5'
  >
    <!-- Left -->
    <div class='me-5 d-none d-lg-block'>
      <span>Get connected with Ciggy on social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href='" . get_option('facebook-icon') . "' class='me-4 text-reset'>
        <i class='fa fa-facebook-f'></i>
      </a>
      <a href='" . get_option('linkedin-in-icon') . "' class='me-4 text-reset'>
        <i class='fa fa-linkedin'></i>
      </a>
      <a href='" . get_option('google-icon') . "' class='me-4 text-reset'>
        <i class='fa fa-google'></i>
      </a>
      <a href='" . get_option('instagram-icon') . "' class='me-4 text-reset'>
        <i class='fa fa-instagram'></i>
      </a>
      <a href='" . get_option('github-icon') . "' class='me-4 text-reset'>
        <i class='fa fa-github'></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class=''>
    <div class='container text-center text-md-start mt-5'>
      <!-- Grid row -->
      <div class='row mt-3'>
        <!-- Grid column -->
        <div class='col-md-3 col-lg-4 col-xl-3 mx-auto mb-4'>
          <!-- Content -->
          <h6 class='text-uppercase fw-bold mb-4'>
            <i class='fas fa-gem me-3'></i> Ciggy Corporations
          </h6>
          <p>
          Ciggy's wordpress plugin for footer editing purposes
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class='col-md-2 col-lg-2 col-xl-2 mx-auto mb-4'>
          <!-- Links -->
          <h6 class='text-uppercase fw-bold mb-4'>
            Socials Medias
          </h6>
          <p>
            <a href='https://www.facebook.com/Moncef.Ciggy/' class='text-reset'>Facebook</a>
          </p>
          <p>
            <a href='https://ma.linkedin.com/in/mohamed-moncef-el-atlassy' class='text-reset'>Linkedin</a>
          </p>
          <p>
            <a href='https://www.instagram.com/moncef_ciggy/' class='text-reset'>Instagram</a>
          </p>
          <p>
            <a href='https://github.com/Ciggy340' class='text-reset'>Github</a>
          </p>
        </div>
        <!-- Grid column -->



        <!-- Grid column -->
        <div class='col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4'>
          <!-- Links -->
          <h6 class='text-uppercase fw-bold mb-4'>
            Contact Me
          </h6>
          <p><i class='fas fa-home me-3'></i> Morocco, Safi, YouCode</p>
          <p>
            <i class='fas fa-envelope me-3'></i>
            mohamed.moncef.elatlassy@gmail.com
          </p>
          <p><i class='fas fa-phone me-3'></i> +212-6 54-64-49-51</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class='text-center p-4' style='background-color: rgba(0, 0, 0, 0.05);'>
    © 2021 Copyright:
    <a class='text-reset fw-bold' href='https://github.com/Ciggy340/ciggy-wp-plugin'>Ciggy Wordpress plugin</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->";
}
add_action('wp_footer', 'your_function');
