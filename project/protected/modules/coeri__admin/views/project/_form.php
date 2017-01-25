<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'news-form',
    'enableAjaxValidation'=>false,
    'htmlOptions'=>array(
        'role'=>'form',
        'enctype'=>"multipart/form-data",
    )
)); ?>
	<div class="row">
		<?php if($form->errorSummary($model) != ""){ ?>
			<div class="col-sm-12">
	            <div class="alert alert-danger">
	                <?php echo $form->errorSummary($model); ?>
	            </div>
	        </div>
        <?php } ?>
		<div class="col-sm-6">
			<div class="widget">
				<div class="widget-header transparent">
					<h2><strong>Entrada</strong></h2>
					<div class="additional-btn">
						<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
					</div>
				</div>
				<div class="widget-content padding">
					<div class="form-group">
						<?php echo $form->labelEx($model,'Nombre del proyecto'); ?>
        				<?php echo $form->textField($model,'title',array('class'=>'form-control','maxlength'=>255,'placeholder'=>'Título','required'=>true)); ?>
					</div>
					<div class="form-group">
						<?php echo $form->labelEx($model,'link'); ?>
        				<?php echo $form->textField($model,'link',array('class'=>'form-control','maxlength'=>255,'placeholder'=>'Url de la página WEB','required'=>true)); ?>
					</div>
					<div class="form-group">
						<div class="imag-before-upload" style="background-image: url(<?php echo Yii::app()->request->baseUrl; ?>/images/admin/gray.jpg); max-width: 180px;">
							<?php if(!$model->isNewRecord && $model->image != ""){ ?>
								<div class="img" style="background-image: url(<?php echo Yii::app()->request->baseUrl; ?>/images/projects/250x250/<?php echo $model->image; ?>)"></div>
							<?php } ?>
						</div>
						<input type="file" accept="image/*" class="btn btn-default js-show-before" name="image" data-before=".imag-before-upload" title="<?php echo ($model->isNewRecord)?'Agregar Imagen':'Cambiar Imagen' ?>">
						<p class="help-block"><strong>Nota: </strong> Peso maximo 200Kb.</p>
						<p class="help-block"><strong>Tamaño recomendado: </strong> 250x250 Pixeles.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="col-sm-12">
					<div class="widget">
						<div class="widget-header">
							<h2><strong>Entrada</strong></h2>
							<div class="additional-btn">
								<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
							</div>
						</div>
							<div class="widget-content padding">
								<div class="form-group">
									<?php echo $form->textArea($model,'text',array('class'=>'js-ckeditor')); ?>
								</div>
							</div>
						</div>
				</div>
		<div class="col-sm-12">
			<div class="form-group">
				<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar', array('class'=>'btn btn-success')); ?>
                <a href="<?php echo $this->createUrl('news/admin'); ?>" class="btn btn-danger">Cancelar</a>
			</div>
		</div>
	</div>
<?php $this->endWidget(); ?>