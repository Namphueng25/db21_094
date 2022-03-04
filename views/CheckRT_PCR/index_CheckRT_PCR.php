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
    background-color: #ff9900;
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
<h2 font coler=#f0fff0 ><center><font size= "15" color = #fff face="LilyUPC">ข้อมูล RT-PCR</font></center></h2>
<html>
<table border = 0>
    
        <br>
        <br>
        <form method="GET" action="" >
            <input type="text" name="key" style="border: 2px #0000FF solid" >
            <input type="hidden" name="controller" value="CheckRT_PCR"/>
            <button type="submit" name="action" value="search">Search</button>
            <button type="submit" name="action" value="index">Back</button></br>
        </form>
     
      
        <br>
        <br>
   
        <tr>
            <th>ID CheckRT_PCR</th>
            <th>Date</th>
            <th>Time</th>
            <th>Results CheckRT_PCR</th>
            <th>Staff Name</th>
            <th>ID Lab</th>
            <th>ID ATR</th>
            <th>ATR_color</th>
            <th>ATR TestResult</th>
            <th>Name Labstaff</th>
            <th>Last Name Labstaff</th>
            <th>UPDATE</th>
            <th>DELETE</th>

        </tr>

    <?php 
        foreach($CheckRT_PCRList as $CheckRT_PCR)
        {
            echo "<tr>
                <td>$CheckRT_PCR->Id_RT</td>
                <td>$CheckRT_PCR->Date_RT</td>
                <td>$CheckRT_PCR->Time_RT</td>
                <td>$CheckRT_PCR->Results_RT</td>
                <td>$CheckRT_PCR->S_Name</td>
                <td>$CheckRT_PCR->Id_Lab</td>
                <td>$CheckRT_PCR->ATR_id</td>
                <td>$CheckRT_PCR->ATR_color</td>
                <td>$CheckRT_PCR->ATR_TestResult</td>
                <td>$CheckRT_PCR->FName</td>
                <td>$CheckRT_PCR->LName</td>
                
           
                <td><a href=?controller=CheckRT_PCR&action=updateForm&Id_RT=$CheckRT_PCR->Id_RT>Update</a></td>
                <td><a href=?controller=CheckRT_PCR&action=deleteConFirm&Id_RT=$CheckRT_PCR->Id_RT>Delete</a></td>
            </tr>";
        }
        echo "</table>";
    ?>
    </body></center>
    <center><a class="button" href="?controller=CheckRT_PCR&action=newCheckRT_PCR">Addnew</a></center>
</html>



