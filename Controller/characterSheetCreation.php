<?php
function GetModifier($ability)
{
  $ability = $ability - 10;
  $ability = $ability / 2;
  $modifier = floor($ability);

  return $modifier;
}

function SetTempHP($ability, $level)
{
  $ability = (int) $ability;
  $level = (int) $level;

  $modifier = GetModifier($ability);

  return $modifier + $level;
}

function ProficienyBonus($level)
{
  if($level == 1 || $level == 2 || $level == 3 || $level == 4)
  {
    $bonus = 2;
  }
  elseif($level == 5 || $level == 6 || $level == 7 || $level == 8)
  {
    $bonus = 3;
  }
  elseif($level == 9 || $level == 10 || $level == 11 || $level == 12)
  {
    $bonus = 4;
  }
  elseif($level == 13 || $level == 14 || $level == 15 || $level == 16)
  {
    $bonus = 5;
  }
  else
  {
    $bonus = 6;
  }
  return $bonus;
}

function SpellCastingAbility($ability, $level)
{
  $ability = (int) $ability;
  $level = (int) $level;

  $modifier = GetModifier($ability);
  $bonus = ProficienyBonus($level);

  return $modifier + $bonus;
}

function SpellSaveDC($ability, $level)
{
  $ability = (int) $ability;
  $level = (int) $level;

  $modifier = GetModifier($ability);
  $bonus = ProficienyBonus($level);

  return 8 + $modifier + $bonus;
}

function PassivePerception($ability, $proficiencies, $level)
{
  if(strpos($proficiencies, "perception") !== false)
  {
    $proficient = ProficienyBonus($level);
  }
  else
  {
    $proficient = 0;
  }

  $modifier = GetModifier($ability);

  return 10 + $modifier + $proficient;
}
?>
