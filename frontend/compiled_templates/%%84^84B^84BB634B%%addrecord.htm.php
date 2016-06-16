<?php /* Smarty version 2.6.9, created on 2016-06-15 16:45:45
         compiled from addrecord.htm */ ?>
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
<table width="80%" border="0" cellpadding="2" cellspacing="1" onmouseover="this.style.backgroundColor = '#BCCBD2';" onmouseout="this.style.backgroundColor = '#CDDBE2';" class="mainBG" align="center">
  <tr> 
    <td align="center" valign="middle" class="headBG1"><span class="textSize0"><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "nav.htm", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?></span>
</td>
  </tr>
  <tr> 
    <td onmouseover="this.style.backgroundColor = '#FBFDFF';"
onmouseout="this.style.backgroundColor = '#FFFFFF';"
class="contentBGNewsMainTD"> <br>
      <table width="50%" border="0" cellspacing="1" cellpadding="2" bgcolor="#dcdcdc" align="center" >
        <tr> 
          <td bgcolor="whitesmoke" colspan="2"><p><b><center>
            Add Record: <?php echo $this->_tpl_vars['domain']; ?>
 
          </center></b></p></td>
        </tr>
        </table>
			<br>
			<table width="50%" border="0" cellspacing="1" cellpadding="2" bgcolor="#dcdcdc" align="center" >
              <tr>
                <td bgcolor="whitesmoke" colspan="2"><p><b>
                    <center>
                      <b>A Record</b>
                    </center>
                </b></p></td>
              </tr>
              <tr>
                <td bgcolor="#ffffff" colspan="2">
                      <form name="addrecord" method="post" action="addrecord.php">
                        <input type="hidden" name="type" value="a">
                        <table width="100%"  border="0" cellspacing="0" cellpadding="0">
                          <tr>
                            <td width="53%">Name of Record (ex: www)</td>
                            <td width="47%">Address (IP of your server)</td>
                          </tr>
                          <tr>
                            <td><input name="name" type="text" size="22"></td>
                            <td><input name="address" type="text" size="22" value="<?php echo $this->_tpl_vars['ip']; ?>
"></td>
                          </tr>
                          <tr>
                            <td>&nbsp;</td>
                            <td><div align="right">
                              <input type="submit" name="Submit" value="Submit">
                            </div></td>
                          </tr>
                        </table>
                      </form>
                </div></td>
            </table>
			<br>
			<table width="50%" border="0" cellspacing="1" cellpadding="2" bgcolor="#dcdcdc" align="center" >
              <tr>
                <td bgcolor="whitesmoke" colspan="2"><p><b>
                    <center>
                      <b>CNAME Record</b>
                    </center>
                </b></p></td>
              </tr>
              <tr>
                <td bgcolor="#ffffff" colspan="2">
                  <form name="addrecord" method="post" action="addrecord.php">
                    <input type="hidden" name="type" value="cname">
                    <table width="100%"  border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="53%">Name of Record (ex: forums)</td>
                        <td width="47%">Address (ex: www.yourdomain.com)</td>
                      </tr>
                      <tr>
                        <td><input name="name" type="text" size="22"></td>
                        <td><input name="address" type="text" size="22"></td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td><div align="right">
                            <input type="submit" name="Submit" value="Submit">
                        </div></td>
                      </tr>
                    </table>
                </form></td>
            </table>
			<br>
			<table width="50%" border="0" cellspacing="1" cellpadding="2" bgcolor="#dcdcdc" align="center" >
              <tr>
                <td bgcolor="whitesmoke" colspan="2"><p><b>
                    <center>
                      <b>MX Record</b>
                    </center>
                </b></p></td>
              </tr>
              <tr>
                <td bgcolor="#ffffff" colspan="2">
                  <form name="addrecord" method="post" action="addrecord.php">
                    <input type="hidden" name="type" value="mx">
                    <table width="100%"  border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="53%">Priority</td>
                        <td width="47%">Address</td>
                      </tr>
                      <tr>
                        <td><input name="name" type="text" size="5"></td>
                        <td><input name="address" type="text" size="22"></td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td><div align="right">
                            <input type="submit" name="Submit23" value="Submit">
                        </div></td>
                      </tr>
                    </table>
                </form></td>
            </table>
			<center>
			</center>
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