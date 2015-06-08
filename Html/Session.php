<?php
include("../php/conectarmysql.php"); 
if ( $_REQUEST['LUsuario'] ) {
    session_start();
/* Create a new session, deleting the previous session data. */
session_regenerate_id(TRUE);
/* erase data carried over from previous session */
$_SESSION=array();
    session_name($_REQUEST['LUsuario']);
}
session_start();
 
$messages = "";
function show( $str ) {  global $messages;  $messages .= $str; }
function show_sess_vars() {
    foreach ( $_SESSION as $key => $val ) {
        show("Session var '$key': \t'$val'\n");
    }
}
 
show("Session name: \t" . session_name() . "\n");
show("Session ID: \t" . session_id() . "\n");
foreach ( $_REQUEST as $key => $val ) {
    if ( $key == 'regenerate' )
    {
        session_regenerate_id();
        show("session_regenerate_id();\n");
        show("Session name: \t" . session_name() . "\n");
        show("Session ID: \t" . session_id() . "\n");
    }
    else if ( $key == 'clear' )
    {
        $_SESSION = array();
        show("\$_SESSION = array();\n");
    }
    else if ( $key == 'switch' )
    {
        show("Will attempt to switch session name.. vars:\n");
        show_sess_vars();
        session_write_close();
        $res = session_name($val);
        show("session_name($val) - res: $res\n");
        session_start();
        show("Session name: \t" . session_name() . "\n");
        show("Session ID: \t" . session_id() . "\n");
    }
    else if ( $key == 'switch2' )
    {
        show("Will attempt to switch session name.. vars:\n");
        show_sess_vars();
        session_write_close();
        show("session_write_close();\n");
         
        $sess_id = $_COOKIE[$val];
        if ( $sess_id ) {
            show("session '$val' exists, resuming..\n");
            //unset($_SESSION);  // to make sure - this should be reloaded below
            session_name( $val );
            session_id( $sess_id );
            session_start();   // fills $_SESSION from the named session
        } else {
            show("creating new session '$val'...\n");
            session_name( $val );
            session_start();
            session_regenerate_id();  // create new (copy of old), leave old alone
            $_SESSION = array();  // wipe data clean for a fresh session
            show("regenerated ID and wiped SESSION superglobal\n");
        }
        show("Session name: \t" . session_name() . "\n");
        show("Session ID: \t" . session_id() . "\n");
    }
    else
    {
        if ( $_COOKIE[$key] ) {
            show("Cookie: \t'$key': \t'$val'\n");
        } else {
            show("Setting session var: \t'$key': \t'$val'\n");
            $_SESSION[$key] = $val;
        }
    }
}
show("----\nSession vars:\n");
show_sess_vars();
if ( false ) {
    session_write_close();
     
    session_name("edit_assembly");
    session_start();
    show("Session name: \t" . session_name() . "\n");
    show("Session ID: \t" . session_id() . "\n");
    show_sess_vars();
}
echo '<script language="javascript">alert(" Bienvenido"); document.location =("../html/menu.php"); </script>';
?>