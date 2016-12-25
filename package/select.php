<?php  
 $connect = mysqli_connect("localhost", "root", "", "test");  
 $output = '';  
 $sql = "SELECT * FROM tbl_packages ORDER BY id DESC";  
 $result = mysqli_query($connect, $sql);  
 $output .= '  
      <div class="table-responsive">  
           <table class="table table-bordered">  
                <tr>  
                     <th width="79px" height="37px" style="text-align:center;">Id</th>  
                     <th width="190px" height="37px" style="text-align:center;">Package Name</th>  
					 <th width="320px" height="37px" style="text-align:center;">Detail</th>
                     <th width="95px" height="37px" style="text-align:center;">Price</th>
					 <th width="30px" height="37px" style="text-align:center;">Delete</th>					 
                </tr>';  
 if(mysqli_num_rows($result) > 0)  
 {  
      while($row = mysqli_fetch_array($result))  
      {  
           $output .= '  
                <tr>  
                     <td>'.$row["id"].'</td>  
                     <td class="package_name" data-id1="'.$row["id"].'" contenteditable>'.$row["package_name"].'</td>  
					 <td class="detail" data-id2="'.$row["id"].'" contenteditable>'.$row["detail"].'</td>
                     <td class="price" data-id3="'.$row["id"].'" contenteditable>'.$row["price"].'</td>
                     <td><button type="button" name="delete_btn" data-id4="'.$row["id"].'" class="btn btn-xs btn-danger btn_delete">x</button></td>  
                </tr>  
           ';  
      }  
      $output .= '  
           <tr>  
                <td></td>  
                <td id="package_name" contenteditable></td>  
				<td id="detail" contenteditable></td> 
                <td id="price" contenteditable></td>   
                <td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">Add</button></td>  
           </tr>  
      ';  
 }  
 else  
 {  
      $output .= '<tr>  
                          <td colspan="5">Data not Found</td>  
                     </tr>';  
 }  
 $output .= '</table>  
      </div>';  
 echo $output;  
 ?>  