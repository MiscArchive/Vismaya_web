<?php

namespace App\Actions\Testimonials;

use App\Models\Testimonial;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Storage;

class UpdateTestimonialAction
{
    public function execute(Collection $collection, Testimonial $testimonial)
    {
        try {
            $testimonial->title = $collection->get('title');
            $testimonial->description = $collection->get('description');
            $testimonial->author = $collection->get('author');
            $testimonial->status = $collection->get('status');
            if ($collection->has('image')) {
                $currentImage = $testimonial->image;
                Storage::disk('uploads')->delete($currentImage);
                $testimonial->image =  $collection->get('image')->store('testimonials', 'uploads');
            }
            if ($testimonial->save()) {
                return true;
            }
            return false;
        } catch (\Throwable $th) {
            return false;
        }
    }
}
