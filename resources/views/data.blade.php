<!DOCTYPE html>
<head>
<h1> This is menu</h1>
    @foreach($name as $key => $data)
        <tr>
            <th>{{$data->restaurant_id}}</th>
            <th>{{$data->Item}}</th>
            <th>{{$data->Category}}</th>
        </tr>
    @endforeach
</head>
<body>

</body>
</html>
