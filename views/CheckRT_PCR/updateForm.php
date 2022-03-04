<br>
<br>
<br>

<center><img class="avatar" src="https://findicons.com/files/icons/85/kids/128/agt_update_drivers.png" alt="avatar" width = "100"   ></center>
<br>
<br>
<br>
<center><font size = "3" color = #fff>
<form method = "GET" action = "">

    <label>ID CheckRT_PCR	 <input type="text" name="id"
                             value="<?php echo $CheckRT_PCR->Id_RT;?>"/></label><br>
<br>
    <label>Date <input type="date" name="date" 
                value="<?php echo $CheckRT_PCR->Date_RT;?>"/></label><br>
                <br>  
    <label>Time  <input type="time" name="time"
                 value="<?php echo $CheckRT_PCR->Time_RT;?>"/></label><br>
                 <br>
    <label>Results CheckRT_PCR  <input type="text" name="results" value="<?php echo $CheckRT_PCR->Results_RT;?>"/></label><br>
    <br>
    <label>	ID Staff <select name="SA_ID">
    <?php foreach($StaffAgencyList as $s) {
        echo "<option value = $s->SA_ID";
        if($s->SA_ID==$CheckRT_PCR->Id_staff){echo " selected='selected'";}
         echo ">$s->S_Name</option>";}?>
    </select></label><br> 
    <br>

    <label>	ID Lab <select name="Id_Lab">
    <?php foreach($LaboratoryList as $l) {
        echo "<option value = $l->Id_Lab";
        if($l->Id_Lab==$CheckRT_PCR->Id_Lab){echo " selected='selected'";}
         echo ">$l->Id_Lab</option>";}?>
    </select></label><br> 

    <br>
    <label>	ID ATK <select name="ATR_id">
    <?php foreach($AtkTestResultList as $a) {
        echo "<option value = $a->ATR_id";
        if($a->ATR_id==$CheckRT_PCR->ATR_id){echo " selected='selected'";}
         echo ">$a->ATR_id</option>";}?>
    </select></label><br> 

    <br>
    <br>
    <input type="hidden"name="controller"value="CheckRT_PCR"/>
<input type="hidden" name="oldid" value="<?php echo $CheckRT_PCR->Id_RT; ?>"/>
<button type= "submit"name="action"value="index">Back</button>
<button type= "submit"name="action"value="update">Update</button>

</form></body></font></center>
