<table class="table">
    <thead>
    <tr>
        <th scope="col">id</th>
        <th scope="col">country_id</th>
        <th scope="col">name</th>
        <th scope="col">birth_date</th>
        <th scope="col">wallet</th>
        <th scope="col">created_at</th>
        <th scope="col">updated_at</th>
        <th scope="col">cars</th>

    </tr>
    </thead>
    <tbody>
    @foreach($owners as $owner)
        <tr>
            <th scope="row">{{$owner->id}}</th>
            <td>{{$owner->country_id}}</td>
            <td>{{$owner->name}}</td>
            <td>{{$owner->birth_date}}</td>
            <td>{{$owner->wallet}}</td>
            <td>{{$owner->created_at}}</td>
            <td>{{$owner->updated_at}}</td>
            <td>
                @foreach($owner->cars as $car)
                    <p>{{$car->registration}}</p>
                @endforeach
            </td>
            <td>  <a href="{{url('owners/'.$owner->id)}}">Show</a> </td>
        </tr>
    @endforeach
    </tbody>
</table>


