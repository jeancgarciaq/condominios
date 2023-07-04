import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
 
export default defineConfig({
    plugins: [
        laravel([
            'resources/css/app.css',
            'resources/css/argon-dashboard-tailwind.css', 
            'resources/css/nucleo-icons.css', 
            'resources/css/nucleo-svg.css', 
            'resources/css/perfect-scrollbar.css',
            'resources/css/tooltips.css',
            'resources/js/app.js',
            'resources/js/argon-dashboard-tailwind.js',
            'resources/js/dropdown.js',
            'resources/js/fixed-plugin.js',
            'resources/js/nav-pills.js',
            'resources/js/navbar-collapse.js',
            'resources/js/navbar-sticky.js',
            'resources/js/perfect-scrollbar.js',
            'resources/js/sidenav-burger.js', 
            'resources/js/tooltips.js',
            'resources/js/42d5adcbca.js',
        ]),
    ],
});
