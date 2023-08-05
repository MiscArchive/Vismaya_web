<?php

namespace App\Actions\Curriculum;

use App\Models\Curriculum;
use Illuminate\Support\Collection;

class CreateCurriculumAction
{
    public function execute(Collection $collection)
    {
        try{
            $curriculum = new Curriculum();
            $curriculum->title = $collection->get('title');
            $curriculum->syllabus = $collection->get('syllabus');
            $curriculum->age = $collection->get('age');
            $curriculum->duration = $collection->get('duration');
            $curriculum->fee = $collection->get('fee');
            $curriculum->class_size = $collection->get('class_size');
            $curriculum->intervals = $collection->get('intervals');
            $curriculum->description = $collection->get('description');
            $curriculum->title_image = $collection->has('title_image') ? $collection->get('title_image')->store('curriculums', 'uploads') : NULL;
            $curriculum->main_image = $collection->has('main_image') ? $collection->get('main_image')->store('curriculums', 'uploads') : NULL;
            if ($curriculum->save()) {
                return true;
            }
            return false;
        } catch (\Throwable $th) {
            return false;
        }
    }
}
