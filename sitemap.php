<?php

header('Content-Type: application/xml');


include('./assets/config.php');

echo '<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
  <url>
    <loc>'.SITE_URL.'</loc>
    <lastmod>2023-10-25</lastmod>
    <changefreq>daily</changefreq>
    <priority>1.0</priority>
  </url>
</urlset>';


?>
