<section class="registermodal">
	<div id="modal2" class="modal">
	    <div class="modal-content center">
	      <h4 style="font-family: IRANSans;">عضویت در رستوران</h4>

	      <h5><small class="center" id="reg_error" style="color: red;"></small></h5>
	      <form action="backends/register.php" method="post">

	      	<div class="row">

	      	<div class="input-field col s12" style="direction: rtl;">
	          <input style="font-family: IRANSans;" name="name"  id="name_reg" type="text" class="validate">
	          <label style="font-family: IRANSans;" for="name_reg">نام و نام خانوادگی</label>
	          
	        </div>

	        <div class="input-field col s12" style="direction: rtl;">
	          <input style="font-family: IRANSans;" name="email" onkeypress="return isEmail(event);" id="email_reg" type="email" class="validate">
	          <label style="font-family: IRANSans;" for="email_reg">ایمیل</label>
	        </div>

	    </div>

	    <div class="row">
            <div class="input-field col s6" style="direction: rtl;">
                <input id="con_password_reg" type="password" class="validate" name="repassword">
                <label style="font-family: IRANSans;" for="con_password_reg">تکرار کلمه عبور</label>
            </div>
		    <div class="input-field col s6" style="direction: rtl;">
	          <input id="password_reg" type="password" class="validate" name="password">
	          <label style="font-family: IRANSans;" for="password_reg">کلمه عبور</label>
	        </div>


	        
		  </div>

              <div class="row">
                  <div class="col s12">
                      <button style="font-family: IRANSans;" type="submit"  class="waves-effect waves-light btn"><b>ثبت نام</b></button>
                  </div>
              </div>
	      </form>
	    </div>
	  </div>
  </section>