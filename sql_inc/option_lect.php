<?php
/*$sql="SELECT users.id as '{{stu_id}}' , users.name as '{{stu_name}}', users.email as '{{stu_email}}' ,
 level.name as '{{level_name}}' , parts.name as '{{part_name}}' , collages.collage_name as '{{col_name}}'
  FROM `users` , stu , level , parts , collages ,dr_collage WHERE 
  stu.level_id= level.id AND level.part_id= parts.id AND
   parts.collage_id= collages.id and users.id= dr_collage.users_id AND dr_collage.users_id= " . $_SESSION['user_id']
*/
$sql="SELECT users.id as '{{stu_id}}' , users.name as '{{stu_name}}', users.email as '{{stu_email}}' , level.name as '{{level_name}}' FROM `users` , `stu` , `level` WHERE users.id = stu.users_id and stu.level_id= LEVEL.id AND level.id= ". $_POST['level_id'];
?>