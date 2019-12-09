<?php

  use yii\helpers\Html;

  echo Html::tag('p','This is tesing of html helper', ['class'=>'divi']);
  echo Html::tag('div','This is div',['id'=>'div']);
  echo Html::tag('h1','This is heading 1');
  echo Html::tag('h2', 'This is heading 2');
  echo Html::tag('h3', 'This is heading 3');
  echo Html::tag('h4', 'This is heading 4');
  echo Html::tag('span','This is for span');
  echo Html::tag('br');
  echo Html::decode(Html::tag('i','',['class'=>'fa fa-user']));
  echo Html::button('Submit', ['class'=>'btn btn-lg btn-success']);
  echo Html::resetbutton('Submit', ['class'=>'btn btn-lg btn-primary']);
  echo Html::submitbutton('Submit', ['class'=>'btn btn-lg btn-warning']);
  echo Html::tag('hr');

  echo Html::label('Surname','surname');
  echo Html::tag('br');
  echo Html::input('text','surname',null,['class'=>'form-control','placeholder'=>'Surname']);
  echo Html::tag('br');
  echo Html::tag('br');
  echo Html::radio('sex',null,['label'=>'Male']);
  echo Html::radio('sex',null,['label'=>'Female']);
  echo Html::tag('br');
  echo Html::checkbox('agreement',true,['label'=>'Do you agree']);
  echo Html::tag('br');
  echo Html::dropDownList('gender','',['male'=>'Male','female'=>'Female'],['class'=>'form-control']);
  echo Html::tag('br');
  echo Html::img('@web/uploads/pant.jpg',['class'=>'img-round','alt'=>'This is image testing']);
  echo Html::tag('br');
  echo Html::ol(['A'=>'A','B'=>'B','C'=>'C'])
 ?>
