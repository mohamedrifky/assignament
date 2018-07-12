// JavaScript Document


// start dynamic input fields (21)
    var max_fields1      = 10; //maximum input boxes allowed
    var wrapper1         = $("#input_fields_wrap1"); //Fields wrapper
    var add_button1      = $("#add_field_button1"); //Add button ID
    
    var x1 = 1; //initlal text box count
    $(add_button1).click(function(e){ //on add input button click
        e.preventDefault();
        if(x1 < max_fields1){ //max input box allowed
            x1++; //text box increment
 
$(wrapper1).append('<tr><td><input type="text" class="form-control tb_cls" name="kpi_tours_trainer[]" id="trainer'+x1+'" ></td><td><input type="text" class="form-control tb_cls" name="kpi_tours_training_name[]" id="training_name'+x1+'" ></td><td><input type="number" class="form-control tb_cls" name="kpi_tours_duration[]"  id="duration'+x1+'" onkeypress="return isNumberKey(event)"></td><td><input type="text" class="form-control" name="kpi_tours_qualification[]" id="qualification'+x1+'" ></td><td><select class="form-control " name="kpi_tours_nvq[]" tabindex="2"> <option value="N/A">N/A</option><option value="NVQ level-I">NVQ level-I</option> <option value="NVQ level-II">NVQ level-II</option><option value="NVQ level-III">NVQ level-III</option>  <option value="NVQ level-IV">NVQ level-IV</option><option value="NVQ level-V">NVQ level-V</option> <option value="NVQ level-VI">NVQ level-VI</option></select></td><td><a href="#" class="btn btn-primary" id="remove_field1" ><i class="fa fa-minus"></i></a></td></tr>'); //add input box
	
        }
    });    
    $(wrapper1).on("click","#remove_field1", function(e){ //user click on remove text
        e.preventDefault();
        $(this).parent('td').parent('tr').remove(); x1--;
    })

 $('input[type=radio][name=participant_training_status]').change(function() {
	 training_state();
 });

function training_state()
{
var training_state=$('input[name=participant_training_status]:checked').val();	
if(training_state=='yes')
{
$("#tb_1").show();	
$("#tb_2").show();	
}
else
{
$("#tb_1").hide();	
$("#tb_2").hide();	
}
}
 




$(document).ready(function(){
		
		validate_income();
		
 		$("#msg").delay(3000).fadeOut(500,function()
		{
		window.location.href = "participant_registration_form";	
		});
		 training_state();
		 /*secondry_income_state();*/
		 hide_education();
		 hide_activities();
		 hide_income();
		 hide_enterprise();
		 hide_follow_up();
		 
$(".hide_search").chosen({disable_search_threshold: 10});
$(".chzn-select").chosen({allow_single_deselect: true});
$(".chzn-select-deselect,#model").chosen();	
$('.chzn-select-deselect,#modell').on('shown.bs.modal', function () {
 $('.chzn-select', this).chosen();
    });	
	

    // Date picker
    $('#dp1').datepicker({
        format: 'yyyy-mm-dd',
        todayHighlight: true,
        autoclose: true,
		endDate: '-0d'
		
    });
    
	$('#participant_dob').datepicker({
        todayHighlight: true,
        autoclose: true,
		dateFormat: 'yyyy-mm-dd',
		endDate: '-0d'
    });

	
	household();
	ethinicity();  

});
//wizard functions

function show_basic()
{
$("#basic_info").show();
}
function hide_basic()
{
$("#basic_info").hide();
}


function show_education()
{
$("#education").show();	
}
function hide_education()
{
$("#education").hide();	
}

function show_activities()
{
$("#activities").show();	
}
function hide_activities()
{
$("#activities").hide();	
}


function show_income()
{
$("#income").show();	
}
function hide_income()
{
$("#income").hide();	
}

function show_enterprise()
{
$("#r_enterprise").show();	
}
function hide_enterprise()
{
$("#r_enterprise").hide();	
}


function show_follow_up()
{
$("#follow_up").show();	
}
function hide_follow_up()
{
$("#follow_up").hide();	
}

$("#participant_house_hold").change(function(e) {
    household();
});

function household()
{
var house_hold_val=$("#participant_house_hold").val();
if(house_hold_val=='Other')	
{
$("#house_hold_other_tbox").show();	
$("#house_hold_other_tbox").focus();	
}
else
{
$("#house_hold_other_tbox").hide();		
}
}
$("#participant_ethinicity").change(function(e) {
  ethinicity();  
});
function ethinicity()
{
var ethinicity_val=$("#participant_ethinicity").val();
if(ethinicity_val=='Other')	
{
$("#ethinicity_other_tbox").show();	
$("#ethinicity_other_tbox").focus();	
}
else
{
$("#ethinicity_other_tbox").hide();		
}
}


//income validation	
/*$('#participant_food_beverages').keypress(function(event) {
if ((event.which != 46 || $(this).val().indexOf('.') != -1) && (event.which < 48 || event.which > 57)) {
	
    event.preventDefault();
	$("#income_error_1").html("Digits Only").show().fadeOut("slow");
               
  }
});
$('#participant_food_beverages').bind("cut copy paste",function(e) {
     e.preventDefault();
 });*/


 
function validate_income()
{
var fieleds = ["participant_food_beverages", "participant_food_beverages", "participant_clothing","participant_housing","participant_children_education","participant_health_sanitation","participant_electricity_water","participant_transport","participant_communication_charges","participant_entertainment_recreations","participant_alcohol","participant_Settlement_of_debts","participant_Religious_activities_and_social_services","participant_other_cost_values","participant_own_monthly_earnings","participant_additional_sources_of_income","participant_total_monthly_earnings","participant_total_monthly_household_income"]; 

$(".total").keypress(function(event) {
if ((event.which != 46 ||  $(this).val().indexOf('.') != -1) && (event.which < 48 || event.which > 57 )) {
	
event.preventDefault();
	
if(event.which!=13)
{
/*show_message("Please Enter Digits Only");*/
}
}


});


$(".single").keypress(function(event) {
if ((event.which != 46 ||  $(this).val().indexOf('.') != -1) && (event.which < 48 || event.which > 57 )) {
	
event.preventDefault();
	
if(event.which!=13)
{
/*show_message("Please Enter Digits Only");*/
}
}


});
$(".single").bind("cut copy paste",function(e) {
     e.preventDefault();
 });
 $(".total").bind("cut copy paste",function(e) {
     e.preventDefault();
 });
 
 $("#participant_household_live").keypress(function(event) {
if ((event.which != 46 ||  $(this).val().indexOf('.') != -1) && (event.which < 48 || event.which > 57 )) {
	
event.preventDefault();
	
if(event.which!=13)
{
/*show_message("Please Enter Digits Only");*/
}
}


});
$("#participant_household_live").bind("cut copy paste",function(e) {
     e.preventDefault();
 });
/*

var k=0;
for(var i=0;i<fieleds.length;i++)
{


$('#'+fieleds[i]).keypress(function(event) {
if ((event.which != 46 ||  $(this).val().indexOf('.') != -1) && (event.which < 48 || event.which > 57 )) {
	
event.preventDefault();
	
if(event.which!=13)
{
show_message("Please Enter Digits Only");
}
}


});
$('#'+fieleds[i]).bind("cut copy paste",function(e) {
     e.preventDefault();
 });


}*/

}

 function show_message(msg)
{
swal({
            title: ''+msg,
			type: 'warning',
			animation: true,
            confirmButtonColor: '#00c0ef'
        }).done();
        return false;	
}


$(".total").on("keydown keyup", function() {
        calculateSum();
});


$(".single").on("keydown keyup", function() {
         calculateSum_single();
});



function calculateSum_single() {
    var sum = 0;
    //iterate through each textboxes and add the values
    $(".single").each(function() {
        //add only if the value is number
        if (!isNaN(this.value) && this.value.length != 0) {
            sum += parseFloat(this.value);
            
        }
        else if (this.value.length != 0){
            
        }
    });
	if(sum==0)
	{
	$("#income_single").removeClass('text-white bg-info card-header');
  	$("#income_single").html("");	 
	}
	else
	{
	$("#income_single").addClass('text-white bg-info card-header');	
	 set_single_income(sum.toFixed(2));
	}
   
}


 function calculateSum() {
    var sum = 0;
	
    //iterate through each textboxes and add the values
    $(".total").each(function() {
        //add only if the value is number
        if (!isNaN(this.value) && this.value.length != 0) {
            sum += parseFloat(this.value);
           
        }
        else if (this.value.length != 0){
            
        }
    });
	if(sum==0)
	{
		
	$("#total_income").removeClass('text-white bg-info card-header');
  	$("#total_income").html("");	
	}
	else
	{
	$("#total_income").addClass('text-white bg-info card-header');	
	set_total_income(sum.toFixed(2));
	}
    
} 
 
function set_single_income(value)
{
$("#income_single").html("Rs. "+value);	 
}
 
function set_total_income(value)
{
$("#total_income").html("Rs. "+value);	 
}
/*
$(document).ready(function(e) {
     
set_ds();
set_gn();
set_ds_bis();
set_gn_bis();
});
$("#participant_districts").change(function(e) {
set_ds();   
});
$("#participant_ds").change(function(e) {
set_gn();   
});

$("#business_district").change(function(e) {
set_ds_bis();
});
$("#busibusiness_dsness_district").change(function(e) {
set_gn_bis();
});


function set_ds()
{
var district=$("#participant_districts").val();	
var dataString="district="+district;

 $("#flash").fadeIn(400).html
             
  $.ajax({
           type: "POST",
        url: "load_ds.php?"+dataString,
  		cache: false,
        success: function(result){
				
          		$('#participant_ds').empty();
				$('#participant_ds').trigger('chosen:updated');
                $("#participant_ds").append(result); 
				$('#participant_ds').trigger('chosen:updated');
				set_gn();
				
				
           }
      });		
}

function set_gn()
{
var ds=$("#participant_ds").val();	
var dataString="ds_division="+ds;

 
  $.ajax({
        type: "POST",
        url: "load_gn.php?"+dataString,
  		cache: false,
        success: function(result){
			
          		 $('#participant_gn').empty();
				$('#participant_gn').trigger('chosen:updated');
                $("#participant_gn").append(result); 
				$('#participant_gn').trigger('chosen:updated');
				
           }
      });		
}
function set_ds_bis()
{
var district=$("#business_district").val();	
var dataString="district="+district;

 $("#flash").fadeIn(400).html
             
  $.ajax({
           type: "POST",
        url: "load_ds.php?"+dataString,
  		cache: false,
        success: function(result){
				
          		$('#business_ds').empty();
				$('#business_ds').trigger('chosen:updated');
                $("#business_ds").append(result); 
				$('#business_ds').trigger('chosen:updated');
				set_gn_bis();
				
				
           }
      });		
}

function set_gn_bis()
{
var ds=$("#business_ds").val();	
var dataString="ds_division="+ds;

 
  $.ajax({
        type: "POST",
        url: "load_gn.php?"+dataString,
  		cache: false,
        success: function(result){
			
          		 $('#business_gn').empty();
				$('#business_gn').trigger('chosen:updated');
                $("#business_gn").append(result); 
				$('#business_gn').trigger('chosen:updated');
				
           }
      });		
}
 
 */

  
 
 
 
 
  
 
 
 
 
 
 
 
 
 
 /*participant_food_beverages
 participant_food_beverages
 participant_clothing
 participant_housing
 participant_children_education
 participant_health_sanitation
 participant_electricity_water
 participant_transport
 participant_communication_charges
 participant_entertainment_recreations
 participant_alcohol
 participant_Settlement_of_debts
 participant_Religious_activities_and_social_services
 participant_other_cost_values
 
 participant_own_monthly_earnings
 participant_additional_sources_of_income
 participant_total_monthly_earnings
 participant_total_monthly_household_income*/