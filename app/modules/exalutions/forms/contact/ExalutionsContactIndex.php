<?php

class ExalutionsContactIndex extends Contact {

    public function getForm() {
        return array (
            'title' => 'Daftar Contact ',
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
                        'label' => 'Tambah Contact',
                        'buttonType' => 'success',
                        'icon' => 'plus',
                        'options' => array (
                            'href' => 'url:/exalutions/contact/new',
                        ),
                        'type' => 'LinkButton',
                    ),
                ),
                'title' => 'Daftar Contact',
                'showSectionTab' => 'No',
                'type' => 'ActionBar',
            ),
            array (
                'name' => 'dataFilter1',
                'datasource' => 'dataSource1',
                'type' => 'DataFilter',
                'filters' => array (
                    array (
                        'filterType' => 'string',
                        'name' => 'email',
                        'label' => 'Email',
                    ),
                    array (
                        'filterType' => 'string',
                        'name' => 'facebook',
                        'label' => 'Facebook',
                    ),
                    array (
                        'filterType' => 'string',
                        'name' => 'twitter',
                        'label' => 'Twitter',
                    ),
                    array (
                        'filterType' => 'string',
                        'name' => 'map_lat',
                        'label' => 'Map Lat',
                    ),
                    array (
                        'filterType' => 'string',
                        'name' => 'map_lng',
                        'label' => 'Map Lng',
                    ),
                ),
            ),
            array (
                'name' => 'dataSource1',
                'relationTo' => 'currentModel',
                'type' => 'DataSource',
            ),
            array (
                'name' => 'gridView1',
                'datasource' => 'dataSource1',
                'type' => 'GridView',
                'columns' => array (
                    array (
                        'columnType' => 'string',
                        'options' => array (),
                        'name' => 'email',
                        'label' => 'Email',
                    ),
                    array (
                        'columnType' => 'string',
                        'options' => array (),
                        'name' => 'facebook',
                        'label' => 'Facebook',
                    ),
                    array (
                        'columnType' => 'string',
                        'options' => array (),
                        'name' => 'twitter',
                        'label' => 'Twitter',
                    ),
                    array (
                        'columnType' => 'string',
                        'options' => array (),
                        'name' => 'map_lat',
                        'label' => 'Map Lat',
                    ),
                    array (
                        'columnType' => 'string',
                        'options' => array (),
                        'name' => 'map_lng',
                        'label' => 'Map Lng',
                    ),
                    array (
                        'name' => '',
                        'label' => '',
                        'columnType' => 'string',
                        'options' => array (
                            'mode' => 'edit-button',
                            'editUrl' => 'exalutions/contact/update&id={{row.id}}',
                        ),
                    ),
                    array (
                        'name' => '',
                        'label' => '',
                        'columnType' => 'string',
                        'options' => array (
                            'mode' => 'del-button',
                            'delUrl' => 'exalutions/contact/delete&id={{row.id}}',
                        ),
                    ),
                ),
            ),
        );
    }

}