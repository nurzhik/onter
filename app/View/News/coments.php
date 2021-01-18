<section class="page">
            <div class="container">
                <ul class="breadcrumbs">
                <li><a href="/">Басты бет</a></li>
                
                <li>
                    <?php if($data['Article']['category_id'] == 1): ?>
                        <a class="news_type" href="/baspanaga-bagyt">Баспанаға бағыт</a>
                    <?php endif ?>
                    <?php if($data['Article']['category_id'] == 5): ?>
                        <a class="news_type" href="/menin-kasybim">Менің кәсібім</a>
                    <?php endif ?>
                    <?php if($data['Article']['category_id'] == 6): ?>
                        <a class="news_type" href="/karzhilik-sauat"> Қаржылық сауат</a>
                    <?php endif ?>
                    <?php if($data['Article']['category_id'] == 7): ?>
                        <a class="news_type" href="/biznesti-koldau">   Бизнесті қолдау</a>
                    <?php endif ?>
                    <?php if($data['Article']['category_id'] == 8): ?>
                        <a class="news_type" href="/maman-pikiri">       Маман пікірі</a>
                    <?php endif ?> 
                    <?php if($data['Article']['category_id'] == 9): ?>
                        <a class="news_type" href="/news">  Жаңалықтар</a>   
                    <?php endif ?>  
               </li>
                <li><a><?php echo $data['Article']['title']; ?></a></li>
            </ul>
            <div class="page_container">
                <div class="page_content news_content">
                    <!-- <div class="news_sidebar">
                        <img class="sidebar_banner" src="/img/banner_small.jpg" alt="">
                    </div> -->
                    <div class="news_inner">
                        <?php if($data['Article']['category_id'] == 1): ?>
                            <a class="news_type" href="/baspanaga-bagyt">Баспанаға бағыт</a>
                        <?php endif ?>
                        <?php if($data['Article']['category_id'] == 5): ?>
                            <a class="news_type" href="/menin-kasybim">Менің кәсібім</a>
                        <?php endif ?>
                        <?php if($data['Article']['category_id'] == 6): ?>
                            <a class="news_type" href="/karzhilik-sauat"> Қаржылық сауат</a>
                        <?php endif ?>
                        <?php if($data['Article']['category_id'] == 7): ?>
                            <a class="news_type" href="/biznesti-koldau">   Бизнесті қолдау</a>
                        <?php endif ?>
                        <?php if($data['Article']['category_id'] == 8): ?>
                            <a class="news_type" href="/maman-pikiri">       Маман пікірі</a>
                        <?php endif ?> 
                        <?php if($data['Article']['category_id'] == 9): ?>
                            <a class="news_type" href="/news">  Жаңалықтар</a>   
                        <?php endif ?> 
                        
                        <h1 class="news_title"><?php echo $data['Article']['title']; ?></h1>
                        <div class="news_info">
                                <div class="news_inner_date"><?php echo $this->Time->format($data['Article']['date'], '%d.%m.%Y', 'invalid'); ?></div>
                                <div class="news_icon_block flex">
                                    <div class="news_icon news_time"><?php echo $data['Article']['reading_time']; ?> мин</div>
                                    <div class="news_icon news_comment"><?php echo $data['Article']['count_comment']; ?></div>
                                    <div class="news_icon news_rating"><?php echo $data['Article']['views']; ?></div>
                                </div>
                            </div>
                            <div class="news_text_block">
                                 <img src="/img/articles/<?php echo $data['Article']['img']; ?>" alt="<?php echo $data['Article']['title']; ?>">
                                <?php echo $data['Article']['body']; ?>
                                <!-- <div class="insta-block">
                                     <?php echo $data['Article']['code_instagram']; ?>
                                </div> -->
                                <div class="share_block">
                                    <div class="share_block__text">Әлеуметтік желілерде бөлісу</div>
                                    <script src="https://yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
                                    <script src="https://yastatic.net/share2/share.js"></script>
                                    <div class="ya-share2" data-services="vkontakte,facebook,whatsapp,telegram"></div>
                                </div>

                            </div>

                            <div class="comment_block">
                                <div class="comment_top">
                                    <div class="total_comment"><span><?php echo $data['Article']['count_comment']; ?></span> Пікір</div>
                                    <div class="comment_btn"></div>
                                </div>

                                <div class="comment_content">

                                    <form class="comment_form" action="/comments/add" method="POST">
                                        <input type="hidden" name="data[material_id]" value="<?=$data['Article']['id']?>">
                                        <input type="hidden" name="data[parent_id]" value="0">
                                        <input type="hidden" name="data[type]" value="<?php echo $data['Article']['title']; ?>">
                                        <div class="input_block">
                                            <!-- <div class="comment_img">
                                                <img src="img/user_1.png" alt="">
                                            </div> -->
                                            <div class="comment_inputs">
                                                <input type="text" placeholder="Атыңыз" name="data[name]">
                                                <input type="text" placeholder="Пікіріңіз" name="data[body]" required>
                                            </div>
                                        </div>
                                        <div class="form_buttons">
                                            <button class="form_btn green_btn" type="submit">Пікірді жіберу</button>
                                        </div>
                                    </form>

                                    <div class="comment_list">
                                        <?php $i=0 ?>
                                        <?php foreach($cat_t as $item): ?>
                                            <?php if($item['Comment']['parent_id'] == 0):?>
                                                 <div class="comment_item">
                                                    <div class="comment_info">
                                                        <div class="comment_name">
                                                            <div><?=$item['Comment']['name']?></div>
                                                            <div class="comment_time"><?= $this->Time->format($item['Comment']['created'], '%d.%m.%Y', 'invalid')?></div>
                                                        </div>
                                                        <div class="comment_text"><?=$item['Comment']['body']?></div>
                                                        <a class="comment_link" href="javascript:;">Жауап беру</a>
                                                        <form class="comment_form comment_answer_form" action="/comments/add" method="POST">
                                                                <input type="hidden" name="data[material_id]" value="<?=$data['Article']['id']?>">
                                                                <input type="hidden" name="data[parent_id]" value="<?=$item['Comment']['id']?>">
                                                                <input type="hidden" name="data[type]" value="<?php echo $data['Article']['title']; ?>">
                                                              
                                                                <div class="input_block">
                                                                    <div class="comment_inputs">
                                                                        <input type="text" placeholder="Атыңыз" name="data[name]">
                                                                        <input type="text" placeholder="Пікіріңіз" name="data[body]" required>
                                                                    </div>
                                                                </div>
                                                                <div class="form_buttons">
                                                                        <a class="form_btn answer_cancel_btn" href="javascript:;">Жабу</a>
                                                                    <button class="form_btn green_btn" type="submit">Пікірді жіберу</button>
                                                                </div>
                                                        </form>
                                                        <?php if(!empty($item['children'])): ?>
                                                                <div class="comment_answer_list">
                                                                    <?php foreach($item['children'] as $child): ?>
                                                                        <div class="comment_item">
                                                                            <div class="comment_info">
                                                                                <div class="comment_name">
                                                                                    <div><?=$child['Comment']['name']?></div>
                                                                                    <div class="comment_time"><?= $this->Time->format($child['Comment']['created'], '%d.%m.%Y', 'invalid')?></div>
                                                                                </div>
                                                                                <div class="comment_text"><?=$child['Comment']['body']?></div>
                                                                                <a class="comment_link" href="javascript:;">Жауап беру</a>
                                                                                <form class="comment_form comment_answer_form" action="/comments/add" method="POST">
                                                                                        <input type="hidden" name="data[material_id]" value="<?=$data['Article']['id']?>">
                                                                                        <input type="hidden" name="data[parent_id]" value="<?=$child['Comment']['id']?>">
                                                                                        <input type="hidden" name="data[type]" value="<?php echo $data['Article']['title']; ?>">
                                                                                      
                                                                                        <div class="input_block">
                                                                                            <div class="comment_inputs">
                                                                                                <input type="text" placeholder="Атыңыз" name="data[name]">
                                                                                                <input type="text" placeholder="Пікіріңіз" name="data[body]" required>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="form_buttons">
                                                                                                <a class="form_btn answer_cancel_btn" href="javascript:;">Жабу</a>
                                                                                            <button class="form_btn green_btn" type="submit">Пікірді жіберу</button>
                                                                                        </div>
                                                                                </form>
                                                                                <?php if(!empty($item['children'])): ?>
                                                                                    <div class="comment_answer_list">
                                                                                        <?php foreach($child['children'] as $child): ?>
                                                                                            <div class="comment_item">
                                                                                                <div class="comment_info">
                                                                                                    <div class="comment_name">
                                                                                                        <div><?=$child['Comment']['name']?></div>
                                                                                                        <div class="comment_time"><?= $this->Time->format($child['Comment']['created'], '%d.%m.%Y', 'invalid')?></div>
                                                                                                    </div>
                                                                                                    <div class="comment_text"><?=$child['Comment']['body']?></div>
                                                                                                    <a class="comment_link" href="javascript:;">Жауап беру</a>
                                                                                                    <form class="comment_form comment_answer_form" action="/comments/add" method="POST">
                                                                                                            <input type="hidden" name="data[material_id]" value="<?=$data['Article']['id']?>">
                                                                                                            <input type="hidden" name="data[parent_id]" value="<?=$child['Comment']['id']?>">
                                                                                                            <input type="hidden" name="data[type]" value="<?php echo $data['Article']['title']; ?>">
                                                                                                          
                                                                                                            <div class="input_block">
                                                                                                                <div class="comment_inputs">
                                                                                                                    <input type="text" placeholder="Атыңыз" name="data[name]">
                                                                                                                    <input type="text" placeholder="Пікіріңіз" name="data[body]" required>
                                                                                                                </div>
                                                                                                            </div>
                                                                                                            <div class="form_buttons">
                                                                                                                    <a class="form_btn answer_cancel_btn" href="javascript:;">Жабу</a>
                                                                                                                <button class="form_btn green_btn" type="submit">Пікірді жіберу</button>
                                                                                                            </div>
                                                                                                    </form>
                                                                                                </div>
                                                                                            </div>
                                                                                        <?php endforeach ?>
                                                                                    </div>
                                                                            <?php endif ?>
                                                                            </div>
                                                                        </div>
                                                                    <?php endforeach ?>
                                                                </div>
                                                        <?php endif ?>
                                                    </div>
                                                </div>
                                            <?php endif?>
                                            <?php $i++; ?>
                                        <?php endforeach ?>
                                        
                                        
                                    </div>
                                   
                                    <a class="comment_more" href="javascript:;">Тағы көру</a>
                                </div>
                               
                            </div>
                    </div>
                </div>
                <?=$this->element('sidebar') ?>
            </div>
            </div>
        </section>