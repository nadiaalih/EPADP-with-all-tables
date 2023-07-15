@extends('Frontend.Shared.LinksShared')

<div class="container">
    <div class="card-body">
      <h5 class="card-title">list Data</h5>
      <div class="card-body">
        <table class="table table-striped table-boardered">
            <thead>
                <tr>
                    <th>id</th>
                  <th>image</th>
                   <th>discription</th>
                   <th></th>

                </tr>
            </thead>
            <tbody>
                @foreach($slider as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td><img src="{{asset('uploads/slider/'.$item->image) }}" width="70px" height="70px" alt="image">
                    </td>
                    <td>{{$item->discription}}</td>
                    <td class="tdwidth">
                        <a href="{{url('edit/'.$item->id)}}" class="btnblue">Edit </a>
                        <a href="{{url('Dashboard add/')}}" class="btnblue">Add </a>
                        <a href="{{url('delete/'.$item->id)}}" class="btndanger">Delete </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <table class="table table-striped table-boardered">
            <thead>
                <tr>
                    <th>id</th>
                  <th>titlenews</th>
                   <th>news</th>
                   <th></th>

                </tr>
            </thead>
            <tbody>
                @foreach($news as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->titlenews}}</td>
                    <td>{{$item->news}}</td>
                    <td class="tdwidth">
                        <a href="{{url('editnews/'.$item->id)}}" class="btnblue">Edit </a>
                        <a href="{{url('Dashboard add/')}}" class="btnblue">Add </a>
                        <a href="{{url('deletenews/'.$item->id)}}" class="btndanger">Delete </a>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{ route('logout.perform') }}" class="btndanger"
        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        Logout
    </a>
    <form id="logout-form" action="{{ route('logout.perform') }}" method="GET" style="display: none;">
        {{ csrf_field() }}
    </form>
</div>
