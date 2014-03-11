<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor..
/* 
 * @author Waruna Oshan Wisumperuma
 * @contact warunaoshan@gmail.com
 */

https://gist.github.com/oshanz/8664920

-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>
            Example
        </title>
        <link rel="stylesheet" href="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" />
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
        <script src="script.js"></script>
    </head>
    <body>
        <table>
            <tr>
                <td>CAT CODE</td>
                <td>:</td>
                <td><select id="cat"></select></td>
            </tr>
            <tr>
                <td>SUBJECT CODE</td>
                <td>:</td>
                <td><input type="text" id="sub" onclick="auto();"/></td>
            </tr>
            <tr>
                <td>DESCRIPTION</td>
                <td>:</td>
                <td><input type="text" id="DESCRIPTION"/></td>
            </tr>
        </table>
        <div id="bar" hidden="true"><img src="bar.gif"/></div>
    </body>
</html>
