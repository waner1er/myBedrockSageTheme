import {domReady} from '@roots/sage/client';

/**
 * app.main
 */
const main = async (err) => {
    if (err) {
      // handle hmr errors
      console.error(err);
    }

    /**
     * Toggle Navbar
     */
    function toggleNavMenu() {
      let toggle = document.querySelector('.nav-toggle'),
        sidebar = document.querySelector('.primary-navigation');
      let logo = document.querySelector('.r1-custom-logo');
      let logoBanner = document.querySelector('.page-header__custom-logo');

      logoBanner.style.display = 'none';

      if (window.innerWidth >= 960) {
        sidebar.classList.remove('hidden');
      }

      toggle.addEventListener('click', function (e) {
        if (sidebar.classList.contains('hidden')) {
          sidebar.classList.remove('hidden');
          logoBanner.style.display = 'none';

        } else {
          sidebar.classList.add('hidden');
          logoBanner.style.display = 'block';

        }
      });
      window.onresize = function () {
        if (window.innerWidth <= 960) {
          sidebar.classList.add('hidden');
          logoBanner.style.display = 'block';

        } else {
          sidebar.classList.remove('hidden');
          logoBanner.style.display = 'none';

        }
      }
    }

    /**
     * down body site if wpNavbar
     */
    function marginTopIfWpAdminBar() {
      let wpAdminBar = document.getElementById('wpadminbar');
      let body = document.querySelector('body');
      let navButton = document.querySelector('.nav-toggle');

      if (body.contains(wpAdminBar)) {
        body.style.marginTop = "2rem"
        navButton.style.top = "8rem"
      }
    }

    // function alwaysShowCustomLogo() {
    //   document.querySelector('.page-header__custom-logo').style.display = "block";
    // }

    toggleNavMenu();
    marginTopIfWpAdminBar();
    // alwaysShowCustomLogo();
  }
;

/**
 * Initialize
 *
 * @see https://webpack.js.org/api/hot-module-replacement
 */
domReady(main);
import.meta.webpackHot?.accept(main);
