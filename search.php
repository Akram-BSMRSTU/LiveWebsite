<?php

if(isset($_POST["city"]) && $_POST['blood_group'])
{
    $output = '';
    $connect = mysqli_connect("localhost", "root", "", "blood_group");
    $query = "SELECT * FROM blood WHERE blood = '".$_POST["blood_group"]."' AND address = '".$_POST["city"]."'";
    $result = mysqli_query($connect, $query);
    $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">
           <tr>
     <th>Name</th>
     <th>Address</th>
     <th>Gender</th>
     <th>Blood Group</th>
     <th>Age</th>
</tr>';
    while($row = mysqli_fetch_array($result))
    {
        $output .= '
     
     <tr>  
            <td width="70%">'.$row["name"].'</td> 
            <td width="70%">'.$row["address"].'</td>  
            <td width="70%">'.$row["gender"].'</td> 
            <td width="70%">'.$row["blood"].'</td>  
            <td width="70%">'.$row["age"].'</td>  
        </tr>
     ';
    }
    $output .= '</table></div>';
    echo $output;
}
