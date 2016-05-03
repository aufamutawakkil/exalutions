<?php

Yii::import("app.modules.exalutions.forms.ink.*");

class InkController extends Controller {
    public function filters() {
        // Use access control filter
        return ['accessControl'];
    }

    public function accessRules() {
        // Only allow authenticated users
        return [['allow', 'users' => ['@']],['deny']];
    }
    
    public function actionIndex() {
        $this->renderForm('ExalutionsInkIndex');
    }

    public function actionNew() {
        $model = new ExalutionsInkForm;
        if (isset($_POST["ExalutionsInkForm"])) {
            $model->attributes = $_POST["ExalutionsInkForm"];
            if ($model->save()) {
                $this->flash('Data Berhasil Disimpan');
                $this->redirect(['index']);
            }
        }

        $this->renderForm("ExalutionsInkForm", $model);
    }

    public function actionUpdate($id) {
        $model = $this->loadModel($id, "ExalutionsInkForm");
        if (isset($_POST["ExalutionsInkForm"])) {
            $model->attributes = $_POST["ExalutionsInkForm"];
            if ($model->save()) {
                $this->flash('Data Berhasil Disimpan');
                $this->redirect(['update', 'id' => $id]);
            }
        }
        $this->renderForm("ExalutionsInkForm", $model);
    }

    public function actionDelete($id) {
        if (strpos($id, ',') > 0) {
            ActiveRecord::batchDelete("ExalutionsInkForm", explode(",", $id));
            $this->flash('Data Berhasil Dihapus');
        } else {
            $model = $this->loadModel($id, "ExalutionsInkForm");
            if (!is_null($model)) {
                $this->flash('Data Berhasil Dihapus');
                $model->delete();
            }
        }


        $this->redirect(['index']);
    }
    
}
