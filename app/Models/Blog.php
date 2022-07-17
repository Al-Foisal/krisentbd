<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model {
    use HasFactory;

    protected $guarded = [];

    public function blogTags() {
        return $this->belongsToMany(BlogTag::class);
    }

    public function BlogCategories() {
        return $this->belongsToMany(BlogCategory::class);
    }

    public function BlogComments() {
        return $this->hasMany(BlogComment::class);
    }

    public function postedBy()
    {
        return $this->belongsTo(Admin::class,'admin_id','id');
    }
}
