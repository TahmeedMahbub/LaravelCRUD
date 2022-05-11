@include('home') <br>

<table>
<form action="/edit/{{$crudedit->id}}" method="post">
{{@csrf_field()}}
      <tr>
            <td>Name:</td>
            <td><input type="text" name="name" value="{{$crudedit->name}}"></td>
      </tr>
      <tr>
            <td>Phone:</td>
            <td><input type="number" name="phone" value="0{{$crudedit->phone}}"></td>
      </tr>
      <tr>
            <td>Address:</td>
            <td><input type="text" name="address" value="{{$crudedit->address}}"></td>
      </tr>
      <tr>
            <td>Password:</td>
            <td><input type="password" name="pass" value="{{$crudedit->pass}}"></td>
      </tr>
      <tr><td colspan="2"><center><input type="submit"></center></td></tr>
      
</form>
</table>
