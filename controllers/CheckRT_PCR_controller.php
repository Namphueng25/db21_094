<?php class CheckRT_PCRController{
    public function index()
    {
      
        $CheckRT_PCRList=CheckRT_PCR::getAll();
        require_once("./views/CheckRT_PCR/index_CheckRT_PCR.php");
    }
    public function search()
    {
        
        $key=$_GET['key'];
        $CheckRT_PCRList = CheckRT_PCR::search($key);
        require_once("./views/CheckRT_PCR/index_CheckRT_PCR.php");
    }
    public function newCheckRT_PCR(){
        
        $StaffAgencyList= StaffAgency::getAll();
        $LaboratoryList= Laboratory::getAll();
        $AtkTestResultList= AtkTestResult::getAll();
        
        require_once('./views/CheckRT_PCR/newCheckRT_PCR.php');
    } 
    public function addCheckRT_PCR()
    {
        
        $Id_RT = $_GET['id'];
        $Date_RT = $_GET['date']; 
        $Time_RT = $_GET['time'];
        $Results_RT = $_GET['results'];
        $Id_Lab = $_GET['Id_Lab'];
        $ATR_id = $_GET['ATR_id'];
        $Id_staff = $_GET['SA_ID'];


        CheckRT_PCR::Add($Id_RT,$Date_RT,$Time_RT,$Results_RT,$Id_staff,$Id_Lab,$ATR_id);
        CheckRT_PCRController::index();
    }
    public function deleteConFirm()

    {
        

        $id=$_GET['Id_RT'];

        $CheckRT_PCR = CheckRT_PCR::get($id);

        require_once("./views/CheckRT_PCR/deleteConFirm.php");

    }

    public function delete()

    {
    

        $id=$_GET['Id_RT'];

        CheckRT_PCR::delete($id);

        CheckRT_PCRController::index();

    }
    
    public function updateForm()
    {
        
        $id=$_GET['Id_RT'];
        $CheckRT_PCR = CheckRT_PCR::get($id);
        $StaffAgencyList= StaffAgency::getAll();
        $LaboratoryList= Laboratory::getAll();
        $AtkTestResultList= AtkTestResult::getAll();
        require_once("./views/CheckRT_PCR/updateForm.php");
    }

    public function update()
    {
       
        $Id_RT = $_GET['id'];
        $Date_RT = $_GET['date']; 
        $Time_RT = $_GET['time'];
        $Results_RT = $_GET['results'];
        $Id_staff = $_GET['SA_ID'];
        $Id_Lab = $_GET['Id_Lab'];
        $ATR_id = $_GET['ATR_id'];
        $oldid=$_GET['oldid'];
    
        CheckRT_PCR::Update($Id_RT,$Date_RT,$Time_RT,$Results_RT,$Id_staff,$Id_Lab,$ATR_id,$oldid);

        CheckRT_PCRController::index();
    }
    

}
?>


