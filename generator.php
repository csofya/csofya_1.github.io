<!DOCTYPE html>
<html>

<head>
    <style>
        .pinkbox {
            border: 3px outset rgb(255, 0, 255);
            background-color: rgb(255, 179, 255);
            width: 60%;
            height: 90%;
            border-radius: 16px;
            text-align: center;
            line-height: 1.5;
        }
    </style>
    <title>Playlist Generator</title>
</head>

<body style="background-color: rgb(40, 40, 62);">
    <center>
        <h1 style="font-family:Monaco;color:white;font-size:40px">
            <?php echo "This is your customized playlist!<br>" ?>
            <p1 style="font-family:Monaco;color:white;font-size:25px">
                <?php echo "- refresh for new randomized playlist -<br>" ?>
            </p1>
        </h1>
        <h2 style="font-family:Monaco;color:white">

            <div class='pinkbox'>
                <?php
                $mood = $_POST['mood'];
                $beat = $_POST['beat'];
                $curr = $_POST['curr'];
                $instrumental = $_POST['instrumental'];
                //$artist = $_POST['artist'];
                $finalplaylist = array();
                $result = array();
                $moodarray = array();
                if ($mood == 'happy') {
                    array_push(
                        $moodarray,
                        "GUD VIBRATIONS - Nghtmre/Slander",
                        "Just For A Moment - Gryffin",
                        "Body Back - Gryffin",
                        "Just Us - Said the Sky",
                        "Show & Tell - Said the Sky",
                        "Everyday, Everyday - Manila Killa",
                        "Better Not - Louis The Child",
                        "Miss Me More - 3LAU",
                        "Love You Now - Cash Cash"
                    );
                    shuffle($moodarray);
                    array_splice($moodarray, 4, count($moodarray));
                    $finalplaylist = array_merge($moodarray, $finalplaylist);
                }
                if ($mood == 'sad') {
                    array_push(
                        $moodarray,
                        "Love Is Gone - Slander",
                        "Potions - Slander",
                        "Hard To Say Goodbye - Ekali/Illenium",
                        "Back To U - Slander/William Black",
                        "Part-Time Lover - Dabin",
                        "Cold as Stone - Kaskade",
                        "Holding on - Dabin",
                        "Sad Songs - Illenium/Said The Sky",
                        "Chameleon - Mako/Elephante",
                        "Good Things Fall Apart - Illenium"
                    );
                    shuffle($moodarray);
                    array_splice($moodarray, 4, count($moodarray));
                    $finalplaylist = array_merge($moodarray, $finalplaylist);
                }
                if ($mood == 'lit') {
                    array_push(
                        $moodarray,
                        "Island - Seven Lions",
                        "You Don't Even Know Me - Slander",
                        "Next Life - Adventure Club"
                    );
                    shuffle($moodarray);
                    array_splice($moodarray, 3, count($moodarray));
                    $finalplaylist = array_merge($moodarray, $finalplaylist);
                }
                $beatarray = array();
                if ($beat == 'energetic') {
                    array_push(
                        $beatarray,
                        "Home - Excision",
                        "Into My Heart - yetep",
                        "Away - Mitis",
                        "Nobody Compares To You - Gryffin",
                        "Sunburn - DROELOE",
                        "Riptide - Trivecta",
                        "Wrong To Let You Go - Man Cub",
                        "All I'm After - Jameo"
                    );
                    shuffle($beatarray);
                    array_splice($beatarray, 4, count($beatarray));
                    $finalplaylist = array_merge($beatarray, $finalplaylist);
                }
                if ($beat == 'loud') {
                    array_push(
                        $beatarray,
                        "Gold - Excision",
                        "Frontlines- Zeds Dead, NGHTMRE",
                        "Nothing To Hide - Boombox Cartel"
                    );
                    shuffle($beatarray);
                    array_splice($beatarray, 2, count($beatarray));
                    $finalplaylist = array_merge($beatarray, $finalplaylist);
                }
                if ($beat == 'soft') {
                    array_push(
                        $beatarray,
                        "Revive - Lione",
                        "Million Days - Sabai/Hoang",
                        "Cold Skin (MiTiS Remix) - Seven Lions",
                        "Touch - 3LAU",
                        "Still Sleeping - Jai Wolf",
                        "Moments - Mitis",
                        "Take Me - William Black",
                        "When You're Lonely - Hoang",
                        "All I Got - Said the Sky",
                        "Glimmer - Lione"
                    );
                    shuffle($beatarray);
                    array_splice($beatarray, 4, count($beatarray));
                    $finalplaylist = array_merge($beatarray, $finalplaylist);
                }
                $currarray = array();
                if ($curr == 'hmk') {
                    array_push(
                        $currarray,
                        "Where We Are - Bear Grillz/Adventure Club",
                        "Otherside - Elephante",
                        "Oxygen - Excision",
                        "Breathe Without - Nurko",
                        "Sunsets - Nurko",
                        "Leaving - Ekali",
                        "Petals from a Rose - yetep",
                        "Don't Say - Hoang",
                        "Wait - Mitis",
                        "Dreamin' - Seven Lions",
                        "Gone - Hoang",
                        "Run Back to You - Hoang",
                        "Crashing - Illenium"
                    );
                    shuffle($currarray);
                    array_splice($currarray, 4, count($currarray));
                    $finalplaylist = array_merge($currarray, $finalplaylist);
                }
                if ($curr == 'work') {
                    array_push(
                        $currarray,
                        "Blame - Zed's Dead",
                        "Horizon - Seven Lions",
                        "Nothing Left - Wooli/William Black",
                        "Constellation - Far Out",
                        "On My Own - Far Out",
                        "Lost with You - Far Out",
                        "Break Me - Trivecta",
                        "Be Without You - KEPIK",
                        "Rescue - HGHLND",
                        "I Wanna Know - RL Grime",
                        "Feels Right - Crystal Skies",
                        "Hold On - Illenium",
                        "Here With Me - Armnhmr",
                        "Already Know - Adventure Club",
                        "Never Change - Crystal Skies"
                    );
                    shuffle($currarray);
                    array_splice($currarray, 4, count($currarray));
                    $finalplaylist = array_merge($currarray, $finalplaylist);
                }
                if ($curr == 'partying') {
                    array_push(
                        $currarray,
                        "Save Me - Armnhmr",
                        "Another Me - Seven Lions/Excision"
                    );
                    shuffle($currarray);
                    array_splice($currarray, 2, count($currarray));
                    $finalplaylist = array_merge($currarray, $finalplaylist);
                }
                if ($curr == 'chilling') {
                    array_push(
                        $currarray,
                        "Almost Back - Kaskade",
                        "Better WIth You - 3LAU",
                        "Better Apart - Jai Wolf",
                        "For You - Said the Sky",
                        "Kids - Lione",
                        "Another Way - Seven Lions",
                        "Demons - Bear Grillz",
                        "Into You - Matisse & Sadko",
                        "Shelter - Porter Robinson",
                        "One More Night - Crystal Skies",
                        "Something Comforting - Porter Robinson",
                        "Leave It All - Armnhmr"
                    );
                    shuffle($currarray);
                    array_splice($currarray, 4, count($currarray));
                    $finalplaylist = array_merge($currarray, $finalplaylist);
                }
                $instrumentalarray = array();
                if ($instrumental == 'instrumental') {
                    array_push(
                        $instrumentalarray,
                        "Stargazing - Slushii",
                        "You - Miruku",
                        "A World Away - Inukshuk",
                        "Darling - Said the Sky"
                    );
                    shuffle($instrumentalarray);
                    array_splice($instrumentalarray, 3, count($instrumentalarray));
                    $finalplaylist = array_merge($instrumentalarray, $finalplaylist);
                }
                //https://makitweb.com/get-checked-checkboxes-value-with-php/
                if (isset($_POST['submit'])) {
                    if (!empty($_POST['artist'])) {
                        foreach ($_POST['artist'] as $artist) {
                            $artistarray = array();
                            if ($artist == 'Illenium') {
                                array_push(
                                    $artistarray,
                                    "Fractures - Illenium",
                                    "Crawl Outta Love - Illenium",
                                    "Take You Down - Illenium",
                                    "Free Fall - Illenium",
                                    "Where'd U Go - Illenium"
                                );
                                shuffle($artistarray);
                                array_splice($artistarray, 4, count($artistarray));
                                $finalplaylist = array_merge($artistarray, $finalplaylist);
                            }
                            if ($artist == 'Gryffin') {
                                array_push(
                                    $artistarray,
                                    "Bye Bye - Gryffin",
                                    "All You Need To Know - Gryffin/Slander",
                                    "Feel Good - Gryffin ",
                                    "Need Your Love - Gryffin",
                                    "Cry - Gryffin"
                                );
                                shuffle($artistarray);
                                array_splice($artistarray, 4, count($artistarray));
                                $finalplaylist = array_merge($artistarray, $finalplaylist);
                            }
                            if ($artist == 'Seven Lions') {
                                array_push(
                                    $artistarray,
                                    "First Time - Seven Lions",
                                    "Rush Over Me - Seven Lions",
                                    "Calling You Home - Seven Lions",
                                    "Only Now - Seven Lions",
                                    "Ocean - Seven Lions",
                                    "Worlds Apart - Seven Lions"
                                );
                                shuffle($artistarray);
                                array_splice($artistarray, 4, count($artistarray));
                                $finalplaylist = array_merge($artistarray, $finalplaylist);
                            }
                            if ($artist == 'Dabin') {
                                array_push(
                                    $artistarray,
                                    "Bloom - Dabin",
                                    "Alive (Trivecta Remix) - Dabin",
                                    "Lights - Dabin",
                                    "Rings & Roses - Dabin",
                                    "Hold - Dabin",
                                    "In Flames - Dabin"
                                );
                                shuffle($artistarray);
                                array_splice($artistarray, 4, count($artistarray));
                                $finalplaylist = array_merge($artistarray, $finalplaylist);
                            }
                            if ($artist == 'Said the Sky') {
                                array_push(
                                    $artistarray,
                                    "Superstar - Said the Sky",
                                    "Affection - Said the Sky",
                                    "Atoms (STS Remix)- RL Grime/Said the Sky",
                                    "Never Gone - Said the Sky",
                                    "Beautiful - Said the Sky",
                                    "Erase Me- Said the Sky"
                                );
                                shuffle($artistarray);
                                array_splice($artistarray, 4, count($artistarray));
                                $finalplaylist = array_merge($artistarray, $finalplaylist);
                            }
                            if ($artist == 'Slander') {
                                array_push(
                                    $artistarray,
                                    "Superhuman - Slander",
                                    "Without You - Slander",
                                    "Better Than Heaven - Slander",
                                    "Love Again - Slander"
                                );
                                shuffle($artistarray);
                                array_splice($artistarray, 2, count($artistarray));
                                $finalplaylist = array_merge($artistarray, $finalplaylist);
                            }
                            if ($artist == 'Excision') {
                                array_push(
                                    $artistarray,
                                    "Drowning - Excision",
                                    "Your Fault - Excision",
                                    "Vault - Excision"
                                );
                                shuffle($artistarray);
                                array_splice($artistarray, 1, count($artistarray));
                                $finalplaylist = array_merge($artistarray, $finalplaylist);
                            }
                            if ($artist == 'Zedd') {
                                array_push(
                                    $artistarray,
                                    "Daisy - Zedd",
                                    "Happy Now - Zedd",
                                    "The Middle - Zedd",
                                    "Beautiful Now - Zedd"
                                );
                                shuffle($artistarray);
                                array_splice($artistarray, 2, count($artistarray));
                                $finalplaylist = array_merge($artistarray, $finalplaylist);
                            }
                            if ($artist == 'Tritonal') {
                                array_push(
                                    $artistarray,
                                    "Just Like U - Tritonal",
                                    "When I'm With U - Tritonal",
                                    "Never Be The Same (Crystal Skies Remix) - Tritonal",
                                    "Out My Mind - Tritonal",
                                    "Just Like U - Tritonal",
                                    "Love U Right - Tritonal"
                                );
                                shuffle($artistarray);
                                array_splice($artistarray, 4, count($artistarray));
                                $finalplaylist = array_merge($artistarray, $finalplaylist);
                            }
                            if ($artist == 'Elephante') {
                                array_push(
                                    $artistarray,
                                    "The In Between - Elephante",
                                    "Dynasty - Elephante",
                                    "Have It All - Elephante",
                                    "Glass Mansion - Elephante",
                                    "Smoke Filled Room (Elephante Remix) - Mako/Elephante",
                                    "All Over Again - Elephante"
                                );
                                shuffle($artistarray);
                                array_splice($artistarray, 4, count($artistarray));
                                $finalplaylist = array_merge($artistarray, $finalplaylist);
                            }
                            if ($artist == 'Armnhmr') {
                                array_push(
                                    $artistarray,
                                    "WANT U - Armnhmr",
                                    "Oceans - Armnhmr",
                                    "Forever Young - Armnhmr",
                                    "Fallen (William Black Remix) - Armnhmr",
                                    "Let Light Out - Armnhmr",
                                    "I Don't Know You - Armnhmr",
                                    "I'll Be Fine - Armnhmr"
                                );
                                shuffle($artistarray);
                                array_splice($artistarray, 4, count($artistarray));
                                $finalplaylist = array_merge($artistarray, $finalplaylist);
                            }
                        }
                    }
                }
                shuffle($finalplaylist);
                foreach ($finalplaylist as $item) {
                    echo $item . "<br>";
                }
                ?>
            </div>
        </h2>
    </center>
</body>

</html>