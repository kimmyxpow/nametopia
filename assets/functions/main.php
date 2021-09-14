<?php

function allCountries()
{
  $locales = [
    ['Saudi Arabia', 'ar_SA'],
    ['Bulgaria', 'bg_BG'],
    ['Bangladesh', 'bn_BD'],
    ['Czech Republic', 'cs_CZ'],
    ['Denmark', 'da_DK'],
    ['Austria', 'de_AT'],
    ['Switzerland', 'de_CH'],
    ['Germany', 'de_DE'],
    ['Cyprus', 'el_CY'],
    ['Greece', 'el_GR'],
    ['United Kingdom', 'en_GB'],
    ['Hong Kong SAR China', 'en_HK'],
    ['India', 'en_IN'],
    ['Nigeria', 'en_NG'],
    ['New Zealand', 'en_NZ'],
    ['Philippines', 'en_PH'],
    ['Singapore', 'en_SG'],
    ['Uganda', 'en_UG'],
    ['United States', 'en_US'],
    ['South Africa', 'en_ZA'],
    ['Spain', 'es_ES'],
    ['Peru', 'es_PE'],
    ['Venezuela', 'es_VE'],
    ['Iran', 'fa_IR'],
    ['Finland', 'fi_FI'],
    ['Belgium', 'fr_BE'],
    ['Switzerland', 'fr_CH'],
    ['France', 'fr_FR'],
    ['Croatia', 'hr_HR'],
    ['Hungary', 'hu_HU'],
    ['Indonesia', 'id_ID']
  ];

  usort($locales, function ($item1, $item2) {
    return $item1['0'] <=> $item2['0'];
  });

  return $locales;
}

function allGender()
{
  $allGender = ['male', 'female'];

  return $allGender;
}

function getName($country, $gender)
{
  if (!in_array($gender, allGender())) {
    $gender = 'male';
  }
  
  for ($i=0; $i < count(allCountries()); $i++) { 
    if (allCountries()[$i][1] == $country) {
      $validate = "YES";
      break;
    } else {
      $validate = "NO";
    }
  }
  
  if ($validate == "YES") {
    $country = $country;
  } else {
    $country = 'id_ID';
  }
  
  $faker = Faker\Factory::create($country);
  
  $name = $faker->name($gender);
  return $name;
}