@extends('Frontend.Shared.LinksShared')

<div class="container">
    <div class="card-body">
      <h5 class="card-title">insert Data</h5>
      <!-- Active Table -->
      <form action="{{route('Datainsert')}}" method="POST" enctype="multipart/form-data">

        @csrf
        <div class="input-group my-5">
    <div class="custom-file">
        <h1>Slider</h1>

        <label for="image" class="custom-file-label">image</label>
        <input type="file" name="image" class="custom-file-input"><br>
    </div>
</div>
        <label for="discription" class="control-label">discription</label>
        <input type="text" name="discription" class="form-control"><br>
        <input type="submit" class="btn btn-primary">
        <input type="Edit" class="btn btn">
        <input type="Edit" class="btn btn">

    </form>
    <form action="{{route('Newsinsert')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <h1>News</h1>
        <label for="titlenews" class="control-label">titlenews</label>
        <input type="text" name="titlenews" class="form-control"><br>
        <label for="news" class="control-label">news</label>
        <input type="text" name="news" class="form-control"><br>
        <input type="submit" class="btn btn-primary">
        <input type="Edit" class="btn btn-primary">
        <input type="Edit" class="btn btn">

        <!-- End Tables without borders -->
     </form>
    </div>
    <a href="{{ route('logout.perform') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        Logout
    </a>
        <form id="logout-form" action="{{ route('logout.perform') }}" method="GET" style="display: none;">
        {{ csrf_field() }}
    </form>

</div>
