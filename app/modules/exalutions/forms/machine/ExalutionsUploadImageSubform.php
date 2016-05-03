<?php

class ExalutionsUploadImageSubform extends RepoImage {

    public function getForm() {
        return array (
            'title' => 'Upload Image Subform',
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
                'label' => 'Text Field',
                'name' => 'name',
                'type' => 'TextField',
            ),
            array (
                'name' => 'path',
                'label' => 'Upload File',
                'type' => 'UploadFile',
            ),
        );
    }

}