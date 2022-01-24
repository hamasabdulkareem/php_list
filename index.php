<!DOCTYPE html>
<?php

$errors="";
$sucss="";
if($_SERVER["REQUEST_METHOD"] == "POST"){
	if(empty($_POST["task"])){
		$errors = "
		<small class='text-danger mx-sm-3'>
	       You must fill in the task.
	    </small>
		";
	} else{
		$task = $_POST["task"];
	    $sucss="
		<table class='table'>
			<thead>
				<tr>
					<th>N</th>
					<th >Task</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>$task</td>
					<td>
					     <button type='button' class='delete btn-sm btn btn-danger'>
					         <i class='fas fa-trash-alt'></i>
				         </button>
					</td>
				</tr>
			</tbody>	
		</table>
		
		";
	}
}

?>


<html lang="en">
	<head>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
		<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1"/>
	</head>
<body>

	<div class="col-md-6 well mx-auto px-md-5 ">
        <br /><br /><br />
		<h3 class="text-primary p-2 m-10 "> App List With PHP Without MySQL </h3>
		<hr style="border-top:1px dotted #ccc;"/>
		<div class="col-md-8 mx-auto px-md-10">
             <form class="form-inline" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
			 <?php if (isset($errors)) { ?>
	             <p><?php echo $errors; ?></p>
             <?php } ?>
                 <div class="form-group mx-sm-3 mb-2 ">
                     <input type="text" class="form-control" name="task"  placeholder="" style="width:300px">
                 </div>
                 <button type="submit" class="btn btn-primary mb-2">Add</button>
             </form>
        </div>
		<br /><br /><br />
		<?php if (isset($sucss)) { ?>
	             <p><?php echo $sucss; ?></p>
        <?php } ?>
		
	</div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
</body>
</html>