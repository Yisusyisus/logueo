<?php
    require 'conn_mysqli.php';
    require 'functions.php';
    if (isset($_POST['use']) || isset($_POST['pas']))
    {
        $name=$_POST['use'];
        $pass=$_POST['pas'];
        if ($name=="" || $pass=="")
        {
            ?>
            <label style='color:red'>
                <b>Campo Vacio</b>
            </label>
            <?php
        }
        else
        {
            $sql_user="SELECT *FROM personal WHERE rfcp = '".$name."' AND passwordp = '".md5($pass)."'";
            if (!($resultado=$conn->query($sql_user)))
            {
                mostrarError($conn,$sql_user);
            }
            $feclave=$resultado->fetch_assoc();
            $tipo_user=$feclave['fk_puesto'];
            if ($feclave['rfcp'] && $feclave['passwordp'])
            {
                if ($tipo_user==1)
                {
                    session_start();
                    $_SESSION['s2cd0rf1it8t'] = 1;
                    $_SESSION["usuarioactual"] = $feclave['rfcp'];
					$_SESSION["sucursal"] = $feclave['idsuc'];
                    echo "<script>window.location.href='sifat/';</script>";
                }
                if ($tipo_user==2)
                {
                    session_start();
                    $_SESSION['s2cd0rf1it8t'] = 1;
                    $_SESSION["usuarioactual"] = $feclave['rfcp'];
					$_SESSION["sucursal"] = $feclave['idsuc'];
                    echo "<script>window.location.href='sifat/';</script>";
                }
                if ($tipo_user==3)
                {
                    session_start();
                    $_SESSION['s2cd0rf1it8t'] = 1;
                    $_SESSION["usuarioactual"] = $feclave['rfcp'];
					$_SESSION["sucursal"] = $feclave['idsuc'];
                    echo "<script>window.location.href='anticipos/';</script>";
                }
            }
            else
            {
                ?>
                <label style='color:red'>
                    <b>Datos Incorrectos.</b>
                </label>
                <?php
            }
        }
    }
?>