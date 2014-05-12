<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>My Daily Expenses</title>
</head>

<body bgcolor="#FFCC99">
<h4 align="center" style="background-color:#FF6666">My Daily Expenditures Data</h4>
<fieldset  style="border-radius :50px;">
<form action="total.php" method="get">


<table  align="center" bgcolor="#FF0000" width="500" style="border-radius:5px;">
<tr  ><td colspan="2" align="center" bgcolor="#CC3366" > <b>Daily Ka Hisab!!</b> </td> </tr>
 
<tr align="center"> <td  style= "border-radius:5px; border:solid #000000"> <b>Date</b>  </td>
<td> <input type = "text" name= "Date" placeholder= " DD/MM/YYYY " style ="border-radius:5px; background-color:#FFFF00" title="Enter Date Here " > </td> 
</tr>
<tr align="center"> <td  style= "border-radius:5px; border:solid #000000"> <b>Food</b>  </td>
<td> <input type = "text" name= "Food" placeholder= " INR(Rs) " style ="border-radius:5px; background-color:#FFFF00" title="Enter Food Expanses" > </td> 
</tr> 
<tr align="center"> <td  style= "border-radius:5px; border:solid #000000"> <b>Transport</b>  </td>
<td> <input type = "text" name="Transport"placeholder="INR(Rs)"style ="border-radius:5px; background-color:#FFFF00" title="Enter transport Expanses" > </td> 
</tr> 
<tr align="center"> <td  style= "border-radius:5px; border:solid #000000"> <b>Restaurant</b>  </td>
<td> <input type = "text" name= "Rest." placeholder= " INR(Rs) "style ="border-radius:5px; background-color:#FFFF00" title="Enter Rest. Expanses" > </td> 
</tr>
<tr align="center"> <td  style= "border-radius:5px; border:solid #000000"> <b>Entertainment</b>  </td>
<td> <input type = "text" name= "Entmnt." placeholder= " INR(Rs) " style ="border-radius:5px; background-color:#FFFF00" title="Enter Expanses of Entertainment" > </td> 
</tr>
<tr align="center"> <td  style= "border-radius:5px; border:solid #000000"> <b>Other</b>  </td>
<td> <input type = "text" name= "Other" placeholder= " INR(Rs) " style ="border-radius:5px; background-color:#FFFF00" title="Enter Other Expenses" > </td> 
</tr> 
<tr><td colspan="2"  align="center"  ><input type="submit" name="Submit" style="border-radius:5px; border: medium #993300"> </td></tr>
 </table>
 

<table align="center" bgcolor="#CC66CC"  style="border-radius:10Px;">
<tr><td>Total</td>
<td><input type="text" name="ttl" placeholder="Total INR (Rs) is " /></td></tr></table></fieldset>
</form>
 <table align="left" bgcolor="#CC6666">
<tr align="center"> <td> Details  </td>
<td>For Update Data </td>
<tr/>
<tr align="center"><td width "250"><button type="button" style="border-radius:5px;" title="Click Here">check here </button></td>
<td width "250"><button type="button" style="border-radius:5px;" title="Click Here">Update here </button></td></tr>
</table>




</body>
</html>
