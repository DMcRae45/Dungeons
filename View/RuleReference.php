<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html>
	<head>
		<?php
		include '../Model/session.php';
    include 'header.php';
		?>
		<meta content="text/html; charset=utf-8" http-equiv="content-type">
		<link rel="stylesheet" type="text/css" href="default.css">
		<title></title>
		<style media="screen" type="text/css">
		html, body {
			margin: 0;
			padding: 0;
		}
		dt { background-color:black; }
		h3 { padding:0; margin:0; background-color:#E0E4C0; text-align:center;}
		table.noborder, td.noborder { border-style: none;}
		.nobackground { background:rgba(0,0,0,0);}
		td { border: 1px solid black;}
		th { border: 1px solid black; background-color: black;}
		a { text-decoration: underline !important; font-weight: bold !important;}

		/* For smaller table font */
		.small-font table tr td {
			padding:0px 0px 0px 0px;
			font-size: 10px;
		}

		.small-font th {
			font-size: 10px;
		}

		/* TOC Collapsable Stuff */

		.collapsibleList li > input + * {
		 display: none;
		}

		.collapsibleList li > input:checked + * {
		 display: block;
		}

		.collapsibleList li > input {
		 display: none;
		}

		ol {
		    counter-reset: li; /* Initiate a counter */
		    list-style: none; /* Remove default numbering */
		    padding: 0;
		    margin-bottom: 4em;
		    text-shadow: 0 1px 0 rgba(0,0,0,.2);
		}
		ol ol {
			margin: 0 0 0 2em;
		}
		.collapsibleList a, label {
			letter-spacing: .05em;
			font-variant: small-caps;
			font-weight: bold !important;
		    position: relative;
		    display: block;
		    padding: .4em .4em .4em 2em;
		    *padding: .4em;
		    margin: .5em 0;
		    background: #D47E16;
		    color: black;
		    text-decoration: none !important;
		    border-radius: .3em;
		    transition: all .3s ease-out;
		}

		.collapsibleList a:before {
		    content: counter(li);
		    counter-increment: li;
		    position: absolute;
		    left: -1.3em;
		    top: 50%;
		    margin-top: -1.3em;
		    background: #581A0F;
		    color: #FFFFFF;
		    height: 2em;
		    width: 2em;
		    line-height: 2em;
		    border: .2em solid #FFF;
		    text-align: center;
		    border-radius: 2em;
		    transition: all .3s ease-out;
		}
	/* This is for the version number in the upper right hand corner */
		.ribbon {
		    background: #581A0F;
		    border-left: 1px groove black;
    		border-right: 1px groove black;
		    border-radius: 5px 5px 0px 0px;
		    box-shadow: 5px 0 0 #581A0F,
		                -5px 0 0 #581A0F;
		    height: 52px;
		    margin: 0 5px;
		    position: relative;
		    float: right;
		    top: 40px;
		    right: 7px;
		    width: 40px;
		    z-index: 1;
		    -webkit-filter: drop-shadow(0 2px 5px hsla(0,0%,0%,.5));
		}
			/* Uncomment to give a banner effect */

		.ribbon:after,
		.ribbon:before {
		    border-top: 10px solid #581A0F;
		    content: '';
		    height: 0;
		    position: absolute;
		    top: 100%;
		    width: 0;
		    z-index: 1;
		}
		.ribbon:after {
		    border-left: 27px solid transparent;
		    right: -6px;
		    z-index: 1;
		}
		.ribbon:before {
		    border-right: 27px solid transparent;
		    z-index: 1;
		    left: -6px;
		}
			/* This centers text in the banner */
		.ribbon-text {
			position: absolute;
		    top: 40%;
		    left: 50%;
		    height: 30%;
		    width: 50%;
		    margin: -15% 0 0 -47%;
		    font-weight: bold;
		    font-size: 10px;
		    color: #f0f0f0;
		    text-align: center;
		}

		.behind { position: relative;
			z-index: 0;
			padding-top: 5px;
		}
		/* Back to top option */

		nav {
			position: relative;
			z-index: 2;
			top: 0px;
		}

		.to-top, .to-top a, .to-top a:visited {
			position:fixed;
			top:0;
			z-index:1;
			display: block !important;
			width:100%;
			text-decoration: none !important;
			text-shadow: 0 1px 0 rgba(0,0,0,.2);
		    color: #FFFFFF !important;
		    line-height: 2em;
		    text-align: center;
			letter-spacing: .05em;
			font-variant: small-caps;
			font-weight: bold !important;
		    background: grey;

		}
		body {
			text-rendering: optimizeLegibility;
		}
		</style>

	</head>
	<body>
	<nav>
		<div style="position: relative;">
			<div class="ribbon">
				<div class="ribbon-text">Version<br />&nbsp;&nbsp;1.5.1
				</div>
			</div>
			<div class="behind">
				<h1 id="toc">Table of Contents</h1>
			</div>
			<i>Expand out the section and subsection you need to quickly go to the topic you need.</i>
		</div>
		<ol type="I" class="collapsibleList">
			<li>
				<label for="Ability-Checks">Ability Checks</label>
				<input type="checkbox" id="Ability-Checks" />
				<ol type="A">
					<li class="file"><a href="#skills">Skill Checks</a></li>
					<li class="file"><a href="#difficultyclasses">Difficulty Classes</a></li>
				</ol>
			</li>
			<li>
				<label for="Ability-Scores">Ability Scores</label>
				<input type="checkbox" id="Ability-Scores" />
				<ol type="i">
					<li class="file"><a href="#abilityscores">Ability Scores</a></li>
					<li class="file"><a href="#abilitymodifiers">Ability Modifiers</a></li>
					<li><label for="Strength-Scores">Strength</label>
						<input type="checkbox" id="Strength-Scores" />
						<ol type="a">
						<li class="file"><a href="#strength">Strength</a></li>
						<li class="file"><a href="#athletics">Athletics</a></li>
						<li class="file"><a href="#featsofstrength">Feats of Strength</a></li>
						</ol>
					</li>

					<li><label for="Dex-Scores">Dexterity</label>
						<input type="checkbox" id="Dex-Scores" />
						<ol type="a">
						<li class="file"><a href="#dexterity">Dexterity</a></li>
						<li class="file"><a href="#acrobatics">Acrobatics</a></li>
						<li class="file"><a href="#sleightofhand">Sleight of Hand</a></li>
						<li class="file"><a href="#stealth">Stealth</a></li>
						<li class="file"><a href="#picklock">Pick Lock, Disarm Trap, Other</a></li>
						</ol>
					</li>

					<li><label for="Con-Scores">Constitution</label>
						<input type="checkbox" id="Con-Scores" />
						<ol type="a">
						<li class="file"><a href="#constitution">Constitution</a></li>
						<li class="file"><a href="#concentration">Concentration</a></li>
						<li class="file"><a href="#forcedmarch">Forced March</a></li>
						<li class="file"><a href="#air">Air</a></li>
						<li class="file"><a href="#food">Food</a></li>
						<li class="file"><a href="#water">Water</a></li>
						</ol>
					</li>

					<li><label for="Int-Scores">Intelligence</label>
						<input type="checkbox" id="Int-Scores" />
						<ol type="a">
						<li class="file"><a href="#intelligence">Intelligence</a></li>
						<li class="file"><a href="#arcana">Arcana, History, Nature, Religion</a></li>
						<li class="file"><a href="#investigation">Investigation, Other</a></li>
						</ol>
					</li>

					<li><label for="Wis-Scores">Wisdom</label>
						<input type="checkbox" id="Wis-Scores" />
						<ol type="a">
						<li class="file"><a href="#wisdom">Wisdom</a></li>
						<li class="file"><a href="#insight">Insight, Perception</a></li>
						<li class="file"><a href="#survival">Survival</a></li>
						<li class="file"><a href="#animalhandling">Animal Handling, Medicine, Other</a></li>
						</ol>
					</li>

					<li><label for="Cha-Scores">Charisma</label>
						<input type="checkbox" id="Cha-Scores" />
						<ol type="a">
						<li class="file"><a href="#charisma">Charisma</a></li>
						<li class="file"><a href="#deception">Deception</a></li>
						<li class="file"><a href="#intimidation">Intimidation</a></li>
						<li class="file"><a href="#performance">Performance</a></li>
						<li class="file"><a href="#persuasion">Persuasion</a></li>
						</ol>
					</li>
				</ol>
			</li>
			<li>
				<label for="Combat">Combat</label>
				<input type="checkbox" id="Combat" />
				<ol type="i">
					<li><label for="Conditions">Conditions</label>
						<input type="checkbox" id="Conditions" />
						<ol type="a">
							<li class="file"><a href="#conditions">Conditions</a></li>
							<li class="file"><a href="#blinded">Blinded</a></li>
							<li class="file"><a href="#charmed">Charmed</a></li>
							<li class="file"><a href="#deafened">Deafened</a></li>
							<li class="file"><a href="#frightened">Frightened</a></li>
							<li class="file"><a href="#grappled">Grappled</a></li>
							<li class="file"><a href="#incapacitated">Incapacitated</a></li>
							<li class="file"><a href="#invisible">Invisible</a></li>
							<li class="file"><a href="#paralyzed">Paralyzed</a></li>
							<li class="file"><a href="#petrified">Petrified</a></li>
							<li class="file"><a href="#poisoned">Poisoned</a></li>
							<li class="file"><a href="#restrained">Restrained</a></li>
							<li class="file"><a href="#stunned">Stunned</a></li>
							<li class="file"><a href="#unconscious">Unconscious</a></li>
						</ol>
					</li>
					<li class="file"><a href="#exhaustion">Exhaustion</a></li>
					<li class="file"><a href="#damagetypes">Damage Types</a></li>
					<li class="file"><a href="#damageseverity">Damage Severity</a></li>
					<li class="file"><a href="#aoetargets">Targets in Areas of Effect</a></li>
					<li class="file"><a href="#cover">Cover</a></li>
					<li class="file"><a href="#combatactions">Actions In Combat</a></li>
					<li class="file"><a href="#stealthrules">The Rules of Stealth</a></li>
					<li class="file"><a href="#grappling">Grappling, Shoving, and Climbing onto Bigger Creatures</a></li>
					<li class="file"><a href="#readying">Readying an Action</a></li>
					<li class="file"><a href="#death">Dropping to 0 Hit Points</a></li>
					<li class="file"><a href="#wildmagic">Wild Magic Surge</a></li>
				</ol>
			</li>
			<li>
				<label for="Creatures">Adventuring</label>
				<input type="checkbox" id="Creatures" />
				<ol type="i">
					<li class="file"><a href="#adventuring">Adventuring</a></li>
					<li class="file"><a href="#characterlevel">PC Leveling Requirements</a></li>
					<li class="file"><a href="#currency">Currency Exchange Rates</a></li>
					<li class="file"><a href="#services">Adventuring Services</a></li>
					<li class="file"><a href="#lifestyle">Lifestyle Expenses</a></li>
					<li class="file"><a href="#lodging">Food, Drink, and Lodging</a></li>
					<li class="file"><a href="#maptravelpace">Map Travel Pace</a></li>
					<li class="file"><a href="#speed">Party Speed</a></li>
					<li class="file"><a href="#encounterdistance">Encounter Distance</a></li>
					<li class="file"><a href="#vision">Vision and Light</a></li>
					<li class="file"><a href="#light">Light Sources</a></li>
					<li class="file"><a href="#traps">Trap Save DCs and Attack Bonuses</a></li>
					<li class="file"><a href="#damageseverity">Damage Severity and Level</a></li>
					<li class="file"><a href="#improvizingdamage">Improvising Damage</a></li>
					<li class="file"><a href="#objectac">Object AC</a></li>
					<li class="file"><a href="#objecthp">Object HP</a></li>
					<li class="file"><a href="#resting">Resting</a></li>
					<li class="file"><a href="#weather">Weather</a></li>
					<li class="file"><a href="#languages">Languages</a></li>
				</ol>
			<li>
				<label for="randomtables">Random Tables</label>
				<input type="checkbox" id="randomtables" />
				<ol type="a">
					<li class="file"><a href="#quickfind">Quick Find</a></li>
					<li class="file"><a href="#somethinghappened">Something Happened</a></li>
					<li class="file"><a href="#randomhazards">Dungeon Hazards</a></li>
					<li class="file"><a href="#randomobstacles">Dungeon Obstacles</a></li>
					<li><label for="mytraps">Random Traps</label>
					<input type="checkbox" id="mytraps" />
					<ol type="a">
						<li class="file"><a href="#randomtraptrigger">Trap Trigger</a></li>
						<li class="file"><a href="#randomtrapseverity">Trap Damage Severity</a></li>
						<li class="file"><a href="#randomtrapeffect">Trap Effect</a></li>
					</ol>
					</li>
					<li><label for="mytricks">Random Tricks</label>
					<input type="checkbox" id="mytricks" />
						<ol type="a">
							<li class="file"><a href="#trickobjects">Trick Objects</a></li>
							<li class="file"><a href="#trickeffects">Trick Effects</a></li>
						</ol>
					</li>
					<li><label for="madness">Madness</label>
					<input type="checkbox" id="madness" />
						<ol type="a">
							<li class="file"><a href="#shortterm">Short-Term Madness</a></li>
							<li class="file"><a href="#longterm">Long-Term Madness</a></li>
							<li class="file"><a href="#indefinite">Indefinite Madness</a></li>
						<li><label for="Demon-Madness">Demononic Madness</label>
							<input type="checkbox" id="Demon-Madness" />
							<ol type="a">
							<li class="file"><a href="#Baphomet">Madness of Baphomet</a></li>
							<li class="file"><a href="#Demogorgon">Madness of Demogorgon</a></li>
							<li class="file"><a href="#Frazurbluu">Madness of Fraz-Urb'luu</a></li>
							<li class="file"><a href="#Grazzt">Madness of Graz'zt</a></li>
							<li class="file"><a href="#Juiblex">Madness of Juiblex</a></li>
							<li class="file"><a href="#Orcus">Madness of Orcus</a></li>
							<li class="file"><a href="#Yeenoghu">Madness of Yeenoghu</a></li>
							<li class="file"><a href="#Zuggtmoy">Madness of Zuggtmoy</a></li>
						</ol>
						</ol>
					</li>
					<li><label for="dungeondressing">Dungeon Dressing</label>
					<input type="checkbox" id="dungeondressing" />
					<ol type="a">
					<li class="file"><a href="#dungeonnoises">Noises</a></li>
					<li class="file"><a href="#dungeonair">Air</a></li>
					<li class="file"><a href="#dungeonodor">Odor</a></li>
					<li class="file"><a href="#dungeongeneralfeatures">General Features</a></li>
					<li class="file"><a href="#dungeongeneralfurnishing">General Furnishing and Appoinments</a></li>
					<li class="file"><a href="#dungeonreligiousarticles">Religious Articles and Furnishings</a></li>
					<li class="file"><a href="#dungeonmagefurnishings">Mage Furnishings</a></li>
					<li class="file"><a href="#dungeonpersonalitems">Utensils and Personal Items</a></li>
					<li class="file"><a href="#dungeoncontainercontents">Container Contents</a></li>
					<li class="file"><a href="#dungeonbooks">Books, Scrolls, and Tomes</a></li>
					<li class="file"><a href="#trinkets">Trinkets</a></li>
					<li class="file"><a href="#eviltrinkets">Elemental Evil Trinkets</a></li>
				</ol>
			</li>
			</ol>
			<li>
				<label for="World-Building">World Building</label>
				<input type="checkbox" id="World-Building" />
				<ol type="i">
					<li class="file"><a href="#worldbuilding">World Building</a></li>
					<li><label for="npcbuilding">NPC Building</label>
						<input type="checkbox" id="npcbuilding" />
						<ol type="a">
							<li class="file"><a href="#npcbuilding">NPC Building</a></li>
							<li class="file"><a href="#npccharacteristics">NPC Characteristics</a></li>
							<li class="file"><a href="#npcideals">NPC Ideals</a></li>
							<li class="file"><a href="#npcbonds">NPC Bonds</a></li>
							<li class="file"><a href="#npcflaws">NPC Flaws and Secrets</a></li>
							<li class="file"><a href="#namegenerator">Name Generator</a></li>
						</ol>
					</li>
					<li><label for="building">Building Process</label>
						<input type="checkbox" id="building" />
						<ol type="a">
							<li class="file"><a href="#encounterbuilding">Building Encounters</a></li>
							<li class="file"><a href="#encounterdifficulty">Encounter Difficulty</a></li>
							<li class="file"><a href="#encounterexp">Encounter EXP</a></li>
							<li class="file"><a href="#sizecategories">Size Categories</a></li>
						</ol>
					</li>
				</ol>
			</li>
			<li>
				<label for="indexes">Book Indexes</label>
				<input type="checkbox" id="indexes" />
				<ol type="a">
					<li><label for="phb-index">Players Handbook</label>
						<input type="checkbox" id="phb-index" />
							<ol type="i">
								<li class="file"><a href="#phb-index-a">A</a></li>
								<li class="file"><a href="#phb-index-b">B</a></li>
								<li class="file"><a href="#phb-index-c">C</a></li>
								<li class="file"><a href="#phb-index-d">D</a></li>
								<li class="file"><a href="#phb-index-e">E</a></li>
								<li class="file"><a href="#phb-index-f">F</a></li>
								<li class="file"><a href="#phb-index-g">G</a></li>
								<li class="file"><a href="#phb-index-h">H</a></li>
								<li class="file"><a href="#phb-index-i">I</a></li>
								<li class="file"><a href="#phb-index-j">J</a></li>
								<li class="file"><a href="#phb-index-k">K</a></li>
								<li class="file"><a href="#phb-index-l">L</a></li>
								<li class="file"><a href="#phb-index-m">M</a></li>
								<li class="file"><a href="#phb-index-n">N</a></li>
								<li class="file"><a href="#phb-index-o">O</a></li>
								<li class="file"><a href="#phb-index-p">P</a></li>
								<li class="file"><a href="#phb-index-q">Q</a></li>
								<li class="file"><a href="#phb-index-r">R</a></li>
								<li class="file"><a href="#phb-index-s">S</a></li>
								<li class="file"><a href="#phb-index-t">T</a></li>
								<li class="file"><a href="#phb-index-u">U</a></li>
								<li class="file"><a href="#phb-index-v">V</a></li>
								<li class="file"><a href="#phb-index-w">W</a></li>
								<li class="file"><a href="#phb-index-x">X</a></li>
								<li class="file"><a href="#phb-index-y">Y</a></li>
								<li class="file"><a href="#phb-index-z">Z</a></li>
						</ol>
					</li>
				</ol>
			</li>
			<li>
				<label for="my-items">Adventuring Items</label>
				<input type="checkbox" id="my-items" />
				<ol type="i">
					<li class="file"><a href="#items">Adventuring Items</a></li>
					<li class="file"><a href="#armor">Basic Armor</a></li>
					<li class="file"><a href="#weapons">Basic Weapons</a></li>
					<li class="file"><a href="#weapon-properties">Weapon Properties</a></li>
					<li class="file"><a href="#adventuringgear">Adventuring Gear</a></li>
					<li class="file"><a href="#tools">Tools</a></li>
					<li class="file"><a href="#mounts">Mounts and Other Animals</a></li>
					<li class="file"><a href="#tack">Tack, Harness, and Drawn Vehicles</a></li>
					<li class="file"><a href="#watervehicles">Waterborne Vehicles</a></li>
				</ol>
			</li>
			<li>
				<label for="Adventure-Modules">Adventure Modules</label>
				<input type="checkbox" id="Adventure-Modules" />
				<ol type="i">
					<li><label for="Mines-of-Phandelver">Lost Mine of Phandelver</label>
						<input type="checkbox" id="Mines-of-Phandelver" />
							<ol type="a">
								<li><label for="I-Goblin-Arrows">Part 1: Goblin Arrows</label>
								<input type="checkbox" id="I-Goblin-Arrows" />

								<ol type="i">
									<li class="file"><a href="#Goblin-Arrows">Introduction</a></li>
									<li class="file"><a href="#Goblin-Ambush">Goblin Ambush</a></li>
									<li class="file"><a href="#Goblin-Trail">Goblin Trail</a></li>
									<li class="file"><a href="#Cragmaw-Hideout">Cragmaw Hideout</a></li>
								</ol>

								<li><label for="II-Phandalin">Part 2: Phandalin</label>
								<input type="checkbox" id="II-Phandalin" />

								<ol type="i">
									<li class="file"><a href="#Phandalin">Introduction</a></li>
									<li class="file"><a href="#Redbrand Hideout">Redbrand Hideout</a></li>
								</ol>

								<li><label for="III-Spidersweb">Part 3: The Spider's Web</label>
								<input type="checkbox" id="III-Spidersweb" />

								<ol type="i">
									<li class="file"><a href="#The-Spiders-Web">Introduction</a></li>
									<li class="file"><a href="#Triboar-Trail">Triboar Trail</a></li>
									<li class="file"><a href="#Old-Owl-Well">Old Owl Well</a></li>
									<li class="file"><a href="#Ruins-Of-Thundertree">Ruins of Thundertree</a></li>
									<li class="file"><a href="#Wyvern-Tor">Wyvern Tor</a></li>
									<li class="file"><a href="#Cragmaw-Castle">Cragmaw Castle</a></li>
								</ol>

								<li><label for="IV-Wave">Part 4: Wave Echo Cave</label>
								<input type="checkbox" id="IV-Wave" />

								<ol type="i">
									<li class="file"><a href="#Wave-Echo-Cave">Introduction</a></li>
									<li class="file"><a href="#IV-Wandering-Monsters">Wandering Monsters</a></li>
									<li class="file"><a href="#Wave-Echo-Cave-Entry">Wave Echo Cave</a></li>
								</ol>

							</ol>
					</li>
					<li><label for="Tyranny-of-Dragons">Tyranny of Dragons</label>
					<input type="checkbox" id="Tyranny-of-Dragons" />
						<ol type="a">
							<li><label for="hoardofthedragonqueen">Hoard of the Dragon Queen</label>
								<input type="checkbox" id="hoardofthedragonqueen" />
								<ol type="a">
									<li class="file"><a href="#greenestencounters">Episode 1: Greenest Encounters</a></li>
									<li class="file"><a href="#wanderingmonsters">Episode 3: Wandering Monsters</a></li>
									<li class="file"><a href="#hiringout">Episode 4: Hiring Out</a></li>
									<li class="file"><a href="#tradewayevents">Episode 4: Trade Way Events</a></li>
									<li class="file"><a href="#encountersnorthofwaterdeep">Episode 5: Encounters North of Waterdeep</a></li>
									<li class="file"><a href="#mereofdeadmenencounters">Episode 6: Mere of Dead Men Encounters</a></li>
								</ol>
							</li>
							<li><label for="Tiamat">The Rise of Tiamat</label>
								<input type="checkbox" id="Tiamat" />
								<ol type="a">
								<li class="file"><a href="#Rise-of-Tiamat">Coming Soon...</a></li>
								</ol>
							</li>
						</ol>
					</li>
					<li><label for="Elemental-Evil">Elemental Evil</label>
					<input type="checkbox" id="Elemental-Evil" />
						<ol type="a">
							<li><label for="PrincesofApocalypse">Princes of the Apocalypse</label>
								<input type="checkbox" id="PrincesofApocalypse" />
								<ol type="a">
									<li class="file"><a href="#Elemental-Evil">Coming Soon...</a></li>
								</ol>
							</li>
						</ol>
					</li>
				</ol>
			</li>
		</ol>
	</nav>
<a href="#toc" class="to-top">Back To Top</a>

		<h1 id="abilitychecks">
			Ability Checks
		</h1>
		<h2 id="skills">
			Skill Checks
		</h2>
		<table>
			<tr>
				<th>
					Ability Score
				</th>
				<th>
					Associated Skills
				</th>
			</tr>
			<tr>
				<td align="left">
					Strength
				</td>
				<td align="left">
					Athletics
				</td>
			</tr>
			<tr>
				<td align="left">
					Dexterity
				</td>
				<td align="left">
					Acrobatics, Sleight of Hand, Stealth
				</td>
			</tr>
			<tr>
				<td align="left">
					Constitution
				</td>
				<td align="left">
					N/A (See <a href="#constitution">Con Table</a>)
				</td>
			</tr>
			<tr>
				<td align="left">
					Intelligence
				</td>
				<td align="left">
					Arcana, History, Investigation, Nature, Religion
				</td>
			</tr>
			<tr>
				<td align="left">
					Wisdom
				</td>
				<td align="left">
					Animal Handling, Insight, Medicine, Perception, Survival
				</td>
			</tr>
			<tr>
				<td align="left">
					Charisma
				</td>
				<td align="left">
					Deception, Intimidation, Performance, Persuasion
				</td>
			</tr>
		</table>
		<h2 id="difficultyclasses">
			Difficulty Classes
		</h2>
		<table>
			<tr>
				<th>
					Task Difficulty
				</th>
				<th>
					DC
				</th>
			</tr>
			<tr>
				<td align="left">
					Trivial
				</td>
				<td align="left">
					5
				</td>
			</tr>
			<tr>
				<td align="left">
					Easy
				</td>
				<td align="left">
					10
				</td>
			</tr>
			<tr>
				<td align="left">
					Moderate
				</td>
				<td align="left">
					15
				</td>
			</tr>
			<tr>
				<td align="left">
					Hard
				</td>
				<td align="left">
					20
				</td>
			</tr>
			<tr>
				<td align="left">
					Very Hard
				</td>
				<td align="left">
					25
				</td>
			</tr>
			<tr>
				<td align="left">
					Nearly Impossible
				</td>
				<td align="left">
					30
				</td>
			</tr>
		</table>
		<h1 id="abilityscores">
			Ability Scores
		</h1>
		<table id="abilitymodifiers">
			<tr><th colspan="4"><h3 class="nobackground">Ability Modifiers</h3></th></tr>
			<tr><th>Score</th><th>Modifier</th><th>Score</th><th>Modifier</th></tr>
			<tr><td>1</td><td>-5</td><td>16-17</td><td>+3</td></tr>
			<tr><td>2-3</td><td>-4</td><td>18-19</td><td>+4</td></tr>
			<tr><td>4-5</td><td>-3</td><td>20-21</td><td>+5</td></tr>
			<tr><td>6-7</td><td>-2</td><td>22-23</td><td>+6</td></tr>
			<tr><td>8-9</td><td>-1</td><td>24-25</td><td>+7</td></tr>
			<tr><td>10-11</td><td>+0</td><td>26-27</td><td>+8</td></tr>
			<tr><td>12-13</td><td>+1</td><td>28-29</td><td>+9</td></tr>
			<tr><td>14-15</td><td>+2</td><td>30</td><td>+10</td></tr>
		</table>

		<dl>
			<dt>
				<h2 id="strength">
					Strength
				</h2>
			</dt>
			<dd>
				<i>Strength measures bodily power and athletic training.</i>
			</dd>
		</dl>
		<table>
			<tr><th id="strength">Strength</th><th align="center">Used For...</th><th align="left">Rule</th></tr>
			<tr><td align="left">Score</td><td align="left">Determines modifier</td><td align="left">Refer to <a href="#abilitymodifiers">this</a> chart</td></tr>
			<tr><td /><td align="left">Carrying Capacity</td><td align="left">Strength score times 15 in pounds²</td></tr>
			<tr><td /><td align="left">Push, Drag, or Lift</td><td align="left">Up to 2 times carrying capacity²</td></tr>
			<tr><td align="left">Modifier</td><td align="left">Determines bonus to strength related rolls</td><td align="left">Refer to <a href="#abilitymodifiers">this</a> chart</td></tr>
			<tr><td align="left">Save</td><td align="left">Opposing a force that would physically move or bind you</td><td align="left">1d20 + STR mod + Proficiency (if proficient)</td></tr>
			<tr><td align="left">Strength Check</td><td align="left">Any attempt to lift, push, pull, or break something, to force your body through a space, or to otherwise apply brute force to a situation.</td><td align="left">1d20 + STR mod</td></tr>
			<tr><td /><td align="left">Breaking Manacles</td><td align="left">DC 20 check</td></tr>
			<tr><td /><td align="left">Breaking Rope</td><td align="left">DC 17 check</td></tr>
			<tr><td>Other possible uses</td><td align="left">Force open a stuck, locked, or barred door. Push through a tunnel that is too small. Hang on to a wagon while being dragged behind it. Tip over a statue. Keep a builder from rolling.</td><td /></tr>
		</table>
		² For each size category above medium, double the creatures carrying capacity and the amount it can pull, drag, or lift. For a tiny creature, half these weights.
		<br>	² While pushing or dragging weight in excess of your carrying capacity, your speed drops to 5 feet.

		<dl><dt><h2>Strength Skills</h2></dt><dd><i>Below are all the skills associated with the Strength ability.</i></dd></dl>
		<table>
			<tr id="athletics">
				<th colspan="2">
					<center>
						<h3 class="nobackground">
							Athletics<sup>1</sup>
						</h3>
					</center>
				</th>
			</tr>
			<tr>
				<td align="left">
					Automatic
				</td>
				<td align="left">
					Climb a wall with plenty of handholds or a secure, knotted rope or rope ladder; swim in relatively calm water; jump a number of feet horizontally equal to half of your Strength score, or your full Strength score with a 10 foot running start; leap into the air a number of feet equal to half of (3 + your Strength modifier), or the full amount with a 10 foot running start <sup>2</sup>
				</td>
			</tr>
			<tr>
				<td align="left">
					Easy
				</td>
				<td align="left">
					Climb a wall lacking an adequate amount of handholds, tread water in rough conditions, jump a few feet farther than you normally could; during a long jump, clear an obstacle such as a low-lying hedge or wall of height ≤a fourth of the jump's distance
				</td>
			</tr>
			<tr>
				<td align="left">
					Moderate
				</td>
				<td align="left">
					Climb a rope dangling from a protrusion or overhang (i.e. lacking a vertical surface to brace against), swim in rough water or against a mild current
				</td>
			</tr>
			<tr>
				<td align="left">
					Hard
				</td>
				<td align="left">
					Climb a wall with very few handholds, catch yourself on a rope or other handhold in the middle or at the end of your jump, swim in violent water or against a strong current
				</td>
			</tr>
			<tr>
				<td align="left">
					Very Hard
				</td>
				<td align="left">
					Climb a slippery or sheer wall with little or no handholds, climb vertically along an overhang with adequate handholds, swim in stormy waters
				</td>
			</tr>
			<tr id="featsofstrength">
				<th colspan="2">
					<center>
						<h3 class="nobackground">
							Feats of Strength - Other
						</h3>
					</center>
				</th>
			</tr>
			<tr>
				<td align="left">
					Easy
				</td>
				<td align="left">
					Force open a stuck or broken door, break free from weak bindings, pull a stuck or wedged object loose
				</td>
			</tr>
			<tr>
				<td align="left">
					Moderate
				</td>
				<td align="left">
					Break through a wooden door reinforced with iron, hang on to a wagon while being dragged behind it
				</td>
			</tr>
			<tr>
				<td align="left">
					Hard
				</td>
				<td align="left">
					Break through a heavy locked or barred door, topple a stone statue
				</td>
			</tr>
			<tr>
				<td align="left">
					Very Hard
				</td>
				<td align="left">
					Break through a heavy, reinforced door such as a prison or armory door, hold a door shut against a room filling with water
				</td>
			</tr>
		</table>
		<p>
			<br>
			<sup>1</sup> A PC can climb and swim under normal conditions without having to make a check; however, strenuous conditions may require that they pass an Athletics check. Each foot of movement during such a check costs an extra foot of movement, or an extra 2 feet if it is considered difficult terrain. Characters with climb and swim speeds ignore the extra costs associated with movement of this type. Similarly, the horizontal and vertical distance a PC can jump without having to make a check is determined by their Strength score and modifier respectively. An Athletics check is generally only required when attempting to jump a distance farther than the amount calculate in the table above.<br>
			<sup>2</sup> During a vertical jump a PC can extend their arms in order to achieve an extra distance equal to 1⁄2 of their height, which they can effectively add to their jump distance in order to attempt to grab on to a ledge or other handhold.
		</p>

		<dl>
			<dt>
		<h2 id="dexterity">
			Dexterity
		</h2>
	</dt>
		<dd>
			<i>Dexterity measures agility, reflexes, and balance.</i>
</dd>
</dl>
        <table>
            <tr><th id="dexterity">Dexterity</th><th align="center">Used For...</th><th align="left">Rule</th></tr>
			<tr><td align="left">Score</td><td align="left">Determines modifier</td><td align="left">Refer to <a href="#abilitymodifiers">this</a> chart</td></tr>
			<tr><td align="left">Modifier</td><td align="left">Determines bonus to Dexterity related rolls</td><td align="left">Refer to <a href="#abilitymodifiers">this</a> chart</td></tr>
			<tr><td /><td align="left">Armor Class</td><td align="left">Certain types of armor add all or some of your DEX mod to your AC</td></tr>
			<tr><td /><td align="left">Initiative</td><td align="left">1d20 + DEX mod</td></tr>
			<tr><td align="left">Save</td><td align="left">Dodging out of harm's way</td><td align="left">1d20 + DEX mod + Proficiency (if proficient)</td></tr>
			<tr><td align="left">Dexterity Check</td><td align="left">Any attempt to move nimbly, quickly, or quietly, or to keep from falling on tricky footing</td><td align="left">1d20 + DEX mod</td></tr>
			<tr><td /><td align="left">Lock picking (with thieves tools)</td><td align="left">1d20 + DEX mod + Proficiency (if proficient)</td></tr>
			<tr><td>Other possible uses</td><td align="left">Control a heavily laden cart on a steep descent. Steer a chariot around a tight turn. Disable a trap. Securely tie up a prisoner. Wriggle free of bonds. Craft a small or detailed object.</td><td /></tr>
		</table>
		² Certain types of medium and heavy armor add disadvantage to this roll.

<dl><dt><h2>Dexterity Skills</h2></dt><dd><i>Below are all the skills associated with the Dexterity ability.</i></dd></dl>
		<table>
			<tr id="acrobatics">
				<th colspan="2">
					<center>
						<h3 class="nobackground">
							Acrobatics
						</h3>
					</center>
				</th>
			</tr>
			<tr>
				<td align="left">
					Easy
				</td>
				<td align="left">
					Walk across an icy surface, stay upright in a turbulent situation, land safely on difficult terrain
				</td>
			</tr>
			<tr>
				<td align="left">
					Moderate
				</td>
				<td align="left">
					Walk along a narrow ledge, swing from a chandelier and land on your feet
				</td>
			</tr>
			<tr>
				<td align="left">
					Hard
				</td>
				<td align="left">
					Cross a wildly swaying rope bridge
				</td>
			</tr>
			<tr>
				<td align="left">
					Very Hard
				</td>
				<td align="left">
					Walk across a tightrope, vault over or under an enemy (through their space)
				</td>
			</tr>
			<tr id="sleightofhand">
				<th colspan="2">
					<center>
						<h3 class="nobackground">
							Sleight of Hand
						</h3>
					</center>
				</th>
			</tr>
			<tr>
				<td align="left">
					Easy
				</td>
				<td align="left">
					Perform simple acts of legerdemain such as palming a coin-sized object
				</td>
			</tr>
			<tr>
				<td align="left">
					Contest (Perception)
				</td>
				<td align="left">
					Plant or steal an object on or from a target, conceal an object on your person
				</td>
			</tr>
			<tr id="stealth">
				<th colspan="2">
					<h3 class="nobackground">
						Stealth<sup>1</sup>
					</h3>
				</th>
			</tr>
			<tr>
				<td align="left">
					Contest (Perception)
				</td>
				<td align="left">
					Conceal yourself from enemies, sneak past unsuspecting targets, slip away while others are distracted
				</td>
			</tr>
			<tr id="picklock">
				<th colspan="2">
					<h3 class="nobackground">
						Pick Lock<sup>2</sup> - Disarm Trap<sup>2</sup> - Other
					</h3>
				</th>
			</tr>
			<tr>
				<td align="left">
					Easy
				</td>
				<td align="left">
					Pick a simple lock, jam a simple trap, perform a task requiring particularly dexterous hands <sup>3</sup>
				</td>
			</tr>
			<tr>
				<td align="left">
					Moderate
				</td>
				<td align="left">
					Pick a typical lock, escape from tight rope bindings, securely restrain a prisoner
				</td>
			</tr>
			<tr>
				<td align="left">
					Hard
				</td>
				<td align="left">
					Pick an elaborate lock, disarm a trap of average complexity, steer a chariot around a tight corner
				</td>
			</tr>
			<tr>
				<td align="left">
					Very Hard
				</td>
				<td align="left">
					Pick a masterwork lock, disarm a complex trap, escape from locked masterwork manacles
				</td>
			</tr>
		</table>
			<sup>1</sup> Generally, becoming hidden in combat requires being heavily obscured or under total cover, but ultimately the rules leave it up to your personal adjudication.<br>
			<sup>2</sup> Proficiency with Thieves' Tools allows a player to add their proficiency bonus to checks made to open locks and disarm traps.<br>
			<sup>3</sup> Such as Operation <sup>TM</sup><br>

			<dl>
				<dt>
		<h2 id="constitution">
			Constitution<sup>1</sup>
		</h2>
	</dt>
	<dd>
			<i>Constitution measures health, stamina, and vital force.</i>
		</dd>
	</dl>
	        <table>
	            <tr><th id="constitution">Constitution</th><th align="center">Used For...</th><th align="left">Rule</th></tr>
				<tr><td align="left">Score</td><td align="left">Determines constitution modifier</td><td align="left">Refer to <a href="#abilitymodifiers">this</a> chart</td></tr>
				<tr><td align="left">Modifier</td><td align="left">Determines bonus to constitution related rolls</td><td align="left">Refer to <a href="#abilitymodifiers">this</a> chart</td></tr>
				<tr><td /><td align="left">Holding your breath</td><td align="left">Survive for minutes equal to 1 + CON mod (minimum 30 seconds), then survives for rounds equal to CON mod. Next turn drops to 0 HP and is dying.</td></tr>
				<tr><td /><td align="left">Going without food</td><td align="left">Can go without enough food for days equal to 3 + CON mod. Each day past limit gain 1 level of exhaustion.</td></tr>
				<tr><td /><td align="left">Determining Hit Points</td><td align="left">CON mod added to HP at each level</td></tr>
				<tr><td /><td align="left">Using Hit Dice</td><td align="left">CON mod added to each hit dice used during short rest</td></tr>
				<tr><td align="left">Save</td><td align="left">Endures a disease, poison, or other hazard that saps vitality</td><td align="left">1d20 + CON mod + Proficiency (if proficient)</td></tr>
				<tr id="concentration"><td /><td align="left">Concentration</td><td align="left">DC equal to greater of 10 or ½ of damage taken while concentrating on a spell</td></tr>
				<tr><td /><td align="left">Going without enough water</td><td align="left">DC 15 or gain 1 level of exhaustion.</td></tr>
				<tr><td align="left">Check</td><td align="left">Very rarely used, but can be used to push yourself beyond normal limits</td><td /></tr>
				<tr><td>Other possible uses</td><td align="left">Quaff an entire stein of ale in one go.</td><td /></tr>
			</table>


	<dl><dt><h2>Constitution Skills</h2></dt><dd><i>Below are all the skills associated with the Constitution ability.</i></dd></dl>
		<table>
			<tr id="concentration">
				<th colspan="2">
					<center>
						<h3 class="nobackground">
							Concentration
						</h3>
					</center>
				</th>
			</tr>
			<tr>
				<td align="left">
					Easy
				</td>
				<td align="left">
					Distracting environmental stimuli such as a wave crashing over the deck of a storm-tossed ship
				</td>
			</tr>
			<tr>
				<td align="left">
					Variable max(10,x)
				</td>
				<td align="left">
					After taking damage make a Constitution Saving throw with a DC of either 10 or half of the damage taken, whichever is higher.
				</td>
			</tr>
			<tr id="forcedmarch">
				<th colspan="2">
					<center>
						<h3 class="nobackground">
							Forced March
						</h3>
					</center>
				</th>
			</tr>
			<tr>
				<td align="left">
					Variable DC 10+X
				</td>
				<td align="left">
					At the end of each hour a PC must make a Constitution saving throw with a DC equal to 10 + the number of hours traveled past 8. On a failed throw the PC advances one level of <a href="#exhaustion">exhaustion</a>.
				</td>
			</tr>
			<tr id="air">
				<th colspan="2">
					<center>
						<h3 class="nobackground">
							Air
						</h3>
					</center>
				</th>
			</tr>
			<tr>
				<td colspan="2">
					A PC can hold their breath for a number of minutes equal to 1 + their Constitution modifier (minimum 30 seconds). When out of breath, a PC can survive for a number of rounds equal to their Constitution modifier before they drop to 0 hit points and begin to die.
				</td>
			</tr>
			<tr id="food">
				<th colspan="2">
					<center>
						<h3 class="nobackground">
							Food
						</h3>
					</center>
				</th>
			</tr>
			<tr>
				<td colspan="2">
					A PC must eat one pound of food per day in order to subsist. They can go without food for a number of days equal to 3 + their Constitution modifier (minimum 1) before they begin to starve. This day count is reset when the PC eats their fill for a day; otherwise, the PC advances one level of <a href="#exhaustion">exhaustion</a> at the end of each day beyond their limit.
				</td>
			</tr>
			<tr id="water">
				<th colspan="2">
					<center>
						<h3 class="nobackground">
							Water
						</h3>
					</center>
				</th>
			</tr>
			<tr>
				<td align="left">
					Automatic
				</td>
				<td align="left">
					A PC drinking less than half the amount of water they require during the day advances one level of <a href="#exhaustion">exhaustion</a> at the end of the day, or two levels if they are already suffering from <a href="#exhaustion">exhaustion</a>.
				</td>
			</tr>
			<tr>
				<td align="left">
					Moderate
				</td>
				<td align="left">
					A PC drinking more than half the amount of water they require during the day but less than the full amount must succeed on a Constitution saving throw or advance one level of <a href="#exhaustion">exhaustion</a>, or two levels if they are already suffering from <a href="#exhaustion">exhaustion</a>.
				</td>
			</tr>
		</table>
				<sup>1</sup> Constitution represents a largely passive set of 'skills' which have more to do with enduring than performing a specific action the PC can become proficient in. Therefore, Constitution checks are more uncommon than other ability checks and are usually made without adding a proficiency bonus, although situational bonuses may still apply. NOTE: An ability check is different from a saving throw; players can be proficient at Constitution saving throws.<br>
				<sup>2</sup> A PC can only travel for eight hours a day before they risk becoming exhausted.<br>
				<sup>3</sup> A PC requires one gallon of water per day, or two if the climate is harsh.
				<br>

				<dl>
					<dt>
				<h2 id="intelligence">
					Intelligence
				</h2>
			</dt>
				<dd><i>Intelligence measures mental acuity, accuracy of recall, and the ability to reason.</i></dd>
			</dl>
			        <table>
			            <tr><th id="intelligence">Intelligence</th><th align="center">Used For...</th><th align="left">Rule</th></tr>
						<tr><td align="left">Score</td><td align="left">Determines modifier</td><td align="left">Refer to <a href="#abilitymodifiers">this</a> chart</td></tr>
						<tr><td align="left">Modifier</td><td align="left">Determines bonus to intelligence related rolls</td><td align="left">Refer to <a href="#abilitymodifiers">this</a> chart</td></tr>
						<tr><td align="left">Save</td><td align="left">Disbelieving certain illusions and resisting mental assaults that can be refuted with logic, sharp memory, or both</td><td align="left">1d20 + Ability mod + Proficiency (if proficient)</td></tr>
						<tr><td align="left">Check</td><td align="left">Drawing on logic, education, memory, or deductive reasoning</td><td align="left">1d20 + INT mod</td></tr>
						<tr><td>Other possible uses</td><td align="left">Communicate with a creature without words. Estimate the value of a precious item. Forge a document. Recall lore about a craft or trade. Win a game of skill.</td><td /></tr>
					</table>

				<dl><dt><h2>Intelligence Skills</h2></dt><dd><i>Below are all the skills associated with the Intelligence ability.</i></dd></dl>
				<table>
					<tr id="arcana">
						<th colspan="2">
							<center>
								<h3 class="nobackground">
									Arcana - History - Nature - Religion
								</h3>
							</center>
						</th>
					</tr>
					<tr>
						<td align="left">
							Easy
						</td>
						<td align="left">
							Recall widely known information; identify common people, places, objects, symbols, fauna, or flora
						</td>
					</tr>
					<tr>
						<td align="left">
							Moderate
						</td>
						<td align="left">
							Recall more obscure or specific information; identify uncommon people, places, objects, symbols, fauna, or flora
						</td>
					</tr>
					<tr>
						<td align="left">
							Hard
						</td>
						<td align="left">
							Recall truly esoteric or precise information; identify rare people, places, objects, symbols, fauna, or flora
						</td>
					</tr>
					<tr>
						<td align="left">
							Very Hard
						</td>
						<td align="left">
							Recall information that is known only by a privileged few; identify exceedingly rare people, places, objects, symbols, fauna, or flora
						</td>
					</tr>
					<tr id="investigation">
						<th colspan="2">
							<center>
								<h3 class="nobackground">
									Investigation - Other
								</h3>
							</center>
						</th>
					</tr>
					<tr>
						<td align="left">
							Easy
						</td>
						<td align="left">
							Identify a particularly obvious trap or a secret or coded message left by a contact, communicate a simple idea with an intelligent creature you don't share a language with, discover the true nature of a low-level illusion.
						</td>
					</tr>
					<tr>
						<td align="left">
							Moderate
						</td>
						<td align="left">
							Identify a typical trap, determine time or cause of death of a recently deceased creature, estimate the material worth of an item, discover the true nature of a mid-level illusion
						</td>
					</tr>
					<tr>
						<td align="left">
							Hard
						</td>
						<td align="left">
							Identify a well-hidden trap, object, or area; forge a document or identify such a document, discover the true nature of a high-level illusion
						</td>
					</tr>
					<tr>
						<td align="left">
							Very Hard
						</td>
						<td align="left">
							Identify a magically-hidden trap, object, or area; discern the purpose and process of a complicated device or system; determine the integrity of a structure, construct, or formation and identify any exploitable weak points
						</td>
					</tr>
				</table><br>

				<dl>
					<dt>
				<h2 id="wisdom">
					Wisdom
				</h2>
					</dt>
					<dd><i>Wisdom measures perceptiveness, intuition, and attunement with the surrounding world.</i>
					</dd>
				</dl>
				        <table>
				            <tr><th id="wisdom">Wisdom</th><th align="center">Used For...</th><th align="left" width="40%">Rule</th></tr>
							<tr><td align="left">Score</td><td align="left">Determines modifier</td><td align="left">Refer to <a href="#abilitymodifiers">this</a> chart</td></tr>
							<tr><td align="left">Modifier</td><td align="left">Determines bonus to wisdom related rolls</td><td align="left">Refer to <a href="#abilitymodifiers">this</a> chart</td></tr>
							<tr><td align="left">Save</td><td align="left">Resisting effects that charm, frighten, or otherwise assault your willpower</td><td align="left">1d20 + WIS mod + Proficiency (if proficient)</td></tr>
							<tr><td align="left">Check</td><td align="left">Reading body language, understanding someone's feelings, noticing things about the environment, or caring for an injured person</td><td align="left">1d20 + WIS mod</td></tr>
							<tr><td>Other possible uses</td><td align="left">Get a gut feeling about what course of action to follow. Discern whether a seemingly dead or living creature is undead.</td><td /></tr>
						</table>

				<dl><dt><h2>Wisdom Skills</h2></dt><dd><i>Below are all the skills associated with the Wisdom ability.</i></dd></dl>
				<table>
					<tr id="insight">
						<th colspan="2">
							<center>
								<h3 class="nobackground">
									Insight - Perception
								</h3>
							</center>
						</th>
					</tr>
					<tr>
						<td align="left">
							Easy
						</td>
						<td align="left">
							Spot a prominent landmark or structure in the distance, hear the far-off sound of thunder signaling a coming storm, determine if a child is telling the truth
						</td>
					</tr>
					<tr>
						<td align="left">
							Moderate
						</td>
						<td align="left">
							Spot a natural-obscured object or feature, eavesdrop on a conversation in the next room, discern who among a cagey group is the leader, discern the intended message of a non-verbal communication
						</td>
					</tr>
					<tr>
						<td align="left">
							Hard
						</td>
						<td align="left">
							Spot a well-hidden object or feature, eavesdrop on a hushed conversation through a heavy door, guess at the enemy's next action
						</td>
					</tr>
					<tr>
						<td align="left">
							Very Hard
						</td>
						<td align="left">
							Spot a nearly-invisible object or feature, read the lips of a creature you can see but not hear
						</td>
					</tr>
					<tr>
						<td align="left">
							Contest (Deception)
						</td>
						<td align="left">
							Determine if someone is lying or disguising themselves or their intentions
						</td>
					</tr>
					<tr>
						<td align="left">
							Contest (Stealth)
						</td>
						<td align="left">
							Spot a creature attempting to hide, hear the movements of a hidden foe
						</td>
					</tr>
					<tr id="survival">
						<th colspan="2">
							<center>
								<h3 class="nobackground">
									Survival
								</h3>
							</center>
						</th>
					</tr>
					<tr>
						<td align="left">
							Easy
						</td>
						<td align="left">
							Follow a well-worn trail through a forest, follow the tracks of a creature through snow or mud, forage for a day's worth of food in a plentiful area, navigate on a clear night
						</td>
					</tr>
					<tr>
						<td align="left">
							Moderate
						</td>
						<td align="left">
							Follow an abandoned or forgotten trail, track a creature through a forest, forage for a day's worth of food in a sparse area, navigate on a cloudy night, predict an oncoming storm, identify the signs of nearby creatures
						</td>
					</tr>
					<tr>
						<td align="left">
							Hard
						</td>
						<td align="left">
							Track a creature over barren terrain, forage for a day's worth of food in a harsh area, navigate through an alien area on a cloudy night, predict tomorrow's weather
						</td>
					</tr>
					<tr>
						<td align="left">
							Very Hard
						</td>
						<td align="left">
							Track a creature after rainfall, navigate an alien area on a stormy night
						</td>
					</tr>
					<tr id="animalhandling">
						<th colspan="2">
							<center>
								<h3 class="nobackground">
									Animal Handling - Medicine - Other
								</h3>
							</center>
						</th>
					</tr>
					<tr>
						<td align="left">
							Easy
						</td>
						<td align="left">
							Calm a domesticated animal, stabilize a dying creature outside of combat, diagnose a common ailment
						</td>
					</tr>
					<tr>
						<td align="left">
							Moderate
						</td>
						<td align="left">
							Calm a wild but otherwise peaceful animal, intuit an animal's emotional state, set a broken bone, perform a complex maneuver while mounted, stabilize a dying creature in the middle of combat, diagnose an uncommon ailment
						</td>
					</tr>
					<tr>
						<td align="left">
							Hard
						</td>
						<td align="left">
							Intuit a hostile animal's next action, control an untrained mount, diagnose a rare ailment
						</td>
					</tr>
					<tr>
						<td align="left">
							Very Hard
						</td>
						<td align="left">
							Calm a dangerous wild animal, diagnose magical and divine ailments
						</td>
					</tr>
				</table><br>

				<dl>
					<dt>
				<h2 id="charisma">
					Charisma
				</h2>
					</dt>
					<dd><i>Charisma measures force of personality, persuasiveness, personal magnetism, social influence, and physical attractiveness.</i></dd>
				</dl>
				        <table>
				            <tr><th id="charisma">Charisma</th><th align="center">Used For...</th><th align="left">Rule</th></tr>
							<tr><td align="left">Score</td><td align="left">Determines modifier</td><td align="left">Refer to <a href="#abilitymodifiers">this</a> chart</td></tr>
							<tr><td align="left">Modifier</td><td align="left">Determines bonus to charisma related rolls</td><td align="left">Refer to <a href="#abilitymodifiers">this</a> chart</td></tr>
							<tr><td align="left">Save</td><td align="left">Withstanding effects, such as possession, that would subsume your personality or hurl you to another plane of existence</td><td align="left">1d20 + WIS mod + Proficiency (if proficient)</td></tr>
							<tr><td align="left">Check</td><td align="left">Trying to influence or entertain others, when you try to make an impression or tell a convincing lie, or when you are navigating a tricky social situation</td><td align="left">1d20 + Ability mod</td></tr>
							<tr><td>Other possible uses</td><td align="left">Find the best person to talk to for news and gossip. Blend into a crowd to get the sense of key topics of conversation.</td><td /></tr>
						</table>

				<dl><dt><h2>Charisma Skills</h2></dt><dd><i>Below are all the skills associated with the Charisma ability.</i></dd></dl>
				<table>
					<tr id="deception">
						<th colspan="2">
							<center>
								<h3 class="nobackground">
									Deception
								</h3>
							</center>
						</th>
					</tr>
					<tr>
						<td align="left">
							Contest (Insight)
						</td>
						<td align="left">
							Fast-talk or con someone, adopt a disguise or impersonate another creature, tell a convincing lie or otherwise hide your true intentions
						</td>
					</tr>
					<tr id="intimidation">
						<th colspan="2">
							<center>
								<h3 class="nobackground">
									Intimidation
								</h3>
							</center>
						</th>
					</tr>
					<tr>
						<td align="left">
							Easy
						</td>
						<td align="left">
							Scare a spineless noble in to handing over their coin purse
						</td>
					</tr>
					<tr>
						<td align="left">
							Moderate
						</td>
						<td align="left">
							Pry information out of an uncooperative prisoner, convince street thugs to back down from a confrontation
						</td>
					</tr>
					<tr>
						<td align="left">
							Hard
						</td>
						<td align="left">
							Advise a guard that it might be best to look the other way this time around, coerce an official in to signing a document
						</td>
					</tr>
					<tr>
						<td align="left">
							Very Hard
						</td>
						<td align="left">
							Frighten a creature larger than you, causing it to flee; stop an agitated mob in their tracks
						</td>
					</tr>
					<tr id="performance">
						<th colspan="2">
							<center>
							<h3 class="nobackground">
								Performance
							</h3>
							</center>
						</th>
					</tr>
					<tr>
						<td align="left">
							Easy
						</td>
						<td align="left">
							Routine performance such as telling a story in a tavern or around a campfire
						</td>
					</tr>
					<tr>
						<td align="left">
							Moderate
						</td>
						<td align="left">
							Professional performance such as an inspiring speech or an impressive musical display which may attract the attention of a local troupe and lead to regional fame
						</td>
					</tr>
					<tr>
						<td align="left">
							Hard
						</td>
						<td align="left">
							Memorable performance which may attract the attention of a local patron and lead to national fame
						</td>
					</tr>
					<tr>
						<td align="left">
							Very Hard
						</td>
						<td align="left">
							Extraordinary performance which may attract the attention of distant patrons and even extraplanar beings
						</td>
					</tr>
					<tr id="persuasion">
						<th colspan="2">
							<center>
								<h3 class="nobackground">
									Persuasion
								</h3>
							</center>
						</th>
					</tr>
					<tr>
						<td align="left">
							Easy
						</td>
						<td align="left">
							Convince the mayor to allow your party to help, calm a distraught person
						</td>
					</tr>
					<tr>
						<td align="left">
							Moderate
						</td>
						<td align="left">
							Persuade a group of highway thieves to leave in peace, convince a friendly acquaintance that you know best
						</td>
					</tr>
					<tr>
						<td align="left">
							Hard
						</td>
						<td align="left">
							Convince a chamberlain to let your party see the king, inspire or rally a crown of townsfolk, negotiate a peace between warring tribes
						</td>
					</tr>
					<tr>
						<td align="left">
							Very Hard
						</td>
						<td align="left">
							Convince a sphinx that you are worthy of the secrets it guards, assure a dragon you're worth more alive than dead
						</td>
					</tr>
				</table><br>

				<h1 id="combat">
					Combat
				</h1><br />

				<table id="conditions">
					<tr>
						<th colspan="2">
						<h3 class="nobackground">
							Conditions
						</h3>
						</th>
					</tr>
					<tr>
						<th>
							Condition
						</th>
						<th>
							Description
						</th>
					</tr>
					<tr>
						<td id="blinded">
							Blinded
						</td>
						<td align="left">
							<ul>
								<li>A blinded creature can't see and automatically fails any ability check that requires sight.
								</li>
								<li>Attack rolls against the creature have advantage, and the creature's attack rolls have disadvantage.
								</li>
							</ul>
						</td>
					</tr>
					<tr>
						<td id="charmed">
							Charmed
						</td>
						<td align="left">
							<ul>
								<li>A charmed creature can't attack the charmer or target the charmer with harmful abilities or magical effects
								</li>
								<li>The charmer has advantage on any ability check to interact socially with the creature.
								</li>
							</ul>
						</td>
					</tr>
					<tr>
						<td id="deafened">
							Deafened
						</td>
						<td align="left" text="">
							<ul>
								<li>A deafened creature can't hear and automatically fails any ability check that requires hearing.
								</li>
							</ul>
						</td>
					</tr>
					<tr>
						<td id="frightened">
							Frightened
						</td>
						<td align="left" text="">
							<ul>
								<li>A frightened creature has disadvantage on ability checks and attack rolls while the source of its fear is within line of sight.
								</li>
								<li>The creature can't willingly move closer to the source of its fear.
								</li>
							</ul>
						</td>
					</tr>
					<tr>
						<td id="grappled">
							Grappled
						</td>
						<td align="left" text="">
							<ul>
								<li>A grappled creature's speed becomes 0, and it can't benefit from any bonus to its speed.
								</li>
								<li>The condition ends if the grappler is <a href="#incapacitated">incapacitated</a>.
								</li>
								<li>The condition also ends if an effect removes the grappled creature from the reach of the grappler or grappling effect, such as when a creature is hurled away by the thunderwave spell.
								</li>
							</ul>
						</td>
					</tr>
					<tr>
						<td id="incapacitated">
							Incapacitated
						</td>
						<td align="left" text="">
							<ul>
								<li>An incapacitated creature can't take actions or reactions.
								</li>
							</ul>
						</td>
					</tr>
					<tr>
						<td id="invisible">
							Invisible
						</td>
						<td align="left" text="">
							<ul>
								<li>An invisible creature is impossible to see without the aid of magic or a special sense. For the purpose of hiding, the creature is heavily obscured. The creature's location can be detected by any noise it makes or any tracks it leaves.
								</li>
								<li>Attack rolls against the creature have disadvantage, and the creature's attack rolls have advantage.
								</li>
							</ul>
						</td>
					</tr>
					<tr>
						<td id="paralyzed">
							Paralyzed
						</td>
						<td align="left" text="">
							<ul>
								<li>A paralyzed creature is <a href="#incapacitated">incapacitated</a> and can't move or speak.
								</li>
								<li>The creature automatically fails Strength and Dexterity saving throws.
								</li>
								<li>Attack rolls against the creature have advantage.
								</li>
								<li>Any attack that hits the creature is a critical hit if the attacker is within 5 feet of the creature.
								</li>
							</ul>
						</td>
					</tr>
					<tr>
						<td id="petrified">
							Petrified
						</td>
						<td align="left" text="">
							<ul>
								<li>A petrified creature is transformed, along with an nonmagical object it is wearing or carrying, into a solid inanimate substance (usually stone). Its weight increases by a factor of ten, and it ceases aging.
								</li>
								<li>The creature is <a href="#incapacitated">incapacitated</a>, can't move or speak, and is unaware of its surroundings.
								</li>
								<li>Attack rolls against the creature have advantage.
								</li>
								<li>The creature automatically fails Strength and Dexterity saving throws.
								</li>
								<li>The creature has resistance to all damage.
								</li>
								<li>The creature is immune to poison and disease, although a poison or disease already in its system is suspended, not neutralized.
								</li>
							</ul>
						</td>
					</tr>
					<tr>
						<td id="poisoned">
							Poisoned
						</td>
						<td align="left" text="">
							<ul>
								<li>A poisoned creature has disadvantage on attack rolls and ability checks.
								</li>
							</ul>
						</td>
					</tr>
					<tr>
						<td id="prone">
							Prone
						</td>
						<td align="left" text="">
							<ul>
								<li>A prone creature's only movement option is to crawl, unless it stands up and thereby ends the condition.
								</li>
								<li>The creature has disadvantage on attack rolls.
								</li>
								<li>An attack roll against the creature has advantage if the attacker is within 5 feet of the creature. Otherwise, the attack roll has disadvantage.
								</li>
							</ul>
						</td>
					</tr>
					<tr>
						<td id="restrained">
							Restrained
						</td>
						<td align="left" text="">
							<ul>
								<li>A restrained creature's speed becomes 0, and it can't benefit from any bonus to its speed.
								</li>
								<li>Attack rolls against the creature have advantage, and the creature's attack rolls have disadvantage.
								</li>
								<li>The creature has disadvantage on Dexterity saving throws.
								</li>
							</ul>
						</td>
					</tr>
					<tr>
						<td id="stunned">
							Stunned
						</td>
						<td align="left" text="">
							<ul>
								<li>A stunned creature is <a href="#incapacitated">incapacitated</a>, can't move, and can speak only falteringly.
								</li>
								<li>The creature automatically fails Strength and Dexterity saving throws.
								</li>
								<li>Attack rolls against the creature have advantage.
								</li>
							</ul>
						</td>
					</tr>
					<tr>
						<td id="unconscious">
							Unconscious
						</td>
						<td align="left" text="">
							<ul>
								<li>An unconscious creature is <a href="#incapacitated">incapacitated</a>, can't move or speak, and is unaware of its surroundings.
								</li>
								<li>The creature drops whatever it's holding and falls prone.
								</li>
								<li>The creature automatically fails Strength and Dexterity saving throws.
								</li>
								<li>Attack rolls against the creature have advantage.
								</li>
								<li>Any attack that hits the creature is a critical hit if the attacker is within 5 feet of the creature.
								</li>
							</ul>
						</td>
					</tr>
				</table><br>


				<table id="exhaustion">
					<th colspan="2">
						<h3 class="nobackground">
							Exhaustion
						</h3>
					</th>
					<tr>
						<th>
							Level
						</th>
						<th align="left">
							Effect
						</th>
					</tr>
					<tr>
						<td align="left">
							1
						</td>
						<td align="left">
							Disadvantage on ability checks.
						</td>
					</tr>
					<tr>
						<td align="left">
							2
						</td>
						<td align="left">
							Speed halved
						</td>
					</tr>
					<tr>
						<td align="left">
							3
						</td>
						<td align="left">
							Disadvantage on attack rolls and saving throws
						</td>
					</tr>
					<tr>
						<td align="left">
							4
						</td>
						<td align="left">
							Hit point maximum halved
						</td>
					</tr>
					<tr>
						<td align="left">
							5
						</td>
						<td align="left">
							Speed reduced to 0
						</td>
					</tr>
					<tr>
						<td align="left">
							6
						</td>
						<td align="left">
							Death
						</td>
					</tr>
				</table>

				<br /><br />

				<table>
					<th colspan="2">
						<h3 class="nobackground">
							Suffering Exhaustion
						</h3>
					</th>
					<tr>
						<th align="left">
							Cause
						</th>
						<th align="left">
							Details
						</th>
					</tr>
					<tr>
						<td align="left">
							Forced March
						</td>
						<td align="left">
							For each hour spent traveling past 8 hours make a CON save at DC 10 + 1 for each hour past 8. On a failed save, a character suffers 1 level of exhaustion.
						</td>
					</tr>
					<tr>
						<td align="left">
							Starvation
						</td>
						<td align="left">
							If a creature doesn't eat enough food in a day, they start to starve. Food can be stretched out by eating half as much per day, which counts as half a day without food. A character can go without food for a number of days equal to 3 + CON mod, and then at the end of each day beyond that a character automatically suffers 1 level of exhaustion. A normal day of eating reduces the days without food to 0.
						</td>
					</tr>
					<tr>
						<td align="left">
							Dehydration
						</td>
						<td align="left">
							A creature who drinks less than half as much water than they need in a day must succeed on a DC 15 CON save or suffer 1 level of exhaustion. A character with access to even less water automatically suffers 1 level of exhaustion at the end of the day. If a character already has any levels of exhaustion, they gain 2 levels in either case.
						</td>
					</tr>
					<tr>
						<td align="left">
							Barbarian's Frenzy
						</td>
						<td align="left">
							A Barbarian who goes down the Path of the Berserker can choose to enter a frenzy if he is raging. When the rage ends, he suffers a level of exhaustion.
						</td>
					</tr>
				</table><br>
				<b>Reducing Levels of Exhaustion</b><br>
				At the end of a long rest, provided a character has had enough food and water that day, they reduce their level of exhaustion by 1.<br>

				<br />

				<table id="damagetypes">
					<tr>
						<th colspan="2">
							<h3 class="nobackground">
								Damage Types
							</h3>
						</th>
					</tr>
					<tr>
						<th>
							Type
						</th>
						<th>
							Description
						</th>
					</tr>
					<tr>
						<td align="left">
							Acid
						</td>
						<td align="left">
							Corrosive substances, magical or alchemical
						</td>
					</tr>
					<tr>
						<td align="left">
							Bludgeoning
						</td>
						<td align="left">
							Blunt force hits (hammer, falling, etc.)
						</td>
					</tr>
					<tr>
						<td align="left">
							Cold
						</td>
						<td align="left">
							Extreme low temperature and magic attacks
						</td>
					</tr>
					<tr>
						<td align="left">
							Fire
						</td>
						<td align="left">
							Fire breaths and fire based spells and magic
						</td>
					</tr>
					<tr>
						<td align="left">
							Force
						</td>
						<td align="left">
							Pure magical energy focused in damaging form
						</td>
					</tr>
					<tr>
						<td align="left">
							Lightning
						</td>
						<td align="left">
							lightning bolt, or electricity spells.
						</td>
					</tr>
					<tr>
						<td align="left">
							Necrotic
						</td>
						<td align="left">
							Dealt by certain undead and corrupted magic
						</td>
					</tr>
					<tr>
						<td align="left">
							Piercing
						</td>
						<td align="left">
							Puncturing and impaling attacks and weapon
						</td>
					</tr>
					<tr>
						<td align="left">
							Poison
						</td>
						<td align="left">
							Venomous stings, spores, substances and gases
						</td>
					</tr>
					<tr>
						<td align="left">
							Psychic
						</td>
						<td align="left">
							Mental attacks and damage like psionic abilities
						</td>
					</tr>
					<tr>
						<td align="left">
							Radiant
						</td>
						<td align="left">
							Holy damage, like divine spells or creatures
						</td>
					</tr>
					<tr>
						<td align="left">
							Slashing
						</td>
						<td align="left">
							Swords, axes, and monster claws that slash
						</td>
					</tr>
					<tr>
						<td align="left">
							Thunder
						</td>
						<td align="left">
							Concussive burst of sound or shock wave
						</td>
					</tr>
				</table>
				<br />
				<table id="damageseverity">
					<tr>
						<th colspan="4">
							<h3 class="nobackground">Damage Severity and Level</h3>
						</th>
					</tr>
					<tr>
						<th align="center">
							Character Level
						</th>
						<th>
							Setback
						</th>
						<th>
							Dangerous
						</th>
						<th>
							Deadly
						</th>
					</tr>
					<tr>
						<td align="center">
							1st-4th
						</td>
						<td align="left">
							1d10
						</td>
						<td align="left">
							2d10
						</td>
						<td align="left">
							4d10
						</td>

					</tr>
					<tr>
						<td align="center">
							5th-10th
						</td>
						<td align="left">
							2d10
						</td>
						<td align="left">
							4d10
						</td>
						<td align="left">
							10d10
						</td>
					</tr>
					<tr>
						<td align="center">
							11th-16th
						</td>
						<td align="left">
							4d10
						</td>
						<td align="left">
							10d10
						</td>
						<td align="left">
							18d10
						</td>
					</tr>
					<tr>
						<td align="center">
							17th-20th
						</td>
						<td align="left">
							10d10
						</td>
						<td align="left">
							18d10
						</td>
						<td align="left">
							24d10
						</td>
					</tr>
				</table>
				<br /><br />

				<table id="cover">
					<th colspan="2">
						<h3 class="nobackground">
							Cover
						</h3>
					</th>
					<tr>
						<th width="20%" align="left">
							Cover Type
						</th>
						<th>
							Effect
						</th>
					</tr>
					<tr>
						<td align="left">
							1/2 cover
						</td>
						<td align="left">
							+2 bonus to AC and Dexterity saving throws against attacks and effects that originate on the opposite side of the cover.
						</td>
					</tr>
					<tr>
						<td align="left">
							3/4 cover
						</td>
						<td align="left">
							+5 bonus to AC and Dexterity saving throws against attacks and effects that originate on the opposite side of the cover.
						</td>
					</tr>
					<tr>
						<td align="left">
							Full cover
						</td>
						<td align="left">
							Can't be targeted by an attack or a spell.
						</td>
					</tr>
				</table>
				<br /><br />
				<table id="combatactions">
					<th colspan="2">
						<h3 class="nobackground">
							Actions In Combat
						</h3>
					</th>
					<tr>
						<th>
							Action
						</th>
						<th>
							Description
						</th>
					</tr>
					<tr>
						<td id="attackaction" align="left">
							Attack
						</td>
						<td align="left">
							Make one¹ melee or ranged attack, a grapple, or a shove.
						</td>
					</tr>
					<tr>
						<td align="left">
							Cast a Spell
						</td>
						<td align="left">
							Casts a spell with a casting time of 1 action.
						</td>
					</tr>
					<tr>
						<td align="left">
							Dash
						</td>
						<td align="left">
							Gain extra movement equal to your speed for this turn, applying any modifiers.
						</td>
					</tr>
					<tr>
						<td align="left">
							Disengage
						</td>
						<td align="left">
							Your movement doesn't provoke opportunity attacks for the rest of the turn.
						</td>
					</tr>
					<tr>
						<td align="left">
							Dodge
						</td>
						<td align="left">
							Until the start of your next turn, any attacks against you are made with disadvantage provided you can see the attacker, and you have advantage on DEX saves. You lose this benefit if you are <a href="#incapacitated">incapacitated</a> or your speed drops to 0.
						</td>
					</tr>
					<tr>
						<td align="left">
							Help
						</td>
						<td align="left">
							Creature you help gains advantage on next ability check to perform the task you are assisting with, or help with attack roll if enemy is within 5 feet of you.
						</td>
					</tr>
					<tr>
						<td align="left">
							Hide
						</td>
						<td align="left">
							You make a <a href="#stealth">stealth</a> check. Details <a href="#stealthrules">here</a>.
						</td>
					</tr>
					<tr>
						<td align="left">
							Ready
						</td>
						<td align="left">
							Prepare to do something when a specific trigger occurs. Details <a href="#readying">here</a>.
						</td>
					</tr>
					<tr>
						<td align="left">
							Search
						</td>
						<td align="left">
							Make either a perception or investigation check in an attempt to locate something.
						</td>
					</tr>
					<tr>
						<td align="left">
							Use an Object
						</td>
						<td align="left">
							Interacting with a second object on your turn (the first is free), or a more complicated object.
						</td>
					</tr>
					<tr>
						<td align="left">
							Climb onto a Bigger Creature²
						</td>
						<td align="left">
							Athletics or Acrobatics check opposed by creature's Acrobatics check. Details <a href="#climbingontobiggercreatures">here</a>.
						</td>
					</tr>
					<tr>
						<td align="left">
							Disarm²
						</td>
						<td align="left">
							Use an attack to make attack roll opposed by target's Athletics or Acrobatics check. Target has advantage if holding the item with 2 or more hands.
						</td>
					</tr>
					<tr>
						<td align="left">
							Mark²
						</td>
						<td align="left">
							When you make a melee attack and hit, you can mark them. Your opportunity attacks against the creature have advantage and don't expend your reaction, however you may only make 1 attack in this manner.
						</td>
					</tr>
					<tr>
						<td align="left">
							Overrun²
						</td>
						<td align="left">
							As an action or bonus action make Athletics check opposed by hostile's Athletics. If you win, you can move through the hostile's space once this turn.
						</td>
					</tr>
					<tr>
						<td align="left">
							Shove aside²
						</td>
						<td align="left">
							Use shove to push target to the side rather than away. Details <a href="#shove">here</a>.
						</td>
					</tr>
					<tr>
						<td align="left">
							Tumble²
						</td>
						<td align="left">
							As an action or bonus action make Acrobatics check opposed by hostile's Acrobatics. If you win, you can move through the hostile's space once this turn.
						</td>
					</tr>
				</table>¹ Certain features allow you to make more than one attack, grapple, or shove with this action.<br>
				² These actions are optional and can be found on pages 271-272 of the DMG.<br>

				<h1 id="stealthrules">
					The Rules of Stealth
				</h1>When attempting to hide, there are 4 simple rules to remember. <br />
				<ol>
					<li>1) If someone can see you, you can't attempt to hide from them.
					</li>
					<li>2) Someone doesn't see you when they're not looking at you.
					</li>
					<li>3) Once hidden, you can be detected via sight, hearing, or both, so don't be seen or heard. If their perception check or passive perception is higher than your stealth roll, they detect you.
					</li>
					<li>4)You can hide in plain sight, given a moment of being unseen or unattended and an appropriate concealment strategy
					</li>
				</ol>
				If you are hidden, or when someone can't see you, you have advantage on attack rolls against them, and they have disadvantage on attack rolls against you. If you make an attack while hidden, regardless of whether it hits or misses, you are no longer hidden.<br>

				<h1 id="grapplingshovingclimbing">
					Grappling, Shoving, and Climbing onto Bigger Creatures
				</h1>When you take the <a href="#attackaction">attack action</a> you can use one attack to grapple, shove, or climb onto an enemy.<br>
				<dl>
					<dt >
						<b id="grappling">Grappling</b>
					</dt>
					<dd>
						You can grab a creature which is no more than one size category higher than you. Using at least one free hand, you make an Athletics check contested by the target's Athletics or Acrobatics check. If you succeed, the target is now <a href="#grappled">grappled</a> by you. You can also grapple an enemy to climb on top of it.
					</dd>
					<dt>
						<b>Escaping a grapple.</b>
					</dt>
					<dd>
						While grappled, a creature can use its action to make an Athletics or Acrobatics check opposed by your Athletics check. If the creature succeeds, it moves to a space next to you.
					</dd>
					<dt>
						<b>Moving a grappled creature.</b>
					</dt>
					<dd>
						When you move, you can drag or carry the grappled creature with you, but your speed is halved, unless the creature is two or more sizes smaller than you.
					</dd>
					<dt>
						<b id="shoving">Shoving</b>
					</dt>
					<dd>
						Using the attack action, you can attempt to shove a creature no more than one size larger than you. You make an Athletics check opposed by its Athletics or Acrobatics check. If you succeed you either move it 5 feet in any direction or knock it <a href="#prone">prone</a>.
					</dd>
					<dt>
						<b id="climbingontobiggercreatures">Climbing onto Bigger Creatures</b>
					</dt>
					<dd>
						A suitably large creature can be treated as terrain for the purpose of jumping onto its back or clinging to a limb. Once you make any ability checks necessary to get into position and to get onto the bigger creature, the smaller creature uses its action to make an Athletics or Acrobatics check contested by the targets Acrobatics check. If it wins the contest, the smaller creature successfully moves into the target creature's space and clings to his body. While in the target's space, the smaller creature moves with the target and has advantage on attack rolls against it.<br>
						&nbsp;&nbsp;&nbsp;&nbsp;The smaller creature can move around within the larger creature's space, treating the space as difficult terrain. The larger creature may or may not be able to attack the smaller creature, depending on the smaller creature's location, this is up to the DM. The larger creature can try to dislodge the creature as an action - shaking it off, scraping it against a wall, grabbing and throwing it off - by making an Athletics check opposed by the smaller creature's Athletics or Acrobatics check.
					</dd>
				</dl>
				<h1 id="readying">
					Readying an Action
				</h1>&nbsp;&nbsp;&nbsp;&nbsp;As an action on your turn, you can take the Ready action so that you may act later in the round using your reaction. To do this, you need to clearly define 2 things.<br>
				&nbsp;&nbsp;&nbsp;&nbsp;First, you must decide what circumstances will trigger your prepared action. For example, you could say that the trigger is "A hostile creature comes through the door in front of me".<br>
				&nbsp;&nbsp;&nbsp;&nbsp;Second, you must decide what you will do if the triggering event happens. You may take an <a href="#combatactions">action</a> such as the <a href="#attackaction">attack action</a> or you may move up to your speed. For example, you could say "I will attack with my greatsword".<br>
				&nbsp;&nbsp;&nbsp;&nbsp;When you put both the trigger and the action together you get a coherent sentence. The example is "If a hostile creature comes through the door in front of me, I will attack with my greatsword".<br>
				&nbsp;&nbsp;&nbsp;&nbsp;<b>Readying A Spell.</b> When you ready a spell, you cast it as normal but hold its energy, which you then release with your reaction. To be readied a spell must have a casting time of 1 action, and holding onto the spell's magic requires <a href="#concentration">concentration</a>. If your concentration is broken the spell dissipates.<br>

				<h1 id="death">
					Dropping to 0 Hit Points
				</h1>
				<dl>
					<dt>
						<b>Death Saving Throws</b>
					</dt>
					<dd>
						When you start your turn at 0 hit points, you need to make a death saving throw. Rolling 9 and below counts as a failure, and 10 and above counts as a success. If you accrue 3 failures before 3 successes, you die. If you accrue 3 successes, you are stabilized. If you regain any hit points, both your successes and failures are reset.
					</dd>
					<dt>
						<b>Rolling 1 or 20.</b>
					</dt>
					<dd>
						When you make a death saving throw and roll a 1 on the d20, it counts as two failures. If you roll a 20 on the d20, you regain 1 hit point.
					</dd>
					<dt>
						<b>Damage at 0 Hit Points.</b>
					</dt>
					<dd>
						If you take any damage while you have 0 hit points, you suffer a death saving throw failure. If the damage is from a critical hit, you suffer two failures instead. If the damage equals or exceeds your hit point maximum, you suffer instant death.
					</dd>
					<dt>
						<b>Instant Death</b>
					</dt>
					<dd>
						Massive damage can kill you instantly. When damage reduces you to 0 hit points and there is damage remaining, you die if the remaining damage equals or exceeds your hit point maximum. For example, a cleric with a maximum of 12 hit points currently has 6 hit points. If she takes 18 damage from an attack, she is reduced to 0 hit points, but 12 damage remains. Because the remaining damage equals her hit point maximum, the cleric dies.
					</dd>
					<dt>
						<b>Falling Unconscious</b>
					</dt>
					<dd>
						If damage reduces you to 0 hit points and fails to kill you, you fall <a href="#unconscious">unconscious</a>. This unconsciousness ends if you regain any hit points.
					</dd>
					<dt>
						<b>Stabilizing a Creature</b>
					</dt>
					<dd>
						The best way to save a creature with 0 hit points is to heal it. If healing is unavailable, the creature can at least be stabilized so that it isn't killed by a failed death saving throw. You can use your action to administer first aid to an unconscious creature and attempt to stabilize it, which requires a successful DC 10 Medicine check. A stable creature doesn't make death saving throws, even though it has 0 hit points, but it does remain unconscious. The creature stops being stable, and must start making death saving throws again, if it takes any damage. A stable creature that isn't healed regains 1 hit point after 1d4 hours.
					</dd>
				</dl><br />
				<h1 id="wildmagic">Wild Magic</h1>
				<i>Immediately after you cast a sorcerer spell of 1st level or higher, the DM can have you roll a d20. If you roll a 1, roll on the Wild Magic Surge table to create a random magical effect.</i><br /><br />
				<table id="wildmagic">
					<tr>
						<th colspan="4">
							<h3 class="nobackground">Wild Magic Surge</h3>
						</th>
					</tr>
					<tr>
						<th width="8%" align="center">
							d100
						</th>
						<th align="left">
							Effect
						</th>
					</tr>
					<tr>
						<td align="left">
							01-02
						</td>
						<td align="left">
							Roll on this table at the start of each of your turns for the next minute, ignoring this result on subsequent rolls.
						</td>
					</tr>
					<tr>
						<td align="left">
							03-04
						</td>
						<td align="left">
							For the next minute, you can see any invisible creature if you have line of sight to it.
						</td>
					</tr>
					<tr>
						<td align="left">
							05-06
						</td>
						<td align="left">
							A modron chosen and controlled by the DM appears in an unoccupied space within 5 feet of you, then disappears 1 minute later.
						</td>
					</tr>
					<tr>
						<td align="left">
							07-08
						</td>
						<td align="left">
							You cast fireball as a 3rd level spell centered on yourself.
						</td>
					</tr>
					<tr>
						<td align="left">
							09-10
						</td>
						<td align="left">
							You cast magic missile as a 5th level spell.
						</td>
					</tr>
					<tr>
						<td align="left">
							11-12
						</td>
						<td align="left">
							Roll a d10. Your height changes by a number of inches equal to the roll. If the roll is odd, you shrink. If the roll is even, you grow.
						</td>
					</tr>
					<tr>
						<td align="left">
							13-14
						</td>
						<td align="left">
							You cast confusion centered on yourself.
						</td>
					</tr>
					<tr>
						<td align="left">
							15-16
						</td>
						<td align="left">
							For the next minute, you regain 5 hit points at the start of each of your turns.
						</td>
					</tr>
					<tr>
						<td align="left">
							17-18
						</td>
						<td align="left">
							You grow a long beard made of feathers that remains until you sneeze, at which point the feathers explode out from your face.
						</td>
					</tr>
					<tr>
						<td align="left">
							19-20
						</td>
						<td align="left">
							You cast grease centered on yourself.
						</td>
					</tr>
					<tr>
						<td align="left">
							21-22
						</td>
						<td align="left">
							Creatures have disadvantage on saving throws against the next spell you cast in the next minute that involves a saving throw.
						</td>
					</tr>
					<tr>
						<td align="left">
							23-24
						</td>
						<td align="left">
							Your skin turns a vibrant shade of blue. A remove curse spell can end this effect.
						</td>
					</tr>
					<tr>
						<td align="left">
							25-26
						</td>
						<td align="left">
							An eye appears on your forehead for the next minute. During that time, you have advantage on Wisdom (Perception) checks that rely on sight.
						</td>
					</tr>
					<tr>
						<td align="left">
							27-28
						</td>
						<td align="left">
							For the next minute, all your spells with a casting time of 1 action have a casting time of 1 bonus action.
						</td>
					</tr>
					<tr>
						<td align="left">
							29-30
						</td>
						<td align="left">
							You teleport up to 60 feet to an unoccupied space of your choice that you can see.
						</td>
					</tr>
					<tr>
						<td align="left">
							31-32
						</td>
						<td align="left">
							You are transported to the Astral Plane until the end of your next turn, after which time you return to the space you previously occupied or the nearest unoccupied space if that space is occupied.
						</td>
					</tr>
					<tr>
						<td align="left">
							33-34
						</td>
						<td align="left">
							Maximize the damage of the next damaging spell you cast within the next minute.
						</td>
					</tr>
					<tr>
						<td align="left">
							35-36
						</td>
						<td align="left">
							Roll a d10. Your age changes by a number of years equal to the roll. If the roll is odd, you get younger (minimum 1 year old). If the roll is even, you get older.
						</td>
					</tr>
					<tr>
						<td align="left">
							37-38
						</td>
						<td align="left">
							1d6 flumphs controlled by the DM appear in unoccupied space within 60 feet of you and are frightened of you. They vanish after 1 minute.
						</td>
					</tr>
					<tr>
						<td align="left">
							39-40
						</td>
						<td align="left">
							You regain 2d10 hit points.
						</td>
					</tr>
					<tr>
						<td align="left">
							41-42
						</td>
						<td align="left">
							You turn into a potted plant until the start of your next turn. While a plant, you are incapacitated and have vulnerability to all damage. If you drop to 0 hit points, your pot breaks, and your form reverts.
						</td>
					</tr>
					<tr>
						<td align="left">
							43-44
						</td>
						<td align="left">
							For the next minute, you can teleport up to 20 feet as a bonus action on each of your turns.
						</td>
					</tr>
					<tr>
						<td align="left">
							45-46
						</td>
						<td align="left">
							You cast levitate on yourself.
						</td>
					</tr>
					<tr>
						<td align="left">
							47-48
						</td>
						<td align="left">
							A unicorn controlled by the DM appears in a space within 5 feet of you, then disappears 1 minute later.
						</td>
					</tr>
					<tr>
						<td align="left">
							49-50
						</td>
						<td align="left">
							You can't speak for the next minute. Whenever you try, pink bubbles float out of your mouth.
						</td>
					</tr>
					<tr>
						<td align="left">
							51-52
						</td>
						<td align="left">
							A spectral shield hovers near you for the next minute, granting you a +2 bonus to AC and immunity to magic missile.
						</td>
					</tr>
					<tr>
						<td align="left">
							53-54
						</td>
						<td align="left">
							You are immune to being intoxicated by alcohol for the next 5d6 days.
						</td>
					</tr>
					<tr>
						<td align="left">
							55-56
						</td>
						<td align="left">
							Your hair falls out but grows back within 24 hours.
						</td>
					</tr>
					<tr>
						<td align="left">
							57-58
						</td>
						<td align="left">
							For the next minute, any flammable object you touch that isn't being worn or carried by another creature bursts into flame.
						</td>
					</tr>
					<tr>
						<td align="left">
							59-60
						</td>
						<td align="left">
							You regain your lowest-level expended spell slot.
						</td>
					</tr>
					<tr>
						<td align="left">
							61-62
						</td>
						<td align="left">
							For the next minute, you must shout when you speak.
						</td>
					</tr>
					<tr>
						<td align="left">
							63-64
						</td>
						<td align="left">
							You cast fog cloud centered on yourself.
						</td>
					</tr>
					<tr>
						<td align="left">
							65-66
						</td>
						<td align="left">
							Up to three creatures you choose within 30 feet of you take 4d10 lightning damage.
						</td>
					</tr>
					<tr>
						<td align="left">
							67-68
						</td>
						<td align="left">
							You are frightened by the nearest creature until the end of your next turn.
						</td>
					</tr>
					<tr>
						<td align="left">
							69-70
						</td>
						<td align="left">
							Each creature within 30 feet of you becomes invisible for the next minute. The invisibility ends on a creature when it attacks or casts a spell.
						</td>
					</tr>
					<tr>
						<td align="left">
							71-72
						</td>
						<td align="left">
							You gain resistance to all damage for the next minute.
						</td>
					</tr>
					<tr>
						<td align="left">
							73-74
						</td>
						<td align="left">
							A random creature within 60 feet of you becomes poisoned for 1d4 hours.
						</td>
					</tr>
					<tr>
						<td align="left">
							75-76
						</td>
						<td align="left">
							You glow with bright light in a 30-foot radius for the next minute. Any creature that ends its turn within 5 feet of you is blinded until the end of its next turn.
						</td>
					</tr>
					<tr>
						<td align="left">
							77-78
						</td>
						<td align="left">
							You cast polymorph on yourself. If you fail the saving throw, you turn into a sheep for the spells duration.
						</td>
					</tr>
					<tr>
						<td align="left">
							79-80
						</td>
						<td align="left">
							Illusory butterflies and flower petals flutter in the air within 10 feet of you for the next minute.
						</td>
					</tr>
					<tr>
						<td align="left">
							81-82
						</td>
						<td align="left">
							You can take one additional action immediately
						</td>
					</tr>
					<tr>
						<td align="left">
							83-84
						</td>
						<td align="left">
							Each creature within 30 feet of you takes 1d10 necrotic damage. You regain hit points equal to the sum of the necrotic damage dealt.
						</td>
					</tr>
					<tr>
						<td align="left">
							85-86
						</td>
						<td align="left">
							You cast mirror image.
						</td>
					</tr>
					<tr>
						<td align="left">
							87-88
						</td>
						<td align="left">
							You cast fly on a random creature within 60 feet of you.
						</td>
					</tr>
					<tr>
						<td align="left">
							89-90
						</td>
						<td align="left">
							You become invisible for the next minute. During that time, other creatures can't hear you. The invisibility ends if you attack or cast a spell.
						</td>
					</tr>
					<tr>
						<td align="left">
							91-92
						</td>
						<td align="left">
							If you die within the next minute, you immediately come back to life as if by the reincarnate spell.
						</td>
					</tr>
					<tr>
						<td align="left">
							93-94
						</td>
						<td align="left">
							Your size increases by one size category for the next minute.
						</td>
					</tr>
					<tr>
						<td align="left">
							95-96
						</td>
						<td align="left">
							You and all creatures within 30 feet of you gain vulnerability to piercing damage for the next minute.
						</td>
					</tr>
					<tr>
						<td align="left">
							97-98
						</td>
						<td align="left">
							You are surrounded by faint, ethereal music for the next minute.
						</td>
					</tr>
					<tr>
						<td align="left">
							99-00
						</td>
						<td align="left">
							You regain all expended sorcery points.
						</td>
					</tr>
				</table>
				<br /><br />
				<h1 id="adventuring">
					Adventuring
				</h1>
				<br />
				<table id="characterlevel">
					<tr>
						<th colspan="3">
							<h3 class="nobackground">Character Leveling Requirements</h3>
						</th>
					</tr>
					<tr>
						<th width="40%">
							Experience Points
						</th>
						<th width="30%">
							Level
						</th>
						<th width="30%">
							Proficiency Bonus
						</th>
					</tr>
					<tr>
						<td align="left">
							0
						</td>
						<td align="left">
							1
						</td>
						<td align="left">
							+2
						</td>
					</tr>
					<tr>
						<td align="left">
							300
						</td>
						<td align="left">
							2
						</td>
						<td align="left">
							+2
						</td>
					</tr>
					<tr>
						<td align="left">
							900
						</td>
						<td align="left">
							3
						</td>
						<td align="left">
							+2
						</td>
					</tr>
					<tr>
						<td align="left">
							2,700
						</td>
						<td align="left">
							4
						</td>
						<td align="left">
							+2
						</td>
					</tr>
					<tr>
						<td align="left">
							6,500
						</td>
						<td align="left">
							5
						</td>
						<td align="left">
							+3
						</td>
					</tr>
					<tr>
						<td align="left">
							14,000
						</td>
						<td align="left">
							6
						</td>
						<td align="left">
							+3
						</td>
					</tr>
					<tr>
						<td align="left">
							23,000
						</td>
						<td align="left">
							7
						</td>
						<td align="left">
							+3
						</td>
					</tr>
					<tr>
						<td align="left">
							34,000
						</td>
						<td align="left">
							8
						</td>
						<td align="left">
							+3
						</td>
					</tr>
					<tr>
						<td align="left">
							48,000
						</td>
						<td align="left">
							9
						</td>
						<td align="left">
							+4
						</td>
					</tr>
					<tr>
						<td align="left">
							64,000
						</td>
						<td align="left">
							10
						</td>
						<td align="left">
							+4
						</td>
					</tr>
					<tr>
						<td align="left">
							85,000
						</td>
						<td align="left">
							11
						</td>
						<td align="left">
							+4
						</td>
					</tr>
					<tr>
						<td align="left">
							100,000
						</td>
						<td align="left">
							12
						</td>
						<td align="left">
							+4
						</td>
					</tr>
					<tr>
						<td align="left">
							120,000
						</td>
						<td align="left">
							13
						</td>
						<td align="left">
							+5
						</td>
					</tr>
					<tr>
						<td align="left">
							140,000
						</td>
						<td align="left">
							14
						</td>
						<td align="left">
							+5
						</td>
					</tr>
					<tr>
						<td align="left">
							165,000
						</td>
						<td align="left">
							15
						</td>
						<td align="left">
							+5
						</td>
					</tr>
					<tr>
						<td align="left">
							195,000
						</td>
						<td align="left">
							16
						</td>
						<td align="left">
							+5
						</td>
					</tr>
					<tr>
						<td align="left">
							225,000
						</td>
						<td align="left">
							17
						</td>
						<td align="left">
							+6
						</td>
					</tr>
					<tr>
						<td align="left">
							265,000
						</td>
						<td align="left">
							18
						</td>
						<td align="left">
							+6
						</td>
					</tr>
					<tr>
						<td align="left">
							305,000
						</td>
						<td align="left">
							19
						</td>
						<td align="left">
							+6
						</td>
					</tr>
					<tr>
						<td align="left">
							355,000
						</td>
						<td align="left">
							20
						</td>
						<td align="left">
							+6
						</td>
					</tr>
				</table>

				<br />

				<div class="small-font">
				<table id="currency">
					<tr><th colspan="6"><h3 class="nobackground">Currency Exchange Rates</h3></th></tr>
					<tr><th align="left">Coin</th><th align="left">CP</th><th align="left">SP</th><th align="left">EP</th><th align="left">GP</th><th align="left">PP</th></tr>
					<tr><td>Copper</td><td>1</td><td>1/10</td><td>1/50</td><td>1/100</td><td>1/1000</td></tr>
					<tr><td>Silver</td><td>10</td><td>1</td><td>1/5</td><td>1/10</td><td>1/100</td></tr>
					<tr><td>Electrum</td><td>50</td><td>5</td><td>1</td><td>1/2</td><td>1/20</td></tr>
					<tr><td>Gold</td><td>100</td><td>10</td><td>2</td><td>1</td><td>1/10</td></tr>
					<tr><td>Platinum</td><td>1000</td><td>100</td><td>50</td><td>10</td><td>1</td></tr>
				</table>
				</div>

				<br /><br />

				<table id="services">
					<tr>
						<th colspan="3">
							<h3 class="nobackground">Adventuring Services</h3>
						</th>
					</tr>
					<tr>
						<th>
							Service
						</th>
						<th>
							Pay
						</th>
					</tr>
					<tr>
						<td colspan="2">
							Coach Cab
						</td>
					</tr>
					<tr>
						<td align="left">
							&nbsp;&nbsp;&nbsp;&nbsp;Between Towns
						</td>
						<td align="left">
							3 cp/mile
						</td>
					</tr>
					<tr>
						<td align="left">
							Within a City
						</td>
						<td align="left">
							1 cp
						</td>
					</tr>
					<tr>
						<td colspan="2">
							Hireling
						</td>
					</tr>
					<tr>
						<td align="left">
							&nbsp;&nbsp;&nbsp;&nbsp;Skilled
						</td>
						<td align="left">
							2 gp/day
						</td>
					</tr>
					<tr>
						<td align="left">
							&nbsp;&nbsp;&nbsp;&nbsp;Unskilled
						</td>
						<td align="left">
							2 sp/day
						</td>
					</tr>
					<tr>
						<td align="left">
							Messenger
						</td>
						<td align="left">
							2 cp/mile
						</td>
					</tr>
					<tr>
						<td align="left">
							Road/Gate Toll
						</td>
						<td align="left">
							1 cp
						</td>
					</tr>
					<tr>
						<td align="left">
							Ship's Passage
						</td>
						<td align="left">
							1 sp/mile
						</td>
					</tr>
					<tr>
						<td align="left">
							First Level Spell<sup>1</sup>
						</td>
						<td align="left">
							10-30gp + components
						</td>
					</tr>
					<tr>
						<td align="left">
							Second Level Spell<sup>1</sup>
						</td>
						<td align="left">
							30-50gp + components
						</td>
					</tr>
					<tr>
						<td align="left">
							Third+ Level Spell<sup>2</sup>
						</td>
						<td align="left">
							How much ya got?<sup>3</sup>
						</td>
					</tr>
				</table><br>
				<sup>1</sup> First and second level spellscasting services are easy enough to find in a decently sized city or town.<br>
				<sup>2</sup> Third level and higher spells are much more rare and can only be found with any amount of regularity in a large city, perhaps home to a University or Temple.<br>
				<sup>3</sup> Often times a spellcaster might ask for a service rather than monetary payment.
			</dd><br />
				<br /><br />

				<table id="lifestyle">
					<tr>
						<th colspan="2">
							<h3 class="nobackground">Lifestyle Expenses</h3>
						</th>
					</tr>
					<tr>
						<th align="left">
							Lifestyle
						</th>
						<th>
							Price/Day
						</th>
					</tr>
					<tr>
						<td align="left">
							Wretched
						</td>
						<td align="left">
							-
						</td>
					</tr>
					<tr>
						<td align="left">
							Squalid
						</td>
						<td align="left">
							1 sp
						</td>
					</tr>
					<tr>
						<td align="left">
							Poor
						</td>
						<td align="left">
							2 sp
						</td>
					</tr>
					<tr>
						<td align="left">
							Modest
						</td>
						<td align="left">
							1 gp
						</td>
					</tr>
					<tr>
						<td align="left">
							Comfortable
						</td>
						<td align="left">
							2 gp
						</td>
					</tr>
					<tr>
						<td align="left">
							Wealthy
						</td>
						<td align="left">
							4 gp
						</td>
					</tr>
					<tr>
						<td align="left">
							Aristocratic
						</td>
						<td align="left">
							10 gp minimum
						</td>
					</tr>
				</table><br /><br />
				<table id="lodging">
					<tr>
						<th colspan="2">
							<h3 class="nobackground">Food, Drink, and Lodging</h3>
						</th>
					</tr>
					<tr><th align="left">Item</th><th align="left">Cost</th></tr>
					<tr><td align="left"><i>Ale</i></td><td align="left"></td></tr>
					<tr><td align="left">&nbsp;&nbsp;&nbsp;&nbsp;Gallon</td><td align="left">2 sp</td></tr>
					<tr><td align="left">&nbsp;&nbsp;&nbsp;&nbsp;Mug</td><td align="left">4 cp</td></tr>
					<tr><td align="left">Banquet (per person)</td><td align="left">10 gp</td></tr>
					<tr><td align="left">Bread, loaf</td><td align="left">2 cp</td></tr>
					<tr><td align="left">Cheese, hunk</td><td align="left">1 sp</td></tr>
					<tr><td align="left"><i>Inn stay (per day)</i></td><td align="left"></td></tr>
					<tr><td align="left">&nbsp;&nbsp;&nbsp;&nbsp;Squalid</td><td align="left">7 cp</td></tr>
					<tr><td align="left">&nbsp;&nbsp;&nbsp;&nbsp;Poor</td><td align="left">1 sp</td></tr>
					<tr><td align="left">&nbsp;&nbsp;&nbsp;&nbsp;Modest</td><td align="left">5 sp</td></tr>
					<tr><td align="left">&nbsp;&nbsp;&nbsp;&nbsp;Comfortable</td><td align="left">8 sp</td></tr>
					<tr><td align="left">&nbsp;&nbsp;&nbsp;&nbsp;Wealthy</td><td align="left">2 gp</td></tr>
					<tr><td align="left">&nbsp;&nbsp;&nbsp;&nbsp;Aristocratic</td><td align="left">4 gp</td></tr>
					<tr><td align="left"><i>Meals (per day)</i></td><td align="left"></td></tr>
					<tr><td align="left">&nbsp;&nbsp;&nbsp;&nbsp;Squalid</td><td align="left">3 cp</td></tr>
					<tr><td align="left">&nbsp;&nbsp;&nbsp;&nbsp;Poor</td><td align="left">6 cp</td></tr>
					<tr><td align="left">&nbsp;&nbsp;&nbsp;&nbsp;Modest</td><td align="left">3 sp</td></tr>
					<tr><td align="left">&nbsp;&nbsp;&nbsp;&nbsp;Comfortable</td><td align="left">5 sp</td></tr>
					<tr><td align="left">&nbsp;&nbsp;&nbsp;&nbsp;Wealthy</td><td align="left">8 sp</td></tr>
					<tr><td align="left">&nbsp;&nbsp;&nbsp;&nbsp;Aristocratic</td><td align="left">2 gp</td></tr>
					<tr><td align="left">Meat, chunk</td><td align="left">3 sp</td></tr>
					<tr><td align="left"><i>Wine</i></td><td align="left"></td></tr>
					<tr><td align="left">Common (pitcher)</td><td align="left">2 sp</td></tr>
					<tr><td align="left">Fine (bottle)</td><td align="left">10 gp</td></tr>
				</table>
				<br /><br />

				<h1 id="maptravelpace">
					Map Travel Paces
				</h1>
				<i>Below are guidelines for traveling in different sized map areas at different paces (slow, normal, and fast.)</i>
				<br /><br />
				<table>
					<tr><th colspan="3"><h3 class="nobackground">Dungeon</h3></tr>
					<tr><th>Slow Pace</th><th>Normal Pace</th><th>Fast Pace</th></th></tr>
					<tr><td>20 sq./min</td><td>30 sq./min</td><td>40 sq./min</td></tr>
					<tr><th colspan="3"><center><i>1 square = 10 feet</i></center></th></tr>
				</table>
				<br />
				<table>
					<tr><th colspan="3"><h3 class="nobackground">City</h3></tr>
					<tr><th>Slow Pace</th><th>Normal Pace</th><th>Fast Pace</th></th></tr>
					<tr><td>2 sq./min</td><td>3 sq./min</td><td>4 sq./min</td></tr>
					<tr><th colspan="3"><i><center>1 square = 100 feet</center></i></th></tr>
				</table>
				<br />
				<table>
					<tr><th colspan="3"><h3 class="nobackground">Province</h3></tr>
					<tr><th>Slow Pace</th><th>Normal Pace</th><th>Fast Pace</th></th></tr>
					<tr><td>2 hexes/hour<br /><center>or</center>18 hexes/day</td><td>3 hexes/hour<br /><center>or</center>24 hexes/day</td><td>4 hexes/hour<br /><center>or</center>30 hexes/day</td></tr>
					<tr><th colspan="3"><i><center>1 hex = 1 miles</center></i></th></tr>
				</table>
				<br />
				<table>
					<tr><th colspan="3"><h3 class="nobackground">Kingdom</h3></tr>
					<tr><th>Slow Pace</th><th>Normal Pace</th><th>Fast Pace</th></th></tr>
					<tr><td>1 hex/3 hours<br /><center>or</center>3 hexes/day</td><td>1 hex/2 hours<br /><center>or</center>or 4 hexes/day</td><td>1 hex/1.5 hours<br /><center>or</center>5 hexes/day</td></tr>
					<tr><th colspan="3"><i><center>1 hex = 6 miles</center></i></th></tr>
				</table>
				<br />

				<h1 id="travelpace">
					Travel Paces
				</h1><i>Below are guidelines for how fast a PC can travel on foot in actual distances at different paces (slow, normal and fast.)</i><br /><br />

				<table><tr>
						<th colspan="4">
							<h3 class="nobackground">Fast</h3>
						</th>
					</tr>
					<tr><th width="20%">Minute</th><th width="20%">Hour</th><th width="20%">Day</th><th width="40%">Effect</th></tr>
					<tr><td>400 ft</td><td>4 miles</td><td>30 miles</td><td>-5 to passive perception score</td></tr>
				</table>
				<br />
				<table>
					<tr>
						<th colspan="4">
							<h3 class="nobackground">Normal</h3>
						</th>
					</tr>
					<tr><th width="20%">Minute</th><th width="20%">Hour</th><th width="20%">Day</th><th width="40%">Effect</th></tr>
					<tr><td>300 ft</td><td>3 miles</td><td>24 miles</td><td>--</td></tr>
				</table>
				<br />

				<table>
					<tr>
						<th colspan="4">
							<h3 class="nobackground">Slow</h3>
						</th>
					</tr>
					<tr><th width="20%">Minute</th><th width="20%">Hour</th><th width="20%">Day</th><th width="40%">Effect</th></tr>
					<tr><td>200 ft</td><td>2 miles</td><td>18 miles</td><td>Able to stealth</td></tr>
				</table>
				<br /><br />

				<table id="speed">
					<tr>
						<th colspan="4">
							<h3 class="nobackground">
								Calculating Your Party's Pace
							</h3>
						</th>
					</tr>
					<tr>
						<th>
							Minute
						</th>
						<th>
							Hour
						</th>
						<th>
							Day
						</th>
						<th>
							Pace Effect
						</th>
					</tr>
					<tr>
						<td>
							Speed X 10 ft.
						</td>
						<td>
							Speed ÷10 mi.
						</td>
						<td>
							Speed X 0.6 mi.
						</td>
						<td>
							Effect based on pace
						</td>
					</tr>
				</table>
				<table>
					<tr>
						<th colspan="4">
							<h3 class="nobackground">
								Pace Effects
							</h3>
						</th>
					</tr>
					<tr>
						<th>
							Slow
						</th>
						<th>
							Normal
						</th>
						<th>
							Fast
						</th>
					</tr>
					<tr>
						<td>
							Use 2/3 base speed, able to stealth
						</td>
						<td>
							No effect
						</td>
						<td>
							Use 1.33 base speed, -5 passive perception
						</td>
					</tr>
				</table>
				<br /><br />

				<h1 id="encounterdistance">
					Encounter Distances
				</h1>
				<i>Below are guidelines on when to start an encounter based on terrain, audible distances, and outdoor visibility.</i><br /><br />
				<table>
					<tr>
						<th>
							<h3 class="nobackground">Terrain</h3>
						</th>
						<th><h3 class="nobackground">Encounter Distance</h3>
						</th>
					</tr>
					<tr>
						<td align="left">
							Arctic, desert, farmland, or grassland
						</td>
						<td align="left">
							6d6 x 10 feet
						</td>
					</tr>
					<tr>
						<td align="left">
							Forest, swamp, or woodland
						</td>
						<td align="left">
							2d8 x 10 feet
						</td>
					</tr>
					<tr>
						<td align="left">
							Hills or wastelands
						</td>
						<td align="left">
							2d10 x 10 feet
						</td>
					</tr>
					<tr>
						<td align="left">
							Jungle
						</td>
						<td align="left">
							2d6 x 10 feet
						</td>
					</tr>
					<tr>
						<td align="left">
							Mountains
						</td>
						<td align="left">
							4d10 x 10 feet
						</td>
					</tr>
				</table><br>

				<table>
					<tr>
						<th colspan="2">
							<h3 class="nobackground">Audible Distance</h3>
						</th>
					</tr>
					<tr>
					</tr>
					<tr>
						<td align="left">
							Trying to be quiet
						</td>
						<td align="left">
							2d6 x 5 feet
						</td>
					</tr>
					<tr>
						<td align="left">
							Normal noise level
						</td>
						<td align="left">
							2d6 x 10 feet
						</td>
					</tr>
					<tr>
						<td align="left">
							Very loud
						</td>
						<td align="left">
							2d6 x 50 feet
						</td>
					</tr>
				</table><br>

				<br />
				<table>
					<tr>
						<th colspan="2">
							<h3 class="nobackground">Visibility Outdoors</h3>
						</th>
					</tr>
					<tr>
						<td align="left">
							Clear day, no obstructions
						</td>
						<td align="left">
							2 miles
						</td>
					</tr>
					<tr>
						<td align="left">
							Rain
						</td>
						<td align="left">
							1 mile
						</td>
					</tr>
					<tr>
						<td align="left">
							Fog
						</td>
						<td align="left">
							100 to 300 feet
						</td>
					</tr>
					<tr>
						<td align="left">
							From a height
						</td>
						<td align="left">
							x 20
						</td>
					</tr>
				</table>
				<br />
				<table id="vision">
					<tr><th colspan="3"><h3 class="nobackground">Vision and Light</h3></th></tr>
					<tr><th></th><th>Hindrance</th><th>Examples</th></tr>
					<tr><td>Lightly Obscured</td><td>Disadvantage on Perception checks relying on sight</td><td>Dim light, patchy fog, moderate foliage</td></tr>
					<tr><td>Heavily Obscured</td><td><a href="#blinded">Blinded condition</a></td><td>Darkness, opaque fog, dense foliage</td></tr>
				</table>
				<br />
				<table id="light">
					<tr>
						<th colspan="4">
							<h3 class="nobackground">Light Sources</h3>
						</th>
					</tr>
					<tr>
						<th align="left">
							Source
						</th>
						<th align="left">
							Bright Light
						</th>
						<th align="left">
							Dim Light
						</th>
						<th align="left">
							1 hour
						</th>
					</tr>
					<tr><th colspan="4"><h3 class="nobackground">Mundane Sources</h3></th></tr>
					<tr>
						<td align="left">
							Candle
						</td>
						<td align="left">
							5 feet
						</td>
						<td align="left">
							+5 feet
						</td>
						<td align="left">
							6 hours
						</td>
					</tr>
					<tr>
						<td align="left">
							Lamp
						</td>
						<td align="left">
							15 feet
						</td>
						<td align="left">
							+30 feet
						</td>
						<td align="left">
							6 hours
						</td>
					</tr>
					<tr>
						<td align="left">
							Lantern, bullseye
						</td>
						<td align="left">
							60 foot cone
						</td>
						<td align="left">
							+60 feet
						</td>
						<td align="left">
							6 hours
						</td>
					</tr>
					<tr>
						<td align="left">
							Lantern, hooded<br>
							&nbsp;&nbsp;&nbsp;&nbsp;Lowered Hood
						</td>
						<td align="left">
							30 feet<br>
							&nbsp;&nbsp;&nbsp;&nbsp;-
						</td>
						<td align="left">
							+30 feet<br>
							&nbsp;&nbsp;&nbsp;&nbsp;+ 5 feet
						</td>
						<td align="left">
							6 hours<br>
							&nbsp;&nbsp;&nbsp;&nbsp;-
						</td>
					</tr>
					<tr>
						<td align="left">
							Torch
						</td>
						<td align="left">
							20 feet
						</td>
						<td align="left">
							+20 feet
						</td>
						<td align="left">
							1 hour
						</td>
					</tr>
					<tr><th colspan="4"><h3 class="nobackground">Magic Sources</h3></th></tr>
					<tr>
						<td align="left">
							Continual Flame
						</td>
						<td align="left">
							20 feet
						</td>
						<td align="left">
							+20 feet
						</td>
						<td align="left">
							-
						</td>
					</tr>
					<tr>
						<td align="left">
							Dancing Lights
						</td>
						<td align="left">
							-
						</td>
						<td align="left">
							10 feet
						</td>
						<td align="left">
							1 minute
						</td>
					</tr>
					<tr>
						<td align="left">
							Faerie Fire
						</td>
						<td align="left">
							-
						</td>
						<td align="left">
							10 feet
						</td>
						<td align="left">
							1 minute
						</td>
					</tr>
					<tr>
						<td align="left">
							Flame Blade
						</td>
						<td align="left">
							10 feet
						</td>
						<td align="left">
							+ 10 feet
						</td>
						<td align="left">
							10 minutes
						</td>
					</tr>
					<tr>
						<td align="left">
							Flaming Sphere
						</td>
						<td align="left">
							20 feet
						</td>
						<td align="left">
							+20 feet
						</td>
						<td align="left">
							1 minute
						</td>
					</tr>
					<tr>
						<td align="left">
							Holy Aura
						</td>
						<td align="left">
							-
						</td>
						<td align="left">
							5 feet
						</td>
						<td align="left">
							1 minute
						</td>
					</tr>
					<tr>
						<td align="left">
							Light
						</td>
						<td align="left">
							20 feet
						</td>
						<td align="left">
							+20 feet
						</td>
						<td align="left">
							1 hour
						</td>
					</tr>
					<tr>
						<td align="left">
							Moonbeam
						</td>
						<td align="left">
							-
						</td>
						<td align="left">
							5 ft cyl
						</td>
						<td align="left">
							1 minute
						</td>
					</tr>
					<tr>
						<td align="left">
							Prismatic Wall
						</td>
						<td align="left">
							100 feet
						</td>
						<td align="left">
							+100 feet
						</td>
						<td align="left">
							10 minutes
						</td>
					</tr>
					<tr>
						<td align="left">
							Wall of Fire
						</td>
						<td align="left">
							60 feet
						</td>
						<td align="left">
							+60 feet
						</td>
						<td align="left">
							1 minute
						</td>
					</tr>
				</table><br>

				<br />
				<table id="traps">
					<tr>
						<th colspan="3">
							<h3 class="nobackground">Trap Save DCs and Attack Bonuses</h3>
						</th>
					</tr>
					<tr>
						<th>
							Trap Danger
						</th>
						<th>
							Save DC
						</th>
						<th>
							Attack Bonus
						</th>
					</tr>
					<tr>
						<td align="left">
							Setback
						</td>
						<td align="left">
							10-11
						</td>
						<td align="left">
							+3 to +5
						</td>
					</tr>
					<tr>
						<td align="left">
							Dangerous
						</td>
						<td align="left">
							12-15
						</td>
						<td align="left">
							+6 to +8
						</td>
					</tr>
					<tr>
						<td align="left">
							Deadly
						</td>
						<td align="left">
							16-20
						</td>
						<td align="left">
							+9 to +12
						</td>
					</tr>
				</table><br>

				<br />
				<table id="damageseverity">
					<tr>
						<th colspan="4">
							<h3 class="nobackground">Damage Severity and Level</h3>
						</th>
					</tr>
					<tr>
						<th align="center">
							Character Level
						</th>
						<th>
							Setback
						</th>
						<th>
							Dangerous
						</th>
						<th>
							Deadly
						</th>
					</tr>
					<tr>
						<td align="center">
							1st-4th
						</td>
						<td align="left">
							1d10
						</td>
						<td align="left">
							2d10
						</td>
						<td align="left">
							4d10
						</td>
					</tr>
					<tr>
						<td align="center">
							5th-10th
						</td>
						<td align="left">
							2d10
						</td>
						<td align="left">
							4d10
						</td>
						<td align="left">
							10d10
						</td>
					</tr>
					<tr>
						<td align="center">
							11th-16th
						</td>
						<td align="left">
							4d10
						</td>
						<td align="left">
							10d10
						</td>
						<td align="left">
							18d10
						</td>
					</tr>
					<tr>
						<td align="center">
							17th-20th
						</td>
						<td align="left">
							10d10
						</td>
						<td align="left">
							18d10
						</td>
						<td align="left">
							24d10
						</td>
					</tr>
				</table>
				<br />
				<table id="aoetargets">
					<tr>
						<th colspan="2">
							<h3 class="nobackground">Targets in Area of Effect</h3>
						</th>
					</tr>
					<tr>
						<th>
							Area
						</th>
						<th>
							Number of Targets
						</th>
					</tr>
					<tr>
						<td align="left">
							Cone
						</td>
						<td align="left">
							Size / 10 (round up)
						</td>
					</tr>
					<tr>
						<td align="left">
							Cube or Square
						</td>
						<td align="left">
							Size / 5 (round up)
						</td>
					</tr>
					<tr>
						<td align="left">
							Cylinder
						</td>
						<td align="left">
							Radius / 5 (round up)
						</td>
					</tr>
					<tr>
						<td align="left">
							Line
						</td>
						<td align="left">
							Length / 30 (round up)
						</td>
					</tr>
					<tr>
						<td align="left">
							Sphere or Circle
						</td>
						<td align="left">
							Radius / 5 (round up)
						</td>
					</tr>
				</table><br />
				<table id="improvizingdamage">
					<tr>
						<th colspan="2">
							<h3 class="nobackground">Improvising Damage</h3>
						</th>
					</tr>
					<tr>
						<th>
							Damage
						</th>
						<th>
							Example
						</th>
					</tr>
					<tr>
						<td align="left">
							1d10
						</td>
						<td align="left">
							Burned by coals, hit by a falling bookcase, pricked by a poison needle
						</td>
					</tr>
					<tr>
						<td align="left">
							2d10
						</td>
						<td align="left">
							Being struck by lightning, stumbling into a fire pit
						</td>
					</tr>
					<tr>
						<td align="left">
							4d10
						</td>
						<td align="left">
							Hit by falling rubble in a collapsing tunnel, stumbling into a vat of acid
						</td>
					</tr>
					<tr>
						<td align="left">
							10d10
						</td>
						<td align="left">
							Crushed by compacting walls, hit by whirling steel blades, wading through a lava stream
						</td>
					</tr>
					<tr>
						<td align="left">
							18d10
						</td>
						<td align="left">
							Being submerged in lava, being hit by a crashing flying fortress
						</td>
					</tr>
					<tr>
						<td align="left">
							24d10
						</td>
						<td align="left">
							Tumbling into a vortex of fire on the Elemental Plane of Fire, being crushed in the jaws of a godlike creature or a moon-sized monster
						</td>
					</tr>
				</table>
				<br /><br />

				<table id="objectac">
					<tr><th colspan="2"><h3 class="nobackground">Object Armor Class</h3></th></tr>
					<tr><th>Substance</th><th>AC</th></tr>
					<tr><td>Cloth</td><td>11</td></tr>
					<tr><td>Paper</td><td>11</td></tr>
					<tr><td>Rope</td><td>11</td></tr>
					<tr><td>Crystal</td><td>13</td></tr>
					<tr><td>Glass</td><td>13</td></tr>
					<tr><td>Ice</td><td>13</td></tr>
					<tr><td>Wood</td><td>15</td></tr>
					<tr><td>Bone</td><td>15</td></tr>
					<tr><td>Stone</td><td>17</td></tr>
					<tr><td>Iron</td><td>19</td></tr>
					<tr><td>Steel</td><td>19</td></tr>
					<tr><td>Mithril</td><td>21</td></tr>
					<tr><td>Adamantine</td><td>23</td></tr>
				</table>

				<br /><br />

				<table id="objectap">
					<tr><th colspan="3"><h3 class="nobackground">Object Hit Points</h3></th></tr>
					<tr><th>Size</th><th>Weak</th><th>Tough</th></tr>
					<tr><td>TINY<br />&nbsp;&nbsp;&nbsp;&nbsp;Bottle, Lock</td><td>1d4</td><td>2d4</td></tr>
					<tr><td>SMALL<br />&nbsp;&nbsp;&nbsp;&nbsp;Chest, Chain</td><td>1d6</td><td>3d6</td></tr>
					<tr><td>MEDIUM<br />&nbsp;&nbsp;&nbsp;&nbsp;Barrel, Chandelier</td><td>1d8</td><td>4d8</td></tr>
					<tr><td>LARGE<br />&nbsp;&nbsp;&nbsp;&nbsp;Cart, Window</td><td>1d10</td><td>5d10</td></tr>
					<tr><td>HUGE+<br />&nbsp;&nbsp;&nbsp;&nbsp;Wagon, Hut</td><td colspan="2">DM's Discretion</td></tr>
				</table>

				<br /><br />

				<h1 id="resting">
					Resting
				</h1>
				<dl>
					<dt>
						<b>Short Rest:</b>
					</dt>
					<dd>
						<ul>
							<li>A period of downtime lasting at least one hour, during which time you can do nothing more strenuous than eating, drinking, reading, or tending to wounds.
							</li>
							<li>You regain the use of abilities, features, and resources that are refreshed by taking a Short Rest.
							</li>
							<li>You are allowed to expend one of your accumulated Hit Die by rolling a die of the corresponding type. You regain hit points equal to the rolled value + your Constitution modifier. Afterwards, you may choose to spend another Hit Die.
							</li>
						</ul>
						<b>Full Text:</b>
						A short rest is a period of downtime, at least 1 hour long, during which a character does nothing more strenuous that eating, drinking, reading, and tending to wounds. A character can spend one or more Hit Dice at the end of a short rest, up to the character's maximum number of Hit Dice, which is equal to the character's level. For each Hit Dice spent in this way, the player rolls the die and adds the character's Constitution modifier to it. The character regains hit points equal to the total. The player can decide to spend an additional Hit Die after each roll. A character regains some spent Hit Dice upon finishing a long rest, as explained below.
					</dd>
					<dt>
						<b>Long Rest:</b>
					</dt>
					<dd>
						<ul>
							<li>A period of extended downtime lasting at least eight hours, during which time you must either sleep or perform only light activities such as talking, eating, or standing watch. These activities can occupy no more than 2 hours of your Long Rest. Performing more than an hour of strenuous activity such as walking or fighting will also interrupt your Long Rest. You may only benefit from one Long Rest in a 24-hour period and you must begin the rest with at least one hit point.
							</li>
							<li>You regain the use of abilities, features, and resources that are refreshed by a long rest
							</li>
							<li>You regain all of your lost hit points unless otherwise indicated.
							</li>
							<li>You regain a number of Hit Die equal to up half of your total possible Hit Die.
							</li>
						</ul>
						<b>Full Text:</b>
						A long rest is a period of extended downtime, at least 8 hours long, during which a character sleeps or performs light activity: reading, talking, eating or standing watch for no more than 2 hours. If the rest in interrupted by a period of strenuous activity - at least 1 hour of waking, fighting, casting spells, or similar adventuring activity - the characters must begin the rest again to gain any benefit from it.
						At the end of a long rest, a character regains all lost hit points. The character also regains spent Hit Dice, up to a number of dice equal to half of the character's total number of them. For example, if a character has eight Hit Dice, he or she can regain four spent Hit Dice upon finishing a long rest.
						A character can't benefit from more than one long rest in a 24-hour period, and a character must have at least 1 hit point at the start of the rest to gain its benefits.
					</dd>
				</dl><br>
				<h1 id="weather">
					Weather
				</h1>
				<h2 id="weatherchart">Weather Chart</h2>
				<br>
				<table>
					<tr><th>d20</th><th>Temperature</th></tr>
					<tr><td>1-14</td><td>Normal for the season</td></tr>
					<tr><td>15-17</td><td>1d4 x 10 degrees Fahrenheit colder than normal</td></tr>
					<tr><td>18-20</td><td>1d4 x 10 degrees Fahrenheit hotter than normal</td></tr>
				</table>
				<table>
					<tr><th>d20</th><th>Wind</th></tr>
					<tr><td>1-12</td><td>None</td></tr>
					<tr><td>13-17</td><td>Light</td></tr>
					<tr><td>18-20</td><td>Strong</td></tr>
				</table>
				<table>
					<tr><th>d20</th><th>Precipitation</th></tr>
					<tr><td>1-12</td><td>None</td></tr>
					<tr><td>13-17</td><td>Light rain or light snowfall</td></tr>
					<tr><td>18-20</td><td>Heavy rain or heavy snowfall</td></tr>
				</table>
<!--Future information on extreme weather conditions will go here-->
				<h1 id="languages">Languages</h1>
				<h2>Standard Languages</h2>
				<br>
				<table>
					<tr><th>Language</th><th>Typical Speakers</th><th>Script</th></tr>
					<tr><td>Common</td><td>Humans</td></td><td>Common</td></tr>
					<tr><td>Dwarvish</td><td>Dwarves</td><td>Dwarvish</td></tr>
					<tr><td>Elvish</td><td>Elves</td><td>Elvish</td></tr>
					<tr><td>Giant</td><td>Ogres, giants</td><td>Dwarvish</td></tr>
					<tr><td>Gnomish</td><td>Gnomes</td></td><td>Dwarvish</td></tr>
					<tr><td>Goblin</td><td>Goblinoids</td><td>Dwarvish</td></tr>
					<tr><td>Halfling</td><td>Halflings</td><td>Common</td></tr>
					<tr><td>Orc</td><td>Orcs</td><td>Dwarvish</td></tr>
				</table>
				<br>
				<h2>Exotic Languages</h2>
				<br>
				<table>
					<tr><th>Language</th><th>Typical Speakers</th><th>Script</th></tr>
					<tr><td>Abyssal</td><td>Demons</td></td><td>Infernal</td></tr>
					<tr><td>Celestial</td><td>Celestials</td><td>Celestial</td></tr>
					<tr><td>Draconic</td><td>Dragons, dragonborn</td><td>Draconic</td></tr>
					<tr><td>Deep Speech</td><td>Mind Flayers, Beholders</td><td>—</td></tr>
					<tr><td>Infernal</td><td>Devils</td></td><td>Infernal</td></tr>
					<tr><td>Primordial</td><td>Elementals</td><td>Dwarvish</td></tr>
					<tr><td>Sylvan</td><td>Fey creatures</td><td>Elvish</td></tr>
					<tr><td>Undercommon</td><td>Underdark traders</td><td>Elvish</td></tr>
				</table>
				<h1 id="randomtables">Random Tables</h1>
				<h2 id="quickfind">Quick Find</h2>
				<table>
					<tr>
						<th align="left">d12</th>
						<th align="left">Find</th>
					</tr>
					<tr>
						<td align="left">1</td>
						<td align="left">Artwork</td>
					</tr>
					<tr>
						<td align="left">2</td>
						<td align="left">Body</td>
					</tr>
					<tr>
						<td align="left">3</td>
						<td align="left">Food or drink</td>
					</tr>
					<tr>
						<td align="left">4</td>
						<td align="left">Jewelry</td>
					</tr>
					<tr>
						<td align="left">5</td>
						<td align="left">Key</td>
					</tr>
					<tr>
						<td align="left">6</td>
						<td align="left">Letter</td>
					</tr>
					<tr>
						<td align="left">7</td>
						<td align="left">Magic herbs</td>
					</tr>
					<tr>
						<td align="left">8</td>
						<td align="left">Map</td>
					</tr>
					<tr>
						<td align="left">9</td>
						<td align="left">Monster parts</td>
					</tr>
					<tr>
						<td align="left">10</td>
						<td align="left">Secret message</td>
					</tr>
					<tr>
						<td align="left">11</td>
						<td align="left">Signet or insignia</td>
					</tr>
					<tr>
						<td align="left">12</td>
						<td align="left">Tome</td>
					</tr>
				</table>
				<br />
			<h2 id="somethinghappened">Something Happened</h2>
			<table>
				<tr>
					<th align="left">d20</th>
					<th align="left">Event</th>
				</tr>
				<tr>
					<td align="left">1</td>
					<td align="left">A door opens</td>
				</tr>
				<tr>
					<td align="left">2</td>
					<td align="left">A fire starts</td>
				</tr>
				<tr>
					<td align="left">3</td>
					<td align="left">A meteor shoots across the sky</td>
				</tr>
				<tr>
					<td align="left">4</td>
					<td align="left">A monster appears</td>
				</tr>
				<tr>
					<td align="left">5</td>
					<td align="left">A screech pierces the air</td>
				</tr>
				<tr>
					<td align="left">6</td>
					<td align="left">A storm begins</td>
				</tr>
				<tr>
					<td align="left">7</td>
					<td align="left">A strange star appears in the sky</td>
				</tr>
				<tr>
					<td align="left">8</td>
					<td align="left">A strong gust of wind blows through</td>
				</tr>
				<tr>
					<td align="left">9</td>
					<td align="left">A tremor shakes the ground</td>
				</tr>
				<tr>
					<td align="left">10</td>
					<td align="left">Someone experiences déjà vu</td>
				</tr>
				<tr>
					<td align="left">11</td>
					<td align="left">Someone gets angry</td>
				</tr>
				<tr>
					<td align="left">12</td>
					<td align="left">Someone glimpses the future</td>
				</tr>
				<tr>
					<td align="left">13</td>
					<td align="left">Someone has a sense of foreboding</td>
				</tr>
				<tr>
					<td align="left">14</td>
					<td align="left">Someone has to go to the bathroom</td>
				</tr>
				<tr>
					<td align="left">15</td>
					<td align="left">Something spills or falls to the ground</td>
				</tr>
				<tr>
					<td align="left">16</td>
					<td align="left">Something isn't where it's supposed to be</td>
				</tr>
				<tr>
					<td align="left">17</td>
					<td align="left">The lights go out</td>
				</tr>
				<tr>
					<td align="left">18</td>
					<td align="left">The sun comes out</td>
				</tr>
				<tr>
					<td align="left">19</td>
					<td align="left">There's a foul smell in the air</td>
				</tr>
				<tr>
					<td align="left">20</td>
					<td align="left">Unexplained magic occurs</td>
				</tr>
			</table>
			<br />
			<h2 id="randomhazards">Dungeon Hazards</h2>
			<table>
				<tr>
					<th align="left">d20</th>
					<th align="left">Hazard</th>
				</tr>
				<tr>
					<td align="left">1-3</td>
					<td align="left">Brown Mold</td>
				</tr>
				<tr>
					<td align="left">4-8</td>
					<td align="left">Green slime</td>
				</tr>
				<tr>
					<td align="left">9-10</td>
					<td align="left">Shrieker</td>
				</tr>
				<tr>
					<td align="left">11-15</td>
					<td align="left">Spiderwebs</td>
				</tr>
				<tr>
					<td align="left">16-17</td>
					<td align="left">Violet fungus</td>
				</tr>
				<tr>
					<td align="left">18-20</td>
					<td align="left">Yellow mold</td>
				</tr>
			</table>
			<br />
			<h2 id="randomobstacles">Dungeon Obstacles</h2>
			<table>
				<tr>
					<th width="8%" align="left">d20</th>
					<th align="left">Obstacle</th>
				</tr>
				<tr>
					<td align="left">1</td>
					<td align="left">Antilife aura with a radius of 1d10 x 10 ft.; while in the aura, living creatures can't regain hit points</td>
				</tr>
				<tr>
					<td align="left">2</td>
					<td align="left">Battering winds reduce speed by half, impose disadvantage on ranged attack rolls</td>
				</tr>
				<tr>
					<td align="left">3</td>
					<td align="left"><i>Blade barrier</i> blocks passage</td>
				</tr>
				<tr>
					<td align="left">4-8</td>
					<td align="left">Cave-in</td>
				</tr>
				<tr>
					<td align="left">9-12</td>
					<td align="left">Chasm 1d4 x 10 ft. wide and 2d6 x 10 ft. deep, possibly connected to other levels of the dungeon</td>
				</tr>
				<tr>
					<td align="left">13-14</td>
					<td align="left">Flooding leaves 2d10 ft. of water in the area; create nearby upward-sloping passages, raised floors, or rising stairs to contain the water</td>
				</tr>
				<tr>
					<td align="left">15</td>
					<td align="left">Lava flows through the area (50% chance of a stone bridge crossing it)</td>
				</tr>
				<tr>
					<td align="left">16</td>
					<td align="left">Overgrown mushrooms block progress and most be hacked down (25% chance of a mold or fungus dungeon hazard hidden among them)</td>
				</tr>
				<tr>
					<td align="left">18</td>
					<td align="left">Poisonous gas (deals 1d6 poison damage per minute of exposure)</td>
				</tr>
				<tr>
					<td align="left">18</td>
					<td align="left"><i>Reverse gravity</i> effect causes creatures to fall towards the ceiling</td>
				</tr>
				<tr>
					<td align="left">19</td>
					<td align="left"><i>Wall of fire</i> blocks passage</td>
				</tr>
				<tr>
					<td align="left">20</td>
					<td align="left"><i>Wall of force</i> blocks passage</td>
				</tr>
			</table>
			<br />
			<h2 id="randomtraptrigger">Trap Trigger</h2>
			<table>
				<tr>
					<th align="left">d6</th>
					<th align="left">Trigger</th>
				</tr>
				<tr>
					<td align="left">1</td>
					<td align="left">Stepped on (floor, stairs)</td>
				</tr>
				<tr>
					<td align="left">2</td>
					<td align="left">Moved through (doorway, hallway)</td>
				</tr>
				<tr>
					<td align="left">3</td>
					<td align="left">Touched (doorknob, statue)</td>
				</tr>
				<tr>
					<td align="left">4</td>
					<td align="left">Opened (door, treasure chest)</td>
				</tr>
				<tr>
					<td align="left">5</td>
					<td align="left">Looked at (mural, arcane symbol)</td>
				</tr>
				<tr>
					<td align="left">6</td>
					<td align="left">Moved</td>
				</tr>
			</table>
			<br />
			<h2 id="randomtrapseverity">Trap Severity</h2>
			<table>
				<tr>
					<th align="left">d6</th>
					<th align="left">Severity</th>
				</tr>
				<tr>
					<td align="left">1-2</td>
					<td align="left">Setback</td>
				</tr>
				<tr>
					<td align="left">3-5</td>
					<td align="left">Dangerous</td>
				</tr>
				<tr>
					<td align="left">6</td>
					<td align="left">Deadly</td>
				</tr>
			</table>
Use <a href="#traps">these charts</a> to determine attack bonus, save DC, and damage for the trap.
			<br />
			<h2 id="randomtrapeffect">Trap Effect</h2>
			<table>
				<tr>
					<th width="8%" align="left">d100</th>
					<th align="left">Effect</th>
				</tr>
				<tr>
					<td align="left">01-04</td>
					<td align="left"><i>Magic missiles</i> shoot from a statue or object</td>
				</tr>
				<tr>
					<td align="left">05-07</td>
					<td align="left">Collapsing staircase creates a ramp that deposits characters into a pit at its lower end`</td>
				</tr>
				<tr>
					<td align="left">08-10</td>
					<td align="left">Ceiling block falls, or entire ceiling collapses</td>
				</tr>
				<tr>
					<td align="left">11-12</td>
					<td align="left">Ceiling lowers slowly into locked room</td>
				</tr>
				<tr>
					<td align="left">13-14</td>
					<td align="left">Chute opens in floor</td>
				</tr>
				<tr>
					<td align="left">15-16</td>
					<td align="left">Clanging noise attracts nearby monsters</td>
				</tr>
				<tr>
					<td align="left">17-19</td>
					<td align="left">Touching an object triggers a disintegrate spell</td>
				</tr>
				<tr>
					<td align="left">20-23</td>
					<td align="left">Door or other object is coated with contact poison</td>
				</tr>
				<tr>
					<td align="left">24-27</td>
					<td align="left">Fire shoots out from wall, floor, or object</td>
				</tr>
				<tr>
					<td align="left">28-30</td>
					<td align="left">Touching an object triggers a flesh to stone spell</td>
				</tr>
				<tr>
					<td align="left">31-33</td>
					<td align="left">Floor collapses or is an illusion</td>
				</tr>
				<tr>
					<td align="left">34-36</td>
					<td align="left">Vent releases gas: blinding, acidic, obscuring, paralyzing, poisonous, or sleep-inducing</td>
				</tr>
				<tr>
					<td align="left">37-39</td>
					<td align="left">Floor tiles are electrified</td>
				</tr>
				<tr>
					<td align="left">40-43</td>
					<td align="left"><i>Glyph of warding</i></td>
				</tr>
				<tr>
					<td align="left">44-46</td>
					<td align="left">Huge wheeled statue rolls down corridor</td>
				</tr>
				<tr>
					<td align="left">47-49</td>
					<td align="left">Lightning bolt shoots from wall or object</td>
				</tr>
				<tr>
					<td align="left">50-52</td>
					<td align="left">Locked room floods with water or acid</td>
				</tr>
				<tr>
					<td align="left">53-56</td>
					<td align="left">Darts shoot out of an opened chest</td>
				</tr>
				<tr>
					<td align="left">57-59</td>
					<td align="left">A weapon, suit of armor, or rug animates and attacks when touched (see "Animated objects" in the Monster Manual)</td>
				</tr>
				<tr>
					<td align="left">60-62</td>
					<td align="left">Pendulum, either bladed or weighted as a maul, swings across the room or hall</td>
				</tr>
				<tr>
					<td align="left">63-67</td>
					<td align="left">Hidden pit opens beneath characters (25% chance that a black pudding or gelatinous cube fills the bottom of the pit)</td>
				</tr>
				<tr>
					<td align="left">68-70</td>
					<td align="left">Hidden pit floods with acid or fire</td>
				</tr>
				<tr>
					<td align="left">71-73</td>
					<td align="left">Locking pit floods with water</td>
				</tr>
				<tr>
					<td align="left">74-77</td>
					<td align="left">Scything blade emerges from wall or object</td>
				</tr>
				<tr>
					<td align="left">78-81</td>
					<td align="left">Spears (possibly poisoned) spring out</td>
				</tr>
				<tr>
					<td align="left">82-84</td>
					<td align="left">Brittle stairs collapse over spikes</td>
				</tr>
				<tr>
					<td align="left">85-88</td>
					<td align="left"><i>Thunderwave</i> knocks characters into a pit or spikes</td>
				</tr>
				<tr>
					<td align="left">89-91</td>
					<td align="left">Steel or stone jaws restrain a character</td>
				</tr>
				<tr>
					<td align="left">92-94</td>
					<td align="left">Stone block smashes across hallway</td>
				</tr>
				<tr>
					<td align="left">95-97</td>
					<td align="left"><i>Symbol</i></td>
				</tr>
				<tr>
					<td align="left">98-00</td>
					<td align="left">Walls slide together</td>
				</tr>
			</table>
			<br />
			<h2 id="trickobjects">Trick Objects</h2>
			<table>
				<tr>
					<th align="left">d20</th>
					<th align="left">Object</th>
				</tr>
				<tr>
					<td align="left">1</td>
					<td align="left">Book</td>
				</tr>
				<tr>
					<td align="left">2</td>
					<td align="left">Brain preserved in a jar</td>
				</tr>
				<tr>
					<td align="left">3</td>
					<td align="left">Burning fire</td>
				</tr>
				<tr>
					<td align="left">4</td>
					<td align="left">Cracked gem</td>
				</tr>
				<tr>
					<td align="left">5</td>
					<td align="left">Door</td>
				</tr>
				<tr>
					<td align="left">6</td>
					<td align="left">Fresco</td>
				</tr>
				<tr>
					<td align="left">7</td>
					<td align="left">Furniture</td>
				</tr>
				<tr>
					<td align="left">8</td>
					<td align="left">Glass sculpture</td>
				</tr>
				<tr>
					<td align="left">9</td>
					<td align="left">Mushroom field</td>
				</tr>
				<tr>
					<td align="left">10</td>
					<td align="left">Painting</td>
				</tr>
				<tr>
					<td align="left">11</td>
					<td align="left">Plant or tree</td>
				</tr>
				<tr>
					<td align="left">12</td>
					<td align="left">Pool of water</td>
				</tr>
				<tr>
					<td align="left">13</td>
					<td align="left">Runes engraved on wall or floor</td>
				</tr>
				<tr>
					<td align="left">14</td>
					<td align="left">Skull</td>
				</tr>
				<tr>
					<td align="left">15</td>
					<td align="left">Sphere of magical energy</td>
				</tr>
				<tr>
					<td align="left">16</td>
					<td align="left">Statue</td>
				</tr>
				<tr>
					<td align="left">17</td>
					<td align="left">Stone Obelisk</td>
				</tr>
				<tr>
					<td align="left">18</td>
					<td align="left">Suit of armor</td>
				</tr>
				<tr>
					<td align="left">19</td>
					<td align="left">Tapestry or Rug</td>
				</tr>
				<tr>
					<td align="left">20</td>
					<td align="left">Target Dummy</td>
				</tr>
			</table>
			<br />
			<h2 id="trickeffects"></h2>
			<table>
				<tr>
					<th align="left">d100</th>
					<th align="left">Trick Effect</th>
				</tr>
				<tr>
					<td align="left">01-06</td>
					<td align="left">Ages the first person to touch the object</td>
				</tr>
				<tr>
					<td align="left">04-06</td>
					<td align="left">The touched object animates, or it animates other objects nearby</td>
				</tr>
				<tr>
					<td align="left">07-10</td>
					<td align="left">Asks three skill-testing questions (if all three are answered correctly a reward appears)</td>
				</tr>
				<tr>
					<td align="left">11-13</td>
					<td align="left">Bestows resistances or vulnerability</td>
				</tr>
				<tr>
					<td align="left">14-16</td>
					<td align="left">Changes a character's alignment, personality, size, appearance, or sex when touched</td>
				</tr>
				<tr>
					<td align="left">17-19</td>
					<td align="left">Changes one substance into another, such as gold to lead or metal to brittle crystal</td>
				</tr>
				<tr>
					<td align="left">20-22</td>
					<td align="left">Creates a force field</td>
				</tr>
				<tr>
					<td align="left">23-26</td>
					<td align="left">Creates an illusion</td>
				</tr>
				<tr>
					<td align="left">27-29</td>
					<td align="left">Suppresses magic items for a time</td>
				</tr>
				<tr>
					<td align="left">30-32</td>
					<td align="left">Enlarges or reduces characters</td>
				</tr>
				<tr>
					<td align="left">33-35</td>
					<td align="left"><i>>Magic mouth</i> speaks a riddle</td>
				</tr>
				<tr>
					<td align="left">36-38</td>
					<td align="left"><i>Confusion</i> (targets all creatures within 10 ft.)</td>
				</tr>
				<tr>
					<td align="left">39-41</td>
					<td align="left">Gives directions (true or false)</td>
				</tr>
				<tr>
					<td align="left">42-44</td>
					<td align="left">Grants a wish</td>
				</tr>
				<tr>
					<td align="left">45-47</td>
					<td align="left">Flies about to avoid being touched</td>
				</tr>
				<tr>
					<td align="left">48-50</td>
					<td align="left">Casts <i>geas</i> on the characters</td>
				</tr>
				<tr>
					<td align="left">51-53</td>
					<td align="left">Increases, reduces, negates, or reverses gravity</td>
				</tr>
				<tr>
					<td align="left">54-56</td>
					<td align="left">Induces greed</td>
				</tr>
				<tr>
					<td align="left">57-59</td>
					<td align="left">Contains an imprisoned creature</td>
				</tr>
				<tr>
					<td align="left">60-62</td>
					<td align="left">Locks or unlocks exits</td>
				</tr>
				<tr>
					<td align="left">63-65</td>
					<td align="left">Offers a game of chance, with the promise of a reward or valuable information</td>
				</tr>
				<tr>
					<td align="left">66-68</td>
					<td align="left">Helps or harms certain types of creatures</td>
				</tr>
				<tr>
					<td align="left">69-71</td>
					<td align="left">Casts <i>polymorph</i> on the characters (lasts 1 hour)</td>
				</tr>
				<tr>
					<td align="left">72-75</td>
					<td align="left">Presents a puzzle or riddle</td>
				</tr>
				<tr>
					<td align="left">76-78</td>
					<td align="left">Prevents movement</td>
				</tr>
				<tr>
					<td align="left">79-81</td>
					<td align="left">Releases coins, false coins, gems, false gems, a magic item, or a map</td>
				</tr>
				<tr>
					<td align="left">82-84</td>
					<td align="left">Releases, summons, or turns into a monster</td>
				</tr>
				<tr>
					<td align="left">85-87</td>
					<td align="left">Casts <i>suggestion</i> on the characters</td>
				</tr>
				<tr>
					<td align="left">88-90</td>
					<td align="left">Wails loudly when touched</td>
				</tr>
				<tr>
					<td align="left">91-93</td>
					<td align="left">Talks (normal speech, nonsense, poetry and rhymes, singing, spellcasting, or screaming)</td>
				</tr>
				<tr>
					<td align="left">94-97</td>
					<td align="left">Teleports characters to another place</td>
				</tr>
				<tr>
					<td align="left">98-00</td>
					<td align="left">Swaps two or more character's minds</td>
				</tr>
			</table>
			<br />
			<h1 id="madness">Madness Tables</h1>
			<br />
			<h2 id="shortterm">Short-Term Madness</h2>
			<table>
				<tr>
					<th width="9%" align="left">d100</th>
					<th align="left">Effect (lasts 1d10 minutes)<sup>1</sup></th>
				</tr>
				<tr>
					<td align="left">01-20</td>
					<td align="left">The character retreats into his or her mind and becomes <a href="#paralyzed">paralyzed</a>.</td>
				</tr>
				<tr>
					<td align="left">21-30</td>
					<td align="left">The character becomes <a href="#incapacitated">incapacitated</a> and spends the duration screaming, laughing, or weeping.</td>
				</tr>
				<tr>
					<td align="left">31-40</td>
					<td align="left">The character becomes <a href="#frightened">frightened</a> and must use his or her action and movement each round to flee from the source of the fear.</td>
				</tr>
				<tr>
					<td align="left">41-50</td>
					<td align="left">The character begins babbling and is incapable of normal speech or spellcasting.</td>
				</tr>
				<tr>
					<td align="left">51-60</td>
					<td align="left">The character must use his or her action each round to attack the nearest creature.</td>
				</tr>
				<tr>
					<td align="left">61-70</td>
					<td align="left">The character experiences vivid hallucinations and has disadvantage on ability checks.</td>
				</tr>
				<tr>
					<td align="left">71-75</td>
					<td align="left">The character does whatever anyone tells him or her to do that isn't obviously self-destructive.</td>
				</tr>
				<tr>
					<td align="left">76-80</td>
					<td align="left">The character experiences an overpowering urge to eat something strange such as dirt, slime, or offal.</td>
				</tr>
				<tr>
					<td align="left">81-90</td>
					<td align="left">The character is <a href="#stunned">stunned</a></td>
				</tr>
				<tr>
					<td align="left">91-100</td>
					<td align="left">The character falls <a href="#unconscious">unconscious</a></td>
				</tr>
			</table>
			<sup>1</sup> A <i>calm emotions</i> spell can supress the effects of madness, while a <i>lesser restoration</i> spell can rid a character of long-term madness. Depending on the source of the madness, <i>remove curse</i> or <i>dispel evil</i> might also prove effective.
			<br />
			<h2 id="longterm">Long-Term Madness</h2>
			<table>
				<tr>
					<th width="9%" align="left">d100</th>
					<th align="left">Effect (lasts 1d10 x 10 hours)<sup>1</sup></th>
				</tr>
				<tr>
					<td align="left">01-10</td>
					<td align="left">The character feels compelled to repeat a specific activity over and over, such as washing hands, touching things, praying, or counting coins.</td>
				</tr>
				<tr>
					<td align="left">11-20</td>
					<td align="left">The character experiences vivid hallucinations and has disadvantage on ability checks.</td>
				</tr>
				<tr>
					<td align="left">21-30</td>
					<td align="left">The character suffers extreme paranoia. The character has disadvantage on Wisdom and Charisma checks.</td>
				</tr>
				<tr>
					<td align="left">31-40</td>
					<td align="left">The character regards something (usually the source of the madness) with intense revulsion, as if affected by the antipathy effect of the <i>antipathy/sympathy</i> spell.</td>
				</tr>
				<tr>
					<td align="left">41-45</td>
					<td align="left">The character experiences a powerful delusion. Choose a potion. The character imagines that he or she is under its effects.</td>
				</tr>
				<tr>
					<td align="left">46-55</td>
					<td align="left">The character becomes attached to a "Lucky charm," such as a person or an object, and has disadvantage on attack rolls, ability checks, and saving throws while more than 30 feet away from it.</td>
				</tr>
				<tr>
					<td align="left">56-65</td>
					<td align="left">The character is <a href="#blinded">blinded</a> (25%) or <a href="#deafened">deafened</a> (75%).</td>
				</tr>
				<tr>
					<td align="left">66-75</td>
					<td align="left">The character experiences uncontrollable tremors or tics, which imposes disadvantage on attack rolls, ability checks, and saving throws that involve Strength or Dexterity.</td>
				</tr>
				<tr>
					<td align="left">76-85</td>
					<td align="left">The character suffers from partial amnesia. The character knows who he or she is and retains racial traits and class features, but doesn't recognize other people or remember anything that happened before the madness took effect.</td>
				</tr>
				<tr>
					<td align="left">86-90</td>
					<td align="left">Whenever the character takes damage, he or she must succeed on a DC 15 Wisdom saving throw or be affected as though he or she failed a saving throw against the <i>confusion</i> spell. The <i>confusion</i> effect lasts for 1 minute.</td>
				</tr>
				<tr>
					<td align="left">91-95</td>
					<td align="left">The character loses the ability to speak.</td>
				</tr>
				<tr>
					<td align="left">96-100</td>
					<td align="left">The character falls <a href="#unconscious">unconscious</a>. No amount of jostling or damage can wake the character.</td>
				</tr>
			</table>
			<sup>1</sup> A <i>calm emotions</i> spell can supress the effects of madness, while a <i>lesser restoration</i> spell can rid a character of long-term madness. Depending on the source of the madness, <i>remove curse</i> or <i>dispel evil</i> might also prove effective.
			<br />
			<h2 id="indefinite">Indefinite Madness</h2>
			<table>
				<tr>
					<th width="9%" align="left">d100</th>
					<th align="left">Flaw (lasts until cured)<sup>1</sup></th>
				</tr>
				<tr>
					<td align="left">01-15</td>
					<td align="left">"Being drunk keeps me sane"</td>
				</tr>
				<tr>
					<td align="left">16-25</td>
					<td align="left">"I keep whatever I find."</td>
				</tr>
				<tr>
					<td align="left">26-30</td>
					<td align="left">"I try to become more like someone else I know - adopting his or her style or dress, mannerisms, and name."</td>
				</tr>
				<tr>
					<td align="left">31-35</td>
					<td align="left">"I must bend the truth, exaggerate, or outright lie to be interesting to other people."</td>
				</tr>
				<tr>
					<td align="left">36-45</td>
					<td align="left">"Achieving my goal is the only thing of interest to me, and I'll ignore everything else to pursue it."</td>
				</tr>
				<tr>
					<td align="left">46-50</td>
					<td align="left">"I find it hard to care about anything that goes on around me."</td>
				</tr>
				<tr>
					<td align="left">51-55</td>
					<td align="left">"I don't like the way people judge me all the time."</td>
				</tr>
				<tr>
					<td align="left">56-70</td>
					<td align="left">"I am the smartest, wisest, strongest, fastest, and most beautiful person I know."</td>
				</tr>
				<tr>
					<td align="left">71-80</td>
					<td align="left">"I am convinced that powerful enemies are hunting me, and their agents are everywhere I go. I am sure they're watching me all the time."</td>
				</tr>
				<tr>
					<td align="left">81-85</td>
					<td align="left">"There's only one person I can trust. And only I can see this special friend."</td>
				</tr>
				<tr>
					<td align="left">86-95</td>
					<td align="left">"I can't take anything seriously. The more serious the situation, the funnier I find it."</td>
				</tr>
				<tr>
					<td align="left">96-100</td>
					<td align="left">"I've discovered that I really like killing people."</td>
				</tr>
			</table>
			<sup>1</sup> A <i>calm emotions</i> spell can supress the effects of madness. A <i>greater restoration</i> spell or more powerful magic is required to rid a character of indefinite madness.
			<br />
			<h2 id="Baphomet">Madness of Baphomet</h2>
			<table>
				<tr>
					<th align="left" width="9%">d100</th>
					<th align="left">Flaw (lasts until cured)<sup>1</sup></th>
				</tr>
				<tr>
					<td align="left">01-20</td>
					<td align="left">"My anger consumes me. I can't be reasoned with when my rage has been stoked."</td>
				</tr>
				<tr>
					<td align="left">21-40</td>
					<td align="left">"I degenerate into beastly behavior, seeming more like a wild animal than a thinking being."</td>
				</tr>
				<tr>
					<td align="left">41-60</td>
					<td align="left">"The world is my hunting ground. Others are my prey."</td>
				</tr>
				<tr>
					<td align="left">61-80<br></td>
					<td align="left">"Hate comes easily to me and explodes into rage."</td>
				</tr>
				<tr>
					<td align="left">81-00<br></td>
					<td align="left">"I see those who oppose me not as a people, but as beasts meant to be preyed upon."</td>
				</tr>
			</table>
			<sup>1</sup> A <i>calm emotions</i> spell can supress the effects of madness. A <i>greater restoration</i> spell or more powerful magic is required to rid a character of indefinite madness.
			<br />
			<h2 id="Demogorgon">Madness of Demogorgon</h2>
			<table>
				<tr>
					<th align="left" width="9%">d100</th>
					<th align="left">Flaw (lasts until cured)<sup>1</sup></th>
				</tr>
				<tr>
					<td align="left">01-20</td>
					<td align="left">"Someone is plotting to kill me. I need to strike first to stop them."</td>
				</tr>
				<tr>
					<td align="left">21-40</td>
					<td align="left">"There is only one solution to my problems: kill them all!"</td>
				</tr>
				<tr>
					<td align="left">41-60</td>
					<td align="left">"There is more than one mind inside my head."</td>
				</tr>
				<tr>
					<td align="left">61-80<br></td>
					<td align="left">"If you don't agree with me, I'll beat you into submission to get my way."</td>
				</tr>
				<tr>
					<td align="left">81-00<br></td>
					<td align="left">"I can't allow anyone to touch anything that belongs to me. They might try to take it away from me."</td>
				</tr>
			</table>
			<sup>1</sup> A <i>calm emotions</i> spell can supress the effects of madness. A <i>greater restoration</i> spell or more powerful magic is required to rid a character of indefinite madness.
			<br />
			<h2 id="Frazurbluu">Madness of Fraz-Urb'luu</h2>
			<table>
				<tr>
					<th align="left" width="9%">d100</th>
					<th align="left">Flaw (lasts until cured)<sup>1</sup></th>
				</tr>
				<tr>
					<td align="left">01-20</td>
					<td align="left">"I never let anyone know the truth about my actions or intentions, even if doing so would be beneficial to me."</td>
				</tr>
				<tr>
					<td align="left">21-40</td>
					<td align="left">"I have intermittent hallucinations and fits of catatonia."</td>
				</tr>
				<tr>
					<td align="left">41-60</td>
					<td align="left">"My mind wanders as I have elaborate fantasies that have no bearing on reality. When I return my focus to the world, I have a hard time remembering that it was just a daydream."</td>
				</tr>
				<tr>
					<td align="left">61-80<br></td>
					<td align="left">"I convince myself that things are true, even in the face of overwhelming evidence to the contrary."</td>
				</tr>
				<tr>
					<td align="left">81-00<br></td>
					<td align="left">"My perception of reality doesn't match anyone else's. It makes me prone to violent delusions that make no sense to anyone else."</td>
				</tr>
			</table>
			<sup>1</sup> A <i>calm emotions</i> spell can supress the effects of madness. A <i>greater restoration</i> spell or more powerful magic is required to rid a character of indefinite madness.
			<br />
			<h2 id="Graazt">Madness of Graz'zt</h2>
			<table>
				<tr>
					<th align="left" width="9%">d100</th>
					<th align="left">Flaw (lasts until cured)<sup>1</sup></th>
				</tr>
				<tr>
					<td align="left">01-20</td>
					<td align="left">“There is nothing in the world more important than me and my desires."</td>
				</tr>
				<tr>
					<td align="left">21-40</td>
					<td align="left">“Anyone who doesn't do exactly what I say doesn't deserve to live."</td>
				</tr>
				<tr>
					<td align="left">41-60</td>
					<td align="left">"Mine is the path of redemption. Anyone who says otherwise is intentionally misleading you."</td>
				</tr>
				<tr>
					<td align="left">61-80<br></td>
					<td align="left">“I will not rest until I have made someone else mine, and doing so is more Important to me than my own life—or the lives of others."</td>
				</tr>
				<tr>
					<td align="left">81-90</td>
					<td align="left">"My own pleasure is of paramount importance. Everything else, including social graces, is a traviality."</td>
				</tr>
				<tr>
					<td align="left">91-00</td>
					<td align="left">"Anything that can bring me happiness should be enjoyed immediately. There is no point to saving anything pleasurable for later."</td>
				</tr>
			</table>
			<sup>1</sup> A <i>calm emotions</i> spell can supress the effects of madness. A <i>greater restoration</i> spell or more powerful magic is required to rid a character of indefinite madness.
			<br />
			<h2 id="Juiblex">Madness of Juiblex</h2>
			<table>
				<tr>
					<th align="left" width="9%">d100</th>
					<th align="left">Flaw (lasts until cured)<sup>1</sup></th>
				</tr>
				<tr>
					<td align="left">01-20</td>
					<td align="left">"I must consume everything I can!"</td>
				</tr>
				<tr>
					<td align="left">21-40</td>
					<td align="left">"I refuse to part with any of my possessions."</td>
				</tr>
				<tr>
					<td align="left">41-60</td>
					<td align="left">"I'll do everything I can to get others to eat and drink beyond their normal limits."</td>
				</tr>
				<tr>
					<td align="left">61-80<br></td>
					<td align="left">"I must possess as many material goods as I can."</td>
				</tr>
				<tr>
					<td align="left">81-00</td>
					<td align="left">"My personality is irrelevant. I am defined by what I consume."</td>
				</tr>
			</table>
			<sup>1</sup> A <i>calm emotions</i> spell can supress the effects of madness. A <i>greater restoration</i> spell or more powerful magic is required to rid a character of indefinite madness.
			<br />
			<h2 id="Orcus">Madness of Orcus</h2>
			<table>
				<tr>
					<th align="left" width="9%">d100</th>
					<th align="left">Flaw (lasts until cured)<sup>1</sup></th>
				</tr>
				<tr>
					<td align="left">01-20</td>
					<td align="left">"I often become withdrawn and moody, dwelling on the insufferable state of life."</td>
				</tr>
				<tr>
					<td align="left">21-40</td>
					<td align="left">"I am compelled to make the weak suffer."</td>
				</tr>
				<tr>
					<td align="left">41-60</td>
					<td align="left">"I have no compunction against tampering with the dead in my search to better understand death."</td>
				</tr>
				<tr>
					<td align="left">61-80<br></td>
					<td align="left">"I want to achieve the everlasting existence of undeath."</td>
				</tr>
				<tr>
					<td align="left">81-00</td>
					<td align="left">"I am awash in the awareness of life's futility."</td>
				</tr>
			</table>
			<sup>1</sup> A <i>calm emotions</i> spell can supress the effects of madness. A <i>greater restoration</i> spell or more powerful magic is required to rid a character of indefinite madness.
			<br />
			<h2 id="Yeenoghu">Madness of Yeenogu</h2>
			<table>
				<tr>
					<th align="left" width="9%">d100</th>
					<th align="left">Flaw (lasts until cured)<sup>1</sup></th>
				</tr>
				<tr>
					<td align="left">01-20</td>
					<td align="left">"I get caught up in the flow of anger, and try to stoke others around me into forming an angry mob."</td>
				</tr>
				<tr>
					<td align="left">21-40</td>
					<td align="left">"The flesh of other intelligent creatures is delicious!"</td>
				</tr>
				<tr>
					<td align="left">41-60</td>
					<td align="left">"I rail against the laws and customs of civilization, attempting to return to a more primitive time."</td>
				</tr>
				<tr>
					<td align="left">61-80<br></td>
					<td align="left">"I hunger for the deaths for others, and am constantly starting fights in the hope of seeing bloodshed."</td>
				</tr>
				<tr>
					<td align="left">81-00</td>
					<td align="left">"I keep trophies from the bodies I have slain, turning them into adornments."</td>
				</tr>
			</table>
			<sup>1</sup> A <i>calm emotions</i> spell can supress the effects of madness. A <i>greater restoration</i> spell or more powerful magic is required to rid a character of indefinite madness.
			<br />
			<h2 id="Zuggtmoy">Madness of Zuggtmoy</h2>
			<table>
				<tr>
					<th align="left" width="9%">d100</th>
					<th align="left">Flaw (lasts until cured)<sup>1</sup></th>
				</tr>
				<tr>
					<td align="left">01-20</td>
					<td align="left">"I see visions in the world around me that others do not."</td>
				</tr>
				<tr>
					<td align="left">21-40</td>
					<td align="left">"I periodically slip into a catatonic state, staring off into the distance for long stretches at a time." </td>
				</tr>
				<tr>
					<td align="left">41-60</td>
					<td align="left">"I see an altered version of reality, with my mind convincing itself that things are true even in the face of overwhelming evidence to the contrary."</td>
				</tr>
				<tr>
					<td align="left">61-80<br></td>
					<td align="left">"My mind is slipping away, and my intelligence seems to wax and wane."</td>
				</tr>
				<tr>
					<td align="left">81-00</td>
					<td align="left">"I am constantly scratching at unseen fungal infections."</td>
				</tr>
			</table>
			<sup>1</sup> A <i>calm emotions</i> spell can supress the effects of madness. A <i>greater restoration</i> spell or more powerful magic is required to rid a character of indefinite madness.
			<br />
			<h1 id="dungeondressing">Dungeon Dressing</h1>
			<br />
			<h2 id="dungeonnoises">Noises</h2>
			<table>
				<tr>
					<th align="left">d100</th>
					<th align="left">Effect</th>
				</tr>
				<tr>
					<td align="left">01-05</td>
					<td align="left">Bang or slam</td>
				</tr>
				<tr>
					<td align="left">06</td>
					<td align="left">Bellowing</td>
				</tr>
				<tr>
					<td align="left">07</td>
					<td align="left">Buzzing</td>
				</tr>
				<tr>
					<td align="left">08-10</td>
					<td align="left">Chanting</td>
				</tr>
				<tr>
					<td align="left">11</td>
					<td align="left">Chiming</td>
				</tr>
				<tr>
					<td align="left">12</td>
					<td align="left">Chirping</td>
				</tr>
				<tr>
					<td align="left">13</td>
					<td align="left">Clanking</td>
				</tr>
				<tr>
					<td align="left">14</td>
					<td align="left">Clashing</td>
				</tr>
				<tr>
					<td align="left">15</td>
					<td align="left">Clicking</td>
				</tr>
				<tr>
					<td align="left">16</td>
					<td align="left">Coughing</td>
				</tr>
				<tr>
					<td align="left">17-18</td>
					<td align="left">Creaking</td>
				</tr>
				<tr>
					<td align="left">19</td>
					<td align="left">Drumming</td>
				</tr>
				<tr>
					<td align="left">20-23</td>
					<td align="left">Footsteps ahead</td>
				</tr>
				<tr>
					<td align="left">24-26</td>
					<td align="left">Footsteps approaching</td>
				</tr>
				<tr>
					<td align="left">27-29</td>
					<td align="left">Footsteps behind</td>
				</tr>
				<tr>
					<td align="left">30-31</td>
					<td align="left">Footsteps receding</td>
				</tr>
				<tr>
					<td align="left">32-33</td>
					<td align="left">Footsteps to the side</td>
				</tr>
				<tr>
					<td align="left">34-35</td>
					<td align="left">Giggling (faint)</td>
				</tr>
				<tr>
					<td align="left">36</td>
					<td align="left">Gong</td>
				</tr>
				<tr>
					<td align="left">37-39</td>
					<td align="left">Grating</td>
				</tr>
				<tr>
					<td align="left">40-41</td>
					<td align="left">Groaning</td>
				</tr>
				<tr>
					<td align="left">42</td>
					<td align="left">Grunting</td>
				</tr>
				<tr>
					<td align="left">43-44</td>
					<td align="left">Hissing</td>
				</tr>
				<tr>
					<td align="left">45</td>
					<td align="left">Horn or trumpet sounding</td>
				</tr>
				<tr>
					<td align="left">46</td>
					<td align="left">Howling</td>
				</tr>
				<tr>
					<td align="left">47-48</td>
					<td align="left">Humming</td>
				</tr>
				<tr>
					<td align="left">49</td>
					<td align="left">Jingling</td>
				</tr>
				<tr>
					<td align="left">50-53</td>
					<td align="left">knocking</td>
				</tr>
				<tr>
					<td align="left">54-55</td>
					<td align="left">Laughter</td>
				</tr>
				<tr>
					<td align="left">56-57</td>
					<td align="left">Moaning</td>
				</tr>
				<tr>
					<td align="left">58-60</td>
					<td align="left">Murmuring</td>
				</tr>
				<tr>
					<td align="left">61-62</td>
					<td align="left">Music</td>
				</tr>
				<tr>
					<td align="left">63</td>
					<td align="left">Rattling</td>
				</tr>
				<tr>
					<td align="left">64</td>
					<td align="left">Ringing</td>
				</tr>
				<tr>
					<td align="left">65-687</td>
					<td align="left">Rustling</td>
				</tr>
				<tr>
					<td align="left">69-72</td>
					<td align="left">Scratching or scrabbling</td>
				</tr>
				<tr>
					<td align="left">73-74</td>
					<td align="left">Screaming</td>
				</tr>
				<tr>
					<td align="left">75-77</td>
					<td align="left">Scuttling</td>
				</tr>
				<tr>
					<td align="left">78</td>
					<td align="left">Shuffling</td>
				</tr>
				<tr>
					<td align="left">79-80</td>
					<td align="left">Slithering</td>
				</tr>
				<tr>
					<td align="left">81</td>
					<td align="left">Snapping</td>
				</tr>
				<tr>
					<td align="left">82</td>
					<td align="left">Sneezing</td>
				</tr>
				<tr>
					<td align="left">83</td>
					<td align="left">Sobbing</td>
				</tr>
				<tr>
					<td align="left">84</td>
					<td align="left">Splashing</td>
				</tr>
				<tr>
					<td align="left">85</td>
					<td align="left">Splintering</td>
				</tr>
				<tr>
					<td align="left">86-87</td>
					<td align="left">Squeaking</td>
				</tr>
				<tr>
					<td align="left">88</td>
					<td align="left">Squealing</td>
				</tr>
				<tr>
					<td align="left">89-90</td>
					<td align="left">Tapping</td>
				</tr>
				<tr>
					<td align="left">91-92</td>
					<td align="left">Thud</td>
				</tr>
				<tr>
					<td align="left">93-94</td>
					<td align="left">Thumping</td>
				</tr>
				<tr>
					<td align="left">95</td>
					<td align="left">Tinkling</td>
				</tr>
				<tr>
					<td align="left">96</td>
					<td align="left">Twanging</td>
				</tr>
				<tr>
					<td align="left">97</td>
					<td align="left">Whining</td>
				</tr>
				<tr>
					<td align="left">98</td>
					<td align="left">Whispering</td>
				</tr>
				<tr>
					<td align="left">99-00</td>
					<td align="left">Whistling</td>
				</tr>
			</table>
			<br />
			<h2 id="dungeonair">Air</h2>
			<table>
				<tr>
				<th align="left">d100</th>
				<th align="left">Effect</th>
				</tr>
				<tr>
					<td align="left">01-60</td>
					<td align="left">Clear and damp</td>
				</tr>
				<tr>
					<td align="left">61-70</td>
					<td align="left">Clear and drafty</td>
				</tr>
				<tr>
					<td align="left">71-80</td>
					<td align="left">Clear but cold</td>
				</tr>
				<tr>
					<td align="left">81-83</td>
					<td align="left">Foggy or misty and cold</td>
				</tr>
				<tr>
					<td align="left">84-85</td>
					<td align="left">Clear, with mist covering floor</td>
				</tr>
				<tr>
					<td align="left">86-90</td>
					<td align="left">Clear and warm</td>
				</tr>
				<tr>
					<td align="left">91-93</td>
					<td align="left">Hazy and humid</td>
				</tr>
				<tr>
					<td align="left">95-96</td>
					<td align="left">Smoky or steamy</td>
				</tr>
				<tr>
					<td align="left">97-98</td>
					<td align="left">Clear, with smoke covering ceiling</td>
				</tr>
				<tr>
					<td align="left">99-00</td>
					<td align="left">Cleary and windy</td>
				</tr>
			</table>
			<br />
			<h2 id="dungeonodor">Odor</h2>
			<table>
			<tr>
				<th align="left">d100</th>
				<th align="left">Effect</th>
				</tr>
				<tr>
					<td align="left">01-03</td>
					<td align="left">Acrid</td>
				</tr>
				<tr>
					<td align="left">04-05</td>
					<td align="left">Chlorine</td>
				</tr>
				<tr>
					<td align="left">06-39</td>
					<td align="left">Dank or moldy</td>
				</tr>
				<tr>
					<td align="left">40-49</td>
					<td align="left">Earthy</td>
				</tr>
				<tr>
					<td align="left">50-57</td>
					<td align="left">Manure</td>
				</tr>
				<tr>
					<td align="left">58-61</td>
					<td align="left">Metallic</td>
				</tr>
				<tr>
					<td align="left">62-65</td>
					<td align="left">Ozone</td>
				</tr>
				<tr>
					<td align="left">66-70</td>
					<td align="left">Putrid</td>
				</tr>
				<tr>
					<td align="left">71-75</td>
					<td align="left">Rotting vegetation</td>
				</tr>
				<tr>
					<td align="left">76-77</td>
					<td align="left">Salty and wet</td>
				</tr>
				<tr>
					<td align="left">78-82</td>
					<td align="left">Smoky</td>
				</tr>
				<tr>
					<td align="left">83-89</td>
					<td align="left">Stale</td>
				</tr>
				<tr>
					<td align="left">90-95</td>
					<td align="left">Sulfurous</td>
				</tr>
				<tr>
					<td align="left">96-00</td>
					<td align="left">Urine</td>
				</tr>
			</table>
			<br />
			<h2 id="dungeongeneralfeatures">General Features</h2>
			<table>
				<tr>
					<th align="left">d100</th>
					<th align="left">Item</th>
				</tr>
				<tr>
					<td align="left">01</td>
					<td align="left">Arrow, broken</td>
				</tr>
				<tr>
					<td align="left">02-04</td>
					<td align="left">Ashes</td>
				</tr>
				<tr>
					<td align="left">05-06</td>
					<td align="left">Bones</td>
				</tr>
				<tr>
					<td align="left">07</td>
					<td align="left">Bottle, broken</td>
				</tr>
				<tr>
					<td align="left">08</td>
					<td align="left">Chain, corroded</td>
				</tr>
				<tr>
					<td align="left">09</td>
					<td align="left">Club, splintered</td>
				</tr>
				<tr>
					<td align="left">10-019</td>
					<td align="left">Cobwebs</td>
				</tr>
				<tr>
					<td align="left">20</td>
					<td align="left">Coin, copper</td>
				</tr>
				<tr>
					<td align="left">21-22</td>
					<td align="left">Cracks, ceiling</td>
				</tr>
				<tr>
					<td align="left">23-24</td>
					<td align="left">Cracks, floor</td>
				</tr>
				<tr>
					<td align="left">25-26</td>
					<td align="left">Cracks, wall</td>
				</tr>
				<tr>
					<td align="left">27</td>
					<td align="left">Dagger hilt</td>
				</tr>
				<tr>
					<td align="left">28-29</td>
					<td align="left">Damp ceiling</td>
				</tr>
				<tr>
					<td align="left">30-33</td>
					<td align="left">Dampness, wall</td>
				</tr>
				<tr>
					<td align="left">34</td>
					<td align="left">Dried blood</td>
				</tr>
				<tr>
					<td align="left">35-41</td>
					<td align="left">Dripping blood</td>
				</tr>
				<tr>
					<td align="left">42-44</td>
					<td align="left">Dung</td>
				</tr>
				<tr>
					<td align="left">45-49</td>
					<td align="left">Dust</td>
				</tr>
				<tr>
					<td align="left">50</td>
					<td align="left">Flask, cracked</td>
				</tr>
				<tr>
					<td align="left">51</td>
					<td align="left">Food scraps</td>
				</tr>
				<tr>
					<td align="left">52</td>
					<td align="left">Fungi (common)</td>
				</tr>
				<tr>
					<td align="left">53-55</td>
					<td align="left">guano</td>
				</tr>
				<tr>
					<td align="left">56</td>
					<td align="left">hair or fur</td>
				</tr>
				<tr>
					<td align="left">57</td>
					<td align="left">Hammer head, cracked</td>
				</tr>
				<tr>
					<td align="left">58</td>
					<td align="left">Helmet, badly dented</td>
				</tr>
				<tr>
					<td align="left">59</td>
					<td align="left">Iron bar, bent and rusted</td>
				</tr>
				<tr>
					<td align="left">60</td>
					<td align="left">Javelin head, blunt</td>
				</tr>
				<tr>
					<td align="left">61</td>
					<td align="left">Leather boot</td>
				</tr>
				<tr>
					<td align="left">62-64</td>
					<td align="left">Leaves and twigs</td>
				</tr>
				<tr>
					<td align="left">65-68</td>
					<td align="left">Mold (common)</td>
				</tr>
				<tr>
					<td align="left">69</td>
					<td align="left">Pick handle</td>
				</tr>
				<tr>
					<td align="left">70</td>
					<td align="left">Pole, broken (5 ft. long)</td>
				</tr>
				<tr>
					<td align="left">71</td>
					<td align="left">Pottery shards</td>
				</tr>
				<tr>
					<td align="left">72-73</td>
					<td align="left">Rags</td>
				</tr>
				<tr>
					<td align="left">74</td>
					<td align="left">Rope, rotten</td>
				</tr>
				<tr>
					<td align="left">75-76</td>
					<td align="left">Rubble and dirt</td>
				</tr>
				<tr>
					<td align="left">77</td>
					<td align="left">Sack, torn</td>
				</tr>
				<tr>
					<td align="left">78-80</td>
					<td align="left">Slime (harmless)</td>
				</tr>
				<tr>
					<td align="left">81</td>
					<td align="left">Spike, rusted</td>
				</tr>
				<tr>
					<td align="left">82-83</td>
					<td align="left">Sticks</td>
				</tr>
				<tr>
					<td align="left">84</td>
					<td align="left">Stones, small</td>
				</tr>
				<tr>
					<td align="left">85</td>
					<td align="left">Straw</td>
				</tr>
				<tr>
					<td align="left">86</td>
					<td align="left">Sword blade, broken</td>
				</tr>
				<tr>
					<td align="left">87</td>
					<td align="left">Teeth or fangs, scattered</td>
				</tr>
				<tr>
					<td align="left">88</td>
					<td align="left">Torch stub</td>
				</tr>
				<tr>
					<td align="left">89</td>
					<td align="left">Wall Scratching</td>
				</tr>
				<tr>
					<td align="left">90-91</td>
					<td align="left">Water, large puddle</td>
				</tr>
				<tr>
					<td align="left">92-93</td>
					<td align="left">Water, small puddle</td>
				</tr>
				<tr>
					<td align="left">94-95</td>
					<td align="left">Water, trickle</td>
				</tr>
				<tr>
					<td align="left">96</td>
					<td align="left">Wax blob (candle stub)</td>
				</tr>
				<tr>
					<td align="left">97</td>
					<td align="left">Wax drippings</td>
				</tr>
				<tr>
					<td align="left">98-00</td>
					<td align="left">Wood pieces, rotting</td>
				</tr>
			</table>
			<br />
			<h2 id="dungeongeneralfurnishing">General Furnishing</h2>
			<table>
				<tr>
				<th>d100</th>
				<th>Item</th>
				</tr>
				<tr>
					<td align="left">01</td>
					<td align="left">Altar</td>
				</tr>
				<tr>
					<td align="left">02</td>
					<td align="left">Armchair</td>
				</tr>
				<tr>
					<td align="left">03</td>
					<td align="left">Armoire</td>
				</tr>
				<tr>
					<td align="left">04</td>
					<td align="left">Arras or curtain</td>
				</tr>
				<tr>
					<td align="left">05</td>
					<td align="left">Bag</td>
				</tr>
				<tr>
					<td align="left">06</td>
					<td align="left">Barrel (40 gallon)</td>
				</tr>
				<tr>
					<td align="left">07-08</td>
					<td align="left">Bed</td>
				</tr>
				<tr>
					<td align="left">09</td>
					<td align="left">Bench</td>
				</tr>
				<tr>
					<td align="left">10</td>
					<td align="left">Blanket</td>
				</tr>
				<tr>
					<td align="left">11</td>
					<td align="left">Box (large)</td>
				</tr>
				<tr>
					<td align="left">12</td>
					<td align="left">Brazier and charcoal</td>
				</tr>
				<tr>
					<td align="left">13</td>
					<td align="left">Bucket</td>
				</tr>
				<tr>
					<td align="left">14</td>
					<td align="left">Buffet cabinet</td>
				</tr>
				<tr>
					<td align="left">15</td>
					<td align="left">Bunks</td>
				</tr>
				<tr>
					<td align="left">16</td>
					<td align="left">Butt (huge cask, 125 gallons)</td>
				</tr>
				<tr>
					<td align="left">17</td>
					<td align="left">Cabinet</td>
				</tr>
				<tr>
					<td align="left">18</td>
					<td align="left">Candelabrum</td>
				</tr>
				<tr>
					<td align="left">19</td>
					<td align="left">Carpet (large)</td>
				</tr>
				<tr>
					<td align="left">20</td>
					<td align="left">Cask (40 gallons)</td>
				</tr>
				<tr>
					<td align="left">21</td>
					<td align="left">Chandelier</td>
				</tr>
				<tr>
					<td align="left">22</td>
					<td align="left">Charcoal</td>
				</tr>
				<tr>
					<td align="left">23-24</td>
					<td align="left">Chair, plain</td>
				</tr>
				<tr>
					<td align="left">25</td>
					<td align="left">Chair, padded</td>
				</tr>
				<tr>
					<td align="left">26</td>
					<td align="left">Chair, padded, or divan</td>
				</tr>
				<tr>
					<td align="left">27</td>
					<td align="left">Chest, large</td>
				</tr>
				<tr>
					<td align="left">28</td>
					<td align="left">Chest, medium</td>
				</tr>
				<tr>
					<td align="left">29</td>
					<td align="left">Chest of drawers</td>
				</tr>
				<tr>
					<td align="left">30</td>
					<td align="left">Closet (wardrobe)</td>
				</tr>
				<tr>
					<td align="left">31</td>
					<td align="left">Coal</td>
				</tr>
				<tr>
					<td align="left">32-33</td>
					<td align="left">Couch</td>
				</tr>
				<tr>
					<td align="left">34</td>
					<td align="left">Crate</td>
				</tr>
				<tr>
					<td align="left">35</td>
					<td align="left">Cresset</td>
				</tr>
				<tr>
					<td align="left">36</td>
					<td align="left">Cupboard</td>
				</tr>
				<tr>
					<td align="left">37</td>
					<td align="left">Cushion</td>
				</tr>
				<tr>
					<td align="left">38</td>
					<td align="left">Dais</td>
				</tr>
				<tr>
					<td align="left">39</td>
					<td align="left">Desk</td>
				</tr>
				<tr>
					<td align="left">40-42</td>
					<td align="left">Fireplace and wood</td>
				</tr>
				<tr>
					<td align="left">43</td>
					<td align="left">Fireplace with mantle</td>
				</tr>
				<tr>
					<td align="left">44</td>
					<td align="left">Firkin (small cask, 10 gallons)</td>
				</tr>
				<tr>
					<td align="left">45</td>
					<td align="left">Fountain</td>
				</tr>
				<tr>
					<td align="left">46</td>
					<td align="left">Fresco</td>
				</tr>
				<tr>
					<td align="left">47</td>
					<td align="left">Grindstone</td>
				</tr>
				<tr>
					<td align="left">48</td>
					<td align="left">Hamper</td>
				</tr>
				<tr>
					<td align="left">49</td>
					<td align="left">Hassock</td>
				</tr>
				<tr>
					<td align="left">50</td>
					<td align="left">Hogshead (large cask, 65 gallons)</td>
				</tr>
				<tr>
					<td align="left">51</td>
					<td align="left">Idol (large)</td>
				</tr>
				<tr>
					<td align="left">52</td>
					<td align="left">Keg (small barrel, 20 gallons)</td>
				</tr>
				<tr>
					<td align="left">53</td>
					<td align="left">Loom</td>
				</tr>
				<tr>
					<td align="left">54</td>
					<td align="left">Mat</td>
				</tr>
				<tr>
					<td align="left">55</td>
					<td align="left">Mattress</td>
				</tr>
				<tr>
					<td align="left">56</td>
					<td align="left">Pail</td>
				</tr>
				<tr>
					<td align="left">57</td>
					<td align="left">Painting</td>
				</tr>
				<tr>
					<td align="left">58-60</td>
					<td align="left">Pallet</td>
				</tr>
				<tr>
					<td align="left">61</td>
					<td align="left">Pedestal</td>
				</tr>
				<tr>
					<td align="left">62-64</td>
					<td align="left">Pegs</td>
				</tr>
				<tr>
					<td align="left">65</td>
					<td align="left">Pillow</td>
				</tr>
				<tr>
					<td align="left">66</td>
					<td align="left">Pipe (large cask, 105 gallons)</td>
				</tr>
				<tr>
					<td align="left">67</td>
					<td align="left">Quilt</td>
				</tr>
				<tr>
					<td align="left">68-70</td>
					<td align="left">Rug (small or medium)</td>
				</tr>
				<tr>
					<td align="left">71</td>
					<td align="left">Rushes</td>
				</tr>
				<tr>
					<td align="left">72</td>
					<td align="left">Sack</td>
				</tr>
				<tr>
					<td align="left">73</td>
					<td align="left">Sconce</td>
				</tr>
				<tr>
					<td align="left">74</td>
					<td align="left">Screen</td>
				</tr>
				<tr>
					<td align="left">75</td>
					<td align="left">Sheet</td>
				</tr>
				<tr>
					<td align="left">76-77</td>
					<td align="left">Shelf</td>
				</tr>
				<tr>
					<td align="left">78</td>
					<td align="left">Shrine</td>
				</tr>
				<tr>
					<td align="left">79</td>
					<td align="left">Sideboard</td>
				</tr>
				<tr>
					<td align="left">80</td>
					<td align="left">Sofa</td>
				</tr>
				<tr>
					<td align="left">81</td>
					<td align="left">Staff, normal</td>
				</tr>
				<tr>
					<td align="left">82</td>
					<td align="left">Stand</td>
				</tr>
				<tr>
					<td align="left">83</td>
					<td align="left">Statue</td>
				</tr>
				<tr>
					<td align="left">84</td>
					<td align="left">Stool, high</td>
				</tr>
				<tr>
					<td align="left">85</td>
					<td align="left">Stool, normal</td>
				</tr>
				<tr>
					<td align="left">86</td>
					<td align="left">Table, large</td>
				</tr>
				<tr>
					<td align="left">87</td>
					<td align="left">Table, long</td>
				</tr>
				<tr>
					<td align="left">88</td>
					<td align="left">Table, low</td>
				</tr>
				<tr>
					<td align="left">89</td>
					<td align="left">Table, round</td>
				</tr>
				<tr>
					<td align="left">90</td>
					<td align="left">Table, small</td>
				</tr>
				<tr>
					<td align="left">91</td>
					<td align="left">Table, trestle</td>
				</tr>
				<tr>
					<td align="left">92</td>
					<td align="left">Tapestry</td>
				</tr>
				<tr>
					<td align="left">93</td>
					<td align="left">Throne</td>
				</tr>
				<tr>
					<td align="left">94</td>
					<td align="left">Trunk</td>
				</tr>
				<tr>
					<td align="left">95</td>
					<td align="left">Tub</td>
				</tr>
				<tr>
					<td align="left">96</td>
					<td align="left">Tun (huge cask, 250 gallons)</td>
				</tr>
				<tr>
					<td align="left">97</td>
					<td align="left">Urn</td>
				</tr>
				<tr>
					<td align="left">98</td>
					<td align="left">Wall basin and font</td>
				</tr>
				<tr>
					<td align="left">99</td>
					<td align="left">Wood billets</td>
				</tr>
				<tr>
					<td align="left">00</td>
					<td align="left">Workbench</td>
				</tr>
			</table>
			<br />
			<h2 id="dungeonreligiousarticles">Religious Articles and Furnishings</h2>
			<table>
				<tr>
				<th align="left">d100</th>
				<th align="left">Item</th>
				</tr>
				<tr>
					<td align="left">01-05</td>
					<td align="left">Altar</td>
				</tr>
				<tr>
					<td align="left">06-08</td>
					<td align="left">Bells</td>
				</tr>
				<tr>
					<td align="left">09-11</td>
					<td align="left">Brazier</td>
				</tr>
				<tr>
					<td align="left">12</td>
					<td align="left">Candelabra</td>
				</tr>
				<tr>
					<td align="left">13-14</td>
					<td align="left">Candles</td>
				</tr>
				<tr>
					<td align="left">15</td>
					<td align="left">Candlesticks</td>
				</tr>
				<tr>
					<td align="left">16</td>
					<td align="left">Cassocks</td>
				</tr>
				<tr>
					<td align="left">17</td>
					<td align="left">Chimes</td>
				</tr>
				<tr>
					<td align="left">18-19</td>
					<td align="left">Cloth, altar</td>
				</tr>
				<tr>
					<td align="left">20-23</td>
					<td align="left">Columns or pillars</td>
				</tr>
				<tr>
					<td align="left">24</td>
					<td align="left">Curtain or tapestry</td>
				</tr>
				<tr>
					<td align="left">25</td>
					<td align="left">Drum</td>
				</tr>
				<tr>
					<td align="left">26-27</td>
					<td align="left">Font</td>
				</tr>
				<tr>
					<td align="left">28-29</td>
					<td align="left">Gong</td>
				</tr>
				<tr>
					<td align="left">30-35</td>
					<td align="left">Holy or unholy symbol</td>
				</tr>
				<tr>
					<td align="left">36-37</td>
					<td align="left">Holy or unholy writings</td>
				</tr>
				<tr>
					<td align="left">38-43</td>
					<td align="left">Idol</td>
				</tr>
				<tr>
					<td align="left">44-48</td>
					<td align="left">Incense Burner</td>
				</tr>
				<tr>
					<td align="left">49</td>
					<td align="left">Kneeling bench</td>
				</tr>
				<tr>
					<td align="left">50-53</td>
					<td align="left">Lamp</td>
				</tr>
				<tr>
					<td align="left">54</td>
					<td align="left">Lectern</td>
				</tr>
				<tr>
					<td align="left">55</td>
					<td align="left">Mosaic</td>
				</tr>
				<tr>
					<td align="left">56-58</td>
					<td align="left">Offertory container</td>
				</tr>
				<tr>
					<td align="left">59</td>
					<td align="left">Paintings or frescoes</td>
				</tr>
				<tr>
					<td align="left">60-61</td>
					<td align="left">Pews</td>
				</tr>
				<tr>
					<td align="left">62</td>
					<td align="left">Pipes, musical</td>
				</tr>
				<tr>
					<td align="left">63</td>
					<td align="left">Prayer rug</td>
				</tr>
				<tr>
					<td align="left">64</td>
					<td align="left">Pulpit</td>
				</tr>
				<tr>
					<td align="left">65</td>
					<td align="left">Rail</td>
				</tr>
				<tr>
					<td align="left">66-69</td>
					<td align="left">Robes</td>
				</tr>
				<tr>
					<td align="left">70-71</td>
					<td align="left">Screen</td>
				</tr>
				<tr>
					<td align="left">72-76</td>
					<td align="left">Shrine</td>
				</tr>
				<tr>
					<td align="left">77</td>
					<td align="left">Side chairs</td>
				</tr>
				<tr>
					<td align="left">78-79</td>
					<td align="left">Stand</td>
				</tr>
				<tr>
					<td align="left">80-82</td>
					<td align="left">Statue</td>
				</tr>
				<tr>
					<td align="left">83</td>
					<td align="left">Throne</td>
				</tr>
				<tr>
					<td align="left">84-85</td>
					<td align="left">Thurible</td>
				</tr>
				<tr>
					<td align="left">86-90</td>
					<td align="left">Tripod</td>
				</tr>
				<tr>
					<td align="left">91-97</td>
					<td align="left">Vestments</td>
				</tr>
				<tr>
					<td align="left">98-99</td>
					<td align="left">Votive light</td>
				</tr>
				<tr>
					<td align="left">00</td>
					<td align="left">Whistle</td>
				</tr>
			</table>
			<br />
			<h2 id="dungeonmagefurnishings">Mage Furnishings</h2>
			<table>
				<tr>
					<th align="left">d100</th>
					<th align="left">Item</th>
				</tr>
				<tr>
					<td  align="left">01-03</td>
					<td  align="left">Alembic</td>
				</tr>
				<tr>
					<td  align="left">04-05</td>
					<td  align="left">Balance and weights</td>
				</tr>
				<tr>
					<td  align="left">06-09</td>
					<td  align="left">Beaker</td>
				</tr>
				<tr>
					<td  align="left">10</td>
					<td  align="left">Bellows</td>
				</tr>
				<tr>
					<td  align="left">11-14</td>
					<td  align="left">Book</td>
				</tr>
				<tr>
					<td  align="left">15-16</td>
					<td  align="left">Bottle</td>
				</tr>
				<tr>
					<td  align="left">17</td>
					<td  align="left">Bowl</td>
				</tr>
				<tr>
					<td  align="left">18</td>
					<td  align="left">Box</td>
				</tr>
				<tr>
					<td  align="left">19-22</td>
					<td  align="left">Brazier</td>
				</tr>
				<tr>
					<td  align="left">23</td>
					<td  align="left">Cage</td>
				</tr>
				<tr>
					<td  align="left">24</td>
					<td  align="left">Candle</td>
				</tr>
				<tr>
					<td  align="left">25-26</td>
					<td  align="left">Candlestick</td>
				</tr>
				<tr>
					<td  align="left">27-28</td>
					<td  align="left">Cauldron</td>
				</tr>
				<tr>
					<td  align="left">29-30</td>
					<td  align="left">Chalk</td>
				</tr>
				<tr>
					<td  align="left">31-32</td>
					<td  align="left">Crucible</td>
				</tr>
				<tr>
					<td  align="left">33</td>
					<td  align="left">Crystal ball</td>
				</tr>
				<tr>
					<td  align="left">34</td>
					<td  align="left">Decanter</td>
				</tr>
				<tr>
					<td  align="left">35</td>
					<td  align="left">Desk</td>
				</tr>
				<tr>
					<td  align="left">36</td>
					<td  align="left">Dish</td>
				</tr>
				<tr>
					<td  align="left">37-40</td>
					<td  align="left">Flask or jar</td>
				</tr>
				<tr>
					<td  align="left">41</td>
					<td  align="left">Funnel</td>
				</tr>
				<tr>
					<td  align="left">42</td>
					<td  align="left">Furnace</td>
				</tr>
				<tr>
					<td  align="left">43-44</td>
					<td  align="left">Herbs</td>
				</tr>
				<tr>
					<td  align="left">45</td>
					<td  align="left">Horn</td>
				</tr>
				<tr>
					<td  align="left">46-17</td>
					<td  align="left">Hourglass</td>
				</tr>
				<tr>
					<td  align="left">48-49</td>
					<td  align="left">Jug</td>
				</tr>
				<tr>
					<td  align="left">50</td>
					<td  align="left">Kettle</td>
				</tr>
				<tr>
					<td  align="left">51</td>
					<td  align="left">Ladle</td>
				</tr>
				<tr>
					<td  align="left">52</td>
					<td  align="left">Lamp or lantern</td>
				</tr>
				<tr>
					<td  align="left">53</td>
					<td  align="left">Lens (concave or convex)</td>
				</tr>
				<tr>
					<td  align="left">54</td>
					<td  align="left">Magic circle</td>
				</tr>
				<tr>
					<td  align="left">55</td>
					<td  align="left">Mortar and pestle</td>
				</tr>
				<tr>
					<td  align="left">56</td>
					<td  align="left">Pan</td>
				</tr>
				<tr>
					<td  align="left">57-58</td>
					<td  align="left">Parchment</td>
				</tr>
				<tr>
					<td  align="left">59</td>
					<td  align="left">Pentacle</td>
				</tr>
				<tr>
					<td  align="left">60</td>
					<td  align="left">Pentagram</td>
				</tr>
				<tr>
					<td  align="left">61</td>
					<td  align="left">Pipe, smoking</td>
				</tr>
				<tr>
					<td  align="left">62</td>
					<td  align="left">Pot</td>
				</tr>
				<tr>
					<td  align="left">63</td>
					<td  align="left">Prism</td>
				</tr>
				<tr>
					<td  align="left">64-65</td>
					<td  align="left">Quill</td>
				</tr>
				<tr>
					<td  align="left">66-68</td>
					<td  align="left">Retort</td>
				</tr>
				<tr>
					<td  align="left">69</td>
					<td  align="left">Rod, mixing or stirring</td>
				</tr>
				<tr>
					<td  align="left">70-72</td>
					<td  align="left">Scroll</td>
				</tr>
				<tr>
					<td  align="left">73</td>
					<td  align="left">Sexton</td>
				</tr>
				<tr>
					<td  align="left">74-75</td>
					<td  align="left">Skull</td>
				</tr>
				<tr>
					<td  align="left">76</td>
					<td  align="left">Spatula</td>
				</tr>
				<tr>
					<td  align="left">77</td>
					<td  align="left">Spoon, measuring</td>
				</tr>
				<tr>
					<td  align="left">78</td>
					<td  align="left">Stand</td>
				</tr>
				<tr>
					<td  align="left">79</td>
					<td  align="left">Stool</td>
				</tr>
				<tr>
					<td  align="left">80</td>
					<td  align="left">Stuffed animal</td>
				</tr>
				<tr>
					<td  align="left">81</td>
					<td  align="left">Tank (container)</td>
				</tr>
				<tr>
					<td  align="left">82</td>
					<td  align="left">Tongs</td>
				</tr>
				<tr>
					<td  align="left">83</td>
					<td  align="left">Tripod</td>
				</tr>
				<tr>
					<td  align="left">84</td>
					<td  align="left">Tube (container)</td>
				</tr>
				<tr>
					<td  align="left">85-86</td>
					<td  align="left">Tube (piping)</td>
				</tr>
				<tr>
					<td  align="left">87</td>
					<td  align="left">Tweezers</td>
				</tr>
				<tr>
					<td  align="left">88-90</td>
					<td  align="left">Vial</td>
				</tr>
				<tr>
					<td  align="left">91</td>
					<td  align="left">Water clock</td>
				</tr>
				<tr>
					<td  align="left">92</td>
					<td  align="left">Wire</td>
				</tr>
				<tr>
					<td  align="left">93-00</td>
					<td  align="left">Workbench</td>
				</tr>
			</table>
			<br />
			<h2 id="dungeonpersonalitems">Utensils and Personal Items</h2>
			<table>
				<tr>
					<th align="left">d100</th>
					<th align="left">Item</th>
				</tr>
				<tr>
					<td align="left">01</td>
					<td align="left">Awl</td>
				</tr>
				<tr>
					<td align="left">02</td>
					<td align="left">Bandages</td>
				</tr>
				<tr>
					<td align="left">03</td>
					<td align="left">Basin</td>
				</tr>
				<tr>
					<td align="left">04-05</td>
					<td align="left">Basket</td>
				</tr>
				<tr>
					<td align="left">06-07</td>
					<td align="left">Book</td>
				</tr>
				<tr>
					<td align="left">08-09</td>
					<td align="left">Bottle</td>
				</tr>
				<tr>
					<td align="left">10</td>
					<td align="left">Bowl</td>
				</tr>
				<tr>
					<td align="left">11</td>
					<td align="left">Box</td>
				</tr>
				<tr>
					<td align="left">12-13</td>
					<td align="left">Brush</td>
				</tr>
				<tr>
					<td align="left">14</td>
					<td align="left">Candle</td>
				</tr>
				<tr>
					<td align="left">15</td>
					<td align="left">Candle snuffer</td>
				</tr>
				<tr>
					<td align="left">16</td>
					<td align="left">Candlestick</td>
				</tr>
				<tr>
					<td align="left">17</td>
					<td align="left">Cane or walking stick</td>
				</tr>
				<tr>
					<td align="left">18</td>
					<td align="left">Case</td>
				</tr>
				<tr>
					<td align="left">19</td>
					<td align="left">Casket (small)</td>
				</tr>
				<tr>
					<td align="left">20-21</td>
					<td align="left">Coffer</td>
				</tr>
				<tr>
					<td align="left">22</td>
					<td align="left">Cologne or perfume</td>
				</tr>
				<tr>
					<td align="left">23</td>
					<td align="left">Comb</td>
				</tr>
				<tr>
					<td align="left">24</td>
					<td align="left">Cup</td>
				</tr>
				<tr>
					<td align="left">25</td>
					<td align="left">Decanter</td>
				</tr>
				<tr>
					<td align="left">26-27</td>
					<td align="left">Dish</td>
				</tr>
				<tr>
					<td align="left">28</td>
					<td align="left">Ear spoon</td>
				</tr>
				<tr>
					<td align="left">29</td>
					<td align="left">Ewer</td>
				</tr>
				<tr>
					<td align="left">30</td>
					<td align="left">Flagon, mug, or tankard</td>
				</tr>
				<tr>
					<td align="left">31-32</td>
					<td align="left">Flask or jar</td>
				</tr>
				<tr>
					<td align="left">33</td>
					<td align="left">Food</td>
				</tr>
				<tr>
					<td align="left">34</td>
					<td align="left">Fork</td>
				</tr>
				<tr>
					<td align="left">35</td>
					<td align="left">Grater</td>
				</tr>
				<tr>
					<td align="left">36</td>
					<td align="left">Grinder</td>
				</tr>
				<tr>
					<td align="left">37</td>
					<td align="left">Horn, drinking</td>
				</tr>
				<tr>
					<td align="left">38</td>
					<td align="left">Hourglass</td>
				</tr>
				<tr>
					<td align="left">39</td>
					<td align="left">Jug or pitcher</td>
				</tr>
				<tr>
					<td align="left">40</td>
					<td align="left">Kettle</td>
				</tr>
				<tr>
					<td align="left">41</td>
					<td align="left">Key</td>
				</tr>
				<tr>
					<td align="left">42</td>
					<td align="left">Knife</td>
				</tr>
				<tr>
					<td align="left">43</td>
					<td align="left">Knucklebones or dice</td>
				</tr>
				<tr>
					<td align="left">44</td>
					<td align="left">Ladle</td>
				</tr>
				<tr>
					<td align="left">45-46</td>
					<td align="left">Lamp or lantern</td>
				</tr>
				<tr>
					<td align="left">47-48</td>
					<td align="left">Mirror</td>
				</tr>
				<tr>
					<td align="left">49</td>
					<td align="left">Needle(s)</td>
				</tr>
				<tr>
					<td align="left">50</td>
					<td align="left">Oil, cooking</td>
				</tr>
				<tr>
					<td align="left">51</td>
					<td align="left">Oil, fuel</td>
				</tr>
				<tr>
					<td align="left">52</td>
					<td align="left">Oil, scented</td>
				</tr>
				<tr>
					<td align="left">53</td>
					<td align="left">Pan</td>
				</tr>
				<tr>
					<td align="left">54-55</td>
					<td align="left">Parchment</td>
				</tr>
				<tr>
					<td align="left">56</td>
					<td align="left">Pipe, musical</td>
				</tr>
				<tr>
					<td align="left">57</td>
					<td align="left">Pipe, smoking</td>
				</tr>
				<tr>
					<td align="left">58</td>
					<td align="left">Plate, platter, or saucer</td>
				</tr>
				<tr>
					<td align="left">59</td>
					<td align="left">Pot</td>
				</tr>
				<tr>
					<td align="left">60-61</td>
					<td align="left">Pouch</td>
				</tr>
				<tr>
					<td align="left">62</td>
					<td align="left">Powder puff</td>
				</tr>
				<tr>
					<td align="left">63</td>
					<td align="left">Quill</td>
				</tr>
				<tr>
					<td align="left">64</td>
					<td align="left">Razor</td>
				</tr>
				<tr>
					<td align="left">65</td>
					<td align="left">Rope</td>
				</tr>
				<tr>
					<td align="left">66</td>
					<td align="left">Salve or unguent</td>
				</tr>
				<tr>
					<td align="left">67-68</td>
					<td align="left">Scroll</td>
				</tr>
				<tr>
					<td align="left">69</td>
					<td align="left">Shaker</td>
				</tr>
				<tr>
					<td align="left">70</td>
					<td align="left">Sifter or strainer</td>
				</tr>
				<tr>
					<td align="left">71-72</td>
					<td align="left">Soap</td>
				</tr>
				<tr>
					<td align="left">73</td>
					<td align="left">Spigot</td>
				</tr>
				<tr>
					<td align="left">74</td>
					<td align="left">Spoon</td>
				</tr>
				<tr>
					<td align="left">75</td>
					<td align="left">Stopper</td>
				</tr>
				<tr>
					<td align="left">76-77</td>
					<td align="left">Statuette or figurine</td>
				</tr>
				<tr>
					<td align="left">78-79</td>
					<td align="left">Thread</td>
				</tr>
				<tr>
					<td align="left">80-82</td>
					<td align="left">Tinderbox (with flint and steel)</td>
				</tr>
				<tr>
					<td align="left">83</td>
					<td align="left">Towel</td>
				</tr>
				<tr>
					<td align="left">84</td>
					<td align="left">Tray</td>
				</tr>
				<tr>
					<td align="left">85</td>
					<td align="left">Trivet or tripod</td>
				</tr>
				<tr>
					<td align="left">86</td>
					<td align="left">Tureen</td>
				</tr>
				<tr>
					<td align="left">87-88</td>
					<td align="left">Twine</td>
				</tr>
				<tr>
					<td align="left">89</td>
					<td align="left">Missing Entry</td>
				</tr>
				<tr>
					<td align="left">90</td>
					<td align="left">Vase</td>
				</tr>
				<tr>
					<td align="left">91-92</td>
					<td align="left">Vial</td>
				</tr>
				<tr>
					<td align="left">93</td>
					<td align="left">Washcloth</td>
				</tr>
				<tr>
					<td align="left">94</td>
					<td align="left">Whetstone</td>
				</tr>
				<tr>
					<td align="left">95-96</td>
					<td align="left">Wig</td>
				</tr>
				<tr>
					<td align="left">97-98</td>
					<td align="left">Wool</td>
				</tr>
				<tr>
					<td align="left">99-00</td>
					<td align="left">Yarn</td>
				</tr>
			</table>
			<br />
			<h2 id="dungeoncontainercontents">Container Contents</h2>
			<table>
				<tr>
					<th align="left">d100</th>
					<th align="left">Item</th>
				</tr>
				<tr>
					<td align="left">01-03</td>
					<td align="left">Ash</td>
				</tr>
				<tr>
					<td align="left">04-06</td>
					<td align="left">Bark</td>
				</tr>
				<tr>
					<td align="left">07-09</td>
					<td align="left">Bodily organs</td>
				</tr>
				<tr>
					<td align="left">10-14</td>
					<td align="left">Bones</td>
				</tr>
				<tr>
					<td align="left">15-17</td>
					<td align="left">Cinders</td>
				</tr>
				<tr>
					<td align="left">18-22</td>
					<td align="left">Crystals</td>
				</tr>
				<tr>
					<td align="left">23-26</td>
					<td align="left">Dust</td>
				</tr>
				<tr>
					<td align="left">27-28</td>
					<td align="left">Fibers</td>
				</tr>
				<tr>
					<td align="left">29-31</td>
					<td align="left">Gelatin</td>
				</tr>
				<tr>
					<td align="left">32-35</td>
					<td align="left">Grains</td>
				</tr>
				<tr>
					<td align="left">36-38</td>
					<td align="left">Grease</td>
				</tr>
				<tr>
					<td align="left">39-41</td>
					<td align="left">Husks</td>
				</tr>
				<tr>
					<td align="left">42-46</td>
					<td align="left">Leaves</td>
				</tr>
				<tr>
					<td align="left">47-54</td>
					<td align="left">Liquid, thin</td>
				</tr>
				<tr>
					<td align="left">55-59</td>
					<td align="left">Liquid, viscous</td>
				</tr>
				<tr>
					<td align="left">60-61</td>
					<td align="left">Lumps, unidentifiable</td>
				</tr>
				<tr>
					<td align="left">62-64</td>
					<td align="left">Oil</td>
				</tr>
				<tr>
					<td align="left">65-68</td>
					<td align="left">Paste</td>
				</tr>
				<tr>
					<td align="left">69-71</td>
					<td align="left">Pellets</td>
				</tr>
				<tr>
					<td align="left">72-84</td>
					<td align="left">Powder</td>
				</tr>
				<tr>
					<td align="left">85-86</td>
					<td align="left">Semiliquid suspension</td>
				</tr>
				<tr>
					<td align="left">87-88</td>
					<td align="left">Skin or hide</td>
				</tr>
				<tr>
					<td align="left">89-90</td>
					<td align="left">Spheres (metal, stone, or wood)</td>
				</tr>
				<tr>
					<td align="left">91-92</td>
					<td align="left">Splinters</td>
				</tr>
				<tr>
					<td align="left">93-94</td>
					<td align="left">Stalks</td>
				</tr>
				<tr>
					<td align="left">95-97</td>
					<td align="left">Strands</td>
				</tr>
				<tr>
					<td align="left">98-00</td>
					<td align="left">Strips</td>
				</tr>
			</table>
			<br />
			<h2 id="dungeonbooks">Books, Scrolls, and Tomes</h2>
			<table>
				<tr>
				<th align="left">d100</th>
				<th align="left">Contents</th>
				</tr>
				<tr>
					<td align="left">01-02</td>
					<td align="left">Account records</td>
				</tr>
				<tr>
					<td align="left">03-04</td>
					<td align="left">Alchemist's notebook</td>
				</tr>
				<tr>
					<td align="left">05-06</td>
					<td align="left">Almanac</td>
				</tr>
				<tr>
					<td align="left">07-08</td>
					<td align="left">Bestiary</td>
				</tr>
				<tr>
					<td align="left">09-11</td>
					<td align="left">Biography</td>
				</tr>
				<tr>
					<td align="left">12-14</td>
					<td align="left">Book of heraldry</td>
				</tr>
				<tr>
					<td align="left">15</td>
					<td align="left">Book of myths</td>
				</tr>
				<tr>
					<td align="left">16</td>
					<td align="left">Book of pressed flowers</td>
				</tr>
				<tr>
					<td align="left">17</td>
					<td align="left">Calendar</td>
				</tr>
				<tr>
					<td align="left">18-22</td>
					<td align="left">Catalog</td>
				</tr>
				<tr>
					<td align="left">23-24</td>
					<td align="left">Contract</td>
				</tr>
				<tr>
					<td align="left">25-27</td>
					<td align="left">Diary</td>
				</tr>
				<tr>
					<td align="left">28-29</td>
					<td align="left">Dictionary</td>
				</tr>
				<tr>
					<td align="left">30-32</td>
					<td align="left">Doodles or sketches</td>
				</tr>
				<tr>
					<td align="left">33</td>
					<td align="left">Forged document</td>
				</tr>
				<tr>
					<td align="left">34</td>
					<td align="left">Grammar workbook</td>
				</tr>
				<tr>
					<td align="left">35-36</td>
					<td align="left">Heretical text</td>
				</tr>
				<tr>
					<td align="left">37-41</td>
					<td align="left">Historical text</td>
				</tr>
				<tr>
					<td align="left">42-43</td>
					<td align="left">Last will and testament</td>
				</tr>
				<tr>
					<td align="left">44-45</td>
					<td align="left">Legal code</td>
				</tr>
				<tr>
					<td align="left">46-53</td>
					<td align="left">Letter</td>
				</tr>
				<tr>
					<td align="left">54</td>
					<td align="left">Lunatic's ravings</td>
				</tr>
				<tr>
					<td align="left">55</td>
					<td align="left">Magic tricks (not a spellbook)</td>
				</tr>
				<tr>
					<td align="left">56</td>
					<td align="left">Magic scroll</td>
				</tr>
				<tr>
					<td align="left">57-59</td>
					<td align="left">Map or atlas</td>
				</tr>
				<tr>
					<td align="left">60</td>
					<td align="left">Memoir</td>
				</tr>
				<tr>
					<td align="left">61-62</td>
					<td align="left">Navigational chart or star chart</td>
				</tr>
				<tr>
					<td align="left">63-64</td>
					<td align="left">Novel</td>
				</tr>
				<tr>
					<td align="left">65</td>
					<td align="left">Painting</td>
				</tr>
				<tr>
					<td align="left">66-67</td>
					<td align="left">Poetry</td>
				</tr>
				<tr>
					<td align="left">68-69</td>
					<td align="left">Prayer book</td>
				</tr>
				<tr>
					<td align="left">70</td>
					<td align="left">Property deed</td>
				</tr>
				<tr>
					<td align="left">71-74</td>
					<td align="left">Recipe book or cookbook</td>
				</tr>
				<tr>
					<td align="left">75</td>
					<td align="left">Record or a criminal trial</td>
				</tr>
				<tr>
					<td align="left">76</td>
					<td align="left">Royal proclamation</td>
				</tr>
				<tr>
					<td align="left">77-78</td>
					<td align="left">Sheet music</td>
				</tr>
				<tr>
					<td align="left">79</td>
					<td align="left">Spellbook</td>
				</tr>
				<tr>
					<td align="left">80</td>
					<td align="left">Text on armor making</td>
				</tr>
				<tr>
					<td align="left">81-82</td>
					<td align="left">Text on astrology</td>
				</tr>
				<tr>
					<td align="left">83-84</td>
					<td align="left">Text on brewing</td>
				</tr>
				<tr>
					<td align="left">85-86</td>
					<td align="left">Text on exotic flora or fauna</td>
				</tr>
				<tr>
					<td align="left">87-88</td>
					<td align="left">Text on herbalism</td>
				</tr>
				<tr>
					<td align="left">89-90</td>
					<td align="left">Text on local flora</td>
				</tr>
				<tr>
					<td align="left">91-92</td>
					<td align="left">Text on mathematics</td>
				</tr>
				<tr>
					<td align="left">93</td>
					<td align="left">Text on masonry</td>
				</tr>
				<tr>
					<td align="left">94</td>
					<td align="left">Text on medicine</td>
				</tr>
				<tr>
					<td align="left">95</td>
					<td align="left">Theological text</td>
				</tr>
				<tr>
					<td align="left">96</td>
					<td align="left">Tome of forbidden lore</td>
				</tr>
				<tr>
					<td align="left">97-99</td>
					<td align="left">Travelogue for an exotic land</td>
				</tr>
				<tr>
					<td align="left">00</td>
					<td align="left">Travelogue of the planes</td>
				</tr>
			</table>

		   <br />
	<br />
	<h2 id="trinkets">Trinkets</h2>
		<table>
		<tr>
			<th align="left" width="5%">d100</th>
			<th align="left">Trinket</th>
		</tr>
		<tr>
			<td align="left">1</td>
			<td align="left">A mummified goblin hand</td>
		</tr>
		<tr>
			<td align="left">2</td>
			<td align="left">A piece of crystal that faintly glows in the moonlight</td>
		</tr>
		<tr>
			<td align="left">3</td>
			<td align="left">A gold coin minted in an unknown land</td>
		</tr>
		<tr>
			<td align="left">4</td>
			<td align="left">A diary written in a language you don't know</td>
		</tr>
		<tr>
			<td align="left">5</td>
			<td align="left">A brass ring that never tarnishes</td>
		</tr>
		<tr>
			<td align="left">6</td>
			<td align="left">An old chess piece made from glass</td>
		</tr>
		<tr>
			<td align="left">7</td>
			<td align="left">A pair of knucklebone dice, each with a skull symbol on the side that would normally show six pips</td>
		</tr>
		<tr>
			<td align="left">8</td>
			<td align="left">A small idol depicting a nightmarish creature that gives you unsettling dreams when you sleep near it</td>
		</tr>
		<tr>
			<td align="left">9</td>
			<td align="left">A rope necklace from which dangles four mummified elf fingers</td>
		</tr>
		<tr>
			<td align="left">10</td>
			<td align="left">The deed for a parcel of land in a realm unknown to you</td>
		</tr>
		<tr>
			<td align="left">11</td>
			<td align="left">A -ounce block made from an unknown material</td>
		</tr>
		<tr>
			<td align="left">12</td>
			<td align="left">A small cloth doll skewered with needles</td>
		</tr>
		<tr>
			<td align="left">13</td>
			<td align="left">A tooth from an unknown beast</td>
		</tr>
		<tr>
			<td align="left">14</td>
			<td align="left">An enormous scale, perhaps from a dragon</td>
		</tr>
		<tr>
			<td align="left">15</td>
			<td align="left">A bright green feather</td>
		</tr>
		<tr>
			<td align="left">16</td>
			<td align="left">An old divination card bearing your likeness</td>
		</tr>
		<tr>
			<td align="left">17</td>
			<td align="left">A glass orb filled with moving smoke</td>
		</tr>
		<tr>
			<td align="left">18</td>
			<td align="left">A -pound egg with a bright red shell</td>
		</tr>
		<tr>
			<td align="left">19</td>
			<td align="left">A pipe that blows bubbles</td>
		</tr>
		<tr>
			<td align="left">20</td>
			<td align="left">A glass jar containing a weird bit of flesh floating in pickling fluid</td>
		</tr>
		<tr>
			<td align="left">21</td>
			<td align="left">A tiny gnome-crafted music box that plays a song you dimly remember from your childhood</td>
		</tr>
		<tr>
			<td align="left">22</td>
			<td align="left">A small wooden statuette of a smug halfling</td>
		</tr>
		<tr>
			<td align="left">23</td>
			<td align="left">A brass orb etched with strange runes</td>
		</tr>
		<tr>
			<td align="left">24</td>
			<td align="left">A multicolored stone disk</td>
		</tr>
		<tr>
			<td align="left">25</td>
			<td align="left">A tiny silver icon of a raven</td>
		</tr>
		<tr>
			<td align="left">26</td>
			<td align="left">A bag containing forty-seven humanoid teeth, one of which is rotten</td>
		</tr>
		<tr>
			<td align="left">27</td>
			<td align="left">A shard of obsidian that always feels warm to the touch</td>
		</tr>
		<tr>
			<td align="left">28</td>
			<td align="left">A dragon's bony talon hanging from a plain leather necklace</td>
		</tr>
		<tr>
			<td align="left">29</td>
			<td align="left">A pair of old socks</td>
		</tr>
		<tr>
			<td align="left">30</td>
			<td align="left">A blank book whose pages refuse to hold ink, chalk, graphite, or any other substance or marking</td>
		</tr>
		<tr>
			<td align="left">31</td>
			<td align="left">A silver badge in the shape of a five-pointed star</td>
		</tr>
		<tr>
			<td align="left">32</td>
			<td align="left">A knife that belonged to a relative</td>
		</tr>
		<tr>
			<td align="left">33</td>
			<td align="left">A glass vial filled with nail clippings</td>
		</tr>
		<tr>
			<td align="left">34</td>
			<td align="left">A rectangular metal device with two tiny metal cups on one end that throws sparks when wet</td>
		</tr>
		<tr>
			<td align="left">35</td>
			<td align="left">A white, sequined glove sized for a human</td>
		</tr>
		<tr>
			<td align="left">36</td>
			<td align="left">A vest with one hundred tiny pockets</td>
		</tr>
		<tr>
			<td align="left">37</td>
			<td align="left">A small, weightless stone block</td>
		</tr>
		<tr>
			<td align="left">38</td>
			<td align="left">A tiny sketch portrait of a goblin</td>
		</tr>
		<tr>
			<td align="left">39</td>
			<td align="left">An empty glass vial that smells of perfume when opened</td>
		</tr>
		<tr>
			<td align="left">40</td>
			<td align="left">A gemstone that looks like a lump of coal when examined by anyone but you</td>
		</tr>
		<tr>
			<td align="left">41</td>
			<td align="left">A scrap of cloth from an old banner</td>
		</tr>
		<tr>
			<td align="left">42</td>
			<td align="left">A rank insignia from a lost legionnaire</td>
		</tr>
		<tr>
			<td align="left">43</td>
			<td align="left">A tiny silver bell without a clapper</td>
		</tr>
		<tr>
			<td align="left">44</td>
			<td align="left">A mechanical canary inside a gnomish lamp</td>
		</tr>
		<tr>
			<td align="left">45</td>
			<td align="left">A tiny chest carved to look like it has numerous feet on the bottom</td>
		</tr>
		<tr>
			<td align="left">46</td>
			<td align="left">A dead sprite inside a clear glass bottle</td>
		</tr>
		<tr>
			<td align="left">47</td>
			<td align="left">A metal can that has no opening but sounds as if it is filled with liquid, sand, spiders, or broken glass (your choice)</td>
		</tr>
		<tr>
			<td align="left">48</td>
			<td align="left">A glass orb filled with water, in which swims a clockwork goldfish</td>
		</tr>
		<tr>
			<td align="left">49</td>
			<td align="left">A silver spoon with an 'M' engraved on the handle</td>
		</tr>
		<tr>
			<td align="left">50</td>
			<td align="left">A whistle made from gold-colored wood</td>
		</tr>
		<tr>
			<td align="left">51</td>
			<td align="left">A dead scarab beetle the size of your hand</td>
		</tr>
		<tr>
			<td align="left">52</td>
			<td align="left">Two toy soldiers, one with a missing head</td>
		</tr>
		<tr>
			<td align="left">53</td>
			<td align="left">A small box filled with different-sized buttons</td>
		</tr>
		<tr>
			<td align="left">54</td>
			<td align="left">A candle that cant be lit</td>
		</tr>
		<tr>
			<td align="left">55</td>
			<td align="left">A tiny cage with no door</td>
		</tr>
		<tr>
			<td align="left">56</td>
			<td align="left">An old key</td>
		</tr>
		<tr>
			<td align="left">57</td>
			<td align="left">An indecipherable treasure map</td>
		</tr>
		<tr>
			<td align="left">58</td>
			<td align="left">A hilt from a broken sword</td>
		</tr>
		<tr>
			<td align="left">59</td>
			<td align="left">A rabbit's foot</td>
		</tr>
		<tr>
			<td align="left">60</td>
			<td align="left">A glass eye</td>
		</tr>
		<tr>
			<td align="left">61</td>
			<td align="left">A cameo carved in the likeness of a hideous person</td>
		</tr>
		<tr>
			<td align="left">62</td>
			<td align="left">A silver skull the size of a coin</td>
		</tr>
		<tr>
			<td align="left">63</td>
			<td align="left">An alabaster mask</td>
		</tr>
		<tr>
			<td align="left">64</td>
			<td align="left">A pyramid of sticky black incense that smells very bad</td>
		</tr>
		<tr>
			<td align="left">65</td>
			<td align="left">A nightcap that, when worn, gives you pleasant dreams</td>
		</tr>
		<tr>
			<td align="left">66</td>
			<td align="left">A single caltrop made from bone</td>
		</tr>
		<tr>
			<td align="left">67</td>
			<td align="left">A gold monocle frame without the lens</td>
		</tr>
		<tr>
			<td align="left">68</td>
			<td align="left">A -inch cube, each side painted a different color</td>
		</tr>
		<tr>
			<td align="left">69</td>
			<td align="left">A crystal knob from a door</td>
		</tr>
		<tr>
			<td align="left">70</td>
			<td align="left">A small packet filled with pink dust</td>
		</tr>
		<tr>
			<td align="left">71</td>
			<td align="left">A fragment of a beautiful song, written as musical notes on two pieces of parchment</td>
		</tr>
		<tr>
			<td align="left">72</td>
			<td align="left">A silver teardrop earring made from a real teardrop</td>
		</tr>
		<tr>
			<td align="left">73</td>
			<td align="left">The shell of an egg painted with scenes of human misery in disturbing detail</td>
		</tr>
		<tr>
			<td align="left">74</td>
			<td align="left">A fan that, when unfolded, shows a sleeping cat</td>
		</tr>
		<tr>
			<td align="left">75</td>
			<td align="left">A set of bone pipes</td>
		</tr>
		<tr>
			<td align="left">76</td>
			<td align="left">A four-leaf clover pressed inside a book discussing manners and etiquette</td>
		</tr>
		<tr>
			<td align="left">77</td>
			<td align="left">A sheet of parchment upon which is drawn a complex mechanical contraption</td>
		</tr>
		<tr>
			<td align="left">78</td>
			<td align="left">An ornate scabbard that fits no blade you have found so far</td>
		</tr>
		<tr>
			<td align="left">79</td>
			<td align="left">An invitation to a party where a murder happened</td>
		</tr>
		<tr>
			<td align="left">80</td>
			<td align="left">A bronze pentacle with an etching of a rat's head in its center</td>
		</tr>
		<tr>
			<td align="left">81</td>
			<td align="left">A purple handkerchief embroidered with the name of a powerful archmage</td>
		</tr>
		<tr>
			<td align="left">82</td>
			<td align="left">Half of a floorplan for a temple, castle, or some other structure</td>
		</tr>
		<tr>
			<td align="left">83</td>
			<td align="left">A bit of folded cloth that, when unfolded, turns into a stylish cap</td>
		</tr>
		<tr>
			<td align="left">84</td>
			<td align="left">A receipt of deposit at a bank in a far-flung city</td>
		</tr>
		<tr>
			<td align="left">85</td>
			<td align="left">A diary with seven missing pages</td>
		</tr>
		<tr>
			<td align="left">86</td>
			<td align="left">An empty silver snuffbox bearing an inscription on the surface that says "dreams"</td>
		</tr>
		<tr>
			<td align="left">87</td>
			<td align="left">An iron holy symbol devoted to an unknown god</td>
		</tr>
		<tr>
			<td align="left">88</td>
			<td align="left">A book that tells the story of a legendary hero's rise and fall, with the last chapter missing</td>
		</tr>
		<tr>
			<td align="left">89</td>
			<td align="left">A vial of dragon blood</td>
		</tr>
		<tr>
			<td align="left">90</td>
			<td align="left">An ancient arrow of elven design</td>
		</tr>
		<tr>
			<td align="left">91</td>
			<td align="left">A needle that never bends</td>
		</tr>
		<tr>
			<td align="left">92</td>
			<td align="left">An ornate brooch of dwarven design</td>
		</tr>
		<tr>
			<td align="left">93</td>
			<td align="left">An empty wine bottle bearing a pretty label that says, "The Wizard of Wines Winery, Red Dragon Crush, -W"</td>
		</tr>
		<tr>
			<td align="left">94</td>
			<td align="left">A mosaic tile with a multicolored, glazed surface</td>
		</tr>
		<tr>
			<td align="left">95</td>
			<td align="left">A petrified mouse</td>
		</tr>
		<tr>
			<td align="left">96</td>
			<td align="left">A black pirate flag adorned with a dragon's skull and crossbones</td>
		</tr>
		<tr>
			<td align="left">97</td>
			<td align="left">A tiny mechanical crab or spider that moves about when it's not being observed</td>
		</tr>
		<tr>
			<td align="left">98</td>
			<td align="left">A glass jar containing lard with a label that reads, "Griffon Grease"</td>
		</tr>
		<tr>
			<td align="left">99</td>
			<td align="left">A wooden box with a ceramic bottom that holds a living worm with a head on each end of it's body</td>
		</tr>
		<tr>
			<td align="left">100</td>
			<td align="left">A metal urn containing the ashes of a hero</td>
		</tr>
		</table>
    <br />
    <h2 id="eviltrinkets">Elemental Evil Trinkets</h2>
    <table>
        <tr>
            <th align="left" width="5%">d100</th>
            <th align="left">Trinket</th>
        </tr>
        <tr>
            <td align="left">1
			</td>
            <td align="left">
                A Compass that always points to Mulmaster.
            </td>
        </tr>
        <tr>
            <td align="left">2
			</td>
            <td align="left">A paper fan that won't produce a breeze no matter how hard it's waved.</td>
        </tr>
        <tr>
            <td align="left">3
			</td>
            <td align="left">A petrified potato that resembles someone important to you.</td>
        </tr>
        <tr>
            <td align="left">4
			</td>
            <td align="left">
                A glass cup that can only be filled half way no matter how much liquid is poured into it.
            </td>
        </tr>
        <tr>
            <td align="left">5</td>
            <td align="left">
                A mirror that only shows the back of your head.
            </td>
        </tr>
        <tr>
            <td align="left">
                6
            </td>
            <td align="left">
                A small glass bird that when set down near water dips its head in as if to get a drink.
            </td>
        </tr>
        <tr>
            <td align="left">
                7
            </td>
            <td align="left">
                A lady's coin purse containing two sharp fangs.
            </td>
        </tr>
        <tr>
            <td align="left">
                8
            </td>
            <td align="left">
                A small sea conch with the words &quot;From the beginning&quot; painted on the lip.
            </td>
        </tr>
        <tr>
            <td align="left">
                9
            </td>
            <td align="left">
                A frost-covered silver locket that's frozen shut.
            </td>
        </tr>
        <tr>
            <td align="left">
                10
            </td>
            <td align="left">
                A seal which imprints a mysterious, unknown coat of arms into hard rock.
            </td>
        </tr>
        <tr>
            <td align="left">
                11
            </td>
            <td align="left">
                A small wooden doll that when held brings back fond memories.
            </td>
        </tr>
        <tr>
            <td align="left">
                12
            </td>
            <td align="left">
                A small handmirror which only reflects inanimate objects.
            </td>
        </tr>
        <tr>
            <td align="left">
                13
            </td>
            <td align="left">
                A glass eyeball that looks about of its own accordance, and can roll around.
            </td>
        </tr>
        <tr>
            <td align="left">
                14
            </td>
            <td align="left">
                A glass orb that replicates yesterday's weather inside itself.
            </td>
        </tr>
        <tr>
            <td align="left">
                15
            </td>
            <td align="left">
                A drinking cup, that randomly fills with fresh or salt water. Refilling once emptied.
            </td>
        </tr>
        <tr>
            <td align="left">
                16
            </td>
            <td align="left">
                A deep blue piece of flint, that when struck with steel produces not a spark but a drop of water.
            </td>
        </tr>
        <tr>
            <td align="left">
                17
            </td>
            <td align="left">
                A conch shell which is always damp and constantly drips saltwater.
            </td>
        </tr>
        <tr>
            <td align="left">
                18
            </td>
            <td align="left">
                A charred, half-melted pewter clasp that glows as if smoldering but releases no heat.
            </td>
        </tr>
        <tr>
            <td align="left">
                19
            </td>
            <td align="left">
                A clockwork finch that flaps its wings in the presence of a breeze.
            </td>
        </tr>
        <tr>
            <td align="left">
                20
            </td>
            <td align="left">
                A unbreakable sealed jar of glowing water that hums when shaken.
            </td>
        </tr>
        <tr>
            <td align="left">
                21
            </td>
            <td align="left">
                A small, finely polished geode whose crystals slowly fade between every color of the spectrum.
            </td>
        </tr>
        <tr>
            <td align="left">
                22
            </td>
            <td align="left">
                A rough stone eye pulled from a petrified creature.
            </td>
        </tr>
        <tr>
            <td align="left">
                23
            </td>
            <td align="left">
                A stone smoking pipe that never needs lighting.
            </td>
        </tr>
        <tr>
            <td align="left">
                24
            </td>
            <td align="left">
                A small whistle, that when blown, whispers a name of a person or place unknown to you, instead of the whistle sound.
            </td>
        </tr>
        <tr>
            <td align="left">
                25
            </td>
            <td align="left">
                A fist sized rock that &quot;beats&quot; like a heart.
            </td>
        </tr>
        <tr>
            <td align="left">
                26
            </td>
            <td align="left">
                A pair of bronze scissors in the shape of a pair of leaping dolphins.
            </td>
        </tr>
        <tr>
            <td align="left">
                27
            </td>
            <td align="left">
                A bronze oil lamp which is rumored to have once held a genie.
            </td>
        </tr>
        <tr>
            <td align="left">
                28
            </td>
            <td align="left">
                A single gauntlet inscribed with a fire motif and an unfamiliar name in Primordial.
            </td>
        </tr>
        <tr>
            <td align="left">
                29
            </td>
            <td align="left">
                A one-eyed little fish inside a spherical vial, much bigger than the vial's neck. He has a cunning look.
            </td>
        </tr>
        <tr>
            <td align="left">
                30
            </td>
            <td align="left">
                The tiny skull of a rabbit that whispers scathing insults when nobody is looking.
            </td>
        </tr>
        <tr>
            <td align="left">
                31
            </td>
            <td align="left">
                A rag doll in the likeness of an owlbear.
            </td>
        </tr>
        <tr>
            <td align="left">
                32
            </td>
            <td align="left">
                The desiccated body of a small eight-legged black lizard.
            </td>
        </tr>
        <tr>
            <td align="left">
                33
            </td>
            <td align="left">
                A small toy boat made with a walnut shell, toothpick, and piece of cloth.
            </td>
        </tr>
        <tr>
            <td align="left">
                34
            </td>
            <td align="left">
                A small pocket mirror that slowly fogs over while held.
            </td>
        </tr>
        <tr>
            <td align="left">
                35
            </td>
            <td align="left">
                Wind chimes that glow when the wind blows.
            </td>
        </tr>
        <tr>
            <td align="left">
                36
            </td>
            <td align="left">
                A small, clay square with an unknown rune etched into one side.
            </td>
        </tr>
        <tr>
            <td align="left">
                37
            </td>
            <td align="left">
                A tea kettle that heats itself when filled with water.
            </td>
        </tr>
        <tr>
            <td align="left">
                38
            </td>
            <td align="left">
                An old scratched monocle which shows an underwater landscape whenever someone looks through it.
            </td>
        </tr>
        <tr>
            <td align="left">
                39
            </td>
            <td align="left">
                A rose carved from coral.
            </td>
        </tr>
        <tr>
            <td align="left">
                40
            </td>
            <td align="left">
                A set of dice with elemental symbols and primordial runes instead of pips or numbers.
            </td>
        </tr>
        <tr>
            <td align="left">
                41
            </td>
            <td align="left">
                An amulet filled with liquid that churns, freezes, or boils to match its wearer's mood.
            </td>
        </tr>
        <tr>
            <td align="left">
                42
            </td>
            <td align="left">
                A small silver bell that makes a sound like quiet, distant thunder when it's struck.
            </td>
        </tr>
        <tr>
            <td align="left">
                43
            </td>
            <td align="left">
                A small vial of black sand that glows slightly in the moonlight.
            </td>
        </tr>
        <tr>
            <td align="left">
                44
            </td>
            <td align="left">
                A small whale tooth with etched with an image of waves crashing upon a beach.
            </td>
        </tr>
        <tr>
            <td align="left">
                45
            </td>
            <td align="left">
                An hourglass in which the sands pour upward instead of downward.
            </td>
        </tr>
        <tr>
            <td align="left">
                46
            </td>
            <td align="left">
                A glass pendant with a hole in the center that a mild breeze always blows out of.
            </td>
        </tr>
        <tr>
            <td align="left">
                47
            </td>
            <td align="left">
                A soft feather that falls like a stone when dropped.
            </td>
        </tr>
        <tr>
            <td align="left">
                48
            </td>
            <td align="left">
                A large transparent gem that, when gripped tightly, whispers in Terran.
            </td>
        </tr>
        <tr>
            <td align="left">
                49
            </td>
            <td align="left">
                A small crystal snow globe that, when shaken, seems to form silhouettes of dancing forms.
            </td>
        </tr>
        <tr>
            <td align="left">
                50
            </td>
            <td align="left">
                Half of a palm-sized geode that pulses dimly with purple light.
            </td>
        </tr>
        <tr>
            <td align="left">
                51
            </td>
            <td align="left">
                A book filled with writing that only appears when the book is held underwater.
            </td>
        </tr>
        <tr>
            <td align="left">
                52
            </td>
            <td align="left">
                A sealed envelope made of red leather that you haven’t been able to open. It smells of campfire.
            </td>
        </tr>
        <tr>
            <td align="left">
                53
            </td>
            <td align="left">
                A locket of hair that is rumored to have come from a famed fire genasi.
            </td>
        </tr>
        <tr>
            <td align="left">
                54
            </td>
            <td align="left">
                Flint and steel that, when used to start a faire, creates a random colored flame.
            </td>
        </tr>
        <tr>
            <td align="left">
                55
            </td>
            <td align="left">
                A blank piece of wet parchment that never seems to dry.
            </td>
        </tr>
        <tr>
            <td align="left">
                56
            </td>
            <td align="left">
                A small puzzle box made of brass, that is slightly warm to the touch.
            </td>
        </tr>
        <tr>
            <td align="left">
                57
            </td>
            <td align="left">
                A cloudy chunk of glass that is said to hold a spark of breath from a blue dragon.
            </td>
        </tr>
        <tr>
            <td align="left">
                58
            </td>
            <td align="left">
                A crude chalice made of coal.
            </td>
        </tr>
        <tr>
            <td align="left">
                59
            </td>
            <td align="left">
                A miniature brass horn, silent when played, but fills the air with the scent of warm and exotic spices.
            </td>
        </tr>
        <tr>
            <td align="left">
                60
            </td>
            <td align="left">
                An eye-sized blue pearl that floats in salt water.
            </td>
        </tr>
        <tr>
            <td align="left">
                61
            </td>
            <td align="left">
                A tuning fork made from a dark metal which glows with a pale, white light during thunderstorms.
            </td>
        </tr>
        <tr>
            <td align="left">
                62
            </td>
            <td align="left">
                A small vial that is always filled with the smell of autumn wind.
            </td>
        </tr>
        <tr>
            <td align="left">
                63
            </td>
            <td align="left">
                A clear marble that slowly rolls toward the nearest source of running water.
            </td>
        </tr>
        <tr>
            <td align="left">
                64
            </td>
            <td align="left">
                A small collapsible silver cup that perspires constantly when opened.
            </td>
        </tr>
        <tr>
            <td align="left">
                65
            </td>
            <td align="left">
                A hourglass that tells time with falling mist instead of sand.
            </td>
        </tr>
        <tr>
            <td align="left">
                66
            </td>
            <td align="left">
                An ornate razor, which only cuts in freezing cold temperature.
            </td>
        </tr>
        <tr>
            <td align="left">
                67
            </td>
            <td align="left">
                A shark tooth covered in tiny etched words from a lost language.
            </td>
        </tr>
        <tr>
            <td align="left">
                68
            </td>
            <td align="left">
                A large brass coin with no markings or images on it.
            </td>
        </tr>
        <tr>
            <td align="left">
                69
            </td>
            <td align="left">
                A small wooden box filled with a strange red clay.
            </td>
        </tr>
        <tr>
            <td align="left">
                70
            </td>
            <td align="left">
                A necklace with a small, rusted iron anchor.
            </td>
        </tr>
        <tr>
            <td align="left">
                71
            </td>
            <td align="left">
                A small brass flute adorned with silver wire that is always faintly sounding.
            </td>
        </tr>
        <tr>
            <td align="left">
                72
            </td>
            <td align="left">
                A red and black Aarakocra feather.
            </td>
        </tr>
        <tr>
            <td align="left">
                73
            </td>
            <td align="left">
                A palm-sized stone with a hole in it, through which can be heard a constantly whispering wind.
            </td>
        </tr>
        <tr>
            <td align="left">
                74
            </td>
            <td align="left">
                A small conch shell covered in black crystal.
            </td>
        </tr>
        <tr>
            <td align="left">
                75
            </td>
            <td align="left">
                A small music box made of brass. It features a pair of tiny automatons that resemble Azer working at a forge.
            </td>
        </tr>
        <tr>
            <td align="left">
                76
            </td>
            <td align="left">
                A glass jar containing the preserved corpse of an unfamiliar aquatic creature.
            </td>
        </tr>
        <tr>
            <td align="left">
                77
            </td>
            <td align="left">
                A piece of petrified wood carved into the shape of a seashell.
            </td>
        </tr>
        <tr>
            <td align="left">
                78
            </td>
            <td align="left">
                A wooden puzzle cube covered in elemental symbols.
            </td>
        </tr>
        <tr>
            <td align="left">
                79
            </td>
            <td align="left">
                A small stone cube that acts as a magnet when placed against another stone.
            </td>
        </tr>
        <tr>
            <td align="left">
                80
            </td>
            <td align="left">
                A ring made of a white metal. On the inside is a name etched in Auran.
            </td>
        </tr>
        <tr>
            <td align="left">
                81
            </td>
            <td align="left">
                A bracelet made of silvered fish hooks.
            </td>
        </tr>
        <tr>
            <td align="left">
                82
            </td>
            <td align="left">
                A journal filled with poetry hand-written in Primordial.
            </td>
        </tr>
        <tr>
            <td align="left">
                83
            </td>
            <td align="left">
                A yellow gemstone that glows dimly when a storm is nearby.
            </td>
        </tr>
        <tr>
            <td align="left">
                84
            </td>
            <td align="left">
                A charred chisel with an unfamiliar symbol stamped into its base.
            </td>
        </tr>
        <tr>
            <td align="left">
                85
            </td>
            <td align="left">
                A canteen filled with a foul smelling orange mud.
            </td>
        </tr>
        <tr>
            <td align="left">
                86
            </td>
            <td align="left">
                A faceless doll made of driftwood.
            </td>
        </tr>
        <tr>
            <td align="left">
                87
            </td>
            <td align="left">
                A heavy iron key bearing the name of a ship long lost to the sea.
            </td>
        </tr>
        <tr>
            <td align="left">
                88
            </td>
            <td align="left">
                A small jewelry box made from the shell of a turtle.
            </td>
        </tr>
        <tr>
            <td align="left">
                89
            </td>
            <td align="left">
                A chess piece fashioned to look like fire myrmidon.
            </td>
        </tr>
        <tr>
            <td align="left">
                90
            </td>
            <td align="left">
                A spinning top with an image of one of the four elements on each side.
            </td>
        </tr>
        <tr>
            <td align="left">
                91
            </td>
            <td align="left">
                A single hoop earring made of a porous red stone.
            </td>
        </tr>
        <tr>
            <td align="left">
                92
            </td>
            <td align="left">
                An arrowhead carved from sea salt
            </td>
        </tr>
        <tr>
            <td align="left">
                93
            </td>
            <td align="left">
                A small comb made of blue coral.
            </td>
        </tr>
        <tr>
            <td align="left">
                94
            </td>
            <td align="left">
                Seven small beads of sandstone on a string, all different colors.
            </td>
        </tr>
        <tr>
            <td align="left">
                95
            </td>
            <td align="left">
                A romance chapter book written in undercommon titled &quot;Just one Layer of Grey&quot;.
            </td>
        </tr>
        <tr>
            <td align="left">
                96
            </td>
            <td align="left">
                A tiny, broken clockwork Harpy.
            </td>
        </tr>
        <tr>
            <td align="left">
                97
            </td>
            <td align="left">
                An ivory whale statuette.
            </td>
        </tr>
        <tr>
            <td align="left">
                98
            </td>
            <td align="left">
                A fist-sized cog, covered in barnacles.
            </td>
        </tr>
        <tr>
            <td align="left">
                99
            </td>
            <td align="left">
                An eyepatch made of obsidian and a black leather cord.
            </td>
        </tr>
        <tr>
            <td align="left">
                100
            </td>
            <td align="left">
                A glass bottle with a tiny ship of unfamiliar design inside.
            </td>
        </tr>
    </table>
    <br />


				<h1 id="worldbuilding">World Building</h1><h2 id="npcbuilding">	NPC Building</h2>
					<br />
				<table id="npccharacteristics">
					<tr>
						<th>
							1d20
						</th>
						<th>
							Characteristic
						</th>
					</tr>
					<tr>
						<td align="left">
							1
						</td>
						<td align="left">
							Absentminded
						</td>
					</tr>
					<tr>
						<td align="left">
							2
						</td>
						<td align="left">
							Arrogant
						</td>
					</tr>
					<tr>
						<td align="left">
							3
						</td>
						<td align="left">
							Boorish
						</td>
					</tr>
					<tr>
						<td align="left">
							4
						</td>
						<td align="left">
							Chews Something
						</td>
					</tr>
					<tr>
						<td align="left">
							5
						</td>
						<td align="left">
							Clumsy
						</td>
					</tr>
					<tr>
						<td align="left">
							6
						</td>
						<td align="left">
							Curious
						</td>
					</tr>
					<tr>
						<td align="left">
							7
						</td>
						<td align="left">
							Dim Witted
						</td>
					</tr>
					<tr>
						<td align="left">
							8
						</td>
						<td align="left">
							Fiddles and Fidgets
						</td>
					</tr>
					<tr>
						<td align="left">
							9
						</td>
						<td align="left">
							Frequently uses wrong word
						</td>
					</tr>
					<tr>
						<td align="left">
							10
						</td>
						<td align="left">
							Friendly
						</td>
					</tr>
					<tr>
						<td align="left">
							11
						</td>
						<td align="left">
							Irritable
						</td>
					</tr>
					<tr>
						<td align="left">
							12
						</td>
						<td align="left">
							Prone to prediction of doom
						</td>
					</tr>
					<tr>
						<td align="left">
							13
						</td>
						<td align="left">
							Pronounced Scar
						</td>
					</tr>
					<tr>
						<td align="left">
							14
						</td>
						<td align="left">
							Slurs words, lisps, or stutters
						</td>
					</tr>
					<tr>
						<td align="left">
							15
						</td>
						<td align="left">
							Speaks loudly or whispers
						</td>
					</tr>
					<tr>
						<td align="left">
							16
						</td>
						<td align="left">
							Squints
						</td>
					</tr>
					<tr>
						<td align="left">
							17
						</td>
						<td align="left">
							Stares into distance
						</td>
					</tr>
					<tr>
						<td align="left">
							18
						</td>
						<td align="left">
							Suspicious
						</td>
					</tr>
					<tr>
						<td align="left">
							19
						</td>
						<td align="left">
							Uses colorful oaths and exclamations
						</td>
					</tr>
					<tr>
						<td align="left">
							20
						</td>
						<td align="left">
							Uses flowery speech or long words
						</td>
					</tr>
				</table>
				<h2 id="npcideals">
					NPC Ideals
				</h2>

				<table>
					<tr>
						<th colspan="2">
							<h3 class="nobackground">Good Ideals</h3>
						</th>
					</tr>
					<tr>
						<th width="50%">
							1d6
						</th>
						<th width="50%">
							Ideal
						</th>
					</tr>
					<tr>
						<td align="left">
							1
						</td>
						<td align="left">
							Beauty
						</td>
					</tr>
					<tr>
						<td align="left">
							2
						</td>
						<td align="left">
							Charity
						</td>
					</tr>
					<tr>
						<td align="left">
							3
						</td>
						<td align="left">
							Greater Good
						</td>
					</tr>
					<tr>
						<td align="left">
							4
						</td>
						<td align="left">
							Life
						</td>
					</tr>
					<tr>
						<td align="left">
							5
						</td>
						<td align="left">
							Respect
						</td>
					</tr>
					<tr>
						<td align="left">
							6
						</td>
						<td align="left">
							Self-sacrifice
						</td>
					</tr>
				</table>
				<br /><br />
				<table>
					<tr>
						<th colspan="2">
							<h3 class="nobackground">Evil Ideals</h3>
						</th>
					</tr>
					<tr>
						<th width="50%">
							1d6
						</th>
						<th width="50%">
							Ideal
						</th>
					</tr>
					<tr>
						<td align="left">
							1
						</td>
						<td align="left">
							Domination
						</td>
					</tr>
					<tr>
						<td align="left">
							2
						</td>
						<td align="left">
							Greed
						</td>
					</tr>
					<tr>
						<td align="left">
							3
						</td>
						<td align="left">
							Might
						</td>
					</tr>
					<tr>
						<td align="left">
							4
						</td>
						<td align="left">
							Pain
						</td>
					</tr>
					<tr>
						<td align="left">
							5
						</td>
						<td align="left">
							Retribution
						</td>
					</tr>
					<tr>
						<td align="left">
							6
						</td>
						<td align="left">
							Slaughter
						</td>
					</tr>
				</table>
				<br /><br />
				<table>
					<tr>
						<th colspan="2">
							<h3 class="nobackground">Lawful Ideals</h3>
						</th>
					</tr>
					<tr>
						<th width="50%">
							1d6
						</th>
						<th width="50%">
							Ideal
						</th>
					</tr>
					<tr>
						<td align="left">
							1
						</td>
						<td align="left">
							Community
						</td>
					</tr>
					<tr>
						<td align="left">
							2
						</td>
						<td align="left">
							Fairness
						</td>
					</tr>
					<tr>
						<td align="left">
							3
						</td>
						<td align="left">
							Honor
						</td>
					</tr>
					<tr>
						<td align="left">
							4
						</td>
						<td align="left">
							Logic
						</td>
					</tr>
					<tr>
						<td align="left">
							5
						</td>
						<td align="left">
							Responsibility
						</td>
					</tr>
					<tr>
						<td align="left">
							6
						</td>
						<td align="left">
							Tradition
						</td>
					</tr>
				</table>
				<br /><br />
				<table>
					<tr>
						<th colspan="2">
							<h3 class="nobackground">Chaotic Ideals</h3>
						</th>
					</tr>
					<tr>
						<th width="50%">
							1d6
						</th>
						<th width="50%">
							Ideal
						</th>
					</tr>
					<tr>
						<td align="left">
							1
						</td>
						<td align="left">
							Change
						</td>
					</tr>
					<tr>
						<td align="left">
							2
						</td>
						<td align="left">
							Creativity
						</td>
					</tr>
					<tr>
						<td align="left">
							3
						</td>
						<td align="left">
							Freedom
						</td>
					</tr>
					<tr>
						<td align="left">
							4
						</td>
						<td align="left">
							Independence
						</td>
					</tr>
					<tr>
						<td align="left">
							5
						</td>
						<td align="left">
							No Limits
						</td>
					</tr>
					<tr>
						<td align="left">
							6
						</td>
						<td align="left">
							Whimsy
						</td>
					</tr>
				</table>
				<br /><br />
				<table>
					<tr>
						<th colspan="2">
							<h3 class="nobackground">Neutral Ideals</h3>
						</th>
					</tr>
					<tr>
						<th width="50%">
							1d6
						</th>
						<th width="50%">
							Ideal
						</th>
					</tr>
					<tr>
						<td align="left">
							1
						</td>
						<td align="left">
							Balance
						</td>
					</tr>
					<tr>
						<td align="left">
							2
						</td>
						<td align="left">
							Knowledge
						</td>
					</tr>
					<tr>
						<td align="left">
							3
						</td>
						<td align="left">
							Live and let live
						</td>
					</tr>
					<tr>
						<td align="left">
							4
						</td>
						<td align="left">
							Moderation
						</td>
					</tr>
					<tr>
						<td align="left">
							5
						</td>
						<td align="left">
							Neutrality
						</td>
					</tr>
					<tr>
						<td align="left">
							6
						</td>
						<td align="left">
							People
						</td>
					</tr>
				</table>
				<br /><br />
				<table>
					<tr>
						<th colspan="2">
							<h3 class="nobackground">Other Ideals</h3>
						</th>
					</tr>
					<tr>
						<th width="50%">
							1d6
						</th>
						<th width="50%">
							Ideal
						</th>
					</tr>
					<tr>
						<td align="left">
							1
						</td>
						<td align="left">
							Aspiration
						</td>
					</tr>
					<tr>
						<td align="left">
							2
						</td>
						<td align="left">
							Discovery
						</td>
					</tr>
					<tr>
						<td align="left">
							3
						</td>
						<td align="left">
							Glory
						</td>
					</tr>
					<tr>
						<td align="left">
							4
						</td>
						<td align="left">
							Nation
						</td>
					</tr>
					<tr>
						<td align="left">
							5
						</td>
						<td align="left">
							Redemption
						</td>
					</tr>
					<tr>
						<td align="left">
							6
						</td>
						<td align="left">
							Self-knowing
						</td>
					</tr>
				</table>
				<br />
				<table id="npcbonds">
					<tr>
						<th colspan="2">
							<h3 class="nobackground">NPC Bonds</h3>
						</th>
					</tr>
					<tr>
						<th>
							1d10
						</th>
						<th>
							Bonds
						</th>
					</tr>
					<tr>
						<td align="left">
							1
						</td>
						<td align="left">
							Dedicated to fulfill a personal goal
						</td>
					</tr>
					<tr>
						<td align="left">
							2
						</td>
						<td align="left">
							Protective of close family members
						</td>
					</tr>
					<tr>
						<td align="left">
							3
						</td>
						<td align="left">
							Protective of colleagues or compatriots
						</td>
					</tr>
					<tr>
						<td align="left">
							4
						</td>
						<td align="left">
							Loyal to a benefactor, patron or employer
						</td>
					</tr>
					<tr>
						<td align="left">
							5
						</td>
						<td align="left">
							Captivated by a romantic interest
						</td>
					</tr>
					<tr>
						<td align="left">
							6
						</td>
						<td align="left">
							Drawn to a special place
						</td>
					</tr>
					<tr>
						<td align="left">
							7
						</td>
						<td align="left">
							Protective of sentimental keepsake
						</td>
					</tr>
					<tr>
						<td align="left">
							8
						</td>
						<td align="left">
							Protective of valuable possession
						</td>
					</tr>
					<tr>
						<td align="left">
							9
						</td>
						<td align="left">
							Out for revenge
						</td>
					</tr>
					<tr>
						<td align="left">
							10
						</td>
						<td align="left">
							Roll 2 times (ignoring d10 result)
						</td>
					</tr>
				</table>
				<br />
				<table id="npcflaws">
					<tr>
						<th colspan="2">
							<h3 class="nobackground">NPC Flaws and Secrets</h3>
						</th>
					</tr>
					<tr>
						<th>
							1d20
						</th>
						<th>
							Flaw or Secret
						</th>
					</tr>
					<tr>
						<td align="left">
							1
						</td>
						<td align="left">
							Forbidden love or susceptibility to romance
						</td>
					</tr>
					<tr>
						<td align="left">
							2
						</td>
						<td align="left">
							Enjoys decadent pleasure
						</td>
					</tr>
					<tr>
						<td align="left">
							3
						</td>
						<td align="left">
							Arrogance
						</td>
					</tr>
					<tr>
						<td align="left">
							4
						</td>
						<td align="left">
							Envies another creature
						</td>
					</tr>
					<tr>
						<td align="left">
							5
						</td>
						<td align="left">
							Overpowering greed
						</td>
					</tr>
					<tr>
						<td align="left">
							6
						</td>
						<td align="left">
							Prone to rage
						</td>
					</tr>
					<tr>
						<td align="left">
							7
						</td>
						<td align="left">
							Has powerful enemy
						</td>
					</tr>
					<tr>
						<td align="left">
							8
						</td>
						<td align="left">
							Specific Phobia
						</td>
					</tr>
					<tr>
						<td align="left">
							9
						</td>
						<td align="left">
							Shameful or scandalous story
						</td>
					</tr>
					<tr>
						<td align="left">
							10
						</td>
						<td align="left">
							Secret crime or misdeed
						</td>
					</tr>
					<tr>
						<td align="left">
							11
						</td>
						<td align="left">
							Possession of forbidden lore
						</td>
					</tr>
					<tr>
						<td align="left">
							12
						</td>
						<td align="left">
							Foolhardy bravery
						</td>
					</tr>
				</table>
				<br />
				<table id="namegenerator">
					<tr>
						<th colspan="4">
							<h3 class="nobackground">Name Generator</h3>
						</th>
					</tr>
					<tr>
						<th>
							1d20
						</th>
						<th>
							Beginning
						</th>
						<th>
							Middle
						</th>
						<th>
							End
						</th>
					</tr>
					<tr>
						<td align="left">
							1
						</td>
						<td align="left">
							—
						</td>
						<td align="left">
							bar
						</td>
						<td align="left">
							—
						</td>
					</tr>
					<tr>
						<td align="left">
							2
						</td>
						<td align="left">
							—
						</td>
						<td align="left">
							ched
						</td>
						<td align="left">
							-a
						</td>
					</tr>
					<tr>
						<td align="left">
							3
						</td>
						<td align="left">
							—
						</td>
						<td align="left">
							dell
						</td>
						<td align="left">
							-ac
						</td>
					</tr>
					<tr>
						<td align="left">
							4
						</td>
						<td align="left">
							—
						</td>
						<td align="left">
							far
						</td>
						<td align="left">
							-ai
						</td>
					</tr>
					<tr>
						<td align="left">
							5
						</td>
						<td align="left">
							A-
						</td>
						<td align="left">
							gran
						</td>
						<td align="left">
							-al
						</td>
					</tr>
					<tr>
						<td align="left">
							6
						</td>
						<td align="left">
							Be-
						</td>
						<td align="left">
							hal
						</td>
						<td align="left">
							-am
						</td>
					</tr>
					<tr>
						<td align="left">
							7
						</td>
						<td align="left">
							De-
						</td>
						<td align="left">
							jen
						</td>
						<td align="left">
							-an
						</td>
					</tr>
					<tr>
						<td align="left">
							8
						</td>
						<td align="left">
							El-
						</td>
						<td align="left">
							kel
						</td>
						<td align="left">
							-ar
						</td>
					</tr>
					<tr>
						<td align="left">
							9
						</td>
						<td align="left">
							Fa-
						</td>
						<td align="left">
							lim
						</td>
						<td align="left">
							-ea
						</td>
					</tr>
					<tr>
						<td align="left">
							10
						</td>
						<td align="left">
							Jo-
						</td>
						<td align="left">
							mor
						</td>
						<td align="left">
							-el
						</td>
					</tr>
					<tr>
						<td align="left">
							11
						</td>
						<td align="left">
							Ki-
						</td>
						<td align="left">
							net
						</td>
						<td align="left">
							-er
						</td>
					</tr>
					<tr>
						<td align="left">
							12
						</td>
						<td align="left">
							La-
						</td>
						<td align="left">
							penn
						</td>
						<td align="left">
							-ess
						</td>
					</tr>
					<tr>
						<td align="left">
							13
						</td>
						<td align="left">
							Ma-
						</td>
						<td align="left">
							quill
						</td>
						<td align="left">
							-ett
						</td>
					</tr>
					<tr>
						<td align="left">
							14
						</td>
						<td align="left">
							Na-
						</td>
						<td align="left">
							rond
						</td>
						<td align="left">
							-ic
						</td>
					</tr>
					<tr>
						<td align="left">
							15
						</td>
						<td align="left">
							O-
						</td>
						<td align="left">
							sark
						</td>
						<td align="left">
							-id
						</td>
					</tr>
					<tr>
						<td align="left">
							16
						</td>
						<td align="left">
							Pa-
						</td>
						<td align="left">
							shen
						</td>
						<td align="left">
							-il
						</td>
					</tr>
					<tr>
						<td align="left">
							17
						</td>
						<td align="left">
							Re-
						</td>
						<td align="left">
							tur
						</td>
						<td align="left">
							-in
						</td>
					</tr>
					<tr>
						<td align="left">
							18
						</td>
						<td align="left">
							Si-
						</td>
						<td align="left">
							vash
						</td>
						<td align="left">
							-is
						</td>
					</tr>
					<tr>
						<td align="left">
							19
						</td>
						<td align="left">
							Ta-
						</td>
						<td align="left">
							yor
						</td>
						<td align="left">
							-or
						</td>
					</tr>
					<tr>
						<td align="left">
							20
						</td>
						<td align="left">
							Va-
						</td>
						<td align="left">
							zen
						</td>
						<td align="left">
							-us
						</td>
					</tr>
				</table>
				<h1 id="encounterbuilding">
					Building Encounters
				</h1>
				<p id="encounterprocess">
					<i>You can use this process after you've already designed an encounter to determine its difficulty or you can use it to start an Encounter from scratch with a target difficulty in mind.
						</i></p>
				<dl>
					<dt>
						<h3 class="nobackground">Step 1</h3>
					</dt>
					<dd>
						Start by making a note of the Exp values that define the four difficulty categories for your group. For each adventurer in the party refer to the <a href="#encounterdifficulty">Encounter Difficulty Exp</a> per Character table, noting the exp values for each character in each category. Then for each category add the exp values for each character in that category to determine the difficulty thresholds for encounters.
					</dd>
					<dt>
						<h3 class="nobackground">Step 2</h3>
					</dt>
					<dd>
						Next, select each creature you want to include in your encounter. Add up their Exp Values, which can be found in their stat block next to their Challenge Rating, to get the encounter's Exp Value.
					</dd>
					<dt>
						<h3 class="nobackground">Step 3</h3>
					</dt>
					<dd>
						Adjust the encounter Exp Value by the multiplier found in the <a href="#encounterexp">Encounter Exp</a> Multipliers table according to the size of the adventuring party.
					</dd>
					<dt>
						<h3 class="nobackground">Step 4</h3>
					</dt>
					<dd>
						Compare the adjusted encounter Exp Value with the difficulty thresholds you calculated in Step 1 to get an estimate of the encounter's difficulty. Adjust the encounter accordingly.
					</dd>
				</dl>
				<br />
				<table id="encounterdifficulty">
					<tr>
						<th colspan="5">
							<h3 class="nobackground">Encounter Difficulty</h3>
						</th>
					</tr>
					<tr>
						<th>
							Level
						</th>
						<th>
							Easy
						</th>
						<th>
							Med
						</th>
						<th>
							Hard
						</th>
						<th>
							Deadly
						</th>
					</tr>
					<tr>
						<td align="left">
							1
						</td>
						<td align="left">
							25
						</td>
						<td align="left">
							50
						</td>
						<td align="left">
							75
						</td>
						<td align="left">
							100
						</td>
					</tr>
					<tr>
						<td align="left">
							2
						</td>
						<td align="left">
							50
						</td>
						<td align="left">
							100
						</td>
						<td align="left">
							150
						</td>
						<td align="left">
							200
						</td>
					</tr>
					<tr>
						<td align="left">
							3
						</td>
						<td align="left">
							75
						</td>
						<td align="left">
							150
						</td>
						<td align="left">
							225
						</td>
						<td align="left">
							400
						</td>
					</tr>
					<tr>
						<td align="left">
							4
						</td>
						<td align="left">
							125
						</td>
						<td align="left">
							250
						</td>
						<td align="left">
							375
						</td>
						<td align="left">
							500
						</td>
					</tr>
					<tr>
						<td align="left">
							5
						</td>
						<td align="left">
							250
						</td>
						<td align="left">
							500
						</td>
						<td align="left">
							750
						</td>
						<td align="left">
							1100
						</td>
					</tr>
					<tr>
						<td align="left">
							6
						</td>
						<td align="left">
							300
						</td>
						<td align="left">
							600
						</td>
						<td align="left">
							900
						</td>
						<td align="left">
							1400
						</td>
					</tr>
					<tr>
						<td align="left">
							7
						</td>
						<td align="left">
							350
						</td>
						<td align="left">
							750
						</td>
						<td align="left">
							1100
						</td>
						<td align="left">
							1700
						</td>
					</tr>
					<tr>
						<td align="left">
							8
						</td>
						<td align="left">
							450
						</td>
						<td align="left">
							900
						</td>
						<td align="left">
							1400
						</td>
						<td align="left">
							2100
						</td>
					</tr>
					<tr>
						<td align="left">
							9
						</td>
						<td align="left">
							550
						</td>
						<td align="left">
							1100
						</td>
						<td align="left">
							1600
						</td>
						<td align="left">
							2400
						</td>
					</tr>
					<tr>
						<td align="left">
							10
						</td>
						<td align="left">
							600
						</td>
						<td align="left">
							1200
						</td>
						<td align="left">
							1900
						</td>
						<td align="left">
							2800
						</td>
					</tr>
					<tr>
						<td align="left">
							11
						</td>
						<td align="left">
							800
						</td>
						<td align="left">
							1600
						</td>
						<td align="left">
							2400
						</td>
						<td align="left">
							3600
						</td>
					</tr>
					<tr>
						<td align="left">
							12
						</td>
						<td align="left">
							1000
						</td>
						<td align="left">
							2000
						</td>
						<td align="left">
							3000
						</td>
						<td align="left">
							4500
						</td>
					</tr>
					<tr>
						<td align="left">
							13
						</td>
						<td align="left">
							1100
						</td>
						<td align="left">
							2200
						</td>
						<td align="left">
							3400
						</td>
						<td align="left">
							5100
						</td>
					</tr>
					<tr>
						<td align="left">
							14
						</td>
						<td align="left">
							1250
						</td>
						<td align="left">
							2500
						</td>
						<td align="left">
							3800
						</td>
						<td align="left">
							5700
						</td>
					</tr>
					<tr>
						<td align="left">
							15
						</td>
						<td align="left">
							1400
						</td>
						<td align="left">
							2800
						</td>
						<td align="left">
							4300
						</td>
						<td align="left">
							6400
						</td>
					</tr>
					<tr>
						<td align="left">
							16
						</td>
						<td align="left">
							1600
						</td>
						<td align="left">
							3200
						</td>
						<td align="left">
							4800
						</td>
						<td align="left">
							7200
						</td>
					</tr>
					<tr>
						<td align="left">
							17
						</td>
						<td align="left">
							2000
						</td>
						<td align="left">
							3900
						</td>
						<td align="left">
							5900
						</td>
						<td align="left">
							8800
						</td>
					</tr>
					<tr>
						<td align="left">
							18
						</td>
						<td align="left">
							2100
						</td>
						<td align="left">
							4200
						</td>
						<td align="left">
							6300
						</td>
						<td align="left">
							9500
						</td>
					</tr>
					<tr>
						<td align="left">
							19
						</td>
						<td align="left">
							2400
						</td>
						<td align="left">
							4900
						</td>
						<td align="left">
							7300
						</td>
						<td align="left">
							10900
						</td>
					</tr>
					<tr>
						<td align="left">
							20
						</td>
						<td align="left">
							2800
						</td>
						<td align="left">
							5700
						</td>
						<td align="left">
							8500
						</td>
						<td align="left">
							12700
						</td>
					</tr>
				</table>
				<br /><br />
				<table id="encounterexp">
					<tr>
						<th colspan="4">
							<h3 class="nobackground">Encounter EXP Multiplier</h3>
						</th>
					</tr>
					<tr>
						<th>
							# of Enemies
						</th>
						<th colspan="3">
							Party Size & Modifier
						</th>
					</tr>
					<tr>
						<td align="left"></td>
						<td align="left">
							1-2
						</td>
						<td align="left">
							3-5
						</td>
						<td align="left">
							6+
						</td>
					</tr>
					<tr>
						<td align="left">
							Single Enemy
						</td>
						<td align="left">
							x 1.5
						</td>
						<td align="left">
							-
						</td>
						<td align="left">
							x .5
						</td>
					</tr>
					<tr>
						<td align="left">
							Pair
						</td>
						<td align="left">
							x 2
						</td>
						<td align="left">
							x 1.5
						</td>
						<td align="left">
							-
						</td>
					</tr>
					<tr>
						<td align="left">
							Group (3-6)
						</td>
						<td align="left">
							x 2.5
						</td>
						<td align="left">
							x 2
						</td>
						<td align="left">
							x 1.5
						</td>
					</tr>
					<tr>
						<td align="left">
							Gang (7-10)
						</td>
						<td align="left">
							x 3
						</td>
						<td align="left">
							x 2.5
						</td>
						<td align="left">
							x 2
						</td>
					</tr>
					<tr>
						<td align="left">
							Mob (11-14)
						</td>
						<td align="left">
							x 4
						</td>
						<td align="left">
							x 3
						</td>
						<td align="left">
							x 2.5
						</td>
					</tr>
					<tr>
						<td align="left">
							Horde (15+)
						</td>
						<td align="left">
							x 5
						</td>
						<td align="left">
							x 4
						</td>
						<td align="left">
							x 3
						</td>
					</tr>
				</table>
				<br />
				<table id="randomencounters">
					<tr>
						<th colspan="2">
							<h3 class="nobackground">Random Encounters</h3>
						</th>
					</tr>
					<tr>
						<th>
							Area
						</th>
						<th>
							Roll 1d20...
						</th>
					</tr>
					<tr>
						<td align="left">
							Dangerous overworld area
						</td>
						<td align="left">
							<ul>
								<li>Once per hour of travel.
								</li>
								<li>Once per 20 minutes of Rest during the day.
								</li>
								<li>Once at night.
								</li>
							</ul>
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<center>
								<b>Encounter on: 18-20 or 19-20</b>
							</center>
						</td>
					</tr>
					<tr>
						<td align="left">
							Uncivilized, unsettled, or unknown overworld area
						</td>
						<td align="left">
							<ul>
								<li>Once During the day.
								</li>
								<li>Once per 20 minutes of Rest during the day.
								</li>
								<li>Once at night.
								</li>
							</ul>
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<center>
								<b>Encounter on: 17-20 or 18-20</b>
							</center>
						</td>
					</tr>
					<tr>
						<td align="left">
							Well-Traveled overworld area
						</td>
						<td align="left">
							<ul>
								<li>Once a day-night cycle
								</li>
							</ul>
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<center>
								<b>Encounter on: 20</b>
							</center>
						</td>
					</tr>
					<tr>
						<td align="left">
							Structure or formation populated by hostiles
						</td>
						<td align="left">
							<ul>
								<li>Once per 15 minutes of rest or idle
								</li>
							</ul>
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<center>
								<b>Encounter on: 17-20 or 18-20</b>
							</center>
						</td>
					</tr>
				</table>
				<br />
				<table id="sizecategories">
					<tr>
						<th colspan="4">
							<h3 class="nobackground">Size Categories</h3>
						</th>
					</tr>
					<tr>
						<th>
							Size
						</th>
						<th>
							Space (ft)
						</th>
						<th>
							HP
						</th>
						<th>
							Examples
						</th>
					</tr>
					<tr>
						<td align="left">
							Tiny
						</td>
						<td align="left">
							2.5x2.5
						</td>
						<td align="left">
							d4 (2.5)
						</td>
						<td align="left">
							Hawk, Imp, Rat, Sprite
						</td>
					</tr>
					<tr>
						<td align="left">
							Small
						</td>
						<td align="left">
							5x5
						</td>
						<td align="left">
							d6 (3.5)
						</td>
						<td align="left">
							Giant rat, Goblin, Kobold
						</td>
					</tr>
					<tr>
						<td align="left">
							Medium
						</td>
						<td align="left">
							5x5
						</td>
						<td align="left">
							d8 (4.5)
						</td>
						<td align="left">
							Gnoll, Orc, Werewolf
						</td>
					</tr>
					<tr>
						<td align="left">
							Large
						</td>
						<td align="left">
							10x10
						</td>
						<td align="left">
							d10 (5.5)
						</td>
						<td align="left">
							Chimera, Hippogriff, Ogre
						</td>
					</tr>
					<tr>
						<td align="left">
							Huge
						</td>
						<td align="left">
							15x15
						</td>
						<td align="left">
							d12 (6.5)
						</td>
						<td align="left">
							Cyclops, Fire Giant, Treant
						</td>
					</tr>
					<tr>
						<td align="left">
							Gargantuan
						</td>
						<td align="left">
							20+x20+
						</td>
						<td align="left">
							d10 (10.5)
						</td>
						<td align="left">
							Ancient Dragon, Kraken
						</td>
					</tr>
				</table>
			</dd>
		</dl>
        <h1 id="items">Adventuring Items List</h1><br />
        <table id="armor">
			<tr><th colspan="4"><h3 class="nobackground">Basic Armor</h3></th></tr>
            <tr><th>Armor</th><th align="right" width="20%">Cost</th><th width="20%">AC</th><th align="right" width="20%">Weight</th></tr>
            <tr><td colspan="4"><i>Light Armor</i></td></tr>
            <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Padded²</td><td align="right">5 gp</td><td>11</td><td align="right">8 lb.</td></tr>
            <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Leather</td><td align="right">10 gp</td><td>11</td><td align="right">10 lb.</td></tr>
            <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Studded leather</td><td align="right">45 gp</td><td>12</td><td align="right">13 lb.</td></tr>
            <tr><td colspan="4"><i>Medium Armor</i></td></tr>
            <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Hide</td><td align="right">10 gp</td><td>12</td><td align="right">12 lb.</td></tr>
            <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Chain shirt</td><td align="right">50 gp</td><td>13</td><td align="right">20 lb.</td></tr>
            <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Scale mail²</td><td align="right">50 gp</td><td>14</td><td align="right">45 lb.</td></tr>
            <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Breastplate</td><td align="right">400 gp</td><td>14</td><td align="right">20 lb.</td></tr>
            <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Half plate²</td><td align="right">750 gp</td><td>15</td><td align="right">40 lb.</td></tr>
            <tr><td colspan="4"><i>Heavy Armor</i></td></tr>
            <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Ring mail²</td><td align="right">30 gp</td><td>14</td><td align="right">40 lb.</td></tr>
            <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Chain mail²</td><td align="right">75 gp</td><td>16</td><td align="right">55 lb.</td></tr>
            <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Splint²</td><td align="right">200 gp</td><td>17</td><td align="right">60 lb.</td></tr>
            <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Plate²</td><td align="right">1,500 gp</td><td>18</td><td align="right">65 lb.</td></tr>
            <tr><td colspan="4"><i>Shield</i></td></tr>
            <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Shield</td><td align="right">10 gp</td><td>+2</td><td align="right">6 lb.</td></tr>
        </table>
		        ² Disadvantage on Dexterity (Stealth) checks
		<br />

		<div class="small-font">
         <table id="weapons">
			 <tr><th colspan="5"><h3 class="nobackground">Basic Weapons</h3></th></tr>
             <tr><th>Name</th><th>Cost</th><th>Dmg</th><th>Weight</th><th>Properties<sup>*</sup></th></tr>
             <tr><td colspan="5"><i>Simple Melee Weapons</i></td></tr>
             <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Club</td><td align="right">1 sp</td><td align="left">1d4 B</td><td align="right">2 lb.</td><td>Li</td></tr>
             <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Dagger</td><td align="right">2 gp</td><td align="left">1d4 P</td><td align="right">1 lb.</td><td>F, Li, Th Rg(20/60)</td></tr>
             <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Greatclub</td><td align="right">2 sp</td><td align="left">1d8 B</td><td align="right">10 lb.</td><td>2H</td></tr>
             <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Handaxe</td><td align="right">5 gp</td><td align="left">1d6 S</td><td align="right">2 lb.</td><td>Li, Th Rg(20/60)</td></tr>
             <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Javelin</td><td align="right">5 sp</td><td align="left">1d6 P</td><td align="right">2 lb.</td><td>Th Rg(30/120)</td></tr>
             <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Light &nbsp;&nbsp;&nbsp;&nbsp;hammer</td><td align="right">2 gp</td><td align="left">1d4 B</td><td align="right">2 lb.</td><td>Li, Th Rg(20/60)</td></tr>
             <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Mace</td><td align="right">5 gp</td><td align="left">1d6 B</td><td align="right">4 lb.</td><td>-</td></tr>
             <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Quarterstaff</td><td align="right">2 sp</td><td align="left">1d6 B</td><td align="right">4 lb.</td><td>V(1d10)</td></tr>
             <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Sickle</td><td align="right">1 gp</td><td align="left">1d4 S</td><td align="right">2 lb.</td><td>Li</td></tr>
             <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Spear</td><td align="right">1 gp</td><td align="left">1d6 P</td><td align="right">3 lb.</td><td>Th Rg(20/60), V(1d8)</td></tr>
             <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Unarmed &nbsp;&nbsp;&nbsp;&nbsp;strike</td><td align="right">—</td><td align="left">1 B</td><td align="right">—</td><td>-</td></tr>
             <tr><td colspan="5"><i>Simple Ranged Weapons</i></td></tr>
             <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Crossbow, &nbsp;&nbsp;&nbsp;&nbsp;light</td><td align="right">25 gp</td><td align="left">1d8 P</td><td align="right">5 lb.</td><td>A Rg(80/320), Ld, 2H</td></tr>
             <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Dart</td><td align="right">5 cp</td><td align="left">1d4 P</td><td align="right">1/4 lb.</td><td>F, Th Rg(20/60)</td></tr>
             <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Shortbow</td><td align="right">25 gp</td><td align="left">1d6 P</td><td align="right">2 lb.</td><td>A Rg(80/320), 2H</td></tr>
             <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Sling</td><td align="right">1 sp</td><td align="left">1d4 B</td><td align="right">—</td><td>A Rg(320)</td></tr>
             <tr><td colspan="5"><i>Martial Melee Weapons</i></td></tr>
             <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Battleaxe</td><td align="right">10 gp</td><td align="left">1d8 S</td><td align="right">4 lb.</td><td>V(1d10)</td></tr>
             <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Flail</td><td align="right">10 gp</td><td align="left">1d8 B</td><td align="right">2 lb.</td><td>-</td></tr>
             <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Glaive</td><td align="right">20 gp</td><td align="left">1d10 S</td><td align="right">6 lb.</td><td>H, Re, 2H</td></tr>
             <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Greataxe</td><td align="right">30 gp</td><td align="left">1d12 S</td><td align="right">7 lb.</td><td>H, 2H</td></tr>
             <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Greatsword</td><td align="right">50 gp</td><td align="left">2d6 S</td><td align="right">6 lb.</td><td>H, 2H</td></tr>
             <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Halberd</td><td align="right">20 gp</td><td align="left">1d10 S</td><td align="right">6 lb.</td><td>H, Re, 2H</td></tr>
             <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Lance</td><td align="right">10 gp</td><td align="left">1d12 P</td><td align="right">6 lb.</td><td>R, Sp</td></tr>
             <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Longsword</td><td align="right">15 gp</td><td align="left">1d8 S</td><td align="right">3 lb.</td><td>V(1d10)</td></tr>
             <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Maul</td><td align="right">10 gp</td><td align="left">2d6 B</td><td align="right">10 lb.</td><td>H, 2H</td></tr>
             <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Morningstar</td><td align="right">15 gp</td><td align="left">1d8 P</td><td align="right">4 lb.</td><td>-</td></tr>
             <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Pike</td><td align="right">5 gp</td><td align="left">1d10 P</td><td align="right">18 lb.</td><td>H, Re, 2H</td></tr>
             <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Rapier</td><td align="right">25 gp</td><td align="left">1d8 P</td><td align="right">2 lb.</td><td>F</td></tr>
             <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Scimitar</td><td align="right">25 gp</td><td align="left">1d6 S</td><td align="right">3 lb.</td><td>F, Li</td></tr>
             <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Shortsword</td><td align="right">10 gp</td><td align="left">1d6 P</td><td align="right">2 lb.</td><td>F, Li</td></tr>
             <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Trident</td><td align="right">5 gp</td><td align="left">1d6 P</td><td align="right">4 lb.</td><td>Th Rg(20/60), V(1d8)</td></tr>
             <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;War pick</td><td align="right">5 gp</td><td align="left">1d8 P</td><td align="right">2 lb.</td><td>-</td></tr>
             <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Warhammer</td><td align="right">15 gp</td><td align="left">1d8 B</td><td align="right">2 lb.</td><td>V(1d10)</td></tr>
             <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Whip</td><td align="right">2 gp</td><td align="left">1d4 S</td><td align="right">3 lb.</td><td>F, Re</td></tr>
             <tr><td colspan="5"><i>Martial Ranged Weapons</i></td></tr>
             <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Blowgun</td><td align="right">10 gp</td><td align="left">1 P</td><td align="right">1 lb.</td><td>A Rg(25/100), Ld</td></tr>
             <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Crossbow, &nbsp;&nbsp;&nbsp;&nbsp;hand</td><td align="right">75 gp</td><td align="left">1d6 P</td><td align="right">3 lb.</td><td>A Rg(30/120), Li, Ld</td></tr>
             <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Crossbow, &nbsp;&nbsp;&nbsp;&nbsp;heavy</td><td align="right">50 gp</td><td align="left">1d10 P</td><td align="right">18 lb.</td><td>A Rg(100/400), H, Ld, 2H</td></tr>
             <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Longbow</td><td align="right">50 gp</td><td align="left">1d8 P</td><td align="right">2 lb.</td><td>A Rg(150,600), H, 2H</td></tr>
             <tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Net</td><td align="right">1 gp</td><td align="left">—</td><td align="right">3 lb.</td><td>Sp, Th Rg(5/15)</td></tr>
        </table>
        </div>
        <sup>*</sup> Properties Abbreviations Below:<br />
        <i>
        &nbsp;&nbsp;&nbsp;&nbsp;2H = Two Handed <br />
        &nbsp;&nbsp;&nbsp;&nbsp;A = Ammunition<br />
        &nbsp;&nbsp;&nbsp;&nbsp;F = Finesse Weapon<br />
        &nbsp;&nbsp;&nbsp;&nbsp;H = Heavy Weapon<br />
        &nbsp;&nbsp;&nbsp;&nbsp;Ld = Loading<br />
        &nbsp;&nbsp;&nbsp;&nbsp;Li = Light Weapon<br />
        &nbsp;&nbsp;&nbsp;&nbsp;Re = Reach<br />
        &nbsp;&nbsp;&nbsp;&nbsp;Rg = Range<br />
        &nbsp;&nbsp;&nbsp;&nbsp;Sp = Special<br />
        &nbsp;&nbsp;&nbsp;&nbsp;Th = Thrown<br />
        &nbsp;&nbsp;&nbsp;&nbsp;V = Versatile<br /></i>

		<br /><br />

		<h2 id="weapon-properties">Weapon Properties</h2>
		<dl>
			<dt>Ammunition</dt>
				<dd>You can use a weapon that has the ammunition property to make a ranged attack only if you have ammunition to fire from the weapon. Each time you attack with the weapon, you expend one piece of ammunition. Drawing the ammunition from a quiver, case, or other container is part of the attack. At the end of the battle, you can recover half your expended ammunition by taking a minute to search the battlefield.</dd>
			<dt>Finesse</dt>
				<dd>When making an attack with a finesse weapon, you use your choice of your Strength or Dexterity modifier for the attack and damage rolls. You must use the same modifier for both rolls.</dd>
			<dt>Heavy</dt>
				<dd>Small creatures have disadvantage on attack rolls with heavy weapons. A heavy weapon's size and bulk make it too large for a Small creature to use effectively.</dd>
			<dt>Light</dt>
				<dd>A light weapon is small and easy to handle, making it ideal for use when fighting with two weapons.</dd>
			<dt>Loading</dt>
				<dd>Because of the time required to load this weapon, you can fire only one piece of ammunition from it when you use an action, bonus action, or reaction to fire it, regardless of the number of attacks you can normally make.</dd>
			<dt>Range</dt>
				<dd>A weapon that can be used to make a ranged attack has a range shown in parentheses after the ammunition or thrown property. The range lists two numbers. The first is the weapon's normal range in feet, and the second indicates the weapon's maximum range. When attacking a target beyond normal range, you have disadvantage on the attack roll. You can't attack a target beyond the weapon's long range.</dd>
			<dt>Reach</dt>
				<dd>This weapon adds 5 feet to your reach when you attack with it.</dd>
			<dt>Special</dt>
				<dd>A weapon with the special property has unusual rules governing its use, explained in the weapon's description (see "Special Weapons" later in this section).</dd>
			<dt>Thrown</dt>
				<dd>If a weapon has the thrown property, you can throw the weapon to make a ranged attack. If the weapon is a melee weapon, you use the same ability modifier for that attack roll and damage roll that you would use for a melee attack with the weapon. For example, if you throw a handaxe, you use your Strength, but if you throw a dagger, you can use either your Strength or your Dexterity, since the dagger has the finesse property.</dd>
			<dt>Two-Handed</dt>
				<dd>This weapon requires two hands to use.</dd>
			<dt>Versatile</dt>
				<dd>This weapon can be used with one or two hands. A damage value in parentheses appears with the property—the damage when the weapon is used with two hands to make a melee attack.</dd>
			<dt>Special Weapon (Lance)</dt>
				<dd>You have disadvantage when you use a lance to attack a target within 5 feet of you. Also, a lance requires two hands to wield when you aren't mounted.</dd>
			<dt>Special Weapon (Net)</dt>
				<dd>A Large or smaller creature hit by a net is restrained until it is freed. A net has no effect on creatures that are formless, or creatures that are Huge or larger. A creature can use its action to make a DC 10 Strength check, freeing itself or another creature within its reach on a success. Dealing 5 slashing damage to the net (AC 10) also frees the creature without harming it, ending the effect and destroying the net.
				&nbsp;&nbsp;&nbsp;&nbsp;When you use an action, bonus action, or reaction to attack with a net, you can make only one attack regardless of the number of attacks you can normally make.</dd>
		</dl>

		<br /><br />

		<table id="adventuringgear">
			<tr><th colspan="4"><h3 class="nobackground">Adventuring Gear</h3></th></tr>
			<tr><th>Item</th><th alight="right" width="20%">Cost</th><th alight="right" width="20%">Weight</th></tr>
			<tr><td>Abacus</td><td alight="right" width="20%">2 gp</td><td alight="right" width="20%">2 lb.</td></tr>
			<tr><td>Acid (vial)</td><td alight="right" width="20%">25 gp</td><td alight="right" width="20%">1 lb.</td></tr>
			<tr><td>Alchemist's fire (flask)</td><td alight="right" width="20%">50 gp</td><td alight="right" width="20%">1 lb.</td></tr>
			<tr><td colspan="3"><i>Ammunition</i></td></tr>
			<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Arrows (20)</td><td alight="right" width="20%">1 gp</td><td alight="right" width="20%">1 lb.</td></tr>
			<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Blowgun needles (50)</td><td alight="right" width="20%">1 gp</td><td alight="right" width="20%">1 lb.</td></tr>
			<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Crossbow bolts (20)</td><td alight="right" width="20%">1 gp</td><td alight="right" width="20%">1½ lb.</td></tr>
			<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Sling bullets (20)</td><td alight="right" width="20%">4 cp</td><td alight="right" width="20%">1½ lb.</td></tr>
			<tr><td>Antitoxin (vial)</td><td alight="right" width="20%">50 gp</td><td alight="right" width="20%">—</td></tr>
			<tr><td colspan="3"><i>Arcane focus</i></td></tr>
			<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Crystal</td><td alight="right" width="20%">10 gp</td><td alight="right" width="20%">1 lb.</td></tr>
			<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Orb</td><td alight="right" width="20%">20 gp</td><td alight="right" width="20%">3 lb.</td></tr>
			<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Rod</td><td alight="right" width="20%">10 gp</td><td alight="right" width="20%">2 lb.</td></tr>
			<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Staff</td><td alight="right" width="20%">5 gp</td><td alight="right" width="20%">4 lb.</td></tr>
			<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Wand</td><td alight="right" width="20%">10 gp</td><td alight="right" width="20%">1 lb.</td></tr>
			<tr><td>Backpack</td><td alight="right" width="20%">2 gp</td><td alight="right" width="20%">5 lb.</td></tr>
			<tr><td>Ball bearings (bag of 1,000)</td><td alight="right" width="20%">1 gp</td><td alight="right" width="20%">2 lb.</td></tr>
			<tr><td>Barrel</td><td alight="right" width="20%">2 gp</td><td alight="right" width="20%">70 lb.</td></tr>
			<tr><td>Basket</td><td alight="right" width="20%">4 sp</td><td alight="right" width="20%">2 lb.</td></tr>
			<tr><td>Bedroll</td><td alight="right" width="20%">1 gp</td><td alight="right" width="20%">7 lb.</td></tr>
			<tr><td>Bell</td><td alight="right" width="20%">1 gp</td><td alight="right" width="20%">—</td></tr>
			<tr><td>Blanket</td><td alight="right" width="20%">5 sp</td><td alight="right" width="20%">3 lb.</td></tr>
			<tr><td>Block and tackle</td><td alight="right" width="20%">1 gp</td><td alight="right" width="20%">5 lb.</td></tr>
			<tr><td>Book</td><td alight="right" width="20%">25 gp</td><td alight="right" width="20%">5 lb.</td></tr>
			<tr><td>Bottle, glass</td><td alight="right" width="20%">2 gp</td><td alight="right" width="20%">2 lb.</td></tr>
			<tr><td>Bucket</td><td alight="right" width="20%">5 cp</td><td alight="right" width="20%">2 lb.</td></tr>
			<tr><td>Caltrops (bag of 20)</td><td alight="right" width="20%">1 gp</td><td alight="right" width="20%">2 lb.</td></tr>
			<tr><td>Candle</td><td alight="right" width="20%">1 cp</td><td alight="right" width="20%">—</td></tr>
			<tr><td>Case, crossbow bolt</td><td alight="right" width="20%">1 gp</td><td alight="right" width="20%">1 lb.</td></tr>
			<tr><td>Case, map or scroll</td><td alight="right" width="20%">1 gp</td><td alight="right" width="20%">1 lb.</td></tr>
			<tr><td>Chain (10 feet)</td><td alight="right" width="20%">5 gp</td><td alight="right" width="20%">10 lb.</td></tr>
			<tr><td>Chalk (1 piece)</td><td alight="right" width="20%">1 cp</td><td alight="right" width="20%">—</td></tr>
			<tr><td>Chest</td><td alight="right" width="20%">5 gp</td><td alight="right" width="20%">25 lb.</td></tr>
			<tr><td>Climber's kit</td><td alight="right" width="20%">25 gp</td><td alight="right" width="20%">12 lb.</td></tr>
			<tr><td>Clothes, common</td><td alight="right" width="20%">5 sp</td><td alight="right" width="20%">3 lb.</td></tr>
			<tr><td>Clothes, costume</td><td alight="right" width="20%">5 gp</td><td alight="right" width="20%">4 lb.</td></tr>
			<tr><td>Clothes, fine</td><td alight="right" width="20%">15 gp</td><td alight="right" width="20%">6 lb.</td></tr>
			<tr><td>Clothes, traveler's</td><td alight="right" width="20%">2 gp</td><td alight="right" width="20%">4 lb.</td></tr>
			<tr><td>Component pouch</td><td alight="right" width="20%">25 gp</td><td alight="right" width="20%">2 lb.</td></tr>
			<tr><td>Crowbar</td><td alight="right" width="20%">2 gp</td><td alight="right" width="20%">5 lb.</td></tr>
			<tr><td colspan="3"><i>Druidic focus</i></td></tr>
			<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Sprig of mistletoe</td><td alight="right" width="20%">1 gp</td><td alight="right" width="20%">—</td></tr>
			<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Totem</td><td alight="right" width="20%">1 gp</td><td alight="right" width="20%">—</td></tr>
			<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Wooden staff</td><td alight="right" width="20%">5 gp</td><td alight="right" width="20%">4 lb.</td></tr>
			<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Yew wand</td><td alight="right" width="20%">10 gp</td><td alight="right" width="20%">1 lb.</td></tr>
			<tr><td>Fishing tackle</td><td alight="right" width="20%">1 gp</td><td alight="right" width="20%">4 lb.</td></tr>
			<tr><td>Flask or tankard</td><td alight="right" width="20%">2 cp</td><td alight="right" width="20%">1 lb.</td></tr>
			<tr><td>Grappling hook</td><td alight="right" width="20%">2 gp</td><td alight="right" width="20%">4 lb.</td></tr>
			<tr><td>Hammer</td><td alight="right" width="20%">1 gp</td><td alight="right" width="20%">3 lb.</td></tr>
			<tr><td>Hammer, sledge</td><td alight="right" width="20%">2 gp</td><td alight="right" width="20%">10 lb.</td></tr>
			<tr><td>Healer's kit</td><td alight="right" width="20%">5 gp</td><td alight="right" width="20%">3 lb.</td></tr>
			<tr><td colspan="3"><i>Holy symbol</i></td></tr>
			<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Amulet</td><td alight="right" width="20%">5 gp</td><td alight="right" width="20%">1 lb.</td></tr>
			<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Emblem</td><td alight="right" width="20%">5 gp</td><td alight="right" width="20%">—</td></tr>
			<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Reliquary</td><td alight="right" width="20%">5 gp</td><td alight="right" width="20%">2 lb.</td></tr>
			<tr><td>Holy water (flask)</td><td alight="right" width="20%">25 gp</td><td alight="right" width="20%">1 lb.</td></tr>
			<tr><td>Hourglass</td><td alight="right" width="20%">25 gp</td><td alight="right" width="20%">1 lb.</td></tr>
			<tr><td>Hunting trap</td><td alight="right" width="20%">5 gp</td><td alight="right" width="20%">25 lb.</td></tr>
			<tr><td>Ink (1 ounce bottle)</td><td alight="right" width="20%">10 gp</td><td alight="right" width="20%">—</td></tr>
			<tr><td>Ink pen</td><td alight="right" width="20%">2 cp</td><td alight="right" width="20%">—</td></tr>
			<tr><td>Jug or pitcher</td><td alight="right" width="20%">2 cp</td><td alight="right" width="20%">4 lb.</td></tr>
			<tr><td>Ladder (10-foot)</td><td alight="right" width="20%">1 sp</td><td alight="right" width="20%">25 lb.</td></tr>
			<tr><td>Lamp</td><td alight="right" width="20%">5 sp</td><td alight="right" width="20%">1 lb.</td></tr>
			<tr><td>Lantern, bullseye</td><td alight="right" width="20%">10 gp</td><td alight="right" width="20%">2 lb.</td></tr>
			<tr><td>Lantern, hooded</td><td alight="right" width="20%">5 gp</td><td alight="right" width="20%">2 lb.</td></tr>
			<tr><td>Lock</td><td alight="right" width="20%">10 gp</td><td alight="right" width="20%">1 lb.</td></tr>
			<tr><td>Magnifying glass</td><td alight="right" width="20%">100 gp</td><td alight="right" width="20%">—</td></tr>
			<tr><td>Manacles</td><td alight="right" width="20%">2 gp</td><td alight="right" width="20%">6 lb.</td></tr>
			<tr><td>Mess kit</td><td alight="right" width="20%">2 sp</td><td alight="right" width="20%">1 lb.</td></tr>
			<tr><td>Mirror, steel</td><td alight="right" width="20%">5 gp</td><td alight="right" width="20%">1/2 lb.</td></tr>
			<tr><td>Oil (flask)</td><td alight="right" width="20%">1 sp</td><td alight="right" width="20%">1 lb.</td></tr>
			<tr><td>Paper (one sheet)</td><td alight="right" width="20%">2 sp</td><td alight="right" width="20%">—</td></tr>
			<tr><td>Parchment (one sheet)</td><td alight="right" width="20%">1 sp</td><td alight="right" width="20%">—</td></tr>
			<tr><td>Perfume (vial)</td><td alight="right" width="20%">5 gp</td><td alight="right" width="20%">—</td></tr>
			<tr><td>Pick, miner's</td><td alight="right" width="20%">2 gp</td><td alight="right" width="20%">10 lb.</td></tr>
			<tr><td>Piton</td><td alight="right" width="20%">5 cp</td><td alight="right" width="20%">1/4 lb.</td></tr>
			<tr><td>Poison, basic (vial)</td><td alight="right" width="20%">100 gp</td><td alight="right" width="20%">—</td></tr>
			<tr><td>Pole (10-foot)</td><td alight="right" width="20%">5 cp</td><td alight="right" width="20%">7 lb.</td></tr>
			<tr><td>Pot, iron</td><td alight="right" width="20%">2 gp</td><td alight="right" width="20%">10 lb.</td></tr>
			<tr><td>Potion of healing</td><td alight="right" width="20%">50 gp</td><td alight="right" width="20%">1/2 lb.</td></tr>
			<tr><td>Pouch</td><td alight="right" width="20%">5 sp</td><td alight="right" width="20%">1 lb.</td></tr>
			<tr><td>Quiver</td><td alight="right" width="20%">1 gp</td><td alight="right" width="20%">1 lb.</td></tr>
			<tr><td>Ram, portable</td><td alight="right" width="20%">4 gp</td><td alight="right" width="20%">35 lb.</td></tr>
			<tr><td>Rations (1 day)</td><td alight="right" width="20%">5 sp</td><td alight="right" width="20%">2 lb.</td></tr>
			<tr><td>Robes</td><td alight="right" width="20%">1 gp</td><td alight="right" width="20%">4 lb.</td></tr>
			<tr><td>Rope, hempen (50 feet)</td><td alight="right" width="20%">1 gp</td><td alight="right" width="20%">10 lb.</td></tr>
			<tr><td>Rope, silk (50 feet)</td><td alight="right" width="20%">10 gp</td><td alight="right" width="20%">5 lb.</td></tr>
			<tr><td>Sack</td><td alight="right" width="20%">1 cp</td><td alight="right" width="20%">1/2 lb.</td></tr>
			<tr><td>Scale, merchant's</td><td alight="right" width="20%">5 gp</td><td alight="right" width="20%">3 lb.</td></tr>
			<tr><td>Sealing wax</td><td alight="right" width="20%">5 sp</td><td alight="right" width="20%">—</td></tr>
			<tr><td>Shovel</td><td alight="right" width="20%">2 gp</td><td alight="right" width="20%">5 lb.</td></tr>
			<tr><td>Signal whistle</td><td alight="right" width="20%">5 cp</td><td alight="right" width="20%">—</td></tr>
			<tr><td>Signet ring</td><td alight="right" width="20%">5 gp</td><td alight="right" width="20%">—</td></tr>
			<tr><td>Soap</td><td alight="right" width="20%">2 cp</td><td alight="right" width="20%">—</td></tr>
			<tr><td>Spellbook</td><td alight="right" width="20%">50 gp</td><td alight="right" width="20%">3 lb.</td></tr>
			<tr><td>Spikes, iron (10)</td><td alight="right" width="20%">1 gp</td><td alight="right" width="20%">5 lb.</td></tr>
			<tr><td>Spyglass</td><td alight="right" width="20%">1,000 gp</td><td alight="right" width="20%">1 lb.</td></tr>
			<tr><td>Tent, two-person</td><td alight="right" width="20%">2 gp</td><td alight="right" width="20%">20 lb.</td></tr>
			<tr><td>Tinderbox</td><td alight="right" width="20%">5 sp</td><td alight="right" width="20%">1 lb.</td></tr>
			<tr><td>Torch</td><td alight="right" width="20%">1 cp</td><td alight="right" width="20%">1 lb.</td></tr>
			<tr><td>Vial</td><td alight="right" width="20%">1 gp</td><td alight="right" width="20%">—</td></tr>
			<tr><td>Waterskin</td><td alight="right" width="20%">2 sp</td><td alight="right" width="20%">5 lb. (full)</td></tr>
			<tr><td>Whetstone</td><td alight="right" width="20%">1 cp</td><td alight="right" width="20%">1 lb.</td></tr>
		</table>
		<br /><br />
		<table id="tools">
			<tr><th colspan="4"><h3 class="nobackground">Tools</h3></th></tr>
			<tr><th>Item</th><th align="right" width="20%">Cost</th><th alight="right" width="20%">Weight</th></tr>
			<tr><td colspan="3"><i>Artisan's tools</i></td></tr>
			<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Alchemist's supplies</td><td alight="right" width="20%">50 gp</td><td alight="right" width="20%">8 lb.</td></tr>
			<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Brewer's supplies</td><td alight="right" width="20%">20 gp</td><td alight="right" width="20%">9 lb.</td></tr>
			<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Calligrapher's supplies</td><td alight="right" width="20%">10 gp</td><td alight="right" width="20%">5 lb.</td></tr>
			<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Carpenter's tools</td><td alight="right" width="20%">8 gp</td><td alight="right" width="20%">6 lb.</td></tr>
			<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Cartographer's tools</td><td alight="right" width="20%">15 gp.</td><td alight="right" width="20%">6 lb.</td></tr>
			<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Cobbler's tools</td><td alight="right" width="20%">5 gp</td><td alight="right" width="20%">5 lb.</td></tr>
			<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Cook's utensils</td><td alight="right" width="20%">1 gp</td><td alight="right" width="20%">8 lb.</td></tr>
			<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Glassblower's tools</td><td alight="right" width="20%">30 gp</td><td alight="right" width="20%">5 lb.</td></tr>
			<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Jeweler's tools</td><td alight="right" width="20%">25 gp</td><td alight="right" width="20%">2 lb.</td></tr>
			<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Leatherworker's tools</td><td alight="right" width="20%">5 gp</td><td alight="right" width="20%">5 lb.</td></tr>
			<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Mason's tools</td><td alight="right" width="20%">10 gp</td><td alight="right" width="20%">8 lb.</td></tr>
			<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Painter's supplies</td><td alight="right" width="20%">10 gp</td><td alight="right" width="20%">5 lb.</td></tr>
			<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Potter's tools</td><td alight="right" width="20%">10 gp</td><td alight="right" width="20%">3 lb.</td></tr>
			<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Smith's tools</td><td alight="right" width="20%">20 gp</td><td alight="right" width="20%">8 lb.</td></tr>
			<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Tinker's tools</td><td alight="right" width="20%">50 gp</td><td alight="right" width="20%">10 lb.</td></tr>
			<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Weaver's tools</td><td alight="right" width="20%">1 gp</td><td alight="right" width="20%">5 lb.</td></tr>
			<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Woodcarver's tools</td><td alight="right" width="20%">1 gp</td><td alight="right" width="20%">5 lb.</td></tr>
			<tr><td>Disguise kit</td><td alight="right" width="20%">25 gp</td><td alight="right" width="20%">3 lb.</td></tr>
			<tr><td>Forgery kit</td><td alight="right" width="20%">15 gp</td><td alight="right" width="20%">5 lb.</td></tr>
			<tr><td colspan="3"><i>Gaming set</i></td></tr>
			<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Dice set</td><td alight="right" width="20%">1 sp</td><td alight="right" width="20%">—</td></tr>
			<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Dragonchess set</td><td alight="right" width="20%">1 gp</td><td alight="right" width="20%">1/2 lb.</td></tr>
			<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Playing card set</td><td alight="right" width="20%">5 sp</td><td alight="right" width="20%">—</td></tr>
			<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Three-Dragon Ante set</td><td alight="right" width="20%">1 gp</td><td alight="right" width="20%">—</td></tr>
			<tr><td>Herbalism kit</td><td alight="right" width="20%">5 gp</td><td alight="right" width="20%">3 lb.</td></tr>
			<tr><td colspan="3"><i>Musical instrument</i></td></tr>
			<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Bagpipes</td><td alight="right" width="20%">30 gp</td><td alight="right" width="20%">6 lb.</td></tr>
			<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Drum</td><td alight="right" width="20%">6 gp</td><td alight="right" width="20%">3 lb.</td></tr>
			<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Dulcimer</td><td alight="right" width="20%">25 gp</td><td alight="right" width="20%">10 lb.</td></tr>
			<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Flute</td><td alight="right" width="20%">2 gp</td><td alight="right" width="20%">1 lb.</td></tr>
			<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Lute</td><td alight="right" width="20%">35 gp</td><td alight="right" width="20%">2 lb.</td></tr>
			<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Lyre</td><td alight="right" width="20%">30 gp</td><td alight="right" width="20%">2 lb.</td></tr>
			<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Horn</td><td alight="right" width="20%">3 gp</td><td alight="right" width="20%">2 lb.</td></tr>
			<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Pan flute</td><td alight="right" width="20%">12 gp</td><td alight="right" width="20%">2 lb.</td></tr>
			<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Shawm</td><td alight="right" width="20%">2 gp</td><td alight="right" width="20%">1 lb.</td></tr>
			<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;Viol</td><td alight="right" width="20%">30 gp</td><td alight="right" width="20%">1 lb.</td></tr>
			<tr><td>Navigator's tools</td><td alight="right" width="20%">25 gp</td><td alight="right" width="20%">2 lb.</td></tr>
			<tr><td>Poisoner's kit</td><td alight="right" width="20%">50 gp</td><td alight="right" width="20%">2 lb.</td></tr>
			<tr><td>Thieves' tools</td><td alight="right" width="20%">25 gp</td><td alight="right" width="20%">1 lb.</td></tr>
		</table>
		<br /><br />
		<table id="mounts">
			<tr>
				<th colspan="4">
					<h3 class="nobackground">
						Mounts and Vehicles
					</h3>
				</th>
			</tr>
			<tr>
				<th>
					Item
				</th>
				<th>
					Cost
				</th>
				<th>
					Speed
				</th>
				<th>
					Carrying Capacity
				</th>
			</tr>
			<tr>
				<td>
					Camel
				</td>
				<td>
					50gp
				</td>
				<td>
					50ft.
				</td>
				<td>
					480 lb
				</td>
			</tr>
			<tr>
				<td>
					Donkey or Mule
				</td>
				<td>
					8gp
				</td>
				<td>
					40ft.
				</td>
				<td>
					420 lb
				</td>
			</tr>
			<tr>
				<td>
					Elephant
				</td>
				<td>
					200gp
				</td>
				<td>
					40ft.
				</td>
				<td>
					1320 lb
				</td>
			</tr>
			<tr>
				<td>
					Horse, draft
				</td>
				<td>
					50gp
				</td>
				<td>
					40ft.
				</td>
				<td>
					540 lb
				</td>
			</tr>
			<tr>
				<td>
					Horse, riding
				</td>
				<td>
					75gp
				</td>
				<td>
					60ft.
				</td>
				<td>
					480 lb
				</td>
			</tr>
			<tr>
				<td>
					Mastiff
				</td>
				<td>
					25gp
				</td>
				<td>
					40ft.
				</td>
				<td>
					195 lb
				</td>
			</tr>
			<tr>
				<td>
					Pony
				</td>
				<td>
					30gp
				</td>
				<td>
					40ft.
				</td>
				<td>
					225 lb
				</td>
			</tr>
			<tr>
				<td>
					Warhorse
				</td>
				<td>
					400gp
				</td>
				<td>
					60ft.
				</td>
				<td>
					540 lb
				</td>
			</tr>
		</table>

			<br>
		<table id="tack">
			<tr>
				<th colspan="3">
					<h3 class="nobackground">
						Tack, Harness, and Drawn Vehicles
					</h3>
				</th>
			</tr>
			<tr>
				<th>
					Item
				</th>
				<th>
					Cost
				</th>
				<th>
					Weight
				</th>
			</tr>
			<tr>
				<td>
					Barding
				</td>
				<td>
					x4
				</td>
				<td>
					x2
				</td>
			</tr>
			<tr>
				<td>
					Bit and bridle
				</td>
				<td>
					2gp
				</td>
				<td>
					1 lb
				</td>
			</tr>
			<tr>
				<td>
					Carriage
				</td>
				<td>
					100gp
				</td>
				<td>
					600 lb
				</td>
			</tr>
			<tr>
				<td>
					Cart
				</td>
				<td>
					15gp
				</td>
				<td>
					200 lb
				</td>
			</tr>
			<tr>
				<td>
					Chariot
				</td>
				<td>
					250gp
				</td>
				<td>
					100 lb
				</td>
			</tr>
			<tr>
				<td>
					Feed (per day)
				</td>
				<td>
					5cp
				</td>
				<td>
					10 lb
				</td>
			</tr>
			<tr>
				<td colspan="3">
					Saddle
				</td>
			</tr>
			<tr>
				<td>
					&nbsp;&nbsp;&nbsp;&nbsp;Exotic
				</td>
				<td>
					60gp
				</td>
				<td>
					40 lb
				</td>
			</tr>
			<tr>
				<td>
					&nbsp;&nbsp;&nbsp;&nbsp;Military
				</td>
				<td>
					20gp
				</td>
				<td>
					30 lb
				</td>
			</tr>
			<tr>
				<td>
					&nbsp;&nbsp;&nbsp;&nbsp;Pack
				</td>
				<td>
					5gp
				</td>
				<td>
					15 lb
				</td>
			</tr>
			<tr>
				<td>
					&nbsp;&nbsp;&nbsp;&nbsp;Riding
				</td>
				<td>
					10gp
				</td>
				<td>
					25 lb
				</td>
			</tr>
			<tr>
				<td>
					Saddlebags
				</td>
				<td>
					4gp
				</td>
				<td>
					8 lb
				</td>
			</tr>
			<tr>
				<td>
					Sled
				</td>
				<td>
					20gp
				</td>
				<td>
					300 lb
				</td>
			</tr>
			<tr>
				<td>
					Stabling (per day)
				</td>
				<td>
					5sp
				</td>
				<td>
					-
				</td>
			</tr>
			<tr>
				<td>
					Wagon
				</td>
				<td>
					35gp
				</td>
				<td>
					400 lb
				</td>
			</tr>
		</table>

			<br>
		<table id="watervehicles">
			<tr>
				<th colspan="3">
					<h3 class="nobackground">
						Waterborne Vehicles
					</h3>
				</th>
			</tr>
			<tr>
				<th>
					Item
				</th>
				<th>
					Cost
				</th>
				<th>
					Speed
				</th>
			</tr>
			<tr>
				<td>
					Galley
				</td>
				<td>
					30,000gp
				</td>
				<td>
					4 mph
				</td>
			</tr>
			<tr>
				<td>
					Keelboat
				</td>
				<td>
					3,000gp
				</td>
				<td>
					1 mph
				</td>
			</tr>
			<tr>
				<td>
					Longship
				</td>
				<td>
					10,000gp
				</td>
				<td>
					3 mph
				</td>
			</tr>
			<tr>
				<td>
					Rowboat
				</td>
				<td>
					50gp
				</td>
				<td>
					1.5 mph
				</td>
			</tr>
			<tr>
				<td>
					Sailing Ship
				</td>
				<td>
					10,000gp
				</td>
				<td>
					2 mph
				</td>
			</tr>
			<tr>
				<td>
					Warship
				</td>
				<td>
					25,000gp
				</td>
				<td>
					2.5 mph
				</td>
			</tr>
		</table>
<h1 >Players Handbook Index</h1>
<table>
  <tr id="phb-index-a">
	 <th>A</th>
  </tr>
  <tr>
    <td>0 hit points (hit points: dropping to 0), 197-198</td>
  </tr>
  <tr>
    <td>ability check, 7, 12, 173-179, 186</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;contest, 174</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;group, 175</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;passive, 175</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;skill, 174-175</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;skills with different abilities (variant), 175</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;working together, 175</td>
  </tr>
  <tr>
    <td>ability modifier, 7, 13, 173</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;determining, 13, 173</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;table, 13, 173</td>
  </tr>
  <tr>
    <td>ability score, 7, 12-13, 173</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;customizing (variant), 13</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;determining, 12-13</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;increase (racial traits), 12, 17</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;point cost table, 13</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rolling, 13</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;standard set, 13</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;summary, 12, 173</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;using, 173-179</td>
  </tr>
  <tr>
    <td>Ability Score Improvement. See specific class entries, 45</td>
  </tr>
  <tr>
    <td>abjuration, 115, 204</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;school (wizard), 115-116</td>
  </tr>
  <tr>
    <td>Abjuration Savant (wizard), 115</td>
  </tr>
  <tr>
    <td>Abjure Enemy (paladin), 88</td>
  </tr>
  <tr>
    <td>abjurer, 115</td>
  </tr>
  <tr>
    <td>Abyss, the (plane of existence), 302</td>
  </tr>
  <tr>
    <td>Abyssal (language), 123</td>
  </tr>
  <tr>
    <td>AC (Armor Class), 7, 14, 144, 177&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
  </tr>
  <tr>
    <td>Archeron (plane of existence), 302</td>
  </tr>
  <tr>
    <td>acid damage (damage type), 196</td>
  </tr>
  <tr>
    <td>acolyte (background), 127</td>
  </tr>
  <tr>
    <td>Acolyte of Nature (cleric), 62</td>
  </tr>
  <tr>
    <td>Acrobatics (Dexterity skill), 176</td>
  </tr>
  <tr>
    <td>action, 189, 192-193</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Attack action, 192</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cast a spell (casting a spell: casting time), 202</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dash action, 192</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Disengage action, 192</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dodge action, 192</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Help action, 192</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hide action, 192</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;improvising, 193</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ready action, 193</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Search action, 193</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Use an Object action, 193</td>
  </tr>
  <tr>
    <td>Action Surge (fighter), 72</td>
  </tr>
  <tr>
    <td>advancement (character), 15</td>
  </tr>
  <tr>
    <td>advantage, 7, 173</td>
  </tr>
  <tr>
    <td>adventure, 5, 7-8</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;adventuring, 181-187</td>
  </tr>
  <tr>
    <td>adventurer (character), 5, 11-15</td>
  </tr>
  <tr>
    <td>adventuring, 181-187</td>
  </tr>
  <tr>
    <td>adventuring gear, 148, 150-153</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;table, 150</td>
  </tr>
  <tr>
    <td>age (character). See specific race entries, 17</td>
  </tr>
  <tr>
    <td>Agonizing Blast (warlock eldritch invocation), 110</td>
  </tr>
  <tr>
    <td>alignment, 122</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;of planes, 302</td>
  </tr>
  <tr>
    <td>Alter Memories (wizard), 117</td>
  </tr>
  <tr>
    <td>ammunition (weapon property), 146</td>
  </tr>
  <tr>
    <td>Animal Handling (Wisdom skill), 178</td>
  </tr>
  <tr>
    <td>appraise item value (Intelligence check), 177-178</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bonus with magnifying glass, 153</td>
  </tr>
  <tr>
    <td>Aquan (language), 123</td>
  </tr>
  <tr>
    <td>Arborea (plane of existence), 302</td>
  </tr>
  <tr>
    <td>Arcadia (plane of existence), 302</td>
  </tr>
  <tr>
    <td>Arcana (Intelligence skill), 177</td>
  </tr>
  <tr>
    <td>Arcane Charge (fighter), 75</td>
  </tr>
  <tr>
    <td>arcane magic, 205</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bard, 51</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fighter (Eldritch Knight martial archetype), 74</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rogue (Arcane Trickster roguish archetype), 97</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sorcerer, 99</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;warlock, 105</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;wizard, 112</td>
  </tr>
  <tr>
    <td>Arcane Recovery (wizard), 115</td>
  </tr>
  <tr>
    <td>Arcane Tradition (wizard), 115</td>
  </tr>
  <tr>
    <td>arcane traditions, 115-119</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;School of Abjuration, 115-116</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;School of Conjuration, 116</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;School of Divination, 116-117</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;School of Enchantment, 117</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;School of Evocation, 117-118</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;School of Illusion, 118</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;School of Necromancy, 118-119</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;School of Transmutation, 119</td>
  </tr>
  <tr>
    <td>Arcane Trickster (roguish archetype), 97</td>
  </tr>
  <tr>
    <td>Arcane Ward (wizard), 115</td>
  </tr>
  <tr>
    <td>Archdruid (druid), 67-68</td>
  </tr>
  <tr>
    <td>Archery (fighting style), 72, 91</td>
  </tr>
  <tr>
    <td>Archfey, the (warlock otherworldly patron), 108-109</td>
  </tr>
  <tr>
    <td>area of effect, 204-205</td>
  </tr>
  <tr>
    <td>armor and shields, 144-146</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;barding, 155, 310</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;casting a spell in armor, 201</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;getting into and out of, 146</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;refitting plate armor (variant: equipment sizes), 144</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Stealth, 144</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;table, 145</td>
  </tr>
  <tr>
    <td>Armor Class (AC), 7, 14, 144, 177</td>
  </tr>
  <tr>
    <td>Armor of Shadows (warlock eldritch invocation), 110</td>
  </tr>
  <tr>
    <td>armor proficiency, 144</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;See also specific class entries, 45</td>
  </tr>
  <tr>
    <td>Artificer's Lore (rock gnome), 37</td>
  </tr>
  <tr>
    <td>Ascendant Step (warlock eldritch invocation), 110</td>
  </tr>
  <tr>
    <td>Aspect of the Beast (barbarian), 50</td>
  </tr>
  <tr>
    <td>Assassin (rogue), 97</td>
  </tr>
  <tr>
    <td>Assassinate (rogue), 97</td>
  </tr>
  <tr>
    <td>Astral Plane (plane of existence), 302</td>
  </tr>
  <tr>
    <td>Athletics (Strength skill), 175</td>
  </tr>
  <tr>
    <td>attack of opportunity, 195</td>
  </tr>
  <tr>
    <td>attack, 14, 193-196</td>
  </tr>
  <tr>
    <td>Attack action, 192</td>
  </tr>
  <tr>
    <td>attack modifier, 14, 194</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;spell (attack roll), 205</td>
  </tr>
  <tr>
    <td>attack roll, 7, 14, 176, 177, 194</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ability modifier, 194</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dexterity-based, 177, 194</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;modifiers to, 194</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;proficiency bonus, 194</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rolling a 1 (automatic miss), 194</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rolling a 20 (automatic hit), 194</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;spell (attack roll), 205</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Strength-based, 176, 194</td>
  </tr>
  <tr>
    <td>Auran (language), 123</td>
  </tr>
  <tr>
    <td>Aura of Courage (paladin), 85</td>
  </tr>
  <tr>
    <td>Aura of Devotion (paladin), 86</td>
  </tr>
  <tr>
    <td>Aura of Protection (paladin), 85</td>
  </tr>
  <tr>
    <td>Aura of Warding (paladin), 87</td>
  </tr>
  <tr>
    <td>automatic hit (rolling a 20), 194</td>
  </tr>
  <tr>
    <td>automatic miss (rolling a 1), 194</td>
  </tr>
  <tr>
    <td>Avatar of Battle (cleric), 63</td>
  </tr>
  <tr>
    <td>Avenging Angel (paladin), 88</td>
  </tr>
  <tr>
    <td>Awakened Mind (warlock), 11O</td>
  </tr>
  <tr id="phb-index-b">
	 <th>B</th>
  </tr>
  <tr>
    <td>background, 11, 12, 13-14,</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;125-141</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;acolyte, 127</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;charlatan, 128</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;criminal, 129-130</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;customizing, 125-126</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;entertainer, 130-131</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;equipment, 125</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;folk hero, 131-132</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;gladiator (variant), 131</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;guild artisan, 132-133</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;guild merchant (variant), 133</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hermit, 134-135</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;languages, 125</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;noble, 135-136</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;noble knight (variant), 136</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;outlander, 136-137</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pirate (variant), 139</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;proficiencies, 125</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sage, 137-138</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sailor, 139</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;soldier, 140-141</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;spy (variant), 130</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;suggested characteristics, 125</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;urchin, 141</td>
  </tr>
  <tr>
    <td>Bad Reputation (pirate variant feature), 139</td>
  </tr>
  <tr>
    <td>barbarian, 45, 46-50</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;primal paths, 49-50</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;quick build, 47</td>
  </tr>
  <tr>
    <td>bard, 45, 51-55</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;colleges, 54-55</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;quick build, 52</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;spell list, 207</td>
  </tr>
  <tr>
    <td>Bard College (bard), 54</td>
  </tr>
  <tr>
    <td>bard colleges, 54-55</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;College of Lore, 54-55</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;College of Valor, 55</td>
  </tr>
  <tr>
    <td>Bardic Inspiration (bard), 53-54</td>
  </tr>
  <tr>
    <td>barding, 155, 310</td>
  </tr>
  <tr>
    <td>base attack bonus (proficiency bonus), 12, 15 (table), 173</td>
  </tr>
  <tr>
    <td>base save bonus (proficiency bonus), 12, 15 (table), 173</td>
  </tr>
  <tr>
    <td>bat (creature), 304</td>
  </tr>
  <tr>
    <td>Battle Magic (bard), 55</td>
  </tr>
  <tr>
    <td>Battle Master (fighter martial archetype), 73</td>
  </tr>
  <tr>
    <td>bear, black (creature), 304</td>
  </tr>
  <tr>
    <td>bear, brown (creature), 304</td>
  </tr>
  <tr>
    <td>Beastlands, the (plane of existence), 302</td>
  </tr>
  <tr>
    <td>Beast Master (ranger archetype), 93</td>
  </tr>
  <tr>
    <td>Beast Speech (warlock eldritch invocation), 110</td>
  </tr>
  <tr>
    <td>Beast Spells (druid), 67</td>
  </tr>
  <tr>
    <td>Beguiling Defenses (warlock), 109</td>
  </tr>
  <tr>
    <td>Beguiling Influence (warlock eldritch invocation), 110</td>
  </tr>
  <tr>
    <td>Bend Luck (sorcerer), 103</td>
  </tr>
  <tr>
    <td>Benign Transposition (wizard), 116</td>
  </tr>
  <tr>
    <td>Bestial Fury (ranger), 93</td>
  </tr>
  <tr>
    <td>Bewitching Whispers (warlock eldritch invocation), 110</td>
  </tr>
  <tr>
    <td>Blessed Healer (cleric), 60</td>
  </tr>
  <tr>
    <td>Blessings of Knowledge (cleric), 59</td>
  </tr>
  <tr>
    <td>Blessing of the Trickster (cleric), 63</td>
  </tr>
  <tr>
    <td>blinded (condition), 290</td>
  </tr>
  <tr>
    <td>Blindsense (rogue), 96</td>
  </tr>
  <tr>
    <td>blindsignt, 183</td>
  </tr>
  <tr>
    <td>bludgeoning damage (damage type), 196</td>
  </tr>
  <tr>
    <td>boar (creature), 304</td>
  </tr>
  <tr>
    <td>bonds (personality), 124</td>
  </tr>
  <tr>
    <td>bonus, 7</td>
  </tr>
  <tr>
    <td>bonus action, 189</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;See also casting a spell: casting time, 202</td>
  </tr>
  <tr>
    <td>Book of Ancient Secrets (warlock eldritch invocation), 110</td>
  </tr>
  <tr>
    <td>Book of Shadows (warlock), 108</td>
  </tr>
  <tr>
    <td>Border Ethereal (plane of existence), 302</td>
  </tr>
  <tr>
    <td>Brave (halfling), 28</td>
  </tr>
  <tr>
    <td>breaking concentration, 203</td>
  </tr>
  <tr>
    <td>Breath of Winter (monk Elemental Discipline), 81</td>
  </tr>
  <tr>
    <td>Breath Weapon (dragonborn), 34</td>
  </tr>
  <tr>
    <td>bright light, 183</td>
  </tr>
  <tr>
    <td>bringing back the dead, See the spell descriptions for raise dead (270), reincarnate (271), resurrection (272), revivify (272), true resurrection (284)</td>
  </tr>
  <tr>
    <td>Brutal Critical (barbarian), 49</td>
  </tr>
  <tr>
    <td>bull rush (shoving), 195</td>
  </tr>
  <tr>
    <td>By Popular Demand (entertainer), 130</td>
  </tr>
  <tr>
    <td>Bytopia (plane of existence), 302</td>
  </tr>
  <tr id="phb-index-c">
	 <th>C</th>
  </tr>
  <tr>
    <td>Calishite (human ethnicity), 30</td>
  </tr>
  <tr>
    <td>campaign, 5, 6</td>
  </tr>
  <tr>
    <td>cantrips, 201</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;See also Spellcasting: bard (52); cleric (58); druid (66); fighter, Eldritch Knight (75); rogue, Arcane Trickster (98); sorcerer (101); warlock (107); wizard (114)</td>
  </tr>
  <tr>
    <td>Carceri (plane of existence), 302</td>
  </tr>
  <tr>
    <td>Careful Spell (sorcerer Metamagic), 102</td>
  </tr>
  <tr>
    <td>carrying capacity (lifting and carrying), 176</td>
  </tr>
  <tr>
    <td>casting a spell, 201-205</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;area of effect, 204-205</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at a higher level, 201</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;attack roll, 205</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;casting time, 202</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;combining effects, 205</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;components, 203</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;duration, 203-204</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;in armor, 201</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;multiclassing, 164</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;range, 202-203</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;saving throw, 205</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;targeting, 204</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;See also Spellcasting: bard (52); cleric (58); druid (66); fighter, Eldritch Knight (75); ranger (91); rogue, Arcane Trickster (98); sorcerer (101); warlock (107); wizard (114)</td>
  </tr>
  <tr>
    <td>casting time, 202</td>
  </tr>
  <tr>
    <td>cat (creature), 305</td>
  </tr>
  <tr>
    <td>Celestial (language), 123</td>
  </tr>
  <tr>
    <td>Chains of Carceri (warlock eldritch invocation), 110</td>
  </tr>
  <tr>
    <td>Champion (fighter martial archetype), 72</td>
  </tr>
  <tr>
    <td>Channel Divinity, cleric, 58-63</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Charm Animals and Plants (Nature Domain), 62</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cloak of Shadows (Trickery domain), 63</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Destroy Undead, 59</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Destructive Wrath (Tempest domain), 62</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Guided Strike (War domain), 63</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Invoke Duplicity (Trickery domain), 63</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Knowledge of the Ages (Knowledge domain), 59</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;multiclassing and, 164</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Preserve Life (Life domain), 60</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Radiance of the Dawn (Light domain), 61</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Read Thoughts (Knowledge domain), 59-60</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Turn Undead, 59</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;War God's Blessing (War domain), 63</td>
  </tr>
  <tr>
    <td>Channel Divinity, paladin, 86-88</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Abjure Enemy (Oath of Vengeance), 88</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nature’s Wrath (Oath of the Ancients), 87</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sacred Weapon (Oath of Devotion), 86</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Turn the Faithless (Oath of the Ancients), 87</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Turn the Unholy (Oath of Devotion), 86</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Vow of Enmity (Oath of Vengeance), 88</td>
  </tr>
  <tr>
    <td>chaotic evil (alignment), 122</td>
  </tr>
  <tr>
    <td>chaotic good (alignment), 122</td>
  </tr>
  <tr>
    <td>chaotic neutral (alignment), 122</td>
  </tr>
  <tr>
    <td>character, 5, 11-15</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;advancement, 15</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;age. See specific race entries, 17</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;alignment, 122</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;creating a, 11-15</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;describing your, 13-14</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;equipping your, 14, 125, 143-157</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;height and weight, 121</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;name, 121. See also specific race entries, 17</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;personality, 122-124</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sex and gender, 121</td>
  </tr>
  <tr>
    <td>character sheet, 11, 317-319</td>
  </tr>
  <tr>
    <td>Charisma, 12, 178-179</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;checks, 178-179</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Deception, 178</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Intimidation, 179</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Performance, 179</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Persuasion, 179</td>
  </tr>
  <tr>
    <td>charlatan (background), 128</td>
  </tr>
  <tr>
    <td>Charm Animals and plants (Channel Divinity cleric option), 62</td>
  </tr>
  <tr>
    <td>charmed (condition), 290</td>
  </tr>
  <tr>
    <td>check. See ability check</td>
  </tr>
  <tr>
    <td>Chondathan (human ethnicity), 30</td>
  </tr>
  <tr>
    <td>Circle Forms (druid), 69</td>
  </tr>
  <tr>
    <td>Circle of the Land (druid circle), 68</td>
  </tr>
  <tr>
    <td>Circle of the Moon (druid circle), 69</td>
  </tr>
  <tr>
    <td>Circle Spells (druid), 68</td>
  </tr>
  <tr>
    <td>City Secrets (urchin), 141</td>
  </tr>
  <tr>
    <td>Cleansing Touch (paladin), 85</td>
  </tr>
  <tr>
    <td>Cloak of Shadows</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Channel Divinity cleric options, 63</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;monk, 80</td>
  </tr>
  <tr>
    <td>class, 11, 45</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;choosing a, 11</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;features, 11, 15</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;proficiencies, 12</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;quick build, 11</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;See also specific class entries, 45</td>
  </tr>
  <tr>
    <td>clear path to the target (casting a spell: targeting), 204</td>
  </tr>
  <tr>
    <td>Clench of the North Wind (monk Elemental Discipline), 81</td>
  </tr>
  <tr>
    <td>cleric, 45, 56-63</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;divine domains, 59</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;quick build, 57</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;spell list, 207-208</td>
  </tr>
  <tr>
    <td>climbing (movement), 182, 190</td>
  </tr>
  <tr>
    <td>coinage, 143</td>
  </tr>
  <tr>
    <td>cold damage (damage type), 196</td>
  </tr>
  <tr>
    <td>College of Lore (bard college), 54</td>
  </tr>
  <tr>
    <td>College of Valor (bard college), 55</td>
  </tr>
  <tr>
    <td>Colossus Slayer (ranger Hunter's Prey), 93</td>
  </tr>
  <tr>
    <td>combat, 8, 189-198</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mounted, 198</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;step by step, 189</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;underwater, 198</td>
  </tr>
  <tr>
    <td>Combat Inspiration (bard), 55</td>
  </tr>
  <tr>
    <td>combat round (time), 181, 189</td>
  </tr>
  <tr>
    <td>Combat Superiority (fighter), 73</td>
  </tr>
  <tr>
    <td>Combat Wild Shape (druid), 69</td>
  </tr>
  <tr>
    <td>combining spell effects (casting a spell), 205</td>
  </tr>
  <tr>
    <td>Commander's Strike maneuver (fighter maneuver), 74</td>
  </tr>
  <tr>
    <td>Common (language), 123</td>
  </tr>
  <tr>
    <td>common races, 17</td>
  </tr>
  <tr>
    <td>Command Undead (wizard), 119</td>
  </tr>
  <tr>
    <td>component, spell (casting a spell), 203</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;material spell component, 203</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;somatic spell component, 203</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;verbal spell component, 203</td>
  </tr>
  <tr>
    <td>concentration, 203-204</td>
  </tr>
  <tr>
    <td>conditions, 290-292</td>
  </tr>
  <tr>
    <td>cone (area of effect), 204</td>
  </tr>
  <tr>
    <td>conjuration, 116, 203</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;school (wizard arcane tradition), 116</td>
  </tr>
  <tr>
    <td>Conjuration Savant (wizard), 116</td>
  </tr>
  <tr>
    <td>conjurer, 116</td>
  </tr>
  <tr>
    <td>Constitution, 12, 172</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;checks, 177</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hit points and, 177</td>
  </tr>
  <tr>
    <td>container capacity, 153</td>
  </tr>
  <tr>
    <td>contest (ability check), 174</td>
  </tr>
  <tr>
    <td>Controlled Chaos (sorcerer), 103</td>
  </tr>
  <tr>
    <td>Converting a spell slot to sorcery points (sorcerer Font of Magic), 101</td>
  </tr>
  <tr>
    <td>copper piece (cp) (coinage), 143</td>
  </tr>
  <tr>
    <td>Corona of Light (cleric), 61</td>
  </tr>
  <tr>
    <td>Countercharm (bard), 54</td>
  </tr>
  <tr>
    <td>cover, 196</td>
  </tr>
  <tr>
    <td>crafting (downtime activity), 187</td>
  </tr>
  <tr>
    <td>crawling (movement), 182, 191</td>
  </tr>
  <tr>
    <td>Create Thrall (warlock), 110</td>
  </tr>
  <tr>
    <td>creating a character, 11-15</td>
  </tr>
  <tr>
    <td>creating spell slots (sorcerer Font of Magic), 101</td>
  </tr>
  <tr>
    <td>creature statistics, 304-311</td>
  </tr>
  <tr>
    <td>criminal (background), 129-130</td>
  </tr>
  <tr>
    <td>Criminal Contact (criminal), 129</td>
  </tr>
  <tr>
    <td>critical hit, 197</td>
  </tr>
  <tr>
    <td>crocodile (creature), 305</td>
  </tr>
  <tr>
    <td>cube (area of effect), 204</td>
  </tr>
  <tr>
    <td>Cunning Action (rogue), 96</td>
  </tr>
  <tr>
    <td>current hit points (current), 196</td>
  </tr>
  <tr>
    <td>Cutting Words (bard), 54-55</td>
  </tr>
  <tr>
    <td>cylinder (area effect), 204</td>
  </tr>
  <tr id="phb-index-d">
	 <th>D</th>
  </tr>
  <tr>
    <td>damage, 14, 196-197</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at O hit points (death saving throw), 197</td>
  </tr>
  <tr>
    <td>damage resistance, 197</td>
  </tr>
  <tr>
    <td>Damage Resistance (dragonborn), 34</td>
  </tr>
  <tr>
    <td>damage roll, 14, 176, 177, 196</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dexterity-based, 177</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;spell, 196</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Strength-based, 76</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;more than one target, 196</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;weapon, 14, 196</td>
  </tr>
  <tr>
    <td>damage types, 196</td>
  </tr>
  <tr>
    <td>damage vulnerability, 197</td>
  </tr>
  <tr>
    <td>Damaran (human ethnicity), 31</td>
  </tr>
  <tr>
    <td>Dampen Elements (cleric), 62</td>
  </tr>
  <tr>
    <td>Danger Sense (barbarian), 48</td>
  </tr>
  <tr>
    <td>Dark Delirium (warlock), 109</td>
  </tr>
  <tr>
    <td>dark elf, 24</td>
  </tr>
  <tr>
    <td>darkness, 183</td>
  </tr>
  <tr>
    <td>Dark One's Blessing (warlock), 109</td>
  </tr>
  <tr>
    <td>Dark One's Own Luck (warlock), 109</td>
  </tr>
  <tr>
    <td>darkvision, 183, 185</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;See also specific race entries, 45</td>
  </tr>
  <tr>
    <td>Dash action, 192</td>
  </tr>
  <tr>
    <td>DC (Difficulty Class), 7, 174</td>
  </tr>
  <tr>
    <td>dead, 197</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bringing back the, See the spell descriptions for raise dead (270), reincarnate (271), resurrection (272), revivify (272), true resurrection (284)</td>
  </tr>
  <tr>
    <td>deafened (condition), 290</td>
  </tr>
  <tr>
    <td>death, 197</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;instant, 197</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;monsters and, 198</td>
  </tr>
  <tr>
    <td>Death domain, 293</td>
  </tr>
  <tr>
    <td>death saving throw, 197</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;damage at O hit points, 197</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rolling a 1 or 20 on, 197</td>
  </tr>
  <tr>
    <td>Death Strike (rogue), 97</td>
  </tr>
  <tr>
    <td>Deception (Charisma skill), 178</td>
  </tr>
  <tr>
    <td>deep gnome, 36</td>
  </tr>
  <tr>
    <td>Deep Speech (language), 123</td>
  </tr>
  <tr>
    <td>Defense (fighting style), 72, 84, 91</td>
  </tr>
  <tr>
    <td>Defensive Tactics (ranger), 93</td>
  </tr>
  <tr>
    <td>Deflect Missiles (monk), 78</td>
  </tr>
  <tr>
    <td>dehydration (food and drink: water requirements), 185</td>
  </tr>
  <tr>
    <td>deities, 293-299</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Celtic, 297, 298</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dragonlance, 293, 295</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Eberron, 293, 296</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Egyptian, 297-298, 299</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Forgotten Realms, 293, 294</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Greek, 297, 298</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Greyhawk, 293, 295</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;nonhuman, 293, 296</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Norse, 298, 299</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;See also cleric (56); druid (64); paladin (82)</td>
  </tr>
  <tr>
    <td>demiplanes (plane of existence), 302</td>
  </tr>
  <tr>
    <td>Destroy Undead (Channel Divinity cleric option), 59</td>
  </tr>
  <tr>
    <td>Destructive Wrath (Channel Divinity cleric option), 62</td>
  </tr>
  <tr>
    <td>detect lie (Insight) (Wisdom skill), 178</td>
  </tr>
  <tr>
    <td>Devil's Sight (warlock eldritch invocation), 110</td>
  </tr>
  <tr>
    <td>Dexterity, 12, 176-177</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Acrobatics, 176</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;checks, 176-177</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sleight of Hand, 177</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Stealth, 177</td>
  </tr>
  <tr>
    <td>Diamond Soul (monk), 79</td>
  </tr>
  <tr>
    <td>d (die), 6-7</td>
  </tr>
  <tr>
    <td>dice, 6-7</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;d2 or d3, 7</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;percentile, 6</td>
  </tr>
  <tr>
    <td>difficult terrain (movement), 182, 190</td>
  </tr>
  <tr>
    <td>Difficulty Class (DC), 7, 174</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;typical DCs table, 174</td>
  </tr>
  <tr>
    <td>dim light, 183</td>
  </tr>
  <tr>
    <td>disadvantage, 7, 173</td>
  </tr>
  <tr>
    <td>Disarming Attack maneuver (fighter maneuver), 74</td>
  </tr>
  <tr>
    <td>Disciple of Life (cleric), 60</td>
  </tr>
  <tr>
    <td>Disciple of the Elements (monk), 80</td>
  </tr>
  <tr>
    <td>Discovery (hermit), 134</td>
  </tr>
  <tr>
    <td>Disengage action, 192</td>
  </tr>
  <tr>
    <td>Distant Spell (sorcerer Metamagic), 102</td>
  </tr>
  <tr>
    <td>Distracting Strike maneuver (fighter maneuver), 74</td>
  </tr>
  <tr>
    <td>divination, 116-117, 203</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;school (wizard arcane tradition), 116-117</td>
  </tr>
  <tr>
    <td>Divination Savant (wizard), 116</td>
  </tr>
  <tr>
    <td>Divine Domain (cleric), 58</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;domain spells, 58</td>
  </tr>
  <tr>
    <td>divine domains, 59</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Knowledge, 59-60</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;life, 60</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Light, 60-61</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nature, 61-62</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tempest, 62</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Trickery, 62-63</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;War, 63</td>
  </tr>
  <tr>
    <td>Divine Health (paladin), 85</td>
  </tr>
  <tr>
    <td>Divine Intervention (cleric), 59</td>
  </tr>
  <tr>
    <td>divine magic, 205</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;See also cleric (56); druid (64); paladin (82); ranger (89)</td>
  </tr>
  <tr>
    <td>diviner, 116</td>
  </tr>
  <tr>
    <td>Divine Sense (paladin), 84</td>
  </tr>
  <tr>
    <td>Divine Smite (paladin), 85</td>
  </tr>
  <tr>
    <td>Divine Strike (cleric)</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Life domain, 60</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nature domain, 62</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tempest domain, 62</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Trickery domain, 63</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;War domain, 63</td>
  </tr>
  <tr>
    <td>DM (Dungeon Master), 5</td>
  </tr>
  <tr>
    <td>Dodge action, 192</td>
  </tr>
  <tr>
    <td>domain spells (Divine Domain), 59</td>
  </tr>
  <tr>
    <td>donning and doffing armor (armor and shields: getting into and out of), 146</td>
  </tr>
  <tr>
    <td>door, opening</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;picking lock (thieves' tools), 154</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;breaking down (improvised action), 193</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;breaking down (Portable Ram), 153</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;forcing open (Strength ability check), 175-176</td>
  </tr>
  <tr>
    <td>downtime activities, 187</td>
  </tr>
  <tr>
    <td>draconians, 34</td>
  </tr>
  <tr>
    <td>Draconic</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ancestry, 34</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;alphabet, 124</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;language, 17, 34, 123</td>
  </tr>
  <tr>
    <td>Draconic Ancestry (dragonborn), 24</td>
  </tr>
  <tr>
    <td>Draconic Presence (sorcerer), 102</td>
  </tr>
  <tr>
    <td>Draconic Resilience (sorcerer), 102</td>
  </tr>
  <tr>
    <td>Dragon Ancestor (sorcerer), 102</td>
  </tr>
  <tr>
    <td>dragonborn, 32-34</td>
  </tr>
  <tr>
    <td>dragonborn names, 33-34</td>
  </tr>
  <tr>
    <td>dragonborn traits, 34</td>
  </tr>
  <tr>
    <td>Dragon Wings (sorcerer), 103</td>
  </tr>
  <tr>
    <td>draw or sheathe a weapon (objects: using during combat), 190</td>
  </tr>
  <tr>
    <td>Dreadful Word (warlock eldritch invocation), 110</td>
  </tr>
  <tr>
    <td>drink (expenses), 158</td>
  </tr>
  <tr>
    <td>drop an object (objects: using during combat), 190</td>
  </tr>
  <tr>
    <td>drow (race; elf: dark elf), 24</td>
  </tr>
  <tr>
    <td>Drow Magic, 24</td>
  </tr>
  <tr>
    <td>druid, 45, 64-69</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;druid circles, 68</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;quick build, 65</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;spell list, 208</td>
  </tr>
  <tr>
    <td>Druid Circle, 67</td>
  </tr>
  <tr>
    <td>druid circles, 68-69</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Circle of the Land, 68-69</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Circle of the Moon, 69</td>
  </tr>
  <tr>
    <td>Druidic, 66</td>
  </tr>
  <tr>
    <td>druidic focus, 150, 151</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;spellcasting focus: druid, 66</td>
  </tr>
  <tr>
    <td>druids and the gods, 69</td>
  </tr>
  <tr>
    <td>Dueling (fighting style), 72, 84, 91</td>
  </tr>
  <tr>
    <td>duergar (gray dwarf) (race; dwarf), 20</td>
  </tr>
  <tr>
    <td>Dungeon Master (DM), 5</td>
  </tr>
  <tr>
    <td>Durable Summons (wizard), 116</td>
  </tr>
  <tr>
    <td>duration (casting a spell), 203-204</td>
  </tr>
  <tr>
    <td>dwarf, 18-20</td>
  </tr>
  <tr>
    <td>dwarf names, 20</td>
  </tr>
  <tr>
    <td>dwarf traits, 20</td>
  </tr>
  <tr>
    <td>Dwarven Armor Training (mountain dwarf), 20</td>
  </tr>
  <tr>
    <td>Dwarven Combat Training, 20</td>
  </tr>
  <tr>
    <td>Dwarven Resilience, 20</td>
  </tr>
  <tr>
    <td>Dwarven Toughness (hill dwarf), 20</td>
  </tr>
  <tr>
    <td>Dwarvish, 20</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;alphabet, 122</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;language, 20, 123</td>
  </tr>
  <tr id="phb-index-e">
	 <th>E</th>
  </tr>
  <tr>
    <td>eagle, giant (creature), 306</td>
  </tr>
  <tr>
    <td>effect, 201</td>
  </tr>
  <tr>
    <td>Elder Champion (paladin), 87</td>
  </tr>
  <tr>
    <td>Eldritch Invocations (warlock), 107</td>
  </tr>
  <tr>
    <td>eldritch invocations, 110-111</td>
  </tr>
  <tr>
    <td>Eldritch Knight (fighter martial archetype), 74</td>
  </tr>
  <tr>
    <td>Eldritch Master (warlock), 108</td>
  </tr>
  <tr>
    <td>Eldritch Sight (warlock eldritch invocation), 110</td>
  </tr>
  <tr>
    <td>Eldritch Spear (warlock eldritch invocation), 111</td>
  </tr>
  <tr>
    <td>Eldritch Strike (fighter), 75</td>
  </tr>
  <tr>
    <td>electrum piece (ep) (coinage), 143</td>
  </tr>
  <tr>
    <td>Elemental Affinity (sorcerer), 103</td>
  </tr>
  <tr>
    <td>Elemental Attunement (monk Elemental Discipline), 81</td>
  </tr>
  <tr>
    <td>Elemental Chaos (plane of existence), 301</td>
  </tr>
  <tr>
    <td>Elemental Disciplines (monk), 81</td>
  </tr>
  <tr>
    <td>Elemental Planes (plane of existence), 301</td>
  </tr>
  <tr>
    <td>Elemental Wild Shape (druid), 69</td>
  </tr>
  <tr>
    <td>elf, 21-24</td>
  </tr>
  <tr>
    <td>elf names, 22-23</td>
  </tr>
  <tr>
    <td>elf traits, 23-24</td>
  </tr>
  <tr>
    <td>Elf Weapon Training, 23, 24</td>
  </tr>
  <tr>
    <td>Elusive (rogue), 96</td>
  </tr>
  <tr>
    <td>Elvish, 23</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;alphabet, 123</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;language, 23, 123</td>
  </tr>
  <tr>
    <td>Elysium (plane of existence), 302</td>
  </tr>
  <tr>
    <td>Empowered Evocation (wizard), 117</td>
  </tr>
  <tr>
    <td>Empowered Spell (sorcerer Metamagic), 102</td>
  </tr>
  <tr>
    <td>Empty Body (monk), 79</td>
  </tr>
  <tr>
    <td>enchantment, 117, 203</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;school (wizard arcane tradition), 117</td>
  </tr>
  <tr>
    <td>Enchantment Savant (wizard), 117</td>
  </tr>
  <tr>
    <td>enchanter, 117</td>
  </tr>
  <tr>
    <td>encounters (travel), 183</td>
  </tr>
  <tr>
    <td>encumbrance (lifting and carrying), 176</td>
  </tr>
  <tr>
    <td>endurance check (Constitution check), 177</td>
  </tr>
  <tr>
    <td>entertainer (background), 130-131</td>
  </tr>
  <tr>
    <td>Entropic Ward (warlock), 110</td>
  </tr>
  <tr>
    <td>environment, 14, 125, 143-161</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;adventuring gear, 148, 150-153</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;armor and shields, 144-146</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;background, 125</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mounts and vehicles, 155, 157</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;packs, 151</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;size (variant), 144</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;starting, 143</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tools, 154</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;weapon, 14, 146-148, 149</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;See also specific background entries under background, 125</td>
  </tr>
  <tr>
    <td>equipment, 143</td>
  </tr>
  <tr>
    <td>equipment packs, 151</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;See also specific class entries: quick build, 45</td>
  </tr>
  <tr>
    <td>Escape the Horde (ranger Defensive Tactics), 93</td>
  </tr>
  <tr>
    <td>escaping a grapple, 195</td>
  </tr>
  <tr>
    <td>Eternal Mountain Defense (monk Elemental Discipline), 81</td>
  </tr>
  <tr>
    <td>Ethereal Plane (plane of existence), 301</td>
  </tr>
  <tr>
    <td>Evasion</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;monk, 79</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ranger (Superior Hunter's Defense), 93</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rogue, 96</td>
  </tr>
  <tr>
    <td>Evasive Footwork maneuver (fighter maneuver), 74</td>
  </tr>
  <tr>
    <td>evocation, 117-118, 203</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;school (wizard arcane tradition), 117-118</td>
  </tr>
  <tr>
    <td>Evocation Savant (wizard), 117</td>
  </tr>
  <tr>
    <td>evoker, 117</td>
  </tr>
  <tr>
    <td>Exceptional Training (ranger), 93</td>
  </tr>
  <tr>
    <td>exception-based rules, 7</td>
  </tr>
  <tr>
    <td>exhaustion, 181, 185, 291</td>
  </tr>
  <tr>
    <td>exotic language (language), 123</td>
  </tr>
  <tr>
    <td>expenses, 157-158, 187</td>
  </tr>
  <tr>
    <td>experience points (XP), 15</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;multiclassing and, 163</td>
  </tr>
  <tr>
    <td>Expert Divination (wizard), 116</td>
  </tr>
  <tr>
    <td>Expertise</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bard, 54</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rogue, 96</td>
  </tr>
  <tr>
    <td>exploration, 8</td>
  </tr>
  <tr>
    <td>Extended Spell (sorcerer Metamagic), 102</td>
  </tr>
  <tr>
    <td>Extra Attack</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;barbarian, 49</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bard, 55</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fighter, 72</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;monk, 79</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;paladin, 85</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ranger, 92</td>
  </tr>
  <tr>
    <td>Eyes of the Rune Keeper (warlock eldritch invocation), 111</td>
  </tr>
  <tr>
    <td>Faerie (Feywild, the; plane of existence), 300</td>
  </tr>
  <tr>
    <td>falling, 183</td>
  </tr>
  <tr>
    <td>False Identity (charlatan), 128</td>
  </tr>
  <tr>
    <td>familiar (warlock), 107</td>
  </tr>
  <tr>
    <td>Fangs of the Fire Snake (monk Elemental Discipline), 81</td>
  </tr>
  <tr>
    <td>Far Realm (plane of existence), 302</td>
  </tr>
  <tr>
    <td>Fast Hands (rogue), 97</td>
  </tr>
  <tr>
    <td>Fast Movement (barbarian), 49</td>
  </tr>
  <tr>
    <td>Favored Enemy (ranger), 91</td>
  </tr>
  <tr>
    <td>feats, 165-170</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;gaining, 165</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;prerequisites, 165</td>
  </tr>
  <tr>
    <td>Feinting Attack maneuver (fighter maneuver), 74</td>
  </tr>
  <tr>
    <td>Feral Instinct (barbarian), 49</td>
  </tr>
  <tr>
    <td>Feral Senses (ranger), 92</td>
  </tr>
  <tr>
    <td>Fey Ancestry</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;elf, 23</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;half-elf, 39</td>
  </tr>
  <tr id="phb-index-f">
	 <th>F</th>
  </tr>
  <tr>
    <td>Fey Presence (warlock), 108</td>
  </tr>
  <tr>
    <td>Feywild, the (plane of existence), 300</td>
  </tr>
  <tr>
    <td>Fiendish Resilience (warlock), 10</td>
  </tr>
  <tr>
    <td>Fiendish Vigor (warlock eldritch invocation), 111</td>
  </tr>
  <tr>
    <td>Fiend, the (warlock otherworldly patron), 109</td>
  </tr>
  <tr>
    <td>fighter, 45, 70-75</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;martial archetypes, 72</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;quick build, 71</td>
  </tr>
  <tr>
    <td>Fighting Style</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fighter, 72</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;paladin, 84</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ranger, 91</td>
  </tr>
  <tr>
    <td>fighting styles, 72, 84, 91</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Archery, 72, 91</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Defense, 72, 84, 91</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dueling, 72, 84, 91</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Great Weapon Fighting, 72, 84</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Protection, 72, 84</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Two-Weapon Fighting, 72, 91</td>
  </tr>
  <tr>
    <td>finding a hidden creature, 177</td>
  </tr>
  <tr>
    <td>finding a hidden object, 178</td>
  </tr>
  <tr>
    <td>finesse (weapon property), 147</td>
  </tr>
  <tr>
    <td>fire damage (damage type), 196</td>
  </tr>
  <tr>
    <td>Fist of Four Thunders (monk Elemental Discipline), 81</td>
  </tr>
  <tr>
    <td>Fist of Unbroken Air (monk Elemental Discipline), 81</td>
  </tr>
  <tr>
    <td>Flames of the phoenix (monk Elemental Discipline), 81</td>
  </tr>
  <tr>
    <td>flaws (personality), 124</td>
  </tr>
  <tr>
    <td>Fleet of Foot (wood elf), 24</td>
  </tr>
  <tr>
    <td>Flexible Casting (sorcerer Font of Magic), 101</td>
  </tr>
  <tr>
    <td>Flurry of Blows (monk Ki), 78</td>
  </tr>
  <tr>
    <td>flying (movement), 191</td>
  </tr>
  <tr>
    <td>Focused Conjuration (wizard), 116</td>
  </tr>
  <tr>
    <td>Foe Slayer (ranger), 92</td>
  </tr>
  <tr>
    <td>folk hero (background), 131-132</td>
  </tr>
  <tr>
    <td>Font of Inspiration (bard), 54</td>
  </tr>
  <tr>
    <td>Font of Magic (sorcerer), 101</td>
  </tr>
  <tr>
    <td>food and drink, 158, 185</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;expenses, 158</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;food requirements, 185</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;water requirements, 185</td>
  </tr>
  <tr>
    <td>foraging (travel), 183</td>
  </tr>
  <tr>
    <td>force damage (damage type), 196</td>
  </tr>
  <tr>
    <td>forced march (movement), 181</td>
  </tr>
  <tr>
    <td>forest gnome (race; gnome), 37</td>
  </tr>
  <tr>
    <td>Frenzy (barbarian), 49</td>
  </tr>
  <tr>
    <td>frightened (condition), 290</td>
  </tr>
  <tr>
    <td>frog (creature), 305</td>
  </tr>
  <tr id="phb-index-g">
	 <th>G</th>
  </tr>
  <tr>
    <td>gaining a level, 15</td>
  </tr>
  <tr>
    <td>Gargantuan (size category), 191</td>
  </tr>
  <tr>
    <td>gather information</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;researching (downtime activity), 187</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;intimidation (Charisma check), 179</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;investigation (Intelligence check), 178</td>
  </tr>
  <tr>
    <td>Gaze of Two Minds (warlock eldritch invocation), 111</td>
  </tr>
  <tr>
    <td>Gehenna (plane of existence), 302</td>
  </tr>
  <tr>
    <td>gender (character: sex and gender), 121</td>
  </tr>
  <tr>
    <td>getting into and out of armor (armor and shields), 146</td>
  </tr>
  <tr>
    <td>Giant (language), 123</td>
  </tr>
  <tr>
    <td>Giant Killer (ranger Hunter's Prey), 93</td>
  </tr>
  <tr>
    <td>gladiator (background), 131</td>
  </tr>
  <tr>
    <td>gnome, 35-37</td>
  </tr>
  <tr>
    <td>Gnome Cunning (gnome), 37</td>
  </tr>
  <tr>
    <td>gnome names, 36</td>
  </tr>
  <tr>
    <td>gnome traits, 36-37</td>
  </tr>
  <tr>
    <td>Gnomish (language), 37, 123</td>
  </tr>
  <tr>
    <td>Goading Attack maneuver (fighter maneuver), 74</td>
  </tr>
  <tr>
    <td>gold dwarf (race; dwarf: hill dwarf), 20</td>
  </tr>
  <tr>
    <td>gold piece (gp), 14</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;coinage, 143</td>
  </tr>
  <tr>
    <td>Gong of the Summit (monk Elemental Discipline), 81</td>
  </tr>
  <tr>
    <td>grappled (condition), 290</td>
  </tr>
  <tr>
    <td>grappling, 195</td>
  </tr>
  <tr>
    <td>gray dwarf (duergar) (race; dwarf), 20</td>
  </tr>
  <tr>
    <td>Greater Portent (wizard), 117</td>
  </tr>
  <tr>
    <td>Great Old One, the (warlock otherworldly patron), 109-110</td>
  </tr>
  <tr>
    <td>Great Weapon Fighting (fighting style), 72, 84</td>
  </tr>
  <tr>
    <td>Great Wheel, the (plane of existence), 302</td>
  </tr>
  <tr>
    <td>grid (variant), 192</td>
  </tr>
  <tr>
    <td>Grim Harvest (wizard), 118</td>
  </tr>
  <tr>
    <td>group checks (ability check), 175</td>
  </tr>
  <tr>
    <td>Guided Strike (Channel Divinity cleric option), 63</td>
  </tr>
  <tr>
    <td>guild artisan (background), 132-133</td>
  </tr>
  <tr>
    <td>Guild Membership (guild artisan), 133</td>
  </tr>
  <tr>
    <td>guild merchant (background), 133</td>
  </tr>
  <tr id="phb-index-h">
	 <th>H</th>
  </tr>
  <tr>
    <td>Hades (plane of existence), 302</td>
  </tr>
  <tr>
    <td>half cover (cover), 196</td>
  </tr>
  <tr>
    <td>half-elf, 38-39</td>
  </tr>
  <tr>
    <td>half-elf names, 39</td>
  </tr>
  <tr>
    <td>half-elf traits, 39</td>
  </tr>
  <tr>
    <td>halfling, 26-28</td>
  </tr>
  <tr>
    <td>Hallfing (language), 28, 123</td>
  </tr>
  <tr>
    <td>halfling names. 27</td>
  </tr>
  <tr>
    <td>Halfling Nimbleness, 28</td>
  </tr>
  <tr>
    <td>halfling traits, 28</td>
  </tr>
  <tr>
    <td>half-orc, 40-41</td>
  </tr>
  <tr>
    <td>half-orc names, 41</td>
  </tr>
  <tr>
    <td>half-orc traits, 41</td>
  </tr>
  <tr>
    <td>hawk (falcon) (creature), 306</td>
  </tr>
  <tr>
    <td>healing, 197</td>
  </tr>
  <tr>
    <td>hearing (Wisdom: Perception), 178</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;condition: deafened, 290</td>
  </tr>
  <tr>
    <td>heavily obscured, 183</td>
  </tr>
  <tr>
    <td>heavy (weapon property), 147</td>
  </tr>
  <tr>
    <td>heavy armor (armor and shields), 145</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;movement: in heavy armor, 144</td>
  </tr>
  <tr>
    <td>heavy weapons and Small creatures, 147</td>
  </tr>
  <tr>
    <td>height and weight (character), 121</td>
  </tr>
  <tr>
    <td>Heightened Spell (sorcerer Metamagic), 102</td>
  </tr>
  <tr>
    <td>Hellish Resistance (tiefling), 43</td>
  </tr>
  <tr>
    <td>Help action, 192</td>
  </tr>
  <tr>
    <td>hermit (background), 134-135</td>
  </tr>
  <tr>
    <td>hidden, 177, 178</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dexterity: Stealth, 177</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;finding a hidden creature, 177</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;finding a hidden object, 178</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hiding, 177</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unseen attackers and targets, 194-195</td>
  </tr>
  <tr>
    <td>Hide action, 192</td>
  </tr>
  <tr>
    <td>Hide in Plain Sight (ranger), 92</td>
  </tr>
  <tr>
    <td>hiding, 177</td>
  </tr>
  <tr>
    <td>high elf (race; elf), 23</td>
  </tr>
  <tr>
    <td>hill dwarf (race; dwarf), 20</td>
  </tr>
  <tr>
    <td>hirelings, 159</td>
  </tr>
  <tr>
    <td>History (Intelligence skill), 177-178</td>
  </tr>
  <tr>
    <td>Hit Dice, 12</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;multiclassing and, 163</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;See also specific class entries, 45</td>
  </tr>
  <tr>
    <td>hit point maximum, 12, 15, 177</td>
  </tr>
  <tr>
    <td>hit points, 12, 13, 15, 177, 196-198</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Constitution and, 177</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;current, 196</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;damage at 0 (death saving throw), 197</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dropping to 0, 197-198</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;increasing with level, 15</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;multiclassing and, 163</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;starting, 12, 13</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;subtracting damage from, 196</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;temporary, 198</td>
  </tr>
  <tr>
    <td>holding breath, 183</td>
  </tr>
  <tr>
    <td>holding your action (Ready action), 193</td>
  </tr>
  <tr>
    <td>Holy Nimbus (paladin), 86</td>
  </tr>
  <tr>
    <td>holy symbol</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cleric, 57, 58</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;paladin, 84, 85</td>
  </tr>
  <tr>
    <td>Horde Breaker (ranger Hunter's Prey), 93</td>
  </tr>
  <tr>
    <td>horse, riding (creature), 310</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;See also mounts and vehicles, 155, 157</td>
  </tr>
  <tr>
    <td>how to play (rules), 6</td>
  </tr>
  <tr>
    <td>Huge (size category), 191</td>
  </tr>
  <tr>
    <td>human, 29-31</td>
  </tr>
  <tr>
    <td>human ethnicities, 30-31</td>
  </tr>
  <tr>
    <td>human names, 30, 31</td>
  </tr>
  <tr>
    <td>human traits, 31</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;variant, 31</td>
  </tr>
  <tr>
    <td>Hunter (ranger archetype), 93</td>
  </tr>
  <tr>
    <td>Hunter's Prey (ranger), 93</td>
  </tr>
  <tr>
    <td>Hurl Through Hell (warlock), 109</td>
  </tr>
  <tr>
    <td>hustle (Dash action), 192</td>
  </tr>
  <tr>
    <td>Hypnotic Gaze (wizard), 117</td>
  </tr>
  <tr id="phb-index-i">
	 <th>I</th>
  </tr>
  <tr>
    <td>ideals (personality), 124</td>
  </tr>
  <tr>
    <td>Ignan (language), 123</td>
  </tr>
  <tr>
    <td>illusion, 118, 203</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;school (wizard arcane tradition), 118</td>
  </tr>
  <tr>
    <td>illusionist, 118</td>
  </tr>
  <tr>
    <td>Illusion Savant (wizard), 118</td>
  </tr>
  <tr>
    <td>Illuskan (human ethnicity), 31</td>
  </tr>
  <tr>
    <td>Illusory Reality (wizard), 118</td>
  </tr>
  <tr>
    <td>Illusory Self (wizard), 118</td>
  </tr>
  <tr>
    <td>imp (creature), 306</td>
  </tr>
  <tr>
    <td>Impostor (rogue), 97</td>
  </tr>
  <tr>
    <td>Improved Abjuration (wizard), 115</td>
  </tr>
  <tr>
    <td>Improved Combat Superiority (fighter), 74</td>
  </tr>
  <tr>
    <td>Improved Critical (fighter), 72</td>
  </tr>
  <tr>
    <td>Improved Divine Smite (paladin), 85</td>
  </tr>
  <tr>
    <td>Improved Duplicity (cleric), 63</td>
  </tr>
  <tr>
    <td>Improved Flare (cleric), 61</td>
  </tr>
  <tr>
    <td>Improved Minor Illusion (wizard), 118</td>
  </tr>
  <tr>
    <td>Improved War Magic (fighter), 75</td>
  </tr>
  <tr>
    <td>improvised weapons, 147-148</td>
  </tr>
  <tr>
    <td>incapacitated (condition), 290</td>
  </tr>
  <tr>
    <td>Indomitable (fighter), 72</td>
  </tr>
  <tr>
    <td>Indomitable Might (barbarian), 49</td>
  </tr>
  <tr>
    <td>Infernal (language), 123</td>
  </tr>
  <tr>
    <td>Infernal Legacy (tiefling), 43</td>
  </tr>
  <tr>
    <td>Infiltration Expertise (rogue), 97</td>
  </tr>
  <tr>
    <td>initiative, 177, 189</td>
  </tr>
  <tr>
    <td>Inner Planes (plane of existence), 301</td>
  </tr>
  <tr>
    <td>Insight (Wisdom skill), 178</td>
  </tr>
  <tr>
    <td>inspiration, 125</td>
  </tr>
  <tr>
    <td>instantaneous (spell duration), 203</td>
  </tr>
  <tr>
    <td>Instinctive Charm (wizard), 117</td>
  </tr>
  <tr>
    <td>Intelligence, 12, 177-178</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Arcana, 177</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;checks, 177-178</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;History, 177-178</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Investigation, 178</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nature, 178</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Religion, 178</td>
  </tr>
  <tr>
    <td>Intimidating Presence (barbarian), 49-50</td>
  </tr>
  <tr>
    <td>Intimidation (Charisma skill), 179</td>
  </tr>
  <tr>
    <td>Inured to Undeath (wizard), 119</td>
  </tr>
  <tr>
    <td>Investigation (Intelligence skill), 178</td>
  </tr>
  <tr>
    <td>invisible (condition), 291</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unseen attackers and targets, 194-195</td>
  </tr>
  <tr>
    <td>Invoke Duplicity (Channel Divinity cleric option), 63</td>
  </tr>
  <tr id="phb-index-j">
	 <th>J</th>
  </tr>
  <tr>
    <td>Jack of All Trades (bard), 54</td>
  </tr>
  <tr>
    <td>jumping (movement), 182, 190</td>
  </tr>
  <tr id="phb-index-k">
	 <th>K</th>
  </tr>
  <tr>
    <td>Keen Senses (elf), 23</td>
  </tr>
  <tr>
    <td>Ki (monk), 78</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;saving throws, 78</td>
  </tr>
  <tr>
    <td>Ki-Empowered Strikes (monk), 79</td>
  </tr>
  <tr>
    <td>ki points, 78</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;spells and, 80</td>
  </tr>
  <tr>
    <td>knight (background: noble knight), 136</td>
  </tr>
  <tr>
    <td>knocking a creature out, 198</td>
  </tr>
  <tr>
    <td>Know Your Enemy (fighter), 73-74</td>
  </tr>
  <tr>
    <td>Knowledge domain (cleric divine domain), 59-60</td>
  </tr>
  <tr>
    <td>Knowledge of the Ages (Channel Divinity cleric option), 59</td>
  </tr>
  <tr id="phb-index-l">
	 <th>L</th>
  </tr>
  <tr>
    <td>Land's Stride</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;druid, 69</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ranger, 92</td>
  </tr>
  <tr>
    <td>language, 17, 123, 125</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Druidic, 66</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;thieves' cant, 96</td>
  </tr>
  <tr>
    <td>Large (size category), 191</td>
  </tr>
  <tr>
    <td>lawful evil (alignment), 122</td>
  </tr>
  <tr>
    <td>lawful good (alignment), 122</td>
  </tr>
  <tr>
    <td>lawful neutral (alignment), 122</td>
  </tr>
  <tr>
    <td>Lay on Hands (paladin), 84</td>
  </tr>
  <tr>
    <td>learning spells. See specific class Spellcasting entries: bard (52); cleric (58); druid (66); fighter, Eldritch Knight (75); ranger (91); rogue, Arcane Trickster (98); sorcerer (101); warlock (107); wizard (114)</td>
  </tr>
  <tr>
    <td>lethal damage, 197</td>
  </tr>
  <tr>
    <td>level, 11, 15</td>
  </tr>
  <tr>
    <td>Life domain (cleric divine domain), 60</td>
  </tr>
  <tr>
    <td>Lifedrinker (warlock eldritch invocation), 111</td>
  </tr>
  <tr>
    <td>lifestyle (expenses), 157</td>
  </tr>
  <tr>
    <td>lifting and carrying, 176</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;carrying capacity, 176</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;encumbrance (variant), 176</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;size and, 176</td>
  </tr>
  <tr>
    <td>light, 183</td>
  </tr>
  <tr>
    <td>light (weapon property), 147</td>
  </tr>
  <tr>
    <td>light armor (armor and shields), 144</td>
  </tr>
  <tr>
    <td>light domain (cleric divine domain), 60-61</td>
  </tr>
  <tr>
    <td>lightly obscured, 183</td>
  </tr>
  <tr>
    <td>lightning damage (damage type), 196</td>
  </tr>
  <tr>
    <td>Limbo (plane of existence), 302</td>
  </tr>
  <tr>
    <td>line (area of effect), 205</td>
  </tr>
  <tr>
    <td>line of sight (casting a spell: targeting), 204</td>
  </tr>
  <tr>
    <td>lion (creature), 307</td>
  </tr>
  <tr>
    <td>listening (Wisdom: Perception), 178</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;deafened (condition), 290</td>
  </tr>
  <tr>
    <td>loading (weapon property), 147</td>
  </tr>
  <tr>
    <td>lock, opening or picking (thieves' tools), 154</td>
  </tr>
  <tr>
    <td>lodging (expenses), 158</td>
  </tr>
  <tr>
    <td>Lolth, 24, 296</td>
  </tr>
  <tr>
    <td>long rest (resting), 186</td>
  </tr>
  <tr>
    <td>Lower Planes (plane of existence), 302</td>
  </tr>
  <tr>
    <td>low-light vision (darkvision), 183, 185</td>
  </tr>
  <tr>
    <td>Lucky (halfling), 28</td>
  </tr>
  <tr>
    <td>Lunging Attack maneuver (fighter maneuver), 74</td>
  </tr>
  <tr id="phb-index-m">
	 <th>M</th>
  </tr>
  <tr>
    <td>Mage Hand Legerdemain (rogue), 98</td>
  </tr>
  <tr>
    <td>Magical Ambush (rogue), 98</td>
  </tr>
  <tr>
    <td>Magical Secrets (bard), 54</td>
  </tr>
  <tr>
    <td>magic, 8, 201-289</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;See also specific class entries, 45</td>
  </tr>
  <tr>
    <td>magic item (wealth), 144</td>
  </tr>
  <tr>
    <td>magic-user (wizard), 45, 112-119</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;arcane magic, 205</td>
  </tr>
  <tr>
    <td>Malleable Illusions (wizard), 118</td>
  </tr>
  <tr>
    <td>maneuver (fighter), 73</td>
  </tr>
  <tr>
    <td>Maneuvering Attack maneuver (fighter maneuver), 74</td>
  </tr>
  <tr>
    <td>maneuvers, 73, 74</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;list, 74</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;saving throws, 73</td>
  </tr>
  <tr>
    <td>mapping (travel), 183</td>
  </tr>
  <tr>
    <td>marching order (travel), 182</td>
  </tr>
  <tr>
    <td>Martial Archetype (fighter), 72</td>
  </tr>
  <tr>
    <td>martial archetypes, 72-75</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Battle Master, 73-74</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Champion, 72-73</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Eldritch Knight, 74-75</td>
  </tr>
  <tr>
    <td>Martial Arts (monk), 78</td>
  </tr>
  <tr>
    <td>martial weapon (weapon category), 146</td>
  </tr>
  <tr>
    <td>Mask of Many Faces (warlock eldritch invocation), 111</td>
  </tr>
  <tr>
    <td>Mask of the Wild (wood elf), 24</td>
  </tr>
  <tr>
    <td>Master of Myriad Forms (warlock eldritch invocation), 111</td>
  </tr>
  <tr>
    <td>Master of Nature (cleric), 62</td>
  </tr>
  <tr>
    <td>Master Transmuter (wizard), 119</td>
  </tr>
  <tr>
    <td>mastiff (creature), 307</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mounts and vehicles, 155, 157</td>
  </tr>
  <tr>
    <td>material spell component, 203</td>
  </tr>
  <tr>
    <td>Material Plane (plane of existence), 300</td>
  </tr>
  <tr>
    <td>Mechanus (plane of existence), 302</td>
  </tr>
  <tr>
    <td>Medicine (Wisdom skill), 178</td>
  </tr>
  <tr>
    <td>Medium (size category), 191</td>
  </tr>
  <tr>
    <td>medium armor (armor and shields), 144</td>
  </tr>
  <tr>
    <td>melee attack, 195</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unarmed, 195</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;with a weapon that requires ammunition, 147</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;reach, 195</td>
  </tr>
  <tr>
    <td>melee weapon, 14, 146, 149, 195</td>
  </tr>
  <tr>
    <td>Menacing (half-orc), 41</td>
  </tr>
  <tr>
    <td>Menacing Attack maneuver (fighter maneuver), 74</td>
  </tr>
  <tr>
    <td>Metamagic (sorcerer), 101-102</td>
  </tr>
  <tr>
    <td>Military Rank (soldier), 140</td>
  </tr>
  <tr>
    <td>Mindless Rage (barbarian), 49</td>
  </tr>
  <tr>
    <td>Minions of Chaos (warlock eldritch invocation), 111</td>
  </tr>
  <tr>
    <td>Minor Alchemy (wizard), 119</td>
  </tr>
  <tr>
    <td>Minor Conjuration (wizard), 116</td>
  </tr>
  <tr>
    <td>Mire the Mind (warlock eldritch invocation), 111</td>
  </tr>
  <tr>
    <td>Mist Stance (monk Elemental Discipline), 81</td>
  </tr>
  <tr>
    <td>Misty Escape (warlock), 109</td>
  </tr>
  <tr>
    <td>Misty Visions (warlock eldritch invocation), 111</td>
  </tr>
  <tr>
    <td>modifier, 7</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ability, 7</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bonus, 7</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;penalty, 7</td>
  </tr>
  <tr>
    <td>monastic orders, 81</td>
  </tr>
  <tr>
    <td>Monastic Tradition (monk), 78</td>
  </tr>
  <tr>
    <td>monastic traditions, 79-81</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Way of the Open Hand, 79-80</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Way of Shadow, 80</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Way of the Four Elements, 80-81</td>
  </tr>
  <tr>
    <td>monk, 45, 76-81</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;monastic traditions, 79-81</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;quick build, 77</td>
  </tr>
  <tr>
    <td>monk weapons, 78</td>
  </tr>
  <tr>
    <td>moon elf (race; elf: high elf), 23</td>
  </tr>
  <tr>
    <td>mount (mounts and vehicles), 155, 157</td>
  </tr>
  <tr>
    <td>mountain dwarf (race; dwarf), 20</td>
  </tr>
  <tr>
    <td>Mount Celestia (plane of existence), 302</td>
  </tr>
  <tr>
    <td>mounted combat, 198</td>
  </tr>
  <tr>
    <td>mounts and vehicles, 155, 157</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;movement, 181-182</td>
  </tr>
  <tr>
    <td>move action, 189, 190-191</td>
  </tr>
  <tr>
    <td>movement, 181-183, 190-192</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;around creatures, 191</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;breaking up, 190</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;climbing, 182, 190</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;crawling, 182, 191</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;combat, 190-192</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;difficult terrain, 182, 190</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;flying, 191</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;prone, 190-191</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;forced march, 181</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;in heavy armor, 144</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;jumping, 182, 190</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mounts and vehicles, 181-182</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;size, 191-192</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;speed, 14, 17, 181</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;squeezing, 192</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;stand up, 190-191</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;swimming, 175 (Athletics), 182, 190</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;travel pace, 181</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;using different speeds, 190</td>
  </tr>
  <tr>
    <td>moving a grappled creature, 195</td>
  </tr>
  <tr>
    <td>Mulan (human ethnicity), 31</td>
  </tr>
  <tr>
    <td>mule (creature), 307</td>
  </tr>
  <tr>
    <td>Multiattack (ranger), 93</td>
  </tr>
  <tr>
    <td>Multiattack Defense (ranger Defensive Tactic), 93</td>
  </tr>
  <tr>
    <td>multiclassing, 163-164</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Channel Divinity, 164</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;experience points, 163</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hit points and Hit Dice, 163</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pact Magic, 164</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;prerequisites, 163</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;proficiencies, 163-164</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;proficiency bonus, 163</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;spell slots, 164</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Spellcasting, 164</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;spells known and prepared, 164</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Unarmored Defense, 164</td>
  </tr>
  <tr>
    <td>multiverse, 5-6, 293, 300</td>
  </tr>
  <tr>
    <td>Mystic Arcanum (warlock), 108</td>
  </tr>
  <tr>
    <td>name (character), 121</td>
  </tr>
  <tr>
    <td>Natural Explorer (ranger), 91</td>
  </tr>
  <tr>
    <td>Natural Illusionist (forest gnome), 37</td>
  </tr>
  <tr>
    <td>Naturally Stealthy (lightfoot halfling), 28</td>
  </tr>
  <tr>
    <td>Natural Recovery (druid), 68</td>
  </tr>
  <tr>
    <td>Nature (Intelligence skill), 178</td>
  </tr>
  <tr>
    <td>Nature domain (cleric divine domain), 61-62</td>
  </tr>
  <tr>
    <td>Nature's Sanctuary (druid), 69</td>
  </tr>
  <tr>
    <td>Nature's Ward (druid), 69</td>
  </tr>
  <tr>
    <td>Nature's Wrath (Channel Divinity paladin option), 87</td>
  </tr>
  <tr>
    <td>navigating (travel), 183</td>
  </tr>
  <tr>
    <td>necromancer, 118-119</td>
  </tr>
  <tr>
    <td>necromancy, 118, 203</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;school (wizard arcane tradition), 118-119</td>
  </tr>
  <tr>
    <td>Necromancy Savant (wizard), 118</td>
  </tr>
  <tr id="phb-index-n">
	 <th>N</th>
  </tr>
  <tr>
    <td>necrotic damage (damage type), 196</td>
  </tr>
  <tr>
    <td>Negative Plane (plane of existence), 300</td>
  </tr>
  <tr>
    <td>neutral (alignment), 122</td>
  </tr>
  <tr>
    <td>neutral evil (alignment), 122</td>
  </tr>
  <tr>
    <td>neutral good (alignment), 122</td>
  </tr>
  <tr>
    <td>Nine Hells, the (plane of existence), 302</td>
  </tr>
  <tr>
    <td>noble (background), 135-136</td>
  </tr>
  <tr>
    <td>noble knight (background), 136</td>
  </tr>
  <tr>
    <td>nonplayer character (NPC), 8, 159, 185, 189, 198</td>
  </tr>
  <tr>
    <td>nonlethal damage, 196</td>
  </tr>
  <tr>
    <td>NPC (nonplayer character), 8, 159, 185, 189, 198</td>
  </tr>
  <tr id="phb-index-o">
	 <th>O</th>
  </tr>
  <tr>
    <td>Oath of Devotion (paladin sacred oath), 85-86</td>
  </tr>
  <tr>
    <td>Oath of the Ancients (paladin sacred oath), 86-87</td>
  </tr>
  <tr>
    <td>Oath of Vengeance (paladin sacred oath), 87-88</td>
  </tr>
  <tr>
    <td>oath spells (paladin), 85-88</td>
  </tr>
  <tr>
    <td>objects, 185</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;attacking, 185</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;interacting with, 185</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;using during combat, 190</td>
  </tr>
  <tr>
    <td>One with Shadows (warlock eldritch invocation), 111</td>
  </tr>
  <tr>
    <td>Open Hand Technique (monk), 79</td>
  </tr>
  <tr>
    <td>open locks (thieves' tools), 154</td>
  </tr>
  <tr>
    <td>Opportunist (monk), 80</td>
  </tr>
  <tr>
    <td>opportunity attack, 195</td>
  </tr>
  <tr>
    <td>Orc, 41</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;language, 41, 123</td>
  </tr>
  <tr>
    <td>orison (cantrip), 201</td>
  </tr>
  <tr>
    <td>Otherworldly Leap (warlock eldritch invocation), 111</td>
  </tr>
  <tr>
    <td>Otherworldly Patron (warlock), 107</td>
  </tr>
  <tr>
    <td>otherworldly patrons, 108-110</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Archfey, the, 108-109</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fiend, the, 109</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Great Old One, the, 109-110</td>
  </tr>
  <tr>
    <td>Outer Planes (plane of existence), 300, 301</td>
  </tr>
  <tr>
    <td>outlander (background), 136-137</td>
  </tr>
  <tr>
    <td>Outlands, the (plane of existence), 302</td>
  </tr>
  <tr>
    <td>Overchannel (wizard), 118</td>
  </tr>
  <tr>
    <td>owl (creature), 308</td>
  </tr>
  <tr id="phb-index-p">
	 <th>P</th>
  </tr>
  <tr>
    <td>Pact Boon (warlock), 107-108</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pact of the Blade, 107-108</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pact of the Chain, 107</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pact of the Tome, 108</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Your Pact Boon, 108</td>
  </tr>
  <tr>
    <td>Pact Magic (warlock), 107</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;multiclassing and, 164</td>
  </tr>
  <tr>
    <td>pact weapon (warlock), 107-108</td>
  </tr>
  <tr>
    <td>paladin, 45, 82-88</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;quick build, 83</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sacred oaths, 85-88</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;spell list, 208-209</td>
  </tr>
  <tr>
    <td>Pandemonium (plane of existence), 302</td>
  </tr>
  <tr>
    <td>panther (creature), 308</td>
  </tr>
  <tr>
    <td>paralyzed (condition), 291</td>
  </tr>
  <tr>
    <td>Parry maneuver (fighter maneuver), 74</td>
  </tr>
  <tr>
    <td>party (adventuring), 15</td>
  </tr>
  <tr>
    <td>passive check (ability check), 175</td>
  </tr>
  <tr>
    <td>Path of the Berserker (barbarian primal path), 49-50</td>
  </tr>
  <tr>
    <td>Path of the Totem Warrior (barbarian primal path), 50</td>
  </tr>
  <tr>
    <td>Patient Defense (monk Ki), 78</td>
  </tr>
  <tr>
    <td>Peerless Skill (bard), 55</td>
  </tr>
  <tr>
    <td>penalty, 6</td>
  </tr>
  <tr>
    <td>percentile (dice), 6</td>
  </tr>
  <tr>
    <td>Perception (Wisdom skill), 178</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;travel: noticing threats, 182-183</td>
  </tr>
  <tr>
    <td>Perfect Self (monk), 79</td>
  </tr>
  <tr>
    <td>Performance (Charisma skill), 179</td>
  </tr>
  <tr>
    <td>Persistent Rage (barbarian), 49</td>
  </tr>
  <tr>
    <td>personality (character), 122-124</td>
  </tr>
  <tr>
    <td>Persuasion (Charisma skill), 179</td>
  </tr>
  <tr>
    <td>petrified (condition), 291</td>
  </tr>
  <tr>
    <td>pick locks (thieves' tools), 154</td>
  </tr>
  <tr>
    <td>pick pockets (Dexterity: Sleight of Hand), 177</td>
  </tr>
  <tr>
    <td>piercing damage (damage type), 196</td>
  </tr>
  <tr>
    <td>pirate (background), 139</td>
  </tr>
  <tr>
    <td>planar travel, 301</td>
  </tr>
  <tr>
    <td>Plane of Air (plane of existence), 301</td>
  </tr>
  <tr>
    <td>Plane of Earth (plane of existence), 301</td>
  </tr>
  <tr>
    <td>Plane of Faerie (plane of existence), 301</td>
  </tr>
  <tr>
    <td>plane of Fire (plane of existence), 301</td>
  </tr>
  <tr>
    <td>Plane of Shadow (plane of existence), 301</td>
  </tr>
  <tr>
    <td>Plane of Water (plane of existence), 301</td>
  </tr>
  <tr>
    <td>planes of existence, 5, 300-303</td>
  </tr>
  <tr>
    <td>platinum piece (pp) (coinage), 143</td>
  </tr>
  <tr>
    <td>player character, 5, 11-15</td>
  </tr>
  <tr>
    <td>point of origin (area of effect), 204</td>
  </tr>
  <tr>
    <td>poison damage (damage type), 196</td>
  </tr>
  <tr>
    <td>poisoned (condition), 292</td>
  </tr>
  <tr>
    <td>Position of Privilege (noble), 135</td>
  </tr>
  <tr>
    <td>Positive Plane (plane of existence), 300</td>
  </tr>
  <tr>
    <td>Portent (wizard), 116</td>
  </tr>
  <tr>
    <td>Potent Cantrip (wizard), 117</td>
  </tr>
  <tr>
    <td>Potent Spellcasting (cleric)</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Knowledge domain, 60</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Light domain, 61</td>
  </tr>
  <tr>
    <td>Precision Attack maneuver (fighter maneuver), 74</td>
  </tr>
  <tr>
    <td>preparing spells. See Spellcasting: (cleric), 58; (druid), 66; (paladin), 84-85; (wizard), 114</td>
  </tr>
  <tr>
    <td>Preserve life (Channel Divinity cleric options), 60</td>
  </tr>
  <tr>
    <td>Primal Champion (barbarian), 49</td>
  </tr>
  <tr>
    <td>Primal Path (barbarian), 48</td>
  </tr>
  <tr>
    <td>primal paths, 49-50</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Path of the Berserker, 49-50</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Path of the Totem Warrior, 50</td>
  </tr>
  <tr>
    <td>Primal Strike (druid), 69</td>
  </tr>
  <tr>
    <td>Primeval Awareness (ranger), 92</td>
  </tr>
  <tr>
    <td>Primordial (language), 123</td>
  </tr>
  <tr>
    <td>profession (downtime activity), 187</td>
  </tr>
  <tr>
    <td>proficiencies, 11, 12, 14, 155</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;multiclassing and, 163-164</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;saving throw, 14</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;skill, 14</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;spell, 14</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tool, 14</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;vehicle, 155</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;weapon, 14</td>
  </tr>
  <tr>
    <td>proficiency bonus, 14, 173-174, 194</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;adding, 14, 173</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dividing, 14, 173-174</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;increasing with level, 15</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;multiclassing and, 163</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;multiplying, 14, 173-174</td>
  </tr>
  <tr>
    <td>Projected Ward (wizard), 115</td>
  </tr>
  <tr>
    <td>projectile weapon (weapon property: ammunition), 146</td>
  </tr>
  <tr>
    <td>prone, 190-191</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;prone condition, 292</td>
  </tr>
  <tr>
    <td>Protection (fighting style), 72, 84</td>
  </tr>
  <tr>
    <td>pseudodragon (creature), 308</td>
  </tr>
  <tr>
    <td>psychic damage (damage type), 196</td>
  </tr>
  <tr>
    <td>punching (unarmed melee attack), 195</td>
  </tr>
  <tr>
    <td>Purity of Body (monk), 79</td>
  </tr>
  <tr>
    <td>Purity of Spirit (paladin), 86</td>
  </tr>
  <tr>
    <td>Pushing Attack maneuver (fighter maneuver), 74</td>
  </tr>
  <tr id="phb-index-q">
	 <th>Q</th>
  </tr>
  <tr>
    <td>quasit (creature), 309</td>
  </tr>
  <tr>
    <td>quick build, 11</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;See also under specific class entries, 45</td>
  </tr>
  <tr>
    <td>Quickened Spell (sorcerer Metamagic), 102</td>
  </tr>
  <tr>
    <td>Quivering Palm (monk), 80</td>
  </tr>
  <tr id="phb-index-r">
	 <th>R</th>
  </tr>
  <tr>
    <td>race, 11</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;choosing a, 11, 17</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;traits (racial), 11, 17</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;See also specific race entries, 17</td>
  </tr>
  <tr>
    <td>racial ability score increase (racial traits: ability score increase), 11, 12, 13, 17</td>
  </tr>
  <tr>
    <td>racial traits, 11, 17</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ability score increase, 11, 12, 13, 17</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;age, 17</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;alignment, 17</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;languages, 17</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;size, 17</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;speed, 17</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;subrace, 17</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;See also specific race entries, 17</td>
  </tr>
  <tr>
    <td>Radiance of the Dawn (Channel Divinity cleric options), 61</td>
  </tr>
  <tr>
    <td>radiant damage (damage type), 196</td>
  </tr>
  <tr>
    <td>Rage (barbarian), 48</td>
  </tr>
  <tr>
    <td>Rally maneuver (fighter maneuver), 74</td>
  </tr>
  <tr>
    <td>range, 195</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;maximum, 147</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;normal, 147</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;of spells (casting a spell: range), 202-203</td>
  </tr>
  <tr>
    <td>range (weapon property), 146</td>
  </tr>
  <tr>
    <td>ranged attack, 195</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;in melee, 195</td>
  </tr>
  <tr>
    <td>ranged weapon, 14, 146, 149, 195</td>
  </tr>
  <tr>
    <td>ranger, 45, 89-93</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;quick build, 90</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ranger archetypes, 93</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;spell list, 209</td>
  </tr>
  <tr>
    <td>Ranger Archetype (ranger), 92</td>
  </tr>
  <tr>
    <td>ranger archetypes, 93</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Beast Master, 93</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hunter, 93</td>
  </tr>
  <tr>
    <td>Ranger's Companion (ranger), 93</td>
  </tr>
  <tr>
    <td>Rashemi (human ethnicity), 31</td>
  </tr>
  <tr>
    <td>rat (creature), 309</td>
  </tr>
  <tr>
    <td>raven (creature), 309</td>
  </tr>
  <tr>
    <td>reach (creature), 195</td>
  </tr>
  <tr>
    <td>reach (weapon property), 147</td>
  </tr>
  <tr>
    <td>reaction, 190</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;casting a spell: casting time, 202</td>
  </tr>
  <tr>
    <td>Read Thoughts (Channel Divinity cleric options), 59</td>
  </tr>
  <tr>
    <td>Ready action, 193</td>
  </tr>
  <tr>
    <td>Reckless Attack (barbarian), 48</td>
  </tr>
  <tr>
    <td>recovering ammunition (weapon property: ammunition), 146</td>
  </tr>
  <tr>
    <td>recuperating (downtime activity), 187</td>
  </tr>
  <tr>
    <td>refitting plate armor (armor and shields; variant: equipment sizes), 144</td>
  </tr>
  <tr>
    <td>Relentless (fighter), 78</td>
  </tr>
  <tr>
    <td>Relentless Avenger (paladin), 88</td>
  </tr>
  <tr>
    <td>Relentless Endurance (half-orc), 41</td>
  </tr>
  <tr>
    <td>Relentless Rage (barbarian), 49</td>
  </tr>
  <tr>
    <td>Reliable Talent (rogue), 96</td>
  </tr>
  <tr>
    <td>religion, 293</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cleric, 56</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;druid, 64</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;paladin, 82</td>
  </tr>
  <tr>
    <td>Religion (Intelligence skill), 178</td>
  </tr>
  <tr>
    <td>reloading (weapon property: ammunition), 146</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;objects: using during combat, 190</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;weapon properties: loading, 147</td>
  </tr>
  <tr>
    <td>Remarkable Athlete (fighter), 72</td>
  </tr>
  <tr>
    <td>Repelling Blast (warlock eldritch invocation), 111</td>
  </tr>
  <tr>
    <td>research (downtime activity), 187</td>
  </tr>
  <tr>
    <td>Researcher (sage), 138</td>
  </tr>
  <tr>
    <td>resistance (damage resistance), 197</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Damage Resistance (dragonborn), 34</td>
  </tr>
  <tr>
    <td>resting, 186</td>
  </tr>
  <tr>
    <td>restrained (condition), 292</td>
  </tr>
  <tr>
    <td>result (total), 7</td>
  </tr>
  <tr>
    <td>Retainers (noble variant), 136</td>
  </tr>
  <tr>
    <td>Retaliation (barbarian), 50</td>
  </tr>
  <tr>
    <td>Ride the Wind (monk Elemental Discipline), 81</td>
  </tr>
  <tr>
    <td>Riposte maneuver (fighter maneuver), 74</td>
  </tr>
  <tr>
    <td>Ritual Casting. See Spellcasting: bard (52-53); cleric (58); druid (66); wizard (114)</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ritual Caster feat, 169</td>
  </tr>
  <tr>
    <td>rituals, 201-202</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;casting a spell: casting time, 202</td>
  </tr>
  <tr>
    <td>River of Hungry Flame (monk Elemental Discipline), 81</td>
  </tr>
  <tr>
    <td>rock gnome (race; gnome), 37</td>
  </tr>
  <tr>
    <td>rogue, 45, 94-98</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;quick build, 95</td>
  </tr>
  <tr>
    <td>Roguish Archetype (rogue), 96</td>
  </tr>
  <tr>
    <td>roguish archetypes, 97-98</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Arcane Trickster, 97-98</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Assassin, 97</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thief, 97</td>
  </tr>
  <tr>
    <td>roleplaying, 8, 185-186</td>
  </tr>
  <tr>
    <td>roll, 6-7</td>
  </tr>
  <tr>
    <td>round (time), 181, 189</td>
  </tr>
  <tr>
    <td>rounding numbers, 7</td>
  </tr>
  <tr>
    <td>rowed vessel, 155-157</td>
  </tr>
  <tr>
    <td>rules, 6-7</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;exceptions, 7</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;how to play, 6</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;specific beats general, 7</td>
  </tr>
  <tr>
    <td>run (Dash action), 192</td>
  </tr>
  <tr>
    <td>Rush of the Gale Spirits (monk Elemental Discipline), 81</td>
  </tr>
  <tr>
    <td>Rustic Hospitality (folk hero), 131</td>
  </tr>
  <tr id="phb-index-s">
	 <th>S</th>
  </tr>
  <tr>
    <td>Sacred Oath (paladin), 85</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;oath spells, 85</td>
  </tr>
  <tr>
    <td>sacred oaths, 85-88</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;breaking, 86</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Oath of Devotion 85-86</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Oath of the Ancients, 86-87</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Oath of Vengeance, 87-88</td>
  </tr>
  <tr>
    <td>sacred plants and wood (druid), 66</td>
  </tr>
  <tr>
    <td>Sacred Weapon (Channel Divinity paladin option), 86</td>
  </tr>
  <tr>
    <td>sage (background), 137-138</td>
  </tr>
  <tr>
    <td>sailor (background), 139</td>
  </tr>
  <tr>
    <td>Savage Attacks (half-orc), 41</td>
  </tr>
  <tr>
    <td>saving throw (save), 7, 12, 179, 205</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;death, 197</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ki, 78</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;maneuver (saving throws), 73</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;proficiency, 14</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;spell, 205</td>
  </tr>
  <tr>
    <td>saving throw modifier, 12, 179, 205</td>
  </tr>
  <tr>
    <td>School of Abjuration (wizard), 115-116</td>
  </tr>
  <tr>
    <td>School of Conjuration (wizard), 116</td>
  </tr>
  <tr>
    <td>School of Divination (wizard), 116-117</td>
  </tr>
  <tr>
    <td>School of Enchantment (wizard), 117</td>
  </tr>
  <tr>
    <td>School of Evocation (wizard), 117-118</td>
  </tr>
  <tr>
    <td>School of Illusion (wizard), 118</td>
  </tr>
  <tr>
    <td>School of Necromancy (wizard), 118-119</td>
  </tr>
  <tr>
    <td>School of Transmutation (wizard), 119</td>
  </tr>
  <tr>
    <td>schools of magic (arcane traditions), 115-119</td>
  </tr>
  <tr>
    <td>Sculptor of Flesh (warlock eldritch invocation), 111</td>
  </tr>
  <tr>
    <td>Sculpt Spells (wizard), 117</td>
  </tr>
  <tr>
    <td>Second-Story Work (rogue), 97</td>
  </tr>
  <tr>
    <td>Second Wind (fighter), 72</td>
  </tr>
  <tr>
    <td>Search action, 193</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Intelligence: Investigation, 178</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;travel (tracking), 183</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Wisdom: Perception, 178</td>
  </tr>
  <tr>
    <td>self</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;casting a spell: range, 202-203</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;targeting, 204</td>
  </tr>
  <tr>
    <td>selling treasure (wealth), 144</td>
  </tr>
  <tr>
    <td>services, 159</td>
  </tr>
  <tr>
    <td>sex (character: sex and gender), 121</td>
  </tr>
  <tr>
    <td>Shadow Arts (monk), 80</td>
  </tr>
  <tr>
    <td>Shadowfell, the (plane of existence), 300</td>
  </tr>
  <tr>
    <td>Shadow Step (monk), 80</td>
  </tr>
  <tr>
    <td>Shapechanger (wizard), 119</td>
  </tr>
  <tr>
    <td>Shape the Flowing River (monk Elemental Discipline), 81</td>
  </tr>
  <tr>
    <td>Share Spells (ranger), 93</td>
  </tr>
  <tr>
    <td>shark, reef (creature), 309</td>
  </tr>
  <tr>
    <td>Shelter of the Faithful (acolyte), 127</td>
  </tr>
  <tr>
    <td>shield (armor and shields), 144</td>
  </tr>
  <tr>
    <td>shield dwarf (race; dwarf: mountain), 20</td>
  </tr>
  <tr>
    <td>Ship's Passage (sailor), 139</td>
  </tr>
  <tr>
    <td>short rest (resting), 186</td>
  </tr>
  <tr>
    <td>Shou (human ethnicity), 31</td>
  </tr>
  <tr>
    <td>shoving, 195</td>
  </tr>
  <tr>
    <td>Sigil (plane of existence), 302</td>
  </tr>
  <tr>
    <td>Signature Spells (wizard), 115</td>
  </tr>
  <tr>
    <td>Sign of Ill Omen (warlock eldritch invocation), 111</td>
  </tr>
  <tr>
    <td>silvered weapon (weapon), 148</td>
  </tr>
  <tr>
    <td>silver piece (sp) (coinage), 143</td>
  </tr>
  <tr>
    <td>simple weapon (weapon category), 146</td>
  </tr>
  <tr>
    <td>size, 176, 191-192</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;and weapons (heavy), 147</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;of equipment (variant: equipment sizes), 144</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lifting and carrying: size and, 176</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;space, 191-192</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;See also racial traits and specific race trait entries, 17</td>
  </tr>
  <tr>
    <td>size category, 191</td>
  </tr>
  <tr>
    <td>skeleton (creature), 310</td>
  </tr>
  <tr>
    <td>skill check (ability check: skill), 174-175</td>
  </tr>
  <tr>
    <td>Skill Versatility (half-elf), 39</td>
  </tr>
  <tr>
    <td>skills with different abilities (variant), 175</td>
  </tr>
  <tr>
    <td>slashing damage (damage type), 196</td>
  </tr>
  <tr>
    <td>Sleight of Hand (Dexterity skill), 177</td>
  </tr>
  <tr>
    <td>Slippery Mind (rogue), 96</td>
  </tr>
  <tr>
    <td>Slow Fall (monk), 78</td>
  </tr>
  <tr>
    <td>Small (size category), 191</td>
  </tr>
  <tr>
    <td>snake, constrictor (creature), 305</td>
  </tr>
  <tr>
    <td>snake, poisonous (creature), 308</td>
  </tr>
  <tr>
    <td>Sneak Attack (rogue), 96</td>
  </tr>
  <tr>
    <td>social interaction, 8, 185-186</td>
  </tr>
  <tr>
    <td>soldier (background), 140-141</td>
  </tr>
  <tr>
    <td>somatic spell component, 203</td>
  </tr>
  <tr>
    <td>Song of Rest (bard), 54</td>
  </tr>
  <tr>
    <td>sorcerer, 45, 99-104</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;quick build, 100</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sorcerous origin, 101, 102-104</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;spell list, 209</td>
  </tr>
  <tr>
    <td>Sorcerous Origin, 101</td>
  </tr>
  <tr>
    <td>sorcerous origins, 102-104</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Draconic Bloodline, 102-103</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Wild Magic, 103-104</td>
  </tr>
  <tr>
    <td>Sorcerous Restoration, 102</td>
  </tr>
  <tr>
    <td>Sorcery Pointer (sorcerer Font of Magic), 101</td>
  </tr>
  <tr>
    <td>Soul of Vengeance (paladin), 88</td>
  </tr>
  <tr>
    <td>space (size), 191-192</td>
  </tr>
  <tr>
    <td>Speak with Small Beasts (forest gnome), 37</td>
  </tr>
  <tr>
    <td>special (weapon property), 147</td>
  </tr>
  <tr>
    <td>speed (movement), 14, 17, 181</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mounts and vehicles, 157</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;racial traits, 17</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;travel (pace), 181</td>
  </tr>
  <tr>
    <td>spell, 201</td>
  </tr>
  <tr>
    <td>spell attack modifier. See Spellcasting: bard (53); cleric (58); druid (66); paladin (85); sorcerer (101); warlock (107); wizard (114)</td>
  </tr>
  <tr>
    <td>spell attack roll, 205</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;See also Spellcasting: bard (52); cleric (58); druid (66); fighter, Eldritch Knight (75); ranger (92); rogue, Arcane Trickster (98); sorcerer (101); warlock (107); wizard (114)</td>
  </tr>
  <tr>
    <td>Spell Bombardment (sorcerer), 103</td>
  </tr>
  <tr>
    <td>Spellbook (wizard), 114</td>
  </tr>
  <tr>
    <td>spellcaster, 201</td>
  </tr>
  <tr>
    <td>spellcasting, 201-205</td>
  </tr>
  <tr>
    <td>Spellcasting</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bard, 52-53</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cleric, 58</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;druid, 66</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fighter: Eldritch Knight, 75</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;multiclassing, 164</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;paladin, 84-85</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ranger, 91-92</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rogue: Arcane Trickster, 97-98</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sorcerer, 101</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;warlock: Pact Magic, 107</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;wizard, 114</td>
  </tr>
  <tr>
    <td>spellcasting ability, 178, 179, 205</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;See also Spellcasting: bard (52); cleric (58); druid (66); fighter, Eldritch Knight (75); ranger (91); rogue, Arcane Trickster (98); sorcerer (101); warlock (107); wizard (114)</td>
  </tr>
  <tr>
    <td>spellcasting focus. See Spellcasting: bard (53); cleric (58); druid (66); paladin (85); sorcerer (101); warlock (107); wizard (114)</td>
  </tr>
  <tr>
    <td>spell components (casting a spell: components), 203</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;material spell component, 203</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;somatic spell component, 203</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;verbal spell component, 203</td>
  </tr>
  <tr>
    <td>spell descriptions, 211-289</td>
  </tr>
  <tr>
    <td>spell level, 201</td>
  </tr>
  <tr>
    <td>spell list, 207-211</td>
  </tr>
  <tr>
    <td>Spell Mastery (wizard), 115</td>
  </tr>
  <tr>
    <td>spell preparation. See Spellcasting: bard (53); cleric (58); druid (66); paladin (85); sorcerer (101); warlock (107); wizard (114)</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;multiclassing, 165</td>
  </tr>
  <tr>
    <td>Spell Resistance (wizard), 116</td>
  </tr>
  <tr>
    <td>spell save DC, 205</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;See also Spellcasting: bard (53); cleric (58); druid (66); paladin (85); sorcerer (101); warlock (107); wizard (114)</td>
  </tr>
  <tr>
    <td>spell saving throws, 205</td>
  </tr>
  <tr>
    <td>spells known, 201</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;multiclassing, 164</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;See also Spellcasting: bard (52); cleric (58); druid (66); fighter, Eldritch Knight (75); ranger (91); rogue, Arcane Trickster (98); sorcerer (101); warlock (107); wizard (114)</td>
  </tr>
  <tr>
    <td>spell slots, 201</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;multiclassing, 164</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;See also Spellcasting: bard (52); cleric (58); druid (66); fighter, Eldritch Knight (75); ranger (91); rogue, Arcane Trickster (98); sorcerer (101); warlock (107); wizard (114)</td>
  </tr>
  <tr>
    <td>Spell Thief (rogue), 98</td>
  </tr>
  <tr>
    <td>sphere (area of effect), 205</td>
  </tr>
  <tr>
    <td>spider, giant (creature), 306</td>
  </tr>
  <tr>
    <td>Spirit Seeker (barbarian), 50</td>
  </tr>
  <tr>
    <td>Spirit Walker (barbarian), 50</td>
  </tr>
  <tr>
    <td>Split Enchantment (wizard), 118</td>
  </tr>
  <tr>
    <td>spot (Perception) (Wisdom skill), 178</td>
  </tr>
  <tr>
    <td>sprite (creature), 310</td>
  </tr>
  <tr>
    <td>spy (background), 130</td>
  </tr>
  <tr>
    <td>squeezing (movement), 192</td>
  </tr>
  <tr>
    <td>stabilizing a creature, 197</td>
  </tr>
  <tr>
    <td>stable, 197-198</td>
  </tr>
  <tr>
    <td>stacking (casting a spell: combining effects), 205</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;advantage, 173</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;disadvantage, 173</td>
  </tr>
  <tr>
    <td>standard action, 192</td>
  </tr>
  <tr>
    <td>standard language (language), 123</td>
  </tr>
  <tr>
    <td>Stand Against the Tide (ranger Superior Hunter's Defense), 93</td>
  </tr>
  <tr>
    <td>starting wealth, 143</td>
  </tr>
  <tr>
    <td>starvation (food and drink: food requirements), 185</td>
  </tr>
  <tr>
    <td>Stealth (Dexterity skill), 177</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;armor and shields: Stealth, 144</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hiding, 177</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;travel, 182</td>
  </tr>
  <tr>
    <td>Steel Will (ranger Defensive Tactic), 93</td>
  </tr>
  <tr>
    <td>Step of the Wind (monk Ki), 78</td>
  </tr>
  <tr>
    <td>Stillness of Mind (monk), 79</td>
  </tr>
  <tr>
    <td>Stonecunning (dwarf), 20</td>
  </tr>
  <tr>
    <td>Stormborn (cleric), 62</td>
  </tr>
  <tr>
    <td>Stout Resilience (stout halfling), 28</td>
  </tr>
  <tr>
    <td>Strength, 12, 175-176</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Athletics, 175</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;checks, 175</td>
  </tr>
  <tr>
    <td>Stroke of luck (rogue), 96</td>
  </tr>
  <tr>
    <td>strongheart halfling (race; halfling: stout), 28</td>
  </tr>
  <tr>
    <td>Student of War (fighter), 73</td>
  </tr>
  <tr>
    <td>stunned (condition), 292</td>
  </tr>
  <tr>
    <td>Stunning Strike (monk), 79</td>
  </tr>
  <tr>
    <td>subrace, 17</td>
  </tr>
  <tr>
    <td>Subtle Spell (sorcerer Metamagic), 102</td>
  </tr>
  <tr>
    <td>suffocating, 183</td>
  </tr>
  <tr>
    <td>sun elf (race; elf: high elf), 23</td>
  </tr>
  <tr>
    <td>Sunlight Sensitivity (drow), 24</td>
  </tr>
  <tr>
    <td>Superior Critical (fighter), 73</td>
  </tr>
  <tr>
    <td>Superior Darkvision (drow), 24</td>
  </tr>
  <tr>
    <td>Superior Hunter's Defense (ranger), 93</td>
  </tr>
  <tr>
    <td>Superior Inspiration (bard), 54</td>
  </tr>
  <tr>
    <td>superiority dice (fighter), 73</td>
  </tr>
  <tr>
    <td>Supreme Healing (cleric), 60</td>
  </tr>
  <tr>
    <td>Supreme Sneak (rogue), 97</td>
  </tr>
  <tr>
    <td>surprise, 189</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;travel: surprise, 183</td>
  </tr>
  <tr>
    <td>Survival (Wisdom skill), 178</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;navigating, 183</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;travel: foraging, 183</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tracking, 183</td>
  </tr>
  <tr>
    <td>Survivor (fighter), 73</td>
  </tr>
  <tr>
    <td>svirfneblin (deep gnome) (race; gnome), 36</td>
  </tr>
  <tr>
    <td>Sweeping Attack maneuver (fighter maneuver), 74</td>
  </tr>
  <tr>
    <td>Sweeping Cinder Strike (monk Elemental Discipline), 81</td>
  </tr>
  <tr>
    <td>swimming, 175 (Athletics), 182, 190</td>
  </tr>
  <tr>
    <td>Sylvan (language), 123</td>
  </tr>
  <tr id="phb-index-t">
	 <th>T</th>
  </tr>
  <tr>
    <td>targeting a spell (casting a spell: targeting), 204</td>
  </tr>
  <tr>
    <td>target number, 7</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Armor Class (AC), 7</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Difficulty Class (DC), 7</td>
  </tr>
  <tr>
    <td>Tempest domain (cleric divine domain), 62</td>
  </tr>
  <tr>
    <td>temporary hit points, 198</td>
  </tr>
  <tr>
    <td>Tenets of Devotion (paladin), 86</td>
  </tr>
  <tr>
    <td>Tenets of the Ancients (paladin), 86-87</td>
  </tr>
  <tr>
    <td>Tenets of Vengeance (paladin), 88</td>
  </tr>
  <tr>
    <td>Terran (language), 123</td>
  </tr>
  <tr>
    <td>Tethyrian (human ethnicity), 31</td>
  </tr>
  <tr>
    <td>THAC0 (attack roll), 7, 14, 176, 177, 194</td>
  </tr>
  <tr>
    <td>Thief (roguish archetype), 97</td>
  </tr>
  <tr>
    <td>Thief of Five Fates (warlock eldritch invocation), 111</td>
  </tr>
  <tr>
    <td>Thief's Reflexes (rogue), 97</td>
  </tr>
  <tr>
    <td>thieves' cant (rogue language), 96</td>
  </tr>
  <tr>
    <td>thieves' tools, 154</td>
  </tr>
  <tr>
    <td>Third Eye, The (wizard), 116-117</td>
  </tr>
  <tr>
    <td>Thirsting Blade (warlock eldritch invocation), 111</td>
  </tr>
  <tr>
    <td>Thought Shield (warlock), 11O</td>
  </tr>
  <tr>
    <td>Thousand Forms (druid), 69</td>
  </tr>
  <tr>
    <td>three-quarters cover, 196</td>
  </tr>
  <tr>
    <td>thrown (weapon property), 147</td>
  </tr>
  <tr>
    <td>Thunderbolt Strike (cleric), 62</td>
  </tr>
  <tr>
    <td>thunder damage (damage type), 196</td>
  </tr>
  <tr>
    <td>Tides of Chaos (sorcerer), 103</td>
  </tr>
  <tr>
    <td>tiefling, 42-43</td>
  </tr>
  <tr>
    <td>tiefling names, 43</td>
  </tr>
  <tr>
    <td>tiefling traits, 43</td>
  </tr>
  <tr>
    <td>tiers of play, 15</td>
  </tr>
  <tr>
    <td>tiger (creature), 311</td>
  </tr>
  <tr>
    <td>time, 181</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;day, 181</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;minute, 181</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;round, 181, 189</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;turn, 189</td>
  </tr>
  <tr>
    <td>Timeless Body</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;druid, 67</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;monk, 79</td>
  </tr>
  <tr>
    <td>Tinker (rock gnome), 37</td>
  </tr>
  <tr>
    <td>Tiny (size category), 191</td>
  </tr>
  <tr>
    <td>Tongue of the Sun and Moon (monk), 79</td>
  </tr>
  <tr>
    <td>tools, 154</td>
  </tr>
  <tr>
    <td>total, 7</td>
  </tr>
  <tr>
    <td>total cover, 196</td>
  </tr>
  <tr>
    <td>Totemic Attunement (barbarian), 50</td>
  </tr>
  <tr>
    <td>Totem Spirit (barbarian), 50</td>
  </tr>
  <tr>
    <td>tracking</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;as a wolf (barbarian primal path), 50</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;favored enemy (ranger), 91</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Natural Explorer (ranger), 92</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;survival (Wisdom skill), 178</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;while travelling, 183</td>
  </tr>
  <tr>
    <td>trade goods, 144, 157</td>
  </tr>
  <tr>
    <td>training (downtime activity), 187</td>
  </tr>
  <tr>
    <td>traits (personality), 123</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;See also specific race trait entries, 17</td>
  </tr>
  <tr>
    <td>Trance (elf), 23</td>
  </tr>
  <tr>
    <td>Transitive Planes (plane of existence), 301</td>
  </tr>
  <tr>
    <td>Tranquility (monk), 80</td>
  </tr>
  <tr>
    <td>transmutation, 119, 203</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;school (wizard arcane tradition), 119</td>
  </tr>
  <tr>
    <td>Transmutation Savant (wizard), 119</td>
  </tr>
  <tr>
    <td>transmuter, 119</td>
  </tr>
  <tr>
    <td>Transmuter's Stone (wizard), 119</td>
  </tr>
  <tr>
    <td>traps, finding</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Intelligence: Investigation, 178</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Wisdom: Perception, 178</td>
  </tr>
  <tr>
    <td>traps, removing or disabling (thieves' tools), 154</td>
  </tr>
  <tr>
    <td>travel, 181-183</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;drawing a map, 183</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;encounters, 183</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;foraging, 183</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;marching order, 182</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;navigating, 183</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;noticing threats, 182-183</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pace, 181</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;stealth, 182</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;surprise, 183</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tracking, 183</td>
  </tr>
  <tr>
    <td>Trickery domain (cleric divine domain), 62-63</td>
  </tr>
  <tr>
    <td>trinkets, 160-161</td>
  </tr>
  <tr>
    <td>Trip Attack maneuver (fighter maneuver), 74</td>
  </tr>
  <tr>
    <td>truesight, 185</td>
  </tr>
  <tr>
    <td>Turami (human ethnicity), 31</td>
  </tr>
  <tr>
    <td>turn (time), 189</td>
  </tr>
  <tr>
    <td>turn, taking yours, 189-190</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;action, 189, 192-193)</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;bonus action, 189</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;movement, 181-183, 190-192</td>
  </tr>
  <tr>
    <td>Turn the Faithless (Channel Divinity paladin option), 87</td>
  </tr>
  <tr>
    <td>Turn the Unholy (Channel Divinity paladin option), 86</td>
  </tr>
  <tr>
    <td>Turn Undead (Channel Divinity cleric option), 59</td>
  </tr>
  <tr>
    <td>Twinned Spell (sorcerer Metamagic), 102</td>
  </tr>
  <tr>
    <td>two-handed (weapon property), 147</td>
  </tr>
  <tr>
    <td>two-weapon fighting, 195</td>
  </tr>
  <tr>
    <td>Two-Weapon Fighting (class feature: fighting style)</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fighter, 72</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ranger, 91</td>
  </tr>
  <tr id="phb-index-u">
	 <th>U</th>
  </tr>
  <tr>
    <td>unarmed (melee attack), 195</td>
  </tr>
  <tr>
    <td>Unarmored Defense</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;barbarian, 48</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;monk, 78</td>
  </tr>
  <tr>
    <td>Unarmored Movement (monk), 78</td>
  </tr>
  <tr>
    <td>Uncanny Dodge</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ranger Superior Hunter's Defense, 93</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rogue class feature, 96</td>
  </tr>
  <tr>
    <td>Undead Thralls (wizard), 119</td>
  </tr>
  <tr>
    <td>Underdark, 17</td>
  </tr>
  <tr>
    <td>Undying Sentinel (paladin), 87</td>
  </tr>
  <tr>
    <td>uncommon races, 33</td>
  </tr>
  <tr>
    <td>unconscious, 197, 198</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;condition, 292</td>
  </tr>
  <tr>
    <td>Undercommon (language), 123</td>
  </tr>
  <tr>
    <td>underwater combat, 198</td>
  </tr>
  <tr>
    <td>unseen attackers and targets, 194-195</td>
  </tr>
  <tr>
    <td>Upper Planes (plane of existence), 302</td>
  </tr>
  <tr>
    <td>urchin (background), 141</td>
  </tr>
  <tr>
    <td>Use an Object action, 193</td>
  </tr>
  <tr>
    <td>Use Magic Device (rogue), 97</td>
  </tr>
  <tr>
    <td>using this book, 6</td>
  </tr>
  <tr id="phb-index-v">
	 <th>V</th>
  </tr>
  <tr>
    <td>Vanish (ranger), 92</td>
  </tr>
  <tr>
    <td>vehicle (mounts and vehicles), 155, 157</td>
  </tr>
  <tr>
    <td>verbal spell component, 203</td>
  </tr>
  <tr>
    <td>versatile (weapon property), 147</td>
  </tr>
  <tr>
    <td>Versatile Trickster (rogue), 98</td>
  </tr>
  <tr>
    <td>vision, 183</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;blindsight, 183</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;darkvision, 183, 185</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;truesight, 185</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Wisdom: Perception, 178</td>
  </tr>
  <tr>
    <td>Visions of Distant Realms (warlock eldritch invocation), 111</td>
  </tr>
  <tr>
    <td>Visions of the Past (cleric), 60</td>
  </tr>
  <tr>
    <td>Voice of the Chain Master (warlock eldritch invocation), 111</td>
  </tr>
  <tr>
    <td>Volley (ranger Multiattack), 93</td>
  </tr>
  <tr>
    <td>Vow of Enmity (Channel Divinity paladin option), 88</td>
  </tr>
  <tr>
    <td>vulnerability (damage vulnerability), 197</td>
  </tr>
  <tr id="phb-index-w">
	 <th>W</th>
  </tr>
  <tr>
    <td>Wanderer (outlander), 136</td>
  </tr>
  <tr>
    <td>Warding Flare (cleric), 61</td>
  </tr>
  <tr>
    <td>War domain (cleric divine domain), 63</td>
  </tr>
  <tr>
    <td>War God's Blessing (Channel Divinity cleric option), 63</td>
  </tr>
  <tr>
    <td>warhorse (creature), 311</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mounts and vehicles, 155, 157</td>
  </tr>
  <tr>
    <td>War Magic (fighter), 75</td>
  </tr>
  <tr>
    <td>War Priest (cleric), 63</td>
  </tr>
  <tr>
    <td>Water Whip (monk Elemental Discipline), 81</td>
  </tr>
  <tr>
    <td>warlock, 45, 105-111</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;quick build, 106</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;otherworldly patrons, 108-110</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;spell list, 210</td>
  </tr>
  <tr>
    <td>Wave of Rolling Earth (monk Elemental Discipline), 81</td>
  </tr>
  <tr>
    <td>wealth, 143-144</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;expenses, 157-158, 187</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;magic item, 144</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;selling treasure, 144</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;starting, 143</td>
  </tr>
  <tr>
    <td>weapon, 14, 146-148, 149</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;improvised, 147-148</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;silvered, 148</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;table, 149</td>
  </tr>
  <tr>
    <td>Weapon Bond (fighter), 75</td>
  </tr>
  <tr>
    <td>weapon categories, 146</td>
  </tr>
  <tr>
    <td>weapon proficiency, 14, 146</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;See also specific classes: proficiencies, 45</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;See also specific race trait entries, 17</td>
  </tr>
  <tr>
    <td>weapon properties, 146-147</td>
  </tr>
  <tr>
    <td>Weave, the, 205</td>
  </tr>
  <tr>
    <td>Whirlwind Attack (ranger Multiattack), 93</td>
  </tr>
  <tr>
    <td>Whispers of the Grave (warlock eldritch invocation), 111</td>
  </tr>
  <tr>
    <td>Wholeness of Body (monk), 79-80</td>
  </tr>
  <tr>
    <td>wild elf (race; elf: wood elf), 24</td>
  </tr>
  <tr>
    <td>Wild Magic (sorcerer sorcerous origin), 103</td>
  </tr>
  <tr>
    <td>Wild Magic Surge (sorcerer), 103</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;table, 104</td>
  </tr>
  <tr>
    <td>Wild Shape (druid), 66-67</td>
  </tr>
  <tr>
    <td>Wisdom, 12, 178</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Animal Handling, 178</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;checks, 178</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Insight, 178</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Medicine, 178</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Perception, 178</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Survival, 178</td>
  </tr>
  <tr>
    <td>Witch Sight (warlock eldritch invocation), 111</td>
  </tr>
  <tr>
    <td>wizard, 45, 112-119</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;arcane traditions, 115-119</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;quick build, 113</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;spell list, 210-211</td>
  </tr>
  <tr>
    <td>wolf, dire (creature), 305</td>
  </tr>
  <tr>
    <td>wolf (creature), 311</td>
  </tr>
  <tr>
    <td>wood elf (race; elf), 24</td>
  </tr>
  <tr>
    <td>world, 5-6, 8</td>
  </tr>
  <tr>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;planes of existence: Material Plane, 302</td>
  </tr>
  <tr>
    <td>Wrath of the Storm (cleric), 62</td>
  </tr>
  <tr id="phb-index-x">
	 <th>X</th>
  </tr>
  <tr>
    <td>XP (experience points), 15</td>
  </tr>
  <tr id="phb-index-y">
	 <th>Y</th>
  </tr>
  <tr>
    <td>Ysgard (plane of existence), 302</td>
  </tr>
  <tr id="phb-index-z">
	 <th>Z</th>
  </tr>
  <tr>
    <td>zombie (creature), 311</td>
  </tr>
</table>
		<br>
		<h1 id="Adventure-Modules">Adventure Modules</h1>
		<dl>
			<dt><h3 class="nobackground">Starter Set: Lost Mines of Phandelver</h3></dt>
				<dd><i>Lost Mine of Phandelver is an adventure for four to five characters of 1st level. During the course of the adventure, the characters will advance to 5th level. The adventure is set a short distance from the city of Neverwinter in the Sword Coast region of the Forgotten Realms setting. The Sword Coast is part of the North-a vast realm of free settlements surrounded by wilderness and adventure.</i></dd>
		</dl>

		<h3 id="Goblin-Arrows">Part 1: Goblin Arrows</h3>
		<i>Here are the combat encounters and main traps for Part 1.  Please note that the PCs can get to Phandelver before going to the Cragmaw Hideout. The adventure begins as the player characters are escorting a wagon full of provisions and supplies from Neverwinter to Phandalin.</i><br />
		<dl>
			<dt><h3 id="Goblin-Ambush" class="nobackground">Goblin Ambush</h3></dt>
				<dd><b>Encounter:</b> Four goblins (hiding)</dd>
				<dd>&nbsp;&nbsp;&nbsp;&nbsp;• 2 Goblins Melee</dd>
				<dd>&nbsp;&nbsp;&nbsp;&nbsp;• 2 Goblins Ranged (30 ft.)</dd>
				<dd><b>Goblin stealth modifier:</b> +6</dd>
				<dd><b>Notes:</b>  When 3 goblins are defeated, 1 attempts to flee down the goblin trail.</dd>
			<dt><h3 id="Goblin-Trail" class="nobackground">Goblin Trail</h3></dt>
				<dd><b>Trap:</b> Snare</dd>
				<dd><b>Perception Score Needed:</b> 12 or higher</dd>
				<dd><b>Dex Saving Throw:</b> 10 or higher</dd>
				<dd><b>On failed save:</b></dd>
				<dd>• Character is hung upside down.</dd>
				<dd>• 1d6 Bludgeoning damage if not lowered carefully.</dd>
				<dd><br /></dd>
				<dd><b>Trap:</b> Pit</dd>
				<dd><b>Perception Score Needed:</b> 15 or higher</dd>
				<dd><b>Dex Saving Throw:</b> 10 or higher</dd>
				<dd><b>On failed save:</b></dd>
				<dd>• Fall in taking 1d6 bludgeoning damage.</dd>
				<dd>• No ability check is required to get out.</dd>
		</dl>
			<h3 id="Cragmaw-Hideout">Cragmaw Hideout</h3>
			<i>The Cragmaw tribe of goblins has established a hideout from which it can easily harass and plunder traffic moving along the Triboar Trail or the path to Phandalin. The Cragmaw tribe is so named because each member of the tribe sharpens its teeth so they appear fierce and jagged.</i>

		<dl>
			<dt><h3 class="nobackground">Goblin Blind</h3></dt>
				<dd><b>Combat:</b> Two goblins</dd>
				<dd><b>Notes:</b></dd>
				<dd>• Characters moving slowly and carefully may surprise the goblins.</dd>
				<dd>• Thickets around the clearing provide half cover to creatures attacking through them</dd>
			<dt><h3 class="nobackground">Kennel</h3></dt>
				<dd><b>Combat:</b> Three Wolves</dd>
				<dd><b>Notes:</b></dd>
				<dd>• They can't reach targets on the steps.</dd>
				<dd>• All 3 attack any creature, except a goblin</dd>
				<dd>• Goblins inside the cave ignore the noises</dd>
				<dd>• Calm the wolves with a DC 15 Animal Handling check.  <i>(This goes to 10 if they are given food.)</i></dd>
			<dt><h3 class="nobackground">Overpass</h3></dt>
				<dd><b>Combat:</b> Goblin Guard</dd>
				<dd><b>Notes:</b></dd>
				<dd>• A PC needs a perception check vs guard stealth check to see the guard.</dd>
				<dd>• The goblin notices the PCs if they carry any light, or do no use stealth on approach</dd>
				<dd>• Goblin signals companions to release flood, then throws javelins.</dd>
			<dt><h3 class="nobackground">Goblin Den</h3></dt>
				<dd><b>Encounter:</b> Six goblins (one leader with 12 HP)</dd>
				<dd><b>Ordinary Goblins:</b> Tending fire in lower (northern) section</dd>
				<dd><b>Leader Goblin (Yeemik):</b> Resting in upper (southern) part.</dd>
				<dd><b>Notes:</b></dd>
				<dd>• When Yeemik sees the goblins are losing, he drags a human (Sildar) to the cliff and wants a truce.</dd>
				<dd>• If they parley, Yeemik (supposedly) will release Sildar when they bring Klarg's head</dd>
				<dd>• If they refuse parley, fight continues and Sildar is pushed off the cliff and is unconscious</dd>
			<dt><h3 class="nobackground">Twin Pools Cave</h3></dt>
				<dd><b>Encounter:</b> Three Goblins</dd>
				<dd><b>Notes:</b></dd>
				<dd>• If the goblins were warned earlier by overpass goblin, these are ready for trouble.</dd>
				<dd>• As soon as the fight starts, one goblin flees to warn Klarg</dd>
			<dt><h3 class="nobackground">Klarg's Cave</h3></dt>
				<dd><b>Combat:</b> 5 Total Creatures</dd>
				<dd>&nbsp;&nbsp;&nbsp;&nbsp;• Klarg (bugbear)</dd>
				<dd>&nbsp;&nbsp;&nbsp;&nbsp;• 1 wolf (Ripper)</dd>
				<dd>&nbsp;&nbsp;&nbsp;&nbsp;• 2 goblins</dd>
				<dd><b>Fire Pit:</b>  Deals 1 damage to any that enter, or 1d6 to any who fall prone.</dd>
				<dd><b>Notes:</b></dd>
				<dd>• If he is warned, everyone hides to try and surprise the PCs.</dd>
				<dd>• If he isn't warned, they can be surprised (best through chimney).</dd>
				<dd>• If the wolf is killed, he attempts to flee through the chimney.</dd>
		</dl>

		<br>
		<h3 id="Phandalin">Part 2: Phandalin</h3>
		<i>Here are the combat encounters and main traps for Part 2.  Please note that there are many quests here and the Redbrand Hideout can be dealt with at a later time.</i>
		<dl>
			<dt><h3 id="Ruffians" class="nobackground">Redbrand Ruffians</h3></dt>
				<dd><b>Encounter:</b> 4 Redbrand Ruffians</dd>
				<dd><b>Notes:</b></dd>
				<dd>• The ruffians attack in a round or two if PCs don't.</dd>
				<dd>• When three of them are down, the 4th flees toward Tresendar Manor.
		</dl>
		<h3 id="Redbrand Hideout">Redbrand Hideout</h3>
		<i>If the PCs begin their search at the Manor, they start in area 1.  If they follow Carp Alderleaf to the secret tunnel, they enter the dungeon at area 8.</i>
		<dl>
			<dt><h3 class="nobackground">Barracks</h3></dt>
				<dd><b>Encounter:</b> 3 Redbrand Ruffians</dd>
				<dd><b>Notes:</b></dd>
				<dd>• If the ruffians hear noise from PCs in area one, they try for surprise attack</dd>
			<dt><h3 class="nobackground">Trapped Hall</h3></dt>
				<dd><b>Trap:</b> Pit</dd>
				<dd><b>Perception Score Needed:</b> 15 or higher</dd>
				<dd><b>Dex Saving Throw:</b> 15 or higher</dd>
				<dd><b>On failed save:</b></dd>
				<dd>• Fall in taking 2d6 bludgeoning damage and lands prone.</dd>
				<dd>• If trap is found, PC needs DC 10 dex check to go around edges.</dd>
			<dt><h3 class="nobackground">Tresendar Crypts</h3></dt>
				<dd><b>Encounter:</b> 3 Skeletons</dd>
				<dd><b>Notes:</b></dd>
				<dd>• These attack when anyone comes within 10 feet of the door leading to area 5 or 6 unless that creature is wearing the scarlet cloak of the Redbrands or speaks the password "Illefarn".</dd>
			<dt><h3 class="nobackground">Slave Pens</h3></dt>
				<dd><b>Encounter:</b> 2 Redbrand Ruffians</dd>
				<dd><b>Notes:</b></dd>
				<dd>• If the ruffians hear fighting from area 5, they will try to surprise intruders.</dd>
			<dt><h3 class="nobackground">Crevasse</h3></dt>
				<dd><b>Encounter:</b> Nothic</dd>
				<dd><b>Notes:</b></dd>
				<dd>• Lurks near west end of the bridges.</dd>
				<dd>• If it sees people come in, it hides behind a stone pillar and watches them while trying to use its Weird Insight to discern characters' secrets.</dd>
				<dd>• Communicates with telepathy if detected, and would rather negotiate and will betray Redbrands for the right incentives.</dd>
			<dt><h3 class="nobackground">Guard Barracks</h3></dt>
				<dd><b>Encounter:</b></dd>
				<dd>&nbsp;&nbsp;&nbsp;&nbsp;• 3 bugbears</dd>
				<dd>&nbsp;&nbsp;&nbsp;&nbsp;• 1 goblin (Droop)</dd>
				<dd><b>Notes:</b></dd>
				<dd>• The goblin (Droop) falls unconscious for 1d10 minutes when seeing the party.</dd>
				<dd>• If the party is wearing scarlet cloaks the bugbears assume they server Iarno.</dd>
				<dd>• DC 15 can convince the bugbears to do what the party wants.</dd>
			<dt><h3 class="nobackground">Common Room</h3></dt>
				<dd><b>Encounter:</b> 4 Redbrand Ruffians</dd>
				<dd><b>Notes:</b></dd>
				<dd>• If the characters bust in through the room, they surprise the ruffians.</dd>
				<dd>• The ruffians are poisoned from too much drinking.</dd>
				<dd>• The ruffians recognize the party as imposters if they have the cloaks on.</dd>
			<dt><h3 class="nobackground">Glasstaff's Quarters</h3></dt>
				<dd><b>Encounter:</b> Evil Mage (Iarno)</dd>
				<dd><b>Notes:</b></dd>
				<dd>• Iarno can be surprised if they come in from the secret passage in area 7, otherwise the rat familiar warns him of any who approach.</dd>
				<dd>• If he isn't surprised, Iarno flees through the secret door in the northeast corner.</dd>
				<dd>• If he manages to escape, he flees through area 1 from areas 7 and 8.</dd>
				<dd>• Iarno instructs the nothic to waylay anyone that comes through if he makes it down there.</dd>
		</dl>

		<br>
		<h3 id="The-Spiders-Web">Part 3: The Spider's Web</h3>
		<i>Here are the combat encounters and main traps for Part 3.  In this part of the adventure, the characters follow up on existing leads and lines of inquiry. They can't learn much more in Phandalin, so they need to set out into the forests and hills surrounding the town to uncover the larger plots they are caught up in.</i><br /><br />

		<h3 id="Triboar-Trail">Triboar Trail</h3>
		<i>During this part of the adventure, the characters will frequently be marching overland from one point of interest to another. As can be seen on the regional map, some of these areas are a good forty to fifty miles apart, requiring several days of marching overland to travel to the next adventure site.</i>
		<br /><br />

		<table>
			<tr><th colspan="3"><h3 class="nobackground">Wilderness Encounters</h3></th></tr>
			<tr><th>Day Roll</th><th>Night Roll</th><th>Result</th></tr>
			<tr><td>1-2</td><td>1-3</td><td>Stirges (1d8+2)</td></tr>
			<tr><td>-</td><td>4</td><td>Ghouls (1d4+1)</td></tr>
			<tr><td>3-4</td><td>-</td><td>Ogre (1)</td></tr>
			<tr><td>5-6</td><td>5</td><td>Goblins (1d6+3)</td></tr>
			<tr><td>7-8</td><td>6</td><td>Hobgoblins (1d4+2)</td></tr>
			<tr><td>9-10</td><td>7-8</td><td>Orcs (1d4+2)</td></tr>
			<tr><td>11</td><td>9-10</td><td>Wolves (1d4+2)</td></tr>
			<tr><td>12</td><td>11-12</td><td>Owlbear (1)</td></tr>
		</table><br /><br />

		<h3 id="Old-Owl-Well">Old Owl Well</h3>
		<i>Built thousands of years ago by a long-vanished empire, Old Owl Well is a ruined watchtower that now consists of little more than a few crumbling walls and the broken stump of a tower.</i>
		<dl>
			<dt><h3 class="nobackground">Entering Old Owl Well</h3></dt>
				<dd><b>Encounter:</b></dd>
				<dd>&nbsp;&nbsp;&nbsp;&nbsp;• 12 zombies</dd>
				<dd>&nbsp;&nbsp;&nbsp;&nbsp;• 1 evil mage (Hamun Kost)</dd>
				<dd><b>Notes:</b></dd>
				<dd>• The zombies can't be seen, but can be smelled with passive perception of 10 or higher.</dd>
				<dd>• If battle erupts, the evil mage erupts from his tent.</dd>
				<dd>• DC 10 arcana check reveals tattoo as necromantic symbol.</dd>
				<dd>• DC 10 history check reveals he is from Thay, a land where wizards tattoo their flesh with tattoos to represent school of magic.</dd>
				<dd>• If anyone talks to Kost, he stops zombies from combat temporarily.</dd>
				<dd>• Kost is willing to strike a deal that advances his interests at helps the characters</dd>
		</dl>
			<h3 id="Ruins-Of-Thundertree">Ruins of Thundertree</h3>
			<i>Near the place where the Neverwinter River emerges from Neverwinter Wood stands the abandoned village of Thundertree. Once, this was a prosperous community on the outskirts of the forest, wealthy from the work of its woodcutters and trappers.</i>
		<dl>
			<dt><h3 class="nobackground">Westernmost Cottage</h3></dt>
				<dd><b>Encounter:</b> 2 Twig Blights</dd>
				<dd><b>Notes:</b></dd>
				<dd>• Compare the stealth check of the blights to the perception scores of the characters to determine if the blights are spotted.</dd>
				<dd>• Blights here do not attack on their own (only self-defense).</dd>
			<dt><h3 class="nobackground">Blighted Cottages</h3></dt>
				<dd><b>Encounter:</b> 6 Twig Blights (+2 more)</dd>
				<dd><b>Notes:</b></dd>
				<dd>• Compare the stealth check of the blights to the perception scores of the characters to determine if the blights are spotted.</dd>
				<dd>• One round after the attack starts, the two twig blights from room 1 join the fray.</dd>
			<dt><h3 class="nobackground">The Brown Horse</h3></dt>
				<dd><b>Encounter:</b> 4 Ash Zombies</dd>
				<dd><b>Notes:</b></dd>
				<dd>• When living creatures enter, they stand from prone spending half their speed.</dd>
			<dt><h3 class="nobackground">Blighted Farmhouse</h3></dt>
				<dd><b>Encounter:</b> 8 Twig Blights</dd>
				<dd><b>Notes:</b></dd>
				<dd>• Each round for 3 rounds, two twig blights head for the south doorway, while two more head for the north doorway.</dd>
			<dt><h3 class="nobackground">Ruined Store</h3></dt>
				<dd><b>Encounter:</b> 2 Giant Spiders</dd>
				<dd><b>Notes:</b></dd>
				<dd>• They surprise any character whose passive perception is less than 17.</dd>
				<dd><br /></dd>
				<dd><b>Trap:</b> Webs</dd>
				<dd><b>Athletics Check Needed:</b> 10 or higher</dd>
				<dd><b>On failed save:</b></dd>
				<dd>• Creature is restrained in webs.</dd>
				<dd>• DC 12 Strength check to break free rolled each round.</dd>
				<dd>• Creature can cut its way free using a light weapon that deals slashing damage.  The webs have <b>AC 10 and 5HP</b>.</dd>
			<dt><h3 class="nobackground">Dragon's Tower</h3></dt>
				<dd><b>Encounter:</b> Young Green Dragon (Venomfang)</dd>
				<dd><b>Notes:</b></dd>
				<dd>• If the characters reduce the dragon to half HP, it climbs to the top of the tower and flies away.</dd>
			<dt><h3 class="nobackground">Old Smithy</h3></dt>
				<dd><b>Encounter:</b> 2 Ash Zombies</dd>
				<dd><b>Notes:</b></dd>
				<dd>• When living creatures enter, they stand from prone spending half their speed.</dd>
			<dt><h3 class="nobackground">Old Garrison</h3></dt>
				<dd><b>Encounter:</b> 5 Ash Zombies</dd>
				<dd><b>Notes:</b></dd>
				<dd>• They animate and attack if any living creature disturbs their rest.</dd>
			<dt><h3 class="nobackground">Weaver's Cottage</h3></dt>
				<dd><b>Encounter:</b> 6 Twig Blights</dd>
				<dd><b>Notes:</b></dd>
				<dd>• Compare the stealth check of the blights to the perception scores of the characters to determine if the blights are spotted.</dd>
			<dt><h3 class="nobackground">Dragon Cultists</h3></dt>
				<dd><b>Encounter:</b> 6 Human Cultists</dd>
				<dd><b>Notes:</b></dd>
				<dd>• 4 cultists stand guard (2 in each room), the others rest in the larger chamber.</dd>
				<dd>• An alliance can be struck with the cultists through their leader, Favric.</dd>
		</dl>
		<h3 id="Wyvern-Tor">Wyvern Tor</h3>

		<i>This crag is a prominent landmark in the rugged hills northeast of the Sword Mountains, and is easily visible from twenty miles away. People traveling along the Triboar Trail in the vicinity of Conyberry catch glimpses of Wyvern Tor to the south as they go.</i>

		<dl>
			<dt><h3 class="nobackground">Orc Camp</h3></dt>
				<dd><b>Encounter:</b></dd>
				<dd>&nbsp;&nbsp;&nbsp;&nbsp;• Lone Orc</dd>
				<dd>&nbsp;&nbsp;&nbsp;&nbsp;• Six Ordinary Orcs</dd>
				<dd>&nbsp;&nbsp;&nbsp;&nbsp;• 30 HP Orc (Brughor Axe-Biter)</dd>
				<dd>&nbsp;&nbsp;&nbsp;&nbsp;• Ogre (Gog)</dd>
				<dd><b>Notes:</b></dd>
				<dd>• If the lone orc is quietly taken out, the party has a chance to surprise the others.</dd>
				<dd>• Gog fights until slain, the other orcs fight until Brughor is slain in which they will flee.</dd>
		</dl>

		<h3 id="Cragmaw-Castle">Cragmaw Castle</h3>
		<i>Raised by a talented wizard-noble of old Phalorm, an ancient realm that once controlled much of the North, the stronghold consists of seven overlapping towers; however, its upper levels have long since collapsed to heaps of crumbling masonry. Only the ground floor is still sound enough to be habitable.</i>

		<dl>
			<dt><h3 class="nobackground">Trapped Hall</h3></dt>
				<dd><b>Encounter:</b></dd>
				<dd>&nbsp;&nbsp;&nbsp;&nbsp;• 3 Goblins (from area 4)</dd>
				<dd>&nbsp;&nbsp;&nbsp;&nbsp;• 4 Hobgoblins (from area 6)</dd>
				<dd><b>Notes:</b></dd>
				<dd>• If the goblin sentries raised the alarm, the monsters above come out of the north and south doors at the same time.  They attack from both directions trying to drive the adventurers out of the castle.</dd>
				<dd><br /></dd>
				<dd><b>Trap:</b> Tripwire</dd>
				<dd><b>Perception Score Needed:</b> 20 passive or 10 active</dd>
				<dd><b>Dexterity Save:</b> 10 (for half damage)</dd>
				<dd><b>On failed save:</b></dd>
				<dd>• Any creature in the area takes 3d6 bludgeoning damage.</dd>
				<dd>• The noise alerts the monsters in areas 3,7,8, and 9.</dd>
			<dt><h3 class="nobackground">Archer Post</h3></dt>
				<dd><b>Encounter:</b></dd>
				<dd>&nbsp;&nbsp;&nbsp;&nbsp;• 2 Goblins (first room)</dd>
				<dd>&nbsp;&nbsp;&nbsp;&nbsp;• 2 Goblins (second room)</dd>
				<dd><b>Notes:</b></dd>
				<dd>• By taking turns shooting arrows and ducking back, both archers can fire each round at targets outside.</dd>
				<dd>• When characters enter the room, the goblins drop their shortbows and draw their melee weapons.</dd>
			<dt><h3 class="nobackground">Ruined Barracks</h3></dt>
				<dd><b>Encounter:</b></dd>
				<dd>&nbsp;&nbsp;&nbsp;&nbsp;• 3 Goblins</dd>
				<dd><b>Notes:</b></dd>
				<dd>• Any loud noises here attract the attention of the goblins in area 7.  One goblin comes to investigate the disturbance.  If it doesn't return, or if it spots trouble, the others come to investigate.</dd>
			<dt><h3 class="nobackground">Hobgoblin Barracks</h3></dt>
				<dd><b>Encounter:</b> 4 Hobgoblins</dd>
				<dd><b>Notes:</b></dd>
				<dd>• They don't pay attention to noise in other areas, but will respond to intruders or alarms raised by sentries.</dd>
			<dt><h3 class="nobackground">Banquet Hall</h3></dt>
				<dd><b>Encounter:</b></dd>
				<dd>&nbsp;&nbsp;&nbsp;&nbsp;• 7 Goblins</dd>
				<dd>&nbsp;&nbsp;&nbsp;&nbsp;• 12 HP Goblin (Yegg)</dd>
				<dd><b>Notes:</b></dd>
				<dd>• When Yegg is killed the other goblins flee through the east or west doors.</dd>
			<dt><h3 class="nobackground">Dark Hall</h3></dt>
				<dd><b>Encounter:</b> Grick</dd>
				<dd><b>Notes:</b></dd>
				<dd>• Compare grick's stealth check to characters' perception check or passive scores to determine which of them is surprised.</dd>
				<dd>• If combat erupts here, goblins in area 9 cannot be surprised.</dd>
			<dt><h3 class="nobackground">Goblin Shrine</h3></dt>
				<dd><b>Encounter:</b></dd>
				<dd>&nbsp;&nbsp;&nbsp;&nbsp;• 12 HP Goblin (Lhupo)</dd>
				<dd>&nbsp;&nbsp;&nbsp;&nbsp;• 2 Goblins</dd>
				<dd><b>Notes:</b></dd>
				<dd>• If the goblins heard the characters fighting in area 8, they hide behind the altar to surprise the adventurers.</dd>
			<dt><h3 class="nobackground">Guard Barracks</h3></dt>
				<dd><b>Encounter:</b> 2 Hobgoblins</dd>
				<dd><b>Notes:</b></dd>
				<dd>• At the start of combat, one hobgoblin runs to area 14 to warn King Grol.  It returns to combat 2 rounds later.</dd>
			<dt><h3 class="nobackground">Owlbear Tower</h3></dt>
				<dd><b>Encounter:</b> 1 Owlbear</dd>
				<dd><b>Notes:</b></dd>
				<dd>• If a character throws food the owlbear will devour it, otherwise it attacks the first creature in the door.</dd>
			<dt><h3 class="nobackground">King's Quarters</h3></dt>
				<dd><b>Encounter:</b></dd>
				<dd>&nbsp;&nbsp;&nbsp;&nbsp;• 45 HP Bugbear (King Grol)</dd>
				<dd>&nbsp;&nbsp;&nbsp;&nbsp;• 1 Wolf</dd>
				<dd>&nbsp;&nbsp;&nbsp;&nbsp;• Doppelganger as female drow (Vyerith)</dd>
				<dd><b>Notes:</b></dd>
				<dd>• If the villains were warned, Vyerith hides behind the door to the northeast and King Grol holds Gundren hostage.</dd>
		</dl>


		<br>

		<h3 id="Wave-Echo-Cave">Part 4: Wave Echo Cave</h3>
		<i>Here are the combat encounters and main traps for Part 4. The adventurers now have the chance to aid Gundren, avenge his kin, and put a stop to the nefarious schemes of the Black Spider. And of course, the hoard of powerful magic rumored to be hidden in the mines is a rich prize.</i><br /><br />

		<table id="IV-Wandering-Monsters">
			<tr><th colspan="2"><h3 class="nobackground">Wandering Monsters</h3></th></tr>
			<tr><th>D12 Roll</th><th>Result</th></tr>
			<tr><td>1-3</td><td>Stirges (2d4)</td></tr>
			<tr><td>4-5</td><td>Ghouls (1d4)</td></tr>
			<tr><td>6</td><td>Gricks (1d4)</td></tr>
			<tr><td>7-8</td><td>Bugbears (1d4)</td></tr>
			<tr><td>9</td><td>Skeletons (1d6)</td></tr>
			<tr><td>10</td><td>Zombies (1d6)</td></tr>
			<tr><td>11-12</td><td>Ochre Jelly (1)</td></tr>
			<tr><th colspan="2">Encounter on 17-20</th></tr>
		</table><br />

		<dl>
			<dt><h3 class="nobackground" id="Wave-Echo-Cave-Entry">Cave Entrance</h3></dt>
				<dd><b>Open Pit:</b></dd>
				<dd><b>DC Required</b> 15 strength (athletics)</dd>
				<dd><b>Notes:</b></dd>
				<dd>• Climbing up or down the wall without a rope requires a successful Strength (Athletics) check.</dd>
				<dd>• Anyone failing the check takes 1d6 bludgeoning damage per 10 feet.</dd>
			<dt><h3 class="nobackground">Mine Tunnels</h3></dt>
				<dd><b>Encounter:</b> Ochre Jelly</dd>
				<dd><b>Notes:</b></dd>
				<dd>• When the party enters this area, the jelly stalks the group waiting for an opportunity to attack a lone target.</dd>
			<dt><h3 class="nobackground">Old Entrance</h3></dt>
				<dd><b>Encounter:</b> 10 Stirges</dd>
				<dd><b>Notes:</b></dd>
				<dd>• Any character not looking at the ceiling is surprised unless his or her passive Wisdom (Perception) score is higher than the stirges' Dexterity (stealth) check total (roll a dice once for all of them).</dd>
				<dd>• Characters who aren't surprised hear a flapping noise as the stirges descend to attack.</dd>
			<dt><h3 class="nobackground">Old Guardroom</h3></dt>
				<dd><b>Encounter:</b> 9 Skeletons</dd>
				<dd><b>Notes:</b></dd>
				<dd>• The round after characters enter, they begin to form.</dd>
			<dt><h3 class="nobackground">South Barracks</h3></dt>
				<dd><b>Encounter:</b> 3 Ghouls</dd>
				<dd><b>Notes:</b></dd>
				<dd>• These ghouls attack immediately.</dd>
			<dt><h3 class="nobackground">Fungi Cavern</h3></dt>
				<dd><b>Poison Gas:</b></dd>
				<dd><b>DC Required</b> 11 Constitution</dd>
				<dd><b>On Failed Save:</b></dd>
				<dd>• Anyone failing the save takes 3d6 poison damage and is poisoned for 10 minutes.</dd>
				<dd><b>Notes:</b></dd>
				<dd>• The gas disperses after 1 minute, but any creature that ends its turn in the cavern must repeat the saving throw.</dd>
			<dt><h3 class="nobackground">Great Cavern</h3></dt>
				<dd><b>Encounter:</b> 7 Ghouls</dd>
				<dd><b>Notes:</b></dd>
				<dd>• The escarpments are 10 feet high and require a DC12 Strength (Athletics) check to climb.  A creature that falls or is knocked down takes 1d6 bludgeoning damage and is knocked prone.</dd>
			<dt><h3 class="nobackground">North Barracks</h3></dt>
				<dd><b>Encounter:</b> 5 Bugbears</dd>
				<dd><b>Notes:</b></dd>
				<dd>• Nothing of importance.</dd>
			<dt><h3 class="nobackground">Smelter Cavern</h3></dt>
				<dd><b>Encounters:</b></dd>
				<dd>&nbsp;&nbsp;&nbsp;&nbsp;• 8 Zombies</dd>
				<dd>&nbsp;&nbsp;&nbsp;&nbsp;• 1 Flameskull</dd>
				<dd><b>Notes:</b></dd>
				<dd>• The zombies rise and pursue any living creatures entering the room, but do not pursue outside the room for more than 1 round.</dd>
			<dt><h3 class="nobackground">Wizard's Cavern</h3></dt>
				<dd><b>Encounters: Mormesk the Wraith</b></dd>
				<dd><b>Notes:</b></dd>
				<dd>• He rises out of the floor when a living creature enters the room.</dd>
				<dd>• He can be reasoned with if they haven't harmed him, and haven't taken anything</dd>
				<dd>• He will not part with the wooden pipe no matter what.</dd>
				<dd>• It's best to offer him magic items (scrolls, spellbooks, arcane knowledge), along with a DC 10 Charisma (Persuasion) check.</dd>
			<dt><h3 class="nobackground">Forge of Spells</h3></dt>
				<dd><b>Encounters:</b> Spectator</dd>
				<dd><b>Notes:</b></dd>
				<dd>• If the party tries to remove anything from the room, he attacks.</dd>
				<dd>• A successful DC (Deception) check, can convince the spectator into thinking one or more party members are wizards or miners who work for the owners of Wave Echo Cave, sent to terminate spectator's employment.  On success, the spectator believes you and vanishes back to its home plane.</dd>
				<dd>• If the spectator is blinded, he vanishes to his home plane.</dd>
			<dt><h3 class="nobackground">Collapsed Cavern</h3></dt>
				<dd><b>Encounters:</b></dd>
				<dd>&nbsp;&nbsp;&nbsp;&nbsp;• 3 Bugbears</dd>
				<dd>&nbsp;&nbsp;&nbsp;&nbsp;• Doppelganger (Vhalak)</dd>
				<dd><b>Notes:</b></dd>
				<dd>• If a fight breaks out in the main cavern, the two bugbears in the rift climb up the ropes to join the fray.</dd>
				<dd>• If two or more bugbears are killed, the doppelganger tries to retreat to area 19 to warn Nezznar.</dd>
			<dt><h3 class="nobackground">Temple of Dumathoin</h3></dt>
				<dd><b>Encounters:</b></dd>
				<dd>&nbsp;&nbsp;&nbsp;&nbsp;• Nezznar the Black Spider</dd>
				<dd>&nbsp;&nbsp;&nbsp;&nbsp;• 4 giant spiders</dd>
				<dd>&nbsp;&nbsp;&nbsp;&nbsp;• Doppelganger (possible)</dd>
				<dd>&nbsp;&nbsp;&nbsp;&nbsp;• Creatures from room 18 (possible)</dd>
				<dd><b>Notes:</b></dd>
				<dd>• If they are expecting the adventurers, the spiders hide behind the pillars and Nezznar casts invisibility on himself.  Make a stealth check for the spiders.  When intruders appear, the spiders try to entangle them in webs before closing to melee range.</dd>
				<dd>• If creatures from room 18 can hear sounds in this room, they arrive 3 rounds after and act immediately.</dd>
		</dl>


		<br>
		<h2 id="tyrannyofdragons">
			Tyranny of Dragons
		</h2>
		<dl>
		<dt><h3 class="nobackground">Hoard of the Dragon Queen</h3></dt>
		<dd><i>This is for adventurers of levels 1-8.</i></dd>
		</dl>
		<br /><br />

		<table id="greenestencounters">
			<tr>
				<th colspan="3">
					<h3 class="nobackground">
						Greenest Encounters
					</h3>
				</th>
			</tr>
			<tr>
				<th>
					d8
				</th>
				<th>
					Encounter
				</th>
			</tr>
			<tr>
				<td>
					1
				</td>
				<td>
					6 kobolds
				</td>
			</tr>
			<tr>
				<td>
					2
				</td>
				<td>
					1 kobolds, 1 ambush drake
				</td>
			</tr>
			<tr>
				<td>
					3
				</td>
				<td>
					6 cultists
				</td>
			</tr>
			<tr>
				<td>
					4
				</td>
				<td>
					4 cultists and 1 guard
				</td>
			</tr>
			<tr>
				<td>
					5
				</td>
				<td>
					2 cultists and 1 acolyte<sup>*</sup>
				</td>
			</tr>
			<tr>
				<td>
					6
				</td>
				<td>
					3 guards and 1 acolyte<sup>*</sup>
				</td>
			</tr>
			<tr>
				<td>
					7
				</td>
				<td>
					1d6 townsfolk being hunted by raiders (roll a d6 to determine raiding group)
				</td>
			</tr>
			<tr>
				<td>
					8
				</td>
				<td>
					1d6 townsfolk hiding
				</td>
			</tr>
		</table>
		<sup>*</sup> Acolytes have <i>command</i> prepared instead of <i>sanctuary</i>.
		<br/>
		<br/>
		<br/>
		<table id="wanderingmonsters">
			<tr>
				<th colspan="3">
					<h3 class="nobackground">
						Wandering Monsters
					</h3>
				</th>
			</tr>
			<tr>
				<th>
					d6
				</th>
				<th>
					Encounter
				</th>
			</tr>
			<tr>
				<td>
					1
				</td>
				<td>
					4 kobolds
				</td>
			</tr>
			<tr>
				<td>
					2
				</td>
				<td>
					6 kobolds, 2 winged kobold
				</td>
			</tr>
			<tr>
				<td>
					3
				</td>
				<td>
					3 winged kobolds
				</td>
			</tr>
			<tr>
				<td>
					4
				</td>
				<td>
					5 winged kobolds
				</td>
			</tr>
			<tr>
				<td>
					5
				</td>
				<td>
					2 winged kobolds, 1 guard drake
				</td>
			</tr>
			<tr>
				<td>
					6
				</td>
				<td>
					2 ambush drakes
				</td>
			</tr>
		</table>
		<br/>
		<br/>
		<table id="hiringout">
			<tr>
				<th colspan="3">
					<h3 class="nobackground">
						Hiring Out
					</h3>
				</th>
			</tr>
			<tr>
				<th>
					d20
				</th>
				<th>
					Result
				</th>
			</tr>
			<tr>
				<td>
					0-5
				</td>
				<td>
					No one is interested in hiring the character, but he or she can tag along as a traveler. Guards sometimes quit or die on the road and replacement has a chance to find employment.
				</td>
			</tr>
			<tr>
				<td>
					6-10
				</td>
				<td>
					Hired as a basic guard for 5 gp per tenday, plus food and living expenses on the road.
				</td>
			</tr>
			<tr>
				<td>
					11-15
				</td>
				<td>
					Hired as a sergeant for 8 gp per tenday, plus food and expenses on the road.
				</td>
			</tr>
			<tr>
				<td>
					16+
				</td>
				<td>
					Hired as a bodyguard for the merchant at 9 gp per tenday, plus food and expenses on the road.
				</td>
			</tr>
		</table>
		<br/>
		<br/>
		<table id="tradewayevents">
			<tr>
				<th colspan="3">
					<h3 class="nobackground">
						Trade Way Events
					</h3>
				</th>
			</tr>
			<tr>
				<th>
					d12
				</th>
				<th>
					Event
				</th>
			</tr>
			<tr>
				<td>
					1
				</td>
				<td>
					Adventuring Life
				</td>
			</tr>
			<tr>
				<td>
					2
				</td>
				<td>
					Animal Abuse
				</td>
			</tr>
			<tr>
				<td>
					3
				</td>
				<td>
					Bane of the Mountains
				</td>
			</tr>
			<tr>
				<td>
					4
				</td>
				<td>
					Contraband
				</td>
			</tr>
			<tr>
				<td>
					5
				</td>
				<td>
					Everything Has a Price
				</td>
			</tr>
			<tr>
				<td>
					6
				</td>
				<td>
					Fungus Humongus
				</td>
			</tr>
			<tr>
				<td>
					7
				</td>
				<td>
					The Golden Hind
				</td>
			</tr>
			<tr>
				<td>
					8
				</td>
				<td>
					High Holy Day
				</td>
			</tr>
			<tr>
				<td>
					9
				</td>
				<td>
					No Room at the Inn
				</td>
			</tr>
			<tr>
				<td>
					10
				</td>
				<td>
					Roadside Hospitality
				</td>
			</tr>
			<tr>
				<td>
					11
				</td>
				<td>
					Spider Woods
				</td>
			</tr>
			<tr>
				<td>
					12
				</td>
				<td>
					Stranded
				</td>
			</tr>
		</table>
		<br/>
		<br/>
		<table id="encountersnorthofwaterdeep">
			<tr>
				<th colspan="3">
					<h3 class="nobackground">
						Encounters North of Waterdeep
					</h3>
				</th>
			</tr>
			<tr>
				<th>
					d20
				</th>
				<th>
					Encounter
				</th>
			</tr>
			<tr>
				<td>
					1-14
				</td>
				<td>
					No Encounter
				</td>
			</tr>
			<tr>
				<td>
					15
				</td>
				<td>
					12 Human Bandits
				</td>
			</tr>
			<tr>
				<td>
					16
				</td>
				<td>
					1 troll
				</td>
			</tr>
			<tr>
				<td>
					17
				</td>
				<td>
					4 orcs, 1 ogre
				</td>
			</tr>
			<tr>
				<td>
					18
				</td>
				<td>
					2 ogre
				</td>
			</tr>
			<tr>
				<td>
					19
				</td>
				<td>
					3 lizardfolk and 3 giant lizards
				</td>
			</tr>
			<tr>
				<td>
					20
				</td>
				<td>
					6 lizardfolk
				</td>
			</tr>
			<tr>
				<td>
					21
				</td>
				<td>
					8 giant frogs
				</td>
			</tr>
			<tr>
				<td>
					22
				</td>
				<td>
					12 bullywugs
				</td>
			</tr>
		</table>
		<br/>
		<br/>
		<table id="mereofdeadmenencounters">
			<tr>
				<th colspan="3">
					<h3 class="nobackground">
						Mere of Dead Men Encounters
					</h3>
				</th>
			</tr>
			<tr>
				<th>
					d12
				</th>
				<th>
					Encounter
				</th>
			</tr>
			<tr>
				<td>
					1-2
				</td>
				<td>
					Bullywugs (2-3 per character)
				</td>
			</tr>
			<tr>
				<td>
					3
				</td>
				<td>
					Crocodiles (2 per character)
				</td>
			</tr>
			<tr>
				<td>
					4
				</td>
				<td>
					Giant frogs (2 per character)
				</td>
			</tr>
			<tr>
				<td>
					5
				</td>
				<td>
					Giant lizards (2 per character)
				</td>
			</tr>
			<tr>
				<td>
					6
				</td>
				<td>
					Giant Spiders (1 per character)
				</td>
			</tr>
			<tr>
				<td>
					7-8
				</td>
				<td>
					Lizardfolk (3 per 2 characters)
				</td>
			</tr>
			<tr>
				<td>
					9
				</td>
				<td>
					Quicksand
				</td>
			</tr>
			<tr>
				<td>
					10
				</td>
				<td>
					Shambling mound
				</td>
			</tr>
			<tr>
				<td>
					11
				</td>
				<td>
					Will-o-wisps (3)
				</td>
			</tr>
			<tr>
				<td>
					12
				</td>
				<td>
					Yuan-ti
				</td>
			</tr>
		</table>
		<br/>
		<br/>
		<dl>
		<dt><h3 class="nobackground" id="Rise-of-Tiamat">The Rise of Tiamat</h3></dt>
		<dd><i>This is for adventurers of levels 8-15.</i></dd>
		</dl>
		Coming Soon!
		<br /><br />

		<h2 id="Elemental-Evil">Elemental Evil</h2>
		<dl>
		<dt><h3 class="nobackground">Princes of the Apocalypse</h3></dt>
		<dd><i>This is for adventurers of levels 1-15.</i></dd>
		</dl>
		Coming soon!
		<br /><br />
	</body>
</html>
