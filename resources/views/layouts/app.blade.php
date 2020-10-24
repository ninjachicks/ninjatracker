<!-- 
    @section: defines a section of content
    @yield: used to display content of a given section
-->

<html>
    <head>
        <title>Ninjatracker - @yield('title')</title>
    </head>
    <body>
        @section('sidebar')
            This is the master sidebar.
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>