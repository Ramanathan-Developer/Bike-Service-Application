<section>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Bike Service Application</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex flex-row-reverse" id="navbarNavAltMarkup">
              <div class="navbar-nav">                
                <a class="nav-item nav-link" href="admin.php">Dashboard</a><!---Dashboard tab-->
                <a class="nav-item nav-link  ml-4"  data-toggle="modal" data-target="#exampleModalCenter">Add Services</a><!---add service bootstrap modal  tab-->
                <a class="nav-item nav-link ml-4" href="wait.php">Pending</a><!---pending tab-->
                <a class="nav-item nav-link ml-4" href="booked.php">Booked</a><!---booked tab-->
                <a class="nav-item nav-link ml-4" href="ready.php">Ready For Delivery</a><!---ready for delivery tab-->
                <a class="nav-item nav-link ml-4" href="servicebooked.php">Completed</a><!---completed tab-->
                <a class="nav-item ml-5 btn btn-danger" href="logout.php">Logout</a><!---logout button-->
              </div>
            </div>
          </nav>
    </section>
    <!-- Bootstrap Modal For Add Service-->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Add Serices</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                    <form action="handler/addservhandler.php" method="POST" autocomplete="off">
                    <div class="row">
                        <div class="col">
                            <h6><label for="inputServiceName">Service Name</label></h6>
                            <input type="text" class="form-control inputServiceName" id="inputServiceName" name="servicename">
                        </div>
                    </div>
                    <div class="row mt-3 modal-footer">
                              <input type="submit" name="addservice" class="btn btn-primary" value="Add Services">
                        </div>
                    </div>                    
                    </form>
                    
            </div>
          </div>
        </div>
      </div>