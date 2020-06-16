<?php
/**
 * Employee
 *
 * PHP version 5
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Xero Payroll AU
 *
 * This is the Xero Payroll API for orgs in Australia region.
 *
 * OpenAPI spec version: 2.2.2
 * Contact: api@xero.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.2.3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace XeroAPI\XeroPHP\Models\PayrollAu;

use \ArrayAccess;
use \XeroAPI\XeroPHP\PayrollAuObjectSerializer;
use \XeroAPI\XeroPHP\StringUtil;
/**
 * Employee Class Doc Comment
 *
 * @category Class
 * @package  XeroAPI\XeroPHP
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class Employee implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Employee';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'first_name' => 'string',
        'last_name' => 'string',
        'date_of_birth' => 'string',
        'home_address' => '\XeroAPI\XeroPHP\Models\PayrollAu\HomeAddress',
        'start_date' => 'string',
        'title' => 'string',
        'middle_names' => 'string',
        'email' => 'string',
        'gender' => 'string',
        'phone' => 'string',
        'mobile' => 'string',
        'twitter_user_name' => 'string',
        'is_authorised_to_approve_leave' => 'bool',
        'is_authorised_to_approve_timesheets' => 'bool',
        'job_title' => 'string',
        'classification' => 'string',
        'ordinary_earnings_rate_id' => 'string',
        'payroll_calendar_id' => 'string',
        'employee_group_name' => 'string',
        'employee_id' => 'string',
        'termination_date' => 'string',
        'bank_accounts' => '\XeroAPI\XeroPHP\Models\PayrollAu\BankAccount[]',
        'pay_template' => '\XeroAPI\XeroPHP\Models\PayrollAu\PayTemplate',
        'opening_balances' => '\XeroAPI\XeroPHP\Models\PayrollAu\OpeningBalances',
        'tax_declaration' => '\XeroAPI\XeroPHP\Models\PayrollAu\TaxDeclaration',
        'leave_balances' => '\XeroAPI\XeroPHP\Models\PayrollAu\LeaveBalance[]',
        'leave_lines' => '\XeroAPI\XeroPHP\Models\PayrollAu\LeaveLine[]',
        'super_memberships' => '\XeroAPI\XeroPHP\Models\PayrollAu\SuperMembership[]',
        'status' => '\XeroAPI\XeroPHP\Models\PayrollAu\EmployeeStatus',
        'updated_date_utc' => 'string',
        'validation_errors' => '\XeroAPI\XeroPHP\Models\PayrollAu\ValidationError[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'first_name' => null,
        'last_name' => null,
        'date_of_birth' => null,
        'home_address' => null,
        'start_date' => null,
        'title' => null,
        'middle_names' => null,
        'email' => null,
        'gender' => null,
        'phone' => null,
        'mobile' => null,
        'twitter_user_name' => null,
        'is_authorised_to_approve_leave' => null,
        'is_authorised_to_approve_timesheets' => null,
        'job_title' => null,
        'classification' => null,
        'ordinary_earnings_rate_id' => 'uuid',
        'payroll_calendar_id' => 'uuid',
        'employee_group_name' => null,
        'employee_id' => 'uuid',
        'termination_date' => null,
        'bank_accounts' => null,
        'pay_template' => null,
        'opening_balances' => null,
        'tax_declaration' => null,
        'leave_balances' => null,
        'leave_lines' => null,
        'super_memberships' => null,
        'status' => null,
        'updated_date_utc' => null,
        'validation_errors' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'first_name' => 'FirstName',
        'last_name' => 'LastName',
        'date_of_birth' => 'DateOfBirth',
        'home_address' => 'HomeAddress',
        'start_date' => 'StartDate',
        'title' => 'Title',
        'middle_names' => 'MiddleNames',
        'email' => 'Email',
        'gender' => 'Gender',
        'phone' => 'Phone',
        'mobile' => 'Mobile',
        'twitter_user_name' => 'TwitterUserName',
        'is_authorised_to_approve_leave' => 'IsAuthorisedToApproveLeave',
        'is_authorised_to_approve_timesheets' => 'IsAuthorisedToApproveTimesheets',
        'job_title' => 'JobTitle',
        'classification' => 'Classification',
        'ordinary_earnings_rate_id' => 'OrdinaryEarningsRateID',
        'payroll_calendar_id' => 'PayrollCalendarID',
        'employee_group_name' => 'EmployeeGroupName',
        'employee_id' => 'EmployeeID',
        'termination_date' => 'TerminationDate',
        'bank_accounts' => 'BankAccounts',
        'pay_template' => 'PayTemplate',
        'opening_balances' => 'OpeningBalances',
        'tax_declaration' => 'TaxDeclaration',
        'leave_balances' => 'LeaveBalances',
        'leave_lines' => 'LeaveLines',
        'super_memberships' => 'SuperMemberships',
        'status' => 'Status',
        'updated_date_utc' => 'UpdatedDateUTC',
        'validation_errors' => 'ValidationErrors'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'first_name' => 'setFirstName',
        'last_name' => 'setLastName',
        'date_of_birth' => 'setDateOfBirth',
        'home_address' => 'setHomeAddress',
        'start_date' => 'setStartDate',
        'title' => 'setTitle',
        'middle_names' => 'setMiddleNames',
        'email' => 'setEmail',
        'gender' => 'setGender',
        'phone' => 'setPhone',
        'mobile' => 'setMobile',
        'twitter_user_name' => 'setTwitterUserName',
        'is_authorised_to_approve_leave' => 'setIsAuthorisedToApproveLeave',
        'is_authorised_to_approve_timesheets' => 'setIsAuthorisedToApproveTimesheets',
        'job_title' => 'setJobTitle',
        'classification' => 'setClassification',
        'ordinary_earnings_rate_id' => 'setOrdinaryEarningsRateId',
        'payroll_calendar_id' => 'setPayrollCalendarId',
        'employee_group_name' => 'setEmployeeGroupName',
        'employee_id' => 'setEmployeeId',
        'termination_date' => 'setTerminationDate',
        'bank_accounts' => 'setBankAccounts',
        'pay_template' => 'setPayTemplate',
        'opening_balances' => 'setOpeningBalances',
        'tax_declaration' => 'setTaxDeclaration',
        'leave_balances' => 'setLeaveBalances',
        'leave_lines' => 'setLeaveLines',
        'super_memberships' => 'setSuperMemberships',
        'status' => 'setStatus',
        'updated_date_utc' => 'setUpdatedDateUtc',
        'validation_errors' => 'setValidationErrors'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'first_name' => 'getFirstName',
        'last_name' => 'getLastName',
        'date_of_birth' => 'getDateOfBirth',
        'home_address' => 'getHomeAddress',
        'start_date' => 'getStartDate',
        'title' => 'getTitle',
        'middle_names' => 'getMiddleNames',
        'email' => 'getEmail',
        'gender' => 'getGender',
        'phone' => 'getPhone',
        'mobile' => 'getMobile',
        'twitter_user_name' => 'getTwitterUserName',
        'is_authorised_to_approve_leave' => 'getIsAuthorisedToApproveLeave',
        'is_authorised_to_approve_timesheets' => 'getIsAuthorisedToApproveTimesheets',
        'job_title' => 'getJobTitle',
        'classification' => 'getClassification',
        'ordinary_earnings_rate_id' => 'getOrdinaryEarningsRateId',
        'payroll_calendar_id' => 'getPayrollCalendarId',
        'employee_group_name' => 'getEmployeeGroupName',
        'employee_id' => 'getEmployeeId',
        'termination_date' => 'getTerminationDate',
        'bank_accounts' => 'getBankAccounts',
        'pay_template' => 'getPayTemplate',
        'opening_balances' => 'getOpeningBalances',
        'tax_declaration' => 'getTaxDeclaration',
        'leave_balances' => 'getLeaveBalances',
        'leave_lines' => 'getLeaveLines',
        'super_memberships' => 'getSuperMemberships',
        'status' => 'getStatus',
        'updated_date_utc' => 'getUpdatedDateUtc',
        'validation_errors' => 'getValidationErrors'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    const GENDER_N = 'N';
    const GENDER_M = 'M';
    const GENDER_F = 'F';
    const GENDER_I = 'I';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getGenderAllowableValues()
    {
        return [
            self::GENDER_N,
            self::GENDER_M,
            self::GENDER_F,
            self::GENDER_I,
        ];
    }
    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['first_name'] = isset($data['first_name']) ? $data['first_name'] : null;
        $this->container['last_name'] = isset($data['last_name']) ? $data['last_name'] : null;
        $this->container['date_of_birth'] = isset($data['date_of_birth']) ? $data['date_of_birth'] : null;
        $this->container['home_address'] = isset($data['home_address']) ? $data['home_address'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['middle_names'] = isset($data['middle_names']) ? $data['middle_names'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['gender'] = isset($data['gender']) ? $data['gender'] : null;
        $this->container['phone'] = isset($data['phone']) ? $data['phone'] : null;
        $this->container['mobile'] = isset($data['mobile']) ? $data['mobile'] : null;
        $this->container['twitter_user_name'] = isset($data['twitter_user_name']) ? $data['twitter_user_name'] : null;
        $this->container['is_authorised_to_approve_leave'] = isset($data['is_authorised_to_approve_leave']) ? $data['is_authorised_to_approve_leave'] : null;
        $this->container['is_authorised_to_approve_timesheets'] = isset($data['is_authorised_to_approve_timesheets']) ? $data['is_authorised_to_approve_timesheets'] : null;
        $this->container['job_title'] = isset($data['job_title']) ? $data['job_title'] : null;
        $this->container['classification'] = isset($data['classification']) ? $data['classification'] : null;
        $this->container['ordinary_earnings_rate_id'] = isset($data['ordinary_earnings_rate_id']) ? $data['ordinary_earnings_rate_id'] : null;
        $this->container['payroll_calendar_id'] = isset($data['payroll_calendar_id']) ? $data['payroll_calendar_id'] : null;
        $this->container['employee_group_name'] = isset($data['employee_group_name']) ? $data['employee_group_name'] : null;
        $this->container['employee_id'] = isset($data['employee_id']) ? $data['employee_id'] : null;
        $this->container['termination_date'] = isset($data['termination_date']) ? $data['termination_date'] : null;
        $this->container['bank_accounts'] = isset($data['bank_accounts']) ? $data['bank_accounts'] : null;
        $this->container['pay_template'] = isset($data['pay_template']) ? $data['pay_template'] : null;
        $this->container['opening_balances'] = isset($data['opening_balances']) ? $data['opening_balances'] : null;
        $this->container['tax_declaration'] = isset($data['tax_declaration']) ? $data['tax_declaration'] : null;
        $this->container['leave_balances'] = isset($data['leave_balances']) ? $data['leave_balances'] : null;
        $this->container['leave_lines'] = isset($data['leave_lines']) ? $data['leave_lines'] : null;
        $this->container['super_memberships'] = isset($data['super_memberships']) ? $data['super_memberships'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['updated_date_utc'] = isset($data['updated_date_utc']) ? $data['updated_date_utc'] : null;
        $this->container['validation_errors'] = isset($data['validation_errors']) ? $data['validation_errors'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['first_name'] === null) {
            $invalidProperties[] = "'first_name' can't be null";
        }
        if ($this->container['last_name'] === null) {
            $invalidProperties[] = "'last_name' can't be null";
        }
        if ($this->container['date_of_birth'] === null) {
            $invalidProperties[] = "'date_of_birth' can't be null";
        }
        if ($this->container['home_address'] === null) {
            $invalidProperties[] = "'home_address' can't be null";
        }
        $allowedValues = $this->getGenderAllowableValues();
        if (!is_null($this->container['gender']) && !in_array($this->container['gender'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'gender', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets first_name
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['first_name'];
    }

    /**
     * Sets first_name
     *
     * @param string $first_name First name of employee
     *
     * @return $this
     */
    public function setFirstName($first_name)
    {

        $this->container['first_name'] = $first_name;

        return $this;
    }



    /**
     * Gets last_name
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->container['last_name'];
    }

    /**
     * Sets last_name
     *
     * @param string $last_name Last name of employee
     *
     * @return $this
     */
    public function setLastName($last_name)
    {

        $this->container['last_name'] = $last_name;

        return $this;
    }



    /**
     * Gets date_of_birth
     *
     * @return string
     */
    public function getDateOfBirth()
    {
        return $this->container['date_of_birth'];
    }
    public function getDateOfBirthAsDate()
    {
      if ($this->getDateOfBirth() != null) {
        return StringUtil::convertStringToDate($this->getDateOfBirth());
      } else {
        throw new Exception('can not convert null string to date');
      } 
    }

    /**
     * Sets date_of_birth
     *
     * @param string $date_of_birth Date of birth of the employee (YYYY-MM-DD)
     *
     * @return $this
     */
    public function setDateOfBirth($date_of_birth)
    {

        $this->container['date_of_birth'] = $date_of_birth;

        return $this;
    }
    /**
     * Sets date_of_birth
     *
     * @param \DateTime  $date_of_birth Date of birth of the employee (YYYY-MM-DD)
     *
     * @return $this
     */
    public function setDateOfBirthAsDate($date_of_birth)
    {
      //CONVERT Date into MS DateFromat String 
      if (StringUtil::checkThisDate($date_of_birth->format('Y-m-d')) )
      {        
        $timeInMillis = strtotime($date_of_birth->format('Y-m-d')." UTC") * 1000;
        $date_of_birth = "/Date(" . $timeInMillis. "+0000)/";
      }  
      $this->container['date_of_birth'] = $date_of_birth;
      return $this;
    }



    /**
     * Gets home_address
     *
     * @return \XeroAPI\XeroPHP\Models\PayrollAu\HomeAddress
     */
    public function getHomeAddress()
    {
        return $this->container['home_address'];
    }

    /**
     * Sets home_address
     *
     * @param \XeroAPI\XeroPHP\Models\PayrollAu\HomeAddress $home_address home_address
     *
     * @return $this
     */
    public function setHomeAddress($home_address)
    {

        $this->container['home_address'] = $home_address;

        return $this;
    }



    /**
     * Gets start_date
     *
     * @return string|null
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }
    public function getStartDateAsDate()
    {
      if ($this->getStartDate() != null) {
        return StringUtil::convertStringToDate($this->getStartDate());
      } else {
        throw new Exception('can not convert null string to date');
      } 
    }

    /**
     * Sets start_date
     *
     * @param string|null $start_date Start date for an employee (YYYY-MM-DD)
     *
     * @return $this
     */
    public function setStartDate($start_date)
    {

        $this->container['start_date'] = $start_date;

        return $this;
    }
    /**
     * Sets start_date
     *
     * @param \DateTime |null $start_date Start date for an employee (YYYY-MM-DD)
     *
     * @return $this
     */
    public function setStartDateAsDate($start_date)
    {
      //CONVERT Date into MS DateFromat String 
      if (StringUtil::checkThisDate($start_date->format('Y-m-d')) )
      {        
        $timeInMillis = strtotime($start_date->format('Y-m-d')." UTC") * 1000;
        $start_date = "/Date(" . $timeInMillis. "+0000)/";
      }  
      $this->container['start_date'] = $start_date;
      return $this;
    }



    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title Title of the employee
     *
     * @return $this
     */
    public function setTitle($title)
    {

        $this->container['title'] = $title;

        return $this;
    }



    /**
     * Gets middle_names
     *
     * @return string|null
     */
    public function getMiddleNames()
    {
        return $this->container['middle_names'];
    }

    /**
     * Sets middle_names
     *
     * @param string|null $middle_names Middle name(s) of the employee
     *
     * @return $this
     */
    public function setMiddleNames($middle_names)
    {

        $this->container['middle_names'] = $middle_names;

        return $this;
    }



    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email The email address for the employee
     *
     * @return $this
     */
    public function setEmail($email)
    {

        $this->container['email'] = $email;

        return $this;
    }



    /**
     * Gets gender
     *
     * @return string|null
     */
    public function getGender()
    {
        return $this->container['gender'];
    }

    /**
     * Sets gender
     *
     * @param string|null $gender The employee’s gender. See Employee Gender
     *
     * @return $this
     */
    public function setGender($gender)
    {
        $allowedValues = $this->getGenderAllowableValues();
        if (!is_null($gender) && !in_array($gender, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'gender', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }

        $this->container['gender'] = $gender;

        return $this;
    }



    /**
     * Gets phone
     *
     * @return string|null
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string|null $phone Employee phone number
     *
     * @return $this
     */
    public function setPhone($phone)
    {

        $this->container['phone'] = $phone;

        return $this;
    }



    /**
     * Gets mobile
     *
     * @return string|null
     */
    public function getMobile()
    {
        return $this->container['mobile'];
    }

    /**
     * Sets mobile
     *
     * @param string|null $mobile Employee mobile number
     *
     * @return $this
     */
    public function setMobile($mobile)
    {

        $this->container['mobile'] = $mobile;

        return $this;
    }



    /**
     * Gets twitter_user_name
     *
     * @return string|null
     */
    public function getTwitterUserName()
    {
        return $this->container['twitter_user_name'];
    }

    /**
     * Sets twitter_user_name
     *
     * @param string|null $twitter_user_name Employee’s twitter name
     *
     * @return $this
     */
    public function setTwitterUserName($twitter_user_name)
    {

        $this->container['twitter_user_name'] = $twitter_user_name;

        return $this;
    }



    /**
     * Gets is_authorised_to_approve_leave
     *
     * @return bool|null
     */
    public function getIsAuthorisedToApproveLeave()
    {
        return $this->container['is_authorised_to_approve_leave'];
    }

    /**
     * Sets is_authorised_to_approve_leave
     *
     * @param bool|null $is_authorised_to_approve_leave Authorised to approve other employees' leave requests
     *
     * @return $this
     */
    public function setIsAuthorisedToApproveLeave($is_authorised_to_approve_leave)
    {

        $this->container['is_authorised_to_approve_leave'] = $is_authorised_to_approve_leave;

        return $this;
    }



    /**
     * Gets is_authorised_to_approve_timesheets
     *
     * @return bool|null
     */
    public function getIsAuthorisedToApproveTimesheets()
    {
        return $this->container['is_authorised_to_approve_timesheets'];
    }

    /**
     * Sets is_authorised_to_approve_timesheets
     *
     * @param bool|null $is_authorised_to_approve_timesheets Authorised to approve timesheets
     *
     * @return $this
     */
    public function setIsAuthorisedToApproveTimesheets($is_authorised_to_approve_timesheets)
    {

        $this->container['is_authorised_to_approve_timesheets'] = $is_authorised_to_approve_timesheets;

        return $this;
    }



    /**
     * Gets job_title
     *
     * @return string|null
     */
    public function getJobTitle()
    {
        return $this->container['job_title'];
    }

    /**
     * Sets job_title
     *
     * @param string|null $job_title JobTitle of the employee
     *
     * @return $this
     */
    public function setJobTitle($job_title)
    {

        $this->container['job_title'] = $job_title;

        return $this;
    }



    /**
     * Gets classification
     *
     * @return string|null
     */
    public function getClassification()
    {
        return $this->container['classification'];
    }

    /**
     * Sets classification
     *
     * @param string|null $classification Employees classification
     *
     * @return $this
     */
    public function setClassification($classification)
    {

        $this->container['classification'] = $classification;

        return $this;
    }



    /**
     * Gets ordinary_earnings_rate_id
     *
     * @return string|null
     */
    public function getOrdinaryEarningsRateId()
    {
        return $this->container['ordinary_earnings_rate_id'];
    }

    /**
     * Sets ordinary_earnings_rate_id
     *
     * @param string|null $ordinary_earnings_rate_id Xero unique identifier for earnings rate
     *
     * @return $this
     */
    public function setOrdinaryEarningsRateId($ordinary_earnings_rate_id)
    {

        $this->container['ordinary_earnings_rate_id'] = $ordinary_earnings_rate_id;

        return $this;
    }



    /**
     * Gets payroll_calendar_id
     *
     * @return string|null
     */
    public function getPayrollCalendarId()
    {
        return $this->container['payroll_calendar_id'];
    }

    /**
     * Sets payroll_calendar_id
     *
     * @param string|null $payroll_calendar_id Xero unique identifier for payroll calendar for the employee
     *
     * @return $this
     */
    public function setPayrollCalendarId($payroll_calendar_id)
    {

        $this->container['payroll_calendar_id'] = $payroll_calendar_id;

        return $this;
    }



    /**
     * Gets employee_group_name
     *
     * @return string|null
     */
    public function getEmployeeGroupName()
    {
        return $this->container['employee_group_name'];
    }

    /**
     * Sets employee_group_name
     *
     * @param string|null $employee_group_name The Employee Group allows you to report on payroll expenses and liabilities for each group of employees
     *
     * @return $this
     */
    public function setEmployeeGroupName($employee_group_name)
    {

        $this->container['employee_group_name'] = $employee_group_name;

        return $this;
    }



    /**
     * Gets employee_id
     *
     * @return string|null
     */
    public function getEmployeeId()
    {
        return $this->container['employee_id'];
    }

    /**
     * Sets employee_id
     *
     * @param string|null $employee_id Xero unique identifier for an Employee
     *
     * @return $this
     */
    public function setEmployeeId($employee_id)
    {

        $this->container['employee_id'] = $employee_id;

        return $this;
    }



    /**
     * Gets termination_date
     *
     * @return string|null
     */
    public function getTerminationDate()
    {
        return $this->container['termination_date'];
    }
    public function getTerminationDateAsDate()
    {
      if ($this->getTerminationDate() != null) {
        return StringUtil::convertStringToDate($this->getTerminationDate());
      } else {
        throw new Exception('can not convert null string to date');
      } 
    }

    /**
     * Sets termination_date
     *
     * @param string|null $termination_date Employee Termination Date (YYYY-MM-DD)
     *
     * @return $this
     */
    public function setTerminationDate($termination_date)
    {

        $this->container['termination_date'] = $termination_date;

        return $this;
    }
    /**
     * Sets termination_date
     *
     * @param \DateTime |null $termination_date Employee Termination Date (YYYY-MM-DD)
     *
     * @return $this
     */
    public function setTerminationDateAsDate($termination_date)
    {
      //CONVERT Date into MS DateFromat String 
      if (StringUtil::checkThisDate($termination_date->format('Y-m-d')) )
      {        
        $timeInMillis = strtotime($termination_date->format('Y-m-d')." UTC") * 1000;
        $termination_date = "/Date(" . $timeInMillis. "+0000)/";
      }  
      $this->container['termination_date'] = $termination_date;
      return $this;
    }



    /**
     * Gets bank_accounts
     *
     * @return \XeroAPI\XeroPHP\Models\PayrollAu\BankAccount[]|null
     */
    public function getBankAccounts()
    {
        return $this->container['bank_accounts'];
    }

    /**
     * Sets bank_accounts
     *
     * @param \XeroAPI\XeroPHP\Models\PayrollAu\BankAccount[]|null $bank_accounts bank_accounts
     *
     * @return $this
     */
    public function setBankAccounts($bank_accounts)
    {

        $this->container['bank_accounts'] = $bank_accounts;

        return $this;
    }



    /**
     * Gets pay_template
     *
     * @return \XeroAPI\XeroPHP\Models\PayrollAu\PayTemplate|null
     */
    public function getPayTemplate()
    {
        return $this->container['pay_template'];
    }

    /**
     * Sets pay_template
     *
     * @param \XeroAPI\XeroPHP\Models\PayrollAu\PayTemplate|null $pay_template pay_template
     *
     * @return $this
     */
    public function setPayTemplate($pay_template)
    {

        $this->container['pay_template'] = $pay_template;

        return $this;
    }



    /**
     * Gets opening_balances
     *
     * @return \XeroAPI\XeroPHP\Models\PayrollAu\OpeningBalances|null
     */
    public function getOpeningBalances()
    {
        return $this->container['opening_balances'];
    }

    /**
     * Sets opening_balances
     *
     * @param \XeroAPI\XeroPHP\Models\PayrollAu\OpeningBalances|null $opening_balances opening_balances
     *
     * @return $this
     */
    public function setOpeningBalances($opening_balances)
    {

        $this->container['opening_balances'] = $opening_balances;

        return $this;
    }



    /**
     * Gets tax_declaration
     *
     * @return \XeroAPI\XeroPHP\Models\PayrollAu\TaxDeclaration|null
     */
    public function getTaxDeclaration()
    {
        return $this->container['tax_declaration'];
    }

    /**
     * Sets tax_declaration
     *
     * @param \XeroAPI\XeroPHP\Models\PayrollAu\TaxDeclaration|null $tax_declaration tax_declaration
     *
     * @return $this
     */
    public function setTaxDeclaration($tax_declaration)
    {

        $this->container['tax_declaration'] = $tax_declaration;

        return $this;
    }



    /**
     * Gets leave_balances
     *
     * @return \XeroAPI\XeroPHP\Models\PayrollAu\LeaveBalance[]|null
     */
    public function getLeaveBalances()
    {
        return $this->container['leave_balances'];
    }

    /**
     * Sets leave_balances
     *
     * @param \XeroAPI\XeroPHP\Models\PayrollAu\LeaveBalance[]|null $leave_balances leave_balances
     *
     * @return $this
     */
    public function setLeaveBalances($leave_balances)
    {

        $this->container['leave_balances'] = $leave_balances;

        return $this;
    }



    /**
     * Gets leave_lines
     *
     * @return \XeroAPI\XeroPHP\Models\PayrollAu\LeaveLine[]|null
     */
    public function getLeaveLines()
    {
        return $this->container['leave_lines'];
    }

    /**
     * Sets leave_lines
     *
     * @param \XeroAPI\XeroPHP\Models\PayrollAu\LeaveLine[]|null $leave_lines leave_lines
     *
     * @return $this
     */
    public function setLeaveLines($leave_lines)
    {

        $this->container['leave_lines'] = $leave_lines;

        return $this;
    }



    /**
     * Gets super_memberships
     *
     * @return \XeroAPI\XeroPHP\Models\PayrollAu\SuperMembership[]|null
     */
    public function getSuperMemberships()
    {
        return $this->container['super_memberships'];
    }

    /**
     * Sets super_memberships
     *
     * @param \XeroAPI\XeroPHP\Models\PayrollAu\SuperMembership[]|null $super_memberships super_memberships
     *
     * @return $this
     */
    public function setSuperMemberships($super_memberships)
    {

        $this->container['super_memberships'] = $super_memberships;

        return $this;
    }



    /**
     * Gets status
     *
     * @return \XeroAPI\XeroPHP\Models\PayrollAu\EmployeeStatus|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param \XeroAPI\XeroPHP\Models\PayrollAu\EmployeeStatus|null $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {

        $this->container['status'] = $status;

        return $this;
    }



    /**
     * Gets updated_date_utc
     *
     * @return string|null
     */
    public function getUpdatedDateUtc()
    {
        return $this->container['updated_date_utc'];
    }
    public function getUpdatedDateUtcAsDate()
    {
      if ($this->getUpdatedDateUtc() != null) {
        return StringUtil::convertStringToDateTime($this->getUpdatedDateUtc());
      } else {
        throw new Exception('can not convert null string to date');
      } 
    }

    /**
     * Sets updated_date_utc
     *
     * @param string|null $updated_date_utc Last modified timestamp
     *
     * @return $this
     */
    public function setUpdatedDateUtc($updated_date_utc)
    {

        $this->container['updated_date_utc'] = $updated_date_utc;

        return $this;
    }


    /**
     * Gets validation_errors
     *
     * @return \XeroAPI\XeroPHP\Models\PayrollAu\ValidationError[]|null
     */
    public function getValidationErrors()
    {
        return $this->container['validation_errors'];
    }

    /**
     * Sets validation_errors
     *
     * @param \XeroAPI\XeroPHP\Models\PayrollAu\ValidationError[]|null $validation_errors Displays array of validation error messages from the API
     *
     * @return $this
     */
    public function setValidationErrors($validation_errors)
    {

        $this->container['validation_errors'] = $validation_errors;

        return $this;
    }


    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            PayrollAuObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}


