<?php

const FILES_DIRECTORY = "./files";
function comprobarDirectorio(string $path, string $name): bool
{
    return false;
}

function createDirectory(string $path, string $name): bool|string
{
    $contentOfDirectory = scandir(FILES_DIRECTORY);
    var_dump($contentOfDirectory);
    if (!in_array($name, $contentOfDirectory)) {
        mkdir(FILES_DIRECTORY . $name);
        return true;
    }
    return true;
}

function manageFiles(array $imageData)
{
    foreach ($imageData as $file) {

    }
}