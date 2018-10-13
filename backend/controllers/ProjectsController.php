<?php

namespace backend\controllers;

use Yii;
use common\models\Projects;
use common\models\ProjectsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * ProjectsController implements the CRUD actions for Projects model.
 */
class ProjectsController extends Controller
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
     * Lists all Projects models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ProjectsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Projects model.
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
     * Creates a new Projects model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Projects();

        if ($model->load(Yii::$app->request->post())) {
           
            $imageName = "project_image_".rand();
            $model->image_file = UploadedFile::getInstance($model,'image_file');
             
          
            if(!empty($model->image_file))
            {      
                $model->image_file->saveAs('../../public_html/image/project/'.$imageName.'.'.$model->image_file->extension);
                $model->image_file = $imageName.'.'.$model->image_file->extension;

                $model->save();

                return $this->redirect(['view', 'id' => $model->id]);
            }
            
            else
            {
                $model->image_file = 'default_service.png';                            
                $model->save();
                return $this->redirect(['view', 'id' => $model->id]);
            }
        } 
        else
        {
            return $this->render('create', [
                'model' => $model, 
            ]);
        }
    }

    /**
     * Updates an existing Projects model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $image = $model['image_file'];
        if ($model->load(Yii::$app->request->post())) {

            $imageName = "project_image_".rand();
           $model->image_file = UploadedFile::getInstance($model,'image_file');

           if(!empty($model->image_file)){
                $model->image_file->saveAs('../../public_html/image/project/'.$imageName.'.'.$model->image_file->extension);
                  echo $imageName.'.'.$model->image_file->extension;
                   $model->image_file = $imageName.'.'.$model->image_file->extension;
                   $model->save();
            }else{
                

                $model->image_file = $image;
                $model->save();
            }
             return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Projects model.
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
     * Finds the Projects model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Projects the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Projects::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
