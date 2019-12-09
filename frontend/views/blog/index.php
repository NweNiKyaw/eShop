<?php

  use yii\helpers\Url;

 ?>
 <div class="container">
   <table class="table">
     <?php foreach($blogs as $blog){ ?>
       <tr>
         <td> <a href="<?= Url::to(['blog/view','id'=>$blog->slug ])?>"><?= $blog -> title?></a> </td>
       </tr>
     <?php } ?>
   </table>
 </div>
