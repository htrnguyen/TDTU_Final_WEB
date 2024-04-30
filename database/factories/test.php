<?php

require_once __DIR__ . '/../../vendor/autoload.php';

use Database\Factories\UserFactory;

use App\Models\User;

User::factory()->create();