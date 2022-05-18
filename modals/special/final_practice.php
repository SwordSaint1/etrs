<div class="modal fade bd-example-modal-xl" id="update_record_final_practice" tabindex="-1"  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">
            <div id="final_practice_registration_code" hidden>

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
                        <input type="hidden" name="final_id" id="final_practice_id">
                     <span>Batch No:   </span> <input type="text" id="final_practice_batch_no_update" class="form-control"   class="noSpace">
                </div>
                <div class="col-4">
                     <span> Employee No:   </span> <input type="text" id="emp_id_update_final_practice" class="form-control" autocomplete="OFF" class="noSpace">
                </div>
                 <div class="col-4">
                     <span> Gender:   </span> <input type="text" id="final_practice_gender_update" class="form-control"  autocomplete="OFF" class="noSpace">
                </div>                
           </div>
           <div class="row">
                 <div class="col-3">
                     <span>Full Name:</span> <input type="text" name="final_full_name_update" id="final_practice_full_name_update" class="form-control">
                 </div>
                 <div class="col-3">
                     <span>Department:</span> <input type="text" name="final_department_update" id="final_practice_department_update" class="form-control">
                 </div>
                 <div class="col-3">
                     <span>Position:</span> <input type="text" name="final_position_update" id="final_practice_position_update" class="form-control">
                 </div>
                 <div class="col-3">
                     <span>Date Hired:</span> <input type="text" name="final_date_hired_update" id="final_practice_date_hired_update" class="form-control">
                 </div>
           </div>  
           <div class="row">
                <div class="col-3">
                     <span>Process:</span>
                    <select id="final_practice_process_update" class="form-control">
                        <option value="">Select Final Practice Process</option>
                        <option value="Sub_Assy_Process">Sub Assy Process </option>
                       <option value="Lay_out_Process">Lay Out Process</option>
                       <option value="Option_Taping_Process">Option Taping Process </option>
                       <option value="Grommet_Insertion_Process">Grommet Insertion Process </option>
                       <option value="Assy+Parts_Distribution">Assy + Parts Distribution</option>
                       <option value="Dimension_Inspection">Dimension Inspection </option>
                       <option value="Electricity_Inspection">Electricity Inspection </option>
                       <option value="Apperance_Inspection">Apperance Inspection </option>
                       <option value="Tsumesen_Insertion">Tsumesen Insertion </option>
                       <option value="Material_Handling_PD">Material Handling (Production Distributor) </option>
                       <option value="Arm_Type_Torque_Fixing_Process">Arm Type Torque Fixing Process </option>
                       <option value="Grease_Injection_Process">Grease Injection Process </option>
                       <option value="Fuse_Image_Inspection">Fuse Image Inspection </option>
                       <option value="One_Liquid_Silicon_Injection_Helium_Leak_Checker">One Liquid Silicon Injection/Helium Leak Checker </option>
                       <option value="TBO_Checking_Process">TBO Checking Process </option>
                       <option value="Terminal_Removing_Person">Terminal Removing Person </option>
                    </select>
                </div>
                <div class="col-3">
                       <span>final Training:</span>
                    <select class="form-control" id="final_practice_status_update">
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
                    <input type="date" name="date_hired" id="final_practice_training_date_update" class="form-control">
                </div>
                <div class="col-3">
                     <span>Training End Date:</span>
                    <input type="date" name="date_hired" id="final_practice_training_end_date_update" class="form-control">
                </div>
     
           </div>       
           <br>
           <div class="row">
                        <div class="col-12">
                          <p style="text-align:right;">
                        <button type="button" class="btn btn-primary"  onclick="update_final_practice_record()" id="planBtnCreate">Update</button>
                          </p>
                        </div>
           </div>
      </div>
     
    </div>
  </div>
</div>

