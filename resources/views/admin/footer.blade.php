   </div><!-- /#right-panel -->

    <!-- Right Panel -->
     


    <script src="{{asset('assets1/js/jquery-2.1.4.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
    <script src="{{asset('assets1/js/popper.min.js')}}"></script>
    <script src="{{asset('assets1/js/plugins.js')}}"></script>
    <script src="{{asset('assets1/js/main.js')}}"></script>

    <script src="{{asset('assets1/js/Chart.bundle.js')}}"></script>

    <script src="{{asset('assets1/js/dashboard.js')}}"></script>
    <script src="{{asset('assets1/js/widgets.js')}}"></script>
    
    <script src="{{asset('assets1/js/lib/data-table/datatables.min.js')}}"></script>
    <script src="{{asset('assets1/js/lib/data-table/dataTables.bootstrap.min.js')}}"></script>
    <script src="{{asset('assets1/js/lib/data-table/datatables-init.js')}}"></script>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
   
    
     <script  src="https://code.jquery.com/jquery-1.11.3.min.js"></script> -->
  <!--     <script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.16/themes/base/jquery-ui.css'></script>
  <script  src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript">
     var burl='{{URL::asset('public/storage/')}}';
  </script>
  <script src="{{asset('assets1/js/mymodal.js')}}"></script>
  <script type="text/javascript">$(window).bind("load", function() {
  ajaxmail();
});</script>
  
<script type="text/javascript">


  
  $(document).ready(function(){
//ajaxmail();
setInterval(ajaxmail, 30000);
    // base url
    
    // alert(burl);

    // ajax call get the unread mails
   //  setInterval(ajaxmail, 300);

   //   function ajaxmail()    {      
   //    $.ajax({
   //                  type: "GET",    //GET or POST or PUT or DELETE verb
   //                  url: 'http://localhost/meetup/getmail',     // Location of the service
   //                  data: "",     //Data sent to server
                   
   //                  dataType: "json",   //Expected data format from server
                    
   //                  success: function (result) {//On Successful service call
   //                    var count = Object.keys(result).length;
   //                   $('.dropdown-toggle #mc').text(count);
   //                     $('#dynamicdata').empty();

              
   //       if  (  $.isEmptyObject( result )){
   //         $('#mc').text('0');
          

   //                 }
   //       else{     // $('#mc').append(count);

   //           data1 = "<p class='red'>You have" +count+" Mails</p>";
   //            $('#dynamicdata').append(data1);
   //                    $.each(result, function(index, row) {
                       

   //                     var data=

   //                      " <a class='dropdown-item media bg-flat-color-1' href='#'>"
   //                       +   " <span class='photo media-left'><img alt='avatar'"+" src='"+"{{asset('images1/avatar/1.jpg')}}'"+"></span>"+
   //                              "<span class='message media-body'>"+
   //                               "<span class='name float-left text-white'>"+row.name+"</span>"
   //                                 +"<span class='time float-right text-white'>"+row.time+"</span>"
   //                                 +"<p class='text-light'>Hello, this is an example msg</p>"
   //                            +"</span>"+
   //                        " </a>"    ;                
                     
 
   //                  $('#dynamicdata').append(data);

                           
   //                                                       });


                                        
        
   //                  }}
   //                  ,
   //                  error: function() { //alert('error occured');

   //                  } // When Service call fails
   //              });
   // }


    // add category message
  @if(Session::has('addcat'))
  msg={!!json_encode(Session::get('addcat'))!!};
  $('.childpara').remove();

 var  data="<p class='childpara'>"+msg+"</p>";

            $('#para').append(data);
            $('#m12').modal('show');
  
  @endif

  // edit category message
  @if(Session::has('editcat'))
  msg={!!json_encode(Session::get('editcat'))!!};
  $('.childpara').remove();

 var  data="<p class='childpara'>"+msg+"</p>";

            $('#para').append(data);
            $('#m12').modal('show');
  
  @endif
  // category delete
  @if(Session::has('deletecat'))
  msg={!!json_encode(Session::get('deletecat'))!!};
  $('.childpara').remove();

 var  data="<p class='childpara'>"+msg+"</p>";

            $('#para').append(data);
            $('#m12').modal('show');
  
  @endif

         //begging of login validations
         $('#loginform').on('submit',function(){

            
            if($('#email').val().length==0||$('#password').val().length==0) {

                if($('#email').val().length==0){
                 $('.childpara').remove();
                 data="<p class='childpara'> username cannot be blank</p>";
                  $('#para').append(data);
                              }
                              if($('#password').val().length==0){
                 $('.childpara').remove();
                 data="<p class='childpara'>password cannot be blank</p>";
                  $('#para').append(data);
                              }
                 $('#m12').modal('show');
            return false;

            }


         });
       // end of login validataions from front end
       // invalid login message 
       if($('#wrongdata').length>0){

        
 $('.childpara').remove();


 msg= $('#wrongdata').data('wrongdata');
 var  data="<p class='childpara'>"+msg+"</p>";

            $('#para').append(data);
            $('#m12').modal('show');
} 


        //category condtions

      $('#catform').on('submit',function(){
        $('.childpara').remove();

          catname=$('#catname').val();
        if(catname.length==0 ){
        var  data="<p class='childpara'>category name must be passed</p>";

            $('#para').append(data);
            $('#m12').modal('show');
            return false;
         }
      });
         

//you must eneter category from backend messeage
if($('#catg').length>0){
  data="<p class='childpara'>category name must be passed</p>";

            $('#para').append(data);
            $('#m12').modal('show');
   }

   // begging of edit profile validations
   $('#editpform').on('submit',function(){

     $('.childpara').remove();
     
     

        if( $('#username').val().length==0 || $('#email').val().length==0||$('#password').val().length==0 || $('#location').val().length==0 ||$('#mobile').val().length==0){

        if($('#username').val().length==0 ){
        var data="<p class='childpara'>user name must be passed</p>";

            $('#para').append(data);
           // $('#m12').modal('show');

          }
           if($('#email').val().length==0 ){
        var data="<p class='childpara'>email name must be passed</p>";

            $('#para').append(data);
           // $('#m12').modal('show');

          }
           if($('#password').val().length==0 ){
        var data="<p class='childpara'>password field must be passed</p>";

            $('#para').append(data);
           // $('#m12').modal('show');

          }
           if($('#mobile').val().length==0 ){
        var data="<p class='childpara'>mobile field must be passed</p>";

            $('#para').append(data);
            //$('#m12').modal('show');

          }
           if($('#location').val().length==0 ){
        var data="<p class='childpara'>location name must be passed</p>";

            $('#para').append(data);
           

          }
           $('#m12').modal('show');
           return false;

        }
 

      });
// end of  editprofile validation
//profile changed succefully
@if(Session::has('psuccess'))
  msg={!!json_encode(Session::get('psuccess'))!!};
  $('.childpara').remove();

 var  data="<p class='childpara'>"+msg+"</p>";

            $('#para').append(data);
            $('#m12').modal('show');
  
  @endif

// if($('#psuccess').length>0){


//     $('.childpara').remove();


//  msg= $('#psuccess').data('psuccess');
//  var  data="<p class='childpara'>"+msg+"</p>";

//             $('#para').append(data);
//             $('#m12').modal('show');
// }
// end of profile changed succfully

// password change in admin panel
 @if(Session::has('oldpwd-error'))
  msg={!!json_encode(Session::get('oldpwd-error'))!!};
  $('.childpara').remove();

 var  data="<p class='childpara'>"+msg+"</p>";

            $('#para').append(data);
            $('#m12').modal('show');
  
  @endif

  //password page validatiosn
   @if(Session::has('pwderrors'))
  var msg={!!json_encode(Session::get('pwderrors'))!!};
  for(i in msg)
  {
    data="<p class='childpara'>"+msg[i] +"</p>";
     $('#para').append(data);
    
  }


             $('#m12').modal('show');
  
  @endif

// password successfully changed
@if(Session::has('success-password'))
  var msg={!!json_encode(Session::get('success-password'))!!};
  $('.childpara').remove();

 var  data="<p class='childpara'>"+msg+"</p>";

            $('#para').append(data);
            $('#m12').modal('show');
  
  @endif


       // start of compose  mail validations  
 $('#composeform').on('submit',function(){
  

$('.childpara').remove();
if( $('#email').val().length==0){

var  data="<p class='childpara'>must pass the email field</p>";

            $('#para').append(data);
            $('#m12').modal('show');
            return false;
           

}


 });
// end of compose mail validations

// begnning of compose mail successfully


if( $('#fileupload').length >0) {
  $('.childpara').remove();


 msg= $('#fileupload').data('fileupload');
 var  data="<p class='childpara'>"+msg+"</p>";

            $('#para').append(data);
            $('#m12').modal('show');
           
 

}
// end of compose mail succfull

      $("#printbutton").click(function(){

        window.print();
    
    });
//  entering  empty mail, or nonformatted mail from backend when rese password
if( $('#errormail').length >0) {
//alert('ok');

 $('.childpara').remove();


 msg= $('#errormail').data('errormail');
 var  data="<p class='childpara'>"+msg+"</p>";

            $('#para').append(data);
            $('#m12').modal('show');
           

}
//  entering  empty mail, or nonformatted mail from front end when reset password
$('#resetform').on('submit',function(){
        $('.childpara').remove();

         
        if($('#email').val().length==0 ){
        var  data="<p class='childpara'>enter mail id</p>";

            $('#para').append(data);
            $('#m12').modal('show');
            return false;
         }
      });



//entering the unregistered mail

if( $('#nomail').length >0) {


         
 $('.childpara').remove();


 msg= $('#nomail').data('nomail');
 var  data="<p class='childpara'>"+msg+"</p>";

            $('#para').append(data);
            $('#m12').modal('show');

}
// goto your mail to reset password

if( $('#gologin').length >0) {


           
 $('.childpara').remove();


 msg= $('#gologin').data('gologin');
 var  data="<p class='childpara'>"+msg+"</p>";

            $('#para').append(data);
            $('#m12').modal('show');

}
//login with new credentials
if( $('#loginasnew').length >0) {


              
 $('.childpara').remove();


 msg= $('#loginasnew').data('loginasnew');
 var  data="<p class='childpara'>"+msg+"</p>";

            $('#para').append(data);
            $('#m12').modal('show');


}
// invalid token
if( $('#invalidtoken').length >0) {


                
 $('.childpara').remove();


 msg= $('#invalidtoken').data('invalidtoken');
 var  data="<p class='childpara'>"+msg+"</p>";

            $('#para').append(data);
            $('#m12').modal('show');

}
// must enter password and match with confirm password from frontend
$('#passwordform').on('submit',function(){
  

$('.childpara').remove();
if($('#password').val().length!==$('#cpassword').val().length ||$('#password').val()!==$('#cpassword').val()){

  var  data="<p class='childpara'>password must match with confirm password</p>";
  $('#para').append(data);
   $('#m12').modal('show');
   return false;
}
if( $('#password').val().length==0||$('#cpassword').val().length==0){
  if( $('#password').val().length==0){

var  data="<p class='childpara'>must enter password field</p>";

            $('#para').append(data);
            // $('#m12').modal('show');
            // return false;
          } 
          if( $('#cpassword').val().length==0){

var  data="<p class='childpara'>must enter the confirm password field</p>";

            $('#para').append(data);
            
          } 
           $('#m12').modal('show');
             return false;

}


 });


// must enter password and match with confirm password from backend
if( $('#pwderror').length >0) {

               
 $('.childpara').remove();


 msg= $('#pwderror').data('pwderror');
 var  data="<p class='childpara'>"+msg+"</p>";

            $('#para').append(data);
            $('#m12').modal('show');

}

        //$('#myss').modal({ show: false});
        //send mail with out fields
        if( $('#msg1').length >0) {


   alert($('#msg1').data('msg1'));

}

//compose mail sucefully
if( $('#mailsent').length>0){

     alert($('#mailsent').data('mailsent'));
}
//  mail move to trash

if( $('#trash').length>0){

     
 $('.childpara').remove();


 msg= $('#trash').data('trash');
 var  data="<p class='childpara'>"+msg+"</p>";

            $('#para').append(data);
            $('#m12').modal('show');
}

//  end of mail move
//mail restore
 @if(Session::has('restoremsg'))
  msg={!!json_encode(Session::get('restoremsg'))!!};
  $('.childpara').remove();

 var  data="<p class='childpara'>"+msg+"</p>";

            $('#para').append(data);
            $('#m12').modal('show');
  
  @endif

    //mail deleted permently   
     
if($('#msgdelete').length>0){

        
 $('.childpara').remove();


 msg= $('#msgdelete').data('msgdelete');
 var  data="<p class='childpara'>"+msg+"</p>";

            $('#para').append(data);
            $('#m12').modal('show');
}
// delete user

if($('#udelete').length>0){

 $('.childpara').remove();


 msg= $('#udelete').data('udelete');
 var  data="<p class='childpara'>"+msg+"</p>";

            $('#para').append(data);
            $('#m12').modal('show');

   
}


// you must enter requeird fields while profile changing
if($('#profileerror').length>0){

    alert($('#profileerror').data('profileerror'));
}

//profile changed succfully
//     if($('#psuccess2').length>0){

//     alert($('#psuccess2').data('psuccess2'));
// }
});
    
</script>
   


</body>
</html>
