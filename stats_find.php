<?php 

require_once("includes/connection.php");

$sql="SELECT 
	`date`,
	`hosts`,
	`views`
FROM  `visits` ORDER BY `date` DESC";

$result = mysqli_query($con,$sql);

$table = '
		<tr>
			<th>Дата</th>
			<th>Количество посетителей</th>
			<th>Количество просмотров</th>
		</tr>
';			 

if (mysqli_num_rows($result) > 0){
  while($row = mysqli_fetch_array($result)){
	
  	$table .= '<tr>
  					<td>'.$row[0].'</td>
  					<td>'.$row[1].'</td>
  					<td>'.$row[2].'</td>
  				</tr>\n';
	
  }

}else{
  $table = 'Нет результатов!';
}
echo $table;

?>