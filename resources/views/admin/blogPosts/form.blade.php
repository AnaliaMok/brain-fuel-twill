@extends('twill::layouts.form')

@section('contentFields')
    @formField('wysiwyg', [
        'name' => 'description',
        'label' => 'Description',
        'translated' => true,
        'maxlength' => 250
    ])

    @formField('medias',[
        'name' => 'hero_image',
        'label' => 'Hero image',
    ])
@stop
