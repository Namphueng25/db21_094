<br>
<br>
<br>

<center><img class="avatar" src="https://findicons.com/files/icons/85/kids/128/agt_update_drivers.png" alt="avatar" width = "100"   ></center>
<br>
<br>
<br>
<center><font size = "3" color = #fff>
<body><form method="GET" action="">
<label>ID LAB <input type="text" name="id" 
        value="<?php echo $Laboratory->Id_Lab;?>"/></label><br>
<br>
<label>NAME LAB <input type="text" name="name" 
        value="<?php echo $Laboratory->Name_Lab;?>"/></label><br>

<br>
    <label>NAME STAFF <select name="Id_Ls">
    <?php foreach($LaboratoryStaffList as $s) {
        echo "<option value = $s->Id_Ls";
        if($s->Id_Ls==$Laboratory->Id_Ls){echo " selected='selected'";}
         echo ">$s->FName_Ls $s->LName_Ls </option>";}?>
    </select></label><br> 
<br>
<br>
<input type="hidden"name="controller"value="Laboratory"/>
<input type="hidden" name="oldid" value="<?php echo $Laboratory->Id_Lab; ?>"/>
<button type= "submit"name="action"value="index">Back</button>
<button type= "submit"name="action"value="update">Update</button>

</form></body></font></center>

