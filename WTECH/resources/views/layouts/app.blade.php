<!DOCTYPE html>
<html>
    <head>
        @livewireStyles
        @include('layouts.partials.head') 
    </head>
    <body>

        @include('layouts.partials.nav')

        <div class="page-wrapper">

            @include('layouts.partials.subnav')

            <div class="content-wrapper">
                @yield('content')
            </div>

            @include('layouts.partials.footer')
        </div> 
            @livewireStyles
    </body>
</html>
