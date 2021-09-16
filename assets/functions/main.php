<<<<<<< HEAD
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
=======
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
    ['German (Switzerland)', 'de_CH'],
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
    ['French (Belgium)', 'fr_BE'],
    ['French (Switzerland)', 'fr_CH'],
    ['France', 'fr_FR'],
    ['Croatia', 'hr_HR'],
    ['Hungary', 'hu_HU'],
    ['Indonesia', 'id_ID'],
    ['Iceland', 'is_IS'],
    ['Italian (Switzerland)', 'it_CH'],
    ['Italy', 'it_IT'],
    ['Japan', 'ja_JP'],
    ['Georgia', 'ka_GE'],
    ['Kazakhstan', 'kk_KZ'],
    ['South Korea', 'ko_KR'],
    ['Lithuania', 'lt_LT'],
    ['Latvia', 'lv_LV'],
    ['Montenegro', 'me_ME'],
    ['Malaysia', 'ms_MY'],
    ['Norway', 'nb_NO'],
    ['Nepal', 'ne_NP'],
    ['Dutch (Belgium)', 'nl_BE'],
    ['Netherlands', 'nl_NL'],
    ['Poland', 'pl_PL'],
    ['Brazil', 'pt_BR'],
    ['Portugal', 'pt_PT'],
    ['Moldova', 'ro_MD'],
    ['Romania', 'ro_RO'],
    ['Russia', 'ru_RU'],
    ['Slovakia', 'sk_SK'],
    ['Slovenia', 'sl_SI'],
    ['Cyrillic, Serbia', 'sr_Cyrl_RS'],
    ['Latin, Serbia', 'sr_Latn_RS'],
    ['Serbia', 'sr_RS'],
    ['Sweden', 'sv_SE'],
    ['Turkey', 'tr_TR'],
    ['Ukraine', 'uk_UA'],
    ['Simplified, China', 'zh_CN'],
    ['Traditional, Taiwan', 'zh_TW']
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
>>>>>>> e1a562a (Add Faker)
}