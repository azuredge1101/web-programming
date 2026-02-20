<html>
    <body>
<?php
if(isset($_POST["fname"])){
$s1=$_POST["fname"];
$s2=$_POST["gender"];
$s3=$_POST["date"];
$s4=$_POST["activity"];
$s5=$_POST["comments"];
}
?>
<style>
table, th, td {
  border:1px solid black;
  border-collapse: collapse;
}
</style>

        <table border="1" width="80%" cellspacing="5" cellpadding="5">
			<tr>
				<th>姓名</th>
				<th>性別</th>
                <th>生日</th>		
                <th>報名活動</th>		
                <th>備註</th>		
			</tr>
			<tr>
				<td><?php $s1 = $_GET['fname']; echo $s1;?></td>
				<td><?php $s2 = $_GET['gender']; echo $s2;?></td>
                <td><?php $s3 = $_GET['date']; echo $s3;?></td>
                <td><?php $s4 = $_GET['activity']; echo $s4;?></td>
                <td><?php $s5 = $_GET['comments']; echo $s5;?></td>
			</tr>
        </table>
    </body>
</html>