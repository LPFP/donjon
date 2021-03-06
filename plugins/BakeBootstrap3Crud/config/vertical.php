<?php

$labelHorizontalColClass = 'col-sm-2 control-label';
$inputHorizontalColClass = 'col-sm-10 ';

return [
    'legend'              => '<legend>{{text}}</legend>',
    'checkbox'            => '<div><input type="checkbox" name="{{name}}" value="{{value}}"{{attrs}}></div>',
    'checkboxFormGroup'   => '{{label}}',
    'checkboxWrapper'     => '<div class="checkbox">{{label}}</div>',
    'dateWidget'          => '{{year}}{{month}}{{day}}{{hour}}{{minute}}{{second}}{{meridian}}',
    'error'               => '<div class="error-message">{{content}}</div>',
    'errorList'           => '<ul>{{content}}</ul>',
    'errorItem'           => '<li>{{text}}</li>',
    'file'                => '<input type="file" name="{{name}}"{{attrs}}>',
    'fieldset'            => '<fieldset{{attrs}}>{{content}}</fieldset>',
    'formStart'           => '<form{{attrs}} class="form-horizontal">',
    'formEnd'             => '</form>',
    'formGroup'           => '{{label}}{{input}}',
    'hiddenBlock'         => '<div style="display:none;">{{content}}</div>',
    'input'               => '<input type="{{type}}" name="{{name}}" class="form-control" {{attrs}}/>',
    'inputSubmit'         => '<button type="{{type}}">{{attrs}}</button>',
    'inputContainerError' => '<div class="input {{type}}{{required}} error">{{content}}{{error}}</div>',
    #
    'label'               => '<label {{attrs}}>{{text}}</label>',
    'inputContainer'      => '{{content}}',
    #
    'nestingLabel'        => '{{hidden}}<label{{attrs}}>{{input}}{{text}}</label>',
    'option'              => '<option value="{{value}}"{{attrs}}>{{text}}</option>',
    'optgroup'            => '<optgroup label="{{label}}"{{attrs}}>{{content}}</optgroup>',
    'select'              => '<select class="form-control" name="{{name}}"{{attrs}}>{{content}}</select>',
    'selectMultiple'      => '<select class="form-control" name="{{name}}[]" multiple="multiple"{{attrs}}>{{content}}</select>',
    'radio'               => '<input type="radio" name="{{name}}" value="{{value}}"{{attrs}}></div>',
    'radioWrapper'        => '{{label}}',
    'textarea'            => '<textarea name="{{name}}"{{attrs}} class="form-control">{{value}}</textarea>',
    'submitContainer'     => '<div class="submit">{{content}}</div>',
    'button'              => '<button{{attrs}}>{{text}}</button>',
];


/*
<form class="form-horizontal">
  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <div class="checkbox">
        <label>
          <input type="checkbox"> Remember me
        </label>
      </div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Sign in</button>
    </div>
  </div>
</form>
 *  */