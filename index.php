<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Certificate Registration Form</title>
   <style>
        input, select {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        div.registration-form{
            text-align: center;
            font-family: Tahoma, Geneva, sans-serif;
            font-weight: lighter;
            margin: 100px auto;
        }

        h1 {
            margin: 50px auto;
        }

        label{
            text-align: center;
            color: black;
            font-size: 20px;
        }

        select{
            padding: 12px;
            border-radius: 5px;
            text-align: center;
            width: 30%;
            border: 1px solid #e5e5e5;
            margin: 20px auto;
        }

        input{
            padding: 12px;
            border-radius: 5px;
            text-align: center;
            width: 30%;
            border: 1px solid #e5e5e5;
            margin: 20px auto;
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
            border-radius: 5px;
            text-align: center;
            background-color: #008080;
            border-color: #008080;
            color: white;
            width: 30%;
            margin: 20px auto;
        }

        button:hover {
            background-color: white;
            color: #008080;
        }
   </style>

</head>
<body>
   <div>
   <form action="registration.php" method="POST" >

   <div class="registration-form">
            <h1>Certificate Registration Form</h1>
            <label for="certificate-type">Certificate Type</label><br>
            <select type="text" name="certificate_type" required>
                <option value="" disabled selected>Select your option</option>
                <option value="Certificate">Certificate</option>
                <option value="Diploma">Diploma</option>
                <option value="Bachelor">Bachelor</option>
                <option value="Master">Master</option>
                <option value="PhD">PhD</option>
            </select>
            <br>
            <label for="issued-by">Issued By</label><br>
            <input type="text" placeholder="Issued by e.g. UDSM" name="issued_by"  required>
            <br>
            <label for="year-issued">Year Issued</label><br>
            <input type="date" placeholder="Year Issued" name="year_issued"  required>
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