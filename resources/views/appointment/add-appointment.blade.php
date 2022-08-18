@extends('layouts.master-layouts')
@section('title') {{ __('New Appointement Page') }} @endsection
<style>
    body {
        background-color: #f8f8fb !important;
    }
      td.icons i {
    border: 2px solid;
    padding: 5px;
    cursor: pointer;
}

.topnav{
	margin-top:0px !important;
	top:70px;
}

.singleline {
	 display:flex;
	 flex-wrap: wrap;
}
.form-control {
    width: auto !important;
}
.main .form-control {
    width: 50px !important;
}
.BOX {
    background: #9ae1f7;
    height: 45px;
    padding-top: 14px;
    width: 29px;
}
.BOX1 {
    border:1px solid #9ae1f7;
    height: 56px;
    width: 32px;
}
.hideDiv{
	display:none;
}
.APPOINTMENT {
    margin-top: 2px;
}
td {
    padding: 0px !important;
}
.main h5 {
    padding-top: 8px;
    padding-right: 25px;

}
.main h6 {
    padding-top: 14px;
    padding-right: 25px;
}
.second_question h6 {
    padding-top: 14px;
    padding-right: 25px;
}

.second_question h5 {
    padding-top: 8px;
    padding-right: 25px;
}
.mt-3.fourth_question h5 {
    padding-top: 8px;
    padding-right: 25px;
}

.mt-3.fourth_question1 h6 {
    padding-top: 14px;
    padding-right: 25px;
}
h6 {
    padding-top: 14px;
    padding-right: 25px;
}

 h5 {
    padding-top: 14px;
        width: 50%;
    padding-right: 25px;
    text-align: left;
	padding-left: 10%;
}



.table thead th {
    vertical-align: bottom;
   border-bottom: unset !important; 
   font-size: 12px !important;
   text-transform: capitalize;
}
td.icons.d-flex {
    padding: 3px 17px !important;
}

.mt-3.third_question1 input {
    margin-left: 170px;
}

.mt-3.third_question h5 {
	 padding-top: 8px;
       width: 50%;
    padding-right: 25px;
    text-align: left;
}

.mt-3.fourth_question1 input {
    margin-left: 170px;
}

.mt-3.fourth_question2 input {
    margin-left: 170px;
}

.mt-3.fourth_question3 input {
    margin-left: 170px;
}
.show_table_data {
    display: flex;
    flex-wrap: wrap;
    padding-bottom: 20px;
}
.table input {
    border:0px solid white ;
}
td.icons.d-flex i {
    margin-right: 7px;
}
td.icons {
    padding: 7px !important;
    text-align: center;
	color:#556ee6;
}
.alert {
    height: 45px;
    padding: 0.75rem 0.25rem !important;
    margin-left: 8px;
    font-size: 12px;
}
.table_data table {
    width: 100% !important;
}
  </style>
@section('body')
<body data-topbar="dark" data-layout="horizontal">
  @endsection 
    @section('content')
        <!-- start page title -->
        @component('components.breadcrumb')
            @slot('title') INSERIR RESULTADO @endslot
            @slot('li_1') Dashboard @endslot
            @slot('li_2') Appointment @endslot
        @endcomponent 		
		  <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
					 <a href="{{url('pending-appointment')}}">
					 <button class="btn btn-primary" type="button"> 
               
							{{__('Back Appointment')}}</button></a>
			
					 
                        <!-- Tab panes -->
                        <div class="tab-content text-muted mt-3">
                            <div class="tab-pane active" id="PendingAppointmentList" role="tabpanel">
                                <div class="table-responsive">

                                    <table class="table table-bordered dt-responsive nowrap "
                                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
									   <tr>
										   <th>{{__('Id Appointment')}}</th>
										   <th>{{__('name')}}</th>
										   <th>{{__('Sex')}}</th>
										   <th>{{__('Idade')}}</th>
										   <th>{{__('Date')}}</th>
										   <th>{{__('Status')}}</th>
										   <th></th>
									   </tr>
								   </thead>
                                        <tbody>
                                             <tr>
											   <td>
												<input type="text" class="form-control appointmentId" onkeyup="getAppointment(this.value)"/>   
											   </td>
											   <td>
												  <input type="text" class="form-control" id="name" readonly /> 
											   </td>
											   <td>
												 <input type="text" class="form-control" id="sex" readonly/>  
											   </td>
											   <td>
												  <input type="text" class="form-control" id="age" readonly/> 
											   </td>
											   <td>
												  <input type="text" class="form-control" id="date" readonly/> 
											   </td>
											   <td>
												  <input type="text" class="form-control" id="status1" readonly/> 
											   </td>
											   <td class="icons" >  
												   <span class="d-flex justify-content-between">                     
														<i class="fa fa-arrow-left" onclick="setOperation(-1)"></i>
														<i class="fa fa-arrow-right" onclick="setOperation(1)"></i>
												   </span>
											   </td>
                                      </tr> 
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-md-12 text-center mt-3">
                                	<div class="show_table_data"></div>
                                         <div class="row" >
											   <div class="col-md-12 exam_box">
										  
											   </div>
										   <div class="col-md-8 hideDiv">
												<div class="table_data"></div>
											   <h3 class='parameter_name'> </h3>


											   <div class="parameter">
											  
											   </div>
											   
									  
											<div class="text-center my-4">
											<input type="hidden" name="examId" value="" id="examId"/>
												<button class="btn btn-outline-primary mr-4" type="button">Cancelar</button>
												<button class="btn btn-primary" id="save" type="button" data-id onclick="getResults(this)">Salvar</button>
											</div>
										   </div>
										   <div class="col-md-4 hideDiv question_box text-left">
                                                 <h4 style="color:red;">Subtitle: <span style="color:blue;">SATISFACTORY</span></h4>
										   </div>
									   </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
           
           
		 
	   @endsection
           @section('script')
        <!-- Plugins js -->
        <script src="{{ URL::asset('assets/libs/datatables/datatables.min.js') }}"></script>
        <script src="{{ URL::asset('assets/libs/jszip/jszip.min.js') }}"></script>
        <script src="{{ URL::asset('assets/libs/pdfmake/pdfmake.min.js') }}"></script>
        <!-- Init js-->
        <script src="{{ URL::asset('assets/js/pages/datatables.init.js') }}"></script>
        <script src="{{ URL::asset('assets/js/pages/notification.init.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    @endsection
     @section('script-bottom')
        <script>

        	var cytology_subitem=[]
            function getAppointment(id){
                $.ajax({
              type: "POST",
              url: "show-appointment-detail",
              data: {id:id, "_token": "{{ csrf_token() }}"},
              success:function(data){ 

				let status1123;
			     var html='';           
                $('#name').val(data.data[0].patient_name);
                $('#sex').val(data.data[0].gender);
                $('#age').val(data.data[0].age);
                $('#date').val(data.data[0].appointment_date);
                $('#save').attr('data-id',id);		
                if(data.Exam.length > 0){
                   for(var i=0; i<data.Exam.length;i++){
				let obj = data.result.find(o => o.exams_id ==data.Exam[i].exam_id);
				let status111 = obj==undefined ? '' : 'OK';
			 //status1123 = (data.result.length==data.Exam.length) ? 'Completed' : (obj == undefined && data.result.length!=1) ? 'Partial' : 'Pending';
			 //status1123 = (obj==undefined) ? 'Pending' : 'Completed';
				 //status1123 = obj==undefined && data.Exam.length? 'Partial' : 'Completed';
                    //console.log('rrrr');
          html+= "<div class='d-flex' onclick='getExamParameter("+data.Exam[i].exam_id+")'><div class='BOX'>"+status111+"</div><div class='alert alert-warning'  role='alert'>"+data.Exam[i].name+"</div>"+
                     "</div>"
          }
		  
		  var resArr = [];
		data.result.forEach(function(item){
		  var i = resArr.findIndex(x => x.exams_id == item.exams_id);
		  if(i <= -1){
			resArr.push(item);
		  }
		});
		status1123 = (data.Exam.length==resArr.length)? 'Completed' : 'Pending';
		if(status1123=='Completed'){
			updateAppointmentStatus(id,'Completed')
		}
		else{
				updateAppointmentStatus(id,'Pending')
		}
				$('#status1').val(status1123);
                $('.exam_box').html(html);
                }
              }
              });
            }


	function updateAppointmentStatus(id,status){
		 $.ajax({
              type: "POST",
              url: "updateStatus",
              data: {id:id,status:status,"_token": "{{ csrf_token() }}"},
              success:function(data){
				 console.log(data);
              } 
              })
	}
            function getExamParameter(id){
				//console.log("testing"); return false;
		   var appoint_id = $(".appointmentId").val();
                $.ajax({
              type: "GET",
              url: "getexambyid",
              data: {id:id,appoint_id:appoint_id, "_token": "{{ csrf_token() }}"},
              success:function(data){
				  console.log(data);
				  
              	  $('.hideDiv').show()
				  if(appoint_id==10083){
					  	$("#examId").val(id)
					 cytology_subitem=[];  
					 cytology_subitem = data.cytology_subitems;
					  console.log('yessss');
					  if(data.new_param.length>0){
						  $('.table_data').html(data.new_param[0].result);
					  }
					else{
					console.log('testststtst')
					  	$('.table_data').html("<div style='display:flex;flex-wrap: wrap;' class='main'><h5>"+data.cytolies[0].name+"</h5><input onkeyup='getCode(this)'  type='text' id='"+data.cytolies[0].name+"' data-id  style='width:50px !important;'class='form-control cytology_subitem'></div>");
					 data.cytology_subitems.forEach(function(item){
					  if(item.cytology_Id==24){
					  	  $('.question_box span').text('SATISFACTORY');
					  		$('.question_box').append("<p>"+item.code+":"+item.cytology_subitem+"</p>");
							$('.cytology_subitem').attr('data-id',item.cytology_Id);
					  }
					});
					}
				  	}

			

				  else{
				  	$('.question_box').hide();
				  	var html = '';
				  var table_data = data.exams[0].exam_editor;
				  //console.log(table_data);return false;
				
				   $('.table_data').html(table_data); 
				    $('.table_data table').attr('id','result_table');
					var i = 0;
					$('.table_data table tbody td:contains("#")').addClass('singleline');
				  var td_html = $('.table_data table tbody td:contains("#")').each(function(){
					  console.log(i);
					  if(typeof data.new_param[i] === 'undefined') {
						var results = '';

						}
					else {
						var results = data.new_param[i].result
					}
					  var size = data.data[i].size; 
					  var type = data.data[i].type;
					  type = type=='numeric' ? 'number' : type;		  
					  var id = type=='number' ? 'checkinput' :'';
					  var text = type=='text' ? 'getText' : '';
					  //console.log(type); return false;
					  var limit = type=='number' ? 'max ='+size+'' : 'maxlength='+size+''
					  //console.log(limit);return false;
					  if(type=='number'){
	             var input = "<input type='"+type+"' data-id='"+data.data[i].id+"' value='"+results+"' class='form-control' id='"+id+"' "+limit+">"
					  }
					  else{					
						  var input = "<input data-id='"+data.data[i].id+"' value='"+results+"' class='form-control' type='"+type+"' id='"+text+"' "+limit+">"

					  }
					  //console.log(size);
					  //console.log(type);
					  //console.log($(this).text());
					 var string =  $(this).text().split("##");
					 const changed = $(this).text().replace("##"+string[1]+"##", input);
					 //console.log(string);
					 $(this).html(changed);
					 i++;
					 //console.log(changed);
				  }) 
				  
				  $("#examId").val(id)

				  }

			
              } 
              })
            }
	
       function GetMaxLength(a) {
			var attr = $(a).attr("max");	
			var length = $(a).val().length;
			if(length>attr){
				console.log('testing');
				 e.preventDefault();
				 return false;
				//.preventDefault();
			}
			
       }
		
   
		function setOperation(val){	
			$('.table_data').html('');
			var value = $('.appointmentId').val();
			var id = parseInt(value)+val;	
			$('.appointmentId').val(id);			
			getAppointment(id)
			//getExamParameter(id)	
			
		};


		function getCode(a){
			var code = $(a).val();
			console.log('asdasdasd');
			$('.cytology_subitem').attr('value',code)
			var data_id = $(a).attr('data-id');
		
			cytology_subitem.forEach(function(item){
				  if(item.code==code && data_id==item.cytology_Id){
				  	
				  	$(a).parent().find('h6').remove()
				  		$('.main').append("<h6>"+item.cytology_subitem+"</h6>");
				
				  }
				});
		}


		function anotherQuestion(a){
			var code = $(a).val();
			$('.second_question_parameter').attr('value',code)
			var data_id = $(a).attr('data-id');
		
			cytology_subitem.forEach(function(item){
				  if(item.code==code && 27==item.cytology_Id){
				  	console.log(item)
			  	$('.second_question h6').remove()
			$('.second_question').append("<h6>"+item.cytology_subitem+"</h6>");
				
				  }
				});
		}

function myFunction(a,size){
	var value = $(a).val();
	var max = $(a).attr('max');
	console.log(max);
	if(value.length>size){
		return false;
	}
}		
function getJson(){
    var table = document.getElementById('result_table');
	//console.log(table);return false;
    var tr = table.getElementsByTagName('tr');
    var jObject = {}
    for (var i = 0; i < tr.length; i++){
        var td = tr[i].getElementsByTagName('td');

        for (var j = 0; j < td.length; j++){
            jObject['table_tr' + i + '_td_' + j] = td[j].innerHTML;
        }
    }
    return jObject;
}

	function getResults1(){
	        var table_json = getJson();
			var res_array = []
			var inputs = $('.parameter .form-control');
			inputs.each(function(i, obj) {
			   let res_obj = {
				   'value':$(this).val(),
				   'id':$(this).attr('data-id')
			   }
			   res_array.push(res_obj);
			 
           });
		   //console.log(res_array)		   
		  $.ajax({
              type: "POST",
              url: "insertResultParameters",
              data: {data:res_array,table_json:JSON.stringify(table_json),"_token": "{{ csrf_token() }}"},
              success:function(data){
				 console.log(data);
              } 
              })
}

     //$( "#checkinput" ).keypress(function() {
        //console.log( "testing" );
       //});
		
		function getResults(a){	
			var id = $(".appointmentId").val();
			var exam_id = $("#examId").val();
		
			var res_array = []
			var inputs = $('#result_table .form-control');
		  if(id==10083){
		       var all_div = $('.table_data div');
	           var Status  = '';
		       	all_div.each(function(j,val){
		       		// if($(this).find('h5').length>1){

		       		// }
		       		//console.log($(this).find('h5').length);
		       		let key = $(this).find('h5').text();
		       		let value = $(this).find('h6').text();
		       		let res_obj = {
		       		    [key]:value
		       		}
		       		//res_array[key] = value
		       		res_array.push(res_obj);
		       	})

		     
		 }

		 else{	
		 	var Status  = $("#status1").val();	 	
				inputs.each(function(i, obj) {
				   let res_obj = {
					   'appointment_id':id,
					   'result':$(this).val(),
					   'new_parameter_id':$(this).attr('data-id'),
					   'exams_id':exam_id
				   }
				   res_array.push(res_obj);
				 
	           });
		 }

		// console.log(res_array);return false;
		  $.ajax({
              type: "POST",
              url: "insertResultParameters",
              data: {data:$('.table_data').html(), 'Status' : Status, appointment_id:id, exam_id:exam_id, "_token": "{{ csrf_token() }}"},
              success:function(data){
              	//console.log(data);return false;
				 if(data.isSuccess){
					 console.log('success');
				 $('.my-4').append("<div class='alert alert-success'>"+data.data+"</div>")
				setTimeout(function(){$('.my-4 .alert-success').removeClass('alert alert-success').html('')}, 2000);
				 }
              } 
              })
		} 
		
		$('.navbar-header').find('a:first').remove();
		
	$('body').on('keyup', '#checkinput', function (e) {
		if($(this).val().length>$(this).attr('max')){
			 var val=$(this).val().slice(0, $(this).attr('max'));
			 $(this).val(val)
			e.preventDefault();
			return false;
		}
		
	})

	// function anotherQuestion(a){
	// 		var param = $(a).val()==1 ? 'Yes':'No';

	// 	 	$('.second_question h6').html('')
	// 		$('.second_question').append("<h6>"+param+"</h6>");
	// }

	$('body').on('keydown', '.cytology_subitem', function (e) {
		console.log(e);
		 if (e.keyCode == 13) {  
		 //checks whether the pressed key is "Enter"
		 	             $('.table_data') 
					     .children()             
					   .not('.main')    
					   .remove();  
		 $('.table_data').next().html('');
		 $('.question_box p').html('');
		 $('.table_data').find('.second_question').remove();
		  $('.question_box span').text('SAMPLE STANDARD');
           $('.table_data').append("<div style='display:flex' class='mt-3 second_question'><h5>Sample Standard:</h5><input  onkeyup='anotherQuestion(this)' type='text' value='' id='SAMPLE STANDARD' data-id=27 style='width:50px !important;' class='form-control second_question_parameter'></div>");
                	 cytology_subitem.forEach(function(item){
		         	 	  if(item.cytology_Id==27){ 
		         	 	  
			 			  		$('.question_box').append("<p>"+item.code+":"+item.cytology_subitem+"</p>");
			 			  }
			
		      });
        }
	})

	$('body').on('keydown', '.third_question_parameter_1', function (e) {
		 if(e.keyCode == 13) {
		  $('.question_box p').html('')
		  $('.table_data').find('.third_question_changes').remove()
		   $('.question_box span').text('Changes');
		   $('.table_data').append("<div style='display:flex; flex-wrap: wrap;' class='mt-3 third_question_changes'><h5>Changes?</h5><input value=''  onkeyup='changes_parameter_keyup(this,event)' id='Changes?' style='width:50px !important;' type='text' data-id=24 class='form-control '></div>");		     
		      	cytology_subitem.forEach(function(item){
         	 	  if(item.cytology_Id==24){
				  		$('.question_box').append("<p>"+item.code+":"+item.cytology_subitem+"</p>");
				  }
		});	
		  }
	})

	$('body').on('keydown', '.second_question_parameter', function (e) {
		 if (e.keyCode == 13) {
		   //checks whether the pressed key is "Enter"
		   	if($('.cytology_subitem').val()==2){
		 	 $('.question_box p').html('');
		 	 $('.table_data').find('.third_all_div').remove()
		 	  $('.question_box span').text('UNSATISFACTORY');
		 	 $('.table_data').append("<div class='third_all_div'><div style='display:flex; flex-wrap: wrap;' class='mt-3 third_question'><h5>UNSATISFACTORY:</h5><input  onkeyup='thirdQuestion(this)' style='width:50px !important;' type='text' data-id class='form-control third_question_parameter'></div><div style='display:flex; flex-wrap: wrap;' class='mt-3 third_question1'><input  onkeyup='thirdQuestion(this)' style='width:50px !important;' type='text' data-id class='form-control third_question_parameter'></div></div>");
		 	 	 $('.table_data').append("<div class='third_all_div'><div style='display:flex; width:100% !important' class='mt-3 fourth_question'><h5>MICROBIOLOGY:</h5><input  onkeyup='fourth_Question(this)' style='width:50px !important;' type='text' data-id class='form-control FOURTH_question_parameter'></div><div style='display:block; width:100%;' class='mt-3 fourth_question1'><input  onkeyup='fourth_Question(this)' style='width:50px !important;' type='text' data-id class='form-control FOURTH_question_parameter'></div><div style='display:block; width:100%;' class='mt-3 fourth_question2'><input  onkeyup='fourth_Question(this)' style='width:50px !important;' type='text' data-id class='form-control FOURTH_question_parameter'></div><div style='display:block;width:100%;' class='mt-3 fourth_question3'><input  onkeyup='fourth_Question(this)' style='width:50px !important;' type='text' data-id class='form-control FOURTH_question_parameter'></div></div>");
         	cytology_subitem.forEach(function(item){
         	 	  if(item.cytology_Id==25){
				  		$('.question_box').append("<p>"+item.code+":"+item.cytology_subitem+"</p>");
				  }
		});	
}	

		 else{
		 	$('.table_data').find('.third_question').remove()
        	$('.question_box p').html('');
        	  $('.question_box span').text('EPITHELIALS');
        	 //$('.table_data').find('.third_question').remove();
		 	 $('.table_data').append("<div style='display:flex; flex-wrap: wrap;' class='mt-3 third_question'><h5>EPITHELIALS:</h5><input  onkeyup='thirdQuestion(this)' value='' id='EPITHELIALS:' style='width:50px !important;' type='text' data-id class='form-control third_question_parameter_1'></div>");
         	    cytology_subitem.forEach(function(item){
         	 	  if(item.cytology_Id==28){
         	 	  
				  		$('.question_box').append("<p>"+item.code+":"+item.cytology_subitem+"</p>");
				  }
		});	
        }			
			
   }

       
	})

	$('body').on('click', '.FOURTH_question_parameter', function (e) {
		 $('.question_box p').html('');
$('.question_box span').text('MICROBIOLOGY:');
		     	 cytology_subitem.forEach(function(item){
         	 	  if(item.cytology_Id==26){
         	 	  
				  		$('.question_box').append("<p>"+item.code+":"+item.cytology_subitem+"</p>");
				  }
			
		});

	})


		$('body').on('click', '.third_question_parameter', function (e) {

		 $('.question_box p').html('');
		 $('.question_box span').text('EPITHELIALS:');

		     	 cytology_subitem.forEach(function(item){
         	 	  if(item.cytology_Id==25){
         	 	  
				  		$('.question_box').append("<p>"+item.code+":"+item.cytology_subitem+"</p>");
				  }
			
		});

	})


		$('body').on('click', '.changes_input_click', function (e) {
		var data_id = $(this).attr('data-id');
		$('.question_box span').text('Changes in benign cells ?');
		 $('.question_box p').html('');
		cytology_subitem.forEach(function(item){
         	 	  if(item.cytology_Id==data_id){
         	 	  
				  		$('.question_box').append("<p>"+item.code+":"+item.cytology_subitem+"</p>");
				  }
			
		});

	})

			$('body').on('click', '.second_question_parameter', function (e) {
			$('.question_box span').text('Sample Standard');
		var data_id = $(this).attr('data-id');
		 $('.question_box p').html('');
		cytology_subitem.forEach(function(item){
         	 	  if(item.cytology_Id==27){
         	 	  
				  		$('.question_box').append("<p>"+item.code+":"+item.cytology_subitem+"</p>");
				  }
			
		});

	})

			$('body').on('click', '.cytology_subitem', function (e) {
		var data_id = $(this).attr('data-id');
	 $('.question_box span').text('SATISFACTORY');
		 $('.question_box p').html('');
		cytology_subitem.forEach(function(item){
         	 	  if(item.cytology_Id==24){
         	 	  
				  		$('.question_box').append("<p>"+item.code+":"+item.cytology_subitem+"</p>");
				  }
			
		});

	})

	$('body').on('click', '.get_text_change', function (e) {
		var data_id = $(this).attr('data-id');
		 $('.question_box p').html('');
		cytology_subitem.forEach(function(item){
         	 	  if(item.cytology_Id==data_id){
         	 	  
				  		$('.question_box').append("<p>"+item.code+":"+item.cytology_subitem+"</p>");
				  }
			
		});

	})


$('body').on('click', '.third_question_parameter_1', function (e) {
		var data_id = $(this).attr('data-id');
		 $('.question_box span').html('EPITHELIALS:');
		cytology_subitem.forEach(function(item){
         	 	  if(item.cytology_Id==data_id){
         	 	  
				  		$('.question_box').append("<p>"+item.code+":"+item.cytology_subitem+"</p>");
				  }
			
		});

	})
			



	function thirdQuestion(a){
		let code = $(a).val();
		$('.third_question_parameter_1').attr('value',code)
		let cyclo = $('.cytology_subitem').val();
		 cyclo = cyclo ==1 ? 28 : 25 
		   	 cytology_subitem.forEach(function(item){
		     if(item.code==code && item.cytology_Id==cyclo){	
		     $(a).parent().find("h6").remove("");	     
			 	$(a).parent().append("<h6>"+item.cytology_subitem+"</h6>");
			 	}
			
		      });
	}

		function getText(a){
		let code = $(a).val();
		$(a).attr('value',code)
		let cyclo = $(a).attr('data-id');
		   	 cytology_subitem.forEach(function(item){
		     if(item.code==code && item.cytology_Id==cyclo){	
		     $(a).parent().find("h6").remove("");	     
			 	$(a).parent().append("<h6>"+item.cytology_subitem+"</h6>");
			 	}
			
		      });
	}

	function changes_parameter_keyup(a,event){
		let code = $(a).val();
		$(a).attr('value',code)
	    if(event.keyCode==13){
	    	$('.question_box p').html('');
	    	  $('.table_data').find('.all_div').remove()
	    	  $('.table_data').find('.third_question_changes_1').remove();
	     if(code==2){
	
	    $('.question_box span').text('(MICROBIOLOGY)');
        $('.table_data').append("<div class='all_div'><div style='display:flex; width:100% !important;' class='mt-3 fourth_question'><h5>MICROBIOLOGY:</h5><input  onkeyup='fourth_Question(this)' style='width:50px !important;' type='text' data-id class='form-control FOURTH_question_parameter'></div><div style='display:flex' class='mt-3 fourth_question1'><input  onkeyup='fourth_Question(this)' style='width:50px !important;' type='text' data-id class='form-control FOURTH_question_parameter'></div><div style='display:flex' class='mt-3 fourth_question2'><input  onkeyup='fourth_Question(this)' style='width:50px !important;' type='text' data-id class='form-control FOURTH_question_parameter'></div><div style='display:flex' class='mt-3 fourth_question3'><input  onkeyup='fourth_Question(this)' style='width:50px !important;' type='text' data-id class='form-control FOURTH_question_parameter'></div></div>");
	      	cytology_subitem.forEach(function(item){
     	 	  if(item.cytology_Id==25){
			  		$('.question_box').append("<p>"+item.code+":"+item.cytology_subitem+"</p>");
			  }
			});

	     }

	     else{
	     	

	       $('.table_data').append("<div style='display:flex; flex-wrap: wrap;' class='mt-3 third_question_changes_1'><h5>Changes in benign cells ?</h5><input id='Changes in benign cells ?' onkeyup='changes_parameter_option(this,event)' value=2 style='width:50px !important;' type='text' data-id=29 data-lengthclass='form-control changes_input_click'><h6>No</h6></div><div style='display:flex; flex-wrap: wrap;' class='mt-3 third_question_changes_1'><h5>Changes in squamous epithelial cells ?</h5><input value=2 id='Changes in squamous epithelial cells ?' onkeyup='changes_parameter_option(this,event)' style='width:50px !important;' type='text' data-id=30 class='form-control changes_input_click'><h6>No</h6></div><div style='display:flex; flex-wrap: wrap;' class='mt-3 third_question_changes_1'><h5>Changes in glandular cells ?</h5><input  id='Changes in glandular cells ?' value=2 onkeyup='changes_parameter_option(this,event)' style='width:50px !important;' type='text' data-id=31 class='form-control changes_input_click'><h6>No</h6></div>");		     
		       cytology_subitem.forEach(function(item){
         	   if(item.cytology_Id==24){
				  		$('.question_box').append("<p>"+item.code+":"+item.cytology_subitem+"</p>");
		       }
		});	
	     }
	
  }
	else{
		
	   	 cytology_subitem.forEach(function(item){
	     if(item.code==code && item.cytology_Id==24){	
	     $(a).parent().find("h6").remove("");	     
		 	$(a).parent().append("<h6>"+item.cytology_subitem+"</h6>");
		 	}
		
	      });
	}
	
	}




function changes_parameter_option(a,event){
	var data_id = $(a).attr('data-id');
	$(a).attr('value',$(a).val())
	var length = (data_id == 29) ? 4 : (data_id == 30) ? 2 : 2;
	var dataid = (data_id == 29) ? 29 : (data_id == 30) ? 30 : 31;
	var text = (data_id == 29) ? 'Reactive/non-neoplastic cell changes associated with:' : (data_id == 30) ? 'Changes in squamous epithelial cells:' : 'Changes in glandular cells:';
	var html='';
	var html='';
			     $(a).parent().find("h6").remove("");	     
	$('.changes_input_param_'+data_id).remove();
	$('.fourth_question_'+data_id).remove();
	$('.fourth_question1_'+data_id).remove();
	if($(a).val()==1 && event.keyCode==13){
	$(a).parent().append("<h6>Yes</h6>");
		for(var i=0;i<length;i++){
			if(i==0){
					var h6 = "<h5>"+text+"</h5>";
				}
				else{
					var h6 = '';
				}
			html +="<div style='display: block; width: 100%; margin: 10px auto;' class='changes_input_param_"+data_id+"'>"+h6+"<input style='margin-left: 50%; width:50px !important;' onkeyup='getText(this)' type='text' data-id="+dataid+" class='form-control get_text_change'></div>"
		}
		$(a).parent().append(html)
       var html='';
		html +="<div style='display:flex; width:100% !important;' class='mt-3 fourth_question_"+data_id+"'><h5>MICROBIOLOGY:</h5><input  onkeyup='fourth_Question(this)' style='width:50px !important;' type='text' data-id=26 class='form-control FOURTH_question_parameter'></div>"; 

		for(var j=0;j<3;j++){
			html +="<div style='display:flex; width:100%;' class='mt-3 fourth_question1_"+data_id+"'><input  onkeyup='fourth_Question(this)' style='width:50px !important; margin-left: 50%; ' type='text' data-id class='form-control FOURTH_question_parameter'></div>";
		}
		$(a).parent().append(html) 
	}
 

	else{ 
		$('.changes_input_param_'+data_id).remove();
		$('.fourth_question_'+data_id).remove();
       $('.fourth_question1_'+data_id).remove(); 

		
	}
}  

		function fourth_Question(a){
		let code = $(a).val();
			$(a).attr('value',code)
		   	 cytology_subitem.forEach(function(item){
		     if(item.code==code && item.cytology_Id==26){		     
		   $(a).parent().find("h6").remove();	  	  
			 	$(a).parent().append("<h6>"+item.cytology_subitem+"</h6>");
			 	}
			
		      });
	}

        </script>
        @endsection 