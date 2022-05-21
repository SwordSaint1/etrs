<div class="modal fade bd-example-modal-xl" id="status" tabindex="-1"  role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
      
        <h5 class="modal-title" id="exampleModalLabel">
          <div class="row">
            <div class="col-3">
               <label>Batch No:</label>  <input type="text" name="batch_no_viewer" id="batch_no_viewers" class="form-control-lg" disabled >
       
            </div>
             <div class="col-3">
               <label>Full Name:</label><input type="text" name="full_name_viewer" id="full_name_viewer" class="form-control-lg" disabled>
            </div>
            <div class="col-3">
                 <label>SP ID Number:</label>  <input type="text" name="provider_viewer" id="provider_viewer" class="form-control-lg" disabled>
            </div>
             <div class="col-3">
                <label>FALP ID No:</label> <input type="text" name="employee_num_viewer" id="employee_num_viewer" class="form-control-lg" disabled>
            </div>
         
           
            <input type="hidden" name="id_viewer" id="id_viewer">
      
     
         
            <input type="hidden" name="maiden_name_viewer" id="maiden_name_viewer">
           
            <input type="hidden" name="gender_viewer" id="gender_viewer">
            <input type="hidden" name="department_viewer" id="department_viewer">
            <input type="hidden" name="position_viewer" id="position_viewer">

</div>
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"  >
            <!-- onclick="javascript:window.location.reload()" -->
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <h2 style="text-align:center;">
              Initial Training Records
            </h2>
           <div class="row">
           
            <div class="col-12">
              <h4 style="text-align:center;">Training Taken</h4>
              <div class="card-body table-responsive p-0" style="height: 250px;">
                <table class="table table-head-fixed text-nowrap table-hover" id="final_view_training_data">
                  <tr>
                <thead style="text-align:center;">
                     <th>Initial Training Process</th>
                     <th>Training Start Date</th>
                      <th>Training End Date</th>
                      <th>Training Status</th>
                      <th>Training Remarks</th>
                   </thead>
                   </tr> 
            <tbody id="initial_taken" style="text-align:center;"></tbody>
                </table>
              </div>
            </div>
            <!--  <div class="col-6">
                 <h4 style="text-align:center;">Training Needs</h4>
              <div class="card-body table-responsive p-0" style="height: 250px;">
                <table class="table table-head-fixed text-nowrap table-hover" id="final_view_training_data">
                  <tr>
                <thead style="text-align:center;">
                     <th>Initial Training Process</th>
                   
                   </thead>
                   </tr> 
            <tbody id="initial_needs" style="text-align:center;"></tbody>
                </table>
              </div>
             </div> -->
           </div>
         <br>
         <hr>
           <h2 style="text-align:center;">
              Final Training Records
            </h2>
           <div class="row">
              <div class="col-12">
                      <h4 style="text-align:center;">Training Taken</h4>
              <div class="card-body table-responsive p-0" style="height: 250px;">
                <table class="table table-head-fixed text-nowrap table-hover" id="final_view_training_data">
                  <tr>
                <thead style="text-align:center;">
                     <th>Final Training Process</th>
                      <th>Training Start Date</th>
                      <th>Training End Date</th>
                      <th>Training Status</th>
                      <th>Training Remarks</th>
                   </thead>
                   </tr> 
                  <tbody id="final_taken" style="text-align:center;"></tbody>
                      </table>
                    </div>
              </div>

            <!--   <div class="col-6">
                        <h4 style="text-align:center;">Training Needs</h4>
              <div class="card-body table-responsive p-0" style="height: 250px;">
                <table class="table table-head-fixed text-nowrap table-hover" id="final_view_training_data">
                  <tr>
                <thead style="text-align:center;">
                     <th>Final Training Process</th>
                   
                   </thead>
                   </tr> 
                    <tbody id="final_needs" style="text-align:center;"></tbody>
                        </table>
                      </div>
              </div> -->
           </div>

            <br>
         <hr>
           <h2 style="text-align:center;">
              Special Batch Initial Training Records
            </h2>
           <div class="row">
              <div class="col-12">
                      <h4 style="text-align:center;">Training Taken</h4>
              <div class="card-body table-responsive p-0" style="height: 250px;">
                <table class="table table-head-fixed text-nowrap table-hover" id="final_view_training_data">
                  <tr>
                <thead style="text-align:center;">
                     <th>Special Batch Initial Training Process</th>
                       <th>Training Start Date</th>
                      <th>Training End Date</th>
                      <th>Training Status</th>
                      <th>Training Remarks</th>
                   </thead>
                   </tr> 
                  <tbody id="sb_initial_taken" style="text-align:center;"></tbody>
                      </table>
                    </div>
              </div>

              <!-- <div class="col-6">
                        <h4 style="text-align:center;">Training Needs</h4>
              <div class="card-body table-responsive p-0" style="height: 250px;">
                <table class="table table-head-fixed text-nowrap table-hover" id="final_view_training_data">
                  <tr>
                <thead style="text-align:center;">
                     <th>Special Batch Initial Training Process</th>
                   
                   </thead>
                   </tr> 
                    <tbody id="sb_initial_needs" style="text-align:center;"></tbody>
                        </table>
                      </div>
              </div> -->
           </div>


              <br>
         <hr>
           <h2 style="text-align:center;">
              Special Batch Final Training Records
            </h2>
           <div class="row">
              <div class="col-12">
                      <h4 style="text-align:center;">Training Taken</h4>
              <div class="card-body table-responsive p-0" style="height: 250px;">
                <table class="table table-head-fixed text-nowrap table-hover" id="final_view_training_data">
                  <tr>
                <thead style="text-align:center;">
                     <th>Special Batch Final Training Process</th>
                    <th>Training Start Date</th>
                      <th>Training End Date</th>
                      <th>Training Status</th>
                      <th>Training Remarks</th>
                   </thead>
                   </tr> 
                  <tbody id="sb_final_taken" style="text-align:center;"></tbody>
                      </table>
                    </div>
              </div>

             <!--  <div class="col-6">
                        <h4 style="text-align:center;">Training Needs</h4>
              <div class="card-body table-responsive p-0" style="height: 250px;">
                <table class="table table-head-fixed text-nowrap table-hover" id="final_view_training_data">
                  <tr>
                <thead style="text-align:center;">
                     <th>Special Batch Final Training Process</th>
                   
                   </thead>
                   </tr> 
                    <tbody id="sb_final_needs" style="text-align:center;"></tbody>
                        </table>
                      </div>
              </div> -->
           </div>


      </div>
     
    </div>
  </div>
</div>

