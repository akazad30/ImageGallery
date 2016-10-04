<?php
 include 'dbConfig.php';
$valid_formats = array("jpg", "png", "gif", "zip", "bmp");
$max_file_size = 1024*100; //100 kb
$path = "uploads/";
$count = 0;


if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST"){
	// Loop $_FILES to execute all files
	
	$image = $_FILES['files']['name'];
	//$ext = end (explode('.',$_FILES['files']['name']));
	$eror = $_FILES['files']['error'];
	foreach ($_FILES['files']['name'] as $f => $name) {     
	    if ($_FILES['files']['error'][$f] == 4) {
	        continue; // Skip file if any error found
	    }	       
	    if ($_FILES['files']['error'][$f] == 0) {	           
	        if ($_FILES['files']['size'][$f] > $max_file_size) {
				//$ext = end (explode('.',$_FILES['files']['name']));
				var_dump($ext);
	            $message[] = "$name is too large!.";
	            continue; // Skip large files
	        }elseif(file_exists($path.$name)){

				$additional = rand(1,1000);
				$editname = $additional.$name;
				if(move_uploaded_file($_FILES["files"]["tmp_name"][$f], $path.$editname))
				
				{
					echo "edited image uploaded";
					
					$galleryName = $_POST['galleryName'];
					//echo $name;

					echo $galleryName;
					$stmt = $DB_con->prepare('INSERT INTO gallery(GalleryName,Image) 
					VALUES(:gallery, :image)');
					$stmt->bindParam(':gallery',$galleryName);
					$stmt->bindParam(':image',$editname);
					
					$a = $stmt->execute();
					if($a)
					{
						echo "inserted successfully";
					}
					else{
						echo "not inserted";
					}
				}
				else
				{
					echo "Rename image not inserted";
				}
				echo "$name already exists but iserted with rename";
				continue;
			}
			elseif( ! in_array(pathinfo($name, PATHINFO_EXTENSION), $valid_formats) ){
				$message[] = "$name is not a valid format";
				continue; // Skip invalid file formats
			}
	        else{ // No error found! Move uploaded files 
	            if(move_uploaded_file($_FILES["files"]["tmp_name"][$f], $path.$name)) {
	            	$count++; // Number of successfully uploaded files
					//echo "Full path of uploading image file is:".$path.$name;

					$galleryName = $_POST['galleryName'];
					//echo $name;

					echo $galleryName;
					$stmt = $DB_con->prepare('INSERT INTO gallery(GalleryName,Image) 
					VALUES(:gallery, :image)');
					$stmt->bindParam(':gallery',$galleryName);
					$stmt->bindParam(':image',$name);
					
					$a = $stmt->execute();
					if($a)
					{
						echo "inserted successfully";
					}
					else{
						echo "not inserted";
					}
	            }
		
		
			}
				 
			}
	    
	}
}
?>


	<h1><a href="#">Multiple File Upload with PHP</a></h1>
		<?php
		# error messages
		if (isset($message)) {
			foreach ($message as $msg) {
				printf("<p class='status'>%s</p></ br>\n", $msg);
			}
		}
		# success message
		if($count !=0){
			printf("<p class='status'>%d files added successfully!</p>\n", $count);
		}
		?>
		<p>Max file size 100kb, Valid formats jpg, png, gif</p>
		<br />
		<br />