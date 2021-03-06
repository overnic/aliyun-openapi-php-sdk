<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace Aliyun\Cms;

use Aliyun\Core\RpcAcsRequest;

class ProfileSetRequest extends RpcAcsRequest
{
	function  __construct()
	{
		parent::__construct("Cms", "2017-03-01", "ProfileSet");
	}

	private  $userId;

	private  $autoInstall;

	public function getUserId() {
		return $this->userId;
	}

	public function setUserId($userId) {
		$this->userId = $userId;
		$this->queryParameters["UserId"]=$userId;
	}

	public function getAutoInstall() {
		return $this->autoInstall;
	}

	public function setAutoInstall($autoInstall) {
		$this->autoInstall = $autoInstall;
		$this->queryParameters["AutoInstall"]=$autoInstall;
	}
	
}