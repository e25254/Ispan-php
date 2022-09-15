<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>a20220905-color</title>
</head>
<style>
    td {
        width: 30px;
        height: 30px;
    }
</style>

<body>
    <input type="text" id="info" readonly>
    <table border="1">
        <?php for ($i = 0; $i < 16; $i++) : ?>
            <tr>
                <?php for ($k = 0; $k < 16; $k++) : ?>
                    <td style="background-color: <?= sprintf("#%X%X00%X%X",$i,$k,$k,$i) ?>"></td>
                <?php endfor ?>
            </tr>
        <?php endfor ?>
    </table>
    <script>
        let table = document.querySelector('table')

        table.addEventListener('mouseover',function(event){
            let target = event.target
            info.value = target.style.backgroundColor
        })


    </script>
</body>

</html>