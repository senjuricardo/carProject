@extends('master.main')


@section('content')
    <h1>Owners</h1>

    @component('components.ownersList',[
            'owners'=>$owners
    ])
    @endcomponent
@endsection

