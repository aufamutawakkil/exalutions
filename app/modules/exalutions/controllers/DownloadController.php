<?php

Yii::import("app.modules.exalutions.forms.download.*");

class DownloadController extends Controller {
    public function filters() {
        // Use access control filter
        return ['accessControl'];
    }

    public function accessRules() {
        // Only allow authenticated users
        return [['allow', 'users' => ['@']],['deny']];
    }
    
    public function actionIndex() {
        $this->renderForm('ExalutionsDownloadIndex');
    }

    public function actionNew() {
        $model = new ExalutionsDownloadForm;
        if (isset($_POST["ExalutionsDownloadForm"])) {
            $model->attributes = $_POST["ExalutionsDownloadForm"];
            if ($model->save()) {
                $this->flash('Data Berhasil Disimpan');
                $this->redirect(['index']);
            }
        }

        $this->renderForm("ExalutionsDownloadForm", $model);
    }

    public function actionUpdate($id) {
        $model = $this->loadModel($id, "ExalutionsDownloadForm");
        if (isset($_POST["ExalutionsDownloadForm"])) {
            $model->attributes = $_POST["ExalutionsDownloadForm"];
            if ($model->save()) {
                $this->flash('Data Berhasil Disimpan');
                $this->redirect(['update', 'id' => $id]);
            }
        }
        $this->renderForm("ExalutionsDownloadForm", $model);
    }

    public function actionDelete($id) {
        if (strpos($id, ',') > 0) {
            ActiveRecord::batchDelete("ExalutionsDownloadForm", explode(",", $id));
            $this->flash('Data Berhasil Dihapus');
        } else {
            $model = $this->loadModel($id, "ExalutionsDownloadForm");
            if (!is_null($model)) {
                $this->flash('Data Berhasil Dihapus');
                $model->delete();
            }
        }


        $this->redirect(['index']);
    }
    
}
