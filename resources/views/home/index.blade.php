@extends('layouts.master')

@section("title", $data["title"])
@section("description", $data["description"])

@section('content')
<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-10 mx-auto">
      <p>Navigate to the <a href="{{ route('posts.list') }}">posts section</a> to check the latest posts.</p>
    </div>
  </div>
</div>
@endsection
