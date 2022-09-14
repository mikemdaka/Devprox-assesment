<?php
    //generate random names and surnames
    function getRecords($namesArray,$surnamesArray,$numberOfRecords){
        $dob = new age();
        $date1 = '1942/01/01';
        $date2 = '2022/09/31';
        $count = $numberOfRecords;
        $people = array();
        $names = $namesArray;
        $surnames = $surnamesArray;

        //loop through the array the desired number of times
        for($i = 0; $i<=$count;$i++){
            
            $randomName = $names[mt_rand(0, sizeof($names) - 1)];
            
            
            $randomSurname = $surnames[mt_rand(0, sizeof($surnames) - 1)];
    
            $dob->setDateOfBirth( $date1, $date2 );
            $dateOfBirth =  $dob->getDateOfBirth();
            $dob->setAge($dateOfBirth);
            $age = $dob->getAge();
            $initial = substr($randomName, 0, 1);
            $id = $i + 1;
            $people[$i] = array(
                "id" => $id,
                "name" => $randomName,
                "surname" => $randomSurname,
                "initials" => $initial,
                "age" => $age,
                "date Of Birth" => $dateOfBirth
    
            );
           
        }
       //download the csv file
       downloadCsv($people);
    }

    ?>