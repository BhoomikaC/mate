$(document).ready(function(){

    $('#go-button').on('click', function(){
        $('#user-type-modal').modal('hide');

        var user_type = $('.radio-button.active input').val();
        if( user_type == 'student'){
            $('#student-registration-modal').modal('show');
        }else if(user_type == 'school'){
            $('#school-registration-modal').modal('show');
        }
        
    });

    $('#student-registration-modal, #school-registration-modal').on('hidden.bs.modal', function(){
        $('body').css('padding-right', '0px');
    });

    $(document).on('click', function(){
        $('.alert').remove();
    });

    $(document).on('click', '.gender-dropdown .dropdown-menu li a', function(){
        $('input[name="gender"]').val($(this).text());
    });
    
/*    if($("div#login-error").length>0)
    {
        $('#login-modal').modal('show');
    }
    else if($("div#student-error").length>0)
    {
         $('#student-registration-modal').modal('show');
    }
    else if($("div#school-error").length>0)
    {
         $('#school-registration-modal').modal('show');
    }*/
     
    /*$.validate();*/
    
    $.validate({
        modules : 'security'
    });

   
});