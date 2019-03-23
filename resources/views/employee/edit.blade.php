<!DOCTYPE html>
<html>
<head>
	<title>Edit Employee Profile</title>
</head>
<body>
 
	<h2><a href="https://www.malasngoding.com">www.employeeprofile.com</a></h2>
	<h3>Edit Employee Profile</h3>
 
	<a href="/employee"> Back</a>
	
	<br/>
	<br/>
 
	@foreach($employee as $e)
	<form action="/employee/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $e->EmployeeId }}"> <br/>
		Name <input type="text" required="required" name="name" value="{{ $e->EmployeeName }}"> <br/>
		Job Position <input type="text" required="required" name="position" value="{{ $e->EmployeePosition }}"> <br/>
		Age <input type="number" required="required" name="age" value="{{ $e->EmployeeAge }}"> <br/>
		Address <textarea required="required" name="address">{{ $e->EmployeeAddress }}</textarea> <br/>
		<input type="submit" value="Save">
	</form>
	@endforeach
		
 
</body>
</html>