/*
 *
 * login-register modal
 * Autor: Creative Tim
 * Web-autor: creative.tim
 * Web script: http://creative-tim.com
 * 
 */

  

  

function showLoginForm(){

        
        $('#Modal2').modal('hide');
        $('#Modal1').modal('show');
        
}
       

function showRegisterForm()
{
     
        $('#Modal1').modal('hide');
        $('#Modal2').modal('show');
 }

function openRegisterModal(){
    /*showRegisterForm();*/
     
     $('#Modal2').modal('show');    
}

function openAdminModal(){
    /*showRegisterForm();*/
     
     $('#Modal3').modal('show');    
}
function openEditModal(event){
    /*showRegisterForm();
     event.preventDefault();
     var postBody = event.target.parentNode.parentNode.childNodes[1].textContent;
     $('#post-body').val(postBody);*/
     
     $('#Modal4').modal('show');    
}


function openLoginModal(){
    /*showLoginForm(); */
        
        $('#Modal1').modal('show');    
}

function loginAjax(){
     /* Remove this comments when moving to server */
    /*$.post( "{{  route('signup') }}", function( data ) {
            if(data == 1){
                return view('dashboard');          
            } else {
                 shakeModal(); 
            }
        }); 
    

/*   Simulate error message from the server   
     shakeModal(); */
}
/*function loginAjaxx(){
    /*  Remove this comments when moving to server */
    /*$.post( "{{ route('signin') }}", function( data ) {
            if(data == 1){
                window.location.replace("{{ route('dashboard') }}");            
            } 
            else {
                 shakeModal(); 
            }
        }); 
    

/*   Simulate error message from the server   */
     /*shakeModal(); */
/*}

function shakeModal(){
    $('#loginModal .modal-dialog').addClass('shake');
             
             $('input[type="password"]').val('');
             setTimeout( function(){ 
                $('#loginModal .modal-dialog').removeClass('shake'); 
    }, 1000 ); 
}
   */