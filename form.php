
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Landing Page</title>
    </head>
    <body>
    <p>
        <h1 align="center">Hello there</h1>
        <h2 align="center">Select the country you want a list of cities for<br>The following list comprises of the "Best 10 Countries 2021" according to
        <a href ="https://www.usnews.com/news/best-countries/overall-rankings"><i>usnews.com</i></a></h2> 
    </p>

    <form action="insert.php" method="POST">
        <table align="center">
            <tr>
                <td>Name:</td>
                <td>
                    <input type="text" name="username" placeholder="Enter your name" required>
                </td>
            </tr>
            <tr>
                <td>Country:</td>
                <td>
                    <select name="country1" required>
                        <option selected hidden value="">select country</option>
                        <option name="Canada">Canada</option>
                        <option name="Japan">Japan</option>
                        <option name="Germany">Germany</option>
                        <option name="Switzerland">Switzerland</option>
                        <option name="Australia">Australia</option>
                        <option name="United States">United States</option>
                        <option name="New Zealand">New Zealand</option>
                        <option name="United Kingdom">United Kingdom</option>
                        <option name="Sweden">Sweden</option>
                        <option name="Netherland">Netherland</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="submit1" value="Submit">
                </td>
            </tr>
        </table>
    </form>

    <!-- <p>
        You can also enter the name of the country you want. 
            <br>Partial inputs allowed.

        <table>
            <tr>
                <td><input type="search" name="country2" placeholder="Enter country here" required></td>
            </tr>
            <tr>
            <td><input type="submit" name="submit2" value="Submit" required></td>
            </tr>            
        </table>
    </p> -->

    </body>

</html>

