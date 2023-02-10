@include('layouts.master')
    @foreach ($meals as $meal)
        <div class="d-block d-md-flex flex-row align-items-center w-75 m-auto my-5 p-3" style="background-color: rgb(248, 248, 230); border-radius: 10px">
            <article class="mx-4">
                <h2>{{ $meal->name }}</h2>
                <h4>{{ $meal->category }}</h4>
                <p>{{$meal->description}}</p>
                <span class="text-success font-weight-bold" style="font-size: 15px">Price: {{$meal->price}} DHS</span> <br><br>
                <a href="delete/{{ $meal->id }}" class="btn btn-danger"> Delete </a>
            </article>
            <img class="" src="image/tagine.jpg" alt="" style="border-radius: 10px">
        </div>
    @endforeach      
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

    </body>
</html>