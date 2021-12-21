<?php
/*
Plugin Name: Google Analytics Tag
Plugin URI: https://github.com/wwwmadis/
Version: 1.1
Author: Madis
*/

function cc_add_ga() { ?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-XXXXXXXXXXX"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-XXXXXXXXXXXXXXXXXX);
</script>
<?php }
add_action( 'wp_head', 'cc_add_ga', 10 );
?>