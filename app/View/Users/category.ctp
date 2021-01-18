 <div class="big-slogan">
                   Свадебные платья напрокат в Астане - prokatastana
                </div>
                <ul class="breadcrumbs">
                    <li class="breadcrumbs-item">
                    <a href="/" class="breadcrumbs-item__link">Главная   </a>  </li>
                    <li class="breadcrumbs-item"> Свадебные платья напрокат в Астане - prokatastana</li>
                </ul>
                <aside class="side-bar">
                    <ul class="cabinet-list">
                        <li class="cabinet-list__item active">
                            <a href="" class="cabinet-list__item--link ">
                                Общая информация
                            </a>
                        </li>
                        <li class="cabinet-list__item">
                            <a href="/users/category" class="cabinet-list__item--link">
                                Свадебные платья
                            </a>
                        </li>
                        <li class="cabinet-list__item">
                            <a href="/users/accessory" class="cabinet-list__item--link">
                                Аксессуары
                            </a>
                        </li>
                    </ul>
                </aside>
<div class="content-product">
 <?php if(!empty($category)): ?>
 	<div class="edit-product">
 		<div class="edit-product_head">
			<p>Картинка  </p>
			<p> Название товара	</p>
			<p>Редактирование</p>
			<p>Удаление</p>
 		</div>
		<ul class="edit-product_body">
			
			<?php foreach($category['Product'] as $item): ?>
				<li class="edit-product_item">
					<div class="edit-product_item-container">	
						<div class="product-item product_img">
							<img src="/img/product/thumbs/<?=$item['img']?>">
						</div>
						<div class="product-item product_name">
							<?=$item['title']?>
						</div>
						<div class="product-item edit">
							<a href="/users/edit/<?=$item['id']?>" class="button edit">Редактировать</a>
						</div>
						<div class="product-item delete">
							<?php echo $this->Form->postLink('Удалить', array('action' => 'admin_delete', $item['id']), array('confirm' => 'Подтвердите удаление')); ?>
						</div>
					</div>
				</li>
			<?php endforeach ?>
		</ul>
 	</div>


<?php else: ?>
<p>К сожалению в данном разделе еще не добавлена информация...</p>
<?php endif ?>
</div>