<!-- <div class="content-up">
	<a class="btn btn--add" href="/admin/comps/add?lang=ru">Добавить материал rus</a>
	<a class="btn btn--add" href="/admin/comps/add?lang=kz">Добавить материал kaz</a>
</div> -->
<table class="table">
	<thead class="thead">
		<tr>
			<th>ID</th><th>Комментарий</th><th>Название</th><th>Редактировать</th><th>Удаление</th>
		</tr>
	</thead>
	<?php foreach ($data as $item) : ?>
		<tr>
			<td><?= $item['Comp']['id']; ?></td>
			<td><?= $item['Comp']['comments']; ?></td>
			<td>
				<?= $item['Comp']['body']; ?>
			</td>
			<td>
				<a href="/admin/comps/edit/<?=$item['Comp']['id']?>">Редактировать</a> 
			 </td>
			 <td>
		<?php echo $this->Form->postLink('Удалить', array('action' => 'admin_delete', $item['Comp']['id']), array('confirm' => 'Подтвердите удаление')); ?>
					
			</td>
		</tr>
	<?php endforeach; ?>
</table>