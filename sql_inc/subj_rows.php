<?php
$sql="SELECT subj.name as '{{sub_cut}}' , subj.id as '{{subj_id}}', level.name as '{{level_cut}}' , level.id as '{{level_id}}' ,parts.id AS'{{part_id}}',parts.name as '{{part_cut}}' FROM subj, dr_subj ,term ,level ,parts WHERE subj.id= dr_subj.subj_id and subj.term_id= term.id and term.level_id= level.id and level.part_id=parts.id and dr_subj.users_id=".$_SESSION['user_id'];
?>