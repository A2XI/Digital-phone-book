<?php 
require_once 'connection.php';

if(isset($_POST['input'])){
    $reg_input = "%" . $_POST['input'] . "%";

    $query = "SELECT * FROM phone_book WHERE first_name LIKE '$reg_input' OR last_name LIKE '$reg_input' OR email LIKE '$reg_input'";

    $result = $conn->query($query);

    if(mysqli_num_rows($result) > 0){
        echo "<table class='table table-light table-hover'>";
        echo "<thead>";
        echo "<tr>";
            echo "<th>First Name</th>";
            echo "<th>Last Name</th>";
            echo "<th>Phone Number</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
            foreach($result as $r){
                if($r['active'] == 1){
                    echo "<tr style='border-collapse: collapse;'>";
                    echo "<td>" . $r['first_name'] . "</td>";
                    echo "<td>" . $r['last_name'] . "</td>";
                    echo "<td>" . $r['phone_number'] . "</td>";
                    echo "</tr>";
                }
            }
        echo "</tbody>";    
        echo "</table>";
        echo "</div>";
    } else {
        echo "<h5>No data were found.</h5>";
    }
}
?>