<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from thevectorlab.net/flatlab/lobby.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Dec 2017 10:19:30 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.html">

    <title>Lobby</title>

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
  
      <!--sidebar end-->
      <!--main content start-->
      <section id="">
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
                  <aside class="mid-side">
                      <div class="chat-room-head">
                          <h3>Lobby</h3>
                          
                      </div>
                      <div class="room-desk">
                          <h4 class="pull-left">open room</h4>
                          <a class="pull-right btn btn-default" data-toggle="modal" href="#myModal">+ Create Room</a>
                          <div id="chats-desc">
                         
                      </div>

                            <!-- Modal -->
                              <div class="modal fade " id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                              <h4 class="modal-title"></h4>
                                          </div>
                                          <div class="modal-body">

                                             
                                             <label  class="col-lg ">Select the friend you want to chat.</label>

                                              <select class="form-control form-select-sm" id="users">
                                                <option>select User</option>

                                              </select>
                                            <label  class="col-lg-2 control-label">Description</label>
                                              <textarea id="desc" class="form-control" cols="10" rows="5"></textarea>

                                          </div>
                                          <div class="modal-footer">
                                              <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                                              <button class="btn btn-success" data-dismiss="modal" id="submitUser" type="button">Save changes</button>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <!-- modal -->

                      
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

        $("#chats-desc").children().remove();

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
                  chatHTML += '<div class="room-box">' +
                                  '<h5 class="text-primary">' + 
                                  '<a id="linkid" href="<?php echo base_url()?>index.php/chats/load_messages?chatid='+item.id+'">' + item.chatname+'</a></h5>' +
                                  '<p>'+item.description +'</p>'
                                 +' <p><span class="text-muted">Created Date :</span> '
                                 +date.getDate()  +'-'+ date.getMonth() +'-'+ date.getFullYear() +'</p>'
                              +'</div>';
              });

                // console.log(response);
                $('#chats').append(chatheadHTML);
                $('#chats-desc').append(chatHTML);


                 
            },
            error:function(e)
            {
                alert(e);    
                console.log(e);
            }
            });
            logoutHTML=" <li>" + 
                              "<a id='linkid' href='<?php echo base_url()?>index.php/welcome/logout'>"+
                              "<i class='fa fa-user'>" +
                              "</i><span>logout</span></a></li>"
            $('#chats').after(logoutHTML);
      });

       $('#submitUser').click(function(e){
                $.ajax({ 
                        type: "POST", 
                        url: "<?php echo base_url()?>index.php/chats/add_chat", 
                        dataType: "json",
                        data: {
                            user : $("#users option:selected").text(),
                            desc : $("#desc").val()
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


      $('#users').empty(); 

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



    </script>



  </body>

<!-- Mirrored from thevectorlab.net/flatlab/lobby.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Dec 2017 10:19:30 GMT -->
</html>
