<?php
include_once 'include/header.php';
include_once 'php_action/connect.php';
?>
<table id="contentbox">
		<tr>
			<td >
	<script language="javascript">
function Clickheretoprint()
{ 
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,widtd=900, height=400, left=100, top=25"; 
  var content_vlue = document.getElementById("print_content").innerHTML; 
  
  var docprint=window.open("","",disp_setting); 
   docprint.document.open(); 
   docprint.document.write('<html><head><title>List of Passer</title>'); 
   docprint.document.write('</head><body onLoad="self.print()" style="widtd: 900px; font-size:16px; font-family:arial;">');          
   docprint.document.write(content_vlue);          
   docprint.document.write('</body></html>'); 
   docprint.document.close(); 
   docprint.focus(); 
}
</script>
<style>
#print_content{
width:434px;
margin:0 auto;
}
</style>

<div id="print_content">
<br><br>
<center>

<br><br>
<p align="center"><font face="arial" color="#336699" size="3px"></font></p>
<br>
<table width="620px" align="center"><tr><td><p><font >  
  </font></p>
  </td></tr>
    </div>     
 <div id="image">
   <div id="sidebar1">
  <center><h3>Sales Report Result</h3>
  
  <p> <font size="3"></font></p>
<?php
@$db = new mysqli('localhost', 'root', '', 'storage');
if (mysqli_connect_errno()) {
echo 'Error: Could not connect to database. Please try again later.';
exit;
}
$dip="100";
$d="200";
$deg="201";
$de="500";
$Mas="501";
$m="1000";
$doc="1001";
$m="aaaa";
$f="Food";
$mdipquery ="SELECT* FROM sales where  sprice<='".$d."' AND sprice>='".$dip."' AND product_name='".$m."'";
$mdipres=@$db->query($mdipquery);  
$mdipnum_results = $mdipres->num_rows;

$fdipquery ="SELECT* FROM sales where sprice<='".$d."' AND sprice>='".$dip."'  AND product_name='".$f."'";
$fdipres=@$db->query($fdipquery);  
$fdipnum_results = $fdipres->num_rows;

$mdegquery ="SELECT* FROM sales where sprice<='".$de."' AND sprice>='".$deg."'  AND product_name='".$m."'";
$mdegres=@$db->query($mdegquery);  
$mdegnum_results = $mdegres->num_rows;

$fdegquery ="SELECT* FROM sales where sprice<='".$de."' AND sprice>='".$deg."'  AND product_name='".$f."'";
$fdegres=@$db->query($fdegquery);  
$fdegnum_results = $fdegres->num_rows;

$mMasquery ="SELECT* FROM sales where sprice<='".$m."' AND sprice>='".$Mas."' AND product_name='".$m."'";
$mMasres=@$db->query($mMasquery);  
$mMasnum_results = $mMasres->num_rows;

$fMasquery ="SELECT* FROM sales where sprice<='".$m."' AND sprice>'".$Mas."' AND product_name='".$f."'";
$fMasres=@$db->query($fMasquery);  
$fMasnum_results = $fMasres->num_rows;


$mdocquery ="SELECT* FROM sales where  sprice>='".$doc."'  AND product_name='".$m."'";
$mdocres=@$db->query($mdocquery);  
$mdocnum_results = $mdocres->num_rows;

$fdocquery ="SELECT* FROM sales where sprice>='".$doc."'  AND product_name='".$f."'";
$fdocres=@$db->query($fdocquery);  
$fdocnum_results = $fdocres->num_rows;

 
$dipt=$fdipnum_results+$mdipnum_results;
$degt=$fdegnum_results+$mdegnum_results;
$mast=$fMasnum_results+$mMasnum_results;
$doct=$fdocnum_results+$mdocnum_results;



echo'<table  align="center"border = 5 class="tble";text-size="16" width="90%">
      <tr bgcolor="#996633"><th>Sell Price </th><th>Water</th><th>Food</th><th>Total</th></tr>
	  <tr align="center" >
	  <td>1-100</td>
	  <td >'.$mdipnum_results.'</td>
	  <td >'.$fdipnum_results.'</td>
	  <td  >'.($dipt).'</td>
	  </tr>
	  <tr align="center" >
	  <td>100-200</td>
	  <td >'.$mdipnum_results.'</td>
	  <td >'.$fdipnum_results.'</td>
	  <td  >'.($dipt).'</td>
	  </tr>
	  <tr align="center">
	  <td>201-500</td>
	  <td >'.$mdegnum_results.'</td>
	  <td>'.$fdegnum_results.'</td>
	  <td >'.($degt).'</td>
	  </tr>
	  <tr align="center">
	  <td>501-1000</td>
	  <td >'.$mMasnum_results.'</td>
	  <td >'.$fMasnum_results.'</td>
	  <td >'.($mast).'</td>
	  </tr>
	  
	  
	   <tr align="center">
	   <td>More than 1001</td>
	   <td >'.$mdocnum_results.'</td>
	   <td  >'.$fdocnum_results.'</td>
	   <td >'.($doct).'</td>
	   </tr>
	  <tr align="center">
	  <td colspan="3" align="right">Grand Total</td>
	  <td ><b>'.($doct+$mast+$degt+$dipt).'</b></td>
	  </tr>
	  </table>';

$db->close();

?>
 
      </center>                             
  
     </div> 
 <br /><br />
            </div>  
    
      </div>
      
           
    </div>
        <!-- row end -->
  </div>
<div style="margin-left:90%; width:50px;  text-align:center;"> 
<a href="javascript:Clickheretoprint()"><img src="image/print.png" width="160" align="centre" height="130"></a></div>

  </td><tr>
  </td><tr>
  </table>
   
