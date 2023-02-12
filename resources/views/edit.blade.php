{{-- {{$user}} --}}
@include('layouts.master')
        {{-- <h1>{{$user->id}}</h1>
        <h1>{{$user->name}}</h1> --}}
        <div class="wrapper bg-white mt-sm-5 w-75 p-5 m-auto my-4">
            <h4 class="pb-4 border-bottom">Account settings</h4>
            <form action="/edit" method="POST"> 
                <div class="py-2">
                    @csrf
                    <input type="hidden" name="id" value={{$user->id}}>
                    <div class="row py-2">
                        <div class="col-md-6">
                            <label for="firstname">Name</label>
                            <input type="text" name="name" class="bg-light form-control" value={{$user->name}} required>
                        </div>
                    </div>
                    <div class="row py-2">
                        <div class="col-md-6">
                            <label for="firstname">E-mail</label>
                            <input type="email" name="email" class="bg-light form-control" value={{$user->email}} required>
                        </div>
                    </div>
                    <div class="row py-2">
                        <div class="col-md-6">
                            <label for="password">Password</label>
                            <input type="password" name="password" class="bg-light form-control" required>
                        </div>
                    </div>
                    <div class="py-3 pb-4 border-bottom">
                        <button type="submit" class="btn btn-primary mr-3">Save Changes</button>
                        <a class="btn border button mx-2" href="{{route ('meals.index')}}">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>