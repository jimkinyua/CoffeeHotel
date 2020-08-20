<?php
use yii\helpers\Html;
$this->title = 'Employees';



?>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Shop</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form class="form">
                                            <div class="form-body">
                                              

                                                <h4 class="form-section"><i class="ft-mail"></i> New Shop Info</h4>

                                                <div class="form-group">
                                                    <label for="userinput5">Floor Number</label>
                                                    <input class="form-control border-primary" type="text" placeholder="Provide Floor Number" id="userinput5">
                                                </div>
                                                

                                                <div class="form-group">
                                                    <label for="userinput6">Website</label>
                                                    <input class="form-control border-primary" type="url" placeholder="http://" id="userinput6">
                                                </div>

                                                <div class="form-group">
                                                    <label>Contact Number</label>
                                                    <input class="form-control border-primary" id="userinput7" type="tel" placeholder="Contact Number">
                                                </div>

                                                <div class="form-group">
                                                    <label for="userinput8">Bio</label>
                                                    <textarea id="userinput8" rows="5" class="form-control border-primary" name="bio" placeholder="Bio"></textarea>
                                                </div>

                                            </div>

                                         
                                        </form>
                                        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- Bordered striped start -->
     <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Dummy List Employees Under Me</h4>
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
 
<br>

                <div class="card-content collapse show">
 
                    <!-- <div class="card-body">
                        <p class="card-text">Use <code>.table-striped</code> with <code>.table-bordered</code> to add
                            zebra-striping to any table row within the <code class="highlighter-rouge">&lt;tbody&gt;</code>.</p>
                    </div> -->
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Username</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@TwBootstrap</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td colspan="2">Larry the Bird</td>
                                    <td>@twitter</td>
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

