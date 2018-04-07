<?php
	// include Database connection file 
	include("db_connection.php");


	        //DB Code Begins here
        $query = "SELECT * FROM Language";

        if (!$result = mysql_query($query)) {
              exit(mysql_error());
          }

          // if query results contains rows then featch those rows 
          if(mysql_num_rows($result) > 0)
          {
            while($row = mysql_fetch_assoc($result, MYSQL_ASSOC))
            {
              $LangName[] =  $row['Name'];
            }
          }

         $langNameLength = count($LangName);

        //DB Code ends here
    $ValueReturned = '';
    for($x = 0; $x < $langNameLength; $x++) {
    		$ValueReturned = $ValueReturned . ' ' . '<option value="volvo">'.$LangName[$x].'</option>';
    	}
	// Design initial table header 
	$data = '<table class="table table-bordered table-striped name="tblLanguage" id="tblLanguage"">
					<tr><th>Language</th><th> <form ><select>
  '.$ValueReturned.'
</select>     <input type="submit" id = "lang" value="Submit" onclick="submitLang()"></form></th><th></th></tr>	<tr>
							<th>Name</th>
							<th>Value</th>
							<th>Update</th>
						</tr>';
						
	function submitLang()
	{
		echo "chu";
	}

	$query = "SELECT * FROM languagevariables lv LEFT JOIN lang_var_value lvv ON lvv.Var_Id = lv.ID";


	if (!$result = mysql_query($query)) {
        exit(mysql_error());
    }

    // if query results contains rows then featch those rows 
    if(mysql_num_rows($result) > 0)
    {
    	$number = 1;
    	while($row = mysql_fetch_assoc($result))
    	{
    		$data .= '<tr>
				<td>'.$row['Name'].'</td>
				<td>'.$row['Value'].'</td>
			
				<td>
					<button onclick="GettokenvalueDetails('.$row['ID'].')" class="btn btn-warning">Update</button>
				</td>
    		</tr>';
    		$number++;
    	}
    }
    else
    {
    	// records now found 
    	$data .= '<tr><td colspan="6">Records not found!</td></tr>';
    }

    $data .= '</table>';

    echo $data;

    

    
?>
