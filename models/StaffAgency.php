<?php

class StaffAgency

{

    public $SA_ID,$S_ID,$S_Name;



    public function __construct($SA_ID,$S_ID,$S_Name)

    {

        $this->SA_ID = $SA_ID;
        $this->S_ID = $S_ID;
        $this->S_Name = $S_Name;
    }



    public static function getAll()

    {
    

        $StaffAgencyList = [];

        require("connect_connection.php");

        $sql = "SELECT * FROM StaffAgency NATURAL JOIN Staff";

        $result = $conn->query($sql);

        while ($my_row = $result->fetch_assoc()) {

            $SA_ID= $my_row[SA_ID];
            $S_ID = $my_row[S_ID];
            $S_Name = $my_row[S_Name];

            $StaffAgencyList[] = new StaffAgency($SA_ID,$S_ID,$S_Name);

        }

        require("connection_close.php");

        return $StaffAgencyList;

    }

}
