@extends('Frontend.Shared.LinksShared')

<div class="container">
    <div class="card-body">
      <h5 class="card-title">Edit Data</h5>
      <!-- Active Table -->

    <form action="{{url('update-datanews/'.$news->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <h1>News</h1>
        <label for="titlenews" class="control-label">titlenews</label>
        <input type="text" name="titlenews"value="{{$news->titlenews}}" class="form-control"><br>
        <label for="news" class="control-label">news</label>
        <input type="text" name="news"value="{{$news->news}}" class="form-control"><br>
      <button type="submit" class="btnblue">Update</button>


        <!-- End Tables without borders -->
     </form>
    </div>
    <a href="{{ route('logout.perform') }}" class="btndanger" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        Logout
    </a>
        <form id="logout-form" action="{{ route('logout.perform') }}" method="GET" style="display: none;">
        {{ csrf_field() }}
    </form>

</div>
