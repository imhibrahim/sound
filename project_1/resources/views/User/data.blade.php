<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    form i{
        color: aqua;
        font-size: larger;
    }

    form button{
        border: none;
        cursor: pointer;
        background: transparent;
    }
</style>

</head>
<body>
    <form action="{{route('search')}}" method="get">
    <input type="search" placeholder="Search... " name="search">
    <button><i class="fa-solid fa-magnifying-glass"></i></button>
</form>


<table border="1">
    <thead>
        <tr>
              <th>id</th>
        <th>Name</th>
        <th>MAil</th>
        <th>Password</th>
        <th>Subject</th>
        <th>Action</th>
        </tr>
    </thead>

<tbody>
    @foreach ($user as $data)
        <tr>
            <td>{{$data->id}}</td>
            <td>{{$data->name}}</td>
            <td>{{$data->mail}}</td>
            <td>{{$data->password}}</td>
            <td>{{$data->subject}}</td>
            <td>
                <a href="{{'/delete/'.$data->id}}">delete</a>
                <a href="{{'/edit/'.$data->id}}">Edit</a>
            </td>
        </tr>
    @endforeach
</tbody>

</table>

</body>
</html>