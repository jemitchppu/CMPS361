<html>
    <head>
        <title>My First Php Page</title>
        <style>
            body{
                font-family: Arial, Helvetica, sans-serif;
                background-color: #f4f4f4;
                color: #333;
                text-align: center;
                margin-top: 50px;
            }
        </style>
    </head>
    <body>
        <!--add Php to the body--> 
        <?php
        $name = "Russel Wilson";
        ?>


        <p>Hi! My name is <?php echo $name ?>, and I'm the new Steelers starting quarterback for 2024</p>
    </body>
</html>