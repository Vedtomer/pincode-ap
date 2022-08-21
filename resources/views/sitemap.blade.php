<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
 @foreach ($pincode as $pincode)
        <url>
            <loc>{{url($pincode['slug'])}}</loc>
            <lastmod>{{ gmdate('Y-m-d\TH:i:s\Z',strtotime($pincode['updated_at'])) }}</lastmod>
            <priority>0.6</priority>
        </url>
    @endforeach
</urlset>