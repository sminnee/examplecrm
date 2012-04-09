<!DOCTYPE html>
<html>
<head>
	<% base_tag %>
	<title>Company contact list: $Company.Name</title>
</head>

<body>
	<h1>Company Contact List</h1>
	<% with Company %>
	<h2>$Name</h2>
	<p><a href="$Website">$Website</a<></p>
	<p>$Address</p>
	
	<% if Contacts %>
	<h2>Contacts</h2>
	<ul>
	<% loop Contacts %>
	<li>
		<div>$FirstName $Surname</div>
		<div><a href="mailto:$Email">$Email</a></div>
		<div>$Phone</div>
	</li>
	<% end_loop %>
	</ul>
	<% end_if %>
	<% end_with %>
</body>
</html>