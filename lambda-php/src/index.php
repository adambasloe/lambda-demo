<html>
	<head></head>
    <body>
   	<?php
		$response = json_decode(file_get_contents('http://nodeapi:8081/tasks'));
		$i = 1;
		foreach($response as $todo) { 
			echo "Task $i | ID = $todo->_id: $todo->name<br/>";
			$i++;
		}		
	?> 
    </body>
</html>

