
<html>
    <head>
        <title>Addition of Question Paper</title>
        </head>
    <body>
        <form action ="tp.php" method="POST">
		<h2 align="center">Select Your Choices</h2>
		<hr width="20%" height="50%">
		<br>
		<br>
		<br>
		<br>
		<br>
            <table align="center" border="0" cellspacing="20">
                
                    <tr>
                    <td>SUBJECT NAME:</td><td><select name="Subject">
                        <option>MATHS</option>
                        <option>COMPUTER SYSTEM ARCHITECTURE</option>
                        <option>JAVA TECHNOLOGY</option>
                        <option>DISCRETE MATHEMATICS</option>
                        <option>DESIGN AND ANALYSIS OF ALGORITHM</option>
                    </td></tr>
                    <tr>
                    <td>EXAM TYPE:</td><td><select name="Exam_Type">
                        <option>1st Internal</option>
                        <option>2nd Internal</option>
                        <option>3rd Internal</option>
                        <option>External</option>
                    </td>
                    </tr>
                    <tr>
                        <td align="center"><input type="submit" name="sub" value="Submit"></td>
                    </tr>
              </table>
        </form>
        </body>
</html>
