<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1 style="text-align: center">Todo Create</h1>
    <h3 style="text-align: center; color: green">

        <x-alert/>
    </h3>
    <div style="text-align: center">
        <form action="{{asset('/create')}}" method="POST"> @csrf
            <label>Title Name :</label><br><br>
            <input type="text" name="title"><br> <br>
            <button type="submit"> Add Todo </button>
        </form>
    </div>


<br>
<br>
<h2 style="text-align: center"><a style="text-decoration: none" href="{{asset('/index')}}">  <<  &nbsp; Back  </a></h2>
</body>
</html>
