<div class="modal fade bd-example-modal-xl" id="initial_practice_for_update" tabindex="-1"  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">
            <div id="initial_practice_registration_code" hidden>

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
                        <input type="hidden" name="initial_id" id="initial_practice_id_reupdate">
                     <span>Batch No:   </span> <input type="text" id="initial_practice_batch_no_reupdate" class="form-control"   class="noSpace">
                </div>
                <div class="col-4">
                     <span> Employee No:   </span> <input type="text" id="emp_id_reupdate_initial_practice" class="form-control" autocomplete="OFF" class="noSpace">
                </div>
                 <div class="col-4">
                     <span> Gender:   </span> <input type="text" id="initial_practice_gender_reupdate" class="form-control"  autocomplete="OFF" class="noSpace">
                </div>                
           </div>
           <div class="row">
                 <div class="col-3">
                     <span>Full Name:</span> <input type="text" name="initial_full_name_update" id="initial_practice_full_name_reupdate" class="form-control">
                 </div>
                 <div class="col-3">
                     <span>Department:</span> <input type="text" name="initial_department_update" id="initial_practice_department_reupdate" class="form-control">
                 </div>
                 <div class="col-3">
                     <span>Position:</span> <input type="text" name="initial_position_update" id="initial_practice_position_reupdate" class="form-control">
                 </div>
                 <div class="col-3">
                     <span>Date Hired:</span> <input type="text" name="initial_date_hired_update" id="initial_practice_date_hired_reupdate" class="form-control">
                 </div>
           </div>  
           <div class="row">
                <div class="col-3">
                     <span>Process:</span>
                    <select id="initial_practice_process_reupdate" class="form-control">
                        <option value="">Select Intial Practice Process</option>
                        <option value="First_Process">First Process </option>
                        <option value="Secondary_Process">Secondary Process </option>
                        <option value="Gomusen_Insertion">Gomusen Insertion </option>
                        <option value="In-Process_Inspection">In-Process Inspection </option>
                        <option value="Material_Handling_IP_OR_FP">Material Handling (Distribution) - IP/FP </option>
                        <option value="Material_Handling_PD">Material Handling (Production Distributor)</option>
                        <option value="Material_Handling_Zaihai">Material Handling (Zaihai)</option>
                        <option value="Point_Marking">Point Marking </option>
                        <option value="Shield_Wire_Taping">Shield Wire Taping </option>
                        <option value="SAM">SAM </option>
                        <option value="Recrimping">Recrimping </option>
                        <option value="QA_Inspection">QA Inspection </option>
                        <option value="QC_Mcrimp">QC Mcrimp </option>
                        <option value="QC_Jcrimp">QC Jcrimp </option>
                        <option value="QC_Res-J">QC Res-J </option>
                    </select>
                </div>
                <div class="col-3">
                       <span>Initial Training:</span>
                    <select class="form-control" id="initial_practice_status_reupdate">
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
                    <input type="date" name="date_hired" id="initial_practice_training_date_reupdate" class="form-control">
                </div>
                 <div class="col-3">
                     <span>Training End Date:</span>
                    <input type="date" name="date_hired" id="initial_practice_training_end_date_reupdate" class="form-control">
                </div>
                
               
           </div>       
           <br>
           <div class="row">
                        <div class="col-12">
                          <p style="text-align:right;">
                        <button type="button" class="btn btn-primary"  onclick="reupdate_initial_practice_record()" id="planBtnCreate">Update</button>
                          </p>
                        </div>
           </div>
      </div>
     
    </div>
  </div>
</div>

