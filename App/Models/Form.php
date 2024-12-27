<?php
namespace App\Models;
class Form {
    public string|null $title;
    public int $id;
    public bool|null $enabled;
    public string|null $placeholder;

    public function __construct(string|null $title, int $id, bool|null $enabled, string|null $placeholder) {
        $this->title = $title;
        $this->id = $id;
        $this->enabled = $enabled;
        $this->placeholder = $placeholder;
    }
}