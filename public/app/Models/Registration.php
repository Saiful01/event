<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Registration extends Model implements HasMedia
{
    use SoftDeletes, InteractsWithMedia, HasFactory;

    public $table = 'registrations';

    protected $appends = [
        'payment_slip',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public const GENDER_SELECT = [
        'Male'   => 'Male',
        'Female' => 'Female',
        'Other'  => 'Other',
    ];

    public const TITLE_SELECT = [
        'Mr'   => 'Mr',
        'Mrs'  => 'Mrs',
        'Ms'   => 'Ms',
        'Dr'   => 'Dr',
        'prof' => 'prof',
    ];

    public const PROFESSION_SELECT = [
        'Academian'  => 'Academian',
        'Researcher' => 'Researcher',
        'Industrial' => 'Industrial',
        'Student'    => 'Student',
        'Others'     => 'Others',
    ];

    protected $fillable = [
        'email',
        'title',
        'full_name',
        'gender',
        'institution',
        'profession',
        'current_position',
        'faculty',
        'department',
        'research_field',
        'address',
        'city',
        'postal_code',
        'country',
        'mobile',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')->fit('crop', 50, 50);
        $this->addMediaConversion('preview')->fit('crop', 120, 120);
    }

    public function getPaymentSlipAttribute()
    {
        return $this->getMedia('payment_slip')->last();
    }
}
