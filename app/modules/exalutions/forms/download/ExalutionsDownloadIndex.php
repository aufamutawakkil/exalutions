<?php

class ExalutionsDownloadIndex extends Download {

    public function getForm() {
        return array (
            'title' => 'Daftar Download ',
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
                        'label' => 'Tambah Download',
                        'buttonType' => 'success',
                        'icon' => 'plus',
                        'options' => array (
                            'href' => 'url:/exalutions/download/new',
                        ),
                        'type' => 'LinkButton',
                    ),
                ),
                'title' => 'Daftar Download',
                'showSectionTab' => 'No',
                'type' => 'ActionBar',
            ),
            array (
                'name' => 'dataFilter1',
                'datasource' => 'dataSource1',
                'filters' => array (
                    array (
                        'filterType' => 'string',
                        'name' => 'nama_file',
                        'label' => 'Nama File',
                    ),
                    array (
                        'filterType' => 'string',
                        'name' => 'path_file',
                        'label' => 'Path File',
                    ),
                ),
                'type' => 'DataFilter',
            ),
            array (
                'name' => 'dataSource1',
                'relationTo' => 'currentModel',
                'type' => 'DataSource',
            ),
            array (
                'type' => 'GridView',
                'name' => 'gridView1',
                'datasource' => 'dataSource1',
                'columns' => array (
                    array (
                        'name' => '',
                        'label' => '#',
                        'options' => array (
                            'mode' => 'sequence',
                        ),
                        'mergeSameRow' => 'No',
                        'mergeSameRowWith' => '',
                        'mergeSameRowMethod' => 'Default',
                        'html' => '',
                        'columnType' => 'string',
                        'typeOptions' => array (
                            'string' => array (
                                'html',
                            ),
                        ),
                        '$listViewName' => 'columns',
                        'show' => false,
                        'cellMode' => 'default',
                    ),
                    array (
                        'columnType' => 'string',
                        'options' => array (),
                        'name' => 'nama_file',
                        'label' => 'Nama File',
                        '$listViewName' => 'columns',
                        'show' => false,
                    ),
                    array (
                        'name' => '',
                        'label' => '',
                        'columnType' => 'string',
                        'options' => array (
                            'mode' => 'edit-button',
                            'editUrl' => 'exalutions/download/update&id={{row.id}}',
                        ),
                        '$listViewName' => 'columns',
                        'show' => false,
                    ),
                    array (
                        'name' => '',
                        'label' => '',
                        'columnType' => 'string',
                        'options' => array (
                            'mode' => 'del-button',
                            'delUrl' => 'exalutions/download/delete&id={{row.id}}',
                        ),
                        '$listViewName' => 'columns',
                        'show' => false,
                    ),
                ),
            ),
        );
    }

}