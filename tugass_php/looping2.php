<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
     table,th, td {
  border: 0.5px solid black;
}
    th{
        background-color:#D6EEEE;
    }
    tr:nth-child(even) {
        background-color: rgb(180, 180, 180);
    }
    </style>
</head>
<body>
<table>
<thead>
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Kelas</th>
    </tr>
    <?php
    $i=1;
    while($i <= 10){
        for($j=10;$j>=1;$j--){
        echo
        "<tr>
            <td>{$i}</td>
            <td>Nama kelas ke {$i}</td>
            <td>Kelas {$j}</td>
        </tr>";
        $i++;
        }
       
    }
    ?>
</thead>  
</table>
</body>
</html>