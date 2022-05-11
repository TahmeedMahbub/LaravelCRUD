<style>
      table, th, td {
      border: 1px solid black;
      border-collapse: collapse;};
</style>
@include('home') <br>
<form action="/search" method="post">
{{@csrf_field()}}
      <input type="text" name="search" id="" placeholder="Search here...">
      <input type="submit" value="Search">
</form>
<br><br><br><br>
@if(isset($crudsearch))
<table>
      <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Phone</td>
            <td>Address</td>
            <!-- <td>Profile Picture</td> -->
            <td>Password</td>
            <td>Edit</td>
            <td>Delete</td>
      </tr>
@foreach ($crudsearch as $c)
<tr>
            <td>{{$c->id}}</td>
            <td>{{$c->name}}</td>
            <td>0{{$c->phone}}</td>
            <td>{{$c->address}}</td>
            <!-- <td>{{$c->dp}}</td> -->
            <td>{{$c->pass}}</td>
            <td><form action="/edit/{{$c->id}}">{{@csrf_field()}}<input type="submit" value="Edit"></form></td>
            <td><form action="/del/{{$c->id}}">{{@csrf_field()}}<input type="submit" value="Delete"></form></td>
      </tr>
@endforeach

</table>
@endif

