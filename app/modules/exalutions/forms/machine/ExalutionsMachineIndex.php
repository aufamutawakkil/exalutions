<?php

class ExalutionsMachineIndex extends Machine {

    public function getForm() {
        return array (
            'title' => 'Daftar Machine ',
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
                        'label' => 'Tambah Machine',
                        'buttonType' => 'success',
                        'icon' => 'plus',
                        'options' => array (
                            'href' => 'url:/exalutions/machine/new',
                        ),
                        'type' => 'LinkButton',
                    ),
                ),
                'title' => 'Daftar Machine',
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
                        'filterType' => 'relation',
                        'name' => 'repo_image_id',
                        'label' => 'RepoImage',
                        'relModelClass' => 'app.models.RepoImage',
                        'relIdField' => 'id',
                        'relParams' => array (),
                        'relCriteria' => array (
                            'select' => '',
                            'distinct' => 'false',
                            'alias' => 't',
                            'condition' => '{[search]}',
                            'order' => '',
                            'group' => '',
                            'having' => '',
                            'join' => '',
                        ),
                        'relLabelField' => 'name',
                        'list' => 0,
                        'count' => 0,
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
                        'html' => '<td ng-class=\"rowClass(row, \'id\', \'string\')\" >
    <div  ng-include=\'\"row-state-template\"\'></div>
    <span class=\'row-group-padding\' ng-if=\'!!row.$level\'
        style=\'width:{{row.$level*10}}px;\'></span>
    {{row.id}}
</td>',
                        'columnType' => 'string',
                        '$listViewName' => 'columns',
                        'show' => true,
                        'mergeSameRow' => 'No',
                        'cellMode' => 'default',
                        'options' => array (
                            'mode' => 'sequence',
                        ),
                    ),
                    array (
                        'name' => 'type',
                        'label' => 'Type',
                        'html' => '',
                        'columnType' => 'string',
                        '$listViewName' => 'columns',
                        'show' => false,
                    ),
                    array (
                        'name' => 'name_file',
                        'label' => 'Name File',
                        'html' => '',
                        'columnType' => 'string',
                        '$listViewName' => 'columns',
                        'show' => false,
                    ),
                    array (
                        'name' => '',
                        'label' => '',
                        'options' => array (
                            'mode' => 'edit-button',
                            'editUrl' => 'exalutions/machine/update&id={{row.id}}',
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
                        'name' => '',
                        'label' => '',
                        'options' => array (
                            'mode' => 'del-button',
                            'delUrl' => 'exalutions/machine/delete&id={{row.id}}',
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
                        'show' => true,
                        'cellMode' => 'default',
                    ),
                ),
            ),
        );
    }

}