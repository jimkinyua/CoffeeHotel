<?php
use yii\helpers\Html;
$this->title = 'Employees';



?>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Order</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-body">
                                                <h4 class="form-section"><i class="ft-user"></i> Drink Info</h4>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1">Customer Name</label>
                                                            <input type="text" id="projectinput1" class="form-control" placeholder="Name of the Name" name="fname">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput2">Number of Cups</label>
                                                            <input type="text" id="projectinput2" class="form-control" placeholder="Selling Price" name="lname">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput3">Maximum Discount Allowed</label>
                                                            <input type="text" id="projectinput3" class="form-control" placeholder="Max Discount" name="email">
                                                        </div>
                                                    </div>
                                                    <!-- <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput4">Contact Number</label>
                                                            <input type="text" id="projectinput4" class="form-control" placeholder="Phone" name="phone">
                                                        </div>
                                                    </div> -->
                                                </div>

                                                <!-- <h4 class="form-section"><i class="la la-paperclip"></i> Requirements</h4> -->

                                               

 

      
                                            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Make Order</button>
      </div>
    </div>
  </div>
</div>

<!-- Bordered striped start -->
<div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Dummy Available Drinks</h4>
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
                                    <th>Drink Name</th>
                                    <th>Unit Price</th>
                                    <th>Max Allowed Discount</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Tea</td>
                                    <td>9</td>
                                    <td>900</td>
                                    <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                        Make Order
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Expresso</td>
                                    <td>6</td>
                                    <td>8</td>
                                    <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                       Make Order
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Chai</td>
                                    <td>60</td>
                                    <td>8</td>
                                    <td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                       Make Order
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

<script>
   
  $(document).on('click', '.showModalButton', function(){

       alert('hapa')
            $('#modal').modal('show')
                    .find('#modalContent')
                    .load($(this).attr('value'));
            document.getElementById('modalHeader').innerHTML = '<h4>' + $(this).attr('title') + '</h4>';

    });
</script>

