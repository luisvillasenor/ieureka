<?php
/**
 * CodeIgniter
 *
 * An open source application development framework for PHP
 *
<<<<<<< HEAD
 * This content is released under the MIT License (MIT)
 *
 * Copyright (c) 2014 - 2015, British Columbia Institute of Technology
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package	CodeIgniter
 * @author	EllisLab Dev Team
 * @copyright	Copyright (c) 2008 - 2014, EllisLab, Inc. (http://ellislab.com/)
 * @copyright	Copyright (c) 2014 - 2015, British Columbia Institute of Technology (http://bcit.ca/)
 * @license	http://opensource.org/licenses/MIT	MIT License
 * @link	http://codeigniter.com
 * @since	Version 2.1.0
=======
 * @package		CodeIgniter
 * @author		EllisLab Dev Team
 * @copyright		Copyright (c) 2008 - 2014, EllisLab, Inc.
 * @copyright		Copyright (c) 2014 - 2015, British Columbia Institute of Technology (http://bcit.ca/)
 * @license		http://codeigniter.com/user_guide/license.html
 * @link		http://codeigniter.com
 * @since		Version 2.1.2
>>>>>>> desarrollo
 * @filesource
 */
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * PDO Database Adapter Class
 *
 * Note: _DB is an extender class that the app controller
 * creates dynamically based on whether the query builder
 * class is being used or not.
 *
 * @package		CodeIgniter
 * @subpackage	Drivers
 * @category	Database
 * @author		EllisLab Dev Team
 * @link		http://codeigniter.com/user_guide/database/
 */
class CI_DB_pdo_driver extends CI_DB {

<<<<<<< HEAD
=======
	var $dbdriver = 'pdo';

	// the character used to excape - not necessary for PDO
	var $_escape_char = '';
	var $_like_escape_str;
	var $_like_escape_chr;


	/**
	 * The syntax to count rows is slightly different across different
	 * database engines, so this string appears in each driver and is
	 * used for the count_all() and count_all_results() functions.
	 */
	var $_count_string = "SELECT COUNT(*) AS ";
	var $_random_keyword;

	var $options = array();

	function __construct($params)
	{
		parent::__construct($params);

		// clause and character used for LIKE escape sequences
		if (strpos($this->hostname, 'mysql') !== FALSE)
		{
			$this->_like_escape_str = '';
			$this->_like_escape_chr = '';

			//Prior to this version, the charset can't be set in the dsn
			if(is_php('5.3.6'))
			{
				$this->hostname .= ";charset={$this->char_set}";
			}

			//Set the charset with the connection options
			$this->options['PDO::MYSQL_ATTR_INIT_COMMAND'] = "SET NAMES {$this->char_set}";
		}
		elseif (strpos($this->hostname, 'odbc') !== FALSE)
		{
			$this->_like_escape_str = " {escape '%s'} ";
			$this->_like_escape_chr = '!';
		}
		else
		{
			$this->_like_escape_str = " ESCAPE '%s' ";
			$this->_like_escape_chr = '!';
		}

		empty($this->database) OR $this->hostname .= ';dbname='.$this->database;

		$this->trans_enabled = FALSE;

		$this->_random_keyword = ' RND('.time().')'; // database specific random keyword
	}

>>>>>>> desarrollo
	/**
	 * Database driver
	 *
	 * @var	string
	 */
	public $dbdriver = 'pdo';

	/**
	 * PDO Options
	 *
	 * @var	array
	 */
	public $options = array();

	// --------------------------------------------------------------------

	/**
	 * Class constructor
	 *
	 * Validates the DSN string and/or detects the subdriver.
	 *
	 * @param	array	$params
	 * @return	void
	 */
	public function __construct($params)
	{
		parent::__construct($params);

		if (preg_match('/([^:]+):/', $this->dsn, $match) && count($match) === 2)
		{
			// If there is a minimum valid dsn string pattern found, we're done
			// This is for general PDO users, who tend to have a full DSN string.
			$this->subdriver = $match[1];
			return;
		}
		// Legacy support for DSN specified in the hostname field
		elseif (preg_match('/([^:]+):/', $this->hostname, $match) && count($match) === 2)
		{
			$this->dsn = $this->hostname;
			$this->hostname = NULL;
			$this->subdriver = $match[1];
			return;
		}
		elseif (in_array($this->subdriver, array('mssql', 'sybase'), TRUE))
		{
			$this->subdriver = 'dblib';
		}
		elseif ($this->subdriver === '4D')
		{
			$this->subdriver = '4d';
		}
		elseif ( ! in_array($this->subdriver, array('4d', 'cubrid', 'dblib', 'firebird', 'ibm', 'informix', 'mysql', 'oci', 'odbc', 'pgsql', 'sqlite', 'sqlsrv'), TRUE))
		{
			log_message('error', 'PDO: Invalid or non-existent subdriver');

			if ($this->db_debug)
			{
				show_error('Invalid or non-existent PDO subdriver');
			}
		}

		$this->dsn = NULL;
	}

	// --------------------------------------------------------------------

	/**
	 * Database connection
	 *
	 * @param	bool	$persistent
	 * @return	object
	 */
	public function db_connect($persistent = FALSE)
	{
		$this->options[PDO::ATTR_PERSISTENT] = $persistent;

		try
		{
			return new PDO($this->dsn, $this->username, $this->password, $this->options);
		}
		catch (PDOException $e)
		{
			if ($this->db_debug && empty($this->failover))
			{
				$this->display_error($e->getMessage(), '', TRUE);
			}

			return FALSE;
		}
	}

	// --------------------------------------------------------------------

	/**
	 * Database version number
	 *
	 * @return	string
	 */
	public function version()
	{
<<<<<<< HEAD
		if (isset($this->data_cache['version']))
		{
			return $this->data_cache['version'];
		}

		// Not all subdrivers support the getAttribute() method
		try
		{
			return $this->data_cache['version'] = $this->conn_id->getAttribute(PDO::ATTR_SERVER_VERSION);
=======
		$sql = $this->_prep_query($sql);
		$result_id = $this->conn_id->prepare($sql);

		if (is_object($result_id) && $result_id->execute())
		{
			if (is_numeric(stripos($sql, 'SELECT')))
			{
				$this->affect_rows = count($result_id->fetchAll());
			}
			else
			{
				$this->affect_rows = $result_id->rowCount();
			}
>>>>>>> desarrollo
		}
		catch (PDOException $e)
		{
<<<<<<< HEAD
			return parent::version();
		}
=======
			$this->affect_rows = 0;
			return FALSE;
		}

		return $result_id;
>>>>>>> desarrollo
	}

	// --------------------------------------------------------------------

	/**
	 * Execute the query
	 *
	 * @param	string	$sql	SQL query
	 * @return	mixed
	 */
	protected function _execute($sql)
	{
		return $this->conn_id->query($sql);
	}

	// --------------------------------------------------------------------

	/**
	 * Begin Transaction
	 *
	 * @param	bool	$test_mode
	 * @return	bool
	 */
	public function trans_begin($test_mode = FALSE)
	{
		// When transactions are nested we only begin/commit/rollback the outermost ones
		if ( ! $this->trans_enabled OR $this->_trans_depth > 0)
		{
			return TRUE;
		}

		// Reset the transaction failure flag.
		// If the $test_mode flag is set to TRUE transactions will be rolled back
		// even if the queries produce a successful result.
		$this->_trans_failure = ($test_mode === TRUE);

		return $this->conn_id->beginTransaction();
	}

	// --------------------------------------------------------------------

	/**
	 * Commit Transaction
	 *
	 * @return	bool
	 */
	public function trans_commit()
	{
		// When transactions are nested we only begin/commit/rollback the outermost ones
		if ( ! $this->trans_enabled OR $this->_trans_depth > 0)
		{
			return TRUE;
		}

		return $this->conn_id->commit();
	}

	// --------------------------------------------------------------------

	/**
	 * Rollback Transaction
	 *
	 * @return	bool
	 */
	public function trans_rollback()
	{
		// When transactions are nested we only begin/commit/rollback the outermost ones
		if ( ! $this->trans_enabled OR $this->_trans_depth > 0)
		{
			return TRUE;
		}

		return $this->conn_id->rollBack();
	}

	// --------------------------------------------------------------------

	/**
	 * Platform-dependant string escape
	 *
	 * @param	string
	 * @return	string
	 */
	protected function _escape_str($str)
	{
		// Escape the string
		$str = $this->conn_id->quote($str);

		// If there are duplicated quotes, trim them away
		return ($str[0] === "'")
			? substr($str, 1, -1)
			: $str;
	}

	// --------------------------------------------------------------------

	/**
	 * Affected Rows
	 *
	 * @return	int
	 */
	public function affected_rows()
	{
		return is_object($this->result_id) ? $this->result_id->rowCount() : 0;
	}

	// --------------------------------------------------------------------

	/**
	 * Insert ID
	 *
	 * @param	string	$name
	 * @return	int
	 */
	public function insert_id($name = NULL)
	{
		return $this->conn_id->lastInsertId($name);
	}

	// --------------------------------------------------------------------

	/**
	 * Field data query
	 *
	 * Generates a platform-specific query so that the column data can be retrieved
	 *
	 * @param	string	$table
	 * @return	string
	 */
	protected function _field_data($table)
	{
		return 'SELECT TOP 1 * FROM '.$this->protect_identifiers($table);
	}

	// --------------------------------------------------------------------

	/**
	 * Error
	 *
	 * Returns an array containing code and message of the last
	 * database error that has occured.
	 *
	 * @return	array
	 */
	public function error()
	{
		$error = array('code' => '00000', 'message' => '');
		$pdo_error = $this->conn_id->errorInfo();

		if (empty($pdo_error[0]))
		{
			return $error;
		}

		$error['code'] = isset($pdo_error[1]) ? $pdo_error[0].'/'.$pdo_error[1] : $pdo_error[0];
		if (isset($pdo_error[2]))
		{
			 $error['message'] = $pdo_error[2];
		}

		return $error;
	}

	// --------------------------------------------------------------------

	/**
	 * Update_Batch statement
	 *
	 * Generates a platform-specific batch update string from the supplied data
	 *
	 * @param	string	$table	Table name
	 * @param	array	$values	Update data
	 * @param	string	$index	WHERE key
	 * @return	string
	 */
	protected function _update_batch($table, $values, $index)
	{
		$ids = array();
		foreach ($values as $key => $val)
		{
			$ids[] = $val[$index];

			foreach (array_keys($val) as $field)
			{
				if ($field !== $index)
				{
					$final[$field][] = 'WHEN '.$index.' = '.$val[$index].' THEN '.$val[$field];
				}
			}
		}

		$cases = '';
		foreach ($final as $k => $v)
		{
			$cases .= $k.' = CASE '."\n";

			foreach ($v as $row)
			{
				$cases .= $row."\n";
			}

			$cases .= 'ELSE '.$k.' END, ';
		}

		$this->where($index.' IN('.implode(',', $ids).')', NULL, FALSE);

		return 'UPDATE '.$table.' SET '.substr($cases, 0, -2).$this->_compile_wh('qb_where');
	}

	// --------------------------------------------------------------------

	/**
	 * Truncate statement
	 *
	 * Generates a platform-specific truncate string from the supplied data
	 *
	 * If the database does not support the TRUNCATE statement,
	 * then this method maps to 'DELETE FROM table'
	 *
	 * @param	string	$table
	 * @return	string
	 */
	protected function _truncate($table)
	{
		return 'TRUNCATE TABLE '.$table;
	}

}
