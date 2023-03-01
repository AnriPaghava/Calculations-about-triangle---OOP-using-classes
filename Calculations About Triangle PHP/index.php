<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Triangles</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="center">
    <div class="content">
        <form method="post" action="show_result.php">
            <div class="info">
                <p>შემოიტანეთ გვერდების მნიშნველობები</p>
            </div>
            <table>
                <tr>
                    <td>
                        <label for="sideA">პრიველი გვერდი: </label>
                    </td>
                    <td>
                        <input type="text" id="sideA" name="sideA" required>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label for="sideB">მეორე გვერდი: </label>
                    </td>
                    <td>
                        <input type="text" id="sideB" name="sideB" required> 
                    </td>
                </tr>

                <tr>
                    <td>
                        <label for="sideC">მესამე გვერდი:</label>
                    </td>
                    <td>
                        <input type="text" id="sideC" name="sideC" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="type">სამკუთხედის ტიპი</label>
                    </td>
                    <td>
                        <select id="type" name="type">
                            <option selected value="1">ტოლგვერდა</option>
                            <option value="2">სხვადასხვა გვერდა</option>
                            
                        </select>
                    </td>
                </tr>

            </table>
            <div class="center_button">
                <div>
                    <input type="submit" name="Init" value="გამოთვლა">
                </div>
            </div>
        </form>
    </div>
</div>
</body>
</html>