<?php

session_start();

$players = ['X' , 'O'];

init();

$CURRENT_URL = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$CURRENT_URL = strTok($CURRENT_URL, "?");

function init()
{
    if (isset($_POST['start']) || !isset($_SESSION['status']))
    {
        start();
    }
  
    
    game_turn();
}

function game()
{
    global $CURRENT_URL;
    $el=null;
    if(isset($_GET['action']) && $_GET['action'] == 'setName')
    {
        if(isset($_POST['setName']))
        {
            $p1 = $_POST['player1'];
            $p2 = $_POST['player2'];
            $_SESSION['playerNames'] = [1=>$p1 , 2=>$p2];
            header("location: $CURRENT_URL");
            // var_dump($_SESSION['playerNames']);
        }
        $el .= game_setName();
    }
    else
    {
        $el .= game_winner(); 
        $el .= create(); 
        $el .= game_resetBtn();
    }        

    return $el;
}

function start()
{
    global $players;
    $_SESSION['status']= 'start';
    $_SESSION['game']=[
            1=> null,
            2=> null,
            3=> null,
            4=> null,
            5=> null,
            6=> null,
            7=> null,
            8=> null,
            9=> null,
        ];

        if(!isset($_SESSION['playersNames']))
        {
            $_SESION['playerNames'] = [1=>'player1' , 2=>'player2'];
        }

        if(isset($_SESSION['lastwinner']))
        {
            $_SESSION['currnet'] = $_SESSION['lastwinner'];
            // echo $_SESSION['lastwinner'];
        }

        else
        {       
            $_SESSION['current'] = $players[rand(0,1)];
            // var_dump($_SESSION['current']);
        }
}
     
function game_activeChecker($_player)
{
    if($_SESSION['current'] === $_player)
    {
        return ' active';
    }
    return null;

}

function create()
{
    $element= null;
    $element.="<div class='row title'>";
    $element.="<div class='span6". game_activeChecker('O'). "'>".@$_SESSION['playerNames'][1]."(<span class='cO'>O</span>)</div>&nbsp;";
    $element.="<div class='span7". game_activeChecker('X'). "'>".@$_SESSION['playerNames'][2]."(<span class='cX'>X</span>)</div>&nbsp;";
    $element.="</div>";
    foreach($_SESSION['game'] as $cell => $value)
    {
        $className = null;
        if($value)
        {
             $className = 'c'.$value; 
        }
        $element.= "<input type='submit' class='cell  $className' value='$value' name='cell$cell' "; 
        if($value)
        {
            $element.= "disabled";
        }
        elseif($_SESSION['status'] == 'winner' || $_SESSION['status'] == 'draw' )
        {
            $element.= "disabled";
        }
        $element.= ">\n" ;   
    }
    return $element;
}

function game_turn()
{
    foreach ($_SESSION['game'] as $cell => $value)
    {
        if(isset($_POST['cell'.$cell]))
        {
            $_SESSION['status'] = 'inprogress';
            if($_SESSION['game'][$cell] === null)
            {
               $_SESSION['game'][$cell] = $_SESSION['current'];

                if($_SESSION['current'] === 'X')
                {
                    $_SESSION['current'] = 'O';
                }
                else
                {
                    $_SESSION['current'] = 'X';
                }
            }    
        }
    }
} 

function game_setName()
{
    $el = null;
    $el .= "<input class=form type='text' name='player1' value='".@$_SESSION['playerNames'][1]."' placeholder='player1' >";
    $el .= "<input class=form type='text' name='player2' value='".@$_SESSION['playerNames'][2]."' placeholder='player2' ><br>";
    $el .= "<input class=btn type='submit' name='setName' value='save Names' >";

    return $el;
}

function game_checkwinner()
{
    $g = $_SESSION['game'];
    $winner = null;
    if(
               ($g[1] && $g[1] == $g[2] && $g[2] == $g[3])
            || ($g[4] && $g[4] == $g[5] && $g[5] == $g[6])
            || ($g[7] && $g[7] == $g[8] && $g[8] == $g[9])

     
            || ($g[1] && $g[1] == $g[4] && $g[4] == $g[7])
            || ($g[2] && $g[2] == $g[5] && $g[5] == $g[8])
            || ($g[3] && $g[3] == $g[6] && $g[6] == $g[9])

      
            || ($g[1] && $g[1] == $g[5] && $g[5] == $g[9])
            || ($g[3] && $g[3] == $g[5] && $g[5] == $g[7])
            
        )
        {
            if($_SESSION['current'] == "X")
            {
                $winner = "O";
            }
            else
            {
                $winner = "X";
            }    
            
        }
        
        return $winner;      
}

function game_winner()
{

    $game_result = game_checkwinner();
    $result = null;
    $el_chengeName ="<p><a href='?action=setName'>Do you want to save your name ?</a></p>";
    if($game_result)
    {
        $_SESSION['lastwinner'] = $game_result;
        $_SESSION['status']= 'winner';
        $result = "<div id='result'> $game_result win! $el_chengeName</div>";
        game_saveResult();
    }
     
    elseif(!in_array(null, $_SESSION['game']))
    {
            $_SESSION['status']= 'draw';
            $_SESSION['lastwinner'] = null;
            $result = "<div id='result'> Draw $el_chengeName</div>";
           game_saveResult();
    }
    else
    {
        $_SEESION['status'] = 'inprogress';
    }  
    return $result;          
}

function game_resetBtn()
{
    $resetValue = 'start';
    if($_SESSION['status'] == 'inprogress')
    {
        $resetValue = 'resign';
    }
    elseif($_SESSION['status'] == 'winner' || $_SESSION['status'] == 'draw' )
    {
        $resetValue = "PlayAgain!";
    }
        $result = "<input  type=submit name=start id='resetBtn' value=$resetValue>";
    return $result; 
}

function game_saveResult()
{
    $value = [];

    

    $value['status'] = $_SESSION['status'];
    // $value['winner'] =

    switch ($_SESSION['status']) {
        case 'winner':
            $_SESSION['lastwinner'];
            break;
        
        case 'draw':
            break;

        case 'resign':
            break;

        case 'inprogress':
            break;

        default:
            # code...
            break;
    }


    $detail_list = ['winner' , 'draw' , 'resign' , 'inprogress'];
    $Newvalue = [];
    $Newvalue =[];

    
    if(isset($_COOKIE['game_datail_total']))
    {
        $Newvalue = json_decode($_COOKIE['game_datail_total'], true);
    }
    
    foreach ($detail_list as $value) {
        if(!isset($Newvalue[$value]))
        {
            $Newvalue[$value] = 0;
        }
    }
    
    $Newvalue[$_SESSION['status']] = $Newvalue[$_SESSION['status']] + 1;
    if(isset($Newvalue['count']))
    {
        $Newvalue['count'] = $Newvalue['status'] + 1;
    }
    else
    {
        $Newvalue['count'] = 1;
    }

    // var_dump($Newvalue);
    // $value = [$_SESSION['status']]; 
    $Newvalue = json_encode($Newvalue);
  
    setcookie('game_detail_total', $Newvalue , time() + (86400*365));
}
?>