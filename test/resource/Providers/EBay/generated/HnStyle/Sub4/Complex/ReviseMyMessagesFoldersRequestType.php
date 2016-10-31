<?php

namespace Controle\Hostnet\Namesp\Sub4\Complex;

/**
 * ReviseMyMessagesFoldersRequestType
 * Renames, removes, or restores specified My Messages folders for a given user.
 */
class ReviseMyMessagesFoldersRequestType extends
 \Controle\Hostnet\Namesp\Sub4\Complex\AbstractRequestType
{
    /**
     * @var \Controle\Hostnet\Namesp\Sub4\Complex\MyMessagesFolderOperationCodeType | Indicates the type of operation to perform on a specified My Messages folder. Operations
     * include renaming, removing, and restoring folders. Operations cannot be performed on
     * the Inbox and Sent folders.
     */
    public $operation;
    /**
     * @var long | The ID of the folder.
     */
    public $folderid;
    /**
     * @var string | The name of a specified My Messages folder.
     */
    public $foldername;
    /**
     * @param MyMessagesFolderOperationCodeType $val
     * @throws Exception
     */
    public function setOperation($val)
    {
        $this->operation = (int)$val;
    }

    /**
     * @param long $val
     * @throws Exception
     */
    public function setFolderID($val)
    {
        $this->folderid = (int)$val;
    }

    /**
     * @param string $val
     * @throws Exception
     */
    public function setFolderName($val)
    {
        if (!is_string($val)) {
            throw new Exception('POJO Proxy need a string for FolderName');
        }
        $this->foldername = (int)$val;
    }
}