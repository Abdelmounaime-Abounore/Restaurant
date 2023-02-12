@include('layouts.master')

<form class="myForm w-75 m-auto bg-light p-4 my-3" id="myForm" enctype="multipart/form-data" method="POST" action="/store-meals">
    <div class="div_form">
        @csrf
        <div class="form-group my-3">
          <label for="formGroupExampleInput">Name</label>
          <input type="text" class="form-control p-2" name="name" placeholder="Enter Title" required>
        </div>
        <div class="form-group my-3">
          <label for="formGroupExampleInput2">Category</label>
          <select class="form-control form-control p-2" name="category" required>
              <option>Select Your Choice ..</option>
              <option value="Breakfasts">Breakfasts</option>
              <option value="Moroccan meals">Moroccan meals</option>
              <option value="Italian meals">Italian meals</option>
              <option value="Chinese meals">Chinese meals</option>
              <option value="Juices">Juices</option>
          </select>
        </div>
        <div class="form-group my-3">
          <label for="formGroupExampleInput2">Description</label>
          <textarea type="textarea" class="form-control p-2" name="description" required></textarea>
        </div>
        <div class="form-group my-3">
          <label for="formGroupExampleInput2">Price</label>
          <input type="number" class="form-control p-2" name="price" required>
        </div>
        <div class="form-group my-3">
          <label for="formGroupExampleInput2">Image</label>
          <input type="file" class="form-control p-2" name="photo" placeholder="Select image" required>
        </div>
        <button type="submit" class="btn btn-success">Add Meal</button>
    </div>
</form>