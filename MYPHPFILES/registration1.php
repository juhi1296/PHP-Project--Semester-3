<form action="validation1.php" method="post">
<table>
<tr><td><?php
if(isset($_GET['msg']))
echo $_GET['msg'];
?>
</td></tr>

<tr><td>UserName:</td><td><input type="text" name="unm"/></td></tr>
<tr><td>
New Password:</td><td><input type="password" name="pwd"/></td></tr>
<tr><td>
<tr><td>
Confirm Password:</td><td><input type="password" name="cpwd"/></td></tr>
<tr><td>
<tr><td>
Gender:</td><td><input type="radio" name="sex" value="male" checked> Male
  
  <input type="radio" name="sex" value="female"> Female</td></tr>
  <tr><td>
  BirthDate:</td><td><select name="day">
                <?php
                       for($i=1;$i<32;$i++)
                       {
                                echo"<option value=\"".$i."\">".$i."</option>";
                        }
                 ?>
                 </select>
                 <select name="mm">
                  <?php
                       for($i=1;$i<13;$i++)
                       {
                                echo"<option value=\"".$i."\">".$i."</option>";
                        }
                 ?>
                 </select>
                 <select name="year">
                  <?php
                       for($i=1947;$i<2017;$i++)
                       {
                                echo"<option value=\"".$i."\">".$i."</option>";
                        }
                 ?>
                 </select>
                       
                        
   </tr></td>
   <tr><td>Intersetd In:</td><td>
    <input type="checkbox" name="interest" value="training"> Training
        <input type="checkbox" name="interest" value="placement"> Placement
   </tr></td>
   <tr><td>Achievements:</tr></td>
   <tr><td><textarea rows="4" cols="50" name="achieve"></textarea></tr></td>
   
   <tr><td>Select Your File: </td> <td colspan="2"><input type="file" name="myFile" id="myFile"></td>
   <tr><td><input type="submit" value="submit"></td>
        <td><input type="reset" value="reset"></td>
        <td><a href="indexn.php"><input type="button" value="Home"></a></td></tr>
        
   </table>
   </form>
