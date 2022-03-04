<?php

class CheckRT_PCR

{

    public $Id_RT,$Date_RT,$Time_RT,$Results_RT,$Id_staff,$S_Name,$Id_Lab,$ATR_id,$ATR_color,$ATR_TestResult,$FName,$LName;



    public function __construct($Id_RT,$Date_RT,$Time_RT,$Results_RT,$Id_staff,$S_Name,$Id_Lab,$ATR_id,$ATR_color,$ATR_TestResult,$FName,$LName)

    {
        $this->Id_RT = $Id_RT;
        $this->Date_RT = $Date_RT;
        $this->Time_RT = $Time_RT;
        $this->Results_RT = $Results_RT;
        $this->Id_staff = $Id_staff;
        $this->S_Name = $S_Name;
        $this->Id_Lab = $Id_Lab;
        $this->ATR_id = $ATR_id;
        $this->ATR_color = $ATR_color;
        $this->ATR_TestResult = $ATR_TestResult;
        $this->FName = $FName;
        $this->LName = $LName;
    }



    public static function getAll()

    {
    
       
        $CheckRT_PCRList = [];

        require("connect_connection.php");

        $sql = "SELECT * FROM CheckRT_PCR INNER JOIN AtkTestResult ON CheckRT_PCR.Id_ATK = AtkTestResult.ATR_id INNER JOIN StaffAgency ON CheckRT_PCR.Id_staff=StaffAgency.SA_ID INNER JOIN Staff ON StaffAgency.S_ID=Staff.S_ID INNER JOIN Laboratory ON CheckRT_PCR.Id_Lab = Laboratory.Id_Lab INNER JOIN LaboratoryStaff ON Laboratory.Id_Ls = LaboratoryStaff.Id_Ls";

        $result = $conn->query($sql);

        while ($my_row = $result->fetch_assoc()) {

            $Id_RT= $my_row[Id_RT];
            $Date_RT= $my_row[Date_RT];
            $Time_RT= $my_row[Time_RT];
            $Results_RT= $my_row[Results_RT];
            $Id_staff= $my_row[Id_staff];
            $S_Name= $my_row[S_Name];
            $Id_Lab= $my_row[Id_Lab];
            $ATR_id= $my_row[Id_ATK];
            $ATR_color = $my_row[ATR_color];
            $ATR_TestResult = $my_row[ATR_TestResult];
            $FName = $my_row[FName_Ls];
            $LName = $my_row[LName_Ls];
            $CheckRT_PCRList[] = new CheckRT_PCR($Id_RT,$Date_RT,$Time_RT,$Results_RT,$Id_staff,$S_Name,$Id_Lab,$ATR_id,$ATR_color,$ATR_TestResult,$FName,$LName);

        }

        require("connection_close.php");

        return $CheckRT_PCRList;
    }
    public static function search($key)
    {
        $CheckRT_PCRList = [];
        require("connect_connection.php");
        $sql = "SELECT * FROM CheckRT_PCR INNER JOIN AtkTestResult ON CheckRT_PCR.Id_ATK = AtkTestResult.ATR_id INNER JOIN StaffAgency ON CheckRT_PCR.Id_staff=StaffAgency.SA_ID INNER JOIN Staff ON StaffAgency.S_ID=Staff.S_ID INNER JOIN Laboratory ON CheckRT_PCR.Id_Lab = Laboratory.Id_Lab INNER JOIN LaboratoryStaff ON Laboratory.Id_Ls = LaboratoryStaff.Id_Ls  
                WHERE (Id_RT like '%$key%' or Date_RT like '%$key%' or Id_ATK like '%$key%' or Id_staff like '%$key%')";

        $result = $conn->query($sql);
        while ($my_row = $result->fetch_assoc()) {
            
            $Id_RT= $my_row[Id_RT];
            $Date_RT= $my_row[Date_RT];
            $Time_RT= $my_row[Time_RT];
            $Results_RT= $my_row[Results_RT];
            $Id_staff= $my_row[Id_staff];
            $S_Name= $my_row[S_Name];
            $Id_Lab= $my_row[Id_Lab];
            $ATR_id= $my_row[Id_ATK];
            $ATR_color = $my_row[ATR_color];
            $ATR_TestResult = $my_row[ATR_TestResult];
            $FName = $my_row[FName_Ls];
            $LName = $my_row[LName_Ls];
            $CheckRT_PCRList[] = new CheckRT_PCR($Id_RT,$Date_RT,$Time_RT,$Results_RT,$Id_staff,$S_Name,$Id_Lab,$ATR_id,$ATR_color,$ATR_TestResult,$FName,$LName);

        }
        require("connection_close.php");

        return $CheckRT_PCRList;
    }
    public static function Add($Id_RT,$Date_RT,$Time_RT,$Results_RT,$Id_staff,$Id_Lab,$ATR_id)

    { 

        require("connect_connection.php");

       $sql = "INSERT INTO `CheckRT_PCR` (`Id_RT`, `Date_RT`, `Time_RT`,`Results_RT`,`Id_staff`,`Id_Lab`,`Id_ATK`) VALUES ('$Id_RT', '$Date_RT', '$Time_RT','$Results_RT', '$Id_staff', '$Id_Lab','$ATR_id')";

       $result = $conn->query($sql);

       require("connection_close.php");

       return  ;

    }   
    public static function get($id)
    {
        
        require("connect_connection.php");
        $sql = "SELECT * FROM CheckRT_PCR INNER JOIN AtkTestResult ON CheckRT_PCR.Id_ATK = AtkTestResult.ATR_id INNER JOIN StaffAgency ON CheckRT_PCR.Id_staff=StaffAgency.SA_ID INNER JOIN Staff ON StaffAgency.S_ID=Staff.S_ID INNER JOIN Laboratory ON CheckRT_PCR.Id_Lab = Laboratory.Id_Lab INNER JOIN LaboratoryStaff ON Laboratory.Id_Ls = LaboratoryStaff.Id_Ls WHERE Id_RT = '$id'";
        $result=$conn->query($sql);
        $my_row=$result->fetch_assoc();
        
        $Id_RT= $my_row[Id_RT];
        $Date_RT= $my_row[Date_RT];
        $Time_RT= $my_row[Time_RT];
        $Results_RT= $my_row[Results_RT];
        $Id_staff= $my_row[Id_staff];
        $S_Name= $my_row[S_Name];

        $Id_Lab= $my_row[Id_Lab];
        $ATR_id= $my_row[Id_ATK];
        $ATR_color = $my_row[ATR_color];
        $ATR_TestResult = $my_row[ATR_TestResult];
        $FName = $my_row[FName_Ls];
        $LName = $my_row[LName_Ls];

        require("connection_close.php");
        return new CheckRT_PCR($Id_RT,$Date_RT,$Time_RT,$Results_RT,$Id_staff,$S_Name,$Id_Lab,$ATR_id,$ATR_color,$ATR_TestResult,$FName,$LName);

    }
    public static function delete($id)

   {

       require("connect_connection.php");

       $sql = "DELETE FROM CheckRT_PCR WHERE Id_RT = '$id'";

       $result = $conn->query($sql);

       require("connection_close.php");

       return ;

   }


   public static function Update($Id_RT,$Date_RT,$Time_RT,$Results_RT,$Id_staff,$Id_Lab,$ATR_id,$oldid)
    {
        require("connect_connection.php");
       $sql="UPDATE `CheckRT_PCR` SET `Id_RT`='$Id_RT',`Date_RT`='$Date_RT',`Time_RT`='$Time_RT',`Results_RT`='$Results_RT',`Id_staff`='$Id_staff',`Id_Lab`='$Id_Lab',`Id_ATK`='$ATR_id' WHERE Id_RT = '$oldid'";
       $result=$conn->query($sql);
       require("connection_close.php");
       return ;
    }







}
