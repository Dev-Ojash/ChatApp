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
                          <ul class="nav flex-nowrap">
                            <li class="nav-item list-inline-item d-none d-sm-block mr-1">
                                <a class="nav-link text-muted px-1" data-toggle="collapse" data-target="#searchCollapse" href="#" aria-expanded="false">
                                    <!-- Default :: Inline SVG -->
                                    <svg class="hw-20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                    </svg>

                                    <!-- Alternate :: External File link -->
                                    <!-- <img src="./../../assets/media/heroicons/outline/search.svg" alt="" class="injectable hw-20"> -->
                                </a>
                            </li>

                            <li class="nav-item list-inline-item mr-1">
                                            <a id="fav-list" class="nav-link text-muted px-1" href="#" title="Favourites" role="button" data-toggle="modal" data-target="#notificationModal">
                                                <!-- Default :: Inline SVG -->
                                                <svg class="hw-20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                   <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                                                </svg>

                                                <!-- Alternate :: External File link -->
                                                <!-- <img class="injectable hw-20" src="./../../assets/media/heroicons/outline/bell.svg" alt=""> -->
                                            </a>
                                        </li>
                            <li class="nav-item list-inline-item d-none d-sm-block mr-0">
                                <div class="dropdown">
                                    <a class="nav-link text-muted px-1" href="#" role="button" title="Details" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <!-- Default :: Inline SVG -->
                                        <svg class="hw-20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"></path>
                                        </svg>

                                        <!-- Alternate :: External File link -->
                                        <!-- <img src="./../../assets/media/heroicons/outline/dots-vertical.svg" alt="" class="injectable hw-20"> -->
                                    </a>

                                  <!--   <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item align-items-center d-flex" href="http://frontendmatters.org/quicky/ltr/light-skin/chat-1.html#" data-chat-info-toggle="">
                                     <svg class="hw-18 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path> -->
                                              
                                            <!-- Alternate :: External File link -->
                                            <!-- <img src="./../../assets/media/heroicons/outline/information-circle.svg" alt="" class="injectable hw-20 mr-2"> 
                                            <span>Favourite Items</span>
                                        </a>

                                       
                                    </div> -->
                                </div>
                            </li>
                        
                        </ul>
                    </div>
                    <!-- Chat Header End-->
    <div class="modal modal-lg-fullscreen fade" id="notificationModal" tabindex="-1" role="dialog" aria-labelledby="notificationModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-dialog-zoom">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="notificationModalLabel">Favourites</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body p-0 hide-scrollbar">
                        <div class="row">

                            <div class="col-12">
                                    <!-- List Group Start -->
                                    <ul id="list-group-fav" class="list-group list-group-flush  py-2">

                           


                                    <!-- List Group Item Start -->
                                    <li class="list-group-item">
                                        <div class="media">
                                            <div class="btn btn-primary btn-icon rounded-circle text-light mr-2">
                                                <!-- Default :: Inline SVG -->
                                                <svg class="hw-24" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
                                                </svg>
                                                    
                                                <!-- Alternate :: External File link -->
                                                <!-- <img class="injectable hw-24" src="./../../assets/media/heroicons/outline/user-add.svg" alt=""> -->
                                            </div>

                                            <div class="media-body">
                                                <h6>
                                                    <a href="#">Catherine richardson</a> send you a friend request
                                                </h6>

                                                <p class="text-muted mb-0">5 mins ago</p>
                                            </div>

                                        </div>
                                        
                                    </li>
                                    <!-- List Group Item End -->


                                </ul>
                                <!-- List Group End -->
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
             <!-- Search Start -->
                    <div class="collapse border-bottom px-3" id="searchCollapse">
                        <div class="container-xl py-2 px-0 px-md-3">
                            <div class="input-group bg-light ">
                                <input type="text" id="searchInput" class="form-control form-control-md border-right-0 transparent-bg pr-0" placeholder="Search">
                                <div class="input-group-append">

                                    <span class="input-group-text transparent-bg border-left-0">
                                        <!-- Default :: Inline SVG -->
                                        <svg class="hw-20 text-muted" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                        </svg>
                                          
                                        <!-- Alternate :: External File link -->
                                        <!-- <img class="injectable hw-20" src="./../../assets/media/heroicons/outline/search.svg" alt="Search icon"> -->
                                    </span>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <!-- Search End -->



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
        $('#list-group-fav').children().remove();
        var flag = false;

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

       // $.ajax({
       //      type: "POST", 
       //      url: "<?php echo base_url()?>index.php/chats/list_messages", 
       //      dataType: "json",
       //      success: function(response) 
       //      {
       //        var msgHTML = '';

       //        // console.log(response);
       //        $.each(response, function (i, item) {

       //          // console.log(item.status);
       //          if(item.sender_name == response.chatname && item.status == "unread" && typeof(item.status) != "undefined")
       //          {
       //              $.ajax({
       //                  type: "POST",
       //                  url: "<?php echo base_url()?>index.php/chats/set_msg_read",
       //                  dataType: "json",
       //                  data: { msgid : item.id },
       //              });
       //          }
       //          var date = new Date(item.timestamp);
       //          // console.log("<?= $this->session->userdata('userid');?>")
       //          if(item.sender_id == "<?= $this->session->userdata('userid');?>" )
       //          {
       //             msgHTML += '  <div class="message self">'+
       //                            '<div class="message-wrapper">'+
       //                                  '<div class="message-content">' +
       //                                      '<span id="originalmsg"> '+ item.message+'</span>'+
       //                                 ' </div>'+
       //                             ' </div>'+
       //                              '<div class="message-options">'+
       //                                 ' <div class="avatar avatar-sm"><img alt="" src="<?php echo base_url()?>Quicky - HTML Chat Template2_files/6.png"></div>'+
       //                                  '<span class="message-date">'+date.getHours()%12  +':'+ date.getMinutes()+'</span>'+
       //                          '<div class="dropdown">'+
       //                                      '<a class="text-muted" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">' +

       //                                          '<svg class="hw-18" fill="none" viewBox="0 0 24 24" stroke="currentColor">'+
       //                                              '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path>'+
       //                                         '</svg>'+
       //                                      '</a>'+
       //                                      '<div class="dropdown-menu">'+
       //                                          '<a id="fav-btn" class="dropdown-item d-flex align-items-center" name="'+item.id+'" href="#">'+
       //                                              '<svg class="hw-18 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">'+
       //                                                  '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>'+
       //                                              '</svg>'+
       //                                              '<span>Favourite</span>'+

       //                                          '</a>'+
       //                                      '</div>'+
       //                                 '</div>'+
       //                              '</div>'+
       //                          '</div>';
       //          }
       //          else{
       //              msgHTML += '  <div class="message ">'+
       //                            '<div class="message-wrapper">'+
       //                                  '<div class="message-content">' +
       //                                      '<span id="originalmsg"> '+ item.message+'</span>'+
       //                                 ' </div>'+
       //                             ' </div>'+
       //                              '<div class="message-options">'+
       //                                 ' <div class="avatar avatar-sm"><img alt="" src="<?php echo base_url()?>Quicky - HTML Chat Template2_files/6.png"></div>'+
       //                                  '<span class="message-date">'+date.getHours()%12  +':'+ date.getMinutes()+'</span>'+
                                  
       //                          '<div class="dropdown">'+
       //                                      '<a class="text-muted" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">' +

       //                                          '<svg class="hw-18" fill="none" viewBox="0 0 24 24" stroke="currentColor">'+
       //                                              '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path>'+
       //                                         '</svg>'+
       //                                      '</a>'+
       //                                      '<div class="dropdown-menu">'+
       //                                          '<a id="fav-btn" class="dropdown-item d-flex align-items-center" name="'+item.id+'" href="#">'+
       //                                              '<svg class="hw-18 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">'+
       //                                                  '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>'+
       //                                              '</svg>'+
       //                                                  '<span>Favourite</span>'+
  
       //                                          '</a>'+
       //                                      '</div>'+
       //                                 '</div>'+
       //                              '</div>'+
       //                          '</div>';
       //          }
                
       //        });
       //          $('#chatname').html(response.chatname);
       //         // $('.message-day').prepend(msgHTML);
       //         $('.message-day').append(msgHTML);
       //         $('.message-day').children().last().remove();
       //         $('#chat-finished').remove();       

       //         var end = "";
       //         end += "<div id='chat-finished'></div>";
       //         $('.message-day').after(end);

       //          var new_position = $('#chat-finished').offset();
       //          // console.log(new_position.top);

       //          $('#messageBody').animate({ scrollTop: new_position.top}, 500);


       //           $(".dropdown-menu").click(function(){
       //              $this = $(this);
       //              // alert();
       //               $.ajax({
       //              type: "POST", 
       //              url: "<?php echo base_url()?>index.php/chats/AddtoFav", 
       //              dataType: "json",
       //              data: {
       //                msgid : $(this).children("#fav-btn").attr('name'),
       //              },
       //              success: function(response) 
       //              {
       //                console.log(response);

       //                // if(response)
       //                // {
       //                //       // window.location.reload();
       //                //       // console.log(response);
       //                //       $("#msg").val('');
       //                // }
       //              },
       //              error:function(e)
       //              {
       //                  alert(e);    
       //                  console.log(e);
       //              }

       //          });
       //      });


       //         // console.log(response);
                 
       //      },
       //      error:function(e)
       //      {
       //          // alert(e);  
       //          $('.message-day').append('<center><h5>ChatApp free for all to chat</h5></center>');
       //          $('.message-day').children().remove();
  
       //          console.log(e);
       //      }
       //      });

            

            setInterval(function(){ 
            if(flag==false)
            {
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
                                                           
                                                      '<div class="dropdown">'+
                                            '<a class="text-muted" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">' +

                                                '<svg class="hw-18" fill="none" viewBox="0 0 24 24" stroke="currentColor">'+
                                                    '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path>'+
                                               '</svg>'+
                                            '</a>'+
                                            '<div class="dropdown-menu">'+
                                                '<a id="fav-btn" class="dropdown-item d-flex align-items-center" name="'+item.id+'" href="#">'+
                                                    '<svg class="hw-18 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">'+
                                                        '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>'+
                                                    '</svg>'+
                                                        '<span>Favourite</span>'+

                                                '</a>'+
                                            '</div>'+
                                       '</div>'+
                                    '</div>'+
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
                                                           
                                                          '<div class="dropdown">'+
                                            '<a class="text-muted" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">' +

                                                '<svg class="hw-18" fill="none" viewBox="0 0 24 24" stroke="currentColor">'+
                                                    '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path>'+
                                               '</svg>'+
                                            '</a>'+
                                            '<div class="dropdown-menu">'+
                                                '<a id="fav-btn" class="dropdown-item d-flex align-items-center" name="'+item.id+'" href="#">'+
                                                    '<svg class="hw-18 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">'+
                                                        '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>'+
                                                    '</svg>'+
                                                        '<span>Favourite</span>'+
                                                '</a>'+
                                            '</div>'+
                                       '</div>'+
                                    '</div>'+
                                '</div>';
                                    }       


                                       $('.message-day').append(msgHTML);
                            

                                }
                            });
                            $('.message-day').children().last().remove();

                         
                             $(".dropdown-menu").click(function(){
                                // alert();
                                $this = $(this);

                                 $.ajax({
                                type: "POST", 
                                url: "<?php echo base_url()?>index.php/chats/AddtoFav", 
                                dataType: "json",
                                data: {
                                  msgid : $(this).children("#fav-btn").attr('name'),
                                },
                                success: function(response) 
                                {

                                  console.log(response);

                              
                                },
                                error:function(e)
                                {
                                    alert(e);    
                                    console.log(e);
                                }

                            });
                        });




                        },
                        error:function(e)
                        {
                            console.log(e);
                        }
               });
            }
        }, 3000);

        
           
           

        

        $("#msg").focus();


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
            $("#fav-list").click(function(e){

                $('#list-group-fav').children().remove();

                 $.ajax({ 
                        type: "POST", 
                        url: "<?php echo base_url()?>index.php/chats/list_fav", 
                        dataType: "json",
                        success: function(res) 
                        {
                            var msgHTML = "";
                            $.each(res, function (i, item) {
                        
                                    msgHTML += '<li class="list-group-item">'+
                                            '<div class="media">'+
                                            '<div class="btn btn-primary btn-icon rounded-circle text-light mr-2">'+
                                                '<svg class="hw-24" fill="none" viewBox="0 0 24 24" stroke="currentColor">'+
                                                   '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>'+
                                                '</svg>'+
                                            '</div>'+
                                            '<div class="media-body">'+
                                                '<h6>'+
                                                    '<a data-toggle="modal" data-target="#notificationModal" href="#" id="go-to-fav">'+item.sender_name+' sent a message to '+
                                                    item.reciver_name+'</a>'+
                                                    '<input type="hidden" class="chat" name="chat" value="'+item.chat_id+'">'+
                                                    '<input type="hidden" class="conversation" name="conversation" value="'+item.conversation_id+'">'+

                                                '</h6>'+
                                                '<p class="text-muted mb-0">'+item.msg+'</p>'+
                                            '</div>'+
                                       '</div>'+
                                       '</li>';
                            });

                            $('#list-group-fav').append(msgHTML);

                            $('#list-group-fav li a').click(function() {
                                // alert($(this).siblings('input.chat').val());
                                // alert($(this).siblings('input.conversation').val());
                                    $('.message-day').children().remove();

                                var messageid = $(this).siblings('input.conversation').val();
                                $.ajax({ 
                                    type: "POST", 
                                    url: "<?php echo base_url()?>index.php/chats/load_fav_msg", 
                                    dataType: "json",
                                    data: {
                                        chatid : $(this).siblings('input.chat').val(),
                                    },
                                    success: function(response) 
                                    {
                                        var msgHTML = '';

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
                                                               ' <div class="avatar avatar-sm"><img alt="" src="<?php echo base_url()?>Quicky - HTML Chat Template2_files/6.png"></div>'+
                                                                '<span class="message-date">'+date.getHours()%12  +':'+ date.getMinutes()+'</span>'+
                                                        '<div class="dropdown">'+
                                                                    '<a class="text-muted" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">' +

                                                                        '<svg class="hw-18" fill="none" viewBox="0 0 24 24" stroke="currentColor">'+
                                                                            '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path>'+
                                                                       '</svg>'+
                                                                    '</a>'+
                                                                    '<div class="dropdown-menu">'+
                                                                        '<a id="fav-btn" class="dropdown-item d-flex align-items-center" name="'+item.id+'" href="#">'+
                                                                            '<svg class="hw-18 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">'+
                                                                                '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>'+
                                                                            '</svg>'+
                                                                            '<span>Favourite</span>'+

                                                                        '</a>'+
                                                                    '</div>'+
                                                               '</div>'+
                                                            '</div>'+
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
                                                          
                                                        '<div class="dropdown">'+
                                                                    '<a class="text-muted" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">' +

                                                                        '<svg class="hw-18" fill="none" viewBox="0 0 24 24" stroke="currentColor">'+
                                                                            '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path>'+
                                                                       '</svg>'+
                                                                    '</a>'+
                                                                    '<div class="dropdown-menu">'+
                                                                        '<a id="fav-btn" class="dropdown-item d-flex align-items-center" name="'+item.id+'" href="#">'+
                                                                            '<svg class="hw-18 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">'+
                                                                                '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>'+
                                                                            '</svg>'+
                                                                                '<span>Favourite</span>'+
                          
                                                                        '</a>'+
                                                                    '</div>'+
                                                               '</div>'+
                                                            '</div>'+
                                                        '</div>';
                                        }
                                        
                                      });
                                        $('#chatname').html(response.chatname);
                                       $('.message-day').prepend(msgHTML);
                                       $('.message-day').children().last().remove();
                                      // alert($(this).siblings('input.conversation').val());
                                      // console.log($('.dropdown-menu a[name = '+messageid+']').parent().parent().parent().parent().children(".message-wrapper").children(".message-content").children('#originalmsg').text());
                                        // $('.dropdown-menu a[name = '+messageid+']').parent().parent().parent().parent().children(".message-wrapper").children(".message-content").focus();
                                      setTimeout(function(){ 
                                          $('#messageBody').animate({
                                                scrollTop: $('.dropdown-menu a[name = '+messageid+']').parent().parent().parent().parent().children(".message-wrapper").children(".message-content").offset().top-100
                                            }, 1000);

                                      $('.dropdown-menu a[name = '+messageid+']').parent().parent().parent().parent().children(".message-wrapper").children(".message-content").fadeOut(1000).fadeIn(1000).fadeOut(1000).fadeIn(1000);
                              
                                        }, 2000);

                                           // $('.dropdown-menu a[name = '+messageid+']').parent().parent().parent().parent().children(".message-wrapper").children(".message-content").fadeOut(2000);
                                      // $('.dropdown-menu a[name = 96]').parent().parent().parent().parent().children(".message-wrapper").children(".message-content").animate({opacity: '0.5'});
                                      //    $('.dropdown-menu a[name = 96]').parent().parent().parent().parent().children(".message-wrapper").children(".message-content").animate({opacity: '1'});
                                      // $('.dropdown-menu a[name = 118]').parent().parent().parent().parent().children(".message-wrapper").children(".message-content").fadeOut(20);
                                      

                                         $(".dropdown-menu").click(function(){
                                            // alert();
                                            $this = $(this);
                                             $.ajax({
                                            type: "POST", 
                                            url: "<?php echo base_url()?>index.php/chats/AddtoFav", 
                                            dataType: "json",
                                            data: {
                                              msgid : $(this).children("#fav-btn").attr('name'),
                                            },
                                            success: function(response) 
                                            {
                                              console.log(response);
                                              

                                              // if(response)
                                              // {
                                              //       // window.location.reload();
                                              //       // console.log(response);
                                              //       $("#msg").val('');
                                              // }
                                            },
                                            error:function(e)
                                            {
                                                alert(e);    
                                                console.log(e);
                                            }

                                        });
                                    });

                                    },
                                    error:function()
                                    {
                                        alert('data not saved');    
                                    }
                                    });
                              
                            });
                        },
                        error:function()
                        {
                            alert('fav not saved');    
                        }
                        });

            })


            var once = false;
// Pagination Start
            var limit = 7;
            var start = 0;
            var action = 'inactive';
            function load_data(limit, start)
            {
                    $.ajax({
                            type: "POST", 
                            url: '<?php echo base_url()?>index.php/chats/on_scroll_msg_load',
                            data:{limit:limit, start:start},
                            dataType: "json",
                            success: function(response) 
                            {
                                if(response == "")
                                {
                                    $('.message-day').prepend("<h3>No chat found</h3>");
                                    $('.message-day').prepend("<h3></h3>");

                                }
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
                                                               '<div class="dropdown">'+
                                            '<a class="text-muted" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">' +

                                                '<svg class="hw-18" fill="none" viewBox="0 0 24 24" stroke="currentColor">'+
                                                    '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path>'+
                                               '</svg>'+
                                            '</a>'+
                                            '<div class="dropdown-menu">'+
                                                '<a id="fav-btn" class="dropdown-item d-flex align-items-center" name="'+item.id+'" href="#">'+
                                                    '<svg class="hw-18 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">'+
                                                        '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>'+
                                                    '</svg>'+
                                                        '<span>Favourite</span>'+
                                                '</a>'+
                                            '</div>'+
                                       '</div>'+
                                    '</div>'+
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
                                                                   
                                                                '<div class="dropdown">'+
                                            '<a class="text-muted" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">' +

                                                '<svg class="hw-18" fill="none" viewBox="0 0 24 24" stroke="currentColor">'+
                                                    '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path>'+
                                               '</svg>'+
                                            '</a>'+
                                            '<div class="dropdown-menu">'+
                                                '<a id="fav-btn" class="dropdown-item d-flex align-items-center" name="'+item.id+'" href="#">'+
                                                    '<svg class="hw-18 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">'+
                                                        '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>'+
                                                    '</svg>'+
                                                        '<span>Favourite</span>'+
                                                '</a>'+
                                            '</div>'+
                                       '</div>'+
                                    '</div>'+
                                '</div>';
                                            }       


                                               $('.message-day').prepend(msgHTML);
                                                $('#chatname').html(response.chatname);

                       }
                                    });
                                    $('.message-day').children().first().remove();
                                    if(once==false)
                                    {
                                        once=true;    
                                       var end = "";
                                       end += "<div id='chat-finished'></div>";
                                       $('.message-day').after(end);

                                        var new_position = $('#chat-finished').offset();
                                        // console.log(new_position.top);

                                        $('#messageBody').animate({ scrollTop: new_position.top}, 500);
                                    }
                                    // console.log($(".message-day").children().text());


                                     $.ajax({ 
                                        type: "POST", 
                                        url: "<?php echo base_url()?>index.php/chats/list_fav", 
                                        dataType: "json",
                                      
                                        success: function(res) 
                                        {

                                            var starthtml = "";
                                            starthtml +=  '<svg id="star" class="hw-18 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">'+
                                                    '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>'+
                                                '</svg>';
                                            $.each(res, function (i, item) {

                                                if($('.dropdown-menu').children("a[name="+item.conversation_id+"]").parent().siblings('a').children('#star').length == 0)
                                                {

                                                $('.dropdown-menu').children("a[name="+item.conversation_id+"]").parent().siblings('a').prepend(starthtml);
                                                }
                                            });
                                        },
                                        error:function()
                                        {
                                            alert('data not saved');    
                                        }
                                        });

                                     $(".dropdown-menu").click(function(){
                                        $this = $(this);
                                        // alert();
                                         $.ajax({
                                        type: "POST", 
                                        url: "<?php echo base_url()?>index.php/chats/AddtoFav", 
                                        dataType: "json",
                                        data: {
                                          msgid : $(this).children("#fav-btn").attr('name'),
                                        },
                                        success: function(response) 
                                        {
                                          console.log(response);
                                        },
                                        error:function(e)
                                        {
                                            console.log(e);
                                        }

                                    });
                                });

                                },
                                error:function(e)
                                {
                                    $('.message-day').children().first().remove();

                                   $('.message-day').prepend("<center><h5>No chat found</h5></center>");
                                    console.log(e);
                                }
                       });
                    action = 'inactive';

            }
            if(action == 'inactive')
            {
              action = 'active';
              load_data(limit, start);
            }
            $("#messageBody").scroll(function() {
                // console.log($("#messageBody").scrollTop() <= 0 );
            if($("#messageBody").scrollTop() <= 0  && action == 'inactive')
            {
                action = 'active';
                start = start + limit;

                setTimeout(function(){
                load_data(limit, start);
                }, 1000);

            }
          });
// Pagination End

            $("#searchInput").change(function(e) {
              action = 'active';
              flag = true;
                  $.ajax({
                    type: "POST", 
                    url: "<?php echo base_url()?>index.php/chats/search", 
                    dataType: "json",
                    data: {
                      text : $(this).val(),
                    },
                    success: function(response) 
                    {
                        $('.message-day').children().remove();

                        var msgHTML = '';
                          $.each(response, function (i, item) {
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
                                                   ' <div class="avatar avatar-sm"><img alt="" src="<?php echo base_url()?>Quicky - HTML Chat Template2_files/6.png"></div>'+
                                                    '<span class="message-date">'+date.getHours()%12  +':'+ date.getMinutes()+'</span>'+
                                            '<div class="dropdown">'+
                                                        '<a class="text-muted" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">' +

                                                            '<svg class="hw-18" fill="none" viewBox="0 0 24 24" stroke="currentColor">'+
                                                                '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path>'+
                                                           '</svg>'+
                                                        '</a>'+
                                                        '<div class="dropdown-menu">'+
                                                            '<a id="fav-btn" class="dropdown-item d-flex align-items-center" name="'+item.id+'" href="#">'+
                                                                '<svg class="hw-18 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">'+
                                                                    '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>'+
                                                                '</svg>'+
                                                                '<span>Favourite</span>'+

                                                            '</a>'+
                                                        '</div>'+
                                                   '</div>'+
                                                '</div>'+
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
                                              
                                            '<div class="dropdown">'+
                                                        '<a class="text-muted" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">' +

                                                            '<svg class="hw-18" fill="none" viewBox="0 0 24 24" stroke="currentColor">'+
                                                                '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path>'+
                                                           '</svg>'+
                                                        '</a>'+
                                                        '<div class="dropdown-menu">'+
                                                            '<a id="fav-btn" class="dropdown-item d-flex align-items-center" name="'+item.id+'" href="#">'+
                                                                '<svg class="hw-18 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">'+
                                                                    '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>'+
                                                                '</svg>'+
                                                                    '<span>Favourite</span>'+
              
                                                            '</a>'+
                                                        '</div>'+
                                                   '</div>'+
                                                '</div>'+
                                            '</div>';
                            }
                           $('.message-day').children().remove();
                           $('.message-day').prepend(msgHTML);
                          });
                           $('.message-day').children().last().remove();

                            setTimeout(function(){ 
                             action = 'inactive';
                             flag = false;
                            }, 15000);


                        },
                    error:function(e)
                    {
                        alert(e);    
                        console.log(e);
                    }

                });
            })






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