
<?php
/* @var $model Users */
/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
    public $username;
    public $password;
    public $email;
    public $first_name;
    public $last_name;
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
        // Create Query
	    $matchquery = "SELECT * FROM `users` WHERE `user_login` = '$this->username' and `user_password` = '$this->password'";
	    // Create Connection
	    $connection=Yii::app()->db;
	    // Create Command
	    $command=$connection->createCommand($matchquery);
	    $dataReader=$command->query();



        echo"shit";
        echo($this->username);
        echo($this->password);

             foreach($dataReader as $row) {
                 echo($row["user_login"]);
                 echo($row["user_password"]);
                 if ($row["user_login"] === $this->username and $row["user_password"] === $this->password)
                     $this->errorCode = self::ERROR_NONE;
                 return !$this->errorCode;

             }
	}
	public function saveUser()
    {


    }
}