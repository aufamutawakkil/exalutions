<?php

class ExalutionsBannerIndex extends Banner {

    public function getForm() {
        return array (
            'title' => 'Daftar Banner ',
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
                        'label' => 'Tambah Banner',
                        'buttonType' => 'success',
                        'icon' => 'plus',
                        'options' => array (
                            'href' => 'url:/exalutions/banner/new',
                        ),
                        'type' => 'LinkButton',
                    ),
                ),
                'title' => 'Daftar Banner',
                'showSectionTab' => 'No',
                'type' => 'ActionBar',
            ),
            array (
                'name' => 'dataFilter1',
                'datasource' => 'dataSource1',
                'filters' => array (
                    array (
                        'filterType' => 'string',
                        'name' => 'status',
                        'label' => 'Status',
                    ),
                    array (
                        'filterType' => 'string',
                        'name' => 'name',
                        'label' => 'Name',
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
                        'columnType' => 'string',
                        'options' => array (),
                        'name' => 'status',
                        'label' => 'Status',
                        '$listViewName' => 'columns',
                        'show' => false,
                    ),
                    array (
                        'columnType' => 'string',
                        'options' => array (),
                        'name' => 'name',
                        'label' => 'Name',
                        '$listViewName' => 'columns',
                        'show' => false,
                    ),
                    array (
                        'name' => '',
                        'label' => '',
                        'columnType' => 'string',
                        'options' => array (
                            'mode' => 'edit-button',
                            'editUrl' => 'exalutions/banner/update&id={{row.id}}',
                        ),
                        '$listViewName' => 'columns',
                        'show' => true,
                        'mergeSameRow' => 'No',
                        'cellMode' => 'default',
                        'html' => '<td style=\"width:20px;\" ng-class=\"rowClass(row, \'\', \'string\')\" >
    <a ng-if=\"(!row.$type || row.$type === \'r\')\" ng-url=\"exalutions/banner/update&id={{row.id}}\" title=\"Update\" 
    class=\"btn-block btn btn-info btn-xs\"><i class=\"fa fa-pencil\"></i></a>
</td>',
                    ),
                    array (
                        'name' => '',
                        'label' => '',
                        'columnType' => 'string',
                        'options' => array (
                            'mode' => 'del-button',
                            'delUrl' => 'exalutions/banner/delete&id={{row.id}}',
                        ),
                        '$listViewName' => 'columns',
                        'show' => true,
                        'mergeSameRow' => 'No',
                        'cellMode' => 'default',
                        'html' => '<td style=\"width:20px;\" ng-class=\"rowClass(row, \'\', \'string\')\" >
    <a ng-if=\"(!row.$type || row.$type === \'r\')\" ng-url=\"exalutions/banner/delete&id={{row.id}}\"
    onClick=\"return confirm(\'Are you sure?\')\"
    class=\"btn-block btn btn-danger btn-xs\"><i class=\"fa fa-trash\"></i></a>
</td>',
                    ),
                ),
            ),
        );
    }

}