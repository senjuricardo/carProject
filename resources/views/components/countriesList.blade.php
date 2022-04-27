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
    @foreach($countries as $country)
        <tr>
            <th scope="row">{{$country->id}}</th>
            <td>{{$country->name}}</td>
            <td>{{$country->created_at}}</td>
            <td>{{$country->updated_at}}</td>
            <td>  <a href="{{url('countries/'.$country->id)}}">Show</a> </td>
        </tr>
    @endforeach
    </tbody>
</table>


