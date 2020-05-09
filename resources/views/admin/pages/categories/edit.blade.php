@extends('admin.layouts.master')

@section('content')
  
        <div class="content-wrapper">
          <div class="card-header">
            Edit Category
          </div>

          <div class="card">
            <div class="card-body">
              <form action="{{route('admin.category.update', $category->id)}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                @include('admin.partials.massages')
                  <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $category->name}}">
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlTextarea1">Description(optional)</label>
                     <textarea class="form-control" name="description" rows="8" cols="80">{{!! $category->description !!}}</textarea>
                  </div>

                   <div class="form-group">
                    <label for="exampleFormControlTextarea1">Parent Category(optional)</label>
                     <select class="form-control" name="parent_id">
                      <option value="" >Please select a primry category</option>
                       @foreach ($main_categories as $cat)
                       <option value="{{ $cat->id }}"{{ $cat->id == $category->parent_id ? 'selected': '' }}>{{ $cat->name }}</option> 
                       @endforeach 
                     </select>
                  </div>
                 
                  
                  <div class="form-group">
                    <label for="oldimage">Category old Image</label><br>
                    <img src = "{!! asset('image/categories/.$category->image') !!}" width="100"><br>                                          
                    <label for="image">Category New Image(optional)</label><br>
                    <input type="file" class="form-control" name="product_image[]" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Image">
                    </div>
                 
                  
                 <button type="submit" class="btn btn-primary">Update Category</button>
              </form>
            </div>
          </div>
         
        </div>

@endsection
 