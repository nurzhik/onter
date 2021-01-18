<h1>Вопросы с формы FAQ</h1>
<?php if(!empty($data)): ?>
<table>
	<tr>
		<th>ID</th>
		<th>Телефон</th>
		<th>Имя</th>
		<th>Email</th>
		<th>Сообщение</th>
	
		<!-- <th>Подробнее</th>	 -->
		<th>Дествия</th>	
	</tr>
 	<?php foreach($data as $item): ?>
 	<tr>
 		<td><?=$item['quetions']['id']?></td>
 		<td><?=$item['quetions']['phone']?></td>
 		<td><?=$item['quetions']['name']?></td>
 		<td><?=$item['quetions']['email']?></td>
 		<td><?=$item['quetions']['body']?></td>
 
 <!-- <td><a href="/admin/baskets/view/<?=$item['Basket']['id']?>">Подробнее</a></td> -->
 		<td><a href="/admin/baskets/edit/<?=$item['quetions']['id']?>">
			<?php echo $this->Form->postLink('Удалить', array('action' => 'admin_quetions_delete', $item['quetions']['id']), array('confirm' => 'Подтвердите удаление')); ?> </td>

	<?php endforeach ?>
	</tr>
</table>

<?php else: ?>
<p>К сожалению в данном разделе еще не добавлена информация...</p>
<?php endif ?>