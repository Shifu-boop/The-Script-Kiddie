<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>HZ HBO-ICT</title>

        {{-- Compiled assets --}}
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    </head>
    <body>
        {{-- Navigation bar --}}
        <nav class="navbar is-primary  has-text-white" >
            <div class="container">
                <div class="navbar-brand">
                    <a href="/" class="navbar-item">
                        <strong><i class="fas fa-graduation-cap"></i> HZ</strong>
                    </a>
                    <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navMenu">
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                    </a>
                </div>
                <div class="navbar-menu" id="navMenu">
                    <div class="navbar-start">
                        <a href="{{ route('home') }}"
                           class="navbar-item {{ request()->route()->getName() === 'home' ? 'is-active' : '' }}">
                            Home
                        </a>
                        <a href="{{ route('articles.index') }}"
                           class="navbar-item {{ request()->route()->getName() === 'articles.index' ? 'is-active' : '' }}">
                            News
                        </a>
                        <a href="{{ route('bars.index') }}"
                           class="navbar-item {{ request()->route()->getName() === 'bars.index' ? 'is-active' : '' }}">
                            Bars
                        </a>
                    </div>
                    <div class="navbar-end">
                        @auth
                            <div class="navbar-item">
                                <a href="{{ route('dashboard') }}" class="button is-light">
                                    Dashboard
                                </a>
                            </div>
                            <div class="navbar-item">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="button is-danger is-light">
                                        Log out
                                    </button>
                                </form>
                            </div>
                        @else
                            <div class="navbar-item">
                                <div class="buttons">
                                    <a href="{{ route('register') }}" class="button is-primary">
                                        <strong>Sign up</strong>
                                    </a>
                                    <a href="{{ route('login') }}" class="button is-light">
                                        Log in
                                    </a>
                                </div>
                            </div>
                        @endauth
                    </div>
                </div>
            </div>
        </nav>

        {{-- Main content --}}
        {{ $slot }}

        {{-- Footer --}}
        <footer class="footer">
            <div class="container">
                <div class="columns is-multiline">

                    <div class="column has-text-centered">
                        <div>
                            <a href="/" class="link">Home</a>
                        </div>
                    </div>

                    <div class="column has-text-centered">
                        <div>
                            <a href="https://opensource.org/licenses/MIT" class="link">
                                <i class="fa fa-balance-scale" aria-hidden="true"></i> License: MIT
                            </a>
                        </div>
                    </div>

                </div>

                <div class="content is-small has-text-centered">
                    <p class="">Theme built by <a href="https://www.csrhymes.com">C.S. Rhymes</a> | adapted by <a href="https://github.com/dwaard">BugSlayer</a></p>
                    <p>PROJECT FOOTER HERE</p>
                </div>
            </div>
        </footer>

    </body>
</html>
