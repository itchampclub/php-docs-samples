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

# [START list_categories]
use Google\Cloud\Dlp\V2beta1\DlpServiceClient;
use Google\Privacy\Dlp\V2beta1\ContentItem;
use Google\Privacy\Dlp\V2beta1\InfoType;
use Google\Privacy\Dlp\V2beta1\InspectConfig;
use Google\Privacy\Dlp\V2beta1\Likelihood;

/**
 * Finds shot changes in the video.
 *
 * @param string $languageCode Optional language code, empty for 'en-US'.
 */
function list_categories($languageCode = '')
{
    // Instantiate a client.
    $dlp = new DlpServiceClient();

    // Run request
    $response = $dlp->listRootCategories($languageCode);

    // Print the results
    print('Categories:' . PHP_EOL);
    foreach ($response->getCategories() as $category) {
        printf('  %s (%s)' . PHP_EOL,
            $category->getDisplayName(),
            $category->getName());
    }
}
# [END list_categories]
