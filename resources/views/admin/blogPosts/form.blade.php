@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
        'name' => 'description',
        'label' => 'Description',
        'translated' => true,
        'maxlength' => 100
    ])

    @formField('wysiwyg', [
        'name' => 'body',
        'label' => 'Body',
        'toolbarOptions' => [ [ 'header' => [2, 3, 4, 5, 6, false] ], 'list-ordered', 'list-unordered', [ 'indent' => '-1'], [ 'indent' => '+1' ] ],
        'translated' => true,
        'rows' => 10,
        'editSource' => true,
    ])

    @formField('medias', [
        'name' => 'cover',
        'label' => 'Cover image',
    ])
@stop
