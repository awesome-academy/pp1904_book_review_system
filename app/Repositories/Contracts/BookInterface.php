<?php

namespace App\Repositories\Contracts;

interface BookInterface {

    public function getAll();

    public function find($id);

    public function findBySlug($slug);

    public function delete($id);

    public function create($request);

    public function update($request, $slug);

    public function rate($request);

    public function updateRateAverage($book_id);

    public function findByCategory($slug);

    public function searchByTitle($key_word);

    public function storeImage($request);

}
