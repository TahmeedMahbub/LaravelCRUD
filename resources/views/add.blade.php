@include('home') <br>

<table>
<form action="/add" method="post">
{{@csrf_field()}}
      <tr>
            <td>Name:</td>
            <td><input type="text" name="name" ></td>
      </tr>
      <tr>
            <td>Phone:</td>
            <td><input type="number" name="phone"></td>
      </tr>
      <tr>
            <td>Address:</td>
            <td><input type="text" name="address"></td>
      </tr>
      <tr>
            <td>Password:</td>
            <td><input type="password" name="pass"></td>
      </tr>
      <tr><td colspan="2"><center><input type="submit"></center></td></tr>
      
</form>
</table>
