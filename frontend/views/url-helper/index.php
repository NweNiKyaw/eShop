<?php
  use yii\helpers\Url;

  $url = Url::home(true);
 ?>
 <section>
   <div class="container">
     <div class="row">
       <a href="<?= Url::home()?>"><?= Url::home()?></a><br>
       <a href="<?= Url::home(true)?>"><?= Url::home(true)?></a><br>
       <a href="<?= Url::home('https')?>"><?= Url::home('https')?></a><br><br>
       <br>
       <a href="<?= Url::base()?>"><?= Url::base()?></a><br>
       <a href="<?= Url::base(true)?>"><?= Url::base(true)?></a><br>
       <a href="<?= Url::base('ttps')?>"><?= Url::base('https')?></a><br>
       <br>
       <a href="<?= Url::toRoute(['/test-url/test'])?>"><?= Url::toRoute(['test-url/test'])?></a><br>
       <a href="<?= Url::toRoute(['/test-url/test', 'param1'=>123, 'param2'=>'myname'])?>"><?= Url::toRoute(['test-url/test', 'param1'=>123, 'param2'=>'myname'])?></a><br>
       <a href="<?= Url::toRoute(['/test-url/test'])?>"><?= Url::toRoute(['test-url/test'])?></a><br>
       <a href="<?= Url::toRoute(['/test-url/test', 'https'])?>"><?= Url::toRoute(['test-url/test', 'https'])?></a><br>
       <a href="<?= Url::to(['@web/images/home/logo.png'])?>"><?= Url::to(['@web/images/home/logo.png'])?></a><br>
       <br>
       <a href="<?= Url::to(['test-url/test'])?>"><?= Url::to(['test-url/test'])?></a><br>
       <a href="<?= Url::to(['test-url/test', 'param1'=>123, 'param2'=>'myname'])?>"><?= Url::to(['test-url/test', 'param1'=>123, 'param2'=>'myname'])?></a><br>
       <a href="<?= Url::to(['test-url/test'])?>"><?= Url::to(['test-url/test'])?></a><br>
       <a href="<?= Url::to(['test-url/test','https'])?>"><?= Url::to(['test-url/test','https'])?></a><br>
       <a href="<?= Url::to(['@web/images/home/logo.png'])?>"><?= Url::to(['@web/images/home/logo.png'])?></a><br>
       <br>
       <a href="<?= Url::current()?>"><?= Url::current()?></a><br>
       <a href="<?= Url::current(['name'=>'myname'])?>"><?= Url::current(['name'=>'myname'])?></a><br>
       <br>
       <a href="<?= Url::remember()?>"><?= Url::remember()?></a><br>
       <a href="<?= Url::remember(['test-url/test','testparam'=>'testvalue'],'rem1')?>"></a><br>
       <a href="<?= Url::remember(['test-url/test', 'testparam1'=>'wertxc12'],'rem2')?>"></a><br>
       <br>
       Relative: <?= Url::isRelative('test-url/test')?><br>
       Not: <?= Url::isRelative('https//yii.com.ng')?>
     </div>
   </div>
 </section>
