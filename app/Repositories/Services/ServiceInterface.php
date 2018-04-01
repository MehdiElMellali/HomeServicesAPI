<?php



namespace App\Repositories\Services;

interface ServiceInterface
{
    function getAll();

    function getById($id);

    function saveOrUpdate($request , $id = null);

    function update($id, array $attributes);

    function delete($id);

   // function createOrUpdate($array , $id = null);
}