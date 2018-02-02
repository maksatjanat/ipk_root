<?php



# include data base
require_once("../includes/connection.php");

switch ($_POST['action']){
                
        case "showRegionForInsert":
                echo '<select size="1" name="region" onchange="javascript:selectCity();">';
                //$query_company="SELECT * FROM region WHERE id_country='".$_POST['id_country']."' ORDER BY region ASC";
				//$result_company=mysql_query($query_company,$con);
				$rows = $DB->select('SELECT * FROM region WHERE id_country=? ORDER BY region ASC', $_POST['id_country']);
				//$numrows=mysql_num_rows($query);
                foreach ($rows as $numRow => $row) {
                        echo '<option value="'.$row['id_region'].'">'.$row['region'].'</option>';
                };
                echo '</select>';
                break;
                
        case "showCityForInsert":
                echo '<select size="1" name="city">';
                $rows = $DB->select('SELECT * FROM city WHERE id_region=? ORDER BY city ASC', $_POST['id_region']);
                foreach ($rows as $numRow => $row) {
                        echo '<option value="'.$row['id_city'].'">'.$row['city'].'</option>';
                };
                echo '</select>';
                break;
        
};

?>
