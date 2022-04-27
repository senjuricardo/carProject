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
    @foreach($brands as $brand)
        <tr>
            <th scope="row">{{$brand->id}}</th>
            <td>{{$brand->name}}</td>
            <td>{{$brand->created_at}}</td>
            <td>{{$brand->updated_at}}</td>
            <td>  <a href="{{url('brands/' . $brand->id)}}">Show</a> </td>
        </tr>
    @endforeach
    </tbody>
</table>


