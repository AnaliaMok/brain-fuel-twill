@extends('twill::layouts.settings')

@section('contentFields')
  @formField('input', [
    'label' => 'Site title',
    'name' => 'site_title',
    'textLimit' => '80'
  ])

  @formField('wysiwyg', [
    'label' => 'Site Description',
    'name' => 'site_description',
    'textLimit' => 255
  ])
@stop