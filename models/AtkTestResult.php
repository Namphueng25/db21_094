<?php

class AtkTestResult

{

    public $ATR_id,$ATR_color,$ATR_symptom;



    public function __construct($ATR_id,$ATR_color,$ATR_symptom)

    {

        $this->ATR_id = $ATR_id;
        $this->ATR_color = $ATR_color;
        $this->ATR_symptom = $ATR_symptom;
    }



    public static function getAll()

    {
    

        $AtkTestResultList = [];

        require("connect_connection.php");

        $sql = "SELECT * FROM AtkTestResult";

        $result = $conn->query($sql);

        while ($my_row = $result->fetch_assoc()) {

            $ATR_id= $my_row[ATR_id];
            $ATR_color = $my_row[ATR_color];
            $ATR_symptom = $my_row[ATR_symptom];

            $AtkTestResultList[] = new AtkTestResult($ATR_id,$ATR_color,$ATR_symptom);

        }

        require("connection_close.php");

        return $AtkTestResultList;

    }

}
