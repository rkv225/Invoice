# Invoice
## Running
You must have a server running on your system such as WAMP, XAMP etc.
Extract the rar file and paste it into the working directory of the server.
Open the functions.php file and set the project according to your requirement
```PHP
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
```
Now import the database from the .sql file in the project directory or you can paste the queries into the command of your database to create the database.

## Screenshots
![image](https://github.com/rkv225/Invoice/blob/master/invoice-screens/mu.PNG)
![image](https://github.com/rkv225/Invoice/blob/master/invoice-screens/stateInfo.PNG)
![image](https://github.com/rkv225/Invoice/blob/master/invoice-screens/addCompany.PNG)
![image](https://github.com/rkv225/Invoice/blob/master/invoice-screens/addItem.PNG)
![image](https://github.com/rkv225/Invoice/blob/master/invoice-screens/company.PNG)
![image](https://github.com/rkv225/Invoice/blob/master/invoice-screens/items.PNG)
![image](https://github.com/rkv225/Invoice/blob/master/invoice-screens/bill1.PNG)
![image](https://github.com/rkv225/Invoice/blob/master/invoice-screens/bill2.PNG)
![image](https://github.com/rkv225/Invoice/blob/master/invoice-screens/bill3.PNG)
![image](https://github.com/rkv225/Invoice/blob/master/invoice-screens/bill4.PNG)
![image](https://github.com/rkv225/Invoice/blob/master/invoice-screens/viewBill.PNG)
![image](https://github.com/rkv225/Invoice/blob/master/invoice-screens/billDetail.PNG)
![image](https://github.com/rkv225/Invoice/blob/master/invoice-screens/PDFinvoice.PNG)
