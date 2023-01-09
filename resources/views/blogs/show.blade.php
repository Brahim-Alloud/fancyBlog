@extends('blogs.layout')
@section('content')
<div class="card">
  <div class="card-header">Blogs Page</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Title : {{ $blogs->title }}</h5>
        <p class="card-text">Content : {{ $blogs->content }}</p>
  </div>
      
    </hr>
  
  </div>
</div>