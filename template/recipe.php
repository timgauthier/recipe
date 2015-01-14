<?php snippet('header') ?>

  <main class="main" role="main">

    <div class="text grid-base">
      <h1><?php echo $page->title()->html() ?></h1>
      
      <? if(!$page->ingredients()->empty() ) :?>
	      <div class="half-grid">
	      <h2>Ingredients</h2>
	      <ul class="ingredients">
		      <?php foreach($page->ingredients()->yaml() as $item): ?>
					  <li class="item">
					    <?php echo $item['ingredient'] ?> – <?php echo $item['amount'] ?>
					  </li>
					<?php endforeach ?>
				</ul>
				</div>
			<? else :?>
				<p>Please add some ingredients!</p>
			<? endif ?>

      <? if(!$page->directions()->empty() ) :?>
      	<div class="half-grid">
	      <h2>Directions</h2>
	      <ol class="directions">
		      <?php foreach($page->directions()->yaml() as $instruction): ?>
					  <li class="step">
					    <?php echo $instruction['step'] ?>
					  </li>
					<?php endforeach ?>
				</ol>
				</div>
			<? else :?>
			<p>Please add some cooking directions</p>
			<? endif ?>


    </div>

  </main>

<?php snippet('footer') ?>
