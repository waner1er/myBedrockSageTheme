import {domReady} from '@roots/sage/client';

/**
 * app.main
 */
const main = async(err) => {
    if (err) {
      // handle hmr errors
        console.error(err);
    }

    function toggleNavMenu()
    {
        let toggle = document.querySelector('.nav-toggle'),
        sidebar = document.querySelector('#menu-primary');
        let logo = document.querySelector('.r1-custom-logo');

        if (window.innerWidth <= 768) {
          logo.classList.add('hidden');
        }

        toggle.addEventListener('click', function (e) {
            e.preventDefault();
            if (sidebar.classList.contains('hidden')) {
                sidebar.classList.remove('hidden');
                logo.classList.remove('hidden');
            } else {
                sidebar.classList.add('hidden');
                logo.classList.add('hidden');
            }
        });
        window.onresize = function () {
            if (window.innerWidth <= 768) {
                sidebar.classList.add('hidden');
                logo.classList.add('hidden');
            } else {
                sidebar.classList.add('hidden');
                logo.classList.remove('hidden');
            }
        }
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
