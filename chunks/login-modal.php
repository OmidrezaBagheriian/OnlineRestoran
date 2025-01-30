<section class="loginmodal">
	<div id="modal1" class="modal">
	    <div class="modal-content center">
	      <h4 style="font-family: IRANSans;">ورود به حساب کاربری</h4>

	      <h5><small class="center" id="login_error" style="color: red;"></small></h5>
	      <form action="backends/login.php" method="post" >

	      	<div class="row">



			<div class="input-field col s12" style="direction: rtl;">
	          <input style="font-family: IRANSans;" onkeypress="return isEmail(event);" id="email_login" type="email" class="validate" name="email">
	          <label style="font-family: IRANSans;" for="email_reg">ایمیل</label>
	        </div>


			<div class="input-field col s12" style="direction: rtl;">
	          <input id="password_login" type="password" class="validate" name="password">
	          <label style="font-family: IRANSans;" for="password_reg">کلمه عبور</label>
	        </div>


	        
		  </div>

              <div class="row">
                  <div class="col s12">
                      <button style="font-family: IRANSans;" type="submit"  class="waves-effect waves-light btn"><b>ورود</b></button>
                  </div>
              </div>
	      </form>
	    </div>
	  </div>
  </section>