@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
        'name' => 'description',
        'label' => 'Description',
        'translated' => true,
        'maxlength' => 100
    ])

    @formField('medias', [
        'name' => 'cover',
        'label' => 'Cover image',
    ])

    @formField('wysiwyg', [
        'name' => 'body',
        'label' => 'Body',
        'toolbarOptions' => [
            [ 'header' => [2, 3, 4, 5, 6, false] ],
            'bold', 'italic', 'underline', 'strike',
            'list-ordered', 'list-unordered', [ 'indent' => '-1'], [ 'indent' => '+1' ],
            'link',
        ],
        'translated' => true,
        'editSource' => true,
    ])
@stop
