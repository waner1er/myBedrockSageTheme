import {domReady} from '@roots/sage/client';

/**
 * app.main
 */
const main = async(err) => {
    if (err) {
      // handle hmr errors
        console.error(err);
    }

  /**
   * Toggle Navbar
   */
    function toggleNavMenu()
    {
        let toggle = document.querySelector('.nav-toggle'),
        sidebar = document.querySelector('.primary-navigation');
        let logo = document.querySelector('.r1-custom-logo');

        if (window.innerWidth >= 960) {
            sidebar.classList.remove('hidden');
        }

        toggle.addEventListener('click', function (e) {
            e.preventDefault();
            if (sidebar.classList.contains('hidden')) {
                sidebar.classList.remove('hidden');
            } else {
                sidebar.classList.add('hidden');
            }
        });
        window.onresize = function () {
            if (window.innerWidth <= 960) {
                sidebar.classList.add('hidden');
            } else {
                sidebar.classList.remove('hidden');
            }
        }
    }

  /**
   * down body site if wpNavbar
   */
    function marginTopIfWpAdminBar()
    {
        let wpAdminBar = document.getElementById('wpadminbar');
        let body = document.querySelector('body');
        let navButton = document.querySelector('.nav-toggle');

        if (body.contains(wpAdminBar)) {
            body.style.marginTop = "2rem"
            navButton.style.top = "8rem"
        }
    }

    toggleNavMenu();
    marginTopIfWpAdminBar();

};

/**
 * Initialize
 *
 * @see https://webpack.js.org/api/hot-module-replacement
 */
domReady(main);
import.meta.webpackHot?.accept(main);
