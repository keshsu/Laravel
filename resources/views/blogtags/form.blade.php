
                    <div class="form-group">
                      <label for="exampleInputFirstname1"> Name</label>
                      <br>
                      <input type="text" name = "tag" class="form-control col-md-3 d-inline" id="exampleInputFirstname1" placeholder="Tag Name"
                      value = "{{old('tag',$blogTagService->tag ?? '')}}">
                   
                      <input type="text" name = "tag_clean" class="form-control col-md-3 d-inline" id="exampleInputMiddlename1" placeholder="Sub Tag Name"
                      value = "{{old('tag_clean',$blogTagService->tag_clean ?? '')}}">
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