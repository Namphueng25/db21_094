<center>
    <br>
    <br>
    <br>
<center><img class="avatar" src="https://cdn1.iconfinder.com/data/icons/rounded-set-6/48/trash-full-512.png" alt="avatar" width = "200" ></center>   
<font size = "3" color = #fff>
<?php echo "<br> คุณแน่ใจนะคะว่าคุณจะลบข้อมูลนี้? (>*<) <br>

            <br> $CheckRT_PCR->Id_RT $CheckRT_PCR->Id_Lab $CheckRT_PCR->S_Name <br>"; ?>


<br>
<br>
<form method="get" action="">



    <input type="hidden" name="controller" value="CheckRT_PCR" />

    <input type="hidden" name="Id_RT" value="<?php echo $CheckRT_PCR->Id_RT; ?>" />

    <button type="submit" name="action" value="index">back</button>

    <button type="submit" name="action" value="delete">delete</button>

    



</form></font></center>

