<?php
class ConnectionManager_Base
{
	/**
	 * Cached Connection objects
	 * @type Array
	 */
	protected $cache = array();

	/**
	 * Project connections data
	 * @type Array
	 */
	protected $_connectionsData;

	/**
	 * Project connections data
	 * @type Array
	 */
	protected $_connectionsIdByName = array();


	/**
	 * An array storing the correspondence between project
	 * datasource tables names and connections ids
	 * @type Array
	 */
	protected $_tablesConnectionIds;


	/**
	 * @constructor
	 */
	function __construct()
	{
		$this->_setConnectionsData();
		$this->_setTablesConnectionIds();
	}

	/**
	 * Get connection id by the table name
	 * @param String tName
	 * @return Connection
	 */
	public function getTableConnId( $tName )
	{
		return $this->_tablesConnectionIds[ $tName ];
	}


	/**
	 * Get connection object by the table name
	 * @param String tName
	 * @return Connection
	 */
	public function byTable( $tName )
	{
		$connId = $this->_tablesConnectionIds[ $tName ];
		if( !$connId )
			return $this->getDefault();
		return $this->byId( $connId );
	}

	/**
	 * Get connection object by the connection name
	 * @param String connName
	 * @return Connection
	 */
	public function byName( $connName )
	{
		$connId = $this->getIdByName( $connName );
		if( !$connId )
			return $this->getDefault();
		return $this->byId( $connId );
	}

	/**
	 * Get connection id by the connection name
	 * @param String connName
	 * @return String
	 */
	protected function getIdByName( $connName )
	{
		return $this->_connectionsIdByName[ $connName ];
	}

	/**
	 * Get connection object by the connection id
	 * @param String connId
	 * @return Connection
	 */
	public function byId( $connId )
	{
		if( !isset( $this->cache[ $connId ] ) ) {
			$conn = $this->getConnection( $connId );
			if( !$conn ) {
				global $restApis;
				$conn = $restApis->getConnection( $connId );
			}
			if( !$conn ) {
				$conn = $this->getDefault();
			}
			$this->cache[ $connId ] = $conn;
		}

		return $this->cache[ $connId ];
	}

	/**
	 * Get the default db connection class
	 * @return Connection
	 */
	public function getDefault()
	{
		return $this->byId( "mc_at_192_168_1_111" );
	}

	/**
	 * Get the default db connection id
	 * @return String
	 */
	public function getDefaultConnId()
	{
		return "mc_at_192_168_1_111";
	}



	/**
	 * Get the users table db connection
	 * @return Connection
	 */
	public function getForLogin() {
		return $this->byId( $this->getLoginConnId() );
	}

	public function getLoginConnId() {
		return "mc_at_192_168_1_111";
	}


	/**
	 * Get the log table db connection
	 * @return Connection
	 */
	public function getForAudit()
	{
		return $this->byId( "mc_at_192_168_1_111" );
	}

	/**
	 * Get the locking table db connection
	 * @return Connection
	 */
	public function getForLocking()
	{
		return $this->getDefault();
	}

	/**
	 * Get the 'ug_groups' table db connection
	 * @return Connection
	 */
	public function getForUserGroups() {
		return $this->byId( $this->getUserGroupsConnId() );
	}

	public function getUserGroupsConnId() {
		return "mc_at_192_168_1_111";
	}

	/**
	 * Get the saved searches table db connection
	 * @return Connection
	 */
	public function getForSavedSearches()
	{
		return $this->byId( $this->getSavedSearchesConnId() );
	}
	
	/**
	 * Get the saved searches table db connection
	 * @return Connection
	 */
	public function getSavedSearchesConnId()
	{
		return "mc_at_192_168_1_111";
	}	

	/**
	 * Get the webreports tables db connection
	 * @return Connection
	 */
	public function getForWebReports() 
	{
		return $this->byId( $this->getSavedSearchesConnId() );
	}

	/**
	 * Get the webreports tables db connection id
	 * @return String
	 */
	public function getWebReportsConnId() {
		return "mc_at_192_168_1_111";
	}	
	
	/**
	 * @param String connId
	 * @return Connection
	 */
	protected function getConnection( $connId )
	{
		return false;
	}

	public function getConectionsIds()
	{
		$connectionsIds = array();
		foreach ($this->_connectionsData as $connId => $data) {
			$connectionsIds[] = $connId;
		}

		return $connectionsIds;
	}

	/**
	 * Set the data representing the project's
	 * db connection properties
	 */
	protected function _setConnectionsData()
	{
        return null;
	}

	/**
	 * Set the data representing the correspondence between
	 * the project's table names and db connections
	 */
	protected function _setTablesConnectionIds()
	{
		$connectionsIds = array();
		$connectionsIds["staffUsers"] = "mc_at_192_168_1_111";
		$connectionsIds["process"] = "mc_at_192_168_1_111";
		$connectionsIds["researchType"] = "mc_at_192_168_1_111";
		$connectionsIds["researchOperatingPeriod"] = "mc_at_192_168_1_111";
		$connectionsIds["researchAppointment"] = "mc_at_192_168_1_111";
		$connectionsIds["researchDisburse"] = "mc_at_192_168_1_111";
		$connectionsIds["researchRenewal"] = "mc_at_192_168_1_111";
		$connectionsIds["admin_rights"] = "mc_at_192_168_1_111";
		$connectionsIds["admin_members"] = "mc_at_192_168_1_111";
		$connectionsIds["admin_users"] = "mc_at_192_168_1_111";
		$connectionsIds["researchConsider"] = "mc_at_192_168_1_111";
		$connectionsIds["researchScholarshipRegister"] = "mc_at_192_168_1_111";
		$connectionsIds["researchScholarshipProposal"] = "mc_at_192_168_1_111";
		$connectionsIds["researchScholarshipConsider"] = "mc_at_192_168_1_111";
		$connectionsIds["researchProjectProposal"] = "mc_at_192_168_1_111";
		$connectionsIds["researchDisburseConsider"] = "mc_at_192_168_1_111";
		$connectionsIds["researchAppointmentConsider"] = "mc_at_192_168_1_111";
		$connectionsIds["researchRenewalConsider"] = "mc_at_192_168_1_111";
		$connectionsIds["researchPeriod"] = "mc_at_192_168_1_111";
		$connectionsIds["researchProjectRegister"] = "mc_at_192_168_1_111";
		$connectionsIds["missionFollow"] = "mc_at_192_168_1_111";
		$connectionsIds["missionAssignment"] = "mc_at_192_168_1_111";
		$connectionsIds["optionGroup"] = "mc_at_192_168_1_111";
		$connectionsIds["optionSub"] = "mc_at_192_168_1_111";
		$connectionsIds["project_audit"] = "mc_at_192_168_1_111";
		$connectionsIds["considerChoice"] = "mc_at_192_168_1_111";
		$connectionsIds["project_uggroups"] = "mc_at_192_168_1_111";
		$connectionsIds["statusType"] = "mc_at_192_168_1_111";
		$connectionsIds["ReportProgress"] = "mc_at_192_168_1_111";
		$connectionsIds["ReportMonitorGraphTrackingStatus1"] = "mc_at_192_168_1_111";
		$connectionsIds["ReportMonitorProjectStatus1"] = "mc_at_192_168_1_111";
		$connectionsIds["ReportMonitorProjectStatus2"] = "mc_at_192_168_1_111";
		$connectionsIds["ReportMonitorProjectStatus3"] = "mc_at_192_168_1_111";
		$connectionsIds["ReportMonitorProjectStatus4"] = "mc_at_192_168_1_111";
		$connectionsIds["ReportMonitorGraphTrackingStatus2"] = "mc_at_192_168_1_111";
		$connectionsIds["ReportMonitorGraphTrackingStatus3"] = "mc_at_192_168_1_111";
		$connectionsIds["ReportMonitorProjectStatus5"] = "mc_at_192_168_1_111";
		$connectionsIds["ReportMonitorProjectStatus6"] = "mc_at_192_168_1_111";
		$connectionsIds["ReportMonitorProjectStatus7"] = "mc_at_192_168_1_111";
		$connectionsIds["ReportMonitorProjectStatus8"] = "mc_at_192_168_1_111";
		$connectionsIds["ReportSearchresearchRegister"] = "mc_at_192_168_1_111";
		$connectionsIds["ReportMission"] = "mc_at_192_168_1_111";
		$connectionsIds["ReportGraphmissionFollow"] = "mc_at_192_168_1_111";
		$connectionsIds["researcher"] = "mc_at_192_168_1_111";
		$connectionsIds["researchResearcher"] = "mc_at_192_168_1_111";
		$connectionsIds["optionSub_Search_Lookup"] = "mc_at_192_168_1_111";
		$connectionsIds["researchTypeGroup"] = "mc_at_192_168_1_111";
		$connectionsIds["TypeGroup_Search_Lookup"] = "mc_at_192_168_1_111";
		$connectionsIds["geographies"] = "mc_at_192_168_1_111";
		$connectionsIds["provinces"] = "mc_at_192_168_1_111";
		$connectionsIds["districts"] = "mc_at_192_168_1_111";
		$connectionsIds["amphures"] = "mc_at_192_168_1_111";

		$this->_tablesConnectionIds = &$connectionsIds;
	}

	/**
	 * Check if It's possible to add to one table's sql query
	 * an sql subquery to another table.
	 * Access doesn't support subqueries from the same table as main.
	 * @param String dataSourceTName1
	 * @param String dataSourceTName2
	 * @return Boolean
	 */
	public function checkTablesSubqueriesSupport( $dataSourceTName1, $dataSourceTName2 )
	{
		$connId1 = $this->_tablesConnectionIds[ $dataSourceTName1 ];
		$connId2 = $this->_tablesConnectionIds[ $dataSourceTName2 ];

		if( $connId1 != $connId2 )
			return false;

		if( $this->_connectionsData[ $connId1 ]["dbType"] == nDATABASE_Access && $dataSourceTName1 == $dataSourceTName2 )
			return false;

		return true;
	}

	/**
	 * Close db connections
    */
	function CloseConnections()
	{
		foreach( $this->cache as $connection )
		{
			if( $connection )
				$connection->close();
		}
	}
}
?>