<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>wakPad</title>
    <?php include 'alpha/books.php'?>
</head>
<body>

<?php

$a = new Books;
$a->name = "Ang Mansyon sa Kambas";
$a->reads = 477;
$a->photo = 'ang-mansyon-sa-kambas.jpg';
$a->description = "[SHORT STORY]

May mga koneksyon talaga sa ating buhay na sadyang hindi madaling maputol kahit matagal na panahon na ang nakalilipas. 

Kahit natapos na ang namamagitan sa dalawang taong minsan ding naging parte ng kanilang mga buhay at damdamin, nananatili pa rin ito at patuloy na mangungulila't hahanapin ang tahanan kung saan may naghihintay at handang aluhin ang mga puso nilang minsang naligaw at muling pinagbuklod ng hindi nawawalang koneksyon.


Started: August 06, 2021
All Rights Reserved";
$a->print_books();

$b = new Books;
$b->name = "Saving Margaux";
$b->reads = 2100;
$b->photo = 'saving-margaux.jpg';
$b->description = "Matapos salakayin ng isang grupo ang Royal Gontham, agad nilang dinakip ang magkaibigan na sina Cathal at Wrandelle na noon ay abala sa pagbawi ng Glorious Ring na nanakaw mula sa kanila, na sakto namang pangunahing pakay ng grupo ni Zora. 

Mabilis na nakarating sa Council ang pangyayari na siyang dahilan kaya't nabuhay sa kalooban ni Master Ajani ang mga pangyayari, ilang taon na ang nakalilipas na siyang kagagawan ng dati nitong kaibigan. 

Bago pa mahuli ang lahat at maiwasan ang pagkakaroon ng gera, nag desisyon itong ipahanap sa espesyal na grupo ng mga sages ang lugar na pinagtataguan ni Zora upang mailigtas ang dalawa't mapigilan ang dating kaibigan sa kanyang mga balak ngunit, wala silang kamalay-malay na ang aksyong ito ay katiting lang ng isang malawak na larawan na matagal ng isinasagawa sa likod ng bawat eksena.


Start: Feb 21, 2021
Expected ending:  -----
All Rights Reserved";
$b->print_books();

$c = new Books;
$c->set_books('The Lost Rhythm Behind', 417,'the-lost-rhythm-behind.jpg','[SHORT STORY]

Ang bawat ritmo ng isang tugtugin ay kayang makapagbuklod at magbigay liwanag sa dalawang taong may magkaibang karanasan sa hamon ng buhay ngunit, pinag-isa ng musika.

Started: April 5, 2021
Ended: April 29, 2021

All rights reserved 2021');
$c->print_books();


$e = new Books;
$e->set_books('When Time Travels', 2500, 'when-time_travels.jpg',"Buying a new house was Katalina Marqueza's plan to give her 'dead friends' a temporary home instead of staying in a condo unit, avoiding to have a contact with living ones. 

But living in a old shabby mansion gives her a hint of a strange painting of a woman that really looks, and had a same name as her. 

Struggle of losing a memory holder was her hardest times. Unleashing the painful memories of past that keeps on haunting every single piece of her. Despite of this, Katalina caught the Grim Reaper's interest for centuries because of undying connection from their past lives. 

Stand alone novel
Original story 
Plagiarism is a crime! 
AL_Phinx 
All rights reserved 2020 

Started: April 8, 2020
End: May 20, 2020
All Rights Reserved");
$e->print_books();

$f = new Books;
$f->set_books('My Love From Afar', 9900, 'my_love_from_afar.jpg',"(UNDER REVISION) 

[THIS BOOK WAS NOT YET EDITED. MARAMING LOOPHOLES AT MARAMING KAJEJEHAN, BECAUSE THIS STORY WAS WROTE ABOUT TWO YEARS AGO. SO IF EVER NA MABABASA NIYO PO ITO. BARE WITH ME AND I'M SORRY. BUT SOON! I'LL FIX EVERYTHING THANK YOU SO MUCH] 

Date started:April 14,2018
Date Finish:May 06,2018

Still on Editing Process
All Rights Reserved");
$f->print_books();


$g = new Books;
$g->set_books('As You Lean On Me', 2700, 'as_you_lean_on_me.jpg',"[UNDER REVISIONS] Being a patient with Multiple Personality Disorder was never easy. Experiencing fugue episodes, switchings with the other alters and seeking for the missing piece. Eva Cassandra Pascual, lived along with her cousin Shinee Jee Ramones in a small province away from their relatives and escape the American life to find the person who is responsible for her parents death. One of her alter, Maxine Del Fierro aggressively wants to be the lead persona in Cassandra's body and wants her to fall asleep forever. 

Started: April 10, 2019
End:      April 7, 2020

AL_Phinx 

All rights reserved 2020 

[REVISIONS ONGOING] 
Highest rank achieved. 

#945 mystery 
#3 medical fiction
All Rights Reserved");
$g->print_books();

?>

</body>
</html>