<?php
/**
 * @param $array 'File to encode'
 * @param $file_name 'File where array will be encoded(path)'
 * @return bool
 */
function array_to_file($array,$file_name): bool
{
    $data = json_encode($array);
    $bytes_written = file_put_contents($file_name, $data);

    return $bytes_written !== false;
}

function file_to_array(string $file_path)
{
    if (file_exists($file_path)) {
        $data = file_get_contents($file_path);
            if($data !== false) {
                return json_decode($data, true) ?? [];
            }
            return [];
    }

    return 'lopas esi';
}

