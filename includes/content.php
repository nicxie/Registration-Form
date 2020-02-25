<div class="container">
    <div class="row">
        <div class="card mt-4">
            <div class="card-header bg-primary text-white bg-sample">
                <h4 class="bg-primary">Form Registraion</h4>
            </div>
            <div class="card-body">
                <form method="post" action="transactions/register.php">
                    <div class="col-md-12 mb-2">
                        <input type="text"  onkeydown="validate($str);"  name="firstname" class="form-control" placeholder="First name" required>
                    </div>
                    <div class="col-md-12 mb-2">
                        <input type="text"  onkeydown="validate(this);"  name="lastname" class="form-control" placeholder="Last name" required>
                    </div>
                    <div class="col-md-12 mb-2">
                        <input type="text"  name="middlename" class="form-control" placeholder="Middle name" required>
                    </div>
                    <div class="col-md-12 mb-2">
                        <input type="text"  name="address" class="form-control" placeholder="Address" required>
                    </div>
                    <div class="col-md-12 mb-2">
                        <input type="date"  name="dateofbirth" class="form-control" placeholder="Date of Birth" required>
                    </div>
                    <div class="col-md-12 mb-2">
                        <input type="text"  name="placeofbirth" class="form-control" placeholder="Place of Birth" required>
                    </div>
                    <div class="col-md-12 mb-2">
                        <label for="gender" >Gender</label><br>
                            <input type="radio" id="male" name="gender" value="male" required>
                            <label for="male">Male</label><br>
                            <input type="radio" id="female" name="gender" value="female" required>
                            <label for="female">Female</label><br>
                    </div>
                    <div class="col-md-12 mb-2">
                        <input type="text"  name="guardian" class="form-control" placeholder="Guardian" required>
                    </div>
                    <div class="col-md-12 mb-2">
                        <input type="text" name="contactnumber" class="form-control" placeholder="Contact Number" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required>
                    </div>
                    <div class="col-md-12 mb-2">
                        <input type="text"  name="civilstatus" class="form-control" placeholder="Civil Status" required>
                    </div>
                    <div class="col-md-12 mb-2">
                        <label for="yearlevel">Year Level</label>
                        <select name="yearlevel" id="Year Level">
                            <option value="1st Year" selected required>1st Year</option> 
                            <option value="2nd Year" required>2nd Year</option> 
                            <option value="3rd Year" required>3rd Year</option>
                            <option value="4th Year" required>4th Year</option>
                        </select> 
                    </div>
                    <div class="col-md-12 mb-2">
                        <label for="course">Course</label>
                        <select name="Course" id="Course">
                            <option value="IT" selected required>IT</option> 
                            <option value="CPE" required>CPE</option> 
                            <option value="Data Science" required>Data Science</option>
                            <option value="TCM" required>TCM</option>
                        </select> 
                    </div>
                    <div class="col-md-12 mb-2">
                        <input type="text"  name="schoolyear" class="form-control" placeholder="School Year" required>
                    </div>
                    <div class="col-12 mb-2">
                        <input type="email"  name="email" class="form-control" placeholder="Email" required>
                    </div>

                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary mb-1 form-control" required>
                            Register
                        </button>
                        
                    </div>

                </form>
            </div>
            <div class="card-footer text-center">
                Copyright &copy; 2020
            </div>

        </div>
    </div>
</div>