<div class="modal fade bd-example-modal-xl" id="update_record" tabindex="-1"  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">
            <div id="initial_registration_code" hidden>

            </div>

        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"  >
            <!-- onclick="javascript:window.location.reload()" -->
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
           <div class="row">
                <div class="col-3">
                        <input type="hidden" name="initial_id" id="initial_id">
                     <span>Batch No:   </span> <input type="text" id="initial_batch_no_update" class="form-control"   class="noSpace">
                </div>
                <div class="col-3">
                     <span> Employee No:   </span> <input type="text" id="emp_id_update" class="form-control" autocomplete="OFF" class="noSpace">
                </div>
                 <div class="col-3">
                     <span> Gender:   </span> <input type="text" id="initial_gender_update" class="form-control"  autocomplete="OFF" class="noSpace">
                </div>   
                <div class="col-3">
                     <span>Full Name:</span> <input type="text" name="initial_full_name_update" id="initial_full_name_update" class="form-control">
                 </div>             
           </div>
           <div class="row">
                 
                 <div class="col-3">
                     <span>Department:</span> <input type="text" name="initial_department_update" id="initial_department_update" class="form-control">
                 </div>
                 <div class="col-3">
                     <span>Position:</span> <input type="text" name="initial_position_update" id="initial_position_update" class="form-control">
                 </div>
                 <div class="col-3">
                     <span>Date Hired:</span> <input type="text" name="initial_date_hired_update" id="initial_date_hired_update" class="form-control">
                 </div>
                 <div class="col-3">
                     <span>Remarks:</span> <input type="text" name="initial_remarks" id="initial_remarks" class="form-control">
                 </div>
           </div>  
           <div class="row">
                <div class="col-3">
                     <span>Process:</span>
                    <select id="initial_process_update" class="form-control">
                        <option value="">Select Intial Process</option>
                        <option value="First_Process">First Process</option>
                        <option value="Secondary_Process">Secondary Process</option>
                    </select>
                </div>
                <div class="col-3">
                       <span>Initial Training:</span>
                    <select class="form-control" id="initial_status_update">
                        <option value="">Select Initial Training Status</option>
                        <option value="Passed">Passed</option>
                        <option value="Failed">Failed</option>
                        <option value="Dismissed">Dismissed</option>
                        <option value="Pulled_Out">Pulled Out</option>
                        <option value="Resigned">Resigned</option>
                        <option value="Retrained">Retrained</option>
                        <option value="No_Training">No Training</option>
                    </select>
                </div>
                <div class="col-3">
                     <span>Training Start Date:</span>
                    <input type="date" name="" id="initial_training_date_update" class="form-control">
                </div>
                 <div class="col-3">
                     <span>Training End Date:</span>
                    <input type="date" name="" id="initial_training_ends_date_updates" class="form-control">
                </div>
               
           </div>       
           <br>
           <div class="row">
                        <div class="col-12">
                          <p style="text-align:right;">
                        <button type="button" class="btn btn-primary"  onclick="update_initial_record()" id="planBtnCreate">Update</button>
                          </p>
                        </div>
           </div>
      </div>
     
    </div>
  </div>
</div>

