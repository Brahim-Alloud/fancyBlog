
@extends('blogs.layout')
@section('content')
<div class="card">
  <div class="card-header">Blogs Page</div>
  <div class="card-body">
      
      <form action="{{ url('blogs/' .$blogs->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$blogs->id}}" id="id" />
        <label>Title</label></br>
        <input type="text" name="title" id="title" value="{{$blogs->title}}" class="form-control"></br>
        <label>Content</label></br>
        <input type="text" name="content" id="content" value="{{$blogs->content}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  </div>
</div>
@stop