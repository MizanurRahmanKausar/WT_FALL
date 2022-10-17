<?php
include("../control/process.php");
?>

<html>
 
<head>
 
        <title> My home </title>
 
        </head>
 
<body>
 

 
        <h1>Tour Planner</h1>
 
        <form action="" method="post">
 
<table>
 
<tr>
 
  <td>Your Name</td> 
 
  <level for="gender"></level>
 
 <td> <select id="gender" name="gender">
 
  <option value="Mr.">Mr.</option>
 
  <option value="Ms.">Ms.</option>
 
<input type="text" name="name" placeholder="Enter your full name"> </td>
<td><?php echo $nameError; ?></td>
 
</tr>
 
<tr>
 
  <td>Father's name</td> 
 
<td> <input type="text" placeholder="Enter your father's name"> </td>
 
</tr>
 
<tr>
 
  <td>Mother's name</td> 
 
<td> <input type="text" placeholder="Enter your mother's name"> </td>
 
</tr>
 
<tr>
 
  <td> Select Your Gender: </td>
 
</tr>
 
<tr>
 
<td> Male<input type ="radio" name="gender"> </td>
 
<td> Female<input type ="radio" name="gender"> </td>
<td> Other<input type ="radio" name="gender"> </td>
 
</tr>
<tr>
 
  <td>Select Your Marital Status: </td>
 
</tr>
 
<tr>
 
<td> Bachelor<input type ="radio" name="Marital Status"> </td>
 
<td> Married<input type ="radio" name="Marital Status"> </td>
 
</tr>
 
<tr>
 
 
  <td>Email Id</td> 
 
<td> <input type="text" placeholder="Enter your email"> </td>
 
</tr>

<tr>
 
 
  <td>Total Member</td> 
 
<td> <input type="text" placeholder="Enter your Total Member"> </td>
 
</tr>
 
<tr>
 

<tr>
 
  <td>Select Your Hotel Type: </td>
 
</tr>
 
<tr>
 
<td> 3 star<input type ="radio" name="Hotel Type"> </td>
 
<td> 5 star<input type ="radio" name="Hotel Type"> </td>
 
</tr>
 
  <td>Arrived Date</td> 
 
<td> <input type="text" placeholder="Enter your Arrived Date"> </td>
 
</tr>

<tr>
 
 
  <td>Mobile No.</td> 
 
<td> <input type="text" placeholder="Enter your Mobile No."> </td>
 
</tr>
<tr>
 
 
 <td>NID Card Number.</td> 

<td> <input type="text" placeholder="Enter your NID Card Num.  "> </td>

</tr>
 
<tr>
 
  <td>Address</td> 
 
<td> <textarea name="message"rows="5" cols="30"> </textarea></td>
 
</tr>
 
 
  <td>State</td> 
 
<td> <input type="text" placeholder="Your state"> </td>
 
</tr>
 
<tr>
 
 
  <td>City</td> 
 
<td> <input type="text" placeholder="your city"> </td>
 
</tr>
 
<tr>
 
  <td><input type="submit" name="enter"></td>
 
</tr>
 
 
</table>
 
</body>
 
</html>