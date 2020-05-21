<?php
//Including Database configuration file.
include "database.php";

//Getting value of "search" variable from "script.js".
if (isset($_POST['search'])) 
{
  
//Search box value assigning to $Name variable.
   $Name = $_POST['search'];
     // echo "hi2";

//Search query.
   $Query = "SELECT Name FROM search WHERE Name LIKE '%$Name%' LIMIT 5";
//Query execution
      //echo "hi3";

   $ExecQuery = MySQLi_query($db, $Query);
//Creating unordered list to display result.
  // echo "hi4";

   //Fetching result from database.
while ($Result = MySQLi_fetch_array($ExecQuery)) {
    ?>
   <!-- Creating unordered list items.
        Calling javascript function named as "fill" found in "script.js" file.
        By passing fetched result as parameter. -->
   <li onclick='fill("<?php echo $Result['Name']; ?>")'>
   <a>
   <!-- Assigning searched result in "Search box" in "search.php" file. -->
       <?php echo $Result['Name']; ?>
   </li></a>
   <!-- Below php code is just for closing parenthesis. Don't be confused. -->
   <?php
}
}
?>

