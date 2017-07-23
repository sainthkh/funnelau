<header class="banner">
<nav class="navbar navbar-toggleable-md amber lighten-4">
  <div class="container">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav1" aria-controls="navbarNav1" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="/">
        @php(the_custom_logo())
    </a>
    <div class="collapse navbar-collapse nav-primary" id="navbarNav1">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu([
          'theme_location' => 'primary_navigation',
          'container_class' => 'ml-auto',
          'menu_class' => 'navbar-nav',
          ]) 
        !!}
      @endif
    </div>
  </div>
</nav>
</header>