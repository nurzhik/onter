<h1>Заявки услуги</h1>
<?php if(!empty($data)): ?>
<table>
	<tr>
		<th>ID</th>
		<th>Телефон</th>
		<th>Имя</th>
		<th>Email</th>
		<th>Услуга</th>
	
		<!-- <th>Подробнее</th>	 -->
		<th>Дествия</th>	
	</tr>
 	<?php foreach($data as $item): ?>
 	<tr>
 		<td><?=$item['servicecallbacks']['id']?></td>
 		<td><?=$item['servicecallbacks']['phone']?></td>
 		<td><?=$item['servicecallbacks']['name']?></td>
 		<td><?=$item['servicecallbacks']['email']?></td>
 		<td><?=$item['servicecallbacks']['type_service']?></td>
 
 <!-- <td><a href="/admin/baskets/view/<?=$item['Basket']['id']?>">Подробнее</a></td> -->
 		<td>
			<?php echo $this->Form->postLink('Удалить', array('action' => 'admin_servicecallbacks_delete', $item['servicecallbacks']['id']), array('confirm' => 'Подтвердите удаление')); ?> </td>

	<?php endforeach ?>
	</tr>
</table>

<?php else: ?>
<p>К сожалению в данном разделе еще не добавлена информация...</p>
<?php endif ?>