@extends('Frontend.Shared.LinksShared')
<div class="container">
    <div class="card-body">
        <h5 class="card-title">insert Data</h5>
        <!-- Active Table -->
        <form action="{{ route('Datainsert') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <h1>Slider</h1>


                    <label for="image" class="custom-file-label"> insert image</label>
                    <input type="file" name="image" class="custom-file-input"><br>

                    <label for="discription" class="control-label">discription</label>
                    <input type="text" name="discription" class="form-control"><br>
                    <input type="submit" name="submit" class="btnblue">

        </form>
        <form action="{{ route('Newsinsert') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <h1>News</h1>
            <label for="titlenews" class="control-label">titlenews</label>
            <input type="text" name="titlenews" class="form-control"><br>
            <label for="news" class="control-label">news</label>
            <input type="text" name="news" class="form-control"><br>
            <input type="submit" class="btnblue">
            <a class="btnblue" href="/Dashboard list">Lists</a>

            <!-- End Tables without borders -->
        </form>
    </div>
        <a href="{{ route('logout.perform') }}" class="btndanger"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            Logout
        </a>
        <form id="logout-form" action="{{ route('logout.perform') }}" method="GET" style="display: none;">
            {{ csrf_field() }}
        </form>

    </div>
</div>
