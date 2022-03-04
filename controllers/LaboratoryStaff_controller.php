<?php class LaboratoryStaffController{
    public function index()
    {
        
        $LaboratoryStaffList=LaboratoryStaff::getAll();
        require_once("./views/LaboratoryStaff/index_LaboratoryStaff.php");
    }
    public function search()
    {
        $key=$_GET['key'];
        $LaboratoryStaffList = LaboratoryStaff::search($key);
        require_once("./views/LaboratoryStaff/index_LaboratoryStaff.php");
    }
    public function newLaboratoryStaff(){
        
        $LaboratoryStaffList = LaboratoryStaff::getAll();
        require_once('./views/LaboratoryStaff/newLaboratoryStaff.php');
    }
    
    public function addLaboratoryStaff()
    {
        
        $Id_Ls = $_GET['id'];
        $FName_Ls = $_GET['name']; 
        $LName_Ls = $_GET['lname'];
     
        LaboratoryStaff::Add($Id_Ls,$FName_Ls,$LName_Ls);
        LaboratoryStaffController::index();
    }
    public function deleteConFirm()

    {
        

        $id=$_GET['Id_Ls'];

        $LaboratoryStaff = LaboratoryStaff::get($id);

        require_once("./views/LaboratoryStaff/deleteConFirm.php");

    }

    public function delete()

    {
    

        $id=$_GET['Id_Ls'];

        LaboratoryStaff::delete($id);

        LaboratoryStaffController::index();

    }
    
    public function updateForm()
    {
        
        $id=$_GET['Id_Ls'];
        $LaboratoryStaff = LaboratoryStaff::get($id);
     
        require_once("./views/LaboratoryStaff/updateForm.php");
    }

    public function update()
    {
       
        $Id_Ls = $_GET['id'];
        $FName_Ls = $_GET['name']; 
        $LName_Ls = $_GET['lname'];
        $oldid=$_GET['oldid'];


    
        LaboratoryStaff::Update($Id_Ls,$FName_Ls,$LName_Ls,$oldid);

        LaboratoryStaffController::index();
    }
    

}
?>
