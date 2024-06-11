<?php

namespace app\controllers;

use app\models\Master;
use app\models\MasterSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MasterController implements the CRUD actions for Master model.
 */
class MasterController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Master models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new MasterSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Master model.
     * @param int $id_msr Id Msr
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_msr)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_msr),
        ]);
    }

    /**
     * Creates a new Master model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Master();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_msr' => $model->id_msr]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Master model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_msr Id Msr
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_msr)
    {
        $model = $this->findModel($id_msr);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_msr' => $model->id_msr]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Master model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_msr Id Msr
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_msr)
    {
        $this->findModel($id_msr)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Master model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_msr Id Msr
     * @return Master the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_msr)
    {
        if (($model = Master::findOne(['id_msr' => $id_msr])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
