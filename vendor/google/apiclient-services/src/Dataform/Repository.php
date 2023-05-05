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

namespace Google\Service\Dataform;

class Repository extends \Google\Model
{
  protected $gitRemoteSettingsType = GitRemoteSettings::class;
  protected $gitRemoteSettingsDataType = '';
  public $gitRemoteSettings;
  /**
   * @var string[]
   */
  public $initialCommitFileContents = [];
  protected $initialCommitMetadataType = CommitMetadata::class;
  protected $initialCommitMetadataDataType = '';
  public $initialCommitMetadata;
  /**
   * @var string[]
   */
  public $labels = [];
  /**
   * @var string
   */
  public $name;
  /**
   * @var string
   */
  public $npmrcEnvironmentVariablesSecretVersion;
  protected $workspaceCompilationOverridesType = WorkspaceCompilationOverrides::class;
  protected $workspaceCompilationOverridesDataType = '';
  public $workspaceCompilationOverrides;

  /**
   * @param GitRemoteSettings
   */
  public function setGitRemoteSettings(GitRemoteSettings $gitRemoteSettings)
  {
    $this->gitRemoteSettings = $gitRemoteSettings;
  }
  /**
   * @return GitRemoteSettings
   */
  public function getGitRemoteSettings()
  {
    return $this->gitRemoteSettings;
  }
  /**
   * @param string[]
   */
  public function setInitialCommitFileContents($initialCommitFileContents)
  {
    $this->initialCommitFileContents = $initialCommitFileContents;
  }
  /**
   * @return string[]
   */
  public function getInitialCommitFileContents()
  {
    return $this->initialCommitFileContents;
  }
  /**
   * @param CommitMetadata
   */
  public function setInitialCommitMetadata(CommitMetadata $initialCommitMetadata)
  {
    $this->initialCommitMetadata = $initialCommitMetadata;
  }
  /**
   * @return CommitMetadata
   */
  public function getInitialCommitMetadata()
  {
    return $this->initialCommitMetadata;
  }
  /**
   * @param string[]
   */
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  /**
   * @return string[]
   */
  public function getLabels()
  {
    return $this->labels;
  }
  /**
   * @param string
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * @param string
   */
  public function setNpmrcEnvironmentVariablesSecretVersion($npmrcEnvironmentVariablesSecretVersion)
  {
    $this->npmrcEnvironmentVariablesSecretVersion = $npmrcEnvironmentVariablesSecretVersion;
  }
  /**
   * @return string
   */
  public function getNpmrcEnvironmentVariablesSecretVersion()
  {
    return $this->npmrcEnvironmentVariablesSecretVersion;
  }
  /**
   * @param WorkspaceCompilationOverrides
   */
  public function setWorkspaceCompilationOverrides(WorkspaceCompilationOverrides $workspaceCompilationOverrides)
  {
    $this->workspaceCompilationOverrides = $workspaceCompilationOverrides;
  }
  /**
   * @return WorkspaceCompilationOverrides
   */
  public function getWorkspaceCompilationOverrides()
  {
    return $this->workspaceCompilationOverrides;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Repository::class, 'Google_Service_Dataform_Repository');
