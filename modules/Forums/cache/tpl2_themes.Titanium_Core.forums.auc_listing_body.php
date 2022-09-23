<?php

// eXtreme Styles mod cache. Generated on Mon, 29 Aug 2022 22:46:18 +0000 (time=1661813178)

?><table border="0" cellpadding="4" cellspacing="1" class="forumline" style="width: 100%;">

  <tr>

    <td width="100%" align="left"><a href="<?php echo isset($this->vars['U_INDEX']) ? $this->vars['U_INDEX'] : $this->lang('U_INDEX'); ?>"><?php echo isset($this->vars['L_INDEX']) ? $this->vars['L_INDEX'] : $this->lang('L_INDEX'); ?></a></td>                            

  </tr>

</table>

<br />

<table border="0" cellpadding="4" cellspacing="1" class="forumline" style="width: 100%;">

  <tr>

    <td class="catHead" colspan="2" style="font-weight: bold; height: 30px; text-align: center;"><?php echo isset($this->vars['T_C_2']) ? $this->vars['T_C_2'] : $this->lang('T_C_2'); ?></td>                            

  </tr>

  <tr>

    <td class="catHead" style="font-weight: bold; height: 30px; text-align: center;"><?php echo isset($this->vars['T_L']) ? $this->vars['T_L'] : $this->lang('T_L'); ?></td>

    <td class="catHead" style="font-weight: bold; height: 30px; text-align: center;"> <?php echo isset($this->vars['T_R']) ? $this->vars['T_R'] : $this->lang('T_R'); ?></td>                            

  </tr>    

  <?php

$phpbb2_colors_count = ( isset($this->_tpldata['colors.']) ) ?  sizeof($this->_tpldata['colors.']) : 0;
for ($phpbb2_colors_i = 0; $phpbb2_colors_i < $phpbb2_colors_count; $phpbb2_colors_i++)
{
 $phpbb2_colors_item = &$this->_tpldata['colors.'][$phpbb2_colors_i];
 $phpbb2_colors_item['S_ROW_COUNT'] = $phpbb2_colors_i;
 $phpbb2_colors_item['S_NUM_ROWS'] = $phpbb2_colors_count;

?>

  <tr>    

    <td class="<?php echo isset($phpbb2_colors_item['ROW_CLASS']) ? $phpbb2_colors_item['ROW_CLASS'] : ''; ?>" style="height: 35px;"><?php echo isset($phpbb2_colors_item['USER']) ? $phpbb2_colors_item['USER'] : ''; ?></td>

    <td class="<?php echo isset($phpbb2_colors_item['ROW_CLASS']) ? $phpbb2_colors_item['ROW_CLASS'] : ''; ?>" style="height: 35px;"><?php echo isset($phpbb2_colors_item['INFO_LINE']) ? $phpbb2_colors_item['INFO_LINE'] : ''; ?></td>                                    

  </tr>    

  <?php

} // END colors

if(isset($phpbb2_colors_item)) { unset($phpbb2_colors_item); } 

?>

</table>