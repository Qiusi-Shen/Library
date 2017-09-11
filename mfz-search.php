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
    //ezSQL_mysql('root','','qsweb','localhost','gbk');

//$db->query("select * from books where hometown like '%湖南%'");
//$db->debug();
echo($top);
$result_string='';

if(isset($_GET['all']))
{
    $results = $db->get_results("SELECT * FROM books02");
    if(!empty($results))
    {
        $title='<h3><center>All Ming Dynasty Local Chronicles:</center></h3>';
        $num = 0;
        $result_string=chronicleTable($results);
        $result_string=$title.$result_string;
    }
}

if(isset($_POST['submit']))
{
    $k =trim($_POST['keyword']);

    if(!empty($k))
    {
        $title='<h3><center>Chinese Writers search results with keyword "'.$k.'":</center></h3>';
        $results = $db->get_results("SELECT * FROM books02 WHERE
                        Romanization_title LIKE '%$k%' OR
                        Chinese_title LIKE '%$k%' OR
                        Compiler LIKE '%$k%' OR
                        Reign LIKE '%$k%' OR
                        Imprint LIKE '%$k%' OR
                        Ming_admin_cn LIKE '%$k%' OR
                        Ming_admin_en LIKE '%$k%' OR
                        Modern_admin_cn LIKE '%$k%' OR
                        Modern_admin_en LIKE '%$k%' OR
                        Holding_Library LIKE '%$k%' OR
                        Reprint_Microfilm LIKE '%$k%'
                        ");
                        $size=count($results);
        if($size==0)
        {
            $result_string = '<p><font size="" color="ff0000">无记录。</font><p>';
        }
        else {
            $result_string ='<p>'.$size.' record(s) found.</p>';
            $result_string .=chronicleTable($results);
            /*
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
            */
        }
        $result_string=$title.$result_string;
    }

    else {
        $result_string = '<p><font size="" color="ff0000">关键词不能为空。</font><p>';
    }
}
print '<h1>Catalog of Extant Ming Gazetteers (明方志)</h1>';
print '<h2>&nbsp;&nbsp;&nbsp;&nbsp;Keyword Search</h2>';
print '请输入关键词： ';
print '<p> <form action="'.basename(__FILE__).'" method="post">
  关键词: <input type="text" name="keyword" required>
  <input type="submit" name="submit">  <input name="all" type="button" onclick="location.href=\'?all=1\';" value="List all Chronicles">';
print '</form> </p>';


echo($result_string);
echo($bottom);

?>