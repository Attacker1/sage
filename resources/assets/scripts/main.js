// import external dependencies
import 'jquery';

// Import everything from autoload
import './autoload/**/*'

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import aboutUs from './routes/about';

/** Populate Router instance with DOM routes */
const routes = new Router({
  // All pages
  common,
  // Home page
  home,
  // About Us page, note the change from about-us to aboutUs.
  aboutUs,
});

// Load Events
jQuery(document).ready(() => routes.loadEvents());
window.addEventListener('DOMContentLoaded', () => {
  const menu = document.querySelector('.navigation__menu'),
  menuItem = document.querySelectorAll('navigation__item'),
  hamburger = document.querySelector('.hamburger');

  hamburger.addEventListener('click', () => {
      hamburger.classList.toggle('hamburger_active');
      menu.classList.toggle('navigation__menu_active');
  });

  menuItem.forEach(item => {
      item.addEventListener('click', () => {
          hamburger.classList.toggle('hamburger_active');
          menu.classList.toggle('navigation__menu_active');
      });
  });
  $('form').submit(function(e) {
      e.preventDefault();
      $.ajax({
          type: "POST",
          url: "/web/app/themes/sage/resources/mailer/smart.php",
          data: $(this).serialize()
      }).done(function() {
          $(this).find("input").val("");


          $('form').trigger('reset');
      });
      return false;
  });
});
