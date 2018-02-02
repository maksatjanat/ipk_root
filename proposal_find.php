<?php 

require_once("includes/connection.php");

$sql="SELECT 
	`proposal`.`id`,
	`person`.`FirstName`,
	`person`.`SurName`,
	`proposal`.`proposal`,
	`proposal`.`date`
FROM  `tbl_proposal` AS  `proposal` 
JOIN  `tbl_persona` AS  `person` ON  `proposal`.`person_id` =  `id_persona` ";

$result = mysqli_query($con,$sql);

$string =  '<tr>
				<th width="10%">ID</th>
				<th colspan="2" width="30%">Имя пользователя</th>
				<th width="50%">Предложение</th>
				<th width="20%">Дата</th>
		 	</tr>';

if (mysqli_num_rows($result) > 0){
  while($row = mysqli_fetch_array($result)){
	
  	$string .= '<tr>
  					<td>'.$row[0].'</td>
  					<td>'.$row[1].'</td>
  					<td>'.$row[2].'</td>
  					<td>'.$row[3].'</td>
  					<td>'.$row[4].'</td>
  				</tr>\n';
	
  }

}else{
  $string = "Нет результатов!";
}
echo $string;

 ?>