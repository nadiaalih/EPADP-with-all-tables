@extends('Frontend.Shared.LinksShared')

<div class="container">
    <div class="card-body">
      <h5 class="card-title">Edit Data</h5>
      <!-- Active Table -->
      <form action="{{url('update-data/'.$slider->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="input-group my-5">
    <div class="custom-file">
        <h1>Slider</h1>

        <label for="image" class="custom-file-label">image</label>
        <input type="file" name="image" value="{{$slider->image}}"class="custom-file-input"><br>
        <img src="{{asset('uploads/slider/'.$slider->image) }}"  height="160px" alt="image">

    </div>
</div>
        <label for="discription" class="control-label">discription</label>
        <input type="text" name="discription" value="{{$slider->discription}}"class="form-control"><br>
        <button type="submit" class="btnblue">Update</button>
    </form>




        <!-- End Tables without borders -->
    </div>
    <a href="{{ route('logout.perform') }}" class="btndanger" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        Logout
    </a>
        <form id="logout-form" action="{{ route('logout.perform') }}" method="GET" style="display: none;">
        {{ csrf_field() }}
    </form>

</div>
