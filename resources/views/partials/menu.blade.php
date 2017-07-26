@php
    $locations = get_nav_menu_locations();
    $menu = get_term( $locations[$menu_location], 'nav_menu' );
    $menu_items = wp_get_nav_menu_items($menu->term_id);
    $menus = array();
    foreach($menu_items as $menu_item) {
        $parent_id = $menu_item->ID;
        $menu_item->children = array();
        foreach($menu_items as $submenu_item) {
            if($submenu_item->menu_item_parent == $parent_id) {
                $menu_item->children[] = $submenu_item;
            }
        }

        if($menu_item->menu_item_parent == 0 ) {
            $menus[] = $menu_item;
        }
    }
@endphp
<div class="collapse navbar-collapse" id="navbarNav1">
    <ul class="navbar-nav {{ $position }}">
        @foreach($menus as $menu)
            @if(count($menu->children) > 0)
                <li class="nav-item dropdown btn-group">
                    <a class="nav-link dropdown-toggle" id="menu-{{$menu->ID}}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{$menu->title}}</a>
                    <div class="dropdown-menu dropdown" aria-labelledby="menu-{{$menu->ID}}">
                        @foreach($menu->children as $submenu)
                            <a class="dropdown-item" href="{{$submenu->url}}">{{$submenu->title}}</a>
                        @endforeach
                    </div>
                </li>
            @else
                <li class="nav-item {{implode(' ', $menu->classes)}}">
                    <a class="nav-link" href="{{$menu->url}}">{{$menu->title}}</a>
                </li>
            @endif
        @endforeach
    </ul>
</div>