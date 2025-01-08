<?php

use App\Models\Form;
use Core\Http\Res;

require 'clean.php';
require 'agents.php';
function userFilters()
{

    return ['password_hash', 'email_code', 'src', 'type', 'password_reset_hash', 'paystack_ref', 'securionpay_key', 'password_reset_expiry', 'conversation_id'];
}

function getCurrentClass()
{
    $class = explode('\\', get_called_class());
    $class = strtolower(end($class)) . 's';
    return $class;
}

if (!function_exists("findForm")) {
    function findForm($id = null)
    {
        $file = "forms.json";
        if (file_exists($file)) {
            $content = json_decode(file_get_contents($file));
            if(!$id)  return $content;

            $f = null;
            foreach ($content as $form) {

                if ($form->id === $id):
                    $f = $form;
                    break;
                endif;
                continue;
            }
            return $f;
        }
    }
}
if (!function_exists("findAndUpdateForm")) {
    function updateForm(Form $update)
    {
        $file = "forms.json";
        if (file_exists($file)) {
            $content = json_decode(file_get_contents($file));
            $f = array_filter($content, function ($form) use ($update) {
                if ($form->id === $update->id) {
                    if ($update->title) $form->title = $update->title;
                    if ($update->enabled !== null) $form->enabled = $update->enabled;
                    if ($update->placeholder) $form->placeholder = $update->placeholder;
                };
                   return $form;
            });


            $handle = fopen($file, "r+");
            if($handle === false) Res::status(400)::error("Update Failed");

            $updatedContents =  json_encode($f);
            fseek($handle, 0);
            fwrite($handle, $updatedContents);
            ftruncate($handle, strlen($updatedContents));
            fclose($handle);

            return true;
        }
    }
}
