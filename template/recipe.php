<?php snippet('header') ?>

  <main >
      <h1><?php echo $page->title()->html() ?></h1>

      <section class="row">
      <? if(!$page->directions()->empty() ) :?>
      	<div class="half-width">
	      <h2>Directions</h2>
	      <ol class="directions">
		      <?php foreach($page->directions()->yaml() as $instruction): ?>
		      	<? 
		      	// This checks if the step starts with a title, if it does it doesn't put a bullet next to it. Great for inline directions!
		      	if (0 === strpos(kirbytext($instruction['step']), '<h')) :
		      		echo kirbytext($instruction['step']);
						else :
						?>
					  <li class="step">
					    <?php echo kirbytext_no_p($instruction['step']) ?>
					  </li>
					<?php endif; endforeach ?>
				</ol>
				</div>
			<? else :?>
			<p>Please add some cooking directions</p>
			<? endif ?>

			<? if(!$page->ingredients()->empty() ) :?>
	      <div class="half-width">
	      <h2>Ingredients</h2>
	      <ul class="ingredients">
		      <?php foreach($page->ingredients()->yaml() as $item): ?>
					  <li class="item">
					  <?
					  	$ingredient = markdown_no_p($item['ingredient']);
					  	$amount = markdown_no_p($item['amount']);
				  	?>
					    <?php echo $ingredient ?> – <?php echo $amount ?>
					  </li>
					<?php endforeach ?>
				</ul>
				</div>
			<? else :?>
				<p>Please add some ingredients!</p>
			<? endif ?>
			</section>
  </main>

<?php snippet('footer') ?>
