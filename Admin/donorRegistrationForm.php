<html>

<body>

  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Donor</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="saveDonor.php" method="POST">

          <div class="modal-body">

            <div class="form-group">
              <label>Full Name </label>
              <input type="text" name="fname" id="fname" class="form-control" placeholder="Enter first name" pattern="[A-Z_ ][Aa-z_ ]{3,30}" required>
            </div>

            <div class="form-group col-6">
            <label>Date & Time </label> 
            <input type="datetime-local" id="contact" name="dateTime" class="form-control"   required>
          </div> 

            <!-- Gender -->
            <div class="form-group container">
              <label>Gender</label>
              <select class="form-control" name="gender">
                <option>Male</option>
                <option>Female</option>
              </select>
            </div>
            <!-- Gender end -->

            <div class="form-group">
              <label>Job </label>
              <input type="text" name="job" id="username" class="form-control" pattern="[a-z]{3,30}" placeholder="Enter job" required>
            </div>
            <div class="row">
              <div class="form-group col-md-6">
                <label for="inputState">Martial status</label>
                <select id="inputState" name="Mstatus" class="form-control" required>
                  <option value="Married">Married</option>
                  <option value="Single">Single</option>
                </select>
              </div>
              <div class="form-group col-md-6">
                <label for="inputState">Blood type</label>
                <select id="inputState" name="blood_type" class="form-control" required>
                  <option selected>A+</option>
                  <option>A-</option>
                  <option>B+</option>
                  <option>B-</option>
                  <option>AB+</option>
                  <option>AB-</option>
                  <option>O+</option>
                  <option>O-</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label>Email</label>
              <input type="email" name="email" id="email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="Enter Email" required>
            </div>
            <div class="form-group">
              <label>Contact </label>
              <input type="number" name="contact" id="contact" class="form-control" pattern="[0-9]{3,30}" placeholder="Enter contact" required>
            </div>

            <div class="form-group col-md-6">
              <label for="inputState">Unit</label>
              <select id="inputState" name="unit" class="form-control" required>
                <option selected>1000ml</option>
                <option>500ml</option>
              </select>
            </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="Register" class="btn btn-primary">Save</button>
          </div>
        </form>





      </div>
    </div>
  </div>
</body>

</html>