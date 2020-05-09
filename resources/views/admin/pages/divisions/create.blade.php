@extends('admin.layouts.master')

@section('content')
  
        <div class="content-wrapper">
          <div class="card-header">
            Add Division
          </div>

          <div class="card">
            <div class="card-body">
              <form action="{{route('admin.division.store')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                @include('admin.partials.massages')
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" placeholder="Enter division">
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlTextarea1">priority</label>
                    <input type="text" class="form-control" name="priority" id="priority" aria-describedby="emailHelp" placeholder="Enter priority">
                  </div>
  
                 <button type="submit" class="btn btn-primary">Add Division</button>

              </form>
            </div>
          </div>
         
        </div>

@endsection
 