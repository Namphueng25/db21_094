<?php

class LaboratoryStaff

{

    public $Id_Ls,$FName_Ls,$LName_Ls;



    public function __construct($Id_Ls,$FName_Ls,$LName_Ls)

    {

        $this->Id_Ls = $Id_Ls;
        $this->FName_Ls = $FName_Ls;
        $this->LName_Ls = $LName_Ls;

    }



    public static function getAll()

    {
    
      

        $LaboratoryStaffList = [];

        require("connect_connection.php");

        $sql = "SELECT * FROM LaboratoryStaff";

        $result = $conn->query($sql);

        while ($my_row = $result->fetch_assoc()) {
            
            $Id_Ls= $my_row[Id_Ls];

            $FName_Ls = $my_row[FName_Ls];

            $LName_Ls = $my_row[LName_Ls];

            $LaboratoryStaffList[] = new LaboratoryStaff($Id_Ls,$FName_Ls,$LName_Ls);

        }

        require("connection_close.php");

        return $LaboratoryStaffList;

    }
    public static function search($key)
    {
        $LaboratoryStaffList = [];
        require("connect_connection.php");
        $sql = "SELECT * from LaboratoryStaff where (Id_Ls like'%$key%' or FName_Ls like'%$key%'or LName_Ls like'%$key%')";

        $result = $conn->query($sql);
        while ($my_row = $result->fetch_assoc()) {

            $Id_Ls= $my_row[Id_Ls];

            $FName_Ls = $my_row[FName_Ls];

            $LName_Ls = $my_row[LName_Ls];

            $LaboratoryStaffList[] = new LaboratoryStaff($Id_Ls,$FName_Ls,$LName_Ls);

        }
        require("connection_close.php");

        return $LaboratoryStaffList;
    }
    public static function Add($Id_Ls,$FName_Ls,$LName_Ls)

    { 

        require("connect_connection.php");

      

       $sql = "INSERT INTO `LaboratoryStaff` (`Id_Ls`, `FName_Ls`, `LName_Ls`) VALUES ('$Id_Ls', '$FName_Ls', '$LName_Ls')";

       $result = $conn->query($sql);

       require("connection_close.php");

       return  ;

    }
    public static function get($id)
    {
        
        require("connect_connection.php");
        $sql = "SELECT * FROM LaboratoryStaff WHERE Id_Ls = '$id'";
        $result=$conn->query($sql);
        $my_row=$result->fetch_assoc();
        
                $Id_Ls= $my_row[Id_Ls];
    
                $FName_Ls = $my_row[FName_Ls];
    
                $LName_Ls = $my_row[LName_Ls];

        require("connection_close.php");
        return new LaboratoryStaff($Id_Ls,$FName_Ls,$LName_Ls);

    }


    public static function Update($Id_Ls,$FName_Ls,$LName_Ls,$oldid)
    {
       require("connect_connection.php");
       $sql="UPDATE `LaboratoryStaff` SET `Id_Ls`='$Id_Ls',`FName_Ls`='$FName_Ls',`LName_Ls`='$LName_Ls' WHERE Id_Ls = '$oldid'";
       $result=$conn->query($sql);
       require("connection_close.php");
       return ;
    }


   public static function delete($id)

   {

       require("connect_connection.php");

       $sql = "DELETE FROM LaboratoryStaff WHERE Id_Ls = '$id'";

       $result = $conn->query($sql);

       require("connection_close.php");

       return ;

   }
}
