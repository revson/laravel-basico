<!DOCTYPE html>

<html>
    <head>
        <title>{{$title or "Curso Laravel Básico"}}</title>
    </head>
    
    <body>
        
        @yield('content')
        
        <!-- para acrescentar arquivo em todas as paginas e tambem arquivos especificos -->
        @stack("scripts")
        
    </body>
</html>