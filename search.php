<?php
header('Content-Type: text/html; charset=gbk');

//var_dump($_POST);
//var_dump($_GET);

include_once('lib/vars.php');
//include_once('lib/ez_sql.php');
	include_once "ezSQL/shared/ez_sql_core.php";

	// Include ezSQL database specific component
	include_once "ezSQL/mysql/ez_sql_mysql.php";

	// Initialise database object and establish a connection
	// at the same time - db_user / db_password / db_name / db_host
	//$db = new ezSQL_mysql('db_user','db_password','db_name','db_host');
    $db = new ezSQL_mysql('davidshen66','dh6666Mose','qsweb','localhost','gbk');//'UTF-8'

//$db->query("select * from books where hometown like '%湖南%'");
//$db->debug();
echo($top);
$result_string='';

if(isset($_GET['all']))
{
    $results = $db->get_results("SELECT * FROM books");
    if(!empty($results))
    {
        $num = 0;
        foreach($results as $r)
        {
            if($num%2 == 0) $color ='#F1F1F1'; else $color = '#E4F2FB';
            $result_string .='<table cellspacing="3" cellpadding="3" width="100%">';
            $result_string.='<tr bgcolor="'.$color.'"><td width="30%">作者</td><td>'.$r->name.' </td></tr>';
            $result_string.='<tr bgcolor="'.$color.'"><td>籍貫</td><td>'.$r->hometown.' </td></tr>';
            $result_string.='<tr bgcolor="'.$color.'"><td>英文名</td><td>'.$r->englishname.' </td></tr>';
            $result_string.='<tr bgcolor="'.$color.'"><td>筆名</td><td>'.$r->penname.' </td></tr>';
            $result_string.='<tr bgcolor="'.$color.'"><td>简介</td><td>'.$r->brief.' </td></tr>';
            $result_string.='<tr bgcolor="'.$color.'"><td colspan="2">    ----------------------</td></tr>';
            $result_string.='</table>';
            $num++;
        }
    }
    //$db->debug();
    //print 'HEllO WORLD';
    //exit();
}

if(isset($_POST['submit']))
{
    $k =trim($_POST['keyword']);
    if(!empty($k))
    {
        $results = $db->get_results("SELECT * FROM books WHERE
                        pinyin LIKE '%$k%' OR
                        englishname LIKE '%$k%' OR
                        hometown LIKE '%$k%' OR
                        name LIKE '%$k%' OR
                        penname LIKE '%$k%' OR
                        brief LIKE '%$k%'
                        ");
                        $size=count($results);
        if($size==0)
        {
            $result_string = '<p><font size="" color="ff0000">无记录。</font><p>';
        }
        else {
            $result_string ='<p>'.$size.' record(s) found.</p>';
            $result_string.='<table cellspacing="3" cellpadding="3" bgcolor="#F1F1F1">';
            foreach($results as $r)
            {
                $result_string.='<tr><td width="30%">作者</td><td>'.$r->name.' </td></tr>';
                $result_string.='<tr><td>籍貫</td><td>'.$r->hometown.' </td></tr>';
                $result_string.='<tr><td>英文名</td><td>'.$r->englishname.' </td></tr>';
                $result_string.='<tr><td>筆名</td><td>'.$r->penname.' </td></tr>';
                $result_string.='<tr><td>简介</td><td>'.$r->brief.' </td></tr>';
                $result_string.='<tr><td colspan="2">    ----------------------</td></tr>';
            }
            $result_string.='</table>';
        }
    }

    else {
        $result_string = '<p><font size="" color="ff0000">关键词不能为空。</font><p>';
    }
}
print '<h1>Keyword Search</h1>';
print '请输入关键词： ';
print '<p> <form action="" method="post">
  关键词: <input type="text" name="keyword" required>
  <input type="submit" name="submit">  <input name="all" type="button" onclick="location.href=\'?all=1\';" value="List all">
</form> </p>';


echo($result_string);
echo($bottom);

?>