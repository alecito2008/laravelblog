@extends('layouts.app')

@section('content')
<!-- Page Content -->
<div class="container">

<div class="row">

  <!-- Blog Entries Column -->
  <div class="col-md-8">

    <h1 class="my-4">Posts <a href="{{ url('admin/posts/create') }}" class="btn btn-success pull-right">Create New</a>

    </h1>

    <!-- Blog Post -->
    @forelse ($posts as $post)
    <div class="card mb-4">
      <div class="card-body">
        <h2 class="card-title">{{ $post->title }} </h2>
        <p class="card-text">{{ str_limit($post->body, 200) }}</p>
        <a href="{{ url("/posts/{$post->id}") }}" class="btn btn-primary">Read More &rarr;</a>
      </div>
      <div class="card-footer text-muted">
        Posted on {{ $post->created_at->toDayDateTimeString() }} by
        <a href="#">{{ $post->user->name }}</a>
        <p>
            Tags:
            @forelse ($post->tags as $tag)
            <span class="label label-default">{{ $tag->name }}</span>
            @empty
            <span class="label label-danger">No tag found.</span>
            @endforelse
        </p>
      </div>
    </div>
    @empty
                    <div class="panel panel-default">
                        <div class="panel-heading">Not Found!!</div>

                        <div class="panel-body">
                            <p>Sorry! No post found.</p>
                        </div>
                    </div>
    @endforelse

    <div align="center">
                    {!! $posts->appends(['search' => request()->get('search')])->links() !!}
                </div>    
  </div>

  <!-- Sidebar Widgets Column -->
  <div class="col-md-4">

    <!-- Search Widget -->
    <div class="card my-4">
      <h5 class="card-header">Search</h5>
      <div class="card-body">
      @include('frontend._search')
      </div>
    </div>

    <!-- Categories Widget -->
    <div class="card my-4">
      <h5 class="card-header">Categories</h5>
      <div class="card-body">
        <div class="row">
          <div class="col-lg-6">
            <ul class="list-unstyled mb-0">
            @forelse ($categories as $cat)
            <li><a href="{{ url("/admin/categories/{$cat->id}/edit") }}">{{ $cat->name }}</a></li>
            @empty
            <li>No tag found.</li>
            @endforelse              
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
<!-- /.row -->

</div>
<!-- /.container -->
@endsection