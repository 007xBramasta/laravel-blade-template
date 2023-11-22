<html>
    <body>
        <p>
            @isset
                Hello, my name is {{$name}}
            @endisset
        </p>

        <p>
            @empty  
                I dont have any hobbies
            @endempty
        </p>
    </body>
</html>