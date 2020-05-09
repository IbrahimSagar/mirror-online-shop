@extends('admin.layouts.master')

@section('content')
  
        <div class="content-wrapper">
          <div class="card-header">
            Add Category
          </div>
          <div class="card">
            <div class="card-body">
              <form action="{{route('admin.category.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                @include('admin.partials.massages')
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter category">
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlTextarea1">Description</label>
                     <textarea class="form-control" name="description" rows="8" cols="80"></textarea>
                  </div>

                  <!--<div class="form-group">
                    <label for="exampleFormControlTextarea1">Parent Category {optional}</label>
                     <select class="form-control" name="parent_id">
                        <option value="" >Please select a parent category</option>
                       @foreach ($main_categories as $category)
                       <option value="{{ $category->id }}">{{ $category->name }}</option> 
                       @endforeach 
                     </select>
                  </div>
                  
                  -->
                  <div class="form-group">
                    <label for="category_image">Category Image</label>
                    <input type="file" class="form-control" name="category_image[]" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Image">
                  </div>
                 
               
                  
                 <button type="submit" class="btn btn-primary">Add Category</button>
              </form>
            </div>
          </div>
         
        </div>

@endsection
 