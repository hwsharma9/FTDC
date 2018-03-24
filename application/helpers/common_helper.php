<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('setSessionsMsg'))
{
    function setSessionsMsg()
    {
        $CI = & get_instance();
        $html = '';
        $html = '<div class="alert alert-success alert-dismissible" role="alert" '; if($CI->session->flashdata('message')==''){ $html .= ' style="display:none"';  } $html .= '>';
                   $html .= '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><p>'.
                    $CI->session->flashdata('message');
        $html .= '</p></div>
                    <div class="alert alert-danger alert-dismissible" role="alert"'; if($CI->session->flashdata('emessage')==''){ $html .= ' style="display:none"'; } $html .= '>';
                $html .= '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><p>'.
                    $CI->session->flashdata('emessage');
        $html .= '</p></div>';
        return $html;
    }
}
?>