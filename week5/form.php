<?php
    if($_GET['save'] == 'Submit'){
        print "I am " . $_GET['name']; 

        exit;
    }

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="form_action.php" method="get">
        <table border="1">
            <tr>
                <td colspan="2"> User Form </td>
            </tr>
            <tr>
                <th style="width:200px"> Enter name </th>
                <td>
                    <input type="text" name="name" id="txtName" placeholder="Input name" style="width:500px">
                </td>
            </tr>
            <tr>
                <th style="width:200px"> Password </th>
                <td>
                    <input type="password" name="password" id="txtPassword" style="width:200px">
                </td>
            </tr>
            <tr>
                <th style="width:200px"> Enter Address </th>
                <td>
                    <textarea name="address" id="txtAdress" cols="30" rows="10"></textarea>
                </td>
            </tr>
            <tr>
                <th style="width:200px"> Select Game </th>
                <td>
                    <Input type="checkbox" name="game[0]" value="Hockey" /> Hockey <br/>
                    <input type="checkbox" name="game[1]" value="Tennis" /> Tennis <br/>
                    <input type="checkbox" name="game[2]" value="Football" />Football <br/>
                </td>
            </tr>
            <tr>
                <th style="width:200px"> Gender </th>
                <td>
                    <input type="radio" name="gender" value="Male" /> Male
                    <input type="radio" name="gender" value="Female" /> Female
                    <input type="radio" name="gender" value="N/A" /> N/A
                </td>
            </tr>
            <tr>
                <th style=width:200px> Age </th>
                <td>
                    <select name="age" id"">
                        <option value="young">1-15</option>
                        <option value="teen">16-22</option>
                        <option value="worker">23-60</option>
                        <option value="older">61++</option>
                    </select> 
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="button" value="Click Me" />
                    <input type="button" value="Reset" />
                    <input type="button" value="Submit Form" />
                </td>
            </tr>
        </table>
    </form>
    
</body>
</html>