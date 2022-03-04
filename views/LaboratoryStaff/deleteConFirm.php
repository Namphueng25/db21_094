<br>
<br>
<br>
<center>
<center><img class="avatar" src="https://cdn1.iconfinder.com/data/icons/rounded-set-6/48/trash-full-512.png" alt="avatar" width = "200" ></center>   
<font size = "3" color = #fff>
<?php echo "<br> คุณแน่ใจนะคะว่าคุณจะลบข้อมูลนี้? (>*<) <br>

            <br> $LaboratoryStaff->Id_Ls $LaboratoryStaff->FName_Ls $LaboratoryStaff->LName_Ls <br>"; ?>
<br>
<br>


<form method="get" action="">



    <input type="hidden" name="controller" value="LaboratoryStaff" />

    <input type="hidden" name="Id_Ls" value="<?php echo $LaboratoryStaff->Id_Ls; ?>" />

    <button type="submit" name="action" value="index">back</button>

    <button type="submit" name="action" value="delete">delete</button>

    



</form></center>

