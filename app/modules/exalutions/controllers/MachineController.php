<?php

Yii::import("app.modules.exalutions.forms.machine.*");

class MachineController extends Controller {
    public function filters() {
        // Use access control filter
        return ['accessControl'];
    }

    public function accessRules() {
        // Only allow authenticated users
        return [['allow', 'users' => ['@']],['deny']];
    }
    
    public function actionIndex() {
        $this->renderForm('ExalutionsMachineIndex');
    }

    public function actionNew() {
        $model = new ExalutionsMachineForm;
        if (isset($_POST["ExalutionsMachineForm"])) {
            $model->attributes = $_POST["ExalutionsMachineForm"];
            if ($model->save()) {
                $this->flash('Data Berhasil Disimpan');
                $this->redirect(['index']);
            }
        }

        $this->renderForm("ExalutionsMachineForm", $model);
    }

    public function actionUpdate($id) {
        $model = $this->loadModel($id, "ExalutionsMachineForm");
        if (isset($_POST["ExalutionsMachineForm"])) {
            $model->attributes = $_POST["ExalutionsMachineForm"];
            if ($model->save()) {
                $this->flash('Data Berhasil Disimpan');
                $this->redirect(['update', 'id' => $id]);
            }
        }
        $this->renderForm("ExalutionsMachineForm", $model);
    }

    public function actionDelete($id) {
        if (strpos($id, ',') > 0) {
            ActiveRecord::batchDelete("ExalutionsMachineForm", explode(",", $id));
            $this->flash('Data Berhasil Dihapus');
        } else {
            $model = $this->loadModel($id, "ExalutionsMachineForm");
            if (!is_null($model)) {
                $this->flash('Data Berhasil Dihapus');
                $model->delete();
            }
        }


        $this->redirect(['index']);
    }
    
}
