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

namespace Google\Service\Contentwarehouse;

class IndexingDupsLocalizedLocalizedClusterTargetLinkSets extends \Google\Collection
{
  protected $collection_key = 'indirectTargetLink';
  protected $directTargetLinkType = IndexingDupsLocalizedLocalizedClusterTargetLink::class;
  protected $directTargetLinkDataType = 'array';
  protected $indirectTargetLinkType = IndexingDupsLocalizedLocalizedClusterTargetLink::class;
  protected $indirectTargetLinkDataType = 'array';

  /**
   * @param IndexingDupsLocalizedLocalizedClusterTargetLink[]
   */
  public function setDirectTargetLink($directTargetLink)
  {
    $this->directTargetLink = $directTargetLink;
  }
  /**
   * @return IndexingDupsLocalizedLocalizedClusterTargetLink[]
   */
  public function getDirectTargetLink()
  {
    return $this->directTargetLink;
  }
  /**
   * @param IndexingDupsLocalizedLocalizedClusterTargetLink[]
   */
  public function setIndirectTargetLink($indirectTargetLink)
  {
    $this->indirectTargetLink = $indirectTargetLink;
  }
  /**
   * @return IndexingDupsLocalizedLocalizedClusterTargetLink[]
   */
  public function getIndirectTargetLink()
  {
    return $this->indirectTargetLink;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(IndexingDupsLocalizedLocalizedClusterTargetLinkSets::class, 'Google_Service_Contentwarehouse_IndexingDupsLocalizedLocalizedClusterTargetLinkSets');
