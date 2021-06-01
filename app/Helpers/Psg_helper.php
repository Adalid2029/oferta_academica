<?php

use App\Models\Consultas;

if (!function_exists('css_tag')) {
    function css_tag($src = '', $type = 'text/css')
    {
        $css = '<st' . 'yle type="' . $type . '">';
        if (is_file(FCPATH . 'css/' . $src . '.css')) {
            if (strpos($src, '://') === FALSE) {
                ob_start();
                require(FCPATH . 'css/' . $src . '.' . 'css');
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
        if (is_file(FCPATH . 'js/' . $src . '.js')) {
            if (strpos($src, '://') === FALSE) {
                ob_start();
                require(FCPATH . 'js/' . $src . '.' . 'js');
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
if (!function_exists('mes_literal')) {
    function mes_literal($mes = 0)
    {
        switch (intval($mes)) {
            case 1:
                return 'ENERO';
                break;
            case 2:
                return 'FEBRERO';
                break;
            case 3:
                return 'MARZO';
                break;
            case 4:
                return 'ABRIL';
                break;
            case 5:
                return 'MAYO';
                break;
            case 6:
                return 'JUNIO';
                break;
            case 7:
                return 'JULIO';
                break;
            case 8:
                return 'AGOSTO';
                break;
            case 9:
                return 'SEPTIEMBRE';
                break;
            case 10:
                return 'OCTUBRE';
                break;
            case 11:
                return 'NOVIEMBRE';
                break;
            case 12:
                return 'DICIEMBRE';
                break;
            default:
                return '';
                break;
        }
    }
}
// if (!function_exists('insertar_tabla')) {
//     function insertar_tabla($tabla = null, $datos = null)
//     {
//         $CI = &get_instance();
//         return ($CI->db->insert($tabla, $datos)) ? $CI->db->insert_id() : $CI->db->error();
//     }
// }

if (!function_exists('seleccionar_tabla')) {
}

// if (!function_exists('actualizar_tabla')) {
//     function actualizar_tabla($tabla = null, $datos = null, $condicion = null)
//     {
//         $CI = &get_instance();
//         return ($CI->db->update($tabla, $datos, $condicion)) ? true : $CI->db->error;
//     }
// }

// if (!function_exists('eliminar_tabla')) {
//     function eliminar_tabla($tabla = null, $condicion = null)
//     {
//         $CI = &get_instance();
//         return ($CI->db->delete($tabla, $condicion)) ? true : $CI->db->error;
//     }
// }
