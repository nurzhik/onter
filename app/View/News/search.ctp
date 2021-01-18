<div class="breadcrumbs_item_container">
	<a href="/" class="breadcrumbs_item">Home page</a>
	<a class="breadcrumbs_item">SEARCH</a>
</div>

<div class="content">
<?php if(!is_array($search_res)) : ?>
	<h3><?=$search_res;?></h3>
<?php elseif(!empty($search_res)): ?>
	<ul class="news_list">
	<?php foreach($search_res as $item): ?>
		<li>
			<div class="news_item">
				<div class="news_img">
					<img src="/img/news/thumbs/<?=$item['News']['img'] ?>" alt="<?=$item['News']['title'] ?>">
				</div>
				<div class="title_min">
					<h3><?=$item['News']['title'] ?></h3>
				</div>
				<div class="date"><?=$item['News']['date'] ?></div>
				<p><?= $this->Text->truncate(strip_tags($item['News']['body']), 850, array('ellipsis' => '...', 'exact' => true)) ?></p>
				<a href="/news/view/<?=$item['News']['id'] ?>" class="read_more">Read more</a>
			</div>
		</li>
		<?php endforeach ?>
	</ul>

	<div class="pagination">
		<div class="pages">
			<div class="pages_list">
				<strong>Page:</strong>
	<?php 
	echo $this->Paginator->counter(array(
	'separator' => ' of a total of ',

	));
	?>
	</div> 
<div class="page_item">

	<?php echo $this->Paginator->first('<<', (array('class' => 'first'))); ?>
				<ol>
	<?php echo $this->Paginator->numbers(
	array(
	'separator' => '',
	'tag' => 'li',
	'modulus' => 2
	)
	); ?>
					<!-- <li class="current">1</li>
					<li><a href="#">2</a></li>
					<li> <a class="next i-next" href="#" title="Next"></a> </li> -->
				</ol>
	<?php echo $this->Paginator->last('>>' ,(array('class' => 'last'))); ?>
	</div>
			</div>
		</div>
		<?php else: ?>
		<h3>Nothing found...</h3>
<?php endif; ?>
</div>