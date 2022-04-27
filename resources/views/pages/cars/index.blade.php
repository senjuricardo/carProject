@extends('master.main')


@section('content')
    <h1>Cars</h1>

    @component('components.carsList',[
            'cars'=>$cars
    ])
    @endcomponent
@endsection

