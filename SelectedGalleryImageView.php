<?php
	include 'dbConfig.php';

?>
			
			
			<section id="about" class="scroll-section section-space why-this-app section-bg-02 hidden-overflow">
                <div class="container">

                    <div class="row">
                        <div class="why-section-col col-lg-5 col-md-5 col-sm-6 col-xs-12">
						    <div class="thumb-area">
											
									<?php
										if(isset($_POST['viewImage']))
										{
											$galleryNo = $_POST['galleryName'];
											//echo $galleryNo;
											
											$stmt = $DB_con->prepare("select Image from gallery where gallery.GalleryName = '$galleryNo' ");
											$stmt->execute();
											if($stmt->rowCount() > 0)
													{
														while($row=$stmt->fetch(PDO::FETCH_ASSOC))
															{
																extract($row);
																?>
													<img src="uploads/<?php echo $row['Image']; ?>" style="width:30%; height:20%" />
														<?php
															}
													}
										}
									?>	
																															
														
														
								
								
                            </div>
						</div>
					</div>
				</div>
			</section>