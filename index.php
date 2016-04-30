<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Breakfast Management</title>
        <style>
            table, th, td {
                border: 1px solid black;
            }
            th, td {
                padding: 5px;
            }
        </style>
    </head>
    <body>
        <h1><center>Breakfast Management</center></h1>
        
        <div style="width:100%;">
            
            
        <div style="float:left; width: 40%">
                Food Item List
        </div>
            
            
        <div style="float:right;">             
        <!-- Edit Participation List Button -->
        <form name="Participant List" action="participant_list.php" method="GET">
        <input type="submit" value="Edit Participant List" />
        </form>
        
        <!-- Participation Table -->
        <table boarder="1" style="width:100%">
            <tr>
                <th> Name </th>
                <th> Email </th>
            </tr>
            <tr>
                <td>Sarah</td><td>Rainbowhappytime@gmail.com</td>
            </tr>
        </table>
        
        </div>
        </div>
        
        <?php
        ?>
    </body>
</html>