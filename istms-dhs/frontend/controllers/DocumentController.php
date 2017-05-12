<?php

namespace frontend\controllers;

use Yii;
use app\models\Documents;
use app\models\DocumentsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * DocumentController implements the CRUD actions for Documents model.
 */
Yii::$app->params['fileUploadUrl'] = Yii::$app->basePath . '/documents/files/';
class DocumentController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Documents models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new DocumentsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Documents model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Documents model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    
    public function actionCreate()
    {
    $model = new Documents();
    if ($model->load(Yii::$app->request->post())) 
    {      
        $project =$model->doc_name;
        $model->upload_file= UploadedFile::getInstance($model,'doc_file');
        $model->upload_file->saveAs('uploads/'.$project.'.'.$model->upload_file->extension);
        $model->doc_file='uploads/'.$project.'.'.$model->upload_file->extension;
        $model->save();

        Yii::$app->getSession()->setFlash('success','Data saved!');
        return $this->redirect(['view','id'=> $model->reference_no]);
        } 

        else {

        return $this ->render('create', [
            'model'=>$model,
        ]);
        }         

    }

    /**
     * Updates an existing Documents model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $current_image = $model->upload_file;
        if ($model->load(Yii::$app->request->post())) {         
        $project =$model->doc_name;
        $model->upload_file= UploadedFile::getInstance($model,'doc_file');
        if(!empty($model->upload_file) && $model->upload_file->size !== 0) {
            //print_R($image);die;
        $model->upload_file->saveAs('uploads/'.$project.'.'.$model->upload_file->extension);
        $model->doc_file='uploads/'.$project.'.'.$model->upload_file->extension;
        }
        else
        $model->upload_file = $current_image;
        $model->save();
          Yii::$app->getSession()->setFlash('success','Data updated!');
        return $this->redirect(['view', 'id' => $model->reference_no]);
    } else {
        return $this->render('update', [
            'model' => $model,
        ]);
    }
    }
    /**
     * Deletes an existing Documents model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();
        
        return $this->redirect(['index']);
    }

    /**
     * Finds the Documents model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Documents the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Documents::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    public function actionDownload($id) 
{ 
        $download = Documents::findOne($id); 
         $path=Yii::getAlias('@webroot').'/'.$download->doc_file;
        if (file_exists($path)) {
            return Yii::$app->response->sendFile($path);
        } else {
            throw new NotFoundHttpException("can't find {$download->doc_file} file");
        }

}

}
