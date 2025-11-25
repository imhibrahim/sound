<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <h1>Fatch All Student Data</h1>
<table class="table">
    <tr>
        <th>id</th>
        <th>Name</th>
        <th>MAil</th>
        <th>Password</th>
        <th>Subject</th>
        <th>Action</th>
    </tr>

@foreach ( $user as $user1)
    <tr>
        <td>{{$user1->id}}</td>
        <td>{{$user1->name}}</td>
        <td>{{$user1->mail}}</td>
        <td>{{$user1->password}}</td>
        <td>{{$user1->subject}}</td>
<td>
</td>

    </tr>
@endforeach

</table>

        </div>
        <div class="col-md-3"></div>
    </div>
</div>
    
    
</body>
</html>