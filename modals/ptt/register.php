<div class="modal fade bd-example-modal-xl" id="register" tabindex="-1"  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">
            <div id="registration_code">
               
            </div>

        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"  onclick="javascript:window.location.reload()">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
           <div class="row">
                <div class="col-3">
                     <span>Batch No:   </span> <input type="text" id="batch_no" class="form-control-lg"  autocomplete="OFF" class="noSpace">
                </div>
                <div class="col-3">
                     <span> FALP ID Number:   </span> <input type="text" id="employee_num" class="form-control-lg" autocomplete="OFF">
                </div>
                 <div class="col-3">
                  <span> Position:   </span> <input type="text" id="position" class="form-control-lg"  autocomplete="OFF" class="noSpace">
                </div>
                <div class="col-3">
                     <span> Full Name:   </span> <input type="text" id="full_name" class="form-control-lg" autocomplete="OFF" class="noSpace">
                </div>
               
                
           </div>
           <div class="row">
             <div class="col-3">
                     <span>SP ID Number:   </span>
                     <input type="text" name="provider" id="provider" class="form-control">
                </div>
             <div class="col-3">
                     <span> Gender:   </span>
                      <select class="form-control" id="gender">
                        <option value="">Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
                <div class="col-3">
                     <span> Department:   </span> <input type="text" id="department" class="form-control"  autocomplete="OFF" class="noSpace">
                </div>
               
                <div class="col-3">
                     <span>Theory Training:</span>
                    <select class="form-control" id="theory_training">
                        <option value="">Select Theory Training Status</option>
                        <option value="Passed">Passed</option>
                        <option value="Failed">Failed</option>
                        <option value="Dismissed">Dismissed</option>
                        <option value="Pulled_Out">Pulled Out</option>
                        <option value="Resigned">Resigned</option>
                        <option value="Retrained">Retrained</option>
                        <option value="No_Training">No Training</option>
                    </select>
                </div>
               
               
           </div>
           <div class="row">
                <div class="col-3">
                  <span>Training Start Date:</span>
                    <input type="date" name="date_hired" id="training_date" class="form-control">
                </div>
                <div class="col-3">
                  <span>Training End Date:</span>
                    <input type="date" name="date_hired" id="training_end_date" class="form-control">
                </div>
                 <div class="col-3">
                   <span>Date Hired:</span>
                    <input type="date" name="date_hired" id="date_hired" class="form-control">
                </div>
                <div class="col-3">
                     <span> Remarks:   </span> <input type="text" id="theory_remarks" class="form-control" autocomplete="OFF" class="noSpace">
                </div>            
           </div>
          
           <br>
           <div class="row">
                        <div class="col-12">
                          <p style="text-align:right;">
                        <button type="button" class="btn btn-primary"  onclick="save_training_record()" id="planBtnCreate">Submit</button>
                          </p>
                        </div>
           </div>
      </div>
      <div class="modal-footer">

         <div class="card-body table-responsive p-0" style="height: 200px;">
       <table  class="table table-head-fixed text-nowrap table-hover" style="">
    <thead  style="text-align:center;">
                    <th>#</th>
                    <th>Batch No</th>
                    <th>FALP ID Number</th>
                    <th>SP ID Number</th>
                    <th>Full Name</th>
                    <th>Gender</th>
                    <th>Department</th>
                    <th>Position</th>
                    <th>Date Hired</th>
                    <th>Theory Training Status</th>
                    <th>Training Start Date</th>
                    <th>Training End Date</th>
                    <th>Remarks</th>
                   
    </thead>
    <tbody id="preview_training_record"></tbody>
</table>
</div>
      </div>
    </div>
  </div>
</div>

