$(document).ready(function(){
	$("#meeting_room_booking_container").hide();


	
	
	function ticker() {
	    $('#ticker li:first').slideUp(function() {
	        $(this).appendTo($('#ticker')).slideDown();
	    });
	}
	setInterval(function(){ ticker(); }, 3000);

	$(".close").click(function(){
		$("#menu_bar li").removeClass('active');
	})

	$(".zoomTarget .node1").click(function(){
		$('.this_block').remove();
		$('body').append($("<div class='this_block'><div class='profile-pic'>"+$(this).html()+"</div><div class='content-section'><p><label>Name : "+$(this).text()+"</label></p><p><label>Project : </label></p><p><label>Seat No. : </label></p></div></div>"));
	});

	$(".zoomContainer, #viewport").click(function(){
		$('.this_block').remove();
	});

	$( ".zoomTarget > .cubic_bunker > div" ).draggable({ containment: "#hr_cabin", scroll: false });
	$(".zoomTarget .node1").draggable({ containment: "#viewport", scroll: false });
	$(".zoomTarget .node2").draggable({ containment: "#viewport", scroll: false });
	$(".zoomTarget .node3").draggable({ containment: "#viewport", scroll: false });
	$(".zoomTarget .node4").draggable({ containment: "#viewport", scroll: false });
	$(".zoomTarget .node_b").draggable({ containment: "#viewport", scroll: false });

	$("#menu_bar li").click(function(){
		$("#menu_bar li").removeClass('active');
		$(this).addClass('active');
		meeting_time_slot();
	});

	$("#conference_booking").click(function(){
		$(".booking").remove('active');
		$(this).addClass('active')
		$("#meeting_room_booking_container").hide();
		$("#conference_room_booking_container").show();
	});

	$("#meeting_booking").click(function(){
		$(".booking").remove('active');
		$(this).addClass('active')
		$("#conference_room_booking_container").hide();
		$("#meeting_room_booking_container").show();
	});

	function pad2(number) {
	   return (number < 10 ? '0' : '') + number
	}

	function meeting_time_slot(){
		for(i=0;i<=24;i++){
			$("#time_slot").append("<option>"+pad2(i)+":00 to "+pad2(i+1)+":00</option>")
			$("#time_slot_meeting").append("<option>"+pad2(i)+":00 to "+pad2(i+1)+":00</option>")
		}
	}

	$("#ticket_it").click(function(){
		alert("This tab will only show to the IT Helpdesk Person,Functionality is remaining..!!");
	})
	
	$("#my_ticket").click(function(){
		window.open('www.google.com','_blank');
	})

	$(".open_ticket").click(function(){
		var ele = confirm("Do you really want to close this ticket");
		  if (ele==true) { 
		  		$(this).addClass('close_ticket')
		  		$(this).text('Close Ticket');
                $(this).attr('disabled','disabled');
          }
	})


	/*Calling API to get the data*/
	app.controller('EmployeeServiceController', ['$scope', 'cuelogicEmployee', function($scope, Employee_Detail) {
		//$("#ticket_block tbody").append("<tr><td>"+"vanshaj"+"</td></tr>")
		var total_available_seat = 146;
		var get_id;
		var new_array = new Array();

		$('#employee_id').change(function() {
			get_id = this.value;
			var employee_name = get_id.split(/(?=[A-Z])/);
			$("#emp_name").text(employee_name[1] +" "+employee_name[2]);
			$("#report_mngr_name").text(employee_name[0]);
		});

		Employee_Detail.success(function(data) {

			function desknumber(number){
			  if(number<10){
			  return '00'+number;
			  }
			  if(number>=10 && number<100){
			  	return '0'+number;
			  }
			  if(number>=100){
			  	return number;
			  }
			}
			
		    $scope.employees = data;
		    for(i=1;i<=total_available_seat;i++){
		    	$("#current_desk").append("<option>Cue"+desknumber(i)+"</option>")
		    	$("#relocate_to").append("<option>Cue"+desknumber(i)+"</option>");
		    }

		    for(i=1;i<=data.employees.length;i++){
		    	
		    	$("#employee_id").append("<option id="+data.employees[i].cue_id+" value="+data.employees[i].reporting_manager.email + data.employees[i].first_name + data.employees[i].last_name+">"+data.employees[i].cue_id+"</option>");
		    }

		  });


		}]);
});