<?php echo '<?xml version="1.0" encoding="UTF-8" ?>' ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc><?php echo base_url(); ?></loc>
        <priority>1.0</priority>
        <changefreq>daily</changefreq>
    </url>

    <!-- Sitemap -->
    <?php foreach ($links['pages'] as $page) { ?>
        <url>
            <loc><?php echo base_url() . $page->link ?></loc>
            <priority>0.5</priority>
            <changefreq>daily</changefreq>
        </url>
    <?php } ?>
    <?php foreach ($links['categories'] as $category) { ?>
        <url>
            <loc><?php echo base_url('category/') . $category->slug ?></loc>
            <priority>0.5</priority>
            <changefreq>daily</changefreq>
        </url>
    <?php } ?>
    <?php foreach ($links['articles'] as $article) { ?>
        <url>
            <loc><?php echo base_url('blog/') . $article->slug ?></loc>
            <priority>0.5</priority>
            <changefreq>daily</changefreq>
        </url>
    <?php } ?>
</urlset>