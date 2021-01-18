<div class="cabinet">
			<div class="container">
				<div class="cabinet-asside">
					<ul class="side-bar">
						<li>
							<a href="/<?=$lang?>users/cabinet" >
								Редактирования данных о себе
							</a>
						</li>
						<li>
							<a href="lch_cabinet_expert_history_payment.html" >
								История оплаты
							</a>
						</li>
						<li>
							<a href="lch_cabinet_expert_webinars.html">
								Вебинары
							</a>
						</li>
						<li>
							<a href="lch_cabinet_expert_paid_webinars.html">
								Платные вебинары 
							</a>
						</li>
						<li>
							<a href="lch_cabinet_expert_knowledge_base.html">
								База знаний
							</a>
						</li>
						<li>
							<a href="" class="active">
								Тесты
							</a>
						</li>
						<li>
							<a href="lch_cabinet_expert_peer_review.html">
								Оценка коллег
							</a>
						</li>
					</ul>
				</div>
				<div class="cabinet-content">
					<div class="table">
						<table>
							<thead>
								<tr>
									<th>
										№
									</th>
									<th>
										Наименование теста
									</th>
									<th>
										Дата
									</th>
									<th>
										Результат
									</th>
									<th>
										Действие
									</th>
								</tr>
							</thead>
							<tbody>
								<?php $i = 1; ?>
								<?php foreach($tests as $item): ?>
								<tr>
									<td>
										<?=$i?>
									</td>
									<td>
										<?php echo $item['Test']['title_ru'] ?>
									</td>
									<td>
										<?php echo $item['Test']['created'] ?>
									</td>
									<td>
										0/50
									</td>
									<td>
										<a href="/<?=$lang?>tests/view/<?php echo $item['Test']['id'] ?>" class="link">
											Пройти тест
										</a>
									</td>
								</tr>
								<?php $i++; ?>
								<?php endforeach ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>