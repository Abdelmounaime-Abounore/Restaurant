@include('layouts.master')

        <div class="wrapper bg-white mt-sm-5 w-75 p-5 m-auto my-4">
            <h4 class="pb-4 border-bottom">Account settings</h4>
            <form action="" method="POST"> 
                <div class="py-2">
                    <div class="row py-2">
                        <div class="col-md-6">
                            <label for="firstname">E-mail</label>
                            <input type="email" class="bg-light form-control">
                        </div>
                    </div>
                    <div class="row py-2">
                        <div class="col-md-6">
                            <label for="password">Password</label>
                            <input type="password" class="bg-light form-control">
                        </div>
                    </div>
                    <div class="py-3 pb-4 border-bottom">
                        <button class="btn btn-primary mr-3">Save Changes</button>
                        <a class="btn border button mx-2" href="{{route ('home')}}">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>