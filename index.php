<?php

    include './classes/date.php';
    include './arrays/arrays.php';
    include './functions/csv.php';
    include './functions/get-data.php';
    ini_set('memory_limit', '5544M'); // to prevent timeout on 1000 000 records

?>
  
   <form action="" method="post">
    Enter the  Number of records required: <input type="text" name="records"><br>
   
    <button name = "getNames"> generate/download csv File </button>
    </form>
    <br>

<?php
    if(isset($_POST['getNames'])){
        $numberOfRecords = $_POST['records'];

        if(!empty($numberOfRecords)){
            getRecords($names,$surnames,$numberOfRecords);
            echo"CSV is downloaded successfully<br>";
        } else {
            echo"Unable to process CSV <br>";
        }
    }
   
    include 'view-csv.php'; // script to view csv on the browser

    

    ?>



