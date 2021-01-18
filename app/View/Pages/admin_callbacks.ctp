<h1>Обратная связь</h1>
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
 		<td><?=$item['callbacks']['id']?></td>
 		<td><?=$item['callbacks']['phone']?></td>
 		<td><?=$item['callbacks']['name']?></td>
 		<td><?=$item['callbacks']['email']?></td>
 		<td><?=$item['callbacks']['body']?></td>
 
 <!-- <td><a href="/admin/baskets/view/<?=$item['Basket']['id']?>">Подробнее</a></td> -->
 		<td><a href="/admin/baskets/edit/<?=$item['callbacks']['id']?>">
			<?php echo $this->Form->postLink('Удалить', array('action' => 'admin_callbacks_delete', $item['callbacks']['id']), array('confirm' => 'Подтвердите удаление')); ?> </td>

	<?php endforeach ?>
	</tr>
</table>

<?php else: ?>
<p>К сожалению в данном разделе еще не добавлена информация...</p>
<?php endif ?>