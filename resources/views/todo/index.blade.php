<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table, th, td {
            border: 1px solid black;
            style="text-align: center"
        }
    </style>
</head>
<body>
    <h1 style="text-align: center">Index  List</h1>
    <h3 style="text-align: center; color: green">
        <x-alert/>
    </h3>
<div style="width: 100%; display: flex;align-items: center;justify-content: center">
    <table style=" width:50% ;"  >
        <tr  >
            <th >Id</th>
            <th >Title</th>
            <th>Edit</th>
            <th >Delete</th>
        </tr>
        @foreach ($todos as $todo )
        <tr  >
            <td style="text-align: center">{{$todo->id}}</td>
            <td style="text-align: center">{{$todo->title}}</td>
            <th><a style="text-decoration: none ; color:green" href="{{asset('/edit/'.$todo->id)}}">Edit</a></th>
            <th ><a style="text-decoration: none; color:red" href="{{asset('/delete/'.$todo->id)}}">Delete</a></th>
        </tr>
        @endforeach

    </table>
</div>


<br>
<br>
<h2 style="text-align: center"><a style="text-decoration: none" href="{{asset('/create')}}">Create more...</a></h2>
</body>
</html>
