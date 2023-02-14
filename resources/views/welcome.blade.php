<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->

    </head>
    <body style="background-image: url('/image/background.png'); background-size: cover; background-repeat: no-repeat;">
        <div class="">
            @if (Route::has('login'))
                <div class="my-4 d-flex flex-row-reverse">              
                        <a href="{{ route('login') }}" style='text-decoration: none;' class="mx-3 text-light">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" style='text-decoration: none;' class="mx-3 text-light">Register</a>
                        @endif
                        <p class="text-warning mx-5">Register or sign up as a Admin</p>
                </div>
            @endif
            <h2 class="text-warning text-center my-5">Welcom to Bistro of Morocco</h2>
            <p class="text-light text-center my-5 w-50 m-auto bg-secondary p-3 rounded opacity-75">The Bistro of Morocco is unquestionably one of the best restaurants, but it is also a friendly restaurant, with pleasant background music.
                On the kitchen side, we are more in a contemporary concept, with hearty starters for quick meals, and a menu that offers starters, main courses and desserts with an affordable price, as well as a lunch formula starter/main course or main course/dessert.</p>*
            @foreach ($meals as $meal)
                
            <div class=" d-flex justify-content-center  flex-wrap ">
                <div class="text-light bg-secondary p-3 rounded opacity-75 d-flex justify-content-around m-4" style="width: 40%">
                    <div>
                        <h3>{{ $meal->name }}</h3>
                        <p class="text-warning">{{ $meal->category }}</p>
                        <p>{{$meal->description}}</p>
                        <h5>Price: {{$meal->price}} Dhs</h5>
                    </div>
                    
                    <img src="{{URL::asset('image/'.$meal->photo)}}" class="rounded-circle" style="width: 35%" alt="">
                </div>
            </div>
            @endforeach
        </div>
    </body>
</html>
