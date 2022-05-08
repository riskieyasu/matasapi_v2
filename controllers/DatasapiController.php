<?php

namespace app\controllers;
use Yii;
use app\models\Datasapi;
use app\models\DatasapiSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\Html;
use yii\web\UploadedFile;
/**
 * DatasapiController implements the CRUD actions for Datasapi model.
 */
class DatasapiController extends Controller
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
     * Lists all Datasapi models.
     *
     * @return string
     */
    public function actionIndex()
    {
        // $searchModel = new DatasapiSearch();
        // $dataProvider = $searchModel->search($this->request->queryParams);

        // return $this->render('index', [
        //     'searchModel' => $searchModel,
        //     'dataProvider' => $dataProvider,
        // ]);
        $rows = (new \yii\db\Query())
        ->select(['id', 'namasapi'])
        ->from('datasapi')
        // ->where(['id' => 1])
        ->limit(10)
        ->all();
        
        if(Yii::$app->user->isGuest){
        $searchModel = new DatasapiSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
           }
        else if(Yii::$app->user->identity->username=='Admin'){
            $searchModel = new DatasapiSearch();
            $dataProvider = $searchModel->search($this->request->queryParams);
    
            return $this->render('index', [
                'searchModel' => $searchModel,
                'dataProvider' => $dataProvider,
            ]);
               }
           else{
    
            $data=$rows;
            return $this->printTable($data);
    }
    }


private function printTable($data)
{   $num = 0;
    $content = "<h1  style='text-align:center; margin-top:20px; color:black;'>Data kesehatan sapi anda</h1><div class='flex-container' style='height:70%; overflow-y: scroll;'>";
    foreach ($data as $datum) {
        $num += 1;
        $content .= "<div><span><i class='fas fa-cow'  style='color:white;  font-size:82px;'></i></span><br><a href='#' id = '$num' onclick=viewdata(this.id);>";
        foreach ($datum as $key => $value) {
                
                // echo $detail['value1'] . " " . $detail['value2'];
                $content .= " {$value}";
              
            
        }
        $content .= "</a></div>";
    }
    $content .= '</div>';
    
    return $this->renderContent($content);
}


    /**
     * Displays a single Datasapi model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Datasapi model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Datasapi();

        if ($this->request->isPost) {
            if ($model->load($this->request->post())) {
                $imageName = $model->namasapi;
                $model->file = UploadedFile::getInstance($model,'file');
                $model->file->saveAs('uploads/' .$imageName.'.'.$model->file->extension);
                $model->foto= 'uploads/' .$imageName.'.'.$model->file->extension;
                $model->save();
                return $this->redirect(['view', 'id' => $model->id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Datasapi model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {

        Yii::$app->db->createCommand()
        ->update('datasapi', ['date' => new \yii\db\Expression('NOW()'),], ['id' => $id])
             ->execute();


        $model = $this->findModel($id);
       
        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Datasapi model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Datasapi model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return Datasapi the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Datasapi::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
?>
<script>
    function viewdata(id){
        
        let text = document.getElementById(id).text;
        let result = parseInt(text.slice(0, 3));
        window.location.href= "index.php?r=datasapi%2Fview&id="+result+""
       
    }
// alert("test");
    $(".sapianda").css("display","block");
</script>