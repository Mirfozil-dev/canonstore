<?php

namespace app\controllers;

use app\models\Categories;
use app\models\Options;
use app\models\ProductImages;
use Yii;
use app\models\Products;
use app\models\search\ProductsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * ProductsController implements the CRUD actions for Products model.
 */
class ProductsController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();

        if(Yii::$app->user->isGuest){
            return $this->redirect('/admin/login');
        }
    }

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
     * Lists all Products models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ProductsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Products model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Products model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Products();
        $model->status = 1;

        $categories = Categories::find()->where(['status' => 1])->all();

        if (Yii::$app->request->isPost) {


            $model->load(Yii::$app->request->post());

            $model->options = serialize($_POST['Products']['options']);
            $images = UploadedFile::getInstances($model, 'images');
            $imageNames = [];
            foreach ($images as $image) {
                $imageName = rand(1000000000, 9999999999);
                $image->saveAs('uploads/products/' . $imageName . '.' . $image->extension);
                $imageNames[] = 'uploads/products/' . $imageName . '.' . $image->extension;
            }
            $model->images = serialize($imageNames);

            if ($model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }
        $options = Options::find()->all();

        return $this->render('create', [
            'model' => $model,
            'categories' => $categories,
            'options' => $options
        ]);
    }

    /**
     * Updates an existing Products model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        $categories = Categories::find()->where(['status' => 1])->all();
        if (Yii::$app->request->isPost) {
            foreach ($this->findModel($id)->getImages() as $image) {
                if (file_exists(Yii::getAlias('@web').$image)) {
                    unlink(Yii::getAlias('@web').$image);
                }
            }

            $model->load(Yii::$app->request->post());

            $model->options = serialize($_POST['Products']['options']);
            $images = UploadedFile::getInstances($model, 'images');
            $imageNames = [];
            foreach ($images as $image) {
                $imageName = rand(1000000000, 9999999999);
                $image->saveAs('uploads/products/' . $imageName . '.' . $image->extension);
                $imageNames[] = 'uploads/products/' . $imageName . '.' . $image->extension;
            }
            $model->images = serialize($imageNames);

            if ($model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }
        $options = Options::find()->all();

        return $this->render('update', [
            'model' => $model,
            'categories' => $categories,
            'options' => $options
        ]);
    }

    /**
     * Deletes an existing Products model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $model = $this->findModel($id);
        foreach ($model->getImages() as $image) {
            if (file_exists(Yii::getAlias('@web').$image)) {
                unlink(Yii::getAlias('@web').$image);
            }
        }
        $model->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Products model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Products the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Products::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
