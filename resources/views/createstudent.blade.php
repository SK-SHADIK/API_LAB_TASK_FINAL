@extends('main')
@section('content')
<style>
    h1{
        font-size: 30px;
        text-align: center;
        margin-bottom:50px;
    }
    form{
        text-align: center;
    }
    .error{
        color:red;
    }
</style>
<h1>CREATE A STUDENT</h1>
<form action="" method="post">
{{@csrf_field()}}
   <!--NAME-->
  <label for="name">Name:</label><br>
  <input type="text"  name="name" value="{{old('name')}}"><br>
  @error('name')
        <span class="error">{{$message}}</span><br>
  @enderror
  <!--ID-->
  <label for="id">ID:</label><br>
  <input type="text"  name="id" value="{{old('id')}}"><br>
  @error('id')
        <span class="error">{{$message}}</span><br>
  @enderror
  <!--DATE OF BIRTH-->
  <label for="dob">Date Of Birth:</label><br>
  <input type="date"  name="dob" value="{{old('dob')}}"><br>
  @error('dob')
        <span class="error">{{$message}}</span><br>
  @enderror
  <!--EMAIL-->
  <label for="email">Email:</label><br>
  <input type="text"  name="email" value="{{old('email')}}"><br>
  @error('email')
        <span class="error">{{$message}}</span><br>
  @enderror
  <!--PHONE-->
  <label for="phone">Phone Number:</label><br>
  <input type="text"  name="phone" value="{{old('phone')}}"><br>
  @error('phone')
        <span class="error">{{$message}}</span><br>
  @enderror
  <br><br>

  <!--SUBMIT-->
  <input type="submit" value="Submit">
</form>
@endsection