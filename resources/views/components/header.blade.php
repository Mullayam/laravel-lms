<header class="is-transparent is-dark border-b backdrop-filter backdrop-blur-2xl"
    uk-sticky="cls-active: is-dark is-transparent border-b">
    <div class="header_inner">
        <div class="left-side">

            <!-- Logo -->
            <div id="logo">
                <a href="/">
                    <img src="https://learn-manifest-files-enjoys.b-cdn.net/learn/learn-enjoys.png" alt="">
                    {{-- <img src="https://learn-manifest-files-enjoys.b-cdn.net/learn/learn-enjoys.png" class="logo_inverse" alt=""> --}}
                    <img src="https://learn-manifest-files-enjoys.b-cdn.net/learn/bc-mobile.png" class="logo_mobile"
                        alt="">
                </a>
            </div>

            <!-- icon menu for mobile -->
            <div class="triger" uk-toggle="target: #wrapper ; cls: is-active">
            </div>

        </div>
        <div class="right-side">
            <!-- Header search box  -->
            <div class="header_search"><i class="uil-search-alt"></i>
                <input value="" type="text" class="form-control" placeholder=" Quick search for anything.."
                    autocomplete="off">
                <div uk-drop="mode: click;offset:10" class="header_search_dropdown">

                    <h4 class="search_title"> Recently </h4>
                    <ul>
                        <li>
                            <a href="#">
                                <img src="./cdn/static/assets/images/avatars/avatar-1.jpg" alt=""
                                    class="list-avatar">
                                <div class="list-name"> Erica Jones </div>
                            </a>
                        </li>

                    </ul>

                </div>
            </div>


            @auth
                <x-header-section></x-header-section>
            @else
                @if (Route::has('login'))
                    <button onclick="document.location.href='{{ route('register') }}'" type="button"
                        class="bg-yellow-500 yellow-500 px-6 py-3 rounded-md shadow text-white ml-2" uk-toggle><b>New
                            Here</b></button>
                @elseif(Route::has('register'))
                    <button onclick="document.location.href='{{ route('login') }}'" type="button"
                        class="bg-yellow-500 yellow-500 px-6 py-3 rounded-md shadow text-white ml-2"
                        uk-toggle><b>Login</b></button>
                @endif
            @endauth


        </div>
    </div>
</header>
