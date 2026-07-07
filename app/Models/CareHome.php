<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CareHome extends Model
{
    use HasFactory;

    protected $table = 'care_homes';

    protected $fillable = [
        'title',
        'subtitle',
        'location',
        'address',
        'map_embed_url',
        'sort_order',
        'description',
        'image_path',
        'contact_no',
        'badge_text',
        'is_public',
    ];

    protected $casts = [
        'is_public' => 'boolean',
        'sort_order' => 'integer',
    ];

    /**
     * Allow pasting either the bare embed URL or the full <iframe> snippet
     * Google Maps' "Embed a map" gives you — only the src="..." URL is stored.
     */
    public function setMapEmbedUrlAttribute(?string $value): void
    {
        if ($value && preg_match('/src="([^"]+)"/i', $value, $matches)) {
            $value = $matches[1];
        }

        $this->attributes['map_embed_url'] = $value;
    }
}