<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Google\Service\Assuredworkloads;

class GoogleCloudAssuredworkloadsV1WorkloadPartnerPermissions extends \Google\Model
{
  /**
   * @var bool
   */
  public $dataLogsViewer;
  /**
   * @var bool
   */
  public $remediateFolderViolations;

  /**
   * @param bool
   */
  public function setDataLogsViewer($dataLogsViewer)
  {
    $this->dataLogsViewer = $dataLogsViewer;
  }
  /**
   * @return bool
   */
  public function getDataLogsViewer()
  {
    return $this->dataLogsViewer;
  }
  /**
   * @param bool
   */
  public function setRemediateFolderViolations($remediateFolderViolations)
  {
    $this->remediateFolderViolations = $remediateFolderViolations;
  }
  /**
   * @return bool
   */
  public function getRemediateFolderViolations()
  {
    return $this->remediateFolderViolations;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudAssuredworkloadsV1WorkloadPartnerPermissions::class, 'Google_Service_Assuredworkloads_GoogleCloudAssuredworkloadsV1WorkloadPartnerPermissions');
