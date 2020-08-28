<?php
  $logo = get_field('logo', 'options');
?>
<nav class="navbar navbar-expand-lg navbar-light">
  <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class='navbar-brand'>
    <img src="<?php echo $logo['url']; ?>"> 
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">

  </div>
</nav>
