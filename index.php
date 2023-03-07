<!Doctype html>
<head> 
    <title> <?php bloginfo('name'); ?></title>
<head>
<body>
     <?php 
      if ( have_posts () ) {
        // start the loop. 
        while ( have_posts () ) { 
            the_posts(); ?>
            <a href="<?php the_permalink(); ?>">
            <h3> <?php the_title(); ?>  </h3> 
            
            <?php 
        }
          }
 
       ?>

</body>
</html>