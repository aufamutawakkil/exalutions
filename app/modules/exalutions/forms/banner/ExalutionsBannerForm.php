<?php

class ExalutionsBannerForm extends Banner {

    public function getForm() {
        return array (
            'title' => 'Detail Banner ',
            'layout' => array (
                'name' => 'full-width',
                'data' => array (
                    'col1' => array (
                        'type' => 'mainform',
                    ),
                ),
            ),
        );
    }

    public function getFields() {
        return array (
            array (
                'linkBar' => array (
                    array (
                        'label' => 'Kembali',
                        'icon' => 'chevron-left',
                        'options' => array (
                            'href' => 'url:/exalutions/banner/index',
                        ),
                        'type' => 'LinkButton',
                    ),
                    array (
                        'label' => 'Simpan',
                        'buttonType' => 'success',
                        'icon' => 'check',
                        'options' => array (
                            'ng-click' => 'form.submit(this)',
                        ),
                        'type' => 'LinkButton',
                    ),
                    array (
                        'renderInEditor' => 'Yes',
                        'type' => 'Text',
                        'value' => '<div ng-if=\\"!isNewRecord\\" class=\\"separator\\"></div>',
                    ),
                    array (
                        'label' => 'Hapus',
                        'buttonType' => 'danger',
                        'icon' => 'trash',
                        'options' => array (
                            'ng-if' => '!isNewRecord',
                            'href' => 'url:/exalutions/banner/delete?id={model.id}',
                            'confirm' => 'Apakah Anda Yakin ?',
                        ),
                        'type' => 'LinkButton',
                    ),
                ),
                'title' => '{{ isNewRecord ? \'Tambah Banner\' : \'Update Banner\'}}',
                'type' => 'ActionBar',
            ),
            array (
                'type' => 'Text',
                'value' => '<br/>',
            ),
            array (
                'name' => 'id',
                'type' => 'HiddenField',
            ),
            array (
                'label' => 'Name',
                'name' => 'name',
                'type' => 'TextField',
            ),
            array (
                'label' => 'Status',
                'name' => 'status',
                'list' => array (
                    'no' => 'No',
                    'yes' => 'Yes',
                ),
                'type' => 'DropDownList',
            ),
            array (
                'name' => 'dataSource1',
                'relationTo' => 'bannerimgs',
                'type' => 'DataSource',
            ),
            array (
                'name' => 'lvImages',
                'templateForm' => 'app.modules.exalutions.forms.banner.ExalutionsUploadImagesSubform',
                'minItem' => 1,
                'datasource' => 'dataSource1',
                'singleViewOption' => array (
                    'name' => 'val',
                    'fieldType' => 'text',
                    'labelWidth' => 0,
                    'fieldWidth' => 12,
                    'fieldOptions' => array (
                        'ng-delay' => 500,
                    ),
                ),
                'type' => 'ListView',
            ),
        );
    }

}