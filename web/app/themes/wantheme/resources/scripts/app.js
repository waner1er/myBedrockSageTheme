import {domReady} from '@roots/sage/client';

/**
 * app.main
 */
const main = async (err) => {
  if (err) {
    // handle hmr errors
    console.error(err);
  }

  function toggleNavMenu() {
    let toggle = document.querySelector('.nav-toggle'),
      sidebar = document.querySelector('#menu-primary');

    toggle.addEventListener('click', function (e) {
      e.preventDefault();
      sidebar.classList.toggle('hidden');
    });
  }
  toggleNavMenu();
};

/**
 * Initialize
 *
 * @see https://webpack.js.org/api/hot-module-replacement
 */
domReady(main);
import.meta.webpackHot?.accept(main);
