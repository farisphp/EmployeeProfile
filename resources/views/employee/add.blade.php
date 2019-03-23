<html>
<head>
	<title>Add Employee Profile</title>
</head>
<body>
 
	<h2><a href="http://www.employeeprofile.com">www.employeeprofile.com</a></h2>
	<h3>Employee Profile</h3>
 
	<a href="/employee"> Back</a>
	
	<br/>
	<br/>
 
	<form action="/employee/store" method="post">
		{{ csrf_field() }}
		Name <input type="text" name="name" required="required"> <br/>
		Job Position <input type="text" name="position" required="required"> <br/>
		Age <input type="number" name="age" required="required"> <br/>
		Address <textarea name="address" required="required"></textarea> <br/>
		<input type="submit" value="Add Employee Profile">
	</form>
 
</body>
</html>