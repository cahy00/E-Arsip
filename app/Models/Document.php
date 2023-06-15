<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

		protected $fillable = [
			'number', 'name', 'type_document_id', 'date', 'file'
		];

		public function typedocument()
		{
				return $this->belongsTo(TypeDocument::class, 'type_document_id');
		}
}
