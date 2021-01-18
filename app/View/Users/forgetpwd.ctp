 <style type="text/css">
  @import url(https://fonts.googleapis.com/css?family=Roboto:300);

.login-page {
  width: 360px;
  padding: 6% 0 0;
  margin: auto;
}
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #4CAF50;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form button:hover,.form button:active,.form button:focus {
  background: #43A047;
}
.form .message {
  margin: 0 0 15px;
  color: red;
  font-size: 14px;
}
.form .message a {
  color: #4CAF50;
  text-decoration: none;
}
.form .register-form {
  display: none;
}
.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}
.container:before, .container:after {
  content: "";
  display: block;
  clear: both;
}
.container .info {
  margin: 50px auto;
  text-align: center;
}
.container .info h1 {
  margin: 0 0 15px;
  padding: 0;
  font-size: 36px;
  font-weight: 300;
  color: #1a1a1a;
}
.container .info span {
  color: #4d4d4d;
  font-size: 12px;
}
.container .info span a {
  color: #000000;
  text-decoration: none;
}
.container .info span .fa {
  color: #EF3B3A;
}
body {
-ms-flex-align: center;
    align-items: center;
    background: #e9ecef;
    display: -ms-flexbox;
    display: flex;
    -ms-flex-direction: column;
    flex-direction: column;
    height: 100vh;
    -ms-flex-pack: center;
    justify-content: center;  
}
.submit input {
    font-family: "Roboto", sans-serif;
    text-transform: uppercase;
    outline: 0;
    background: #333;
    width: 100%;
    border: 0;
    padding: 15px;
    color: #FFFFFF;
    font-size: 14px;
    -webkit-transition: all 0.3 ease;
    transition: all 0.3 ease;
    cursor: pointer;
}
.submit input:hover, submit input:active, submit input:focus {
    background: #111;
}
.center-part__submit button {
    display: table;
    padding: 12px 40px;
    color: #fff;
    border: none;
    transition: 0.3s;
    cursor: pointer;
background-color: #007bff;
    border-color: #007bff;
    margin-bottom: 30px;
    margin-top: 30px;
        border-radius: 0.25rem;
}
.center-part__submit button:hover {
    color: #ffffff;
    background-color: #0069d9;
    border-color: #0062cc;
}
.login_logo{
  width: 100%;
  height: 50px;
  margin-bottom: 40px;
  background: url('../../img/logo.svg') center / contain no-repeat;
}
.login-psw {
    color: #007bff;
    text-decoration: none;
    background-color: transparent;
    display: block;
    text-decoration: underline;
}
.login-psw:hover{
    text-decoration: none;
}
.admin_title{
  font-size: 20px;
  margin-bottom: 30px;
}
.admin_pass_reset{
  display: table;
  margin: 20px auto 0;
  font-size: 14px;
  color: #333;
  text-decoration: none;
}
.admin_pass_reset:hover{
  text-decoration: underline;
}
#UserUsername {
    display: block;
    width: 100%;
    height: calc(2.25rem + 2px);
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    background-color: #ffffff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: 0.25rem;
    box-shadow: inset 0 0 0 rgba(0, 0, 0, 0);
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
.center-part {
    width: 400px;
    margin: 8% auto 0;
    background: #fff;
    padding: 40px;
    max-width: 90%;
    box-sizing: border-box;
    box-shadow: 0 0 1px rgba(0,0,0,.125), 0 1px 3px rgba(0,0,0,.2);
    margin-bottom: 1rem;
}

.center-part__heading{
  display: block;
  text-align: center;
  font-size: 26px;
  margin-bottom: 30px;
}


</style>




 <div class="center-part">
  <span class="center-part__heading">Восстановление пароля</span>
   <form action="/users/forgetpwd"  method="POST" accept-charset="utf-8">
    <div class="input-row">
      <input class="input-row__input" placeholder="Почта" name="data[User][email]" type="text" id="UserUsername" required="required">
    </div>
    
    <div class="center-part__submit">
      <button class="btn" type="submit">Сбросить пароль</button>
    </div> 
    <a href="/admin/users/login" class="login-psw">
      Войти 
    </a>
  </form>     
</div>