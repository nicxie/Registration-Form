<div class="container-sm border r" >
    <div class="row">
        <div class="col-sm-3"></div>
            <div class="card-header bg-dark text-white bg-sample text-center col-sm-6" >
                <h1 class="bg-dark">Registration Form</h1>
            </div>
            <div class="col-sm-3"></div>
        </div>
        <div class="row">
            <div class="col-sm-3"></div>
                <div class="card-body bg-info col-sm-6  ">
                    <form  method="post" action="transactions/register.php ">
                        <div class="row">
                            <div class="col-md-2">
                                <label for="firstname">First Name</label>
                            </div>
                            <div class="col-md-7 mb-2">
                                <input type="text"  onkeydown="validate($str);"  name="firstname" class="form-control" placeholder="First name" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <label for="lastname">Last Name</label>
                            </div>
                            <div class="col-md-7 mb-2">
                                <input type="text"  onkeydown="validate(this);"  name="lastname" class="form-control" placeholder="Last name" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <label for="middlename">Middle Name</label>
                            </div>
                    <div class="col-md-7 mb-2">
                        <input type="text"  name="middlename" class="form-control" placeholder="Middle name" required>
                    </div>
                    </div>
                    <div class="row">
                            <div class="col-md-2">
                                <label for="address">Address</label>
                            </div>
                    <div class="col-md-7 mb-2">
                        <input type="text"  name="address" class="form-control" placeholder="Address" required>
                    </div>
                </div>
                <div class="row">
                            <div class="col-md-2">
                                <label for="dateofbirth">Date of Birth</label>
                            </div>
                    <div class="col-md-7 mb-2">
                        <input type="date"  name="dateofbirth" class="form-control" placeholder="Date of Birth" required>
                    </div>
                    </div>
                    <div class="row">
                            <div class="col-md-2">
                                <label for="placeofbirth">Place of birth</label>
                            </div>
                    <div class="col-md-7 mb-2">
                        <input type="text"  name="placeofbirth" class="form-control" placeholder="Place of Birth" required>
                    </div>
                    </div>
                    <div class="row">
                            <div class="col-md-2">
                                <label for="gender">Gender</label>
                            </div>
                    <div class="col-md-7 mb-2  " class="form-control">
                            <input type="radio" id="male" name="gender" value="male" required>
                            <label for="male">Male</label>
                            <input type="radio" id="female" name="gender" value="female" required>
                            <label for="female">Female</label>
                    </div>
                    </div>
                    <div class="row">
                            <div class="col-md-2">
                                <label for="guardian">Guardian</label>
                            </div>
                    <div class="col-md-7 mb-2">
                        <input type="text"  name="guardian" class="form-control" placeholder="Guardian" required>
                    </div>
                    </div>
                    <div class="row">
                            <div class="col-md-2">
                                <label for="contactnumber">Contact Nmber</label>
                            </div>
                    <div class="col-md-7 mb-2">
                        <input type="text" name="contactnumber" class="form-control" placeholder="Contact Number" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required>
                    </div>
                    </div>
                    <div class="row">
                            <div class="col-md-2">
                                <label for="civilstatus">Civil Status</label>
                            </div>
                    <div class="col-md-7 mb-2">
                        <input type="text"  name="civilstatus" class="form-control" placeholder="Civil Status" required>
                    </div>
                    </div>
                    <div class="row">
                            <div class="col-md-2">
                                <label for="yearlevel">Year Level</label>
                            </div>
                    <div class="col-md-7 mb-2">
                        <select name="yearlevel" id="Year Level">
                            <option value="1st Year" selected required>1st Year</option> 
                            <option value="2nd Year" required>2nd Year</option> 
                            <option value="3rd Year" required>3rd Year</option>
                            <option value="4th Year" required>4th Year</option>
                        </select> 
                    </div>
                    </div>
                    <div class="row">
                            <div class="col-md-2">
                                <label for="course">Course</label>
                            </div>
                    <div class="col-md-7 mb-2">
                        <select name="Course" id="Course">
                            <option value="IT" selected required>IT</option> 
                            <option value="CPE" required>CPE</option> 
                            <option value="Data Science" required>Data Science</option>
                            <option value="TCM" required>TCM</option>
                        </select> 
                    </div>
                    </div>
                    <div class="row">
                            <div class="col-md-2">
                                <label for="schoolyear">School Year</label>
                            </div>
                    <div class="col-md-7 mb-2">
                        <input type="text"  name="schoolyear" class="form-control" placeholder="School Year" required>
                    </div>
                    </div>
                    <div class="row">
                            <div class="col-md-2">
                                <label for="email">Email</label>
                            </div>
                    <div class="col-7 mb-2">
                        <input type="email"  name="email" class="form-control" placeholder="Email" required>
                    </div>
                    </div>
                    
                    <div class="col-md-9 text-center">
                        <button type="submit" class="btn btn-dark text-center" required>
                            Register
                        </button>
                    </div>
                </form>
                <div class="col-sm-3"></div>
            </div>
            </div>
            <div class="card-footer text-center">
                Copyright &copy; 2020
            </div>

       
    <
</div>