<?
require("admin/database.php");
require("admin/config.php");

ini_set("display_errors", "1");
error_reporting(E_ALL);
       $username = ltrim( $username );
       $password = ltrim( $password );
       if ( $username == "" ) error( "Silahkan Isi Username dengan benar !!!" );
       if ( $password == "" ) error( "Password kosong, apakah anda lupa ???" );

       $result = mysqli_query($koneksi, "SELECT username FROM member WHERE username='$username'" ) or error( mysqli_error() );
       if( mysqli_num_rows( $result ) != 1 ) error( "Maaf, Username ini tidak ada dalam database kami" );
       $result = mysqli_query($koneksi, "SELECT username FROM member WHERE username='$username' AND passwd LIKE BINARY '$password'" ) or error( mysqli_error() );
	   if( mysqli_num_rows( $result ) != 1 ) error( "Maaf, Password Salah !!! " );
          else
       {
       $status="nonaktif" ;
   	   $ukur = mysqli_query( "SELECT username FROM member WHERE username='$username' AND stat LIKE BINARY '$status'" ) or error( mysqli_error() );
	   if( mysqli_num_rows( $ukur ) == 1 ) error( "Maaf, Status keanggotaan anda belum aktif atau sedang diblokir !!! " );
   		 else
	     {
          $_SESSION( "username" );
          $_SESSION( "password" );
	      $test = mysqli_query($koneksi, "SELECT * from member where username='$username'")or error( mysqli_error() );
          $member = mysqli_fetch_array( $test );
          $_SESSION("session_username");
		  $_SESSION("session_nama_member");
		  $_SESSION("session_email_member");
		  $_SESSION("session_hits");
		  $session_username=$member[1];
		  $session_nama_member=$member[3];
		  $session_email_member=$member[4];
		  $session_hits=$member[31];

		  header( "Location: member_area.php" );
   		     }
		}

?>



