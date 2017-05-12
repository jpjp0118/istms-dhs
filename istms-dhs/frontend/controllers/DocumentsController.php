<?php
 
namespace appcontrollers;
 
use Yii;
use yii\web\Controller;
use frontend\models\Documents;
 
class DocumentsController extends Controller
{
 
	public function actionDocuments()
	{
		$model = new Documents();
	
		// if the post data is set, the user submitted the form
		if ($model->load(Yii::$app->request->post())) {
			
			// in that case, validate the data
			if ($model->validate()) {
				
				// save it to the database
				$model->save();		
				return;
			}
		}
	
		// by default, diplay the form
		return $this->render('documents', [
			'model' => $model,
		]);
	}
}