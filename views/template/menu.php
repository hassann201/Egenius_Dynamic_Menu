	
<!-- FOr dynamic menu :: come from DB -->
<div class="wrapper">
<div class="mainmenu_area">
		

		<div class="mainmenu">  


		<ul id="nav">
		<?php foreach($menu as $item): ?>

		<?php if($item->submenu): ?>
		<li><a href="<?php echo base_url();?>categories/get/<?php echo $item->id;?>"><?php echo $item->mainmenu;?></a></a>

		<ul>


		<li><a href="<?php echo base_url();?>categories/get/<?php echo $item->id;?>"><?php echo $item->submenu;?></a></li>

		</ul>
		</li>
		<?php else: ?>
		<li><a href="<?php echo base_url();?>categories/get/<?php echo $item->id;?>"><?php echo $item->mainmenu;?></a></li>
		<?php endif;?>
 
   <?php endforeach; ?>


</ul>

	</div>


	</div>
	</div>