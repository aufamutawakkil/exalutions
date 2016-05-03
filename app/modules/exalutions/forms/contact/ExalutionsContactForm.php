<?php

class ExalutionsContactForm extends Contact {

    public function getForm() {
        return array (
            'title' => 'Detail Contact ',
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
                            'href' => 'url:/exalutions/contact/index',
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
                            'href' => 'url:/exalutions/contact/delete?id={model.id}',
                            'confirm' => 'Apakah Anda Yakin ?',
                        ),
                        'type' => 'LinkButton',
                    ),
                ),
                'title' => '{{ isNewRecord ? \'Tambah Contact\' : \'Update Contact\'}}',
                'showSectionTab' => 'No',
                'type' => 'ActionBar',
            ),
            array (
                'name' => 'id',
                'type' => 'HiddenField',
            ),
            array (
                'showBorder' => 'Yes',
                'column1' => array (
                    array (
                        'title' => 'Peta Lokasi',
                        'type' => 'SectionHeader',
                    ),
                    array (
                        'label' => 'Latitude',
                        'name' => 'map_lat',
                        'prefix' => '<i class=\'fa fa-map-marker\'></i>',
                        'type' => 'TextField',
                    ),
                    array (
                        'label' => 'Longitude',
                        'name' => 'map_lng',
                        'prefix' => '<i class=\'fa fa-map-marker\'></i>',
                        'type' => 'TextField',
                    ),
                    array (
                        'type' => 'Text',
                        'value' => '<column-placeholder></column-placeholder>',
                    ),
                ),
                'column2' => array (
                    array (
                        'title' => 'Contact',
                        'type' => 'SectionHeader',
                    ),
                    array (
                        'label' => 'Email',
                        'name' => 'email',
                        'prefix' => '<i class=\'fa fa-envelope-square\'></i>',
                        'type' => 'TextField',
                    ),
                    array (
                        'label' => 'Twitter',
                        'name' => 'twitter',
                        'prefix' => '<i class=\'fa fa-twitter-square\'></i>',
                        'type' => 'TextField',
                    ),
                    array (
                        'label' => 'Facebook',
                        'name' => 'facebook',
                        'prefix' => '<i class=\'fa fa-facebook-square\'></i>',
                        'type' => 'TextField',
                    ),
                    array (
                        'type' => 'Text',
                        'value' => '<column-placeholder></column-placeholder>',
                    ),
                ),
                'w1' => '50%',
                'w2' => '50%',
                'type' => 'ColumnField',
            ),
        );
    }

}