<?php include_once("floor_server.php"); ?>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<title>Simple test</title>
		
	<!-- 	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
	 -->
	 	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
	 	<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
		<link href='http://fonts.googleapis.com/css?family=Fjord+One' rel='stylesheet' type='text/css'>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"></script>
		<script type="text/javascript" src="src/js/jquery.zoomooz-helpers.js"></script>
		<script type="text/javascript" src="src/js/jquery.zoomooz-anim.js"></script>
		<script type="text/javascript" src="src/js/jquery.zoomooz-core.js"></script>
		<script type="text/javascript" src="src/js/purecssmatrix.js"></script>
		<script type="text/javascript" src="src/js/sylvester.src.stripped.js"></script>
		<script type="text/javascript" src="src/js/jquery.zoomooz-zoomTarget.js"></script>
		<script type="text/javascript" src="src/js/jquery.zoomooz-zoomContainer.js"></script>
		<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
		<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="css/main.css">
		<script src="js/main.js"></script>
		<script type="text/javascript" src="js/angular.js"></script>
	</head>
	<body ng-app="myApp">
	<header>
		<nav id="menu_bar" class="nav-bar">
			<ul>
				<li><a href="javascript:void(0)" data-toggle="modal" data-target="#relocation">Relocation</a></li>
				<li><a href="javascript:void(0)" data-toggle="modal" data-target="#conference">Conference/Meeting Booking</a></li>
				<li id="ticket_it"><a href="my_ticket.html">My Ticket</a></li>
			</ul>
		</nav>
	</header>
	
	

	<!-- Conference Booking -->
	<div id="conference" class="modal fade" role="dialog">
	  <div class="modal-dialog">
	    <!-- Modal content-->
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	        <h4 class="modal-title">Conference/Meeting Room Booking</h4>
	      </div>
	      <div class="modal-body">
	      	<ul class="nav nav-pills">
			  <li id="conference_booking" class="booking pull-left"><a href="javascript:void(0)">Conference Room Meeting</a></li>
			  <li id="meeting_booking" class="booking pull-right"><a href="javascript:void(0)">Meeting Room Booking</a></li>
			</ul>

			<!-- Conference Meeting -->
			<div id="conference_room_booking_container">
				<div class="ticker col-md-12">
				    <h5>Conference Room Notification</h5>
				    <ul id="ticker">
				        <li>Dummy data is benign information that does not contain any useful data, but serves to reserve spac...</li>
				        <li>For testing, dummy data can also be used as stubs or pad to avoid software testing iss...</li>
				        <li>In operational use, dummy data may be transmitted for OPSEC purposes.</li>
				    </ul>
				</div>


		        <div class="col-md-12 conference_meeting_slot">
		        	<h4 class="text-center">Conference Room Slot</h4>
		        	<div class="img_conference text-center col-md-5">
		        			<img src="image/conference_meeting.png" width="90%" height="163px">
		        	</div>
		        	<span class="col-md-6 pull-right text-center">
		        	<div class="meetings">
		        			<div><label>Manager Name : </label><label>XYZ</label></div>
		        			<div><label>Project Name : </label><label>LMN</label></div>
		        			<div><label>Timing : </label><label>03:00 to 04:00</label></div>
		        	</div>
		        	<div class="meetings">
		        			<div><label>Manager Name : </label><label>XYZ</label></div>
		        			<div><label>Project Name : </label><label>LMN</label></div>
		        			<div><label>Timing : </label><label>03:00 to 04:00</label></div>
		        	</div>
		        	</span>
		        </div>
		        <div class="col-md-12 pull-right conference_meeting_slot">
		        	    <form role="form">
						  <div class="form-group">
						    <label for="email">Date</label>
						    <input type="date" class="form-control" id="email">
						  </div>


							<span class="form-group col-md-4">
						    <label for="pwd">Manager Name:</label>
		  						<div class="dropdown">
	  								<button class="btn dropdown-toggle" type="button" data-toggle="dropdown">Manager Name
	  								<span class="caret"></span></button>
	  								<ul class="dropdown-menu">
	   									<li><a href="#">XYZ</a></li>
	    								<li><a href="#">ZPW</a></li>
	   									<li><a href="#">SDA</a></li>
	  								</ul>
								</div>
							</span>

							<span class="form-group col-md-4">
						    <label for="pwd">Time Slot:</label>
		  						<div class="dropdown">
			  						<select id="time_slot" class="btn" type="button" data-toggle="dropdown">
										<option> -- Select -- </option>
									</select>
								</div>
							</span>

							<div class="col-md-12">
								<label>Invite Member:</label>
							    <div class="checkbox">
									<label><input type="checkbox" value="">Team Member 1</label>
								</div>
								<div class="checkbox">
								  <label><input type="checkbox" value="">Team Member 1</label>
								</div>
								<div class="checkbox">
									<label><input type="checkbox" value="">Team Member 1</label>
								</div>
								<div class="checkbox">
								  <label><input type="checkbox" value="">Team Member 1</label>
								</div>
							</div>
						<div class="col-md-12">
								<button type="submit" class="btn btn-default">Submit</button>
		        				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		     			</div>
						</form></div>
		        <div class="col-md-12 meeting_report">
		        	<div class="table-responsive">          
						  <table class="table">
						    <thead>
						      <tr>
						        <th>Sr. No.</th>
						        <th>Project Name</th>
						        <th>Project Manager</th>
						        <th>Slot Timing</th>
						        <th>Booked By</th>
						      </tr>
						    </thead>
						    <tbody>
						      <tr>
						        <td>1</td>
						        <td>Anna</td>
						        <td>Pitt</td>
						        <td>35</td>
						        <td>New York</td>
						      </tr>
						       <tr>
						        <td>1</td>
						        <td>Anna</td>
						        <td>Pitt</td>
						        <td>35</td>
						        <td>New York</td>
						      </tr>
						       <tr>
						        <td>1</td>
						        <td>Anna</td>
						        <td>Pitt</td>
						        <td>35</td>
						        <td>New York</td>
						      </tr>
						       <tr>
						        <td>1</td>
						        <td>Anna</td>
						        <td>Pitt</td>
						        <td>35</td>
						        <td>New York</td>
						      </tr>
						       <tr>
						        <td>1</td>
						        <td>Anna</td>
						        <td>Pitt</td>
						        <td>35</td>
						        <td>New York</td>
						      </tr>

						    </tbody>
						  </table>
						  </div>
						</div>		</div>
	      	<!-- Meeting Room -->
	        <div id="meeting_room_booking_container">
	         <div class="ticker col-md-12">
				    <h5>Meeting Room Notification</h5>
				    <ul id="ticker">
				        <li>Dummy data is benign information that does not contain any useful data, but serves to reserve spac...</li>
				        <li>For testing, dummy data can also be used as stubs or pad to avoid software testing iss...</li>
				        <li>In operational use, dummy data may be transmitted for OPSEC purposes.</li>
				    </ul>
				</div>
		        <div class="col-md-12 conference_meeting_slot">
		        	<h4 class="text-center">Meeting Room Slot</h4>
		        	<div class="img_conference text-center col-md-5">
		        			<img src="image/meeting_room.png" width="90%" height="163px">
		        	</div>
		        	<span class="col-md-6 pull-right text-center">
		        	<div class="meetings">
		        			<div><label>Manager Name : </label><label>XYZ</label></div>
		        			<div><label>Project Name : </label><label>LMN</label></div>
		        			<div><label>Timing : </label><label>03:00 to 04:00</label></div>
		        	</div>
		        	<div class="meetings">
		        			<div><label>Manager Name : </label><label>XYZ</label></div>
		        			<div><label>Project Name : </label><label>LMN</label></div>
		        			<div><label>Timing : </label><label>03:00 to 04:00</label></div>
		        	</div>
		        	</span>
		        </div>
	       		<div class="col-md-12 pull-right conference_meeting_slot">
	        	    <form role="form">
					  <div class="form-group">
					    <label for="email">Date</label>
					    <input type="date" class="form-control" id="email">
					  </div>

					    	<span class="form-group col-md-4">
						    <label for="pwd">Manager Name:</label>
		  						<div class="dropdown">
	  								<button class="btn dropdown-toggle" type="button" data-toggle="dropdown">Manager Name
	  								<span class="caret"></span></button>
	  								<ul class="dropdown-menu">
	   									<li><a href="#">XYZ</a></li>
	    								<li><a href="#">ZPW</a></li>
	   									<li><a href="#">SDA</a></li>
	  								</ul>
								</div>
							</span>

							<span class="form-group col-md-4">
						    <label for="pwd">Time Slot:</label>
		  						<div class="dropdown">
			  						<select id="time_slot_meeting" class="btn" type="button" data-toggle="dropdown">
										<option> -- Select -- </option>
									</select>
								</div>
							</span>

							<div class="col-md-12">
								<label>Invite Member:</label>
							    <div class="checkbox">
									<label><input type="checkbox" value="">Team Member 1</label>
								</div>
								<div class="checkbox">
								  <label><input type="checkbox" value="">Team Member 1</label>
								</div>
								<div class="checkbox">
									<label><input type="checkbox" value="">Team Member 1</label>
								</div>
								<div class="checkbox">
								  <label><input type="checkbox" value="">Team Member 1</label>
								</div>
							</div>
					 <div class="col-md-12">
						<button type="submit" class="btn btn-default">Submit</button>
	        			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	     			</div>
					</form>
				</div>
		        <div class="col-md-12 meeting_report">
		        	<div class="table-responsive">          
						  <table class="table">
						    <thead>
						      <tr>
						        <th>Sr. No.</th>
						        <th>Project Name</th>
						        <th>Project Manager</th>
						        <th>Slot Timing</th>
						        <th>Booked By</th>
						      </tr>
						    </thead>
						    <tbody>
						      <tr>
						        <td>1</td>
						        <td>Anna</td>
						        <td>Pitt</td>
						        <td>35</td>
						        <td>New York</td>
						      </tr>
						       <tr>
						        <td>1</td>
						        <td>Anna</td>
						        <td>Pitt</td>
						        <td>35</td>
						        <td>New York</td>
						      </tr>
						       <tr>
						        <td>1</td>
						        <td>Anna</td>
						        <td>Pitt</td>
						        <td>35</td>
						        <td>New York</td>
						      </tr>
						       <tr>
						        <td>1</td>
						        <td>Anna</td>
						        <td>Pitt</td>
						        <td>35</td>
						        <td>New York</td>
						      </tr>
						       <tr>
						        <td>1</td>
						        <td>Anna</td>
						        <td>Pitt</td>
						        <td>35</td>
						        <td>New York</td>
						      </tr>

						    </tbody>
						  </table>
					</div>
				</div>
	        </div>


	      </div>
	    </div>
	  </div>
	</div>


		<!--Relocation-->	
		<div id="relocation" class="modal fade" role="dialog" ng-controller="EmployeeServiceController">
		  <div class="modal-dialog">
		    <!-- Modal content-->
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title">Seat Relocation</h4>
		        <h6 class="text-center status_relocation">Your relocation status : <span>Pending/Accepted/Done</span></h6>
		      </div>
		      <div class="modal-body">

		       	<div class="col-md-12 text-center">
		       		<img src="image/relocation.png">
		       	</div>
		       	<div class="col-md-12">
		       		<form role="form">
					  <div class="form-group date_time">
					    <label for="email">Date</label>
					    <input type="date" class="form-control" id="email">
					  </div>

					  <div class="form-group col-md-6">
					    <label for="pwd">Employee ID:</label>
	  						<div class="dropdown">
									<select id="employee_id" class="btn" type="button" data-toggle="dropdown">
										<option> -- Select -- </option>
									</select>
							</div>
						</div>

						<div class="form-group col-md-6 emp_name_feild">
					    <label for="pwd">Employee Name:</label>
	  						<div class="dropdown">
									<label id="emp_name">Employee name</label>
							</div>
						</div>

						<div class="form-group col-md-6">
					    <label for="pwd">Project Name:</label>
	  						<div class="dropdown">
									<select id="project_name" class="btn" type="button" data-toggle="dropdown">
										<option> -- Select -- </option>
									</select>
							</div>
						</div>

						<div class="form-group col-md-6 emp_name_feild">
					    <label>Reporting Manager email:</label>
	  						<div class="dropdown">
	  							<label id="report_mngr_name">Reporting Manager</label>
								<!-- 	<select id="employee_name" class="btn" type="button" data-toggle="dropdown">
										<option> -- Select -- </option>
									</select> -->
							</div>
						</div>


						<div class="form-group col-md-6">
					    <label>Current Desk:</label>
	  						<div class="dropdown">
									<select id="current_desk" class="btn" type="button" data-toggle="dropdown">
										<option> -- Select -- </option>
									</select>
							</div>
						</div>

						<div class="form-group col-md-6">
					    <label>Relocate To:</label>
	  						<div class="dropdown">
									<select id="relocate_to" class="btn" type="button" data-toggle="dropdown">
										<option> -- Select -- </option>
									</select>
							</div>
						</div>
					    
					     <div class="form-group col-md-12">
					     <label>Reason for relocation:</label>
					     <textarea class="form-control" rows="5" cols="3" id="comment"></textarea>
					     </div>



					     <div class='col-md-12'>
							<button type='submit' class='btn btn-default' id="submit_btn">Submit</button>
	        				<button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>
	     				</div>
					  	

					  	<script>

					  	$("#submit_btn").click(function(){
							       $.ajax({
							          url: "floor_server.php&f=hello",
							          type: "GET"
							          success: function(data){
							          	alert(data);
							              //Do something here with the "data"
							          }
							       });

							    });

					  	</script>




					</form>
		       	</div>
		      </div>
		    </div>
		  </div>
		</div>

		<!--Where I am-->	
		<div id="where_i_am" class="modal fade" role="dialog">
		  <div class="modal-dialog">
		    <!-- Modal content-->
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title">Where I am ?</h4>
		      </div>
		      <div class="modal-body">
		        <p>No functionality</p>
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default close" data-dismiss="modal">Close</button>
		      </div>
		    </div>
		  </div>
		</div>

		<div id="viewport" class="zoomViewport">
			<div id="content" class="zoomContainer">
				<div class="hr_room room zoomTarget">
					<div id="hr_cabin" class="cubic_bunker">
						<div id="Cue006" class="node_b"></div>
						<div id="Cue005" class="node_b"></div>
						<div id="Cue004" class="node_b"></div>
						<div id="Cue003" class="node_b"></div>
						<div id="Cue002" class="node_b"></div>
					</div>
					<div id="hr_cabin Cue001" class="node_b right_hr"></div>
					HR Cabin
				</div>
				<div class="cabin room zoomTarget">
					Vikrant's Cabin
				</div>
				<div class="cabin room zoomTarget">
					Meeting Room
				</div>
				<div class="exit"></div>
				<div class="cabin store_room room zoomTarget">
					Store Room
				</div>
				<span class="clearer"></span>
					<div class="bay" id="bay_container">
					    <div class="admin-section zoomTarget">
							<div class="node1 node" id="Cue146"><img src="website-assets/images/chrome.png"></div>
							<div class="node2 node" id="Cue145">IT Helpdesk</div>
						</div>
						<div class="admin-section zoomTarget">
							<div class="node1 node" id="Cue144">Empty</div>
							<div class="node2 node" id="Cue143">Empty</div>
						</div>
					   <div class="room bay_block">
						<div class="cubic zoomTarget">
						Cyclops/ Admin/IT
							<div class="node1" id="Cue138"></div>
							<div class="node2" id="Cue137"></div>
							<div class="node3" id="Cue131"></div>
							<div class="node4" id="Cue130"></div>
						</div>
						<div class="cubic zoomTarget">
						Cyclops
							<div class="node1" id="Cue136"></div>
							<div class="node2" id="Cue135"></div>
							<div class="node3" id="Cue129"></div>
							<div class="node4" id="Cue128"></div>
						</div>
						<div class="cubic zoomTarget">
						Kumolus
							<div class="node1" id="Cue123"></div>
							<div class="node2" id="Cue122"></div>
							<div class="node3" id="Cue115"></div>
							<div class="node4" id="Cue114"></div>
						</div>
						<div class="cubic zoomTarget">
						Kumolus
							<div class="node1" id="Cue121"></div>
							<div class="node2" id="Cue120"></div>
							<div class="node3" id="Cue113"></div>
							<div class="node4" id="Cue112"></div>
						</div>
					</div>
					<span class="clearer"></span>
					<div class="room bay_block" id="bay_container">
						<div class="cubic zoomTarget">
						Kumolus
							<div class="node1" id="Cue107"></div>
							<div class="node2" id="Cue106"></div>
							<div class="node3" id="Cue100"></div>
							<div class="node4" id="Cue099"></div>
						</div>
						<div class="cubic zoomTarget">
						Kumolus
							<div class="node1" id="Cue105"></div>
							<div class="node2" id="Cue104"></div>
							<div class="node3" id="Cue098"></div>
							<div class="node4" id="Cue097"></div>
						</div>
						<div class="cubic zoomTarget">
						Foundly
							<div class="node1" id="Cue092"></div>
							<div class="node2" id="Cue091"></div>
							<div class="node3" id="Cue084"></div>
							<div class="node4" id="Cue083"></div>
						</div>
						<div class="cubic zoomTarget">
						Healthination
							<div class="node1" id="Cue090"></div>
							<div class="node2" id="Cue089"></div>
							<div class="node3" id="Cue082"></div>
							<div class="node4" id="Cue081"></div>
						</div>
					</div>
					<span class="clearer"></span>
					<div class="room bay_block">
						<div class="cubic zoomTarget">
						Tandem
							<div class="node1" id="Cue076"></div>
							<div class="node2" id="Cue075"></div>
							<div class="node3" id="Cue069"></div>
							<div class="node4" id="Cue068"></div>
						</div>
						<div class="cubic zoomTarget">
						Tandem
							<div class="node1" id="Cue074"></div>
							<div class="node2" id="Cue073"></div>
							<div class="node3" id="Cue067"></div>
							<div class="node4" id="Cue066"></div>
						</div>
						<div class="cubic zoomTarget">
						Sales
							<div class="node1" id="Cue061"></div>
							<div class="node2" id="Cue060"></div>
							<div class="node3" id="Cue053"></div>
							<div class="node4" id="Cue052"></div>
						</div>
						<div class="cubic zoomTarget">
						Sales
							<div class="node1" id="Cue059"></div>
							<div class="node2" id="Cue058"></div>
							<div class="node3" id="Cue051"></div>
							<div class="node4" id="Cue050"></div>
						</div>
					</div>
					<span class="clearer"></span>
					<div class="room bay_block" id="bay_container">
						<div class="cubic zoomTarget">
						Vacant
							<div class="node1" id="Cue045"></div>
							<div class="node2" id="Cue044"></div>
							
						</div>
						<div class="cubic zoomTarget">
						Managers
							<div class="node1" id="Cue043">Prashant</div>
							<div class="node2" id="Cue042">Vivek</div>
							
						</div>
					</div>
					<div class="bay_divider"></div>
					<div class="bay_divider"></div>
					<div class="conference cabins">
						<div class="restritced_area zoomTarget">Restricted Area</div>
						<div class="neel_cabin cabin zoomTarget">Neel's Cabin</div>
						<div class="nikhil_cabin cabin zoomTarget">Nikhil's Cabin</div>
					</div>

					</div>

					<!-- Second Bay Start -->
					<div class="bay bay_second" id="bay_container">
					   <div class="room bay_block">
					   <div class="admin-section zoomTarget">
							<div class="node1 node" id="Cue142"></div>
							<div class="node2 node" id="Cue141"></div>
						</div>
						<div class="admin-section zoomTarget">
							<div class="node3 node" id="Cue140"></div>
							<div class="node4 node" id="Cue139"></div>
						</div>
						<div class="cubic zoomTarget">
							2nd MD
							<div class="node1" id="pillar"></div>
							<div class="node2" id="Cue134"></div>
							<div class="node3" id="Cue127"></div>
							<div class="node4" id="Cue126"></div>
						</div>
						<div class="cubic zoomTarget">
							2nd MD
							<div class="node1" id="Cue133"></div>
							<div class="node2" id="Cue132"></div>
							<div class="node3" id="Cue125"></div>
							<div class="node4" id="Cue124"></div>
						</div>
						<div class="cubic zoomTarget">
							2nd MD
							<div class="node1" id="Cue119"></div>
							<div class="node2" id="Cue118"></div>
							<div class="node3" id="Cue111"></div>
							<div class="node4" id="Cue110"></div>
						</div>
						<div class="cubic zoomTarget">
							2nd MD
							<div class="node1" id="Cue117"></div>
							<div class="node2" id="Cue116"></div>
							<div class="node3" id="Cue109"></div>
							<div class="node4" id="Cue108"></div>
						</div>
					</div>
					<span class="clearer"></span>
					<div class="room bay_block" id="bay_container">
						<div class="cubic zoomTarget">
							2nd MD
							<div class="node1" id="pillar"></div>
							<div class="node2" id="Cue103"></div>
							<div class="node3" id="Cue093"></div>
							<div class="node4" id="Cue094"></div>
						</div>
						<div class="cubic zoomTarget">
							2nd MD
							<div class="node1" id="Cue102"></div>
							<div class="node2" id="Cue101"></div>
							<div class="node3" id="Cue095"></div>
							<div class="node4" id="Cue096"></div>
						</div>
						<div class="cubic zoomTarget">
						HRMS
							<div class="node1" id="Cue088"></div>
							<div class="node2" id="Cue087"></div>
							<div class="node3" id="Cue080"></div>
							<div class="node4" id="Cue079"></div>
						</div>
						<div class="cubic zoomTarget">
						HRMS
							<div class="node1" id="Cue088"></div>
							<div class="node2" id="Cue085"></div>
							<div class="node3" id="Cue078"></div>
							<div class="node4" id="Cue077"></div>
						</div>
					</div>
					<span class="clearer"></span>
					<div class="room bay_block" id="bay_container">
						<div class="cubic zoomTarget">
						Surescore
							<div class="node1" id="pillar"></div>
							<div class="node2" id="Cue072"></div>
							<div class="node3" id="Cue065"></div>
							<div class="node4" id="Cue064"></div>
						</div>
						<div class="cubic zoomTarget">
						Surescore
							<div class="node1" id="Cue071"></div>
							<div class="node2" id="Cue070"></div>
							<div class="node3" id="Cue063"></div>
							<div class="node4" id="Cue062"></div>
						</div>
						<div class="cubic zoomTarget">
						Surescore
							<div class="node1" id="Cue057"></div>
							<div class="node2" id="Cue056"></div>
							<div class="node3" id="Cue049"></div>
							<div class="node4" id="Cue048"></div>
						</div>
						<div class="cubic zoomTarget">
						Surescore
							<div class="node1" id="Cue055"></div>
							<div class="node2" id="Cue054"></div>
							<div class="node3" id="Cue047"></div>
							<div class="node4" id="Cue046"></div>
						</div>
					</div>
					<span class="clearer"></span>
					<div class="room bay_block" id="bay_container">
						<div class="cubic zoomTarget">
							<div class="node1" id="pillar"></div>
							<div class="node2" id="Cue041">Vanshaj</div>
						</div>
						<div class="cubic zoomTarget">
							<div class="node1" id="Cue040"></div>
							<div class="node2" id="Cue039"></div>
						</div>
					</div>
					<div class="bay_divider"></div>
					<div class="bay_divider"></div>
					<div class="room conference zoomTarget"> Conference Room</div>
					</div>
					<!-- <span class="clearer"></span> -->

			     	<div class="bay bay_third">
			     		<div class="cafeteria zoomTarget"> Cafeteria</div>
			     		<span class="clearer"></span>
			     		<div class="server_room zoomTarget"> Server Room</div>
			     		<div class="exit_tt"></div>
			     		<div class="room open_room ">
			     			<div class="account_room zoomTarget">
			     			<div class="node_b pull-right" id="Cue038"></div>
			     			</div>
			     			<div class="call_room zoomTarget"> 
			     			<div class="node_b" id="Cue037"></div>
			     			<div class="node_b" id="Cue036"></div>
			     			<div class="node_b" id="Cue035"></div>
			     			</div>
			     		</div>
			     		<div class="room bunker">
			     			<div class="cubic_bunker zoomTarget" id="bay_container">
			     		
								<div class="node_b" id="Cue034"></div>
								<div class="node_b" id="Cue033"></div>
								<div class="node_b" id="Cue032"></div>
								<div class="node_b" id="Cue031"></div>
								<div class="node_b" id="Cue030"></div>
							</div>
							<div class="bay_divider"></div>
							<div class="cubic_bunker zoomTarget" id="bay_container">
							
								<div class="node_b" id="Cue029"></div>
								<div class="node_b" id="Cue028"></div>
								<div class="node_b" id="Cue027"></div>
								<div class="node_b" id="Cue026"></div>
								<div class="node_b" id="Cue025"></div>
							</div>
							<div class="cubic_bunker zoomTarget" id="bay_container">
								<div class="node_b" id="Cue024"></div>
								<div class="node_b" id="Cue023"></div>
								<div class="node_b" id="Cue022"></div>
								<div class="node_b" id="Cue021"></div>
								<div class="node_b" id="Cue020"></div>
							</div>
							<div class="bay_divider"></div>
							<div class="cubic_bunker zoomTarget cube_three" id="bay_container">
								<div class="node_b" id="Cue019"></div>
								<div class="node_b" id="Cue018"></div>
								<div class="node_b" id="Cue017"></div>
							</div>
							<div class="cubic_bunker zoomTarget cube_three" id="bay_container">
								<div class="node_b" id="Cue016"></div>
								<div class="node_b" id="Cue015"></div>
								<div class="node_b" id="Cue014"></div>
							</div>
							<div class="bay_divider"></div>
							<div class="small_bunker_container" id="bay_container">
								<div class="cubic_bunker small_bunker zoomTarget">
									<div class="node_b" id="Cue013"></div>
									<div class="node_b" id="Cue012"></div>
								</div>
								<div class="cubic_bunker small_bunker zoomTarget">
									<div class="node_b" id="Cue011"></div>
									<div class="node_b" id="Cue010"></div>
								</div>
							</div>
							<div class="bay_divider"></div>
							<div class="cubic_bunker zoomTarget cube_three" id="bay_container">
								<div class="node_b" id="Cue009"></div>
								<div class="node_b" id="Cue008"></div>
								<div class="node_b" id="Cue007"></div>
							</div>
						</div>
			     		</div>
			     	</div>

			</div>
		</div>
			<script src="js/app.js"></script>
			<script src="js/employee_detail.js"></script>
	</body>
	
	

		<!--************************
		**  GOOGLE ANALYTICS      **
		*************************-->
			
			<script type="text/javascript">
			var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
			document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
			</script>
			<script type="text/javascript">
			try {
			var pageTracker = _gat._getTracker("UA-16288001-1");
			pageTracker._trackPageview();
			} catch(err) {}
			</script>

</html>
	