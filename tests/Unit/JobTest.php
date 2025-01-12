<?php

use App\Models\Job;
use App\Models\Company;

it('belongs to a company', function () {
    // Arrange
    $company = Company::factory()->create();
    $job = Job::factory()->create([
        'company_id' => $company->id,
    ]);

    // Act & Assert
    expect($job->company->is($company))->toBeTrue();
});

it('can have tags',  function () {
    // Arrange
    $job = Job::factory()->create();

    // Act
    $job->tag('PHP');

    // Assert
    expect($job->tags)->toHaveCount(1);
});
