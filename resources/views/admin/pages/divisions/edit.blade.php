@extends('admin.layouts.master')

@section('content')
  
        <div class="content-wrapper">
          <div class="card-header">
            Edit Division
          </div>

          <div class="card">
            <div class="card-body">
              <form action="{{route('admin.division.update', $division->id)}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                @include('admin.partials.massages')
                  <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" value="{{ $division->name}}">
                  </div>
                  <div class="form-group">
                    <label for="priority">Priority</label>
                     <input type="text" class="form-control" name="priority" id="priority" aria-describedby="emailHelp" value=" {{!! $division->priority !!}}">
                  </div>

                   
                 <button type="submit" class="btn btn-primary">Update Division</button>
              </form>
            </div>
          </div>
         
        </div>

@endsection
 