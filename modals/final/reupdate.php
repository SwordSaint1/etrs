<div class="modal fade bd-example-modal-xl" id="final_for_update" tabindex="-1"  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">
            <div id="final_registration_code" hidden>

            </div>

        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"  >
            <!-- onclick="javascript:window.location.reload()" -->
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
           <div class="row">
                <div class="col-4">
                        <input type="hidden" name="final_id" id="final_id_reupdate">
                     <span>Batch No:   </span> <input type="text" id="final_batch_no_reupdate" class="form-control"   class="noSpace">
                </div>
                <div class="col-4">
                     <span> Employee No:   </span> <input type="text" id="emp_id_reupdates" class="form-control" autocomplete="OFF" class="noSpace">
                </div>
                 <div class="col-4">
                     <span> Gender:   </span> <input type="text" id="final_gender_reupdate" class="form-control"  autocomplete="OFF" class="noSpace">
                </div>                
           </div>
           <div class="row">
                 <div class="col-3">
                     <span>Full Name:</span> <input type="text" name="final_full_name_reupdate" id="final_full_name_reupdate" class="form-control">
                 </div>
                 <div class="col-3">
                     <span>Department:</span> <input type="text" name="final_department_reupdate" id="final_department_reupdate" class="form-control">
                 </div>
                 <div class="col-3">
                     <span>Position:</span> <input type="text" name="final_position_update" id="final_position_reupdate" class="form-control">
                 </div>
                 <div class="col-3">
                     <span>Date Hired:</span> <input type="text" name="final_date_hired_update" id="final_date_hired_reupdate" class="form-control">
                 </div>
           </div>  
           <div class="row">
                <div class="col-3">
                     <span>Process:</span>
                    <select id="final_process_reupdate" class="form-control">
                        <option value="">Select Final Process</option>
                        <option value="Sub_Assembly_Process">Sub Assembly Process</option>
                        <option value="Assembly_Process">Assembly Process</option>
                        <option value="Inspection_Process">Inspection Process</option>
                    </select>
                </div>
                <div class="col-3">
                       <span>final Training:</span>
                    <select class="form-control" id="final_status_reupdate">
                        <option value="">Select final Training Status</option>
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
                    <input type="date" name="" id="final_training_date_reupdate" class="form-control">
                </div>
                 <div class="col-3">
                     <span>Training End Date:</span>
                    <input type="date" name="" id="final_training_end_dates_reupdatess" class="form-control">
                </div>
               
           </div>       
           <br>
           <div class="row">
                        <div class="col-12">
                          <p style="text-align:right;">
                        <button type="button" class="btn btn-primary"  onclick="reupdate_final_record()" id="planBtnCreate">Update</button>
                          </p>
                        </div>
           </div>
      </div>
     
    </div>
  </div>
</div>

