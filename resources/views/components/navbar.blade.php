<nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom">
    <div class="container-fluid">

        {{--Logo--}}
        <a class="navbar-brand" href="{{ route('dashboard') }}">
            <x-logo /> {{ config('app.name') }}
        </a>

        {{--Toggler--}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>

        <li class="collapse navbar-collapse" id="navbarSupportedContent">

            @if($languages)
            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="languageSelector" data-bs-toggle="dropdown">
                        <span class="d-lg-none">
                            {{ __('common.choose-language') }}
                        </span>
                        <span class="d-none d-lg-inline-block me-1">
                            <icon icon="language" />
                        </span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            @foreach($languages as $language)
                            <a @class(['dropdown-item', 'active' => app()->getLocale() == $language]) href="{{ route('switch_language', $language) }}">
                                {{ strtoupper($language) }}
                            </a>
                            @endforeach
                        </li>
                    </ul>
                </li>
            </ul>
            @endif

            @if($menu)
            <ul class="navbar-nav">
                @foreach($menu as $item)
                    @php $hasSubmenu = array_key_exists('submenu', $item); @endphp
                    <li @class(['nav-item', 'dropdown' => $hasSubmenu])>
                        <a href="{{ $item['href'] }}" @class(['nav-link', 'active' => $item['active'], 'dropdown-toggle' => $hasSubmenu])
                            {!! $hasSubmenu ? 'data-bs-toggle="dropdown"' : '' !!}>
                            {{ $item['title'] }}
                        </a>
                        @if($hasSubmenu)
                        <ul class="dropdown-menu">
                            @foreach($item['submenu'] as $submenuItem)
                            <li>
                                <a href="{{ $submenuItem['href'] }}" @class(['dropdown-item', 'active' => $submenuItem['active']])>
                                    {{ $submenuItem['title'] }}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                        @endif
                    </li>
                @endforeach
            </ul>
            @endif

            {{--User menu--}}
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" data-bs-toggle="dropdown">
                        {{ auth()->user()->name }}
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
                                    {{ __('common.logout') }}
                                </a>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </li>
    </div>
</nav>
