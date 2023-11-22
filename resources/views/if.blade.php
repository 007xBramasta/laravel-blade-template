<html>
    <body>
        <p>
            @if(count($hobbies) == 1)
                I have one hobby!
            @elseif(count($hobbies) > 1)
                i have multiple hobbies!
            @else
                I dont have any hobbies
            @endif            
        </p>
    </body>
</html>