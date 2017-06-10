<?php
require("admin/config.php");
require("admin/database.php");

ini_set("display_errors", "1");
error_reporting(E_ALL);
session_start();

		$ip = $_SERVER['REMOTE_ADDR'];
		if(isset($id))
		{
			$result = mysqli_query($koneksi, "SELECT * FROM member WHERE username='$id'") or error(mysqli_error());
			$member = mysqli_fetch_array($result);
			if(mysqli_num_rows($result) != 1) error("Maaf, Username ini Tidak ada dalam database kami.");
			$status="nonaktif";
			if ($member[30] == $status) error("Maaf Member anda belum kami aktifkan, atau sedang kami blokir karena belum menyelesaikan transaksi dengan kami");
			else
			{
				mysqli_query("UPDATE member SET hits=hits+1 WHERE username='$member[1]'") or error(mysqli_error());
				$_SESSION("session_username_sponsor");
				$_SESSION("session_nama_sponsor");
				$_SESSION("session_id_sponsor");
				$_SESSION("session_kota_sponsor");
				$_SESSION("session_email_sponsor");
				$_SESSION("session_ip");
				$session_username_sponsor=$member[1];
				$session_nama_sponsor=$member[3];
				$session_id_sponsor=$member[6];
				$session_kota_sponsor=$member[9];
				$session_email_sponsor=$member[4];
				$session_ip=$ip;
				echo $_SESSION["session_username_sponsor"];
				return true;
			}
		}
		else
		{
			if($session_username_sponsor != "")
			{
				return true;
			}
			else
			{
				$id=$USERNAME_DEFAULT;
				$result = mysqli_query($koneksi, "SELECT * FROM member WHERE username='$id'") or error(mysqli_error());
				$member = mysqli_fetch_array($result);
				mysqli_query($koneksi, "UPDATE member SET hits=hits+1 WHERE username='$member[1]'") or error(mysqli_error());
				$_SESSION("session_username_sponsor");
				$_SESSION("session_nama_sponsor");
				$_SESSION("session_id_sponsor");
				$_SESSION("session_kota_sponsor");
				$_SESSION("session_email_sponsor");
				$_SESSION("session_ip");
				$session_username_sponsor=$member[1];
				$session_nama_sponsor=$member[3];
				$session_id_sponsor=$member[6];
				$session_kota_sponsor=$member[9];
				$session_email_sponsor=$member[4];
				$session_ip=$ip;
				return true;
			}
		}

?>