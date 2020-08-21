<?php
use yii\helpers\Html;
$this->title = 'Tables';
$baseUrl = Yii::$app->request->baseUrl;



?>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-body">
                                                <h4 class="form-section"><i class="ft-user"></i> Check Out Info</h4>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1">Coffee Type Ordered</label>
                                                            <input type="text" value="Expresso" id="projectinput1" class="form-control" placeholder="First Name" name="fname">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput2">Number of Cups</label>
                                                            <input type="text"  value="4" id="projectinput2" class="form-control" placeholder="Last Name" name="lname">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> Unit Price</label>
                                                            <input type="text" value="90" id="projectinput1" class="form-control" placeholder="First Name" name="fname">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput3">Table Number</label>
                                                            <input type="text" value="Table Number Here" id="projectinput3" class="form-control" placeholder="Table Number" name="email">
                                                        </div>
                                                    </div>
                                                   
                                                </div>

                                                <div class="row">
                                                  
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="projectinput4">Total Cost $</label>
                                                            <input type="text" value="2000" id="projectinput4" class="form-control" placeholder="Phone" name="phone">
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- <h4 class="form-section"><i class="la la-paperclip"></i> Requirements</h4> -->

                                               

           

      
                                            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Post</button>
      </div>
    </div>
  </div>
</div>



<!-- Bordered striped start -->
     <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Dummy Occupied Tables</h4>
                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                    <!-- <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                        </ul> -->
                    </div>
                </div>
                <div class="card-content collapse show">
                <!-- Button trigger modal -->

                    <!-- <div class="card-body">
                        <p class="card-text">Use <code>.table-striped</code> with <code>.table-bordered</code> to add
                            zebra-striping to any table row within the <code class="highlighter-rouge">&lt;tbody&gt;</code>.</p>
                    </div> -->
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Table Name</th>
                                    <th>Number of Occupants</th>
                                    <th>Expected Payment</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Table 1</td>
                                    <td>9</td>
                                    <td>900</td>
                                    <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                        Check Out
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Table 2</td>
                                    <td>6</td>
                                    <td>8004.00</td>
                                    <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                        Check Out
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Table 8</td>
                                    <td>1</td>
                                    <td>7</td>
                                    <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                        Check Out
                                        </button>
                                    </td>
                                </tr>
                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- Bordered striped end -->

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
    <!-- BEGIN: Vendor JS-->
    <script src="<?= $baseUrl; ?>/app-assets/vendors/js/material-vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->
     <!-- BEGIN: Theme JS-->
     <script src="<?= $baseUrl; ?>/app-assets/js/core/app-menu.js"></script>
    <script src="<?= $baseUrl; ?>/app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->
<script>
   
  $(document).on('click', '.showModalButton', function(){

       alert('hapa')
            $('#modal').modal('show')
                    .find('#modalContent')
                    .load($(this).attr('value'));
            document.getElementById('modalHeader').innerHTML = '<h4>' + $(this).attr('title') + '</h4>';

    });
</script>

