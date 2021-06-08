<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from thevectorlab.net/flatlab/chat_room.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Dec 2017 10:19:30 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.html">

    <title>chat room </title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url()?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo base_url()?>assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
      <!--right slidebar-->
      <link href="<?php echo base_url()?>css/slidebars.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url()?>css/style.css" rel="stylesheet">
    <link href="<?php echo base_url()?>css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" class="">
    
      <!--main content start-->
      <section class="mb-1">
          <section class="wrapper site-min-height">
              <!-- page start-->
              <div class="chat-room">
                  <aside class="left-side">
                      <div class="user-head">
                          <i class="fa fa-comments-o"></i>
                          <h3>ChatRoom</h3>
                      </div>
                      <ul class="chat-list">
                          <li class="active">
                            <a class="lobby" href="<?php echo base_url()?>index.php/welcome/load_lobby">
                                  <h4>
                                      <i class="fa fa-list"></i>
                                      Lobby
                                  </h4>
                            </a>
                           </li>
                          <div id="chats">
                          </div>
                      </ul>
                    
                  </aside>
                  <aside class="mid-side ">
                      <div class="chat-room-head">
                          <h3>No name</h3>
                      </div>
                      <div id="messages">
                        
                      </div>
                          </div>
                          <div class="group-rom">
                             <div class="chat-txt" >
                              <input type="text" id="msg" class="form-control">
                          </div>
                          <button id="send" class="btn btn-danger">Send</button>
                              
                  </aside>
              </div>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
 
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2021 &copy; Chat room.
              <a href="#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url()?>js/jquery.js"></script>
    <script src="<?php echo base_url()?>js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="<?php echo base_url()?>js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="<?php echo base_url()?>js/jquery.scrollTo.min.js"></script>
    <script src="<?php echo base_url()?>js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>js/respond.min.js" ></script>

  <!--right slidebar-->
  <script src="<?php echo base_url()?>js/slidebars.min.js"></script>

    <!--common script for all pages-->
    <script src="<?php echo base_url()?>js/common-scripts.js"></script>
 <script type="text/javascript">
      
      $(document).ready(function() {
        $("#chats").children().remove();
        $("#messages").children().remove();

         $.ajax({
            type: "POST", 
            url: "<?php echo base_url()?>index.php/chats/list_chats", 
            dataType: "json",
            success: function(response) 
            {
              var chatHTML = '';
              var chatheadHTML = '';
              $.each(response, function (i, item) {
                var date = new Date(item.timestamp);


             chatheadHTML += " <li>" + 
                              "<a id='linkid' href='<?php echo base_url()?>index.php/chats/load_messages?chatid="+item.id+"'>" +
                              "<i class='fa fa-user'>" +
                              "</i><span>"+ item.chatname +"</span></a></li>";

              });
               $('#chats').append(chatheadHTML);
                 
            },
            error:function(e)
            {
                alert(e);    
                console.log(e);
            }
            });
          // var jsonResponse;

     
          $.ajax({
            type: "POST", 
            url: "<?php echo base_url()?>index.php/chats/list_messages", 
            dataType: "json",
            success: function(response) 
            {
              var msgHTML = '';
              // jsonResponse = response;

              $.each(response, function (i, item) {
                var date = new Date(item.timestamp);
                msgHTML += ' <div class="group-rom">' +
                              '<div class="first-part odd">'+item.sender_name+'</div>'+
                              '<div class="second-part">'+item.message+'</div>'+
                              '<div class="third-part">'+date.getHours()%12  +':'+ date.getMinutes()+'</div></div>';

              });
               $('.chat-room-head h3').html(response.chatname);
              //  $('#chats').append(chatheadHTML);
               $('#messages').append(msgHTML);
               $('#messages').children().last().remove();
                 
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
                             $.each(response, function (i, item) {
                               if($($('#messages').children().last().html()).last().prev().text()!=item.message)
                               // if(response != jsonResponse)
                                {
                                        // jsonResponse = response; 
                                        var msgHTML = '';
                                        var date = new Date(item.timestamp);
                                        msgHTML += ' <div class="group-rom">' +
                                      '<div class="first-part odd">'+item.sender_name+'</div>'+
                                      '<div class="second-part">'+item.message+'</div>'+
                                      '<div class="third-part">'+date.getHours()%12  +':'+ date.getMinutes()+'</div></div>';
                                        $('#messages').append(msgHTML);

                                }
                            });
                            $('#messages').children().last().remove();
                    },
                    error:function(e)
                    {
                        alert(e);    
                        console.log(e);
                    }
               });
        }, 2000);
            




          $('#send').click(function(e){
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
                      reciver : $(".chat-room-head h3").text()
                    },
                    success: function(response) 
                    {
                      // console.log(response);
                      if(response)
                      {
                            // window.location.reload();
                            console.log(response);
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
          logoutHTML=" <li>" + 
                              "<a id='linkid' href='<?php echo base_url()?>index.php/welcome/logout'>"+
                              "<i class='fa fa-user'>" +
                              "</i><span>logout</span></a></li>"
            $('#chats').after(logoutHTML);



      });




    </script>

  </body>

<!-- Mirrored from thevectorlab.net/flatlab/chat_room.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Dec 2017 10:19:31 GMT -->
</html>
