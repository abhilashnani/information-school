<?php 
 
 if(isset($_POST['std_add_now']))
 {
 //  ($std_name,$std_standard,$std_telugu,$std_hindi,$std_english,$std_maths,$std_science,$std_social,$std_rank,$std_grade,$std_remarks)
 $std_name = $_POST['std_name'];
 $std_standard = $_POST['std_standard'];
 $std_telugu = $_POST['std_telugu'];
 $std_hindi = $_POST['hindi'];
 $std_english = $_POST['english'];
 $std_maths = $_POST['maths'];
 $std_science = $_POST['science'];
 $std_social = $_POST['social'];
 $std_rank = $_POST['rank'];
 $std_grade = $_POST['grade'];
 $std_remarks) = $_POST['remarks'];
  if($std_name=="" or $std_standard=="" or $std_telugu=="" or $std_hindi=="" or $std_english=="" or $std_maths=="" or $std_science=="" or $std_social=="" or $std_rank=="" or $std_grade=="" or $std_remarks
  {
		 echo "<script>alert('please fill form and st results');</script>";
	 }
	 else
	 {
		  $add_student_done = $ravi->st_results($std_name,$std_standard,$std_telugu,$std_hindi,$std_english,$std_maths,$std_science,$std_social,$std_rank,$std_grade,$std_remarks);
		   if($st_results_done==true)
		 {
			 echo "<script>window.location = 'home.php?ravi=st_results';</script>";
		 }
		 else
		 {
			 echo "<script>alert('contact with developer');</script>";
		 }
		 	 }
	 
 }


?>

<div class="forms-main">
	
	<div class="graph-form">
		<div class="validation-form">
			<!---->
			<h2 align="center"><?php echo strtoupper($_GET['ravi']); ?></h2>
			<form method="post">
					<div class="col-md-12 form-group1 group-mail">
					<label class="control-label">Name</label>
					<input type="text" placeholder="Full Name" required="" name="std_fullname">
				</div>
				<div class="vali-form">
				
					
					<div class="col-md-6 form-group1 form-last">
						<label class="control-label">Standard</label>
						<input type="text" placeholder="Username" required="" name="std_username">
					</div>
					
						<div class="col-md-6 form-group1">
						<label class="control-label">Telugu</label>
						<input type="text" placeholder="Password" required="" name="std_password">
					</div>
					<div class="clearfix"> </div>
					<div class="col-md-6 form-group2 group-mail">
					<label class="control-label">Hindi</label>
					<select name="std_grade">
						<option>Select Class</option>
						<?php 
						$st_add_class = $ravi->Hindi($grade);
						while($st_results_class_fetch = $st_add_class->fetch_assoc())
						{
						?>
								<option value="<?php echo $st_add_class_fetch['class']; ?>"><?php echo $st_results_class_fetch['class']; ?></option>
								
						<?php } ?>
					</select>
						
					</div>	
					<div class="col-md-6 form-group1">
					<label class="control-label">english</label>
						<input type="text" placeholder="eg: Male or Female" required="" name="std_english">
					</div>
					<div class="clearfix"> </div>
					<div class="col-md-6 form-group1">
						<label class="control-label">maths</label>
						<input type="text" placeholder="Roll" required="" name="std_maths">
					</div>
					<div class="col-md-6 form-group1 form-last">
						<label class="control-label">science</label>
						<input type="text" placeholder="eg 29 Feb 200" required="" name="science">
					</div>
					<div class="col-md-6 form-group1">
						<label class="control-label">social</label>
						<input type="text" placeholder="Address" required="" name="std_social">
					</div>
					<div class="col-md-6 form-group1 form-last">
						<label class="control-label">rank</label>
						<input type="text" placeholder="District" required="" name="std_rank">
					</div>
				
					<div class="col-md-6 form-group1 form-last">
						<label class="control-label">grade</label>
						<input type="text" placeholder="Father Name" required="" name="std_grade">
					</div>
					<div class="col-md-6 form-group1">
						<label class="control-label">remarks</label>
						<input type="text" placeholder="Mother Name" required="" name="std_remarks">
					</div>
					
				</div>
					<div class="clearfix"> </div>
				<div class="col-md-12 form-group button-2">
					<input type="submit" class="btn btn-primary" value="Add Student" name="std_add_now">
					<button type="reset" class="btn btn-default">Reset</button>
				</div>
				<div class="clearfix"> </div>
			</form>

			<!---->
		</div>

	</div>
</div>
<!--//forms-->