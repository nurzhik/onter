<section class="page gray">
    <div class="container">
        <div class="title title_left">Личный кабинет</div>

        <div class="cabinet">
            <div class="cabinet_sidebar_block">
                <div class="cabinet_sidebar">
                    <a class="cab_link" href="">
                        <div class="cab_link_img">
                            <img src="/img/cab_icon_1.svg" alt="">
                        </div>
                        <span>Мои консультации</span>
                    </a>
                    <a class="cab_link" href="cabinet_my_doctors.html">
                        <div class="cab_link_img">
                            <img src="/img/cab_icon_2.svg" alt="">
                        </div>
                        <span>Мои врачи</span>
                    </a>
                    <a class="cab_link active" href="/users/cabinet">
                        <div class="cab_link_img">
                            <img src="/img/cab_icon_3.svg" alt="">
                        </div>
                        <span>Профиль</span>
                    </a>
                    <a class="cab_link" href="/users/logout">
                        <div class="cab_link_img">
                            <img src="/img/cab_icon_4.svg" alt="">
                        </div>
                        <span>Выйти</span>
                    </a>
                </div>
            </div>
            <div class="cab_content_block">
                <div class="profile">
                    <div class="profile_img_block">
                        <div class="profile_img">
                            <?php if(!empty($data['User']['img'])): ?>
                                <img  class="img-thumbnail mb-2" style="max-width: 200px" src="/img/users/<?=$data['User']['img']?>">
                            <?php else: ?>
                                <img class="img-thumbnail mb-2"  style="max-width: 200px"  src="/img/admin_img/default.svg">
                            <?php endif ?>
                            <label class="profile_img_label" for="profile_img_file"></label>
                        </div>
                        <div class="profile_img_name"></div>
                    </div>
                    <div class="profile_info">
                        <form class="profile_form"  action="/users/cabinet"  enctype="multipart/form-data" accept-charset="utf-8" method="POST">
                            <div class="input_block">
                                <div class="input_name">Как к вам обращаться:</div>
                                <input class="form_input" type="text" value="<?php echo $data['User']['name']; ?> " name="data[User][name]" >
                            </div>
                            <div class="input_block">
                                <div class="input_name">Дата рождения:</div>
                                <input class="form_input" type="text" value="<?php echo $data['User']['date_of_birth']; ?> " name="data[User][date_of_birth]" >
                            </div>
                            <div class="input_block">
                                <div class="input_name">Пол:</div>
                                <input class="form_input" type="text" value="<?php echo $data['User']['gender']; ?> " name="data[User][gender]">
                            </div>
                            <div class="input_block">
                                <div class="input_name">Телефон:</div>
                                <input class="form_input" type="tel" value="<?php echo $data['User']['phone']; ?> " name="data[User][phone]">
                            </div>
                            <div class="input_block">
                                <div class="input_name">Email:</div>
                                <input class="form_input" type="email" value="<?php echo $data['User']['username']; ?> " name="data[User][username]">
                            </div>
                            <input class="hidden" id="profile_img_file" type="file" name="data[User][img]">
                            <button class="gray_btn profile_btn" type="submit">Сохранить изменения</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
