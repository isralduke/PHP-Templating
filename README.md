# PHP-Templating

A simple PHP-based templating system for flat, static sites.

##Usage

Pages are added by adding a folder named for the slug you want for the page. Inside of that folder is an `index.php` file which contains instructions and some variable data such as the page title. See `/about` for an example.

In this `index.php` file is:

- path to global-content
- page specific variables
- whether the page has a sidebar
- path to the beginning of the HTML and `<head><body>`
- path to the headers of the page ( as opposed to the `<head>` )
- path to the template
- path to the footer
- closing things

Site-wide content, such as the logo file name, site title, and other information, is contained in `_assets/partials/global-content.php`.


