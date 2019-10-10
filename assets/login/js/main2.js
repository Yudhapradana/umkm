
(function ($) {
    "use strict";


    /*==================================================================
    [ Validate ]*/
    var input = $('.validate-input .input100');
    var tes= "bisa";

    $('.validate-form').on('submit',function(){
        var check = true;

        for(var i=0; i<input.length; i++) {
            if(i==3){
                  
                 if(validate(input[i]) == false){
                var thisAlert = $(input[3]).parent();
                $(thisAlert).attr({'data-validate':"username is required"});
                   $(thisAlert).addClass('alert-validate');
                check=false;
            }else{
          cekData();
      }

              
        
    }else{
            if(validate(input[i]) == false){
                showValidate(input[i]);
                check=false;
            }

        }
    }
       

        return check;
    });


    $('.validate-form .input100').each(function(){
        $(this).focus(function(){
           hideValidate(this);
        });
    });

    function validate (input) {
        if($(input).attr('type') == 'email' || $(input).attr('name') == 'email') {
            if($(input).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
                return false;
            }
        }
        else {
            if($(input).val().trim() == ''){
                return false;
            }
        }
    }

    function cekData(){
       
        var username = $('#username').val();
        $.ajax({
            type    : 'POST',  
             url: 'getUsername',
          data : {username: username},
            dataType: 'json', 
            success : function(data){
              if(data.jumlah == 1){
                var thisAlert = $(input[3]).parent();
                $(thisAlert).attr({'data-validate':"data sudah ada"});
                   $(thisAlert).addClass('alert-validate');
              }else{
                    var thisAlert = $(input[3]).parent();
                     $(thisAlert).removeClass('alert-validate');
              }
            }
        })

    }

    function showValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).addClass('alert-validate');
    }

    function hideValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).removeClass('alert-validate');
    }
    
    /*==================================================================
    [ Show pass ]*/
    var showPass = 0;
    $('.btn-show-pass').on('click', function(){
        if(showPass == 0) {
            $(this).next('input').attr('type','text');
            $(this).find('i').removeClass('fa-eye');
            $(this).find('i').addClass('fa-eye-slash');
            showPass = 1;
        }
        else {
            $(this).next('input').attr('type','password');
            $(this).find('i').removeClass('fa-eye-slash');
            $(this).find('i').addClass('fa-eye');
            showPass = 0;
        }
        
    });
    

})(jQuery);