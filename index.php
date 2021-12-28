<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Form</title>
   <style>
                div.registration-form{
                text-align: center;
                                 }
            label{
                text-align: center;
                color: black;
                font-size: 20px;
                font-weight: bolder;
                 }
            select{
                padding: 12px;
                border-radius: 12px;
                margin-bottom: 20px;
                text-align: center;
                margin-top: 20px;
                width: 40%;
                }
            input{
                padding: 12px;
                border-radius: 12px;
                margin-bottom: 20px;
                margin-top: 20px;
                text-align: center;
                width: 40%;
                 }
            input[type=number] {
                -moz-appearance: textfield;
                }
            input::-webkit-outer-spin-button,
            input::-webkit-inner-spin-button {
                -webkit-appearance: none;
                 }
            ::placeholder{
                text-align: center;
                 }
            button{
                padding: 12px;
                border-radius: 12px;
                margin-bottom: 20px;
                margin-top: 20px;
                text-align: center;
                background-color: blue;
                width: 40%;

                }
   </style>

</head>
<body>
   <div>
   <form action="registration.php" method="POST" >

   <div class="registration-form">
            <h1>Registration Form</h1>
            <label for="certificate-type">Certificate Type</label><br>
            <select type="text" name="certificate_type" required>
                <option value="Certificate">Certificate</option>
                <option value="Diploma">Diploma</option>
                <option value="Bachelor">Bachelor</option>
                <option value="Master">Master</option>
                <option value="PhD">PhD</option>
            </select>
            <br>
            <label for="issued-by">Issued By</label><br>
            <input type="text" placeholder="Issued by eg UDSM" name="issued_by"  required>
            <br>
            <label for="year-issued">Year Issued</label><br>
            <input type="number" placeholder="Year Issued" name="year_issued"  required>
            <br>
            <label for="date-uploaded">Date Uploaded</label><br>
            <input type="date" placeholder="Date uploaded" name="date_uploaded"  required>
            <br>
            <label for="attachment">Attachment File</label><br>
            <input type="file" placeholder="Attachment PDF File" name="attachment_file" accept=".pdf" >
            <br>
            <button type="submit" value="submit" name="submit">Register</button>
        </div>
    </form>
   </div>
</body>
</html>