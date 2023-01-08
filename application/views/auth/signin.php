<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-6 col-lg-6 col-md-6">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Inventory.</h1>
                                </div>
                                <?php echo validation_errors(); ?>
                                <form method="POST" action="<?php echo base_url('auth/signin') ?>" class="user">
                                    <div class="form-group">
                                        <input id="username" type="text" class="form-control form-control-user" name="username" value="<?php echo set_value('username'); ?>" required autocomplete="username" autofocus  placeholder="Enter username.">
                                       <span class="invalid-feedback" role="alert">
                                            <strong><?php echo form_error('username'); ?></strong>
                                        </span>
                                    </div>
                                    <div class="form-group">
                                        <input id="password" name="password" type="password" class="form-control form-control-user"
                                        required autocomplete="current-password" placeholder="Password">
                                        <span class="text-danger" role="alert">
                                            <strong><?php echo form_error('password'); ?></strong>
                                        </span>
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <input type="checkbox" class="custom-control-input" name="remember" id="remember">
                                            <label class="custom-control-label" for="customCheck">Remember
                                                Me</label>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Login
                                </button>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="#">Forgot Password?</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="#">Create an Account!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>