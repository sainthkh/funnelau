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
    @include('partials.footer')
    @php(wp_footer())
  </body>
</html>
