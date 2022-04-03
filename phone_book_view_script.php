<?php
require_once 'connection.php';

$sql = "SELECT * FROM phone_book ORDER BY last_name;";

if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table class='table table-light table-hover'>";
            echo "<thead>";
            echo "<tr>";
                echo "<th>First Name</th>";
                echo "<th>Last Name</th>";
                echo "<th>Phone Number</th>";
                echo "<th>Postal Code</th>";
                echo "<th>Actions</th>";
            echo "</tr>";
            echo "</thead>";
        echo "<tbody>";
            while($row = mysqli_fetch_array($result)){
                if($row['active'] == 1){
                echo "<tr style='border-collapse: collapse;'>";
                    echo "<td>" . $row['first_name'] . "</td>";
                    echo "<td>" . $row['last_name'] . "</td>";
                    echo "<td>" . $row['phone_number'] . "</td>";
                    echo "<td>" . $row['postal_code'] . "</td>";
                    echo "<td>";
                        echo "<div>";
                            echo "<button type='button' class='btn btn-outline-dark dropdown-toggle'
                            data-bs-toggle='dropdown' aria-expanded='false'>Actions</button>";
                            echo "<ul class='dropdown-menu'>";
                                echo "<li><a class='dropdown-item' href='update.php?edit=" . $row['id'] . "'>Edit</a></li>";
                                echo "<li><a class='dropdown-item' href='process.php?delete=" . $row['id'] . "'>Delete</a></li>";
                                echo "<li><a class='dropdown-item' href='process.php?inactivate=" . $row['id'] . "'>Inactivate</a></li>";
                            echo "</ul>";
                        echo "</div>";
                    echo "</td>";
                }
                echo "</tr>";
                }
            echo "</tbody>";
        echo "</table>";
        mysqli_free_result($result);
    } else {
        echo "<h4>There are no records</h4>";
    }
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
?>