<?php

use App\Models\Employer;
use App\Models\Jobs;

it('it Belongs to an employer', function () {
    $employer =  Employer::factory()->create();
    $job = Jobs::factory()->create(['employer_id' => $employer->id,]);

    expect($job->employer->is($employer))->toBeTrue();
});

it('can have tags', function () {
    $job = Jobs::factory()->create();

    $job->tag('FrontEnd');

    expect($job->tags)->toHaveCount(1);
});
