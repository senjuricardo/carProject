@extends('master.main')


@section('content')
    <h1>Countries</h1>

    @component('components.countriesList',[
            'countries'=>$countries
    ])
    @endcomponent
@endsection

