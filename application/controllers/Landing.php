<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->library('business/Marca');
        $data['marcas'] = $this->marca->marcas_todos();
        $this->cargar_idioma->carga_lang('landing/landing_page');
        $this->load->view('landing/landing_page', $data);
    }

    public function submarcas_por_marca($idmarcas = 0)
    {
        $submarcas = array();
        if (intval($idmarcas) > 0) {
            $this->load->library('business/Marca');
            $submarcas = $this->marca->modelos_por_idmarca($idmarcas);
        }
        header('Content-Type: application/json');
        echo json_encode($submarcas);
    }

    public function enviar_correo()
    {
        $datos = $this->input->post();
        $this->load->library('business/Marca');
        $datos['marca'] = $this->marca->marca_por_id($datos['marca'])->nombre;
        $datos['submarca'] = $this->marca->modelo_por_id($datos['submarca'])->nombre;

//        $msg = "Datos: " . implode(', ', $datos);
//        echo '{ "alert": "success", "message": "' . $msg . '" }';
//        return;
        $mail = $this->_genera_dto_mail();
        if ($this->_correo_ventas($datos, $mail)){
            $mail->clearAddresses();
            $mail->clearAllRecipients();
            $mail->clearReplyTos();
            $this->_correo_prospecto($datos, $mail);
            $msg = "Gracias por contactarnos, uno de nuestros agentes lo atenderá a la brevedad.";
            echo '{ "alert": "success", "message": "' . $msg . '" }';
            return;
        }
        $msg = "Hubo un error en el envio del correo, intente nuevamente";
        echo '{ "alert": "error", "message": "' . $msg . '" }';
    }

    public function enviar_contacto()
    {
        $datos = $this->input->post();
        $this->load->library('business/Marca');
        $datos['marca'] = $this->marca->marca_por_id($datos['marca'])->nombre;
        $datos['submarca'] = $this->marca->modelo_por_id($datos['submarca'])->nombre;
//        $msg = "Data: " . implode(', ' , $datos);
//        set_bootstrap_alert($msg, BOOTSTRAP_ALERT_INFO);
//        redirect('landing');
//        return;

        $mail = $this->_genera_dto_mail();
        if ($this->_correo_ventas($datos, $mail)){
            $mail->clearAddresses();
            $mail->clearAllRecipients();
            $mail->clearReplyTos();
            $this->_correo_prospecto($datos, $mail);
            $msg = "Gracias por contactarnos, uno de nuestros agentes lo atenderá a la brevedad.";
            set_bootstrap_alert($msg, BOOTSTRAP_ALERT_SUCCESS);
            redirect('landing');
        }
        $msg = "Hubo un error en el envio del correo, intente nuevamente";
        set_bootstrap_alert($msg, BOOTSTRAP_ALERT_DANGER);
        redirect('landing');
    }

    private function _genera_dto_mail()
    {
        $mail = new PHPMailer();
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );
        $mail->isSMTP();
        $mail->Host = 'mail.segurosparaautomoviles.com.mx';
        $mail->SMTPAuth = true;
        $mail->SMTPDebug = 0;
        $mail->SMTPKeepAlive = true; // SMTP connection will not close after each email sent, reduces SMTP overhead
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = '';
        $mail->Username = 'ventas@segurosparaautomoviles.com.mx'; // SMTP username
        $mail->Password = 'Ventas123!';
        $mail->Port = 25;
        $mail->AltBody = 'Para mostrar el mensaje correctamente, por favor, use un visor de email compatible con HTML, ¡Gracias!';
        $mail->CharSet = 'UTF-8';
        $mail->ContentType = 'text/html; charset=utf-8\r\n';
        $mail->isHTML(true);

        return $mail;
    }

    private function _correo_ventas($datos = array(), $mail)
    {
        $mail->setFrom('ventas@segurosparaautomoviles.com.mx', 'Seguros para Autos');
        $mail->Subject = "Nuevo Prospecto";
        $mail->addAddress('ventas@segurosparaautomoviles.com.mx');
        $mail->Body = $this->load->view('correos/correo_ventas', $datos, true);
        if (!$mail->send()) {
            log_message('debug', 'Error envio ventas: ' . $mail->ErrorInfo);
            return false;
        }
        return true;
    }

    private function _correo_prospecto($datos = array(), $mail)
    {
        $mail->setFrom('ventas@segurosparaautomoviles.com.mx', 'Seguros para Autos');
        $mail->Subject = "¡Gracias por contactar!";
        $mail->addAddress($datos['email'], $datos['nombre']);
        $mail->addReplyTo('ventas@segurosparaautomoviles.com.mx', 'Seguros para Autos');
        $mail->Body = $this->load->view('correos/correo_prospecto', $datos, true);
        if (!$mail->send()) {
            log_message('debug', 'Error envio prospecto: ' . $mail->ErrorInfo);
            return false;
        }
        return true;
    }
}
