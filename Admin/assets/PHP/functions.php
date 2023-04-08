<?php

function check_login($con)
{
	if(isset($_SESSION['id']))
	{
		$id = $_SESSION['id'];
		$query = "select * from admin_kullanıcılar where id = '$id' limit 1";

		$result = mysqli_query($con,$query);
		if($result && mysqli_num_rows($result) > 0)
		{
			$user_data = mysqli_fetch_assoc($result);
			return $user_data;
		}
	}
    elseif (isset($_COOKIE['email']) && isset($_COOKIE['password'])) {
        $email = $_COOKIE['email'];
        $password = $_COOKIE['password'];
        $query = "select * from admin_kullanıcılar where E_posta = '$email' limit 1";
        $result = mysqli_query($con,$query);
        if($result && mysqli_num_rows($result) > 0)
        {
            $user_data = mysqli_fetch_assoc($result);
            if($user_data['password'] === $password)
            {
                $_SESSION['id'] = $user_data['id'];
            }
        }
    }
	//redirect
	header("Location: giris.php");
	die;
}

function random_num($length)
{

	$text = "";
	if($length < 5)
	{
		$length = 5;
	}

	$len = rand(4,$length);

	for ($i=0; $i < $len; $i++) { 
		# code...

		$text .= rand(0,9);
	}

	return $text;
}

function abone_getir($con)
{
    $query = "select * from aboneler";
    $result = mysqli_query($con,$query);
    if($result && mysqli_num_rows($result) > 0)
    {
        $abone_data = mysqli_fetch_all($result,MYSQLI_ASSOC);
        return $abone_data;
    }
}