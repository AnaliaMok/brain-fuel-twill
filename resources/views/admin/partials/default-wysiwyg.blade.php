{{--
  Parameters:
    - name: Form input name
    - label: Form input label
--}}
@formField('wysiwyg', [
  'name' => $name,
  'label' => $label,
  'toolbarOptions' => [
    [ 'header' => [2, 3, 4, 5, 6, false] ],
    'bold', 'italic', 'underline', 'strike',
    'list-ordered', 'list-unordered', [ 'indent' => '-1'], [ 'indent' => '+1' ],
    'link', 'sup', 'sub',
  ],
  'translated' => true,
  'rows' => 10,
  'editSource' => true,
])