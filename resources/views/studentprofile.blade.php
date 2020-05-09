<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2 text-align:center; color:black;>Laravel Student profile Table</h2>
<div class="container">
<table >  <thead>
                    <tr>
                        <th>SL.</th>
                        <th>Name</th>
                        <th>ID</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include('C:\Program Files (x86)\Ampps\www\laravelproject\app\Http\Controllers/studentprofilecontroller.php');
                    $table= "CDIP_Student";
                    $array =$cdip_std_id->fetch_assoc();
                    foreach($cdip_std_id as $row){
                    print_r($cdip_std_id);
                  
                    

                    $count =1;
                  
                    ?>
                    <tr><td><?php echo $count;?></td>
                        <td><?php echo $row["CDIP_Student_name"];?></td>
                        <td><?php echo $row["CDIP_Student_id"];?></td>
                        <td><?php echo $row["CDIP_Student_email"];?></td>
                         
                    </tr>
                    <?php } ?> 

</tbody>
</table>
</div>
</body>
</html>
