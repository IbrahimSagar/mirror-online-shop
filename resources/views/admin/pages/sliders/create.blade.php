@extends('admin.layouts.master')

@section('content')
  
<div class="content-wrapper">
          
  <div class="card" id="{{ $slider->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="card-dialog" role="document">
    <div class="card-content">
      <div class="card-header">
        <h5 class="card-title" id="exampleModalLabel">Add new slider</h5>
      </div>
      <div class="card-body">
        <form action ="{!! route('admin.slider.store') !!}"  method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
          <!-- Form slide-->
          <div class="form-group">
            <label for="title">Slider Title <small class="text-info">(required)</small></label>
            <input type="text" class="form-control" name="title" id="title" placeholder="Slider Title" required>
          </div>
          <div class="form-group">
            <label for="title">Slider Image <small class="text-danger">(required)</small></label>
            <input type="file" class="form-control" name="image" id="image" placeholder="Slider Image" required>
          </div>
          <div class="form-group">
            <label for="button_text">Slider Button Text <small class="text-info">(optional)</small></label>
            <input type="text" class="form-control" name="button_text" id="button_text" placeholder="Slider Button Text(if need)" required>
          </div>
          <div class="form-group">
            <label for="button_link">Slider Button Link <small class="text-info">('optional')</small></label>
            <input type="url" class="form-control" name="button_link" id="button_link" placeholder="Slider Button Text(if need)" required>
          </div>
          <div class="form-group">
            <label for="title">Slider Priority <small class="text-info">(required)</small></label>
            <input type="number" class="form-control" name="priority" id="priority" placeholder="Slider Priority; e.g:10" value="10" required>
          </div>


          <button type="submit" class="btn btn-danger">Add New</button>
          <button type="button" class="btn btn-secondary" data-dismiss="card">Cancel</button>
        </form>
        
      </div>
      
    </div>
  </div>
</div>

</div>

@endsection
 