<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="{{route('storeNews')}}" method="POST">
  {{@csrf_field()}}
  <label>Title</label></br>
  <input type="text" name="title" id="title"></br>
  <label>Description</label></br>
  <input type="text" name="description" id="description"></br>
  <label>Type</label></br>
  <input type="text" name="type" id="type"></br>
  <label>Date</label></br>
  <input type="text" name="date" id="date"></br>
  <button>ADD</button>
</form>
</body>
</html>