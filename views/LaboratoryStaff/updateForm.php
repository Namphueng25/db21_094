<br>
<br>
<br>

<center><img class="avatar" src="https://findicons.com/files/icons/85/kids/128/agt_update_drivers.png" alt="avatar" width = "100"   ></center>
<br>
<br>
<br>
<center><font size = "3" color = #fff>
<body><form method="GET" action="">
<label>รหัส <input type="text" name="id" 
        value="<?php echo $LaboratoryStaff->Id_Ls;?>"/></label><br>
<br>
<label>ชื่อ <input type="text" name="name" 
        value="<?php echo $LaboratoryStaff->FName_Ls;?>"/></label><br>
<br>
<label>นามสกุล <input type="text" name="lname" 
        value="<?php echo $LaboratoryStaff->LName_Ls;?>"/></label><br>

<br>
<br>
<input type="hidden"name="controller"value="LaboratoryStaff"/>
<input type="hidden" name="oldid" value="<?php echo $LaboratoryStaff->Id_Ls; ?>"/>
<button type= "submit"name="action"value="index">Back</button>
<button type= "submit"name="action"value="update">Update</button>

</form></body></font></center>

