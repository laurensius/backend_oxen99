<?php echo'<?xml version="1.0" encoding="UTF-8" ?>' ?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
 <url>
 <loc><?php echo base_url();?></loc>
 <priority>1.0</priority>
 </url>

<!-- Your Sitemap -->
 <?php foreach($posts as $post) { ?>
 <url>
 <loc><?php echo site_url()."result/".$post->post_slug ?></loc>
 <priority>0.5</priority>
 </url>
 <?php } ?>

</urlset>