<?php 
if ($items) { ?>
	<div class="from-around-web">
		<h6>From Around The Web</h6>
		<ul id="aroundTheWeb">
			<?php
			foreach ($items as $item) { ?>
				<li><h3><a target="_blank" href="<?php echo $item->url; ?>"><?php echo $item->title; ?></a></h3></li>
			<?php
			} ?>
		</ul>
	</div>
<?php
} ?>
