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
namespace Google\Site_Kit_Dependencies\Google\Service\GoogleAnalyticsAdmin;

class GoogleAnalyticsAdminV1alphaCustomMetric extends \Google\Site_Kit_Dependencies\Google\Model
{
    public $description;
    public $displayName;
    public $measurementUnit;
    public $name;
    public $parameterName;
    public $scope;
    public function setDescription($description)
    {
        $this->description = $description;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
    }
    public function getDisplayName()
    {
        return $this->displayName;
    }
    public function setMeasurementUnit($measurementUnit)
    {
        $this->measurementUnit = $measurementUnit;
    }
    public function getMeasurementUnit()
    {
        return $this->measurementUnit;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setParameterName($parameterName)
    {
        $this->parameterName = $parameterName;
    }
    public function getParameterName()
    {
        return $this->parameterName;
    }
    public function setScope($scope)
    {
        $this->scope = $scope;
    }
    public function getScope()
    {
        return $this->scope;
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(\Google\Site_Kit_Dependencies\Google\Service\GoogleAnalyticsAdmin\GoogleAnalyticsAdminV1alphaCustomMetric::class, 'Google\\Site_Kit_Dependencies\\Google_Service_GoogleAnalyticsAdmin_GoogleAnalyticsAdminV1alphaCustomMetric');
