<!DOCTYPE html>
<!-- saved from url=(0060)http://frontendmatters.org/quicky/ltr/light-skin/chat-1.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <!-- SEO Meta Tags-->
    <meta name="keywords" content="quicky, chat, messenger, conversation, social, communication">
    <meta name="description" content="Quicky is a Bootstrap based modern and fully responsive Messaging template to help build Messaging or Chat application fast and easy.">
    <meta name="subject" content="communication">
    <meta name="copyright" content="frontendmatters">
     <meta name="revised" content="Tuesday, November 10th, 2020, 08:00 am">
    <title>Quicky - HTML Chat Template</title>
    <!-- Favicon and Touch Icons-->
    <link rel="apple-touch-icon" sizes="180x180" href="http://frontendmatters.org/quicky/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="http://frontendmatters.org/quicky/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="http://frontendmatters.org/quicky/favicon-16x16.png">
    <link rel="shortcut icon" href="http://frontendmatters.org/quicky/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="<?php echo base_url()?>Quicky - HTML Chat Template2_files/inter.css"> 
    <link rel="stylesheet" href="<?php echo base_url()?>Quicky - HTML Chat Template2_files/app.min.css">
<style type="text/css">img[onload^="SVGInject("]{visibility:hidden;}</style><link rel="stylesheet" href="<?php echo base_url()?>Quicky - HTML Chat Template2_files/emojione-sprite-32.css"></head>

<body class="chats-tab-open">

    <!-- Main Layout Start -->
    <div class="main-layout">
     

        <!-- Sidebar Start -->
        <aside class="sidebar">
            <!-- Tab Content Start -->
            <div class="tab-content">
                <!-- Chat Tab Content Start -->
                <div class="tab-pane active" id="chats-content">
                    <div class="d-flex flex-column h-100">
                        <div class="hide-scrollbar h-100" id="chatContactsList">
                            
                            <!-- Chat Header Start -->
                            <div class="sidebar-header sticky-top p-2">

                                <div class="d-flex justify-content-between align-items-center">
                                    <!-- Chat Tab Pane Title Start -->
                                    <h5 class="font-weight-semibold mb-0">ChatApp</h5>
                                    <!-- Chat Tab Pane Title End -->

                                  
                                </div>
                                
                                
                                <!-- Sidebar Header Start -->
                                <div class="sidebar-sub-header">
                                    <!-- Sidebar Header Dropdown Start -->
                                    <div class="dropdown mr-2">
                                        <!-- Dropdown Menu Start -->
                                         <div class="modal-body " >

                                             
                                            <div class="d-flex" style="flex-direction: row">
                                              <select class="form-control form-select-sm" id="users">
                                                <option>Select User</option>
                                              </select>
                                                <button class="btn btn-secondary " style="margin-left: 10px; width: 200px;" data-dismiss="modal" id="submitUser" type="button">Start A Chat</button>                                                       
                                            </div>
                                            </div>
                                        <!-- Dropdown Menu End -->
                                    </div>
                                    <!-- Sidebar Search End -->
                                </div>
                                <!-- Sidebar Header End -->
                            </div>
                            <!-- Chat Header End -->
                            <ul class="contacts-list" id="chatContactTabUsers" data-chat-list="">
                                <!-- Chat Item Start -->
                                <li class="contacts-item friends active" style="height: 100px;">
                                    <a class="contacts-link" href="javascript:;">
                                        <div class="avatar avatar-online    ">
                                            <img src="<?php echo base_url()?>Quicky - HTML Chat Template2_files/2.png" alt="">
                                        </div>
                                        <div class="contacts-content">
                                            <div class="contacts-info">
                                                <h6 class="chat-name text-truncate" >Catherine Richardson</h6>
                                                <div class="chat-time">Just now</div>
                                            </div>
                                            <div class="contacts-texts">
                                                <p class="text-truncate">I’m sorry, I didn’t catch that. Could you please repeat?</p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                
                             
                            </ul>
                            <!-- Chat Contact List End -->
                        </div>
                    </div>
                </div>
                <!-- Chats Tab Content End -->

     

        
          
            <!-- Tab Content End -->
        </aside>
        <!-- Sidebar End -->

        <!-- Main Start -->
        <main class="main main-visible">

            <!-- Chats Page Start -->
            <div class="chats">
                <div class="chat-body">

                    <!-- Chat Header Start-->
                    <div class="chat-header">
                        <!-- Chat Back Button (Visible only in Small Devices) -->
                        <button class="btn btn-secondary btn-icon btn-minimal btn-sm text-muted d-xl-none" type="button" data-close="">
                            <!-- Default :: Inline SVG -->
                            <svg class="hw-20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                            </svg>

                            <!-- Alternate :: External File link -->
                            <!-- <img class="injectable hw-20" src="./../../assets/media/heroicons/outline/arrow-left.svg" alt=""> -->
                        </button>

                        <!-- Chat participant's Name -->
                        <div class="media chat-name align-items-center text-truncate">
                            <div class="avatar avatar-online d-none d-sm-inline-block mr-3">
                                <img src="<?php echo base_url()?>Quicky - HTML Chat Template2_files/2.png" alt="">
                            </div>

                            <div class="media-body align-self-center ">
                                <h6 class="text-truncate mb-0"><div id="chatname"></div></h6>
                                <small class="text-muted">Online</small>
                            </div>
                        </div>

                        <!-- Chat Options -->
                       
                    </div>
                    <!-- Chat Header End-->

           

                    <!-- Chat Content Start-->
                    <div class="chat-content p-2" id="messageBody">
                        <div class="container">

                            <!-- Message Day Start -->
                            <div class="message-day">


                                <!-- Received Message Start -->
                                <div class="message">
                                    <div class="message-wrapper">
                                        <div class="message-content">
                                            <span>I have to give a presentation on global warming on Friday, and I am so nervous.</span>
                                        </div>
                                    </div>
                                    <div class="message-options">
                                        <div class="avatar avatar-sm"><img alt="" src="<?php echo base_url()?>Quicky - HTML Chat Template2_files/6.png"></div>
                                        <span class="message-date">9:12am</span>
                                       
                                    </div>
                                </div>
                                <!-- Received Message End -->
                                  <div class="message self">
                                    <div class="message-wrapper">
                                        <div class="message-content">
                                            <span>Hello World.</span>
                                        </div>
                                    </div>
                                    <div class="message-options">
                                        <div class="avatar avatar-sm"><img alt="" src="<?php echo base_url()?>Quicky - HTML Chat Template2_files/6.png"></div>
                                        <span class="message-date">9:12am</span>
                                       
                                    </div>
                                </div>

                                



                    </div>

                    <!-- Chat Footer End-->
                </div>







            </div>
            <div class="group-rom m-2">
                             <div class="chat-txt d-flex" >
                              <input type="text" id="msg" class="form-control mr-1">
                          <button id="sendmsg" class="btn btn-primary">Send</button>
                          </div>
            <!-- Chats Page End -->
        </div>
    </div>
</div>


        </main>
        <!-- Main End -->

        <!-- App Add-ons Start -->
  

     
    <!-- Main Layout End -->
  

    <!-- Javascript Files -->
    <script src="<?php echo base_url()?>Quicky - HTML Chat Template2_files/jquery-3.5.0.min.js.download"></script>
    <script src="<?php echo base_url()?>Quicky - HTML Chat Template2_files/bootstrap.bundle.min.js.download"></script>
    <script src="<?php echo base_url()?>Quicky - HTML Chat Template2_files/jquery.magnific-popup.min.js.download"></script>
    <script src="<?php echo base_url()?>Quicky - HTML Chat Template2_files/svg-inject.min.js.download"></script>
    <script src="<?php echo base_url()?>Quicky - HTML Chat Template2_files/modal-steps.min.js.download"></script>
    <script src="<?php echo base_url()?>Quicky - HTML Chat Template2_files/emojionearea.min.js.download"></script>
    <script src="<?php echo base_url()?>Quicky - HTML Chat Template2_files/app.js.download"></script>


    <script type="text/javascript">
      $(document).ready(function() {

        $('#chatContactTabUsers').children().remove();

         $.ajax({
            type: "POST", 
            url: "<?php echo base_url()?>index.php/chats/list_chats", 
            dataType: "json",
            success: function(response) 
            {
              var chatlist = '';
              $.each(response, function (i, item) {
                var date = new Date(item.timestamp);


               chatlist += "<li class='contacts-item friends' style='height:100px;'>" +
                        "<a class='contacts-link' href='<?php echo base_url()?>index.php/chats/load_messages?chatid="+item.id+"'>"+
                            "<div class='avatar'>" +
                                "<img src='<?php echo base_url()?>Quicky - HTML Chat Template2_files/2.png' alt=''>" +
                            "</div>" +
                            "<div class='contacts-content'>" +
                                "<div class='contacts-info'>" +
                                    "<h6 class='chat-name text-truncate' id='chat'>"+ item.chatname +
                                    "</h6>" +
                                    "<div class='chat-time'>Just now</div>" +
                                "</div>" +
                                  "<div class='contacts-texts'>" +
                                    "<p class='text-truncate'>" +
                                    item.unreaded +" unreaded messages</p>" +
                                            "</div>" +
                              
                            "</div>" +
                        "</a>" +
                    "</li>";

                             });

                // console.log(response);
                $('#chatContactTabUsers').append(chatlist);
                // $('#chats-desc').append(chatHTML);


                 
            },
            error:function(e)
            {
                alert(e);    
                console.log(e);
            }
            });
          
         

       $('.message-day').children().remove();
       // $('#chat-finished').remove();


       $.ajax({
            type: "POST", 
            url: "<?php echo base_url()?>index.php/chats/list_messages", 
            dataType: "json",
            success: function(response) 
            {
              var msgHTML = '';

              // console.log(response);
              $.each(response, function (i, item) {

                // console.log(item.status);
                if(item.sender_name == response.chatname && item.status == "unread" && typeof(item.status) != "undefined")
                {
                    $.ajax({
                        type: "POST",
                        url: "<?php echo base_url()?>index.php/chats/set_msg_read",
                        dataType: "json",
                        data: { msgid : item.id },
                    });
                }
                var date = new Date(item.timestamp);
                // console.log("<?= $this->session->userdata('userid');?>")
                if(item.sender_id == "<?= $this->session->userdata('userid');?>" )
                {
                   msgHTML += '  <div class="message self">'+
                                  '<div class="message-wrapper">'+
                                        '<div class="message-content">' +
                                            '<span id="originalmsg"> '+ item.message+'</span>'+
                                       ' </div>'+
                                   ' </div>'+
                                    '<div class="message-options">'+
                                       ' <div class="avatar avatar-sm"><img alt="" src="<?php echo base_url()?>Quicky - HTML Chat Template2_files/5.png"></div>'+
                                        '<span class="message-date">'+date.getHours()%12  +':'+ date.getMinutes()+'</span>'+
                                       
                                   ' </div>'+
                                '</div>';
                }
                else{
                    msgHTML += '  <div class="message ">'+
                                  '<div class="message-wrapper">'+
                                        '<div class="message-content">' +
                                            '<span id="originalmsg"> '+ item.message+'</span>'+
                                       ' </div>'+
                                   ' </div>'+
                                    '<div class="message-options">'+
                                       ' <div class="avatar avatar-sm"><img alt="" src="<?php echo base_url()?>Quicky - HTML Chat Template2_files/6.png"></div>'+
                                        '<span class="message-date">'+date.getHours()%12  +':'+ date.getMinutes()+'</span>'+
                                       
                                   ' </div>'+
                                '</div>';
                }
                
              });
                $('#chatname').html(response.chatname);
               // $('.message-day').prepend(msgHTML);
               $('.message-day').append(msgHTML);
               $('.message-day').children().last().remove();
               $('#chat-finished').remove();       

               var end = "";
               end += "<div id='chat-finished'></div>";
               $('.message-day').after(end);

                var new_position = $('#chat-finished').offset();
                console.log(new_position.top);

                $('#messageBody').animate({ scrollTop: new_position.top}, 500);



               // console.log(response);
                 
            },
            error:function(e)
            {
                alert(e);    
                console.log(e);
            }
            });


   

               setInterval(function(){ 

            $.ajax({
                    type: "POST", 
                    url: "<?php echo base_url()?>index.php/chats/get_new_msg", 
                    dataType: "json",
                    success: function(response) 
                    {
                            // console.log(response);
                             $.each(response, function (i, item) {
                                 if(item.sender_name == response.chatname && item.status == "unread" && typeof(item.status) != "undefined")
                                    {
                                        $.ajax({
                                            type: "POST",
                                            url: "<?php echo base_url()?>index.php/chats/set_msg_read",
                                            dataType: "json",
                                            data: { msgid : item.id },
                                        });
                                    }




                               if($(".message-content span").last().text().trim() != item.message && $(".message-content span").last().text().trim() != "undefined")
                                {
                                    
                                    var end = "";
                                    var msgHTML = '';
                                    var date = new Date(item.timestamp);
                                    if(item.sender_id == "<?= $this->session->userdata('userid');?>" )
                                    {
                                       msgHTML += '  <div class="message self">'+
                                                      '<div class="message-wrapper">'+
                                                            '<div class="message-content">' +
                                                                '<span id="originalmsg"> '+ item.message+'</span>'+
                                                           ' </div>'+
                                                       ' </div>'+
                                                        '<div class="message-options">'+
                                                           ' <div class="avatar avatar-sm"><img alt="" src="<?php echo base_url()?>Quicky - HTML Chat Template2_files/5.png"></div>'+
                                                            '<span class="message-date">'+date.getHours()%12  +':'+ date.getMinutes()+'</span>'+
                                                           
                                                       ' </div>'+
                                                    '</div>';
                                    }
                                    else{
                                        msgHTML += '  <div class="message ">'+
                                                      '<div class="message-wrapper">'+
                                                            '<div class="message-content">' +
                                                                '<span id="originalmsg"> '+ item.message+'</span>'+
                                                           ' </div>'+
                                                       ' </div>'+
                                                        '<div class="message-options">'+
                                                           ' <div class="avatar avatar-sm"><img alt="" src="<?php echo base_url()?>Quicky - HTML Chat Template2_files/6.png"></div>'+
                                                            '<span class="message-date">'+date.getHours()%12  +':'+ date.getMinutes()+'</span>'+
                                                           
                                                       ' </div>'+
                                                    '</div>';
                                    }       


                                       $('.message-day').append(msgHTML);
                                          // $('#chat-finished').remove();       

                                        //  var end = "";
                                        // end += "<div id='chat-finished'></div>";
                                        // $('.message-day').after(end);
                                        // var new_position = $('#chat-finished').offset();
                                        // console.log(new_position.top);
                                        // $('#messageBody').animate({ scrollTop: new_position.top}, 1200);

                                }
                            });
                            $('.message-day').children().last().remove();
                            // $('#chat-finished').remove();       
                            // var end = "";
                            // $('#chat-finished').remove();
                            // end += "<div id='chat-finished'></div>";
                            // $('.message-day').after(end);

                            // var new_position = $('#chat-finished').offset();
                            // $('#messageBody').animate({ scrollTop: new_position.top}, 500);

                            // document.getElementById("#chat-finished").scrollIntoView();

                        },
                        error:function(e)
                        {
                            alert(e);    
                            console.log(e);
                        }
               });
        }, 5000);

         $('#sendmsg').click(function(e){
                if($("#msg").val() == "")
                {
                    alert('messages not be empty');
                }
                else
                {
                $.ajax({
                    type: "POST", 
                    url: "<?php echo base_url()?>index.php/chats/send_message", 
                    dataType: "json",
                    data: {
                      message : $("#msg").val(),
                      reciver : $("#chatname").text()
                    },
                    success: function(response) 
                    {
                      // console.log(response);
                      if(response)
                      {
                            // window.location.reload();
                            // console.log(response);
                            $("#msg").val('');
                      }
                    },
                    error:function(e)
                    {
                        alert(e);    
                        console.log(e);
                    }
               });
           }
        });


      

     
      $.ajax({
            type: "POST", 
            url: "<?php echo base_url()?>index.php/welcome/list_users", 
            dataType: "json",
            success: function(response) 
            {
              // console.log(response);
                response.forEach(function (data) {
                        $('#users').append(new Option(data.name, data.name));
                    })
            },
            error:function(e)
            {
                alert(e);    
                console.log(e);
            }
            });


       $('#submitUser').click(function(e){
                $.ajax({ 
                        type: "POST", 
                        url: "<?php echo base_url()?>index.php/chats/add_chat", 
                        dataType: "json",
                        data: {
                            user : $("#users option:selected").text(),
                        },
                        success: function(res) 
                        {
                            // console.log(response);
                            if(res)
                            {
                                window.location.reload();
                            }
                            // JSON
                        },
                        error:function()
                        {
                            alert('data not saved');    
                        }
                        });

            });




 // logoutHTML=" <li>" + 
 //                              "<a id='linkid' href='<?php echo base_url()?>index.php/welcome/logout'>"+
 //                              "<i class='fa fa-user'>" +
 //                              "</i><span>logout</span></a></li>"
 //            $('#chats').after(logoutHTML);



var logout = "";
logout += "<li class='contacts-item friends' style='height:100px;'>" +
                        "<a class='contacts-link' href='<?php echo base_url()?>index.php/welcome/logout'>"+
                            "<div class='contacts-content'>" +
                                "<div class='contacts-info'>" +
                                    "<h6 class='chat-name text-truncate' id='chat'>Logout</h6>" +
                                "</div>" +
                            "</div>" +
                        "</a>" +
                    "</li>";
                            
        $('#chatContactTabUsers').append(logout);


        // document.querySelector('.chat-finished').scrollIntoView();
        // Scroll to end of chat
       

      });
    </script>


</body></html>