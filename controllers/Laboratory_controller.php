<?php class LaboratoryController{
    public function index()
    {
      
        $LaboratoryList=Laboratory::getAll();
        require_once("./views/Laboratory/index_Laboratory.php");
    }
    public function search()
    {
        $key=$_GET['key'];
        $LaboratoryList = Laboratory::search($key);
        require_once("./views/Laboratory/index_Laboratory.php");
    }
    public function newLaboratory(){
        
        $LaboratoryStaffList = LaboratoryStaff::getAll();
        
        require_once('./views/Laboratory/newLaboratory.php');
    } 
    public function addLaboratory()
    {
        
        $Id_Lab = $_GET['id'];
        $Name_Lab = $_GET['name']; 
        $Id_Ls = $_GET['idLs'];
        
        Laboratory::Add($Id_Lab,$Name_Lab,$Id_Ls);
        LaboratoryController::index();
    }
    public function deleteConform()

    {
        

        $id=$_GET['Id_Lab'];

        $Laboratory = Laboratory::get($id);

        require_once("./views/Laboratory/deleteConFirm.php");

    }

    public function delete()

    {
    

        $id=$_GET['Id_Lab'];

        Laboratory::delete($id);

        LaboratoryController::index();

    }
    
    public function updateForm()
    {
        
        $id=$_GET['Id_Lab'];
        $Laboratory = Laboratory::get($id);
        $LaboratoryStaffList = LaboratoryStaff::getAll();
     
        require_once("./views/Laboratory/updateForm.php");
    }

    public function update()
    {
       
        $Id_Lab = $_GET['id'];
        $Name_Lab = $_GET['name']; 
        $Id_Ls = $_GET['Id_Ls'];
        $oldid=$_GET['oldid'];
    
        Laboratory::Update($Id_Lab,$Name_Lab,$Id_Ls,$oldid);

        LaboratoryController::index();
    }
    

}
?>

