<!-- Modal -->
<div class="modal fade text-left" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="POST" id="formModal" novalidate>
                    @csrf
                    <input type="hidden" name="id" id="id" class="id" value="{{$profile->id}}">
                    <input type="hidden" name="group_id" value="{{$profile->group_id}}">
                    <div class="row">
                        <div class="col-md-6">
                            <fieldset class="form-group floating-label-form-group">
                                <input type="file" class="files" id="fileUpload" accept="image/png, image/gif, image/jpeg">
                            </fieldset>
                        </div>

                        <div class="col-md-6">
                            <fieldset class="form-group floating-label-form-group">
                                <label for="user-name">Username</label>
                                <div class="controls">
                                    <input type="text" class="form-control" id="username" name="username" placeholder="Username" data-validation-required-message="This field is required" readonly value="{{$profile->username}}">
                                </div>
                            </fieldset>

                            {{-- <fieldset class="form-group floating-label-form-group">
                                 <label for="user-name">Fullname</label>
                                 <div class="controls">
                                     <input type="text" class="form-control" id="fullname" name="fullname"
                                            placeholder="Fullname"
                                            data-validation-required-message="This field is required" value="{{$profile->fullname}}" required>
                        </div>
                        </fieldset>--}}

                        <fieldset class="form-group floating-label-form-group">
                            <label for="user-name">Email</label>
                            <div class="controls">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Email" data-validation-required-message="This field is required" value="{{$profile->email}}" required>
                            </div>
                        </fieldset>

                        <!-- <fieldset class="form-group floating-label-form-group">
                            <label for="user-name">Password</label>
                            <div class="controls">
                                <input type="password" class="form-control" id="password" name="password" placeholder="Password" data-validation-required-message="This field is required" required>
                            </div>
                        </fieldset>

                        <fieldset class="form-group floating-label-form-group">
                            <label for="user-name">Confirm Password</label>
                            <div class="controls">
                                <input type="password" class="form-control" id="confirm_password" placeholder="Confirm Password" data-validation-required-message="This field is required">
                                <p class="invalid" hidden>Password Not Match</p>


                            </div>
                        </fieldset> -->

                        <fieldset class="form-group floating-label-form-group mb-1">
                            <label for="user-password">Enter Password</label>
                            <div class="controls">
                                <input type="password" name="password" id="password" class="form-control" required data-validation-required-message="This field is required" placeholder="Enter Password">
                            </div>
                        </fieldset>
                        <fieldset class="form-group floating-label-form-group mb-1">
                            <label for="user-password">Confirm Password</label>
                            <div class="controls">
                                <input type="password" data-validation-match-match="password" class="form-control mb-1" placeholder="Re type password" required>
                            </div>
                        </fieldset>
                    </div>
            </div>



            <div class="modal-footer">
                <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close
                </button>
                <button id="btn-submit" type="submit" class="btn btn-outline-info">Save changes</button>
            </div>
            </form>
        </div>

    </div>
</div>
</div>