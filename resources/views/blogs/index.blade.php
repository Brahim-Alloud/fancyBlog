@extends('blogs.layout')
@section('content')
@foreach($blogs as $item)
<div class="card text-center">
    <div class="card-header">
      {{ $item->title }}
    </div>
    <div class="card-body">
        <p class="card-text">{{ $item->content }}</p>
        <a href="{{ url('blogs/' . $item->id) }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
        <a href="{{ url('blogs/' . $item->id . '/edit') }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
        <form method="POST" action="{{ url('/blogs' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
            <button type="submit" class="btn btn-danger btn-sm" title="Delete blog" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
        </form>
    </div>
  </div>
@endforeach
@endsection