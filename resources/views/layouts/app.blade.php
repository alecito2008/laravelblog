@include('layouts.header')
@include('layouts.navigation')
    <div id="app">
        <div class="container">
            <div class="row">
                @include('flash::message')
            </div>
        </div>
        @yield('content')
    </div>
@include('layouts.footer')
