

//ajax call get the unread mails

    //setInterval(ajaxmail, 300);


     function ajaxmail()    {      
      $.ajax({
                    type: "GET",    //GET or POST or PUT or DELETE verb
                    url: 'http://localhost/meetup/getmail',     // Location of the service
                    data: "",     //Data sent to server
                   
                    dataType: "json",   //Expected data format from server
                    
                    success: function (result) {//On Successful service call
                       count = Object.keys(result).length;
                      //alert(count);
                   
                       $('#dynamicdata').empty();
                 $( '#mc').text(count);
                // alert(count);
              

              
         if  (  $.isEmptyObject( result )){
          $('#mc').text(count);
          data='<p> no unread mails</p>';
           $('#dynamicdata').append(data);
          //alert(data);

                   }
         else{     // $('#mc').append(count);

             data1 = "<p class='red'>You have" +count+" Mails</p>";
              $('#dynamicdata').append(data1);
                      $.each(result, function(index, row) {
                        //alert(row.photo);
                       
                                if(row.photo==null){

                                  row.photo='img.png';
                                }
                       var data=

                        " <a class='dropdown-item media bg-flat-color-1' href='#'>"
                         +   " <span class='photo media-left'><img alt='avatar'"+" src='" + burl+"/"+row.photo+"'></span>"+
                                "<span class='message media-body'>"+
                                 "<span class='name float-left text-white'>"+row.name+"</span>"
                                   +"<span class='time float-right text-white'>"+row.time+"</span>"
                                   +"<p class='text-light'>"+row.message+"</p>"
                              +"</span>"+
                          " </a>"    ;                
                    // alert(data);
 
                    $('#dynamicdata').append(data);

                           
                                                   });
                                               }
                                           }
                    ,
                    error: function() { //alert('error occured');

                    } // When Service call fails
                });
   }


