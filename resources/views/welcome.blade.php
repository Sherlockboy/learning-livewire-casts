<!DOCTYPE html>
<html>
    <head>
        <title>Livewire</title>

        @livewireStyles()
    </head>
    <body>
        @livewire('hello-world', ['name' => 'Bob'])
        
        @livewireScripts()
    </body>
</html>
