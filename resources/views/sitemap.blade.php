<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">
 @foreach ($pincode as $pincode)
        <url>
            <loc>{{url($pincode['slug'])}}</loc>
            <lastmod>{{ gmdate('Y-m-d\TH:i:s\Z',strtotime($pincode['updated_at'])) }}</lastmod>
            <priority>0.6</priority>
        </url>
    @endforeach
</urlset>