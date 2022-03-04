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
tr:hover {background-color: #7fffd4}
th {
    background-color: #228b22;
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
<h2 font coler=#f0fff0 ><center><font size= "15" color = #fff face="LilyUPC">ห้อง LABORATORY</font></center></h2>
<html>
<table border = 0>
   
    <center> <body>
        <br>
        <form method="GET" action="">
            <input type="text" name="key">
            <input type="hidden" name="controller" value="Laboratory"/>
            <button type="submit" name="action" value="search">Search</button>
            <button type="submit" name="action" value="index">Back</button></br>
        </form>

        <br>
        <br>
        <br>
        <tr>
            <th>ID Lab</th>
            <th>Name Lab</th>
            <th>ID StaffLab</th>
            <th>Name Staff</th>
            <th>Last Name Staff</th>
            <th>UPDATE</th>
            <th>DELETE</th>
            
        </tr>
        
    <?php 
        foreach($LaboratoryList as $Laboratory)
        {
            echo "<tr>
                <td>$Laboratory->Id_Lab</td>
                <td>$Laboratory->Name_Lab</td>
                <td>$Laboratory->Id_Ls</td>
                <td>$Laboratory->FName_Ls</td>
                <td>$Laboratory->LName_Ls</td>
                <td><a href=?controller=Laboratory&action=updateForm&Id_Lab=$Laboratory->Id_Lab>Update</a></td>
                <td><a href=?controller=Laboratory&action=deleteConform&Id_Lab=$Laboratory->Id_Lab>Delete</a></td>
            </tr>";
        }
        echo "</table>";
    ?>
    </body></center> <center><a class="button" href="?controller=Laboratory&action=newLaboratory">Addnew</a></center>
</html>


