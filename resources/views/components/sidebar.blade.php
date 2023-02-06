<div class="sidebar">
    <div class="sidebar_inner" data-simplebar>

        <ul class="side-colored">
            <li class="active"><a href="/">
                    <ion-icon name="compass"
                        class="bg-gradient-to-br from-purple-300 p-1 rounded-md side-icon text-opacity-80 text-white to-blue-500">
                    </ion-icon>
                    <span> Explore</span>
                </a>
            </li>
            @php
                $url = $_SERVER['REQUEST_URI'];
            @endphp
            @foreach ($lists as $list)
                <li class="@if ($list->url == $url) active @endif">
                    <a href="{{ $list->url }}">
                        {!! $list->icon_img !!}
                        <span>{{ $list->name }}</span>
                        @if ($list->is_featured == 1)
                            <span class="soon">new</span>
                        @endif
                    </a>
                </li>
            @endforeach

        </ul>

        <ul class="side_links" data-sub-title="Pages">
            @foreach ($pages as $page)
                <li><a href="{{ $page->url }}">
                        {!! $page->icon_img !!}
                        <span>{{ $page->name }}</span>
                        @if ($page->is_featured == 1)
                            <span class="soon">new</span>
                        @endif
                    </a>
                </li>
            @endforeach


        </ul>

        <div class="side_foot_links">
            <a href="#">Careers</a>
            <a href="{{route('ContactUs')}}">Contact Us </a>
            <a href="#">Developer</a>
        </div>

    </div>

    <div class="side_overly" uk-toggle="target: #wrapper ; cls: is-collapse is-active"></div>
</div>
<div>
    <!-- Nothing worth having comes easy. - Theodore Roosevelt -->
</div>
