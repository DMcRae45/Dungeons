<script>
function minimizeCharacter(i)
{
  var character = document.getElementById("CharacterTab"+i);
  var content = document.getElementById("Character"+i);

  content.classList.remove("show");
  content.classList.remove("active");
  character.classList.remove("active");
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
</script>
