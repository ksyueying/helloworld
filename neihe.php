<?php
   function isWinner($first,$last,$total)
   {
       $winner = array();
       for($i=0;;$i++)
       {
           $number = mt_rand($first,$last);
           if(!in_array($number,$winner))
               $winner[] = $number;
           if(count($winner)==$total)  break;
       }
       return implode(' ',$winner);
   }
   echo isWinner(1,100,5);
   ?>