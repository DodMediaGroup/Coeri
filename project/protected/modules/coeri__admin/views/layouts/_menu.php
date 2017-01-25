<?php $path = explode("/",Yii::app()->request->pathInfo); ?>
<li>
	<a href='<?php echo $this->createUrl('index/') ?>' class="<?php echo (count($path) > 1)?((strtolower($path[1]) == 'index')?'active':''):'active'; ?>">
		<i class='icon-home-3'></i>
		<span>Dashboard</span>
	</a>
</li>

<li>
	<a href='<?php echo $this->createUrl('project/admin') ?>' class="<?php echo (count($path) > 1)?((strtolower($path[1]) == 'project')?'active':''):''; ?>">
		<i class='icon-layout'></i>
		<span>Proyectos</span>
	</a>
</li>