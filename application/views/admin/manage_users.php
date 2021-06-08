  <?php include 'template/header.php' ?>   


      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
              <!-- page start-->
              <section class="panel">
                  <header class="panel-heading">
                      Manage Users 
                  </header>
                  <div class="panel-body">
                      <div class="adv-table editable-table ">
                          <div class="clearfix">
                              <div class="btn-group">
                                  
                              </div>
                              <div class="btn-group pull-right">
                                  <ul class="dropdown-menu pull-right">
                                      <li><a href="#">Print</a></li>
                                      <li><a href="#">Save as PDF</a></li>
                                      <li><a href="#">Export to Excel</a></li>
                                  </ul>
                              </div>
                          </div>
                          <div class="space12"></div>

                          <!-- <div class=""> -->
                          <div class="table-responsive">

                          <table class="table table-striped table-hover table-bordered" id="editable-sample">
                              <thead>
                              <tr>
                                  <th>name</th>
                                  <th>email</th>
                                  <th>select roles</th>
                                  <th>status</th>
                                  <th>delete</th>
                              </tr>
                              </thead>
                              <tbody>
                          </tbody>
                          </table>

                          </div>
                      </div>
                  </div>
              </section>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->

  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url()?>js/jquery.js"></script>
    <script src="<?php echo base_url()?>js/jquertruey-ui-1.9.2.custom.min.js"></script>
    <script src="<?php echo base_url()?>js/jquery-migrate-1.2.1.min.js"></script>
    <script src="<?php echo base_url()?>js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="<?php echo base_url()?>js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="<?php echo base_url()?>js/jquery.scrollTo.min.js"></script>
    <script src="<?php echo base_url()?>js/jquery.nicescroll.js" type="text/javascript"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <!-- <script type="text/javascript" src="<?php echo base_url()?>assets/data-tables/jquery.dataTables.js"></script> -->
    <script type="text/javascript" src="<?php echo base_url()?>assets/data-tables/DT_bootstrap.js"></script>
    <script src="<?php echo base_url()?>js/respond.min.js" ></script>

  <!--right slidebar-->
  <script src="<?php echo base_url()?>js/slidebars.min.js"></script>

    <!--common script for all pages-->
    <script src="<?php echo base_url()?>js/common-scripts.js"></script>

      <!--script for this page only-->
      <script src="<?php echo base_url()?>js/editable-table.js"></script>

      <!--script for toggle Button-->
<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>


      <!-- END JAVASCRIPTS -->
      <script>
          $(document).ready(function() {
              var table = $('#editable-sample').DataTable({
                 "aLengthMenu": [
                        [5, 15, 20, -1],
                        [5, 15, 20, "ALL"]
                    ],
                  "searching": false,
              });
               $.ajax({
                  type: "post", 
                  url: "<?php echo base_url()?>index.php/Admin/users", 
                  dataType: "json",
                  success: function(response) 
                  {
                        $.each(response, function (i, item) {
                            var  status, ins, upd, del;
                            status = item.status == 1 ? "Active" : "Inactive";
                            ins = item.view_chat_role == 1 ? "checked" : "unchecked";
                            upd = item.reply_chat_role == 1 ? "checked" : "unchecked";
                            del = item.modify_chat_role == 1 ? "checked" : "unchecked";


                        var roles ='<input type="checkbox" class="btn-check view" id="'+item.id+'" '+ins+' autocomplete="off"><label class="btn btn-outline-secondary" for="btn-check-2-outlined">View</label>'+
                        '<input type="checkbox" class="btn-check reply" id="'+item.id+'" '+upd+' autocomplete="off"><label class="btn btn-outline-secondary" for="btn-check-2-outlined">Reply</label>'+
                        '<input type="checkbox" class="btn-check modify" id="'+item.id+'" '+del+' autocomplete="off"><label class="btn btn-outline-secondary" for="btn-check-2-outlined">Modify</label>';


                        var btns = '<a id="del-btn" class="d-flex justify-content-center" name="'+item.id+'" href="#">'+
                                                "<img src='<?php echo base_url()?>Quicky - HTML Chat Template2_files/delete.svg' width='18' height='18'/>"+
                                                '</a>';

                        table.row.add([item.name,item.email,roles,status,btns]).draw();

                        });
                        $('a[id="del-btn"]').click(function(e){
                            $this = $(this);
                            if(confirm("Are u sure you want to delete!"))
                            {
                            $.ajax({
                                type: "POST", 
                                url: "<?php echo base_url()?>index.php/admin/delete_user", 
                                dataType: "json",
                                data: {
                                  uid :$(this).attr('name'),
                                },
                                success: function(response) 
                                {
                                    table
                                        .row( $this.parent().parent('tr'))
                                        .remove()
                                        .draw();
                                    console.log(response);
                                },
                                error:function(e)
                                {
                                    console.log(e);
                                }
                            });
                            }
                        });
                        $(".view, .reply, .modify").change(function() {
                            var operation = "";
                            // 
                            if($(this).hasClass('view'))
                            {
                                operation = "view_chat_role";
                            }
                            else if($(this).hasClass('reply'))
                            {
                                operation = "reply_chat_role";
                            }
                            else if($(this).hasClass('modify'))
                            {
                                operation = "modify_chat_role";
                            }
                      
                            // alert(operation+" "+$(this).attr('id')+" "+this.checked);
                             $.ajax({
                                type: "POST", 
                                url: "<?php echo base_url()?>index.php/admin/edit_permitions", 
                                dataType: "json",
                                data: {
                                  uid : $(this).attr('id'),
                                  role : operation,
                                  toggle :this.checked
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
                      console.log(e);
                  }
                      
              });

              
           

              // EditableTable.init();
          });
      </script>


  </body>

<!-- Mirrored from thevectorlab.net/flatlab/editable_table.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Dec 2017 10:19:07 GMT -->
</html>
