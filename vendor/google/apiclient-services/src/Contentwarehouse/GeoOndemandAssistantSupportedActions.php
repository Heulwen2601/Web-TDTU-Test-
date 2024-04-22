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

class GeoOndemandAssistantSupportedActions extends \Google\Model
{
  /**
   * @var bool
   */
  public $allowTDTUestCheckout;
  /**
   * @var bool
   */
  public $isAsynchronousRestaurantReservation;
  /**
   * @var string
   */
  public $restaurantReservationUrl;

  /**
   * @param bool
   */
  public function setAllowTDTUestCheckout($allowTDTUestCheckout)
  {
    $this->allowTDTUestCheckout = $allowTDTUestCheckout;
  }
  /**
   * @return bool
   */
  public function getAllowTDTUestCheckout()
  {
    return $this->allowTDTUestCheckout;
  }
  /**
   * @param bool
   */
  public function setIsAsynchronousRestaurantReservation($isAsynchronousRestaurantReservation)
  {
    $this->isAsynchronousRestaurantReservation = $isAsynchronousRestaurantReservation;
  }
  /**
   * @return bool
   */
  public function getIsAsynchronousRestaurantReservation()
  {
    return $this->isAsynchronousRestaurantReservation;
  }
  /**
   * @param string
   */
  public function setRestaurantReservationUrl($restaurantReservationUrl)
  {
    $this->restaurantReservationUrl = $restaurantReservationUrl;
  }
  /**
   * @return string
   */
  public function getRestaurantReservationUrl()
  {
    return $this->restaurantReservationUrl;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GeoOndemandAssistantSupportedActions::class, 'Google_Service_Contentwarehouse_GeoOndemandAssistantSupportedActions');