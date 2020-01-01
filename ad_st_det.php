<!--Author-ebin-->
<?php require "templates/header.php"; ?>
<?php

        require "../config.php";
        require "../common.php";
 try  {
        $connection = new PDO($dsn, $username, $password, $options);

        
        $sql =("SELECT * FROM users WHERE Types='Stu'");
		$statement = $connection->prepare($sql);
        $statement->execute();
		$result = $statement->fetchAll();
		 } catch(PDOException $error) {
        echo $sql . "<br>" . $error->getMessage();
    }
	
	/*
	"SELECT * 
                        FROM users
                        WHERE Types = Stu",
	*/
	
	
?>
<center><h1>Students Details</h1></center>
<?php

 if ($result && $statement->rowCount() > 0) { ?>
<form action="actionatt.php" method="post">
<table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Date of birth</th>
                    <th>Email </th>
<th>Mobile</th>
<th>Gender</th>
<th>Address</th>
                    <th>Doj</th>
<th>Doc</th>
                    <th>Qualification</th>
                    <th>Class</th>
					
                </tr>
            </thead>
        
            
			    <tbody>
				 <?php foreach ($result as $row) { ?>
				<tr>
        <td><?php echo escape($row["Name"]); ?></td>
                <td><?php echo escape($row["Dateofbirth"]); ?></td>
                <td><?php echo escape($row["Email"]); ?></td>
                <td><?php echo escape($row["Mobile"]); ?></td>
                <td><?php echo escape($row["Gender"]); ?></td>
                <td><?php echo escape($row["Address"]); ?></td>
				<td><?php echo escape($row["Doj"]); ?></td>
				<td><?php echo escape($row["Doc"]); ?></td>
                <td><?php echo escape($row["Qualification"]); ?> </td>
				<td><?php echo escape($row["Class"]); ?> </td>
            </tr>
     <?php } ?>
        </tbody>
		
    </table>
	</form>
	<?php } else { ?>
        <blockquote>No results found for <?php echo escape($_POST['type_id']); ?>.</blockquote>
    <?php } ?>

<?php require "templates/footer.php"; ?>