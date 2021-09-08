  
            <!-- dashboard-section start -->
            <section id="dashboard-section" class="dashboard-section">
                <div class="container">
                    <div class="row">
                       

                        <div class="col-lg-12">
                            <div class="my-account-box">
                                <div class="my-account-header">
                                    <h6>My Account</h6>
                                    <span><i class="fas fa-pencil-alt fa-2x float-right" onclick="edit()" style="margin-top:-28px" id="account"></i></span>
                                </div>
                                <div class="my-account-body">
                                    <form action="<?php echo base_url();?>Dashboard/updateaddress" method="POST" class="eflux-login-form">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="input-item">
                                                    <label>Your First Name</label>
                                                    <input type="text" id="myInput" name="fname" value="<?php echo $user->fname;?>" readonly>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="input-item">
                                                    <label>Your Last Name </label>
                                                    <input type="text" id="myInput1" name="lname" value="<?php echo $user->lname;?>" readonly>
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                                <div class="input-item">
                                                    <label>Address</label>
                                                    <input type="text" id="myInput2" name="address" value="<?php echo $user->address;?>" readonly>
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                                <div class="input-item">
                                                    <label>City</label>
                                                    <input type="text" id="myInput3" name="city" value="<?php echo $user->city;?>" readonly>
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                                <div class="input-item">
                                                    <label>zipcode</label>
                                                    <input type="text" id="myInput4" name="zipcode" value="<?php echo $user->zipcode;?>" readonly>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="input-item">
                                                    <label>State</label>
                                                    <input type="text" id="myInput5" name="state" value="<?php echo $user->state;?>" readonly>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="input-item">
                                                    <label>Country</label>
                                                    <input type="text" id="myInput6" name="country" value="<?php echo $user->country;?>" readonly>
                                                </div>
                                            </div>
    
                                            <div class="col-lg-6">
                                                <div class="input-item">
                                                    <label>Email Address</label>
                                                    <input type="email" id="myInput7" name="email" value="<?php echo $user->email;?>" readonly>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="input-item">
                                                    <label>Mobile</label>
                                                    <input type="text"  id="myInput8" name="mobile" value="<?php echo $user->mobile;?>" readonly>
                                                </div>
                                            </div>

                                        </div>
    
                                        <div>
                                            <button type="submit" id="btn" class="btn btn-warning" disabled>Save Changes</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- dashboard-section end -->

            <script>
	let a=1;
	function edit(){
		if(a==1)
		{
			document.getElementById('myInput').removeAttribute('readonly');
			document.getElementById('myInput1').removeAttribute('readonly');
			document.getElementById('myInput2').removeAttribute('readonly');
			document.getElementById('myInput3').removeAttribute('readonly');
			document.getElementById('myInput4').removeAttribute('readonly');
			document.getElementById('myInput5').removeAttribute('readonly');
			document.getElementById('myInput6').removeAttribute('readonly');
			document.getElementById('myInput7').removeAttribute('readonly');
			document.getElementById('myInput8').removeAttribute('readonly');
			document.getElementById('btn').removeAttribute('disabled');
			a=2;
		}
		else
		{
			document.getElementById('myInput').setAttribute('readonly');
			document.getElementById('myInput1').setAttribute('readonly');
			document.getElementById('myInput2').setAttribute('readonly');
			document.getElementById('myInput3').setAttribute('readonly');
			document.getElementById('myInput4').setAttribute('readonly');
			document.getElementById('myInput5').setAttribute('readonly');
			document.getElementById('myInput6').setAttribute('readonly');
			document.getElementById('myInput7').setAttribute('readonly');
			document.getElementById('myInput8').setAttribute('readonly');
			document.getElementById('btn').setAttribute('disabled');
			a=1;
		}
		
		// alert("Hello");
	} 
</script>