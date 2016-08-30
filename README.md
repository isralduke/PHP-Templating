# PHP-Templating

This is a simple PHP-based templating system for flat, static sites. It allows me to create a simple, static site, in which I only have to edit a simple set of content files separated from the HTML files. It is not suited for a site with a blog or other frequently added sequential content. It's probably best for the small, new business sites.

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

##Template Files & Index.php Files

The `index.php` files contain variable definitions — feel free to add or remove as you see fit — that are rendered in various places in the template files of `/_assets/templates/`.

It's not a complicated system at all but it's helped me start on smaller projects more quickly.

Tell me what you think, [@isralduke](https://twitter.com/isralduke) or make it better with a pull request.


