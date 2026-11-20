<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BossesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('bosses')->insert([
         ['bossname' => "Iudex Gundyr", 'hp' =>'1037',   'location' => "Cemetery of Ash" ,'description' => "The first mandatory boss the player faces, Iudex Gundyr has two phases"],
         ['bossname' => "Curse-Rotted Greatwood", 'hp' =>'5405',   'location' => "Undead Settlement" ,'description' => "The first optional boss the player faces, Curse-Rotted Greatwood has two phases, the first phase as additional enemies that will attack the player, to damage the boss the player must hit the sacks on the boss, when triggering phase 2 the boss will break the floor beneath the player and send them into a new boss arena and sprout an arm that will attack the player can damage this arm to attack the boss however much easier to just hit the sacks"],
         ['bossname' => "Vordt of the Boreal Valley", 'hp' =>'1328',   'location' => "High Wall of Lothric" ,'description' => "The second mandatory boss the player faces, Vordt has two phases, an easy stratergy is staying underneath him and behind him"],
         ['bossname' => "Crystal Sage", 'hp' =>'2723',   'location' => "Road of Sacrifices" ,'description' => "The third boss mandatory the player faces, Crystal Sage has two phases, in its second phase it spawns clones and the player must hit the correct one to continue damaging the boss, the way to see which is the real boss is if its magic is purple"],
         ['bossname' => "Deacons of the Deep", 'hp' =>'4099',   'location' => "Cathedral of the Deep" ,'description' => "The third mandatory boss the player faces if they follow the path from the Crystal Stage Boss, The Deacons has two phases, the first phase includes an area full of enemies and the only way to damage the boss it attacking the enemy with a black aura surronding them when killed it will transfer, when the second phase arrives 5 new enemies will appear and the deacon with the hat will need to be hit to damage the boss"],
         ['bossname' => "Abyss Watchers", 'hp' =>'1548',   'location' => "Farron Keep" ,'description' => "The first mandatory Lord of Cinder the player faces, The Watchers have two phases, the first phase involves facing three abyss watchers however one will attack the other two, when the second phase is reached this will decrease to just one, if the player is struggling they can cheese the boss by going for backstabs as it puts the boss in an animation "],
         ['bossname' => "High Lord Wolnir", 'hp' =>'15041',   'location' => "Catacombs of Carthus" ,'description' => "The fifth mandatory boss the player faces, Wolnir has one phase, to damage the boss the player needs to attack the bracelets on his hands"],
         ['bossname' => "Old Demon King", 'hp' =>'5301',   'location' => "Smouldering Lake" ,'description' => "The second optional boss the player can face, Old Demon King has three phases, the first phase involves him using a mixture of pyromancy and his hammer, in his second phase he gains access to stronger pyromancy and in the third phase he will kneel on the floor and stop moving and send waves of fire towards the player"],
         ['bossname' => "Pontiff Sulyvahn", 'hp' =>'5106',   'location' => "Irithyll of the Boreal Valley" ,'description' => "The sixth mandatory boss the player faces, Pontiff Sulyvagn has two phases, in the first phase it will be a pretty normal fight however in the second phase he will summon a clone that will attack the player, the player can kill the clone however pontiff can respawn it" ],
         ['bossname' => "Yhorm The Giant", 'hp' =>'27822',   'location' => "Profaned Capital" ,'description' => "The second Lord of Cinder boss the player faces, Yhorm has two phases, at the start of the fight the player should rush towards his throne and pick up the weapon Storm Ruler as this will deal large amounts of damage to him as in this fight the weapons gains air slashes that can hit the boss from across the arena "],
         ['bossname' => "Aldrich,Devour of Gods", 'hp' =>'4727',   'location' => "Anor Londo" ,'description' => "The third Lord of Cinder the player faces, Aldrich has two phases, Aldrich will teleport around the arena and attack the player with magic, Aldrich can also heal himself if the LifeSteal Scythe spell hits the player"],
         ['bossname' => "Dancer of the Boreal Valley", 'hp' =>'1037',   'location' => "Cemetery of Ash" ,'description' => "The ninth mandatory boss the player faces however can be fought earlier if the player attacks the NPC Emma at the High Wall of Lothric if not the player is teleported into the room after they slay three Lords of Cinders, Iudex Gundyr has two phases, The dancer uses two swords and attacks the player however due to her large size the swords have long reach, at the start of the second phase she starts spinning with the weapons around the room following the player  "],
         ['bossname' => "Dragonslayer Armour", 'hp' =>'4581',   'location' => "Lothric Castle" ,'description' => "The tenth mandatory boss the player faces, Dragonslayer has two phases, in the second phase pilgrim butterflys will attack the player from above the arena"],
         ['bossname' => "Oceiros the Consumed King", 'hp' =>'8087',   'location' => "Consumed Kings Garden" ,'description' => "The sixth optional boss the player faces, Ocerios has two phases, in the first phase he cradles an invisible baby and uses mainly uses magic however in second phase he slams the invisible baby down and gets on all fours and becomes incredibly aggressive "],
         ['bossname' => "Champion Gundyr", 'hp' =>'4956',   'location' => "Untended Graves" ,'description' => "The seventh mandatory boss the player faces, Champion Gundyr has two phases, he is an improved version of the first boss the player faces with a slightly different moveset and different second phase however this boss must be beaten to achieve the end of fire ending"],
         ['bossname' => "Lothric Younger Prince", 'hp' =>'4294',   'location' => "Top of Lothric Castle" ,'description' => "The forth Lord of Cinder the player faces, Lothric has two phases, in the first phase you fight his brother lothric and when defeated the second phase starts and Lorian hangs on his brothers back and must be killed to win however Lothric can be killed to drop Lorian but will be revived "],
         ['bossname' => "Ancient Wyvern", 'hp' =>'7873',   'location' => "Archdragon Peak" ,'description' => "The eigth optional boss the player faces, Ancient Wyvern has one phase, while the boss can be defeated in actual combat it is easier to just run around the arena until you reach a ledge and just jump on its head"],
         ['bossname' => "Namless King", 'hp' =>'7100',   'location' => "Archdragon Peak" ,'description' => "The ninth optional boss the player faces, Namless King has two phases, in the first phase he is riding on the back of the King of the Storm and when killed the second phase starts and he will fight the player one vs one "],
         ['bossname' => "Soul Of Cinder", 'hp' =>'10766',   'location' => "Kiln of the First Flame" ,'description' => "The final boss the player faces in base game, Soul of Cinder has two phases, in the first phase he switches to a varity of weapons and magic as this boss is based on everyone who linked the fire therefore the players characters in past games are apart of it and in the second phase he will switch to the moveset of the final boss in the first game Lord Gwyn"],


    ]);
        //
    }
}
