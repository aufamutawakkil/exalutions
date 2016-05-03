<?php

class ExalutionsSparePartIndex extends SparePart {

    public function getForm() {
        return array (
            'title' => 'Daftar Spare Part ',
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
                        'label' => 'Tambah Spare Part',
                        'buttonType' => 'success',
                        'icon' => 'plus',
                        'options' => array (
                            'href' => 'url:/exalutions/sparePart/new',
                        ),
                        'type' => 'LinkButton',
                    ),
                ),
                'title' => 'Daftar Spare Part',
                'showSectionTab' => 'No',
                'type' => 'ActionBar',
            ),
            array (
                'name' => 'dataFilter1',
                'datasource' => 'dataSource1',
                'filters' => array (
                    array (
                        'filterType' => 'string',
                        'name' => 'type',
                        'label' => 'Type',
                    ),
                    array (
                        'filterType' => 'string',
                        'name' => 'name_file',
                        'label' => 'Name File',
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
                        'name' => 'type',
                        'label' => 'Type',
                        '$listViewName' => 'columns',
                        'show' => false,
                        'mergeSameRow' => 'No',
                        'cellMode' => 'default',
                        'html' => '<td ng-class=\"rowClass(row, \'type\', \'string\')\" >
    {{row.type}}
</td>',
                    ),
                    array (
                        'columnType' => 'string',
                        'options' => array (),
                        'name' => 'name_file',
                        'label' => 'Name File',
                        '$listViewName' => 'columns',
                        'show' => false,
                    ),
                    array (
                        'name' => '',
                        'label' => '',
                        'columnType' => 'string',
                        'options' => array (
                            'mode' => 'edit-button',
                            'editUrl' => 'exalutions/sparePart/update&id={{row.id}}',
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
                            'delUrl' => 'exalutions/sparePart/delete&id={{row.id}}',
                        ),
                        '$listViewName' => 'columns',
                        'show' => false,
                    ),
                ),
            ),
        );
    }

}