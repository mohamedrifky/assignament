//apparove
function approve(pr_id,approve_level){
	//alert('test');
    swal({
        title: 'Are you sure ?',
        text: 'You won\'t be able to revert this!',
        showCancelButton: true,
        confirmButtonColor: '#00bf86',
        cancelButtonColor: '#ff8080',
        confirmButtonText: 'Yes, approve it!'
    }).then(function () {
        approve_participant(pr_id,approve_level);
        swal({
            title: 'Approved!',
            text: 'Participant has been approved!',
            type: 'success',
            confirmButtonColor: '#00c0ef'
        }).done();
    });
    return false;
}
                        
//reject                     
function reject(pr_serial_no,approve_level,filled_person) {
   //alert('test1');

   swal({
    title: 'Please Enter Reason',
    input: 'textarea',
    showCancelButton: true,
    confirmButtonText: 'Submit',
    confirmButtonColor: '#00c0ef',
    cancelButtonColor: '#ff8080',
    width: 600,
    showLoaderOnConfirm: true,
    preConfirm: function (reason) {
        return new Promise(function (resolve, reject) {
            setTimeout(function () {
                if (reason === '') {
                    reject('Please Enter Reason');
                } else {
                    resolve();
                }
            }, 2000);
        });
    },
    allowOutsideClick: false
}).then(function (reason) {
    reject_participant(pr_serial_no,reason,filled_person,approve_level);
    swal({
        type: 'success',

/* title: 'Ajax request finished!',
html: 'reason: ' + '<strong>' + reason + '</strong>'*/
title: 'Rejected!',
text: 'Participant has been rejected!',
type: 'success',
confirmButtonColor: '#00c0ef'
});
}).done();
return false;
}


function approve_participant(pr_id,approve_level)
{
    var data_to_send="pr_id="+pr_id+"&&approve_level="+approve_level+"&&approve=approve";
    //alert(data_to_send);
    $.ajax({
           type: "POST",
           url: "participant_approve.php?"+data_to_send,
           cache: false,
           success: function(result){
           
           if(approve_level==1){
            window.location.href="participant_register_list_sadmin?"+pr_id;
           }else if (approve_level==2) {
            window.location.href="participant_register_list_admin?"+pr_id;
           }else if (approve_level==3) {
            window.location.href="participant_register_list_ulevel_1?"+pr_id;
           }else{
            window.location.href="participant_register_list_user_level_2?"+pr_id;
           }
           
         
           }
      });
}


function reject_participant(pr_id,reason,filled_person,approve_level)
{
    var data_to_send="pr_id="+pr_id+"&&approve_level="+approve_level+"&&approve=reject&&filled_person="+filled_person+"&&reason="+reason;
    //alert(data_to_send);
    $.ajax({
           type: "POST",
           url: "participant_approve.php?"+data_to_send,
           cache: false,
           success: function(result){
            //alert(result);
           if(approve_level==1){
            window.location.href="participant_register_list_sadmin?"+pr_id;
           }else if (approve_level==2) {
            window.location.href="participant_register_list_admin?"+pr_id;
           }else if (approve_level==3) {
            window.location.href="participant_register_list_ulevel_1?"+pr_id;
           }else{
            window.location.href="participant_register_list_user_level_2?"+pr_id;
           }
         
           }
      });
}