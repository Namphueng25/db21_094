<br>
<br>
<br>
<center><img class="avatar" src="https://th.seaicons.com/wp-content/uploads/2015/11/document-add-icon.png" alt="avatar" width = "200"   ></center>
<br>
<br>
<center><font size = "3" color = #fff>
<form method = "GET" action = "">

    <label>ID CheckRT_PCR	 <input type="text" name="id"/></label><br>
    <br>
    <label>Date <input type="date" name="date" value="<?php echo date("Y-m-d");?>"/></label><br>
    <br>
    <label>Time  <input type="time" name="time"
       min="01:00" max="23:59" ></label><br>
       <br>
    <label>Results CheckRT_PCR  <input type="text" name="results" /></label><br>
    <br>
    <label>	ID Staff <select name="SA_ID">
    <?php foreach($StaffAgencyList as $s)
    {
        echo "<option value=$s->SA_ID> $s->S_Name </option>";
    }?>
    </select></label><br>
    <br>
    <label>	ID Lab <select name="Id_Lab">
    <?php foreach($LaboratoryList as $l)
    {
        echo "<option value=$l->Id_Lab> $l->Id_Lab  </option>";
    }?>
    </select></label><br>
    <br>
    <label>	ID ATK <select name="ATR_id">
    <?php foreach($AtkTestResultList as $a)
    {
        echo "<option value=$a->ATR_id> $a->ATR_id  </option>";
    }?>
    </select></label><br>
  
    <input type="hidden" name="controller" value="CheckRT_PCR"/><br>
    <button type="submit" name="action" value="index">Back</button>
    <button type="submit" name="action" value="addCheckRT_PCR">Save</button>
</form></center>

