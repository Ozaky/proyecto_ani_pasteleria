<?php
class pago_modelo
{

    public static function mdlRegistrar($datos)
    {
        $i = new Conexion();
        $c = $i->getConexion();
        $sql = "INSERT INTO pago
                (Pag_Ped_Id, pag_forma_pago, pag_valor)
                VALUES
                (? , ? , ? )";
        $s = $c->prepare($sql);
        $v = array(
            $datos["pag_ped_id"],
            $datos["pag_forma_pago"],
            $datos["pag_valor"],
        );
        return $s->execute($v);
        //return $r;
    }

    public static function mdlListado()
    {
        $i   = new Conexion();
        $c   = $i->getConexion();
        $sql = "SELECT * FROM pago";
        $s   = $c->prepare($sql);
        $s->execute();
        return $s->fetchAll();
    }
    public static function mdlEliminar($cod)
    {
        $i   = new Conexion();
        $c   = $i->getConexion();
        $sql = "DELETE FROM pago WHERE Pag_Ped_Id = ? ";
        $s   = $c->prepare($sql);
        $v   = array($cod);
        return $s->execute($v);
    }

    public static function mdlConsultarXcod($cod)
    {
        $i   = new Conexion();
        $c   = $i->getConexion();
        $sql = "SELECT * FROM pago where Pag_Ped_Id = ? ";
        $s   = $c->prepare($sql);
        $v   = array($cod);
        $s->execute($v);
        return $s->fetch();
    }
    public static function mdlVerificar($cod){
        $i   = new Conexion();
        $c   = $i->getConexion();
        $sql = "SELECT * FROM pedido WHERE Ped_Id_Pedido = ? ";
        $s   = $c->prepare($sql);
        $v   = array($cod);
        $s->execute($v);
        return $s->rowCount();
    }
    public static function mdlEditar($datos)
    {
        $i = new Conexion();
        $c = $i->getConexion();
        $sql = "update pago set Pag_Ped_Id     =  ? ,
                            pag_forma_pago  =  ? ,
                            pag_valor       =  ? 
                          where Pag_Ped_Id = ? ";
        $s = $c->prepare($sql);
        $v = array(
            $datos["pag_ped_id"],
            $datos["pag_forma_pago"],
            $datos["pag_valor"],
            $datos["pag_ped_id"]
        );
        return $s->execute($v);
    }

    public static function mdlConsultar($codigo)
    {
        $i   = new Conexion();
        $c   = $i->getConexion();
        $sql = "SELECT * FROM pago WHERE Pag_Ped_Id LIKE '$codigo%'";
        $s   = $c->prepare($sql);
        $v   = array($codigo);
        $s->execute();
        return $s->fetchAll();
    }
}
