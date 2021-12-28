<?php
    session_start();
     $host='localhost';
     $username = 'root';
     $pass = '';
     $db = 'certificate_information';
     $conn = mysqli_connect($host, $username, $pass, $db);
     if(!$conn)die("Connection failed").mysql_connect_error();

     $certificate_type="";
     $issued_by ="";
     $year_issued="";
     $date_uploaded="";
     $attachment_file="";
     if(isset($_POST['submit'])){
         submit();
     }
     function submit()
     {
         global $db;
         $certificate_type=$_POST['certificate_type'];
        $issued_by =$_POST['issued_by'];
        $year_issued=$_POST['year_issued'];
        $date_uploaded=$_POST['date_uploaded'];
        $attachment_file=$_POST['attachment_file'];

        if ($db) {
           $query="INSERT INTO submit(certificate_type,issued_by,year_issued,date_uploaded,attachment_file)
           VALUES('$certificate_type','$issued_by','$year_issued','$date_uploaded','$attachment_file')
           ";
           mysqli_query($db,$query);
           header('Location:index.php');
        }
     }
    
?>