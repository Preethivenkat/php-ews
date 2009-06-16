<?php
/**
 * Definition of the SyncFolderHierarchyDeleteType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the SyncFolderHierarchyDeleteType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_SyncFolderHierarchyDeleteType {
	/**
	 * FolderId property
	 * 
	 * @var EWSType_FolderIdType
	 */
	public $FolderId;

	/**
	 * Constructor
	 */
	public __construct() {
		$this->schema = array(
			array(
				'name' => 'FolderId',
				'required' => false,
				'type' => 'FolderIdType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class SyncFolderHierarchyDeleteType