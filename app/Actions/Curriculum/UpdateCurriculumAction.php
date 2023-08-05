<?php

namespace App\Actions\Curriculum;

use App\Models\Curriculum;
use App\Models\Testimonial;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Storage;

class UpdateCurriculumAction
{
    public function execute(Collection $collection, Curriculum $curriculam)
    {
        try{
            $curriculam->title = $collection->get('title');
            $curriculam->syllabus = $collection->get('syllabus');
            $curriculam->age = $collection->get('age');
            $curriculam->duration = $collection->get('duration');
            $curriculam->fee = $collection->get('fee');
            $curriculam->class_size = $collection->get('class_size');
            $curriculam->intervals = $collection->get('intervals');
            $curriculam->description = $collection->get('description');

            if ($collection->has('title_image')) {
                $currentImage = $curriculam->title_image;
                Storage::disk('uploads')->delete($currentImage);
                $curriculam->title_image =  $collection->get('title_image')->store('curriculums', 'uploads');
            }

            if ($collection->has('main_image')) {
                $currentImage = $curriculam->main_image;
                Storage::disk('uploads')->delete($currentImage);
                $curriculam->main_image =  $collection->get('main_image')->store('curriculums', 'uploads');
            }

            if ($curriculam->save()) {
                return true;
            }
            return false;
        } catch (\Throwable $th) {
            return false;
        }
    }
}
