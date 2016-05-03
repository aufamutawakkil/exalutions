<?php

Yii::import("app.modules.exalutions.forms.banner.*");

class BannerController extends Controller {
    public function filters() {
        // Use access control filter
        return ['accessControl'];
    }

    public function accessRules() {
        // Only allow authenticated users
        return [['allow', 'users' => ['@']],['deny']];
    }
    
    public function actionIndex() {
        $this->renderForm('ExalutionsBannerIndex');
    }

    public function actionNew() {
        $model = new ExalutionsBannerForm;
        if (isset($_POST["ExalutionsBannerForm"])) {
            $model->attributes = $_POST["ExalutionsBannerForm"];
            //vdump($model->attributes);die();
            if ($model->save()) {
                $this->flash('Data Berhasil Disimpan');
                $this->redirect(['index']);
            }else{ var_dump( $model->errors ); die();}
        }

        $this->renderForm("ExalutionsBannerForm", $model);
    }

    public function actionUpdate($id) {
        $model = $this->loadModel($id, "ExalutionsBannerForm");
        if (isset($_POST["ExalutionsBannerForm"])) {
            $model->attributes = $_POST["ExalutionsBannerForm"];
            if ($model->save()) {
                $this->flash('Data Berhasil Disimpan');
                $this->redirect(['update', 'id' => $id]);
            }
        }
        $this->renderForm("ExalutionsBannerForm", $model);
    }

    public function actionDelete($id) {
        if (strpos($id, ',') > 0) {
            ActiveRecord::batchDelete("ExalutionsBannerForm", explode(",", $id));
            $this->flash('Data Berhasil Dihapus');
        } else {
            $model = $this->loadModel($id, "ExalutionsBannerForm");
            if (!is_null($model)) {
                $this->flash('Data Berhasil Dihapus');
                $model->delete();
            }
        }


        $this->redirect(['index']);
    }
    
}
