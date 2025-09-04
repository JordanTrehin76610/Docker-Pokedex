<?php


if (!isset($pokemon)) return;


if (isset($pokemon)) {
    // Ici tu mets tout le code qui dépend de $pokemon
    switch ($pokemon['type'][0]) {
    case 'Feu':
        $icone0 = '../img/typeFeu.png';
        break;
    case 'Eau':
        $icone0 = '../img/typeEau.png';
        break;
    case 'Plante':
        $icone0 = '../img/typePlante.png';
        break;
    case 'Insecte':
        $icone0 = '../img/typeInsecte.png';
        break;
    case 'Normal':
        $icone0 = '../img/typeNormal.png';
        break;
    case 'Poison':
        $icone0 = '../img/typePoison.png';
        break;
    case 'Électrik':
        $icone0 = '../img/typeElectric.png';
        break;
    case 'Sol':
        $icone0 = '../img/typeSol.png';
        break;
    case 'Fée':
        $icone0 = '../img/typeFée.png';
        break;
    case 'Vol':
        $icone0 = '../img/typeVol.png';
        break;
    case 'Spectre':
        $icone0 = '../img/typeSpectre.png';
        break;
    case 'Acier':
        $icone0 = '../img/typeAcier.png';
        break;
    case 'Roche':
        $icone0 = '../img/typeRoche.png';
        break;
    case 'Combat':
        $icone0 = '../img/typeCombat.png';
        break;
    case 'Psy':
        $icone0 = '../img/typePsy.png';
        break;
    case 'Glace':
        $icone0 = '../img/typeGlace.png';
        break;
    case 'Dragon':
        $icone0 = '../img/typeDragon.png';
        break;
    case 'Ténèbre':
        $icone0 = '../img/typeTenebre.png';
        break;
    }

}


if (!isset($_GET['url']) || empty($_GET['url'])) {
    $url[] = 'home';
} else {
    $url = explode("/", $_GET['url']);
}

if ($url[0] == 'type') {
    switch($pokemonType = $url[1]) {
        case 'Feu':
            $color = 'bgFeu';
            break;
        case 'Eau':
            $color = 'bgEau';
            break;
        case 'Plante':
            $color = 'bgPlante';
            break;
        case 'Insecte':
            $color = 'bgInsecte';
            break;
        case 'Normal':
            $color = 'bgNormal';
            break;
        case 'Poison':
            $color = 'bgPoison';
            break;
        case 'Électrik':
            $color = 'bgElectrik';
            break;
        case 'Sol':
            $color = 'bgSol';
            break;
        case 'Fée':
            $color = 'bgFee';
            break;
        case 'Vol':
            $color = 'bgVol';
            break;
        case 'Spectre':
            $color = 'bgSpectre';
            break;
        case 'Acier':
            $color = 'bgAcier';
            break;
        case 'Roche':
            $color = 'bgRoche';
            break;
        case 'Combat':
            $color = 'bgCombat';
            break;
        case 'Psy':
            $color = 'bgPsy';
            break;
        case 'Glace':
            $color = 'bgGlace';
            break;
        case 'Dragon':
            $color = 'bgDragon';
            break;
        case 'Ténèbre':
            $color = 'bgTenebre';
            break;
    }
} else {
switch ($pokemon['type'][0]) {
    case 'Feu':
        $color = 'bgFeu';
        $icone0 = '../img/typeFeu.png';
        break;
    case 'Eau':
        $color = 'bgEau';
        $icone0 = '../img/typeEau.png';
        break;
    case 'Plante':
        $color = 'bgPlante';
        $icone0 = '../img/typePlante.png';
        break;
    case 'Insecte':
        $color = 'bgInsecte';
        $icone0 = '../img/typeInsecte.png';
        break;
    case 'Normal':
        $color = 'bgNormal';
        $icone0 = '../img/typeNormal.png';
        break;
    case 'Poison':
        $color = 'bgPoison';
        $icone0 = '../img/typePoison.png';
        break;
    case 'Électrik':
        $color = 'bgElectrik';
        $icone0 = '../img/typeElectric.png';
        break;
    case 'Sol':
        $color = 'bgSol';
        $icone0 = '../img/typeSol.png';
        break;
    case 'Fée':
        $color = 'bgFee';
        $icone0 = '../img/typeFée.png';
        break;
    case 'Vol':
        $color = 'bgVol';
        $icone0 = '../img/typeVol.png';
        break;
    case 'Spectre':
        $color = 'bgSpectre';
        $icone0 = '../img/typeSpectre.png';
        break;
    case 'Acier':
        $color = 'bgAcier';
        $icone0 = '../img/typeAcier.png';
        break;
    case 'Roche':
        $color = 'bgRoche';
        $icone0 = '../img/typeRoche.png';
        break;
    case 'Combat':
        $color = 'bgCombat';
        $icone0 = '../img/typeCombat.png';
        break;
    case 'Psy':
        $color = 'bgPsy';
        $icone0 = '../img/typePsy.png';
        break;
    case 'Glace':
        $color = 'bgGlace';
        $icone0 = '../img/typeGlace.png';
        break;
    case 'Dragon':
        $color = 'bgDragon';
        $icone0 = '../img/typeDragon.png';
        break;
    case 'Ténèbre':
        $color = 'bgTenebre';
        $icone0 = '../img/typeTenebre.png';
        break;
    }
}

if (isset($pokemon['type'][1])) {
    switch ($pokemon['type'][1]) {
        case 'Feu':
            $icone1 = '../img/typeFeu.png';
            break;
        case 'Eau':
            $icone1 = '../img/typeEau.png';
            break;
        case 'Plante':
            $icone1 = '../img/typePlante.png';
            break;
        case 'Insecte':
            $icone1 = '../img/typeInsecte.png';
            break;
        case 'Normal':
            $icone1 = '../img/typeNormal.png';
            break;
        case 'Poison':
            $icone1 = '../img/typePoison.png';
            break;
        case 'Électrik':
            $icone1 = '../img/typeElectric.png';
            break;
        case 'Sol':
            $icone1 = '../img/typeSol.png';
            break;
        case 'Fée':
            $icone1 = '../img/typeFée.png';
            break;
        case 'Vol':
            $icone1 = '../img/typeVol.png';
            break;
        case 'Spectre':
            $icone1 = '../img/typeSpectre.png';
            break;
        case 'Acier':
            $icone1 = '../img/typeAcier.png';
            break;
        case 'Roche':
            $icone1 = '../img/typeRoche.png';
            break;
        case 'Combat':
            $icone1 = '../img/typeCombat.png';
            break;
        case 'Psy':
            $icone1 = '../img/typePsy.png';
            break;
        case 'Glace':
            $icone1 = '../img/typeGlace.png';
            break;
        case 'Dragon':
            $icone1 = '../img/typeDragon.png';
            break;
        case 'Ténèbre':
            $icone1 = '../img/typeTenebre.png';
            break;
        default:
            $icone1 = '../img/missing.png';
            break;
    }
} else {
    $icone1 = '../img/missing.png';
}
?>