<html>
<head>
	<title>Profile of Employees</title>
</head>
<body>
	<style type="text/css">
		.pagination li{
			float: left;
			list-style-type: none;
			margin:5px;
		}
	</style>
 
	<h2>www.employeeprofile.com</h2>
	<h3>Profile of Employees</h3>
 
	<a href="/employee/add"> + New Employee Profile</a>
	
	<br/>
	<br/>
 
	<table border="1">
		<tr>
			<th>Name</th>
			<th>Job Position</th>
			<th>Age</th>
			<th>Address</th>
			<th>Option</th>
		</tr>
		@foreach($employee as $e)
		<tr>
			<td>{{ $e->EmployeeName }}</td>
			<td>{{ $e->EmployeePosition }}</td>
			<td>{{ $e->EmployeeAge }}</td>
			<td>{{ $e->EmployeeAddress }}</td>
			<td>
				<a href="/employee/edit/{{ $e->EmployeeId }}">Edit</a>
				|
				<a href="/employee/delete/{{ $e->EmployeeId }}">Delete</a>
			</td>
		</tr>
		@endforeach
	</table>
	<br/>

	Page : {{ $employee->currentPage() }} <br/>
	Total Data : {{ $employee->total() }} <br/>
	Data Per Page : {{ $employee->perPage() }} <br/>
 
 
	{{ $employee->links() }}
 
 
</body>
</html>