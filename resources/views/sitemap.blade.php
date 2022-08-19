<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @foreach ($pincode as $pincode)
        <url>
            <loc>{{url("NATURAL CUSHION EMERALD AND DIAMOND ENGAGEMENT RING 14K SOLID GOLD MAY BIRTHSTONE RING FOR WOMEN AND GIRLS")}}</loc>
            <lastmod>{{ gmdate('Y-m-d\TH:i:s\Z',strtotime($pincode->updated_at)) }}</lastmod>
            <changefreq>daily</changefreq>
            <priority>0.6</priority>
        </url>
    @endforeach
</urlset>