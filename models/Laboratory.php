<?php

class Laboratory

{

    public $Id_Lab,$Name_Lab,$Id_Ls,$FName_Ls,$LName_Ls;



    public function __construct($Id_Lab,$Name_Lab,$Id_Ls,$FName_Ls,$LName_Ls)

    {

        $this->Id_Lab = $Id_Lab;
        $this->Name_Lab = $Name_Lab;
        $this->Id_Ls = $Id_Ls;
        $this->FName_Ls = $FName_Ls;
        $this->LName_Ls = $LName_Ls;
    }



    public static function getAll()

    {
    
        

        $LaboratoryList = [];

        require("connect_connection.php");

        $sql = "SELECT * FROM Laboratory NATURAL JOIN LaboratoryStaff ";

        $result = $conn->query($sql);
      
        while ($my_row = $result->fetch_assoc()) {

            $Id_Lab= $my_row[Id_Lab];

            $Name_Lab = $my_row[Name_Lab];

            $Id_Ls = $my_row[Id_Ls];
            $FName_Ls = $my_row[FName_Ls];
            $LName_Ls = $my_row[LName_Ls];

            $LaboratoryList[] = new Laboratory($Id_Lab,$Name_Lab,$Id_Ls,$FName_Ls,$LName_Ls);

        }

        require("connection_close.php");

        return $LaboratoryList;

    }
    public static function search($key)
    {
        $LaboratoryList = [];
        require("connect_connection.php");
        $sql = "SELECT * from Laboratory NATURAL JOIN LaboratoryStaff where (Id_Lab like'%$key%' or Name_Lab like'%$key%'or Id_Ls like'%$key%')";

        $result = $conn->query($sql);
        while ($my_row = $result->fetch_assoc()) {

            $Id_Lab= $my_row[Id_Lab];

            $Name_Lab = $my_row[Name_Lab];

            $Id_Ls = $my_row[Id_Ls];
            $FName_Ls = $my_row[FName_Ls];
            $LName_Ls = $my_row[LName_Ls];

            $LaboratoryList[] = new Laboratory($Id_Lab,$Name_Lab,$Id_Ls,$FName_Ls,$LName_Ls);

        }
        require("connection_close.php");

        return $LaboratoryList;
    }
    public static function Add($Id_Lab,$Name_Lab,$Id_Ls)

    { 

        require("connect_connection.php");

      

       $sql = "INSERT INTO `Laboratory` (`Id_Lab`, `Name_Lab`, `Id_Ls`) VALUES ('$Id_Lab', '$Name_Lab', '$Id_Ls')";

       $result = $conn->query($sql);

       require("connection_close.php");

       return  ;

    }
    public static function get($id)
    {
        
        require("connect_connection.php");
        $sql = "SELECT * FROM Laboratory NATURAL JOIN LaboratoryStaff WHERE Id_Lab = '$id'";
        $result=$conn->query($sql);
        $my_row=$result->fetch_assoc();
        
        $Id_Lab= $my_row[Id_Lab];

        $Name_Lab = $my_row[Name_Lab];

        $Id_Ls = $my_row[Id_Ls];
        $FName_Ls = $my_row[FName_Ls];
        $LName_Ls = $my_row[LName_Ls];

        require("connection_close.php");
        return new Laboratory($Id_Lab,$Name_Lab,$Id_Ls,$FName_Ls,$LName_Ls);

    }


    public static function Update($Id_Lab,$Name_Lab,$Id_Ls,$oldid)
    {
        require("connect_connection.php");
       $sql="UPDATE `Laboratory` SET `Id_Lab`='$Id_Lab',`Name_Lab`='$Name_Lab',`Id_Ls`='$Id_Ls' WHERE Id_Lab = '$oldid'";
       $result=$conn->query($sql);
       require("connection_close.php");
       return ;
    }


   public static function delete($id)

   {

       require("connect_connection.php");

       $sql = "DELETE FROM Laboratory WHERE Id_Lab = '$id'";

       $result = $conn->query($sql);

       require("connection_close.php");

       return ;

   }
}

