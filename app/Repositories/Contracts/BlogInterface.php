<?php

namespace App\Repositories\Contracts;

interface BlogInterface {

    public function getAll();

    public function findById($id);

    public function findBySlug($slug);

    public function deleteBySlug($slug);

    public function create($request);

    public function update($request, $slug);

    public function findByCategory($slug);

    public function rate($request);

    public function updateRateAverage($book_id);

    public function searchByTitle($key_word);

    public function getMyBlog();

    public function getComment($slug);
}
