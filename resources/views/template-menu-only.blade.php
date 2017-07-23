{{--
  Template Name: Menu-Only Template
--}}

<!doctype html>
<html @php(language_attributes())>
  @include('partials.head')
  <body @php(body_class())>
    @php(do_action('get_header'))
    @include('partials.header')
    <div class="" role="document">
      <div class="content">
        <main class="main">
          @while(have_posts()) @php(the_post())
            @include('partials.content-page')
          @endwhile
        </main>
      </div>
    </div>
    @php(do_action('get_footer'))
    <footer>
      <nav class="navbar navbar-toggleable-md amber lighten-4">
        <div class="container">
          <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav1" aria-controls="navbarNav1" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav1">
            @if (has_nav_menu('frontpage_bottom_navigation'))
              {!! wp_nav_menu([
                'theme_location' => 'frontpage_bottom_navigation',
                'container_class' => 'mx-auto',
                'menu_class' => 'navbar-nav mx-auto',
                ]) 
              !!}
            @endif
          </div>
        </div>
      </nav>
      <div class="copyright amber lighten-3">
        © Copyright Joanna Penn. The Creative Penn Limited. All rights reserved.
      </div>
    </footer>
    @php(wp_footer())
  </body>
</html>
