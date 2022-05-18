<div class="modal fade bd-example-modal-xl" id="update_record_ptt" tabindex="-1"  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">
          Update Record

        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"  onclick="javascript:window.location.reload()">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <div class="row">
                <div class="col-3">
                     <input type="hidden" name="" id="id_ptt_update">
                     <span>Batch No:   </span> <input type="text" id="batch_no_ptt_update" class="form-control-lg"  autocomplete="OFF" class="noSpace">
                </div>
                <div class="col-3">
                     <span>SP ID Number:   </span>
                     <input type="text" name="provider" id="provider_ptt_update" class="form-control-lg">
                </div>
                <div class="col-3">
                    <span> FALP ID Number:   </span> <input type="text" id="employee_num_ptt_update" class="form-control-lg" autocomplete="OFF">
                </div>
                <div class="col-3">
                     <span> Maiden Name:   </span> <input type="text" id="maiden_name_ptt_update" class="form-control-lg" autocomplete="OFF" class="noSpace">
                </div>
            </div>

           <div class="row">
                <div class="col-3">
                    <span> Full Name:   </span> <input type="text" id="full_name_ptt_update" class="form-control-lg" autocomplete="OFF" class="noSpace">
                </div>
                <div class="col-3">
                      <span> Gender:   </span>
                      <select class="form-control" id="gender_ptt_update">
                        <option value="">Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
                 <div class="col-3">
                      <span> Department:   </span> <input type="text" id="department_ptt_update" class="form-control"  autocomplete="OFF" class="noSpace">
                </div>
               
                 <div class="col-3">
                  <span> Position:   </span> <input type="text" id="position_ptt_update" class="form-control"  autocomplete="OFF" class="noSpace">
                </div>
               
                
           </div>
           <div class="row">
             <div class="col-3">
                     <span>Date Hired:</span>
                    <input type="date" name="date_hired" id="date_hired_ptt_update" class="form-control">
                </div>
             <div class="col-3">
                      <span>Theory Training:</span>
                    <select class="form-control" id="theory_training_ptt_update">
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
                <div class="col-3">
                     <span>Training Start Date:</span>
                    <input type="date" name="date_hired" id="training_date_ptt_update" class="form-control">
                </div>
               
                <div class="col-3">
                    <span>Training End Date:</span>
                    <input type="date" name="date_hired" id="training_end_date_ptt_update" class="form-control">
                </div>
               
               
           </div>
           <div class="row">
                <div class="col-3">
                 <span> Remarks:   </span> <input type="text" id="theory_remarks_ptt_update" class="form-control" autocomplete="OFF" class="noSpace">
                </div>
                
           </div>
          
           <br>
           <div class="row">
                        <div class="col-12">
                          <p style="text-align:right;">
                        <button type="button" class="btn btn-primary"  onclick="ptt_update()" id="planBtnCreate">Update</button>
                          </p>
                        </div>
           </div>
      </div>
    </div>
  </div>
</div>

