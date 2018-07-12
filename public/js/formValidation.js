function textValidate(name) { 
      var input=$('#'+name);
      var is_name=input.val();
      var error_element=$("span", input.parent());     
      if(is_name){
        input.removeClass("invalid").addClass("valid");
        error_element.removeClass("error_show").addClass("error");
      }else{
        input.removeClass("valid").addClass("invalid");        
        error_element.removeClass("error").addClass("error_show");
      }
}

function emailValidate(email) {
  var input=$('#'+email);
  var is_name=input.val();
  var error_element=$("span#erroremail", input.parent());        
  var pat=/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z]{2,6})+$/; //email regular expression
  if(is_name==""){
     input.removeClass("valid").addClass("invalid");        
     error_element.removeClass("error").addClass("error_show");
  }else if(!is_name.match(pat)){ 
     input.removeClass("valid").addClass("invalid");        
     error_element.removeClass("error").addClass("error_show");
     error_element.html("Email is invalid");
  }else{
     input.removeClass("invalid").addClass("valid");
     error_element.removeClass("error_show").addClass("error");
     error_element.html("Email is required");
   }
}

function nicValidate(nic) {
  var input=$('#'+nic);
  var is_name=input.val();
  var error_element=$("span#errornic",input.parent()); 
  var pat=/^[0-9]{9}[vVxX]$/;//nic regular expression
  var pat2=/^[0-9]{12}$/;//nic regular expression
   var pat3=/^[0-9]{10}[vVxXsS]$/;//nic regular expression

  if(is_name==""){
     input.removeClass("valid").addClass("invalid");        
     error_element.removeClass("error").addClass("error_show");
  }else if((is_name.match(pat))||(is_name.match(pat2))||(is_name.match(pat3))){ 
	   input.removeClass("invalid").addClass("valid");
     error_element.removeClass("error_show").addClass("error");
     error_element.html("NIC is required");
  }else{
       input.removeClass("valid").addClass("invalid");        
       error_element.removeClass("error").addClass("error_show");
       error_element.html("NIC is invalid");
  }
}

function mobileValidate(mobile,name) { 
   var input=$('#'+mobile);
   var is_name=input.val();
   var error_element=$("span#error", input.parent());        
   var pat=/^[0-9]{10}$/;//telno regular expression

   if(is_name==""){
      input.removeClass("valid").addClass("invalid");        
      error_element.removeClass("error").addClass("error_show");
   }else if(!is_name.match(pat)){ 
      input.removeClass("valid").addClass("invalid");        
      error_element.removeClass("error").addClass("error_show");
      error_element.html(name+" is invalid");
   }else{
      input.removeClass("invalid").addClass("valid");
      error_element.removeClass("error_show").addClass("error");
      error_element.html(name+" is required");
    }
}

function mobileValidate2(mobile,mobile1){ 
   var input=$('#'+mobile);
   var is_name=input.val(); 
   var input1=$('#'+mobile1);
   var is_name1=input1.val();
   var error_element=$("span#errorMobile", input.parent());        
   var pat=/^[0-9]{10}$/;//telno regular expression
    
   if(is_name==""){
      input.removeClass("valid").addClass("invalid");        
      error_element.removeClass("error").addClass("error_show");
      error_element.html("Primary Mobile number is required");
   }else if(!is_name.match(pat)){ 
      input.removeClass("valid").addClass("invalid");        
      error_element.removeClass("error").addClass("error_show");
      error_element.html("Primary Mobile number is invalid");
   }else if(!is_name1==""){ 
     if(!is_name1.match(pat)){
        input1.removeClass("valid").addClass("invalid");        
        error_element.removeClass("error").addClass("error_show");
        error_element.html("Secondary Mobile number is invalid");
     }else{
        input.removeClass("invalid").addClass("valid");
        input1.removeClass("invalid").addClass("valid");
        error_element.removeClass("error_show").addClass("error");
        error_element.html("Primary Mobile number is required");
     }
    }else{
       input.removeClass("invalid").addClass("valid");
       input1.removeClass("invalid").addClass("valid");
       error_element.removeClass("error_show").addClass("error");
       error_element.html("Primary Mobile number is required");
    }

 
}

function selectboxValidate(id) {   
    var input=$('#'+id);
    var is_name=input.val();
    var error_element=$('span#error1',input.parent('div .input-group').parent('div .form-group'));
    if(is_name=="" || is_name== null){
      input.removeClass("valid").addClass("invalid");        
      error_element.removeClass("error").addClass("error_show");
    }else{
      input.removeClass("invalid").addClass("valid");
      error_element.removeClass("error_show").addClass("error");
    }
}

function checkboxValide(val1,val2) {
  if(!($('#'+val1).is(':checked')||$('#'+val2).is(':checked'))){
        $('#'+val1).removeClass("valid").addClass("invalid");
        $('#'+val2).removeClass("valid").addClass("invalid");
        $("span",$('#'+val1).parent('label')).attr('id','border_red');
        $("span",$('#'+val2).parent('label')).attr('id','border_red');
        $(".col-md-12 span#error1",$('#'+val1).parent('label').parent('div').parent('div .radio').parent('div .form-group')).removeClass("error").addClass("error_show"); 
   }else{
        $('#'+val1).removeClass("invalid").addClass("valid");
        $('#'+val2).removeClass("invalid").addClass("valid");
        $("span",$('#'+val1).parent('label')).removeAttr('id','border_red');
        $("span",$('#'+val2).parent('label')).removeAttr('id','border_red');
        $(".col-md-12 span#error1",$('#'+val1).parent('label').parent('div').parent('div .radio').parent('div .form-group')).removeClass("error_show").addClass("error");
   } 
}

function checkboxValide2(val1,val2,val3,val4) {
  if(!($('#'+val1).is(':checked') || $('#'+val2).is(':checked') || $('#'+val3).is(':checked') || $('#'+val4).is(':checked') )){
        $('#'+val1).removeClass("valid").addClass("invalid");
        $('#'+val2).removeClass("valid").addClass("invalid");
        $('#'+val3).removeClass("valid").addClass("invalid");
        $('#'+val4).removeClass("valid").addClass("invalid");
        $("span",$('#'+val1).parent('label')).attr('id', 'border_red');
        $("span",$('#'+val2).parent('label')).attr('id', 'border_red');
        $("span",$('#'+val3).parent('label')).attr('id', 'border_red');
        $("span",$('#'+val4).parent('label')).attr('id', 'border_red');
        $(".col-md-12 span#error1",$('#'+val1).parent('label').parent('div').parent('div .radio').parent('div .form-group')).removeClass("error").addClass("error_show"); 
   }else{
        $('#'+val1).removeClass("invalid").addClass("valid");
        $('#'+val2).removeClass("invalid").addClass("valid");
        $('#'+val3).removeClass("invalid").addClass("valid");
        $('#'+val4).removeClass("invalid").addClass("valid");
        $("span",$('#'+val1).parent('label')).removeAttr('id', 'border_red');
        $("span",$('#'+val2).parent('label')).removeAttr('id', 'border_red');
         $("span",$('#'+val3).parent('label')).removeAttr('id', 'border_red');
        $("span",$('#'+val4).parent('label')).removeAttr('id', 'border_red');
        $(".col-md-12 span#error1",$('#'+val1).parent('label').parent('div').parent('div .radio').parent('div .form-group')).removeClass("error_show").addClass("error");
   } 
}

function employeesValidate(name) { 
      var input=$('#'+name);
      var is_name=input.val();
      var error_element=$("span#no_employees_error"); 
      if(is_name=="" || is_name== null || is_name==0){
        input.removeClass("valid").addClass("invalid");        
        error_element.removeClass("error").addClass("error_show");
      }else{
        input.removeClass("invalid").addClass("valid");
        error_element.removeClass("error_show").addClass("error");
      }
}

function dis_employeesValidate(name,v1) {
      var input=$('#'+name);
      var is_name=input.val();
      var error_element=$("span#dis_employees_error");
      var value1=$('input[name="'+v1+'"]:checked').val();
      if(value1=="Yes"){
        if(is_name=="" || is_name== null || is_name==0){
          input.removeClass("valid").addClass("invalid");        
          error_element.removeClass("error").addClass("error_show");
        }else{
          input.removeClass("invalid").addClass("valid");
          error_element.removeClass("error_show").addClass("error");
        }
      }else{
          input.removeClass("invalid").addClass("valid");
          error_element.removeClass("error_show").addClass("error");
      }      
}


function primaryDisValidate(name,v1) {
      var input=$('#'+name);
      var is_name=input.val();
      var error_element=$('span#error1',input.parent('div .input-group').parent('div .form-group'));
      var value1=$('input[name="'+v1+'"]:checked').val();
      if(value1=="Yes"){
        if(is_name=="" || is_name== null){
          input.removeClass("valid").addClass("invalid");        
          error_element.removeClass("error").addClass("error_show");
        }else{
          input.removeClass("invalid").addClass("valid");
          error_element.removeClass("error_show").addClass("error");
        }
      }else{
          input.removeClass("invalid").addClass("valid");
          error_element.removeClass("error_show").addClass("error");
      }     
}

function errorValidate(form_data) {
  var form_data=form_data;
  var error_free=true;
     form_data.forEach(function(input){
        var element=$("#"+input);
        var valid=element.hasClass("valid");
        if (!valid){
          error_free=false;
        }else{
          //error_element.removeClass("error_show").addClass("error");
        }
    });
   return error_free;
}



////////////////////////number validation///////////////////
            $(".numfield").keydown(function (e) {
                // Allow: backspace, delete, tab, escape, enter and .
                if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
                     // Allow: Ctrl/cmd+A
                    (e.keyCode == 65 && (e.ctrlKey === true || e.metaKey === true)) ||
                     // Allow: Ctrl/cmd+C
                    (e.keyCode == 67 && (e.ctrlKey === true || e.metaKey === true)) ||
                     // Allow: Ctrl/cmd+X
                    (e.keyCode == 88 && (e.ctrlKey === true || e.metaKey === true)) ||
                     // Allow: home, end, left, right
                    (e.keyCode >= 35 && e.keyCode <= 39)) {
                         // let it happen, don't do anything
                         return;
                }
                // Ensure that it is a number and stop the keypress
                if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                    e.preventDefault();
                }
            });
////////////////////////end number validation///////////////////

