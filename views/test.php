<?php include('_header_loggedin.php'); ?>

<form action="test.php" method="post">
<input type="submit" name="wyslij" value="Wyswietl" />
Zaznacz wszystko:
<input type="checkbox" name="wyczysc" checked='checked' value="Wyczysc" onclick="var w = document.getElementsByTagName('input'); for(var i = 0; i < w.length; i++){ if(w[i].value=='przedmioty'){ w[i].checked = this.checked;};};"/>
<?php
$connection = @mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME) 
or die('Nie dziala'.mysql_error()); 

$przedmioty = array();
$skroty = array();
$sb = mysqli_query($connection, "SELECT * FROM subjects");
$subjcount = mysqli_num_rows($sb);
while($rek = mysqli_fetch_array($sb)) {
$przedmioty[$rek[subjectId]] = $rek[subjectName];
}
for($i=1; $i<=$subjcount[0]; $i++) {
echo "<input type='checkbox' checked='checked' name='".$i."' 

value='przedmioty'/>".$przedmioty[$i];
}
echo '</form>';
echo "<hr>";

$sb = mysqli_query($connection, "SELECT * FROM grades ORDER BY gradeAbbrev ASC");
$sk = 0;
$ostatni_skrot="";
while($rek = mysqli_fetch_array($sb)) {
if($ostatni_skrot != $rek[gradeAbbrev]) {
$skroty[$sk] = $rek[gradeAbbrev];
$ostatni_skrot = $rek[gradeAbbrev];
$sk++;
}
}
for($i=1; $i<$sk; $i++) {
echo "<input type='checkbox' checked='checked' name='".$skroty[$i]."' value='skroty'/>".$skroty[$i];
}



if (isset($_POST['wyslij'])){


echo "<table border='5' cellpadding='10' >";

for($subj = 1; $subj<31; $subj++) {
$gr = mysqli_query($connection, "SELECT * FROM grades WHERE userId='".$_SESSION['user_id']."' AND subjectId='".$subj."'");

if(isset($_POST[$subj])) {

echo "<tr bgcolor='#33cc66' align='center'><td height='86' rowspan='2' bgcolor='#ccffff'>".$przedmioty[$subj]."</td>";
$i=0;
while ($i<27) {
$rek = mysqli_fetch_array($gr);
echo "<td width='20' height='20'>";
if(isset($_POST[$rek['gradeAbbrev']])) {
echo $rek['gradeValue'];
}

echo "</td>";
$i++;

}
$i=0;
echo "</tr>";
echo "<tr bgcolor='#5555ff' align='center'>";
$gr = mysqli_query($connection, "SELECT * FROM grades WHERE 

userId='2' AND subjectId='".$subj."'");
while ($i<27) {
echo "<td width='20' height='20'>";
$rek = mysqli_fetch_array($gr);
if (isset($_POST[$rek['gradeAbbrev']])) {
echo $rek['gradeWeight'];
}
echo "</td>";
$i++;
}
echo "</tr>";
}
}
echo "</table>";
}



?>



<?php include('_footer_loggedin.php'); ?>\
