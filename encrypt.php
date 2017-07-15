< ?php
// function to get the encrypted user password-
function encrypt_customer_password($paswd)
{
  $mykey=$this->getEncryptKey();
  $encryptedPassword=$this->encryptPaswd($paswd,$mykey);
  return $encryptedPassword;
}
 
// function to get the decrypted user password
function decrypt_customer_password($paswd)
{
  $mykey=$this->getEncryptKey();
  $decryptedPassword=$this->decryptPaswd($paswd,$mykey);
  return $decryptedPassword;
}
 
function getEncryptKey()
{
  return base64_encode('mykeyhere');
}
function encryptPaswd($string, $key)
{
  $result = '';
  for($i=0; $i<strlen ($string); $i++)
  {
	$char = substr($string, $i, 1);
	$keychar = substr($key, ($i % strlen($key))-1, 1);
	$char = chr(ord($char)+ord($keychar));
	$result.=$char;
  }
	return base64_encode($result);
}
 
function decryptPaswd($string, $key)
{
  $result = '';
  $string = base64_decode($string);
  for($i=0; $i<strlen($string); $i++)
  {
	$char = substr($string, $i, 1);
	$keychar = substr($key, ($i % strlen($key))-1, 1);
	$char = chr(ord($char)-ord($keychar));
	$result.=$char;
  }
 
	return $result;
}
 
?>