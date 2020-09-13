@extends('welcome')
@section('content')

<div class="container">
  <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
      	
      	<a href="{{ route('add.category')}}"class="btn btn-danger">Add Category</a>
      	<a href="{{ route('all.category')}}"class="btn btn-info">All Category</a>
        <a href="{{ route('all.post')}}"class="btn btn-info">All Post</a>

       <br>
        <form action="{{ route('store.post')}}" method="post" enctype="multipart/form-data" >
          @csrf
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Post Title</label>
              <input type="text" class="form-control" placeholder="Title" name="title" required >
             
            </div>
            <br>
              <div class="form-group floating-label-form-group controls">
              <label>Categories</label>
              <select class="form-control" name="categories_id">
                @foreach($catrgory as $row)
              	<option value="{{ $row->id }}">{{ $row->name }}</option>
                @endforeach
              </select>
             
            </div>
            <br>
          </div>
         
          <div class="control-group">
            <div class="form-group col-xs-12 floating-label-form-group controls">
              <label>Post Image</label>
              <input type="file" class="form-control" required name="image">
             
            </div>
            <br>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label>Post Details</label>
              <textarea rows="5" class="form-control" placeholder="Details" required name="details"></textarea>
              
            </div>
          </div>
          <br>
          <div id="success"></div>
          <button type="submit" class="btn btn-primary" id="sendMessageButton">Submit</button>
        </form>
      </div>
    </div>
</div>

@endsection
