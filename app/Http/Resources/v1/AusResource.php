<?php

namespace App\Http\Resources\v1;

use Illuminate\Http\Resources\Json\JsonResource;

class AusResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        //return parent::toArray($request);

        return [
            'id'                    => $this->id,
            'categoryId'            => $this->category_id,
            'title'                 => $this->title,
            'thumbnail'             => $this->image_url,
            'requiredCertificate'   => $this->required_certificate,
            'trainingDuration'      => $this->training_duration,
            'workingHours'          => $this->working_hours,
            'salaryFirstYear'       => $this->salary_first_year,
            'salarySecondYear'      => $this->salary_second_year,
            'salaryThirdYear'       => $this->salary_third_year,
            'salaryFourthYear'      => $this->salary_fourth_year,
            'body'                  => $this->body,
            'links'                 => $this->links,
            'popular'               => $this->popular == 1 ? true : false,
            'bestPaid'              => $this->best_paid == 1 ? true : false
        ];

    }
}
