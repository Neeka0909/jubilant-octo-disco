  <div class="container">
    <div class="row">
      <div class="col-xl-12">
<!-- Breadcrumbs-->
        <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Overview</li>
        </ol>
      </div>
    </div>
          <div class="row">
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-primary o-hidden h-100">
                <a class="text-white clearfix" href="#" data-toggle="modal" data-target="#storyModal">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-book"></i>
                  </div>
                  <div class="mr-5">Write a Story</div>
                </div>
                <div class="card-footer text-white clearfix small z-1">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </div>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-warning o-hidden h-100">
                <a class="text-white clearfix" href="#" data-toggle="modal" data-target="#projectModal">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-robot"></i>
                  </div>
                  <div class="mr-5">Write a Project</div>
                </div>
                <div class="card-footer text-white clearfix small z-1" href="#">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </div>
                </a>
              </div>
            </div>

            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-success o-hidden h-100">
                <a class="text-white clearfix" href="#" data-toggle="modal" data-target="#articleModal">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-globe"></i>
                  </div>
                  <div class="mr-5">Write an Article</div>
                </div>
                <div class="card-footer text-white clearfix small z-1">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </div>
                </a>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-danger o-hidden h-100">
                <a class="text-white clearfix" href="#" data-toggle="modal" data-target="#poemModal">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-envelope"></i>
                  </div>
                  <div class="mr-6">Write a Poem or Song</div>
                </div>
                <div class="card-footer text-white clearfix small z-1" href="#">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </div>
                </a>
              </div>
            </div>
          </div>
          
    </div>  


    <div class="modal fade" id="projectModal" tabindex="-1" role="dialog" aria-labelledby="projectModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="projectModalLabel">Ready to Write a Project</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="include/project.save.inc.php" method="POST">
            <div class="modal-body-text">
            What's Your Project Name ..
          </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Project Name" name="projectName" required="required">
            </div>

          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            
        <button type="submit" name="submit" class="btn btn-primary">Next</button>
      </form>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="storyModal" tabindex="-1" role="dialog" aria-labelledby="storyModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="storyModalLabel">Ready to Write a Story</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <form class="navbar-form navbar-left" action="include/" method="POST">
            <div class="modal-body-text">
            What's Your Story Name ..
          </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Story Name" name="storyName" required="required">
            </div>

          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            
        <button type="submit" name="submit" class="btn btn-primary">Next</button>
      </form>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="articleModal" tabindex="-1" role="dialog" aria-labelledby="articleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="articleModalLabel">Ready to Write an Article</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <form class="navbar-form navbar-left" action="include/" method="POST">
            <div class="modal-body-text">
            What's Your Article Name ..
          </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Article Name" name="articleName" required="required">
            </div>

          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            
        <button type="submit" name="submit" class="btn btn-primary">Next</button>
      </form>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="poemModal" tabindex="-1" role="dialog" aria-labelledby="poemModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="poemModalLabel">Ready to Write  a Poem or Song</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <form class="navbar-form navbar-left" action="include/" method="POST">
            <div class="modal-body-text">
            What's Your poem or Song Name ..
            
          </div>
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Your Poem or Song Name" name="poemName" required="required">
            </div>

          </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            
        <button type="submit" name="submit" class="btn btn-primary">Next</button>
      </form>
          </div>
        </div>
      </div>
    </div>