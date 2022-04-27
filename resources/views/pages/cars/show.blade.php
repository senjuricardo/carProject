@extends('master.main')


@section('content')
    <h1>Cars</h1>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">brand_id</th>
            <th scope="col">name owner</th>
            <th scope="col">Registration</th>
            <th scope="col">Year of Registration</th>
            <th scope="col">color</th>
            <th scope="col">created_at</th>
            <th scope="col">updated_at</th>

        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">{{$car->id}}</th>
            <td>{{$car->brand_id}}</td>
            <td>{{$car->owner ->name}}</td>
            <td>{{$car->registration}}</td>
            <td>{{$car->year_of_registration}}</td>
            <td>{{$car->color}}</td>
            <td>{{$car->created_at}}</td>
            <td>{{$car->updated_at}}</td>
        </tr>
        </tbody>
    </table>



@endsection

