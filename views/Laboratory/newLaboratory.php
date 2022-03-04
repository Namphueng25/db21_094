<br>
<br>
<br>
<center><img class="avatar" src="https://th.seaicons.com/wp-content/uploads/2015/11/document-add-icon.png" alt="avatar" width = "200"   ></center>
<br>
<br>
<center><font size = "3" color = #fff>
<form method = "GET" action = "">

    <label>ID LAB <input type="text" name="id"/></label><br>
<br>
    <label>NAME LAB  <input type="text" name="name" /></label><br>
    <br>
    <label>ID STAFF   <select name="idLs">
    <?php foreach($LaboratoryStaffList as $s)
    {
        echo "<option value=$s->Id_Ls > $s->Id_Ls</option>";
    }?>
    </select></label><br>
  
    <br>

    <input type="hidden" name="controller" value="Laboratory"/><br>
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="addLaboratory">Save</button>
</form></center>

