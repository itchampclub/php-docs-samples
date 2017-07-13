<?php

/**
 * Copyright 2016 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace Google\Cloud\Samples\Dlp;

require __DIR__ . '/vendor/autoload.php';

use Symfony\Component\Console\Application;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputDefinition;

$application = new Application('Cloud DLP');

// $inputDefinition = new InputDefinition([
//     // c
// ]);

$application->add(new Command('inspect-string'))
    // ->setDefinition($inputDefinition)
    ->addArgument('string', InputArgument::REQUIRED, 'The string to inspect')
    ->setDescription('Inspect a string using the Data Loss Prevention (DLP) API.')
    ->setCode(function ($input, $output) {
        inspect_string(
            $input->getArgument('string')
        );
    });

// for testing
if (getenv('PHPUNIT_TESTS') === '1') {
    return $application;
}

$application->run();
