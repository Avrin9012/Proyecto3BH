
<?php

	
	$out = '';
	if (isset($_POST['submit'])) {
		$x = $_POST['fucks'];
			       	

	     
		//my query 
		$query = ("SELECT * FROM sets WHERE title LIKE '%{$x}%'")  or die('not done'); 
        $run_q = $conn->prepare($query);
		//you were trying to get the search done

		//the query doesnt return any thing some is wrong with it
		$run_q->execute();

		
		
		
		$count = $run_q->rowCount();

		print_r($count);

		if($count == 0) {
			   $out = 'there is no search';
			  

		} else {
				while ($fetch = $run_q->fetch(PDO::FETCH_ASSOC))
				 {

					$fetch['title'];
					$out .= "<div class='conatiner'>
					<div class='alert alert-primary' role='alert'>
					  <a href='singel.php?x=$fetch[id]'><h5>$fetch[title]</h5></a>
					</div>
					
					         </div>
		  	                         ";
					echo $out;       			
					       			
				}
		}
				       	
	}
  






?>