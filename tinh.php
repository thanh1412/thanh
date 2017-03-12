<!DOCTYPE html>
<html>
<body>
<center>
<table border='1'  bordercolor='red' width='400' height='200' cellspacing='5' cellpadding='5'>
<?php
    if(isset($_POST['xuly'])){


        $inrow=$_POST['dong'];
        $incol=$_POST['cot'];
$n=($incol-$inrow);
if($n==0)
  {
       for($row=0;$row<$inrow;++$row)
     {
echo "<tr></tr>";
       for($col=0;$col<$row+1; ++$col)
       {
echo "<td></td>";
       }
     }
 }

if($n<0)
{
       for($row=0;$row<$inrow;++$row)
     {
echo "<tr></tr>";
       for($col=0;$col<$row+1;++$col)
if($col<$incol){
       {
echo "<td></td>";
       }
     }
} 
}
if($n>0)
{
          for($row=0;$row<$inrow;++$row)
     {
echo "<tr></tr>";
$dem=$incol-($incol-($row+1));
       for($col=0;$col<$dem+$n; ++$col)
       {
echo "<td></td>";
       }
     }

}
        
 }
?>
</table>
<form name='form' method='post' action="index.php">

<input type="submit" name="back" value="quay ve" /> 
</form>
</center>

</body>	