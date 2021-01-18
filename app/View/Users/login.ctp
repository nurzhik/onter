<section class="main_section login_section full_section" style="background-image: url('/img/main_bg.jpg');">
    <div class="container">
      <div class="main_block">
        <div class="main_title">Вход</div>
        <div class="login_block">
          <form class="login_form" action="/users/login" class="login_body"  id="UserLoginForm" method="POST" accept-charset="utf-8">
            <div class="input_block">
              <div class="input_name">Адрес эдектронной почты</div>
              <input class="form_input" type="email" name="data[User][username]"required="">
            </div>
            <div class="input_block pass_input_block">
              <div class="input_name">Пароль</div>
              <input class="form_input pass_input pass_input__pass" type="password" name="data[User][password]" required="">
              <div class="input_err pass_err"></div>
              <div class="pass_eye"></div>
            </div>
            <div class="login_buttons">
              <button class="login_form_btn gray_btn" type="submit">Войти</button>
              <a class="login_link" href="/registration_page">Зарегистрироваться</a>
            </div>
          </form>
          <div class="login_bottom">
            <div class="login_bottom_text">Забыли пароль?</div>
            <a class="login_link" href="javascript:;">Восстановить пароль</a>
          </div>
        </div>
      </div>
    </div>
  </section>


