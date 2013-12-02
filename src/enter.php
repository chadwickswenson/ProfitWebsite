<?php 
 
		$con = mysql_connect("db454710182.db.1and1.com","dbo454710182","Oknbfr1360");
    
        if (!$con)
        {
            die('Could not connect: ' . mysql_error());
        }
       
        mysql_select_db("db454710182", $con);
        
		$insert = "INSERT INTO db454710182.emails (email)
					VALUES ('".$_POST['email']."')";
		
		mysql_query($insert);
		
		mysql_close($con);
		
		?>