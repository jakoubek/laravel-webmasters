# A Google & Bing webmaster tools bundle for Laravel

The webmasters bundle provides verification of websites to Google webmaster tools and Bing webmaster tools and the generation of XML sitemaps.

## Installation

Installation with Laravel artisan

	php artisan bundle:install webmasters

### Bundle Registration

in bundles.php

	'webmasters' => array('auto' => true),

## Configuration

Copy the default config file from **bundles/webmasters/config/webmasters.php** to **application/config/webmasters.php**.

### Google Webmaster Tools

Google forces you to verify that you own the website you are setting up in Google Webmaster Tools.

#### verification via HTML file

Create a static HTML file in the root of you website. The HTML file must have the name *googleSomeWeirdChars.html* and the content *google-site-verification: googleSomeWeirdChars.html*.

#### verification via meta tag

## Contributors

[Oliver Jakoubek](https://github.com/jakoubek)

## License

**laravel-webmasters** is open-sourced software licensed under the MIT License.
