
    <html>
    <HEAD>
    <TITLE>Гостевая книга - добавление записи</TITLE>
    </HEAD&tg;
    <BODY>
    <H3>
    <!-- пишем HTML-код формы добавления сообщений !-->
    <center>
     <table width=1 border=0>
     <form action=addrec.php method=post>
     <input type=hidden name=action value=post>
    <tr>
     <td width=50%>Имя:<font color=red><sup>*</sup><font></td>
     <td align=right>
       <input type=text name=name maxlength=32 value='<?php echo $name; ?>'>
     </td>
    </tr>
    <tr>
      <td width=50%>Город:</td>
      <td align=right>
        <input type=text name=city maxlength=32 value='<?php echo $city;; ?>'>
      </td>
    </tr>
    <tr>
      <td width=50%>E-Mail:</td>
      <td align=right>
        <input type=text name=email maxlength=32 value='<?php echo $email; ?>'>
      </td>
    </tr>
    <tr>
      <td width=50%>URL:</td>
      <td align=right>
        <input type=text name=url maxlength=36 value='<?php echo $url; ?>'>
      </td>
    </tr>
    <tr>
      <td colspan=2>Сообщение:<font color=red<sup>*</sup></font><br>
        <textarea cols=50 rows=8 name=msg>
        </textarea>
      </td>
    </tr>
    <tr>
      <td colspan=2><input type=submit value='Добавить'></td>
    </tr>
  </form>
  <tr>
    <td colspan=2><font color=red><sup>*</sup></font> - поля,
      обязательные для заполнения
    </td><td align=left>
  </table>
  </center>
  </BODY>
  </HTML>