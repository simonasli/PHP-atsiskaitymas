<?php
//1.	Parašykite 1 būdą, kaip įvykdyti (paleisti) PHP script'ą iš komandinės eilutės.

// PHP -f

//2.	Kas privalo būtų PHP failo pirmoje eilurėje, kad PHP žinotų, jog tolesnės eilutės yra PHP kodas?

// <?php

//3.	Kokiais simboliais gali prasidėti PHP kintamojo pavadinimas (po $)?

// mažąja raide (a-z)

//4.	Ar simbolis % gali būti naudojamas PHP kintamojo pavadinime?

// Negali. (gali būti a-z, 0-9, _)

//5.	Parašykite multiline PHP komentaro pavyzdį.

/*
    Labas,
    Mano
    Vardas
    Auksinis
    Kardas
*/


//6.	Parašykite bent 4 duomenų tipus, naudojamus PHp kalboje.

// int, float, string, bool, array

//7.	Paminėkite pagrindinė enumeratyvaus masyvo (indexed array) požymį, kuriuo jis skiriasi nuo asociatyvaus masyvo.

// enumeratyvus indeksuoja masyvą skaitmenimis, o asociatyvus naudoja nustatytą raktą

//8.	Turite kintamajį $someVariable = '15'. Pakeiskite jo tipą į 'int'.

// $someVariable = 15;

// arba

// $integer = (int)$someVariable;

//9.	Kokia funkcija naudojama gauti masyvo narių skaičiui?

// count()

//10.	Kas nutinka, kai badome sukurti masyvą, kuris turi kelis narius, kurių raktai (keys) sutampa?

// PHP meta klaidą, kad tame pačiame masyve yra du vienodi keys.


//11.	Parašykite multidimensinio masyvo pavyzdį.

//$multiArray = array(
//    array(1, 2, 3),
//    array(4, 5, 6)
//);

//12.	Parašykite enumeryvaus masyvo pavyzdį.

// $enumeratyvus = array("PHP", "Java", "HTML");
//
// $enumeratyvus[0] = "PHP";
// $enumeratyvus[1] = "Java";
// $enumeratyvus[2] = "HTML";

//13.	Koks operatorius yra naudojamas pridėti naują narį masyvui? Pateikite paprastą pavyzdį.

//$stack = array("orange", "banana");
//array_push($stack, "apple", "raspberry");

//14.	Kokia funkcija naudojama panaikinti masyvo nariui?

// unset()

//15.	Kokia funkcija naudotumėte pašalinti nereikalingus simbolius nuo string tipo reikšmės pradžios ir pabaigos (pvz:. "-test-" -> "test")?

//$trimeris = '-test-';
//var_dump(trim($trimeris, '-'));

//16.	Kas laikoma superglobaliame kintamajame $_POST?

// Duomenys po formos submitinimo, kurios metodas yra "post"

//17.	Kas laikoma superglobaliame kintamajame $_FILES?

// laikomas failas, kurį per formą įkėlus submitinus gavome HTTP POST būdu.

//18.	Git status komanda leidžia padaryti ką?

// Leidžia pamatyti repozitorijos failus, kurie yra pridėti prie repozitorijos, jų pakeitimus, failus, kurių netrack'ina ir t.t.

//19.	Git push komanda leidžia padaryti ką?

// Leidžia supushinti iš lokalios repozitorijos į remote repozitoriją

//20.	Kas yra regex?

// Modelis, šablonas (pattern) naudojamas išskaidyti string'ą į dalis ir taip surasti ir pakeisti stringą.
// Galima regex naudoti ir validacijai duomenų, kurie turi atitikti tam tikrą formatą (el.pašto, tel.numerio ir t.t.).
