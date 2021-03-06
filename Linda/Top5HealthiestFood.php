<?php
include("background.php");
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>The Top 5 Healthiest Foods for Kids</title>
    <style>
        h2 {
            font-family: lucida handwriting;
            color: #FAEBD7;
            text-align: center;
        }

        div {
            margin: 50px 15px 50px 60px;
            background-color: orchid;
            width: 90%;
            height: 80%;
            border: 1px groove;
            border-color: transparent;
        }


        .logo {
            width: 150px;
            height: 160px;
            overflow: hidden;
            margin-top: 0px;
            margin-bottom: -20px;
            box-shadow: none;
            border: none;
        }

        table {
            width: 100%;
            padding: 50px;
            padding-left: 150px;
            text-align: center;
            color: pink;
            font-family: Sans, cursive;
            font-size: 20px;
        }
        p{
        	text-align: center;
        	color: antiquewhite;
        	font-family:Sans, cursive;
        	padding: 50px;

        }
        img {
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 5px;
            width: 150px;
            height: 150px;
            box-shadow: 0px 0px 6px 3px pink;
            margin-left: 15px;
        }

            img:hover {
                box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
            }

        #main {
            padding: 5px;
            background-color: darkorchid;
        }
    </style>
</head>
<body bgcolor="<?php echo $bgColor ?>"><div>
        <h2>The Top 5 Healthiest Foods for Kids</h2>
        <table cellpadding="10px">
            <tr id="main">
                <td style="font-size: 16px;">
                    <a target="_blank" href="food/jogurt.jpg">
                        <img src="food/jogurt.jpg" alt="Jogurt">
                    </a>
                </td>
                <td>"It's a healthy, filling snack that checks the boxes on protein and vitamin D, a nutrient many kids lack in their diet." Yogurt also delivers probiotics, good bacteria that are important for maintaining a healthy gut.</td>
            </tr>

            <tr id="main">
                <td style="font-size: 16px;">
                    <a target="_blank" href="food/beans.jpg">
                        <img src="food/beans.jpg" alt="Beans">
                    </a>
                </td>
                <td>Beans are a humble superfood. They're loaded with protein and fiber, plus they're cheap and take little time to prepare. Buy low-sodium canned beans such as black beans, chickpeas or kidney beans</td>
            </tr>

            <tr id="main">
                <td style="font-size: 16px;">
                    <a target="_blank" href="food/eggs.jpg">
                        <img src="food/eggs.jpg" alt="Eggs">
                    </a>
                </td>
                <td>One large egg has 6 grams of protein and delivers vitamin D, vitamin B12 and iron. Some eggs are also fortified with omega-3 fatty acids, which aid in kids' brain development.</td>
            </tr>

            <tr id="main">
                <td style="font-size: 16px;">
                    <a target="_blank" href="food/avocado.jpg">
                        <img src="food/avocado.jpg" alt="Avocado">
                    </a>
                </td>
                <td>Avocados are an easy way to get healthy fats into your child's diet. They are high in monounsaturated fats, which decrease inflammation and keep cholesterol levels healthy.</td>
            </tr>

            <tr id="main">
                <td style="font-size: 16px;">
                    <a target="_blank" href="food/milk.jpg">
                        <img src="food/milk.jpg" alt="Milk">
                    </a>
                </td>
                <td>Milk helps build strong bones because it's full of calcium and vitamin D. One 8-ounce glass is also high in phosphorus, vitamin B12 and potassium, and has 8 grams of protein. Babies shouldn't have cow's milk until age 1.</td>
            </tr>


           </table>
        </div>
</body>
</html>