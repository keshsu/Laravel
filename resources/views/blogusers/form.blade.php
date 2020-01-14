first_name');
            $table->string('last_name');
            $table->string('display_name');
            $table->enum('gender',['male','female']);
            $table->string('email');
            $table->string('contact');
            $table->string('address');
            $table->string('website');
            $table->enum('status'
                    <div class="form-group">
                      <label for="exampleInputFirstname1">Full Name</label>
                      <br>
                      <input type="text" name = "first_name" class="form-control col-md-3 d-inline" id="exampleInputFirstname1" placeholder="First Name"
                      value = "{{old('first_name',$blogCategory->first_name ?? '')}}">
                   
                      <input type="text" name = "last_name" class="form-control col-md-3 d-inline" id="exampleInputLastname1" placeholder="Last Name"
                      value = "{{old('last_name',$blogCategory->last_name ?? '')}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputFirstname1">User Name</label>
                      <br>
                      <input type="text" name = "display_name" class="form-control col-md-3 d-inline" id="exampleInputDisplayname1" placeholder="User Name"
                      value = "{{old('name',$blogCategory->name ?? '')}}">
                    </div>
                    <div class="form-group">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input name="gender" class="form-check-input" id="optionsRadios1" type="radio" value="male">
                          Male
                        <i class="input-helper"></i></label>
                      </div>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input name="gender" class="form-check-input" id="optionsRadios2" type="radio" value="female">
                          Female
                        <i class="input-helper"></i></label>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email</label>
                      <br>
                      <input type="email" name = "email" class="form-control col-md-3 d-inline" id="exampleInputEmail1" placeholder="Email Address"
                      value = "{{old('email',$blogCategory->email ?? '')}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputContact1">Contact</label>
                      <br>
                      <input type="text" name = "contact" class="form-control col-md-3 d-inline" id="exampleInputContact1" placeholder="Contact"
                      value = "{{old('contact',$blogCategory->contact ?? '')}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputAddress1">Address</label>
                      <br>
                      <input type="address" name = "address" class="form-control col-md-3 d-inline" id="exampleInputAddress1" placeholder="Address"
                      value = "{{old('address',$blogCategory->address ?? '')}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputWebsite1">Website</label>
                      <br>
                      <input type="website" name = "website" class="form-control col-md-3 d-inline" id="exampleInputWebsite1" placeholder="Website Address"
                      value = "{{old('website',$blogCategory->website ?? '')}}">
                    </div>
                    <div class="form-group">
                      <div class="form-check">
                        <label class="form-check-label">
                          <input name="status" class="form-check-input" id="optionsRadios1" type="radio" value="active" checked="">
                          Active
                        <i class="input-helper"></i></label>
                      </div>
                      <div class="form-check">
                        <label class="form-check-label">
                          <input name="status" class="form-check-input" id="optionsRadios2" type="radio" value="not-active">
                          Not-Active
                        <i class="input-helper"></i></label>
                      </div>
                    </div>
                    <!-- value = "{{old('address',$customer->address ?? '')}}" -->
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>