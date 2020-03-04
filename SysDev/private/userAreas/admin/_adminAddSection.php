<h2 class = 'col-4'>Add a Section</h2>

<form class = 'col-6' action ="" method = "POST">
	
	<div class="form-group">
		<p>Search by</p>
	  <label class="col-form-label" for="course_id">Course ID</label>
	  <input type="text" class="form-control" id="course_id">

	  <br /><p>OR</p>
	
	  <label class="col-form-label" for="course_title">Course Title</label>
	  <input type="text" class="form-control" id="course_title">
	</div>


	<label for="days">Days</label>
	  <select class="form-control" id="days">
		  <option value="M-W">Monday / Wednessday</option>
		  <option value="T-Tr">Tuesday / Thursday</option>
		  <option value="MWF">Monday / Wednessday / Friday</option>
		  <option value="Monday">Monday</option>
		  <option value="Tuesday">Tuesday </option>
		  <option value="Wednessday">Wednessday</option>
		  <option value="Thursday">Thursday</option>
		  <option value="Friday">Friday</option>
		  <option value="Saturday">Saturday</option>
	   </select>

	   <label for="time">Credit-hours</label>
	  <select class="form-control" id="time">
		  <option value="1">1 credit</option>
		  <option value="2">2 credits</option>
		  <option value="3">3 credits</option>
		  <option value="4">4 credits</option>
		  <option value="5">5 credits</option>
	   </select>


	<button class="btn btn-primary" name = "submitNewSection" value = "submitNewSection">Add This Section</button>

</form>