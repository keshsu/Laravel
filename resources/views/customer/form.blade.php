
                    <div class="form-group">
                      <label for="exampleInputFirstname1">Full Name</label>
                      <br>
                      <input type="text" name = "first_name" class="form-control col-md-3 d-inline" id="exampleInputFirstname1" placeholder="First Name"
                      value = "{{old('first_name',$customer->first_name ?? '')}}">
                   
                      <input type="text" name = "middle_name" class="form-control col-md-3 d-inline" id="exampleInputMiddlename1" placeholder="Middle Name"
                      value = "{{old('middle_name',$customer->middle_name ?? '')}}">
                    
                      <input type="text" name = "last_name" class="form-control col-md-3 d-inline" id="exampleInputLastname" placeholder="Last Name"
                      value = "{{old('last_name',$customer->last_name ?? '')}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email</label>
                      <input type="email" name = "email" class="form-control" id="exampleInputEmail1" placeholder="Email"
                      value = "{{old('email',$customer->email ?? '')}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputcontact1">Contact</label>
                      <input type="text" name="contact" class="form-control" id="exampleInputcontact1" placeholder="Contact"
                      value = "{{old('contact',$customer->contact ?? '')}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputAddress1">Address</label>
                      <input type="text" name="address" class="form-control" id="exampleInputAddress1" placeholder="Address"
                      value = "{{old('address',$customer->address ?? '')}}">
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>