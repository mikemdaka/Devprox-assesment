<?php
class age{

    public $dateOfBirth;
    public $age;
     

    function __construct(){
        
        
    }

    //set the random date of bith between a range of two dates
    function setDateOfBirth( $date1, $date2 ){
        if (!is_a($date1, 'DateTime')) {
            $date1 = new DateTime( (ctype_digit((string)$date1) ? '@' : '') . $date1);
            $date2 = new DateTime( (ctype_digit((string)$date2) ? '@' : '') . $date2);
        }
        $random_u = random_int($date1->format('U'), $date2->format('U'));
        $random_date = new DateTime();
        $random_date->setTimestamp($random_u);
        $this->dateOfBirth = $random_date->format('Y/m/d');
    }

    //get the date of birth
    function getDateOfBirth(){
        return $this->dateOfBirth;
    }

    //set the age using the date of birth
    function setAge($birth_year){
        $dateOfBirth = $birth_year;
        $today = date("Y/m/d");
        $diff = date_diff(date_create($birth_year), date_create($today));
        $this->age = $diff->format('%y');
    }

    //get the age
    function getAge(){
        return $this->age;
    }
}

?>
