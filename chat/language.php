<?php
$conn = mysqli_connect("localhost", "root", "", "bbm_db") or die("Database Error");

	if (isset ($_POST['English'])) {
		$english = "SELECT questions, answers FROM chat WHERE language = 'English' LIMIT 1";
		$run_query = mysqli_query($conn, $english) or die("Error");
		
}	if (isset ($_POST['Tagalog'])) {
		$tagalog = "SELECT questions, answers FROM chat WHERE language = 'Tagalog' LIMIT 1";
		$run_query = mysqli_query($conn, $tagalog) or die("Error");
		
}
	while($rows = mysqli_fetch_array($run_query)) {
		
		echo ' <div class="msg-header">
                    <p id="head-message"> '.$rows['questions'].' </p>
                </div> <br>';
	}

?>