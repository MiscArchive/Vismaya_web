<?php

namespace App\Actions\Testimonials;

use App\Models\Testimonial;
use Illuminate\Support\Collection;

class CreateTestimonialAction
{
    public function execute(Collection $collection)
    {
        try {
            $testimonial = new Testimonial();
            $testimonial->title = $collection->get('title');
            $testimonial->description = $collection->get('description');
            $testimonial->author = $collection->get('author');
            $testimonial->image = $collection->has('image') ? $collection->get('image')->store('testimonials', 'uploads') : NULL;
            if ($testimonial->save()) {
                return true;
            }
            return false;
        } catch (\Throwable $th) {
            return false;
        }
    }
}
