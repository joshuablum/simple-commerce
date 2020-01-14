<?php

namespace Damcclean\Commerce\Console\Commands;

use Damcclean\Commerce\Models\Country;
use Damcclean\Commerce\Models\Currency;
use Damcclean\Commerce\Models\OrderStatus;
use Damcclean\Commerce\Models\State;
use Illuminate\Console\Command;

class SeederCommand extends Command
{
    protected $signature = 'commerce:seed';

    public function handle()
    {
        $this->info('Seeding countries... 🌐');

        $countries = [
            ['iso' => 'US', 'name' => 'United States'],
            ['iso' => 'CA', 'name' => 'Canada'],
            ['iso' => 'AF', 'name' => 'Afghanistan'],
            ['iso' => 'AL', 'name' => 'Albania'],
            ['iso' => 'DZ', 'name' => 'Algeria'],
            ['iso' => 'AS', 'name' => 'American Samoa'],
            ['iso' => 'AD', 'name' => 'Andorra'],
            ['iso' => 'AO', 'name' => 'Angola'],
            ['iso' => 'AI', 'name' => 'Anguilla'],
            ['iso' => 'AQ', 'name' => 'Antarctica'],
            ['iso' => 'AG', 'name' => 'Antigua and/or Barbuda'],
            ['iso' => 'AR', 'name' => 'Argentina'],
            ['iso' => 'AM', 'name' => 'Armenia'],
            ['iso' => 'AW', 'name' => 'Aruba'],
            ['iso' => 'AU', 'name' => 'Australia'],
            ['iso' => 'AT', 'name' => 'Austria'],
            ['iso' => 'AZ', 'name' => 'Azerbaijan'],
            ['iso' => 'BS', 'name' => 'Bahamas'],
            ['iso' => 'BH', 'name' => 'Bahrain'],
            ['iso' => 'BD', 'name' => 'Bangladesh'],
            ['iso' => 'BB', 'name' => 'Barbados'],
            ['iso' => 'BY', 'name' => 'Belarus'],
            ['iso' => 'BE', 'name' => 'Belgium'],
            ['iso' => 'BZ', 'name' => 'Belize'],
            ['iso' => 'BJ', 'name' => 'Benin'],
            ['iso' => 'BM', 'name' => 'Bermuda'],
            ['iso' => 'BT', 'name' => 'Bhutan'],
            ['iso' => 'BO', 'name' => 'Bolivia'],
            ['iso' => 'BA', 'name' => 'Bosnia and Herzegovina'],
            ['iso' => 'BW', 'name' => 'Botswana'],
            ['iso' => 'BV', 'name' => 'Bouvet Island'],
            ['iso' => 'BR', 'name' => 'Brazil'],
            ['iso' => 'IO', 'name' => 'British lndian Ocean Territory'],
            ['iso' => 'BN', 'name' => 'Brunei Darussalam'],
            ['iso' => 'BG', 'name' => 'Bulgaria'],
            ['iso' => 'BF', 'name' => 'Burkina Faso'],
            ['iso' => 'BI', 'name' => 'Burundi'],
            ['iso' => 'KH', 'name' => 'Cambodia'],
            ['iso' => 'CM', 'name' => 'Cameroon'],
            ['iso' => 'CV', 'name' => 'Cape Verde'],
            ['iso' => 'KY', 'name' => 'Cayman Islands'],
            ['iso' => 'CF', 'name' => 'Central African Republic'],
            ['iso' => 'TD', 'name' => 'Chad'],
            ['iso' => 'CL', 'name' => 'Chile'],
            ['iso' => 'CN', 'name' => 'China'],
            ['iso' => 'CX', 'name' => 'Christmas Island'],
            ['iso' => 'CC', 'name' => 'Cocos (Keeling) Islands'],
            ['iso' => 'CO', 'name' => 'Colombia'],
            ['iso' => 'KM', 'name' => 'Comoros'],
            ['iso' => 'CG', 'name' => 'Congo'],
            ['iso' => 'CK', 'name' => 'Cook Islands'],
            ['iso' => 'CR', 'name' => 'Costa Rica'],
            ['iso' => 'HR', 'name' => 'Croatia (Hrvatska)'],
            ['iso' => 'CU', 'name' => 'Cuba'],
            ['iso' => 'CY', 'name' => 'Cyprus'],
            ['iso' => 'CZ', 'name' => 'Czech Republic'],
            ['iso' => 'CD', 'name' => 'Democratic Republic of Congo'],
            ['iso' => 'DK', 'name' => 'Denmark'],
            ['iso' => 'DJ', 'name' => 'Djibouti'],
            ['iso' => 'DM', 'name' => 'Dominica'],
            ['iso' => 'DO', 'name' => 'Dominican Republic'],
            ['iso' => 'TP', 'name' => 'East Timor'],
            ['iso' => 'EC', 'name' => 'Ecudaor'],
            ['iso' => 'EG', 'name' => 'Egypt'],
            ['iso' => 'SV', 'name' => 'El Salvador'],
            ['iso' => 'GQ', 'name' => 'Equatorial Guinea'],
            ['iso' => 'ER', 'name' => 'Eritrea'],
            ['iso' => 'EE', 'name' => 'Estonia'],
            ['iso' => 'ET', 'name' => 'Ethiopia'],
            ['iso' => 'FK', 'name' => 'Falkland Islands (Malvinas)'],
            ['iso' => 'FO', 'name' => 'Faroe Islands'],
            ['iso' => 'FJ', 'name' => 'Fiji'],
            ['iso' => 'FI', 'name' => 'Finland'],
            ['iso' => 'FR', 'name' => 'France'],
            ['iso' => 'FX', 'name' => 'France, Metropolitan'],
            ['iso' => 'GF', 'name' => 'French Guiana'],
            ['iso' => 'PF', 'name' => 'French Polynesia'],
            ['iso' => 'TF', 'name' => 'French Southern Territories'],
            ['iso' => 'GA', 'name' => 'Gabon'],
            ['iso' => 'GM', 'name' => 'Gambia'],
            ['iso' => 'GE', 'name' => 'Georgia'],
            ['iso' => 'DE', 'name' => 'Germany'],
            ['iso' => 'GH', 'name' => 'Ghana'],
            ['iso' => 'GI', 'name' => 'Gibraltar'],
            ['iso' => 'GR', 'name' => 'Greece'],
            ['iso' => 'GL', 'name' => 'Greenland'],
            ['iso' => 'GD', 'name' => 'Grenada'],
            ['iso' => 'GP', 'name' => 'Guadeloupe'],
            ['iso' => 'GU', 'name' => 'Guam'],
            ['iso' => 'GT', 'name' => 'Guatemala'],
            ['iso' => 'GN', 'name' => 'Guinea'],
            ['iso' => 'GW', 'name' => 'Guinea-Bissau'],
            ['iso' => 'GY', 'name' => 'Guyana'],
            ['iso' => 'HT', 'name' => 'Haiti'],
            ['iso' => 'HM', 'name' => 'Heard and Mc Donald Islands'],
            ['iso' => 'HN', 'name' => 'Honduras'],
            ['iso' => 'HK', 'name' => 'Hong Kong'],
            ['iso' => 'HU', 'name' => 'Hungary'],
            ['iso' => 'IS', 'name' => 'Iceland'],
            ['iso' => 'IN', 'name' => 'India'],
            ['iso' => 'ID', 'name' => 'Indonesia'],
            ['iso' => 'IR', 'name' => 'Iran (Islamic Republic of)'],
            ['iso' => 'IQ', 'name' => 'Iraq'],
            ['iso' => 'IE', 'name' => 'Ireland'],
            ['iso' => 'IL', 'name' => 'Israel'],
            ['iso' => 'IT', 'name' => 'Italy'],
            ['iso' => 'CI', 'name' => 'Ivory Coast'],
            ['iso' => 'JM', 'name' => 'Jamaica'],
            ['iso' => 'JP', 'name' => 'Japan'],
            ['iso' => 'JO', 'name' => 'Jordan'],
            ['iso' => 'KZ', 'name' => 'Kazakhstan'],
            ['iso' => 'KE', 'name' => 'Kenya'],
            ['iso' => 'KI', 'name' => 'Kiribati'],
            ['iso' => 'KP', 'name' => 'Korea, Democratic People\'s Republic of'],
            ['iso' => 'KR', 'name' => 'Korea, Republic of'],
            ['iso' => 'KW', 'name' => 'Kuwait'],
            ['iso' => 'KG', 'name' => 'Kyrgyzstan'],
            ['iso' => 'LA', 'name' => 'Lao People\'s Democratic Republic'],
            ['iso' => 'LV', 'name' => 'Latvia'],
            ['iso' => 'LB', 'name' => 'Lebanon'],
            ['iso' => 'LS', 'name' => 'Lesotho'],
            ['iso' => 'LR', 'name' => 'Liberia'],
            ['iso' => 'LY', 'name' => 'Libyan Arab Jamahiriya'],
            ['iso' => 'LI', 'name' => 'Liechtenstein'],
            ['iso' => 'LT', 'name' => 'Lithuania'],
            ['iso' => 'LU', 'name' => 'Luxembourg'],
            ['iso' => 'MO', 'name' => 'Macau'],
            ['iso' => 'MK', 'name' => 'Macedonia'],
            ['iso' => 'MG', 'name' => 'Madagascar'],
            ['iso' => 'MW', 'name' => 'Malawi'],
            ['iso' => 'MY', 'name' => 'Malaysia'],
            ['iso' => 'MV', 'name' => 'Maldives'],
            ['iso' => 'ML', 'name' => 'Mali'],
            ['iso' => 'MT', 'name' => 'Malta'],
            ['iso' => 'MH', 'name' => 'Marshall Islands'],
            ['iso' => 'MQ', 'name' => 'Martinique'],
            ['iso' => 'MR', 'name' => 'Mauritania'],
            ['iso' => 'MU', 'name' => 'Mauritius'],
            ['iso' => 'TY', 'name' => 'Mayotte'],
            ['iso' => 'MX', 'name' => 'Mexico'],
            ['iso' => 'FM', 'name' => 'Micronesia, Federated States of'],
            ['iso' => 'MD', 'name' => 'Moldova, Republic of'],
            ['iso' => 'MC', 'name' => 'Monaco'],
            ['iso' => 'MN', 'name' => 'Mongolia'],
            ['iso' => 'MS', 'name' => 'Montserrat'],
            ['iso' => 'MA', 'name' => 'Morocco'],
            ['iso' => 'MZ', 'name' => 'Mozambique'],
            ['iso' => 'MM', 'name' => 'Myanmar'],
            ['iso' => 'NA', 'name' => 'Namibia'],
            ['iso' => 'NR', 'name' => 'Nauru'],
            ['iso' => 'NP', 'name' => 'Nepal'],
            ['iso' => 'NL', 'name' => 'Netherlands'],
            ['iso' => 'AN', 'name' => 'Netherlands Antilles'],
            ['iso' => 'NC', 'name' => 'New Caledonia'],
            ['iso' => 'NZ', 'name' => 'New Zealand'],
            ['iso' => 'NI', 'name' => 'Nicaragua'],
            ['iso' => 'NE', 'name' => 'Niger'],
            ['iso' => 'NG', 'name' => 'Nigeria'],
            ['iso' => 'NU', 'name' => 'Niue'],
            ['iso' => 'NF', 'name' => 'Norfork Island'],
            ['iso' => 'MP', 'name' => 'Northern Mariana Islands'],
            ['iso' => 'NO', 'name' => 'Norway'],
            ['iso' => 'OM', 'name' => 'Oman'],
            ['iso' => 'PK', 'name' => 'Pakistan'],
            ['iso' => 'PW', 'name' => 'Palau'],
            ['iso' => 'PA', 'name' => 'Panama'],
            ['iso' => 'PG', 'name' => 'Papua New Guinea'],
            ['iso' => 'PY', 'name' => 'Paraguay'],
            ['iso' => 'PE', 'name' => 'Peru'],
            ['iso' => 'PH', 'name' => 'Philippines'],
            ['iso' => 'PN', 'name' => 'Pitcairn'],
            ['iso' => 'PL', 'name' => 'Poland'],
            ['iso' => 'PT', 'name' => 'Portugal'],
            ['iso' => 'PR', 'name' => 'Puerto Rico'],
            ['iso' => 'QA', 'name' => 'Qatar'],
            ['iso' => 'SS', 'name' => 'Republic of South Sudan'],
            ['iso' => 'RE', 'name' => 'Reunion'],
            ['iso' => 'RO', 'name' => 'Romania'],
            ['iso' => 'RU', 'name' => 'Russian Federation'],
            ['iso' => 'RW', 'name' => 'Rwanda'],
            ['iso' => 'KN', 'name' => 'Saint Kitts and Nevis'],
            ['iso' => 'LC', 'name' => 'Saint Lucia'],
            ['iso' => 'VC', 'name' => 'Saint Vincent and the Grenadines'],
            ['iso' => 'WS', 'name' => 'Samoa'],
            ['iso' => 'SM', 'name' => 'San Marino'],
            ['iso' => 'ST', 'name' => 'Sao Tome and Principe'],
            ['iso' => 'SA', 'name' => 'Saudi Arabia'],
            ['iso' => 'SN', 'name' => 'Senegal'],
            ['iso' => 'RS', 'name' => 'Serbia'],
            ['iso' => 'SC', 'name' => 'Seychelles'],
            ['iso' => 'SL', 'name' => 'Sierra Leone'],
            ['iso' => 'SG', 'name' => 'Singapore'],
            ['iso' => 'SK', 'name' => 'Slovakia'],
            ['iso' => 'SI', 'name' => 'Slovenia'],
            ['iso' => 'SB', 'name' => 'Solomon Islands'],
            ['iso' => 'SO', 'name' => 'Somalia'],
            ['iso' => 'ZA', 'name' => 'South Africa'],
            ['iso' => 'GS', 'name' => 'South Georgia South Sandwich Islands'],
            ['iso' => 'ES', 'name' => 'Spain'],
            ['iso' => 'LK', 'name' => 'Sri Lanka'],
            ['iso' => 'SH', 'name' => 'St. Helena'],
            ['iso' => 'PM', 'name' => 'St. Pierre and Miquelon'],
            ['iso' => 'SD', 'name' => 'Sudan'],
            ['iso' => 'SR', 'name' => 'Suriname'],
            ['iso' => 'SJ', 'name' => 'Svalbarn and Jan Mayen Islands'],
            ['iso' => 'SZ', 'name' => 'Swaziland'],
            ['iso' => 'SE', 'name' => 'Sweden'],
            ['iso' => 'CH', 'name' => 'Switzerland'],
            ['iso' => 'SY', 'name' => 'Syrian Arab Republic'],
            ['iso' => 'TW', 'name' => 'Taiwan'],
            ['iso' => 'TJ', 'name' => 'Tajikistan'],
            ['iso' => 'TZ', 'name' => 'Tanzania, United Republic of'],
            ['iso' => 'TH', 'name' => 'Thailand'],
            ['iso' => 'TG', 'name' => 'Togo'],
            ['iso' => 'TK', 'name' => 'Tokelau'],
            ['iso' => 'TO', 'name' => 'Tonga'],
            ['iso' => 'TT', 'name' => 'Trinidad and Tobago'],
            ['iso' => 'TN', 'name' => 'Tunisia'],
            ['iso' => 'TR', 'name' => 'Turkey'],
            ['iso' => 'TM', 'name' => 'Turkmenistan'],
            ['iso' => 'TC', 'name' => 'Turks and Caicos Islands'],
            ['iso' => 'TV', 'name' => 'Tuvalu'],
            ['iso' => 'UG', 'name' => 'Uganda'],
            ['iso' => 'UA', 'name' => 'Ukraine'],
            ['iso' => 'AE', 'name' => 'United Arab Emirates'],
            ['iso' => 'GB', 'name' => 'United Kingdom'],
            ['iso' => 'UM', 'name' => 'United States minor outlying islands'],
            ['iso' => 'UY', 'name' => 'Uruguay'],
            ['iso' => 'UZ', 'name' => 'Uzbekistan'],
            ['iso' => 'VU', 'name' => 'Vanuatu'],
            ['iso' => 'VA', 'name' => 'Vatican City State'],
            ['iso' => 'VE', 'name' => 'Venezuela'],
            ['iso' => 'VN', 'name' => 'Vietnam'],
            ['iso' => 'VG', 'name' => 'Virgin Islands (British)'],
            ['iso' => 'VI', 'name' => 'Virgin Islands (U.S.)'],
            ['iso' => 'WF', 'name' => 'Wallis and Futuna Islands'],
            ['iso' => 'EH', 'name' => 'Western Sahara'],
            ['iso' => 'YE', 'name' => 'Yemen'],
            ['iso' => 'YU', 'name' => 'Yugoslavia'],
            ['iso' => 'ZR', 'name' => 'Zaire'],
            ['iso' => 'ZM', 'name' => 'Zambia'],
            ['iso' => 'ZW', 'name' => 'Zimbabwe'],
        ];

        foreach ($countries as $country) {
            $item = new Country();
            $item->uid = (new Stache())->generateId();
            $item->name = $country['name'];
            $item->iso = $country['iso'];
            $item->save();
        }

        $this->info('Seeding currencies... 💸');

        $currencies = [
            ['iso' =>'AFN' , 'name' => 'Afghani', 'symbol' => '؋' ],
            ['iso' =>'ALL' , 'name' => 'Lek', 'symbol' => 'Lek' ],
            ['iso' =>'ANG' , 'name' => 'Netherlands Antillian Guilder', 'symbol' => 'ƒ' ],
            ['iso' =>'ARS' , 'name' => 'Argentine Peso', 'symbol' => '$' ],
            ['iso' =>'AUD' , 'name' => 'Australian Dollar', 'symbol' => '$' ],
            ['iso' =>'AWG' , 'name' => 'Aruban Guilder', 'symbol' => 'ƒ' ],
            ['iso' =>'AZN' , 'name' => 'Azerbaijanian Manat', 'symbol' => 'ман' ],
            ['iso' =>'BAM' , 'name' => 'Convertible Marks', 'symbol' => 'KM' ],
            ['iso' =>'BBD' , 'name' => 'Barbados Dollar', 'symbol' => '$' ],
            ['iso' =>'BGN' , 'name' => 'Bulgarian Lev', 'symbol' => 'лв' ],
            ['iso' =>'BMD' , 'name' => 'Bermudian Dollar', 'symbol' => '$' ],
            ['iso' =>'BND' , 'name' => 'Brunei Dollar', 'symbol' => '$' ],
            ['iso' =>'BOB' , 'name' => 'BOV Boliviano Mvdol', 'symbol' => '$b' ],
            ['iso' =>'BRL' , 'name' => 'Brazilian Real', 'symbol' => 'R$' ],
            ['iso' =>'BSD' , 'name' => 'Bahamian Dollar', 'symbol' => '$' ],
            ['iso' =>'BWP' , 'name' => 'Pula', 'symbol' => 'P' ],
            ['iso' =>'BYR' , 'name' => 'Belarussian Ruble', 'symbol' => 'p.' ],
            ['iso' =>'BZD' , 'name' => 'Belize Dollar', 'symbol' => 'BZ$' ],
            ['iso' =>'CAD' , 'name' => 'Canadian Dollar', 'symbol' => '$' ],
            ['iso' =>'CHF' , 'name' => 'Swiss Franc', 'symbol' => 'CHF' ],
            ['iso' =>'CLP' , 'name' => 'CLF Chilean Peso Unidades de fomento', 'symbol' => '$' ],
            ['iso' =>'CNY' , 'name' => 'Yuan Renminbi', 'symbol' => '¥' ],
            ['iso' =>'COP' , 'name' => 'COU Colombian Peso Unidad de Valor Real', 'symbol' => '$' ],
            ['iso' =>'CRC' , 'name' => 'Costa Rican Colon', 'symbol' => '₡' ],
            ['iso' =>'CUP' , 'name' => 'CUC Cuban Peso Peso Convertible', 'symbol' => '₱' ],
            ['iso' =>'CZK' , 'name' => 'Czech Koruna', 'symbol' => 'Kč' ],
            ['iso' =>'DKK' , 'name' => 'Danish Krone', 'symbol' => 'kr' ],
            ['iso' =>'DOP' , 'name' => 'Dominican Peso', 'symbol' => 'RD$' ],
            ['iso' =>'EGP' , 'name' => 'Egyptian Pound', 'symbol' => '£' ],
            ['iso' =>'EUR' , 'name' => 'Euro', 'symbol' => '€' ],
            ['iso' =>'FJD' , 'name' => 'Fiji Dollar', 'symbol' => '$' ],
            ['iso' =>'FKP' , 'name' => 'Falkland Islands Pound', 'symbol' => '£' ],
            ['iso' =>'GBP' , 'name' => 'Pound Sterling', 'symbol' => '£' ],
            ['iso' =>'GIP' , 'name' => 'Gibraltar Pound', 'symbol' => '£' ],
            ['iso' =>'GTQ' , 'name' => 'Quetzal', 'symbol' => 'Q' ],
            ['iso' =>'GYD' , 'name' => 'Guyana Dollar', 'symbol' => '$' ],
            ['iso' =>'HKD' , 'name' => 'Hong Kong Dollar', 'symbol' => '$' ],
            ['iso' =>'HNL' , 'name' => 'Lempira', 'symbol' => 'L' ],
            ['iso' =>'HRK' , 'name' => 'Croatian Kuna', 'symbol' => 'kn' ],
            ['iso' =>'HUF' , 'name' => 'Forint', 'symbol' => 'Ft' ],
            ['iso' =>'IDR' , 'name' => 'Rupiah', 'symbol' => 'Rp' ],
            ['iso' =>'ILS' , 'name' => 'New Israeli Sheqel', 'symbol' => '₪' ],
            ['iso' =>'IRR' , 'name' => 'Iranian Rial', 'symbol' => '﷼' ],
            ['iso' =>'ISK' , 'name' => 'Iceland Krona', 'symbol' => 'kr' ],
            ['iso' =>'JMD' , 'name' => 'Jamaican Dollar', 'symbol' => 'J$' ],
            ['iso' =>'JPY' , 'name' => 'Yen', 'symbol' => '¥' ],
            ['iso' =>'KGS' , 'name' => 'Som', 'symbol' => 'лв' ],
            ['iso' =>'KHR' , 'name' => 'Riel', 'symbol' => '៛' ],
            ['iso' =>'KPW' , 'name' => 'North Korean Won', 'symbol' => '₩' ],
            ['iso' =>'KRW' , 'name' => 'Won', 'symbol' => '₩' ],
            ['iso' =>'KYD' , 'name' => 'Cayman Islands Dollar', 'symbol' => '$' ],
            ['iso' =>'KZT' , 'name' => 'Tenge', 'symbol' => 'лв' ],
            ['iso' =>'LAK' , 'name' => 'Kip', 'symbol' => '₭' ],
            ['iso' =>'LBP' , 'name' => 'Lebanese Pound', 'symbol' => '£' ],
            ['iso' =>'LKR' , 'name' => 'Sri Lanka Rupee', 'symbol' => '₨' ],
            ['iso' =>'LRD' , 'name' => 'Liberian Dollar', 'symbol' => '$' ],
            ['iso' =>'LTL' , 'name' => 'Lithuanian Litas', 'symbol' => 'Lt' ],
            ['iso' =>'LVL' , 'name' => 'Latvian Lats', 'symbol' => 'Ls' ],
            ['iso' =>'MKD' , 'name' => 'Denar', 'symbol' => 'ден' ],
            ['iso' =>'MNT' , 'name' => 'Tugrik', 'symbol' => '₮' ],
            ['iso' =>'MUR' , 'name' => 'Mauritius Rupee', 'symbol' => '₨' ],
            ['iso' =>'MXN' , 'name' => 'MXV Mexican Peso Mexican Unidad de Inversion (UDI)', 'symbol' => '$' ],
            ['iso' =>'MYR' , 'name' => 'Malaysian Ringgit', 'symbol' => 'RM' ],
            ['iso' =>'MZN' , 'name' => 'Metical', 'symbol' => 'MT' ],
            ['iso' =>'NGN' , 'name' => 'Naira', 'symbol' => '₦' ],
            ['iso' =>'NIO' , 'name' => 'Cordoba Oro', 'symbol' => 'C$' ],
            ['iso' =>'NOK' , 'name' => 'Norwegian Krone', 'symbol' => 'kr' ],
            ['iso' =>'NPR' , 'name' => 'Nepalese Rupee', 'symbol' => '₨' ],
            ['iso' =>'NZD' , 'name' => 'New Zealand Dollar', 'symbol' => '$' ],
            ['iso' =>'OMR' , 'name' => 'Rial Omani', 'symbol' => '﷼' ],
            ['iso' =>'PAB' , 'name' => 'USD Balboa US Dollar', 'symbol' => 'B/.' ],
            ['iso' =>'PEN' , 'name' => 'Nuevo Sol', 'symbol' => 'S/.' ],
            ['iso' =>'PHP' , 'name' => 'Philippine Peso', 'symbol' => 'Php' ],
            ['iso' =>'PKR' , 'name' => 'Pakistan Rupee', 'symbol' => '₨' ],
            ['iso' =>'PLN' , 'name' => 'Zloty', 'symbol' => 'zł' ],
            ['iso' =>'PYG' , 'name' => 'Guarani', 'symbol' => 'Gs' ],
            ['iso' =>'QAR' , 'name' => 'Qatari Rial', 'symbol' => '﷼' ],
            ['iso' =>'RON' , 'name' => 'New Leu', 'symbol' => 'lei' ],
            ['iso' =>'RSD' , 'name' => 'Serbian Dinar', 'symbol' => 'Дин.' ],
            ['iso' =>'RUB' , 'name' => 'Russian Ruble', 'symbol' => 'руб' ],
            ['iso' =>'SAR' , 'name' => 'Saudi Riyal', 'symbol' => '﷼' ],
            ['iso' =>'SBD' , 'name' => 'Solomon Islands Dollar', 'symbol' => '$' ],
            ['iso' =>'SCR' , 'name' => 'Seychelles Rupee', 'symbol' => '₨' ],
            ['iso' =>'SEK' , 'name' => 'Swedish Krona', 'symbol' => 'kr' ],
            ['iso' =>'SGD' , 'name' => 'Singapore Dollar', 'symbol' => '$' ],
            ['iso' =>'SHP' , 'name' => 'Saint Helena Pound', 'symbol' => '£' ],
            ['iso' =>'SOS' , 'name' => 'Somali Shilling', 'symbol' => 'S' ],
            ['iso' =>'SRD' , 'name' => 'Surinam Dollar', 'symbol' => '$' ],
            ['iso' =>'SVC' , 'name' => 'USD El Salvador Colon US Dollar', 'symbol' => '$' ],
            ['iso' =>'SYP' , 'name' => 'Syrian Pound', 'symbol' => '£' ],
            ['iso' =>'THB' , 'name' => 'Baht', 'symbol' => '฿' ],
            ['iso' =>'TRY' , 'name' => 'Turkish Lira', 'symbol' => 'TL' ],
            ['iso' =>'TTD' , 'name' => 'Trinidad and Tobago Dollar', 'symbol' => 'TT$' ],
            ['iso' =>'TWD' , 'name' => 'New Taiwan Dollar', 'symbol' => 'NT$' ],
            ['iso' =>'UAH' , 'name' => 'Hryvnia', 'symbol' => '₴' ],
            ['iso' =>'USD' , 'name' => 'US Dollar', 'symbol' => '$' ],
            ['iso' =>'UYU' , 'name' => 'UYI Peso Uruguayo Uruguay Peso en Unidades Indexadas', 'symbol' => '$U' ],
            ['iso' =>'UZS' , 'name' => 'Uzbekistan Sum', 'symbol' => 'лв' ],
            ['iso' =>'VEF' , 'name' => 'Bolivar Fuerte', 'symbol' => 'Bs' ],
            ['iso' =>'VND' , 'name' => 'Dong', 'symbol' => '₫' ],
            ['iso' =>'XCD' , 'name' => 'East Caribbean Dollar', 'symbol' => '$' ],
            ['iso' =>'YER' , 'name' => 'Yemeni Rial', 'symbol' => '﷼' ],
            ['iso' =>'ZAR' , 'name' => 'Rand', 'symbol' => 'R' ],
        ];

        foreach ($currencies as $currency) {
            $item = new Currency();
            $item->uid = (new Stache())->generateId();
            $item->iso = $currency['iso'];
            $item->name = $currency['name'];
            $item->symbol = $currency['symbol'];
            $item->primary = false;
            $item->save();

            if ($item->iso === 'USD') {
                $item->primary = true;
                $item->save();
            }
        }

        $this->info('Seeding order statuses');

        $statuses = [
            [
                'name' => 'New',
                'slug' => 'new',
                'description' => 'Default status for new orders',
                'color' => 'green',
                'primary' => true,
            ],
            [
                'name' => 'Shipped',
                'slug' => 'shipped',
                'description' => 'Status for an order that has been shipped.',
                'color' => 'blue',
                'primary' => false,
            ],
        ];

        foreach ($statuses as $status) {
            $item = new OrderStatus();
            $item->uid = (new Stache())->generateId();
            $item->name = $status['name'];
            $item->slug = $status['slug'];
            $item->description = $status['description'];
            $item->color = $status['color'];
            $item->primary = $status['primary'];
            $item->save();
        }

        $this->info('Seeding states...');

        $states = [
            ['name' => 'Alabama', 'abbreviation' => 'AL'],
            ['name' => 'Alaska', 'abbreviation' => 'AK'],
            ['name' => 'Arizona', 'abbreviation' => 'AZ'],
            ['name' => 'Arkansas', 'abbreviation' => 'AR'],
            ['name' => 'California', 'abbreviation' => 'CA'],
            ['name' => 'Colorado', 'abbreviation' => 'CO'],
            ['name' => 'Connecticut', 'abbreviation' => 'CT'],
            ['name' => 'Delaware', 'abbreviation' => 'DE'],
            ['name' => 'District of Columbia', 'abbreviation' => 'DC'],
            ['name' => 'Florida', 'abbreviation' => 'FL'],
            ['name' => 'Georgia', 'abbreviation' => 'GA'],
            ['name' => 'Hawaii', 'abbreviation' => 'HI'],
            ['name' => 'Idaho', 'abbreviation' => 'ID'],
            ['name' => 'Illinois', 'abbreviation' => 'IL'],
            ['name' => 'Indiana', 'abbreviation' => 'IN'],
            ['name' => 'Iowa', 'abbreviation' => 'IA'],
            ['name' => 'Kansas', 'abbreviation' => 'KS'],
            ['name' => 'Kentucky', 'abbreviation' => 'KY'],
            ['name' => 'Louisiana', 'abbreviation' => 'LA'],
            ['name' => 'Maine', 'abbreviation' => 'ME'],
            ['name' => 'Maryland', 'abbreviation' => 'MD'],
            ['name' => 'Massachusetts', 'abbreviation' => 'MA'],
            ['name' => 'Michigan', 'abbreviation' => 'MI'],
            ['name' => 'Minnesota', 'abbreviation' => 'MN'],
            ['name' => 'Mississippi', 'abbreviation' => 'MS'],
            ['name' => 'Missouri', 'abbreviation' => 'MO'],
            ['name' => 'Montana', 'abbreviation' => 'MT'],
            ['name' => 'Nebraska', 'abbreviation' => 'NE'],
            ['name' => 'Nevada', 'abbreviation' => 'NV'],
            ['name' => 'New Hampshire', 'abbreviation' => 'NH'],
            ['name' => 'New Jersey', 'abbreviation' => 'NJ'],
            ['name' => 'New Mexico', 'abbreviation' => 'NM'],
            ['name' => 'New York', 'abbreviation' => 'NY'],
            ['name' => 'North Carolina', 'abbreviation' => 'NC'],
            ['name' => 'North Dakota', 'abbreviation' => 'ND'],
            ['name' => 'Ohio', 'abbreviation' => 'OH'],
            ['name' => 'Oklahoma', 'abbreviation' => 'OK'],
            ['name' => 'Oregon', 'abbreviation' => 'OR'],
            ['name' => 'Pennsylvania', 'abbreviation' => 'PA'],
            ['name' => 'Rhode Island', 'abbreviation' => 'RI'],
            ['name' => 'South Carolina', 'abbreviation' => 'SC'],
            ['name' => 'South Dakota', 'abbreviation' => 'SD'],
            ['name' => 'Tennessee', 'abbreviation' => 'TN'],
            ['name' => 'Texas', 'abbreviation' => 'TX'],
            ['name' => 'Utah', 'abbreviation' => 'UT'],
            ['name' => 'Vermont', 'abbreviation' => 'VT'],
            ['name' => 'Virginia', 'abbreviation' => 'VA'],
            ['name' => 'Washington', 'abbreviation' => 'WA'],
            ['name' => 'West Virginia', 'abbreviation' => 'WV'],
            ['name' => 'Wisconsin', 'abbreviation' => 'WI'],
            ['name' => 'Wyoming', 'abbreviation' => 'WY'],
        ];

        foreach ($states as $state) {
            $item = new State();
            $item->uid = (new Stache())->generateId();
            $item->name = $state['name'];
            $item->abbreviation = $state['abbreviation'];
            $item->country_id = (Country::where('iso', 'US')->first())->id;
            $item->save();
        }
    }
}
