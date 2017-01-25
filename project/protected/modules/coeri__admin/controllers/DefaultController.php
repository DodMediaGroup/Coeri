<?php

class DefaultController extends Controller
{
	public $layout='/layouts/main';

	public function actionIndex()
	{
		$scriptsAdd = array(
            array(
                'type'=>'css',
                'file'=>'assets/admin/libs/jquery-notifyjs/styles/metro/notify-metro'
            ),
            array(
                'type'=>'js',
                'file'=>'assets/admin/libs/jquery-notifyjs/notify.min'
            ),
            array(
                'type'=>'js',
                'file'=>'assets/admin/libs/jquery-notifyjs/styles/metro/notify-metro'
            ),
            array(
                'type'=>'js',
                'file'=>'assets/admin/js/pages/notifications'
            )
        );
        $this->addScripts($scriptsAdd);
		$this->writeScripts();
		
		if (!Yii::app()->user->isGuest){
			$emailContact = GeneralValue::model()->findByPk(1);
			$phoneContact = GeneralValue::model()->findByPk(2);

			$facebook = GeneralValue::model()->findByPk(3);
			$youtube = GeneralValue::model()->findByPk(4);

			$street = GeneralValue::model()->findByPk(5);

			$this->render('index', array(
				'emailContact'=>$emailContact,
				'phoneContact'=>$phoneContact,

				'facebook'=>$facebook,
				'youtube'=>$youtube,

				'street'=>$street
			));
		}
		else
			$this->redirect(array('login'));
	}

	public function actionLogin()
	{
		$this->layout = '/layouts/login';
		$model=new LoginForm();

		// if it is ajax validation request
		if(Yii::app()->getRequest()->getIsAjaxRequest()) {
			$model->attributes=$_POST['LoginForm'];
			$model->login();
			if (CActiveForm::validate($model)!="[]")
				echo CActiveForm::validate($model);
			else{
				echo "null";
			}
			Yii::app()->end();
		}
		else{
			if (Yii::app()->user->isGuest) {
				$this->render('login',array('model'=>$model));
			}
			else{
				Yii::app()->user->setReturnUrl('index');
				$this->redirect(Yii::app()->user->returnUrl);
			}
		}
	}

	public function actionLogout(){
		Yii::app()->user->logout();
		$this->redirect(array('login'));
	}

	/**
	 * Retorna valores posibles de un autompletar.
	 */
	public function actionAutocompleteJson(){
		if(Yii::app()->request->isAjaxRequest)
		{
			$returnVal = array();

			if(isset($_GET['filter']) && isset($_GET['value'])){
				$classIn = $_GET['filter'];
				$value = $_GET['value'];
				$term = $_GET['term'];

				$criteria = new CDbCriteria;
				$criteria->select = 't.'.$value;
				$criteria->distinct = 't.'.$value;
	        	$criteria->condition = "t.".$value." LIKE :sterm";
	        	$criteria->params = array(":sterm"=>"%$term%");
				$criteria->order = 't.'.$value.' ASC';
		        $criteria->limit = min(10, 50);

				$values = $classIn::model()->findAll($criteria);

				foreach($values as $val){
					$returnVal[] = array("label"=>$val->getAttribute($value));
				}
			}

			echo CJSON::encode($returnVal);
	   }
    }
}