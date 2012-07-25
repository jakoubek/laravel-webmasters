<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
@foreach ($urls as $url)
    <url>
        <loc>{{ $url->loc }}</loc>
        <lastmod>{{ $url->lastmod }}</lastmod>
        @if ($url->changefreq)
        <changefreq>{{ $url->changefreq }}</changefreq>
        @endif
        @if ($url->priority)
        <priority>{{ $url->priority }}</priority>
        @endif
    </url>
@endforeach
</urlset>