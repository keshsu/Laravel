
                    <div class="form-group">
                      <label for="exampleInputFirstname1">Title</label>
                      <br>
                      <input type="text" name = "title" class="form-control col-md-3 d-inline" id="exampleInputFirstname1" placeholder="Heading"
                      value = "{{old('title',$blogPostService->title ?? '')}}">
                   
                      <input type="text" name = "clean_title" class="form-control col-md-3 d-inline" id="exampleInputLastname1" placeholder="Sub Heading"
                      value = "{{old('clean_title',$blogPostService->clean_title ?? '')}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputFirstname1">Author Name</label>
                      <br>
                      <select class="form-control" name="author_id" id="exampleInputAuthorId" data-parsley-required="true">
                      @foreach ($blogAuthorService ?? '' as $sn) 
                      {
                        <option value="{{ $sn->id }}">{{ $sn->full_name }}</option>
                      }
                      @endforeach
                    </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">File</label>
                      <br>
                      <input type="file" name = "file" class="form-control col-md-3 d-inline" id="exampleInputfile1"
                      value = "{{old('file',$blogPostService->file ?? '')}}">
                    </div>
                    <div class="form-group">
                    <label for="exampleInputFirstname1">Tags</label>
                      <br>
                      @foreach($blogTagService as $s)
                      <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" value = "{{$s->id}}" name="blog_tag[]">
                              {{$s->full_tag}}
                            <i class="input-helper"></i></label>
                      </div>
                      @endforeach
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Image</label>
                      <br>
                      <input type="file" name = "banner_image" class="form-control col-md-3 d-inline" id="exampleInputfile2"
                      value = "{{old('banner_image',$blogPostService->banner_image ?? '')}}">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputFeatured1">Featured</label>
                      <br>
                      <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" value = "1" name="featured">
                            Keep this post at the 
                            top of your blog's home page
                            <i class="input-helper"></i></label>
                      </div>
                    </div>
                    <div class="form-group">
                    <label for="exampleInputStatus1">Comments Enabled</label>
                    <br>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" value = "1" name="comment_enabled">
                            Keep enable to comment your blog
                            <i class="input-helper"></i></label>
                      </div>
                    </div>
                    <div class="form-group">
                    <label for="exampleInputStatus1">Status</label>
                    <br>
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