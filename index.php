<?php
    if (isset($_POST['name'])) {
        $db = json_decode(file_get_contents('usuarios.json'), true);
        foreach ($db as $row) {
            if (strtolower($row['nombre']) == strtolower($_POST['name'])) {
                ?>
                <script>alert('contraseña ')</script>



                <?php
                if (password_verify($_POST['pass'], $row['password'])) {
                    ?>
                    <script>alert('contraseña correcta')</script>
                    <?php
                } else {
                    
                    ?>
                    <script>alert('contraseña incorrectas')</script>
                    <?php
                }
                break;
            }
        }
    }
?>

<form method="post">
    <input type="text" name="name">
    <input type="password" name="pass">
    <button type="submit">Enviar</button>
</form>