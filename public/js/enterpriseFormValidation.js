$(document).ready(function() {
    var emp_trainingValidators = {
            row: '.col-xs-12',
            validators: {
                        callback: {
                            message: 'Type of Training is required',
                            callback: function(value, validator, $field) {
                                var employees_training = $('#enterpriseForm').find('[name="employees_training"]:checked').val();
                                return (employees_training !== 'Yes') ? true : (value !== '');
                            }
                        }
                    }
        },          
        emp_institutionValidators = {
            row: '.col-xs-12',
            validators: {
                        callback: {
                            message: 'Instiution is required',
                            callback: function(value, validator, $field) {
                                var employees_training = $('#enterpriseForm').find('[name="employees_training"]:checked').val();
                                return (employees_training !== 'Yes') ? true : (value !== '');
                            }
                        }
                    }
        },
        emp_durationValidators = {
            row: '.col-xs-12',
            validators: {
                        callback: {
                            message: 'Duration is required',
                            callback: function(value, validator, $field) {
                                var employees_training = $('#enterpriseForm').find('[name="employees_training"]:checked').val();
                                return (employees_training !== 'Yes') ? true : (value !== '');
                            }
                        }
                    }
        },
        emp_noValidators = {
            row: '.col-xs-12',
            validators: {
                        callback: {
                            message: 'Number of employees is required',
                            callback: function(value, validator, $field) {
                                var employees_training = $('#enterpriseForm').find('[name="employees_training"]:checked').val();
                                return (employees_training !== 'Yes') ? true : (value !== '');
                            }
                        },
                        numeric: {
                          message: 'Number of employees must be a numeric number'
                        }
                    }
        },
        emp_yearValidators = {
            row: '.col-xs-12',
            validators: {
                        callback: {
                            message: 'Year of training is required',
                            callback: function(value, validator, $field) {
                                var employees_training = $('#enterpriseForm').find('[name="employees_training"]:checked').val();
                                return (employees_training !== 'Yes') ? true : (value !== '');
                            }
                        },
                        numeric: {
                            message: 'Year of training must be a numeric number'
                        }
                    }
        },
        ent_trainingValidators = {
            row: '.col-xs-12',
            validators: {
                        callback: {
                            message: 'Type of Training is required',
                            callback: function(value, validator, $field) {
                                var owner_training = $('#enterpriseForm').find('[name="owner_training"]:checked').val();
                                return (owner_training !== 'Yes') ? true : (value !== '');
                            }
                        }
                    }
        },
        ent_institutionValidators = {
            row: '.col-xs-12',
            validators: {
                        callback: {
                            message: 'Instiution is required',
                            callback: function(value, validator, $field) {
                                var owner_training = $('#enterpriseForm').find('[name="owner_training"]:checked').val();
                                return (owner_training !== 'Yes') ? true : (value !== '');
                            }
                        }
                    }
        },
        ent_durationValidators = {
            row: '.col-xs-12',
            validators: {
                        callback: {
                            message: 'Duration is required',
                            callback: function(value, validator, $field) {
                                var owner_training = $('#enterpriseForm').find('[name="owner_training"]:checked').val();
                                return (owner_training !== 'Yes') ? true : (value !== '');
                            }
                        }
                    }
        }, 
        ent_yearValidators = {
            row: '.col-xs-12',
            validators: {
                        callback: {
                            message: 'Year of training is required',
                            callback: function(value, validator, $field) {
                                var owner_training = $('#enterpriseForm').find('[name="owner_training"]:checked').val();
                                return (owner_training !== 'Yes') ? true : (value !== '');
                            }
                        },
                        numeric: {
                            message: 'Year of training must be a numeric number'
                        }
                    }
        },
        // skill_neededValidators = {
        //     row: '.col-xs-12',
        //     validators: {
        //         notEmpty: {
        //             message: 'This field is required'
        //         }
        //     }        
        // }, 
       

        Index1 = 0;
        Index2 = 0;
        Index3 = 0;


    $('#enterpriseForm')
        .formValidation({
            framework: 'bootstrap',
            icon: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields:{              
                'emp_training[0]': emp_trainingValidators,
                'emp_institution[0]': emp_institutionValidators,
                'emp_duration[0]': emp_durationValidators,
                'emp_no[0]': emp_noValidators,
                'emp_year[0]': emp_yearValidators,
                'ent_training[0]': ent_trainingValidators,
                'ent_duration[0]': ent_durationValidators,
                'ent_institution[0]': ent_institutionValidators,
                'ent_year[0]': ent_yearValidators
                // 'skill_needed[0]': skill_neededValidators
            }            
        }) 
        .on('change', '[name="employees_training"]', function(e) {
            $('#enterpriseForm')
            // .formValidation('revalidateField', 'emp_trainingValidators');
            .formValidation('addField', 'emp_training[' + Index1 + ']', emp_trainingValidators)
            .formValidation('addField', 'emp_institution[' + Index1 + ']', emp_institutionValidators)
            .formValidation('addField', 'emp_duration[' + Index1 + ']', emp_durationValidators)
            .formValidation('addField', 'emp_no[' + Index1 + ']', emp_noValidators)
            .formValidation('addField', 'emp_year[' + Index1 + ']', emp_yearValidators);
        }) 
        .on('change', '[name="owner_training"]', function(e) {
            $('#enterpriseForm')
                .formValidation('addField', 'ent_training[' + Index2 + ']', ent_trainingValidators)
                .formValidation('addField', 'ent_institution[' + Index2 + ']', ent_institutionValidators)
                .formValidation('addField', 'ent_duration[' + Index2 + ']', ent_durationValidators)
                .formValidation('addField', 'ent_year[' + Index2 + ']', ent_yearValidators);
        })  
        .on('err.field.fv', function(e, data) {
            data.fv.disableSubmitButtons(false);
        })
        .on('success.field.fv', function(e, data) {
            if (data.field === 'emp_trainingValidators') {
               var channel = $('#enterpriseForm').find('[name="employees_training"]:checked').val();
               // User choose given channel
               if (channel !== 'Yes') {
                   // Remove the success class from the container
                   data.element.closest('.form-group').removeClass('has-success');
                   // Hide the tick icon
                   data.element.data('fv.icon').hide();
               }
            };
            if (data.field === 'ent_trainingValidators') {
               var channel = $('#enterpriseForm').find('[name="employees_training"]:checked').val();
               // User choose given channel
               if (channel !== 'Yes') {
                   // Remove the success class from the container
                   data.element.closest('.form-group').removeClass('has-success');
                   // Hide the tick icon
                   data.element.data('fv.icon').hide();
               }
            };
            data.fv.disableSubmitButtons(false);
        })
        .on('success.form.fv', function(e,data) {
                 // Prevent form submission
            e.preventDefault();
            // You can get the form instance
            var $form = $(e.target);
            // and the FormValidation instance
            var fv = $form.data('formValidation');
            error_free=finalValidation();
            if(error_free){
              fv.defaultSubmit();
            } 
            

        })

        // start dynamic input fields (21)
        // Add button click handler
        .on('click', '.addButton', function() {
            Index1++;
            var $template = $('#etrainingTemplate'),
                $clone    = $template
                                .clone()
                                .removeClass('hide')
                                .removeAttr('id')
                                .attr('data-book-index', Index1)
                                .insertBefore($template);

            // Update the name attributes
            $clone
                .find('#etrainingNo').html(Index1+1).end()
                .find('[name="emp_training1"]').attr('name', 'emp_training[' + Index1 + ']').end()
                .find('[name="emp_institution1"]').attr('name', 'emp_institution[' + Index1 + ']').end()
                .find('[name="emp_duration1"]').attr('name', 'emp_duration[' + Index1 + ']').end()
                .find('[name="emp_no1"]').attr('name', 'emp_no[' + Index1 + ']').end()
                .find('[name="emp_year1"]').attr('name', 'emp_year[' + Index1 + ']').end();

            // Add new fields
            // Note that we also pass the validator rules for new field as the third parameter
            $('#enterpriseForm')
                .formValidation('addField', 'emp_training[' + Index1 + ']', emp_trainingValidators)
                .formValidation('addField', 'emp_institution[' + Index1 + ']', emp_institutionValidators)
                .formValidation('addField', 'emp_duration[' + Index1 + ']', emp_durationValidators)
                .formValidation('addField', 'emp_no[' + Index1 + ']', emp_noValidators)
                .formValidation('addField', 'emp_year[' + Index1 + ']', emp_yearValidators);
        })

        // Remove button click handler
        .on('click', '.removeButton', function() {
            var $row  = $(this).parents('div').parents('td').parents('tr'),
                index = $row.attr('data-book-index');

            // Remove fields
            $('#enterpriseForm')
                .formValidation('removeField', $row.find('[name="emp_training[' + index + ']"]'))
                .formValidation('removeField', $row.find('[name="emp_institution[' + index + ']"]'))
                .formValidation('removeField', $row.find('[name="emp_duration[' + index + ']"]'))
                .formValidation('removeField', $row.find('[name="emp_no[' + index + ']"]'))
                .formValidation('removeField', $row.find('[name="emp_year[' + index + ']"]'));

            // Remove element containing the fields
            $row.remove();
        })
        //End dynamic input fields (21)

        // start dynamic input fields (23)
        // Add button click handler
        .on('click', '.addButton2', function() {
            Index2++;
            var $template = $('#ownertrainingTemplate'),
                $clone    = $template
                                .clone()
                                .removeClass('hide')
                                .removeAttr('id')
                                .attr('data-book-index', Index2)
                                .insertBefore($template);

            // Update the name attributes
            $clone
                .find('#ownertrainingNo').html(Index2+1).end()
                .find('[name="ent_training1"]').attr('name', 'ent_training[' + Index2 + ']').end()
                .find('[name="ent_institution1"]').attr('name', 'ent_institution[' + Index2 + ']').end()
                .find('[name="ent_duration1"]').attr('name', 'ent_duration[' + Index2 + ']').end()
                .find('[name="ent_year1"]').attr('name', 'ent_year[' + Index2 + ']').end();

            // Add new fields
            // Note that we also pass the validator rules for new field as the third parameter
            $('#enterpriseForm')
                .formValidation('addField', 'ent_training[' + Index2 + ']', ent_trainingValidators)
                .formValidation('addField', 'ent_institution[' + Index2 + ']', ent_institutionValidators)
                .formValidation('addField', 'ent_duration[' + Index2 + ']', ent_durationValidators)
                .formValidation('addField', 'ent_year[' + Index2 + ']', ent_yearValidators);
        })

        // Remove button click handler
        .on('click', '.removeButton2', function() {
            var $row  = $(this).parents('div').parents('td').parents('tr'),
                index = $row.attr('data-book-index');

            // Remove fields
            $('#enterpriseForm')
                .formValidation('removeField', $row.find('[name="ent_training[' + index + ']"]'))
                .formValidation('removeField', $row.find('[name="ent_institution[' + index + ']"]'))
                .formValidation('removeField', $row.find('[name="ent_duration[' + index + ']"]'))
                .formValidation('removeField', $row.find('[name="ent_year[' + index + ']"]'));

            // Remove element containing the fields
            $row.remove();
        })
        //End dynamic input fields (23)

        // start dynamic input fields (24)
        // Add button click handler
        .on('click', '.addButton3', function() {
            Index3++;
            var $template = $('#skillTemplate'),
                $clone    = $template
                                .clone()
                                .removeClass('hide')
                                .removeAttr('id')
                                .attr('data-book-index', Index3)
                                .insertBefore($template);

            // Update the name attributes
            $clone
                .find('[name="skill_needed1"]').attr('name', 'skill_needed[' + Index3 + ']').end();

            // Add new fields
            // Note that we also pass the validator rules for new field as the third parameter
            // $('#enterpriseForm')
                // .formValidation('addField', 'skill_needed[' + Index3 + ']', skill_neededValidators);
        })

        // Remove button click handler
        .on('click', '.removeButton3', function() {
            var $row  = $(this).parents('span').parents('div .input-group'),
                index = $row.attr('data-book-index');

            // Remove fields
            // $('#enterpriseForm')
            //     .formValidation('removeField', $row.find('[name="skill_needed[' + index + ']"]'));

            // Remove element containing the fields
            $row.remove();
        });
        //End dynamic input fields (24)


});

//project id
$("#project_id").on('change', function() {
  selectboxValidate('project_id');
});  

// Name can't be blank
$('#userName').on('input', function() {
   textValidate('userName');
});
// Address can't be blank
$('#address').on('input', function() {
   textValidate('address');
});

// legal status can't be blank
$('input[name="legal_status"]').on('change', function() {
  checkboxValide('registered','not_registered');
  if($(this).val()=="Registered"){
    $('#no5').show();
  }else{
    $('#no5').hide();
  }
});

//Entrepreneur Name  
$('#entrepreneur_name').on('input', function() {
   textValidate('entrepreneur_name');
});

//Designation 
$('input[name="designation"]').on('change', function() {
  checkboxValide('owner','manager');
});

//phone1 
$('#phone1').on('input', function() {
   mobileValidate2('phone1','phone2');
});
$('#phone2').on('input', function() {
   mobileValidate2('phone1','phone2');
});

// gender can't be blank
$('input[name="gender"]').on('change', function() {
   checkboxValide2('gender1','gender2','gender3','gender4');
});

 //dob 
$('#dp1').on('change', function() {
  var date=$('#dp1').val();
  if(date!=''){
    textValidate('dp1');
  }
});

//nic 
$('#nic').on('input', function() {
    nicValidate('nic');
});

//industrial category
 $("#industrial_cat_id").on('change', function() {
  selectboxValidate('industrial_cat_id');
});

//primary district
$('#primary_district').on('change', function() {    
    selectboxValidate('primary_district');
});

//district
$('#district').on('change', function() {
  primaryDisValidate('district','multiple_districts');
});

//multiple_districts can't be blank
$('input[name="multiple_districts"]').on('change', function() {
   checkboxValide('multiple_districts1','multiple_districts2');
   if($(this).val()=="Yes"){
       $('#16-1').show();
   }else{
       $('#16-1').hide();
       $('#district').val('');
       $('#district').trigger('chosen:updated');
   }
});

//no_employees
//  $('#no_employees').on('change;', function() { 
//    employeesValidate('no_employees');
// });

//any_disability_employees
$('input[name="any_disability_employees"]').on('change', function() {
    checkboxValide('any_disability_employees1','any_disability_employees2');
    dis_employeesValidate('no_disabled_employees','any_disability_employees');
    if($(this).val()=="Yes"){
        $('#no20').show();
    }else{
        $('#no20').hide();
    }
});

//employees_training (21)
$('input[name="employees_training"]').on('change', function() {
  checkboxValide('employees_training1','employees_training2');
  if($(this).val()=="Yes"){
      $('#no23').show();
  }else{
      $('#no23').hide();
  }
});

//owner_training (23)
$('input[name="owner_training"]').on('change', function() {
  checkboxValide('owner_training1','owner_training2');
  if($(this).val()=="Yes"){
      $('#no25').show();
  }else{
      $('#no25').hide();
  }
});


function DynamicInputValidtate() {
  var isvalid=true;
  var full_tem_m=$('.full_tem_m_total').val();
  var full_tem_f=$('.full_tem_f_total').val();
  var full_tem_t=Number(full_tem_f)+Number(full_tem_m);

  var part_per_m=$('.part_per_m_total').val();
  var part_per_f=$('.part_per_f_total').val();
  var part_per_t=Number(part_per_m)+Number(part_per_f);

  var part_tem_m=$('.part_tem_m_total').val();
  var part_tem_f=$('.part_tem_f_total').val();
  var part_tem_t=Number(part_tem_m)+Number(part_tem_f);

  $("input").each(function(i) { 
      // start full time temporary
      if($("#full_tem_no"+i).val()=="" && full_tem_t!=0){
       enable('error_full_tem_no'+i);
       $("#full_tem_no"+i).removeClass("valid").addClass("invalid");
       isvalid =false;
      }else{
       disable('error_full_tem_no'+i);
       $("#full_tem_no"+i).removeClass("invalid").addClass("valid");
      }

      full_tem_days=$("#full_tem_days"+i).val();
      if (full_tem_days !== undefined){
          if((full_tem_days=='' || full_tem_days== null) && $("#full_tem_no"+i).val()!="" ){ 
            $("#full_tem_days"+i).removeClass("valid").addClass("invalid");
            enable('error_full_tem_days'+i);
            isvalid =false;
          }else if(full_tem_days>31){
             $("#error_full_tem_days"+i).html('This is invalid');
             $("#full_tem_days"+i).removeClass("valid").addClass("invalid");
             enable('error_full_tem_days'+i);
             isvalid =false;
          }else{
              $("#full_tem_days"+i).removeClass("invalid").addClass("valid");
              disable('error_full_tem_days'+i);
              $("#error_full_tem_days"+i).html('This is required');
          }
      }

      full_tem_months=$("#full_tem_months"+i).val();
      if (full_tem_months !== undefined){
          if((full_tem_months=='' || full_tem_months== null) && $("#full_tem_no"+i).val()!="" ){ 
            $("#full_tem_months"+i).removeClass("valid").addClass("invalid");
            enable('error_full_tem_months'+i);
            isvalid =false;
          }else if(full_tem_months>12){
             $("#error_full_tem_months"+i).html('This is invalid');
             $("#full_tem_months"+i).removeClass("valid").addClass("invalid");
             enable('error_full_tem_months'+i);
             isvalid =false;
          }else{
              $("#full_tem_months"+i).removeClass("invalid").addClass("valid");
              disable('error_full_tem_months'+i);
              $("#error_full_tem_months"+i).html('This is required');
          }
      }   
      // end full time temporary
      
      // start partime permanent
      if($("#part_per_no"+i).val()=="" && part_per_t!=0){
       enable('error_part_per_no'+i);
       $("#part_per_no"+i).removeClass("valid").addClass("invalid");
       isvalid =false;
      }else{
       disable('error_part_per_no'+i);
       $("#part_per_no"+i).removeClass("invalid").addClass("valid");
      }

      part_per_days=$("#part_per_days"+i).val();
      if (part_per_days !== undefined){
          if((part_per_days=='' || part_per_days== null) && $("#part_per_no"+i).val()!="" ){ 
            $("#part_per_days"+i).removeClass("valid").addClass("invalid");
            enable('error_part_per_days'+i);
            isvalid =false;
          }else if(part_per_days>31){
             $("#error_part_per_days"+i).html('This is invalid');
             $("#part_per_days"+i).removeClass("valid").addClass("invalid");
             enable('error_part_per_days'+i);
             isvalid =false;
          }else{
              $("#part_per_days"+i).removeClass("invalid").addClass("valid");
              disable('error_part_per_days'+i);
              $("#error_part_per_days"+i).html('This is required');
          }
      }

      part_per_months=$("#part_per_months"+i).val();
      if (part_per_months !== undefined){
          if((part_per_months=='' || part_per_months== null) && $("#part_per_no"+i).val()!="" ){ 
            $("#part_per_months"+i).removeClass("valid").addClass("invalid");
            enable('error_part_per_months'+i);
            isvalid =false;
          }else if(part_per_months>12){
             $("#error_part_per_months"+i).html('This is invalid');
             $("#part_per_months"+i).removeClass("valid").addClass("invalid");
             enable('error_part_per_months'+i);
             isvalid =false;
          }else{
              $("#part_per_months"+i).removeClass("invalid").addClass("valid");
              disable('error_part_per_months'+i);
              $("#error_part_per_months"+i).html('This is required');
          }
      }
      // end partime permanent

      // start partime temporary
      if($("#part_tem_no"+i).val()=="" && part_tem_t!=0){
       enable('error_part_tem_no'+i);
       $("#part_tem_no"+i).removeClass("valid").addClass("invalid");
       isvalid =false;
      }else{
       disable('error_part_tem_no'+i);
       $("#part_tem_no"+i).removeClass("invalid").addClass("valid");
      }

      part_tem_days=$("#part_tem_days"+i).val();
      if (part_tem_days !== undefined){
          if((part_tem_days=='' || part_tem_days== null) && $("#part_tem_no"+i).val()!="" ){ 
            $("#part_tem_days"+i).removeClass("valid").addClass("invalid");
            enable('error_part_tem_days'+i);
            isvalid =false;
          }else if(part_tem_days>31){
             $("#error_part_tem_days"+i).html('This is invalid');
             $("#part_tem_days"+i).removeClass("valid").addClass("invalid");
             enable('error_part_tem_days'+i);
             isvalid =false;
          }else{
              $("#part_tem_days"+i).removeClass("invalid").addClass("valid");
              disable('error_part_tem_days'+i);
              $("#error_part_tem_days"+i).html('This is required');
          }
      }

      part_tem_months=$("#part_tem_months"+i).val();
      if (part_tem_months !== undefined){
          if((part_tem_months=='' || part_tem_months== null) && $("#part_tem_no"+i).val()!="" ){ 
            $("#part_tem_months"+i).removeClass("valid").addClass("invalid");
            enable('error_part_tem_months'+i);
            isvalid =false;
          }else if(part_tem_months>12){
             $("#error_part_tem_months"+i).html('This is invalid');
             $("#part_tem_months"+i).removeClass("valid").addClass("invalid");
             enable('error_part_tem_months'+i);
             isvalid =false;
          }else{
              $("#part_tem_months"+i).removeClass("invalid").addClass("valid");
              disable('error_part_tem_months'+i);
              $("#error_part_tem_months"+i).html('This is required');
          }
      }
      // end partime temporary
  });  

  // validate no employees compire to above ans
  var total1 = 0;
  var total2 = 0;
  var total3 = 0;
  $('.full_tem_no').each(function (index, element) {
      total1 = total1 + Number($(element).val());
  });  
  $('.part_per_no').each(function (index, element) {
      total2 = total2 + Number($(element).val());
  });
  $('.part_tem_no').each(function (index, element) {
      total3 = total3 + Number($(element).val());
  });
  //compaire full-time temporary
  if(total1!=full_tem_t){
    enable('error_full_tem');
    $("#error_full_tem").removeClass("valid").addClass("invalid");
    isvalid =false;
  }else{
    disable('error_full_tem');
    $("#error_full_tem").removeClass("invalid").addClass("valid");
  }
  //compaire part-time permanant
  if(total2!=part_per_t){
    enable('error_part_per');
    $("#error_part_per").removeClass("valid").addClass("invalid");
    isvalid =false;
  }else{
    disable('error_part_per');
    $("#error_part_per").removeClass("invalid").addClass("valid");
  }
  //compaire part-time temporary
  if(total3!=part_tem_t){
    enable('error_part_tem');
    $("#error_part_tem").removeClass("valid").addClass("invalid");
    isvalid =false;
  }else{
    disable('error_part_tem');
    $("#error_part_tem").removeClass("invalid").addClass("valid");
  }
  return isvalid;     
}

function enable(id) {
  $('#'+id).addClass('error_show').removeClass('error');
}
function disable(id) {
 $('#'+id).addClass('error').removeClass('error_show');
}

function finalValidation(){
   selectboxValidate('project_id');
   textValidate('userName');
   textValidate('address');
   checkboxValide('registered','not_registered');
   textValidate('entrepreneur_name');
   checkboxValide('owner','manager');
   mobileValidate2('phone1','phone2'); 
   checkboxValide2('gender1','gender2','gender3','gender4');
   textValidate('dp1');
   nicValidate('nic');
   selectboxValidate('industrial_cat_id');
   // selectboxValidate('district');
   checkboxValide('multiple_districts1','multiple_districts2');
   dis_employeesValidate('no_disabled_employees','any_disability_employees');   
   checkboxValide('any_disability_employees1','any_disability_employees2');
   checkboxValide('employees_training1','employees_training2');
   checkboxValide('owner_training1','owner_training2');

   var phone2=$('#phone2').val();
   if (phone2=='' || phone2==null) { 
      var form_data=['userName','address','registered','not_registered','entrepreneur_name','owner','manager','phone1','gender1','gender2','gender3','gender4','dp1','nic','industrial_cat_id','multiple_districts1','multiple_districts2','any_disability_employees1','any_disability_employees2','employees_training1','employees_training2','owner_training1','owner_training2']; 
   }else{
      var form_data=['userName','address','registered','not_registered','entrepreneur_name','owner','manager','phone1','phone2','gender1','gender2','gender3','gender4','dp1','nic','industrial_cat_id','multiple_districts1','multiple_districts2','any_disability_employees1','any_disability_employees2','employees_training1','employees_training2','owner_training1','owner_training2'];      
   }
   error_free=errorValidate(form_data);
   return error_free;
}