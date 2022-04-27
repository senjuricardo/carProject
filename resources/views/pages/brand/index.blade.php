@extends('master.main')


@section('content')
    <h1>Brands</h1>

    @component('components.brandsList',[
            'brands'=>$brands
    ])
    @endcomponent
@endsection

