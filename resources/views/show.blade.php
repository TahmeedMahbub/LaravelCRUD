<style>
            table, th, td {
                  border: 1px solid black;
                  border-collapse: collapse;};
      </style>
      
@include('home') <br>

<table>
      <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Phone</td>
            <td>Address</td>
            <!-- <td>Profile Picture</td> -->
            <td>Password</td>
            <td>Enter Password</td>
            <td>Edit</td>
            <td>Delete</td>
      </tr>
@foreach ($crud as $c)
<tr><form action="/editdel/{{$c->id}}" method="post">{{@csrf_field()}}
      <td>{{$c->id}}</td>
      <td>{{$c->name}}</td>
      <td>0{{$c->phone}}</td>
      <td>{{$c->address}}</td>
      <!-- <td>{{$c->dp}}</td> -->
      <td>{{$c->pass}}</td>
      <td><input type="password" name="typepass" placeholder="Confirm your password..."></td>
      <td><input type="submit" name="do" value="Edit"></td>
      <td><input type="submit" name="do" value="Delete"></td>
</form></tr>
@endforeach

</table>