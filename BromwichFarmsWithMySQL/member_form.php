<?php require('lib/head_sec.inc'); ?>
<?php require('lib/connect.inc'); ?>

<body>
    <div class="container-fluid">
        <div id="page-content">
            <?php require('lib/nav.inc'); ?>
            <?php require('lib/go_round.inc'); ?>

            
            <div style="width:70%;margin:2em auto;border-top:1px solid lightgrey;">

            <h2 style="text-align:center;margin-top:3em;margin-bottom:2em;">Members Portal</h2>
            
            <p style="text-align:center;margin-bottom:3em;">Welcome to our member's entry area.</p>

            <p style="text-align:center;margin-bottom:3em;">Already a member?  Sign in below to start shopping, or sign up today and get started.</p>
            
            
            
                <div class="col-sm-12">
                    <div class="row" style="padding:10px;border-bottom:1px solid lightgrey;">
                        <form method="post" action="signin_proc.php" id="signin" style="float:left;">
                            <div class="form-group col-md-3" style="float:left;">
                                <h2 style="margin:0 15px;font-size:200%;color:gray;clear:both;">Sign In</h2>
                            </div>
                            <div class="form-group col-md-3" style="float:left;margin-left:2.5em;">
                                <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email" style="">
                            </div>
                            <div class="form-group col-md-3" style="float:left;">
                                <input type="password" class="form-control" id="inputPassword4" placeholder="Password" name="password">
                            </div>
                            <button type="submit" class="btn btn-primary" style="margin-bottom:25px;background-color:#834558;border: 1px solid #834558;">Sign In</button>
                        </form>
                    </div>

                    <div class="row" style="padding:25px;">
                        <h2 style="font-size:200%;color:gray;">Or Sign Up</h2>
                        <form method="post" enctype="multipart/form-data" action="signup_proc.php" style="width:70%;margin:0 auto;">
                            <div class="form-row">
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="First name" name="fname">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Last name" name="lname">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4"></label>
                                    <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email_one">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4"></label>
                                    <input type="email" class="form-control" id="inputEmail4" placeholder="Confirm Email" name="email_two">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4"></label>
                                    <input type="password" name="password_one" class="form-control" id="inputPassword4" placeholder="Password">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4"></label>
                                    <input type="password" name="password_two" class="form-control" id="inputPassword4" placeholder="Confirm Password">
                                </div>
                            </div>
                            <div class="form-row" style="margin-left:-20px;">
                                <label for="inputAddress"></label>
                                <input type="text" class="form-control" id="inputAddress" placeholder="Complete Street Address, e.g. 1234 Main St, Apt. 4" name="address">
                            </div>
                            <div class="form-group col-md-6" style="margin-top:10px;margin-left:-22px;">
                                <label for="inputCity"></label>
                                <input type="text" class="form-control" id="inputCity" name="city" placeholder="City">
                            </div>
                            <div class="form-group col-md-6" style="margin-top:10px;margin-left:-22px;">
                                <label for="inputState"></label>
                                <input type="text" class="form-control" id="inputState" name="state" placeholder="State">
                            </div>
                            <div class="form-group col-md-6" style="margin-top:10px;margin-left:-22px;">
                                <label for="inputZip"></label>
                                <input type="text" class="form-control" id="inputZip" name="zip" placeholder="Zip Code">
                            </div><br><br>
                            <div class="column" id="member_photo" style="width:50%;">
                                <label style="color:#007bff;font-weight:700;color:#834558;margin:0px;margin-left:-15px;"><br>Profile Photo (jpg, gif, or png format)<br></label>
                                <input type="file" class="form-control" name="my_image" style="margin-left:0px;clear:both;" accept="image/*">
                            </div><br>
                            <div class="column" id="member_photo" style="width:50%;">
                                <label style="color:#007bff;font-weight:700;color:#834558;margin-top:30px;margin-left:-15px;">Select Membership Type</label><br> <select name="membership_type" style="margin-top:30px;margin-left:10px;width: 175px;">
                                <option value="customer">Customer</option>
                                <option value="vendor">Vendor</option>
                                <option value="employee">Employee</option>
                                <option value="admin">Administrator</option>
                            </select>
                            </div>
                            <div class="form-group col-md-6" style="margin-left:-22px;">
                                &nbsp;<br>
                                <button type="submit" class="btn btn-primary" style="background-color:#834558;border: 1px solid #834558;margin-top:20px;">Sign Up</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <?php require('lib/footer.inc'); ?>
