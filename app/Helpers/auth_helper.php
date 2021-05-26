<?php defined('BASEPATH') or exit('No direct script access allowed');
if (!function_exists('autentificado')) {
    function autentificado($controlador = NULL, $funcion = NULL)
    {
        $CI =& get_instance();
        $id = $CI->encryption->decrypt($CI->session->userdata('id', TRUE));
        $usuario = $CI->auth_model->verificar_usuario($id, $controlador, $funcion);
        return (is_null($usuario) ? FALSE : $usuario);
    }
}
if (!function_exists('es')) {
    function es($grupos = array())
    {
        $CI =& get_instance();
        $id = $CI->encryption->decrypt($CI->session->userdata('id', TRUE));
        if (is_array($grupos)) {
            return $CI->auth_model->verificar_grupos($id, $grupos);
        } else {
            return $CI->auth_model->verificar_grupos($id, explode(',', $grupos));
        }
    }
}
if (!function_exists('enlaces_menu')) {
    function enlaces_menu()
    {
        $CI =& get_instance();
        $id = $CI->encryption->decrypt($CI->session->userdata('id', TRUE));
        $enlaces = $CI->auth_model->enlaces_menu($id);
        return (is_null($enlaces) ? FALSE : $enlaces);
    }
}
if (!function_exists('css_tag')) {
    function css_tag($src = '', $type = 'text/css')
    {
        $css = '<st' . 'yle type="' . $type . '">';
        if (is_file(FCPATH . 'assets/css/' . $src . '.css')) {
            if (strpos($src, '://') === FALSE) {
                ob_start();
                require(FCPATH . 'assets/css/' . $src . '.' . 'css');
                $css .= ob_get_clean();
            }
        }
        $css .= '</st' . 'yle>';
        return $css;
    }
}
if (!function_exists('script_tag')) {
    function script_tag($src = '', $flashdata = NULL, $type = 'text/javascript')
    {
        $script = '<scr' . 'ipt type="' . $type . '">';
        if (is_file(FCPATH . 'assets/js/' . $src . '.js')) {
            if (strpos($src, '://') === FALSE) {
                ob_start();
                require(FCPATH . 'assets/js/' . $src . '.' . 'js');
                $script .= ob_get_clean();
            }
        }
        if (is_array($flashdata)) {
            foreach ($flashdata as $kmsg => $msg) {
                $script .= "$.toast({
                                icon: `<?php echo ((is_numeric({$kmsg}) || empty({$kmsg})) ? 'error' : {$kmsg}); ?>`,
                                heading: `<?php echo ((is_numeric({$kmsg}) || empty({$kmsg})) ? 'ERROR [' . {$kmsg} . ']' : 'INFORMACIÓN'); ?>`,
                                text: `<?php echo {$msg} ?>`,
                                position: `top-center`,
                                showHideTransition: `plain`,
                                allowToastClose: true,
                                loaderBg: `#FFF`,
                                hideAfter: 5000,
                                stack: 5 });";
            }
        }
        $script .= '</scr' . 'ipt>';
        return $script;
    }
}