<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <link href="<?php echo base_url('assets/template/vendor/bootstrap/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/template/vendor/metisMenu/metisMenu.min.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/template/dist/css/sb-admin-2.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/template/vendor/morrisjs/morris.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/template/vendor/font-awesome/css/font-awesome.min.css');?>" rel="stylesheet" type="text/css">

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">SB Admin v2.0</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">         
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="#"><i class="glyphicon glyphicon-book"></i> Book<span class="fa arrow"></span></a>
                             <ul class="nav nav-second-level">
                                <li id="licreatebook">
                                    <a href="#">Create Book</a>
                                </li>
                                <li id="lilistofbooks">
                                    <a href="#">List of Books</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="glyphicon glyphicon-menu-hamburger"></i> Category<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">Colors</a>
                                </li>
                                <li>
                                    <a href="#">Animals</a>
                                </li>
                                <li>
                                    <a href="#">Places</a>
                                </li>
                                <li>
                                    <a href="#">People</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="glyphicon glyphicon-text-color"></i> Language</a>
                        </li>
                    
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
          <div class="form-group" id="divcreatebook">
            <div class="row"> 
                <div class="col-lg-8">
                    <h3>Book Information</h3>
                    <hr>
                    <br/><label>Upload Cover Photo</label>
                    <br/><input type="file" class="form-control">
                    <br/><label>Title</label>
                    <input class="form-control">
                    <br/><label>Author</label>
                    <input type="text" class="form-control">
                    <br/><label>Illustrator</label>
                    <input type="text" class="form-control">
                    <br/><label>Publisher</label>
                    <input type="text" class="form-control">
                    <br/><label>Number of Pages</label>
                    <input type="number" class="form-control">
                    <br/><label>Language</label>
                    <select class="form-control">
                        <option></option>
                        <option>English</option>
                        <option>Spanish</option>
                        <option>Tagalog</option>
                    </select>
                    <br/><label>Summary</label>
                    <textarea class="form-control" ></textarea>
                    <br/><label>Description</label>
                    <textarea class="form-control"></textarea>
                    <br/><button type="button" class="btn btn-success btn-lg">Save</button>

                </div>
            </div>
          </div>
            <!-- /.row -->
            <div class="form-group" id="divlistofbooks">
                <div class="row">
                    <div class="col-lg-12">
                       <h3>List of Books</h3>
                       <hr>
                       <table class="table table-hover">
                        <thead>
                            <tr>
                                <td>#</td>
                                 <td>Title</td>
                                 <td>Author</td>
                                 <td>Illustrator</td>
                                 <td>Publisher</td>
                                 <td>Pages</td>
                                 <td>Language</td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>sample title</td>
                                <td>sample author</td>
                                <td>sample illustrator</td>
                                <td>sample laguage</td>
                                <td>sample pages</td>
                                <td>sample language</td>
                                <td>
                                    <button type="button" class="btn-btn default form-control" data-toggle="modal" data-target="#myModal" title="Upload pages"><span class="glyphicon glyphicon-open"></span></button>
                                </td>
                                <td>
                                    <button type="button" class="btn-btn default form-control" data-toggle="tooltip" title="Edit book information">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </button>
                                </td>
                                <td>
                                    <button type="button" class="btn-btn default form-control" data-toggle="tooltip" title="Delete this book">
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </button>
                                </td>
                            </tr>
                        </tbody>

                       </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-wrapper -->

        <!-- Modal for upload pages -->
        <!-- Modal -->
      <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
        
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Upload Content of the Book here</h4>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <input type="file" class="form-control">
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
      
    </div>
  </div>

    </div>


    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url('assets/template/vendor/jquery/jquery.min.js'); ?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('assets/template/vendor/bootstrap/js/bootstrap.min.js'); ?>"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url('assets/template/vendor/metisMenu/metisMenu.min.js'); ?> "></script>

    <!-- Morris Charts JavaScript -->
    <script src="<?php echo base_url('assets/template/vendor/raphael/raphael.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/template/vendor/morrisjs/morris.min.js');?>"></script>
    <script src="<?php echo base_url('assets/template/data/morris-data.js');?>"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url('assets/template/dist/js/sb-admin-2.js');?>"></script>

    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip(); 
            $("#divcreatebook").hide();
            $("#divlistofbooks").hide();

            $('#licreatebook').click(function(){
                $("#divcreatebook").show();
                $("#divlistofbooks").hide();
            });
            $("#lilistofbooks").click(function(){
                $("#divcreatebook").hide();
                $("#divlistofbooks").show();
            });
        });
    </script>

</body>

</html>
