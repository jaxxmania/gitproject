
<form name="insert_home" method="POST">
	<h3>Insert Post For Home Section </h3>

    <div class="form-group">

    	   <label for="Post_Title">Post Title For Home</label>

    	   <input type="text" name="post_title" placeholder="Post Title For Home" class="form-control" required>

    </div>

    <div class="form-group">


    		<label for="Post_Description">Post Description For Home</label>

    		<textarea name="post_description" rows=10 cols=60  class="form-control"></textarea>

    </div>

    <button type="submit" name="btn_submit" class="btn btn-primary">Create Post For Home </button>

</form>

</hr/>
<?php  

include('../include/connect.php');

// get database connection
$database = new Database();
$db = $database->getConnection();
 if(isset($_POST['btn_submit']))
  {
  		$title=$_POST['post_title'];
  		$desc=$_POST['post_description'];
  	    $sql="INSERT INTO home_tbl(title,description)values(:title,:description)";
  	    $query=$db->prepare($sql);
  	    $query->bindParam(':title',$title,PDO::PARAM_STR);
		$query->bindParam(':description',$desc,PDO::PARAM_STR);

  	    $query->execute();
  	    if($query)
  	    {
  	    echo "<div class='alert alert-success'>Product was created.</div>";
  	    }
  	    else 
  	    {
  	    	echo "<div class='alert alert-dange'>Unable to create .</div>";
  	    }
  	}

?>