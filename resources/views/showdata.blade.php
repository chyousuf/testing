<html>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
<script
        src="https://code.jquery.com/jquery-2.2.4.js"
        integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
        crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>


<table id="" class="display">
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Gender</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        @foreach($getdata as $data)

            <td>{{$data->id}}</td>
            <td>{{$data->name}}</td>
            <td>{{$data->email}}</td>
            <td>{{$data->password}}</td>
            <td>{{$data->gender}}</td>
            <td><a href="{{url('/Editview/'.$data->id)}}">Edit</a></td>
            <td><a href="{{url('/delete'.$data->id)}}">Delete</a> </td>
        @endforeach
    </tr>
    </tbody>
</table>

<script>
    $(document).ready(function () {
        $('#tableid').DataTable();
    });
</script>
</html>