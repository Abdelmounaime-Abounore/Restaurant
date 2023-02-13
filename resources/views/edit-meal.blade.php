@include('layouts.master')

<form class="myForm w-75 m-auto bg-light p-4 my-3" id="myForm" enctype="multipart/form-data" method="POST" action="/edit-meals">
    <div class="div_form">
        @csrf
        <input type="hidden" name="id" value="{{$data->id}}">

        <div class="form-group my-3">
          <label for="formGroupExampleInput">Name</label>
          <input type="text" class="form-control p-2" name="name" value="{{$data->name}}">
          @error('name')
            <div class="alert text-danger p-0">{{ $message }}</div>
          @enderror
        </div>

        <div class="form-group my-3">
          <label for="formGroupExampleInput2">Category</label>
          <select class="form-control form-control p-2" name="category">
              <option value="">Select Your Choice .. </option>
              <option value="Breakfasts">Breakfasts</option>
              <option value="Moroccan meals">Moroccan meals</option>
              <option value="Italian meals">Italian meals</option>
              <option value="Chinese meals">Chinese meals</option>
              <option value="Juices">Juices</option>
          </select>
          @error('category')
            <div class="alert text-danger p-0">{{ $message }}</div>
          @enderror
        </div>

        <div class="form-group my-3">
          <label for="formGroupExampleInput2">Description</label>
          <textarea type="textarea" class="form-control p-2" name="description" >{{$data->description}}</textarea>
          
          @error('description')
            <div class="alert text-danger p-0">{{ $message }}</div>
          @enderror
        </div>

        <div class="form-group my-3">
          <label for="formGroupExampleInput2">Price</label>
          <input type="number" class="form-control p-2" name="price" value="{{$data->price}}">
          @error('price')
            <div class="alert text-danger p-0">{{ $message }}</div>
          @enderror
        </div>
        
        <div class="form-group my-3">
          <label for="formGroupExampleInput2">Image</label>
          <input type="file" class="form-control p-2" name="photo">
          @error('photo')
            <div class="alert text-danger p-0">{{ $message }}</div>
          @enderror
        </div>

        <button type="submit" class="btn btn-secondary">Update</button>
    </div>
</form>