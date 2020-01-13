
                    <div class="form-group">
                      <label for="exampleInputFirstname1"> Name</label>
                      <br>
                      <input type="text" name = "name" class="form-control col-md-3 d-inline" id="exampleInputFirstname1" placeholder="Category Name"
                      value = "{{old('name',$blogCategory->name ?? '')}}">
                   
                      <input type="text" name = "name_clean" class="form-control col-md-3 d-inline" id="exampleInputMiddlename1" placeholder="Sub Name"
                      value = "{{old('name_clean',$blogCategory->name_clean ?? '')}}">
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