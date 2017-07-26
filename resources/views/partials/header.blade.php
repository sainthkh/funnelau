<header class="banner">
<nav class="navbar navbar-toggleable-md navbar-light amber lighten-4">
  <div class="container">
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav1" aria-controls="navbarNav1" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="/">
        @php(the_custom_logo())
    </a>
    <div class="collapse navbar-collapse nav-primary" id="navbarNav1">
      @include('partials.menu', [
        'menu_location' => 'primary_navigation',
        'position' => 'ml-auto',
      ])
    </div>
  </div>
</nav>
</header>