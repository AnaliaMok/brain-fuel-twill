@extends('twill::layouts.form')

@section('contentFields')
    @formField('input', [
        'name' => 'description',
        'label' => 'Description',
        'translated' => true,
        'maxlength' => 100
    ])

    @include('admin.partials.default-wysiwyg', ['name' => 'body', 'label' => 'Body'])

    @formField('medias', [
        'name' => 'cover',
        'label' => 'Cover image',
    ])
@stop
