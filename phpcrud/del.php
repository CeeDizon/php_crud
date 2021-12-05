<!-- 	Aquino, Bea Nichole T.
 	Dizon, Maycee G.
 	Quizon, Megan Rae L. 
 	CS401		6ASI		September 9, 2021 -->

 	
<!-- Delete Operation -->

<?php
       include('connection.php');
       include('header.php');
        ?>  

<body>
<?php

			if (!isset($_GET['do']) || $_GET['do'] != 1) {							
	
			switch ($_GET['type']) {
				case 'people':
					$query = 'DELETE FROM people
							WHERE
							studID = ' . $_GET['id'];
						$result = mysqli_query($db, $query) or die(mysqli_error($db));
						
?>
			<script type="text/javascript">
				alert("[ Successfully Deleted. ]");
				window.location = "index.php";
			</script>				
				
			<?php
			//break;
				}
			}
			?>

</body>
</html>