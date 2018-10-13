<?php

namespace backend\controllers;

use Yii;
use common\models\Teams;
use common\models\TeamsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * TeamsController implements the CRUD actions for Teams model.
 */
class TeamsController extends Controller
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
     * Lists all Teams models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new TeamsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Teams model.
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
     * Creates a new Teams model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Teams();

        if ($model->load(Yii::$app->request->post())) {
           
            $imageName = "team_image_".rand();
            $model->image_file = UploadedFile::getInstance($model,'image_file');
             
          
            if(!empty($model->image_file))
            {      
                $model->image_file->saveAs('../../public_html/image/team/'.$imageName.'.'.$model->image_file->extension);
                $model->image_file = $imageName.'.'.$model->image_file->extension;

                $model->save();

                return $this->redirect(['view', 'id' => $model->id]);
            }
            
            else
            {
                $model->image_file = 'default_team.png';                            
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
     * Updates an existing Teams model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $image = $model['image_file'];
        
        if ($model->load(Yii::$app->request->post())) {

            $imageName = "team_image_".rand();
           $model->image_file = UploadedFile::getInstance($model,'image_file');

           if(!empty($model->image_file)){
                $model->image_file->saveAs('../../public_html/image/team/'.$imageName.'.'.$model->image_file->extension);
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
     * Deletes an existing Teams model.
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
     * Finds the Teams model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Teams the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Teams::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
