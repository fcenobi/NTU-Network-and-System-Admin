<?php /* Smarty version 2.6.9, created on 2016-06-15 16:40:01
         compiled from index.htm */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'cycle', 'index.htm', 45, false),)), $this); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title><?php echo $this->_tpl_vars['app_name']; ?>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="<?php echo $this->_tpl_vars['base_url']; ?>
/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<SCRIPT LANGUAGE="JavaScript">
<!-- Start confirm del 

function delrecord(recordname) {
        return confirm("Are you sure you want to delete " + recordname + "?" );
}

// Stop confirm del --->
</SCRIPT>
<table width="80%" border="0" cellpadding="2" cellspacing="1" onmouseover="this.style.backgroundColor = '#BCCBD2';" onmouseout="this.style.backgroundColor = '#CDDBE2';" class="mainBG" align="center">
  <tr> 
    <td align="center" valign="middle" class="headBG1"><span class="textSize0"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "nav.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><br></span>
</td>
  </tr>
  <tr> 
    <td onmouseover="this.style.backgroundColor = '#FBFDFF';"
onmouseout="this.style.backgroundColor = '#FFFFFF';"
class="contentBGNewsMainTD"> <br>
      <table width="50%" border="0" cellspacing="1" cellpadding="2" bgcolor="#dcdcdc" align="center" >
        <tr> <?php if ($_REQUEST['msg']): ?><center><font color="<?php echo $this->_tpl_vars['color']; ?>
"><b><?php echo $this->_tpl_vars['msg']; ?>
</b></font></center><br><?php endif; ?>
          <td bgcolor="whitesmoke" colspan="2"><p><b><center>
            Viewing DNS Record: <?php echo $this->_tpl_vars['domain']; ?>
 : IP <?php echo $this->_tpl_vars['ip']; ?>

          </center></b></p></td>
        </tr>
        <tr> 
          <td bgcolor="#ffffff" colspan="2"><center>
            <table width="100%"  border="0" cellspacing="0" cellpadding="0">
            <tr>
                <center><a href="changeip.php?act=edit">Change Main IP</a></center>
           </tr>
           <tr><td><br></td></tr>
              <tr>
                <td colspan="2">A RECORDS </td>
                </tr>
            <tr><td><br></td></tr>
            <?php unset($this->_sections['a']);
$this->_sections['a']['name'] = 'a';
$this->_sections['a']['loop'] = is_array($_loop=$this->_tpl_vars['records_a']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['a']['show'] = true;
$this->_sections['a']['max'] = $this->_sections['a']['loop'];
$this->_sections['a']['step'] = 1;
$this->_sections['a']['start'] = $this->_sections['a']['step'] > 0 ? 0 : $this->_sections['a']['loop']-1;
if ($this->_sections['a']['show']) {
    $this->_sections['a']['total'] = $this->_sections['a']['loop'];
    if ($this->_sections['a']['total'] == 0)
        $this->_sections['a']['show'] = false;
} else
    $this->_sections['a']['total'] = 0;
if ($this->_sections['a']['show']):

            for ($this->_sections['a']['index'] = $this->_sections['a']['start'], $this->_sections['a']['iteration'] = 1;
                 $this->_sections['a']['iteration'] <= $this->_sections['a']['total'];
                 $this->_sections['a']['index'] += $this->_sections['a']['step'], $this->_sections['a']['iteration']++):
$this->_sections['a']['rownum'] = $this->_sections['a']['iteration'];
$this->_sections['a']['index_prev'] = $this->_sections['a']['index'] - $this->_sections['a']['step'];
$this->_sections['a']['index_next'] = $this->_sections['a']['index'] + $this->_sections['a']['step'];
$this->_sections['a']['first']      = ($this->_sections['a']['iteration'] == 1);
$this->_sections['a']['last']       = ($this->_sections['a']['iteration'] == $this->_sections['a']['total']);
?>
              <tr bgcolor="<?php echo smarty_function_cycle(array('name' => 'a','values' => "whitesmoke,#ffffff"), $this);?>
">
                <td><?php echo $this->_tpl_vars['records_a'][$this->_sections['a']['index']]['name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['records_a'][$this->_sections['a']['index']]['address']; ?>
</td>
                <td><a href="modrecord.php?act=edit&type=a&recordid=<?php echo $this->_tpl_vars['records_a'][$this->_sections['a']['index']]['recordid']; ?>
">Edit</a></td>
                <td><a href="modrecord.php?act=del&type=a&recordid=<?php echo $this->_tpl_vars['records_a'][$this->_sections['a']['index']]['recordid']; ?>
" onClick="return delrecord('<?php echo $this->_tpl_vars['records_a'][$this->_sections['a']['index']]['name']; ?>
')">Delete</a></td>
              </tr>
            <?php endfor; endif; ?>
            <tr><td><br></td></tr>
              <tr>
                <td colspan="2">CNAME RECORDS </td>
                </tr>
            <tr><td><br></td></tr>
            <?php unset($this->_sections['cname']);
$this->_sections['cname']['name'] = 'cname';
$this->_sections['cname']['loop'] = is_array($_loop=$this->_tpl_vars['records_cname']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['cname']['show'] = true;
$this->_sections['cname']['max'] = $this->_sections['cname']['loop'];
$this->_sections['cname']['step'] = 1;
$this->_sections['cname']['start'] = $this->_sections['cname']['step'] > 0 ? 0 : $this->_sections['cname']['loop']-1;
if ($this->_sections['cname']['show']) {
    $this->_sections['cname']['total'] = $this->_sections['cname']['loop'];
    if ($this->_sections['cname']['total'] == 0)
        $this->_sections['cname']['show'] = false;
} else
    $this->_sections['cname']['total'] = 0;
if ($this->_sections['cname']['show']):

            for ($this->_sections['cname']['index'] = $this->_sections['cname']['start'], $this->_sections['cname']['iteration'] = 1;
                 $this->_sections['cname']['iteration'] <= $this->_sections['cname']['total'];
                 $this->_sections['cname']['index'] += $this->_sections['cname']['step'], $this->_sections['cname']['iteration']++):
$this->_sections['cname']['rownum'] = $this->_sections['cname']['iteration'];
$this->_sections['cname']['index_prev'] = $this->_sections['cname']['index'] - $this->_sections['cname']['step'];
$this->_sections['cname']['index_next'] = $this->_sections['cname']['index'] + $this->_sections['cname']['step'];
$this->_sections['cname']['first']      = ($this->_sections['cname']['iteration'] == 1);
$this->_sections['cname']['last']       = ($this->_sections['cname']['iteration'] == $this->_sections['cname']['total']);
?>
              <tr bgcolor="<?php echo smarty_function_cycle(array('name' => 'cname','values' => "whitesmoke,#ffffff"), $this);?>
">
                <td><?php echo $this->_tpl_vars['records_cname'][$this->_sections['cname']['index']]['name']; ?>
</td>
                <td><?php echo $this->_tpl_vars['records_cname'][$this->_sections['cname']['index']]['address']; ?>
</td>
                <td><a href="modrecord.php?act=edit&type=cname&recordid=<?php echo $this->_tpl_vars['records_cname'][$this->_sections['cname']['index']]['recordid']; ?>
">Edit</a></td>
                <td><a href="modrecord.php?act=del&type=cname&recordid=<?php echo $this->_tpl_vars['records_cname'][$this->_sections['cname']['index']]['recordid']; ?>
" onClick="return delrecord('<?php echo $this->_tpl_vars['records_cname'][$this->_sections['cname']['index']]['name']; ?>
')">Delete</a></td>
              </tr>
            <?php endfor; endif; ?>
            <tr><td><br></td></tr>
              <tr>
                <td colspan="2">MX RECORDS </td>
                </tr>
            <tr><td><br></td></tr>
            <?php unset($this->_sections['mx']);
$this->_sections['mx']['name'] = 'mx';
$this->_sections['mx']['loop'] = is_array($_loop=$this->_tpl_vars['records_mx']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['mx']['show'] = true;
$this->_sections['mx']['max'] = $this->_sections['mx']['loop'];
$this->_sections['mx']['step'] = 1;
$this->_sections['mx']['start'] = $this->_sections['mx']['step'] > 0 ? 0 : $this->_sections['mx']['loop']-1;
if ($this->_sections['mx']['show']) {
    $this->_sections['mx']['total'] = $this->_sections['mx']['loop'];
    if ($this->_sections['mx']['total'] == 0)
        $this->_sections['mx']['show'] = false;
} else
    $this->_sections['mx']['total'] = 0;
if ($this->_sections['mx']['show']):

            for ($this->_sections['mx']['index'] = $this->_sections['mx']['start'], $this->_sections['mx']['iteration'] = 1;
                 $this->_sections['mx']['iteration'] <= $this->_sections['mx']['total'];
                 $this->_sections['mx']['index'] += $this->_sections['mx']['step'], $this->_sections['mx']['iteration']++):
$this->_sections['mx']['rownum'] = $this->_sections['mx']['iteration'];
$this->_sections['mx']['index_prev'] = $this->_sections['mx']['index'] - $this->_sections['mx']['step'];
$this->_sections['mx']['index_next'] = $this->_sections['mx']['index'] + $this->_sections['mx']['step'];
$this->_sections['mx']['first']      = ($this->_sections['mx']['iteration'] == 1);
$this->_sections['mx']['last']       = ($this->_sections['mx']['iteration'] == $this->_sections['mx']['total']);
?>
              <tr bgcolor="<?php echo smarty_function_cycle(array('name' => 'mx','values' => "whitesmoke,#ffffff"), $this);?>
">
                <td><?php echo $this->_tpl_vars['records_mx'][$this->_sections['mx']['index']]['priority']; ?>
</td>
                <td><?php echo $this->_tpl_vars['records_mx'][$this->_sections['mx']['index']]['address']; ?>
</td>
                <td><a href="modrecord.php?act=edit&type=mx&recordid=<?php echo $this->_tpl_vars['records_mx'][$this->_sections['mx']['index']]['recordid']; ?>
">Edit</a></td>
                <td><a href="modrecord.php?act=del&type=mx&recordid=<?php echo $this->_tpl_vars['records_mx'][$this->_sections['mx']['index']]['recordid']; ?>
" onClick="return delrecord('<?php echo $this->_tpl_vars['records_mx'][$this->_sections['mx']['index']]['name']; ?>
')">Delete</a></td>
              </tr>
            <?php endfor; endif; ?>
            </table>
          </center></td>
      </table>
        <br>

      <br>
    </td>
  </tr>
  </tr>
      <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
  </tr>
</table>
</body>
</html>