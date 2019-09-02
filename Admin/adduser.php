

<div class="modal fade" id="adduser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Admin Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="saveUser.php" method="POST">

        <div class="modal-body">

          <div class="form-group">
            <label>First Name </label>
            <input type="text" name="fname" id="fname"class="form-control" placeholder="Enter first name" pattern="[A-Z_ ][Aa-z_ ]{3,30}" required>

          </div>         
          <div class="form-group">
            <label>Username </label>  
            <input type="text" name="username" id="username" class="form-control" placeholder="Enter username" pattern="[Aa-z]{3,30}"  required>
          </div>

          <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
          </div>

          <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" id="password" class="form-control" placeholder="Enter password"   required>
          </div>
          <div class="form-group">
            <label>Contact </label>
            <input type="number" name="contact" id="contact" class="form-control" pattern="[0-9]{3,30}" placeholder="Enter contact" required>
          </div>
          <div class="form-group col-md-4" >
              <label for="inputState">Type of user</label>
              <select id="type_of_user" class="form-control" name="type_of_user" required> 
                <option selected>Admin</option>
                <option>Lab</option>
                <option>Recipient</option>
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
 