<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NEWS PORTAL</title>
</head>
<body>
    <a href="{{route('createNews')}}">ADD A NEWS</a>
    
    <table border=1>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>Type</th>
            <th>Date</th>
            <!-- <th>Options</th> -->
        </tr>
        <tr>
        @foreach($c as $cr)
            <td>{{$cr['id']}}</td>
            <td>{{$cr['title']}}</td>
            <td>{{$cr['description']}}</td>
            <td>{{$cr['type']}}</td>
            <td>{{$cr['date']}}</td>
            <td><a href="/updateNews/{{$cr['id']}}">Edit</a></td>
            <td><a href="/deleteNews/{{$cr['id']}}">Delete</a></td>
        </tr>   
        @endforeach                    
    </table>


    
    <!-- <input class="form-control" style="height:40px;width: 350px; margin-left:420px;margin-right:10px" name="search" type="search" value="{{old('search')}}" placeholder="Search">
              <button class="btn btn-outline-success" type="submit">Search</button> -->
</body>
</html>