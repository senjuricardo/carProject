@extends('master.main')
@section('content')
<table class="table">
    <thead>
    <tr>
        <th scope="col">id</th>
        <th scope="col">name</th>
        <th scope="col">created_at</th>
        <th scope="col">updated_at</th>

    </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">{{$brand->id}}</th>
            <td>{{$brand->name}}</td>
            <td>{{$brand->created_at}}</td>
            <td>{{$brand->updated_at}}</td>
        </tr>
    </tbody>
</table>

@endsection


