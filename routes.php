<?php

if (Config::get('webmasters.google_verification_htmlfile'))
{
    Route::get('google(:any)', function($suffix)
    {
        if ('google' . $suffix == Config::get('webmasters.google_verification_htmlfile') . '.html') {
            $html_file_content = 'google-site-verification: google' . $suffix;
            return Response::make($html_file_content, 200);
        } else {
            return Response::error('404');
        }
    });
}

if (Config::get('webmasters.google_verification_metatag'))
{
    Route::filter('before', function()
    {
        Section::inject('google-site-verification', sprintf("<meta name=\"google-site-verification\" content=\"%s\">\n", Config::get('webmasters.google_verification_metatag')));
    });
}


if (Config::get('webmasters.sitemap'))
{
    Route::get('sitemap.xml', array('as' => 'xml_sitemap', 'do' => function()
    {
        $urls = array(
            new Url('http://www.vornamencheck.de/', '2012-07-25', 'monthly', '1.0'),
            new Url('http://www.vornamencheck.de/impressum', '2012-07-23', '', '0.8'),
            new Url('http://www.vornamencheck.de/terms', '2012-07-23', 'montly', ''),
        );

        $xml = View::make('webmasters::sitemap')->with('urls', $urls)->render();
        $headers = array('Content-Type' => 'application/xml');
        return Response::make($xml, 200, $headers);
    }));
}