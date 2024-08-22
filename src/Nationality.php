<?php

namespace Ilyasdiker\NationalityList;

use Illuminate\Support\Arr;

class Nationality{
	
	public static function getNationalities(){
        return (self::$Nationality);
    }

	public static function getNationalities(){
		return array(
            'Afghan',
            'Albanais',
            'Algérien',
            'Américain',
            'Andorran',
            'Angolais',
            'Antiguais',
            'Argentin',
            'Arménien',
            'Australien',
            'Autrichien',
            'Azerbaïdjanais',
            'Bahaméen',
            'Bahreïnien',
            'Bangladais',
            'Barbadien',
            'Barbudien',
            'Botswanais',
            'Biélorusse',
            'Belge',
            'Bélizien',
            'Béninois',
            'Bhoutanais',
            'Bolivien',
            'Bosnien',
            'Brésilien',
            'Britannique',
            'Brunéien',
            'Bulgare',
            'Burkinabè',
            'Birman',
            'Burundais',
            'Cambodgien',
            'Camerounais',
            'Canadien',
            'Cap-Verdien',
            'Centrafricain',
            'Tchadien',
            'Chilien',
            'Chinois',
            'Colombien',
            'Comorien',
            'Congolais',
            'Costaricien',
            'Croate',
            'Cubain',
            'Chypriote',
            'Tchèque',
            'Danois',
            'Djiboutien',
            'Dominicain',
            'Néerlandais',
            'Timorais',
            'Équatorien',
            'Égyptien',
            'Émirati',
            'Guinéen équatorial',
            'Érythréen',
            'Estonien',
            'Éthiopien',
            'Fidjien',
            'Philippin',
            'Finlandais',
            'Français',
            'Gabonais',
            'Gambien',
            'Géorgien',
            'Allemand',
            'Ghanéen',
            'Grec',
            'Grenadien',
            'Guatémaltèque',
            'Bissau-Guinéen',
            'Guinéen',
            'Guyanien',
            'Haïtien',
            'Herzégovinien',
            'Hondurien',
            'Hongrois',
            'Kiribatien',
            'Islandais',
            'Indien',
            'Indonésien',
            'Iranien',
            'Irakien',
            'Irlandais',
            'Israélien',
            'Italien',
            'Ivoirien',
            'Jamaïcain',
            'Japonais',
            'Jordanien',
            'Kazakhstanais',
            'Kényan',
            'Kittitien-et-Nevisien',
            'Koweïtien',
            'Kirghiz',
            'Laotien',
            'Letton',
            'Libanais',
            'Libérien',
            'Libyen',
            'Liechtensteinois',
            'Lituanien',
            'Luxembourgeois',
            'Macédonien',
            'Malgache',
            'Malawien',
            'Malaisien',
            'Maldivien',
            'Malien',
            'Maltais',
            'Marshallsien',
            'Mauritanien',
            'Mauricien',
            'Mexicain',
            'Micronésien',
            'Moldave',
            'Monégasque',
            'Mongol',
            'Marocain',
            'Lesothan',
            'Botswanais',
            'Mozambicain',
            'Namibien',
            'Nauruan',
            'Népalais',
            'Néo-Zélandais',
            'Nicaraguayen',
            'Nigérian',
            'Nord-Coréen',
            'Irlandais du Nord',
            'Norvégien',
            'Omanais',
            'Pakistanais',
            'Palauan',
            'Panaméen',
            'Papouasien',
            'Paraguayen',
            'Péruvien',
            'Polonais',
            'Portugais',
            'Qatarien',
            'Roumain',
            'Russe',
            'Rwandais',
            'Saint-Lucien',
            'Salvadorien',
            'Samoan',
            'Saint-Marinais',
            'Santoméen',
            'Saoudien',
            'Écossais',
            'Sénégalais',
            'Serbe',
            'Seychellois',
            'Sierra-Léonais',
            'Singapourien',
            'Slovaque',
            'Slovène',
            'Salomonien',
            'Somalien',
            'Sud-Africain',
            'Sud-Coréen',
            'Espagnol',
            'Sri-Lankais',
            'Soudanais',
            'Surinamais',
            'Swazi',
            'Suédois',
            'Suisse',
            'Syrien',
            'Taïwanais',
            'Tadjik',
            'Tanzanien',
            'Thaïlandais',
            'Togolais',
            'Tongien',
            'Trinidadien ou Tobagonais',
            'Tunisien',
            'Turc',
            'Tuvaluan',
            'Ougandais',
            'Ukrainien',
            'Uruguayen',
            'Ouzbek',
            'Vénézuélien',
            'Vietnamien',
            'Gallois',
            'Yéménite',
            'Zambien',
            'Zimbabwéen'
        );
    }

    public static function getNationalitiesAsSelectArray(): array
    {
        return collect(self::getNationalities())->mapWithKeys(fn ($nationality) => [$nationality => $nationality])->toArray();
    }

    public static function getRandomNationality(): string
    {
        return Arr::random(self::getNationalities());
    }
}
