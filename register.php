<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Table</title>
</head>
<body>
    <h1> ADD STUDENT </h1>
    <!-- Form for input -->
    <form action="action_page.php" method="POST">
        <table border="1">
            <tr>
                <th> Question </th>
                <th> Answer </th>
            </tr>
            <tr>
                <td> Name: </td>
                <td> <input type="text" id="name" name="fullname" required placeholder=" Enter your Fullname"> </td>
            </tr>
            <tr>
                <td> Gender: </td>
                <td>
                    <input type="radio" name="gender" value="male"> Male
                    <input type="radio" name="gender" value="female"> Female
                </td>
            </tr>
            <tr>
                <td> Country: </td>
                <td>
                    <select name="country">
                        <option value="SELECT COUNTRY">-SELECT COUNTRY-</option>
                        <option value="PH">Philippines</option>
                        <option value="AUS">Australia</option>
                        <option value="US">United States</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2"style= "text-align:center;">
                    <input style= "padding: 8px; color: white;background-color: blue;" type="submit" id="submit" name="save" value="Save">
                </td>
            </tr>
        </table>
    </form>

    