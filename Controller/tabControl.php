<script>
function minimizeCharacter(i)
{
  var characterTab = document.getElementById("characterTab"+i);
  var characterRow = document.getElementById("characterRow"+i);

  characterRow.classList.remove("show");
  characterRow.classList.remove("active");
  characterTab.classList.remove("active");
}

function minimizeSpell(i)
{
  var spell = document.getElementById("spellTab"+i);
  var content = document.getElementById("spell"+i);

  content.classList.remove("show");
  content.classList.remove("active");
  spell.classList.remove("active");
}

function minimizeMonster(i)
{
  var monster = document.getElementById("monsterTab"+i);
  var content = document.getElementById("monster"+i);

  content.classList.remove("show");
  content.classList.remove("active");
  monster.classList.remove("active");
}

var characterHealth = <?php echo json_encode($characterHealth); ?>;
var monsterHealth = <?php echo json_encode($monsterHealth); ?>;

function addCharacterHealth(i)
{
  characterHealth[i] = parseInt(characterHealth[i]) + 1;
  document.getElementById("characterHealthDisplay"+i).innerHTML = characterHealth[i];
}

function removeCharacterHealth(i)
{
  characterHealth[i] = parseInt(characterHealth[i]) - 1;
  document.getElementById("characterHealthDisplay"+i).innerHTML = characterHealth[i];
}

function addMonsterHealth(i)
{
  monsterHealth[i] = parseInt(monsterHealth[i]) + 1;
  document.getElementById("monsterHealthDisplay"+i).innerHTML = monsterHealth[i];
}

function removeMonsterHealth(i)
{
  monsterHealth[i] = parseInt(monsterHealth[i]) - 1;
  document.getElementById("monsterHealthDisplay"+i).innerHTML = monsterHealth[i];
}
</script>
