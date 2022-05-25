<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1 style="text-align: center">Todo Edit</h1>
    <div style="text-align: center">
        <form action="{{asset('/update')}}" method="POST"> @csrf @method('put')
            <label>Title Name :</label><br><br>
            <input type="text" name="title" value="{{$todo->title}}"><br> <br>
            <input style="display: none" type="text" name="id" value="{{$todo->id}}"><br> <br>
            <button type="submit"> Edit Todo </button>
        </form>
    </div>
    <br>
<br>
<h2 style="text-align: center"><a style="text-decoration: none" href="{{asset('/index')}}"> <<  &nbsp; Back  </a></h2>
</body>
</html>
