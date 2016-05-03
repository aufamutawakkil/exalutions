<?php

Yii::import("app.modules.exalutions.forms.sparePart.*");

class SparePartController extends Controller {
    public function filters() {
        // Use access control filter
        return ['accessControl'];
    }

    public function accessRules() {
        // Only allow authenticated users
        return [['allow', 'users' => ['@']],['deny']];
    }
    
    public function actionIndex() {
        $this->renderForm('ExalutionsSparePartIndex');
    }

    public function actionNew() {
        $model = new ExalutionsSparePartForm;
        if (isset($_POST["ExalutionsSparePartForm"])) {
            $model->attributes = $_POST["ExalutionsSparePartForm"];
            if ($model->save()) {
                $this->flash('Data Berhasil Disimpan');
                $this->redirect(['index']);
            }
        }

        $this->renderForm("ExalutionsSparePartForm", $model);
    }

    public function actionUpdate($id) {
        $model = $this->loadModel($id, "ExalutionsSparePartForm");
        if (isset($_POST["ExalutionsSparePartForm"])) {
            $model->attributes = $_POST["ExalutionsSparePartForm"];
            if ($model->save()) {
                $this->flash('Data Berhasil Disimpan');
                $this->redirect(['update', 'id' => $id]);
            }
        }
        $this->renderForm("ExalutionsSparePartForm", $model);
    }

    public function actionDelete($id) {
        if (strpos($id, ',') > 0) {
            ActiveRecord::batchDelete("ExalutionsSparePartForm", explode(",", $id));
            $this->flash('Data Berhasil Dihapus');
        } else {
            $model = $this->loadModel($id, "ExalutionsSparePartForm");
            if (!is_null($model)) {
                $this->flash('Data Berhasil Dihapus');
                $model->delete();
            }
        }


        $this->redirect(['index']);
    }
    
}
