<!DOCTYPE html>
<html>
<head>
<style>
table {
    border-collapse: separate;
    background-color: #FFFAFA;
    border: none;
    width: 70%;
    border-radius: 15px;
  
}

th, td {
    text-align: center;
    padding: 8px;
    font-size: 13px;
    

}

tr:nth-child(even){background-color: #fff0f5}
tr:hover {background-color: #ffcc99}
th {
    background-color: #daa520;
    color: white;
}
</style>

<style>
.button {
    background-color: #33cc66;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
.button {border-radius: 50%;}
</style>
</head>
<body bgcolor = "#f0fff0"><center><br>
<br><br>
<h2 font coler=#f0fff0 ><center><font size= "15" color = #fff face="LilyUPC">ข้อมูลพนักงานห้อง LABORATORY</font></center></h2>
<html>
<table border = 0>
    <center>
        <br>
        <form method="GET" action="">
            <input type="text" name="key">
            <input type="hidden" name="controller" value="LaboratoryStaff"/>
            <button type="submit" name="action" value="search">Search</button>
            <button type="submit" name="action" value="index">Back</button></br>
        </form>

   
<br>
<br>
<br>
   
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Last Name</th>
            <th>UPDATE</th>
            <th>DELETE</th>
            
        </tr>

    <?php 
        foreach($LaboratoryStaffList as $LaboratoryStaff)
        {
            echo "<tr>
                <td>$LaboratoryStaff->Id_Ls</td>
                <td>$LaboratoryStaff->FName_Ls</td>
                <td>$LaboratoryStaff->LName_Ls</td>
                <td><a href=?controller=LaboratoryStaff&action=updateForm&Id_Ls=$LaboratoryStaff->Id_Ls>Update</a></td>
                <td><a href=?controller=LaboratoryStaff&action=deleteConFirm&Id_Ls=$LaboratoryStaff->Id_Ls>Delete</a></td>
            </tr>";
        }
        echo "</table>";
    ?>
    </body></center>
    <center><a class="button" href="?controller=LaboratoryStaff&action=newLaboratoryStaff">Addnew</a></center>
</html>

