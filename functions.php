<?php
$dbhost = 'localhost';  // host address
$dbname = 'invoice';  // name of database
$dbuser = 'root';  // user_id of database
$dbpass = ''; // password of database


////This is the area for customisation according to your company////
//details of company
$company_name='COMPANY NAME';
$company_name_s='Company Name';
$title1='My title1 ';
$title2='my title 2';
$gstState='GSTIN: gstno here  STATE: sc - CODE: xx';
$cpy_addr_l1='address line 1';
$cpy_addr_l2='addressline 2';
$cpy_addr_l3='zipcode (sc)';
$cpy_mob='MOB.: 99999999';
$c_city='myCity';
//company bank details
$acc_num='A/C No. : my acc no';
$bank_name='Bank : my bank';
$branch_addr='Branch : my bank place';
$branch_ifsc='IFSC Code : bank ifsc ';
//user name
$user_name="User";

mysql_connect($dbhost, $dbuser, $dbpass) or die(mysql_error());
if(databaseExists($dbname))
{
mysql_select_db($dbname) or die(mysql_error());
}

function databaseExists($dbname)
{
$query="SHOW databases";
$result=mysql_query($query);
$rows=mysql_num_rows($result);
for($i=0;$i<$rows;$i++)
{
$d=mysql_result($result,$i,'Database');
if($d==$dbname)
{
$exists=1;
}
}
if(isset($exists))
{
return 1;
}
else 
{
return 0;
}
}
?>