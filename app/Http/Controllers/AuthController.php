<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use DB;
use DateTime;
use Session;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $loginid = $request->loginid;
        $password = $request->password;
        

        /*$result = DB::selectOne('select u.operid, u.name, u.pwd, u.activests, u.signonsts, ur.userrole, u.branchcode, u.lastsignondate, u.lastsignontime from users u, userrole ur where u.operid=? and ur.operid=?',[$loginid,$loginid]);

        if(is_null($result))
        {
            return redirect()->back()->with('error', 'Username not exist');
        }

        $dbpwd = $result->pwd;

        if ($password != $dbpwd)
        {
            return redirect()->back()->with('error', 'Incorrect password');
        }

        if ($result->activests == 'I')
        {

            return redirect()->back()->with('error', 'User is inactive');
        }


        if ($result->activests == 'A')
        {
            $sql = 'update users set signonsts=? where operid=?';
            $row = DB::update($sql, [$signonsts = 'S',$loginid]);
        }


        // DB::users('loginlastsignondate')->insert([
        // $operid = session('loginid');
        $now = new DateTime();

        $sql = 'update users set lastsignondate=?, lastsignontime=? where operid=?';
        $row = DB::update($sql, [$now->format('Ymd'), $now->format('His'), $loginid]);

        if ($row <= 0)
        {
            DB::rollback();
            return redirect()->back()->with('error', 'Failed to update data');

        }

        session(['loginid' => $request->loginid]);
        session(['loginname' => $result->operid]);
        session(['loginrole' => $result->userrole]);
        session(['loginbranchcode' => $result->branchcode]);
        session(['loginsignonsts' => $result->signonsts]);*/

        session(['loginid' => 'atikah']);
        session(['loginname' => 'atikah']);
        session(['loginrole' => 'PK']);
        session(['loginbranchcode' => 'A31']);

        $now = new DateTime();
        session(['loginlastsignondate' => $now->format('d/m/Y')]);
        session(['loginlastsignontime' => $now->format('H:i:s')]);
        session(['loginsignonsts' => 'A']);
        
        return redirect('/home');
    }

    public function logout()
    {
        $loginid = Session('loginid');
        $sql = 'update users set signonsts=? where operid=?';
        $row = DB::update($sql, [$signonsts = 'N',$loginid]);
        return redirect('/login')->with('error', 'User is successfully logout');
    }
}
