<h1>all data</h1>

@foreach ($data as $name )
    <li>{{$name}}</li>
@endforeach


<hr>

<form action="{{route('submit')}}" method="post">
    @csrf
    <input type="text" placeholder="enter name" name="name">
    <br><br>
    <input type="text" placeholder="enter mail" name="mail">
     <br><br>
    <input type="text" placeholder="enter password" name="pass">
     <br><br>
     <button>submit</button>
</form>