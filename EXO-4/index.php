<HTML>
<HEAD>
    <STYLE type="text/css">h1 {
            font-weight: bold;
            text-decoration: underline;
            text-align: center
        }

        td {
            width: 50px;
            height: 50px;
            border: 1px solid black;
        }

        table {
            border-collapse: collapse;
        }</STYLE>
    <TITLE>Puissance 4</TITLE></HEAD>
<BODY style='background-color:#F0E0D0'><h1>Puissance 4</h1>
<TABLE><?php
    $taill = 800;
    for ($i = 0; $i != $taill; $i++) {

        echo "<tr>";
        for ($j = 0; $j != $taill; $j++) {
            if (($j+$i) %2) {
                echo("<td><img src=\"rouge.JPG\"></td>");
            } else {
                echo("<td><img src=\"bleu.jpg\"</td>");
            }

        }
        echo "</tr>";
    } ?></TABLE>
</BODY>
</HTML>
