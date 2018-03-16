<form>

<p>ENTER USER NAME :

  <input type="text" name="text2">

</p>

<p> ENTER PASSWORD :

<input type="password" name="text1">

  <input type="button" value="Check In" name="Submit" onclick=javascript:validate(text2.value,"free",text1.value,"javascript") >

</p>

 

</form>

<script language = "javascript">

 

/*

Script by Anubhav Misra (anubhav_misra@hotmail.com)

Submitted to JavaScript Kit (http://javascriptkit.com)

For this and 400+ free scripts, visit http://javascriptkit.com

*/

 

function validate(text1,text2,text3,text4)

{

 if (text1==text2 && text3==text4)

 load('/fresecureSide.php');

 else

 {

  load('/404page.php');

 }

}

function load(url)

{

 location.href=url;

}

</script>

 

<p align="center"><font face="arial" size="-2">This free script provided by <a href="http://javascriptkit.com">JavaScript Kit</a></font></p>

 