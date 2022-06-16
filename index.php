<?php
$conexion = mysqli_connect('localhost', 'root', '1018', 'prueba');
$sql = 'SELECT id,nombre from t_paises';
$result = mysqli_query($conexion, $sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Paises</title>
    <link rel="stylesheet" type="text/css" href="select2/select2.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" 
        crossorigin="anonymous">
    </script>
    <script src="select2/select2.min.js"></script>
</head>

<body>
    <section style="text-align: center;">
        <select id="controlBuscador" style="width: 50%;">
            <?php while ($ver = mysqli_fetch_row($result)) { ?>
                <option value="<?php echo $ver[0] ?>">
                    <?php echo $ver[1] ?>
                </option>
            <?php } ?>
        </select>
    </section>
</body>

</html>
<script>
    $(document).ready(function(){
        $('#controlBuscador').select2();
    });
</script>
