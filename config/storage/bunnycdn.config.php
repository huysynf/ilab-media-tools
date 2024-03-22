<?php
// Copyright (c) 2016 Interfacelab LLC. All rights reserved.
//
// Released under the GPLv3 license
// http://www.gnu.org/licenses/gpl-3.0.html
//
// **********************************************************************
// This program is distributed in the hope that it will be useful, but
// WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
// **********************************************************************

if (!defined('ABSPATH')) { header('Location: /'); die; }

return [
	"ilab-media-cloud-provider-settings" => [
		"title" => "Provider Settings",
		"dynamic" => true,
		"options" => [
			"mcloud-storage-bunnycdn-apikey" => [
				"title" => "API Key",
				"description" => "The API Key for your Bunny CDN storage zone.",
				"display-order" => 1,
				"type" => "password",
			],
			"mcloud-storage-bunnycdn-storage-zone" => [
				"title" => "Storage Zone",
				"description" => "The name of your storage zone.",
				"display-order" => 2,
				"type" => "text-field",
			],
			"mcloud-storage-bunnycdn-pull-zone" => [
				"title" => "Pull Zone URL",
				"description" => "The full url, including the http/https part, of your pull zone for your storage zone.  Usually something like <code>https://XXXX.b-cdn.net</code>",
				"display-order" => 3,
				"type" => "text-field",
			],
			"mcloud-storage-bunnycdn-region" => [
				"title" => "Region",
				"description" => "The region that your storage zone is in.",
				"display-order" => 11,
				"type" => "select",
				"options" => [
					'jo' => 'AF: Amman, JO',
					'eg2' => 'AF: Cairo 2, EG',
					'eg' => 'AF: Cairo, EG',
					'ct' => 'AF: Cape Town, SA',
					'jh' => 'AF: Johannesburg, ZA',
					'ng' => 'AF: Lagos, NG',
					'ao' => 'AF: Luanda, AO',
					'ke' => 'AF: Nairobi, KE',
					'tn' => 'AF: Tunis, TN',
					'pk' => 'ASIA: Karachi, PK',
					'tw' => 'ASIA: Taipei, TW',
					'kz' => 'Asia: Almaty, KZ',
					'az' => 'Asia: Baku, AZ',
					'in' => 'Asia: Bangalore, IN',
					'th' => 'Asia: Bangkok, TH',
					'kg' => 'Asia: Bishkek, KG',
					'cen' => 'Asia: Chennai, IN',
					'bd' => 'Asia: Dhaka, BD',
					'vn' => 'Asia: Ho Chi Minh, VN',
					'hk' => 'Asia: Hong Kong, HK',
					'tr' => 'Asia: Istanbul, TR',
					'id' => 'Asia: Jakarta, ID',
					'np' => 'Asia: Kathmandu, NP',
					'ccu' => 'Asia: Kolkata, IN',
					'my' => 'Asia: Kuala Lumpur, MY',
					'ph' => 'Asia: Manila, PH',
					'mu' => 'Asia: Mumbai, IN',
					'nd' => 'Asia: New Delhi, IN',
					'cy' => 'Asia: Nicosia, CY',
					'pp' => 'Asia: Phnom Penh, KH',
					'kr' => 'Asia: Seoul, KR',
					'sg2' => 'Asia: Singapore 2, SG',
					'sg' => 'Asia: Singapore, SG',
					'geo' => 'Asia: Tbilisi, GE',
					'isr' => 'Asia: Tel Aviv, IL',
					'jp' => 'Asia: Tokyo, JP',
					'mg' => 'Asia: Ulaanbaatar, MN',
					'rgn' => 'Asia: Yangon, MM',
					'am' => 'Asia: Yerevan, AM',
					'ams' => 'EU: Amsterdam, NL',
					'gr' => 'EU: Athens, GR',
					'rs' => 'EU: Belgrade, RS',
					'sk' => 'EU: Bratislava, SK',
					'bu' => 'EU: Bucharest, RO',
					'hu' => 'EU: Budapest, HU',
					'md' => 'EU: Chisinau, MD',
					'dk' => 'EU: Copenhagen, DK',
					'ie' => 'EU: Dublin, IE',
					'dd' => 'EU: Dusseldorf, DE',
					'de2' => 'EU: Frankfurt 2, DE2',
					'de' => 'EU: Frankfurt, DE',
					'fi' => 'EU: Helsinki, FI',
					'is' => 'EU: Keflavik, IS',
					'kh' => 'EU: Khabarovsk, RU',
					'ky' => 'EU: Krasnoyarsk, RU',
					'ua' => 'EU: Kyiv, UA',
					'pt' => 'EU: Lisbon, PT',
					'lj' => 'EU: Ljubljana, SI',
					'uk' => 'EU: London, UK',
					'lu' => 'EU: Luxembourg, LU',
					'es' => 'EU: Madrid, ES',
					'ms' => 'EU: Marseille, FR',
					'it' => 'EU: Milan, IT',
					'ru' => 'EU: Moscow, RU',
					'ba' => 'EU: Novi Travnik, BA',
					'no' => 'EU: Oslo, NO',
					'fr' => 'EU: Paris, FR',
					'cz' => 'EU: Prague, CZ',
					'lv' => 'EU: Riga, LV',
					'bg' => 'EU: Sofia, BG',
					'se' => 'EU: Stockholm, SE',
					'at' => 'EU: Vienna, AT',
					'at2' => 'EU: Vienna, AT2',
					'lt' => 'EU: Vilnius, LT',
					'pl' => 'EU: Warsaw, PL',
					'hr' => 'EU: Zagreb, HR',
					'ch' => 'EU: Zurich, CH',
					'bs' => 'LATAM: Brasilia, BR',
					'fo' => 'LATAM: Fortaleza, BR',
					'gt' => 'LATAM: Guatemala, GT',
					'mx' => 'LATAM: Mexico City, MX',
					'pa' => 'LATAM: Porto Alegre, BR',
					'pr' => 'LATAM: San Juan, PR',
					'cr' => 'LATAM: San Pedro, CR',
					'bol' => 'LATAM: Sucre, BO',
					'iq2' => 'ME: Baghdad 2, IQ',
					'iq' => 'ME: Baghdad, IQ',
					'bhr' => 'ME: Bahrain, BH',
					'ae' => 'ME: Dubai, AE',
					'fu' => 'ME: Fujairah, UAE',
					'ri' => 'ME: Riyadh, SA',
					'hi' => 'NA:  Honolulu, HI',
					'asb' => 'NA: Ashburn, VA',
					'ga' => 'NA: Atlanta, GA',
					'bo' => 'NA: Boston, MA',
					'clt' => 'NA: Charlotte, NC',
					'il' => 'NA: Chicago, IL',
					'tx' => 'NA: Dallas, TX',
					'den' => 'NA: Denver, CO',
					'hou' => 'NA: Houston, TX',
					'kc' => 'NA: Kansas City, MO',
					'la' => 'NA: Los Angeles, CA',
					'mi' => 'NA: Miami, FL',
					'msp' => 'NA: Minneapolis, MN',
					'mn' => 'NA: Montreal, CA',
					'ny' => 'NA: New York City, NY',
					'og' => 'NA: Ogden, UT',
					'phx' => 'NA: Phoenix, AZ',
					'pb' => 'NA: Pittsburgh, PA',
					'sil' => 'NA: San Jose, CA',
					'wa' => 'NA: Seattle, WA',
					'ca' => 'NA: Toronto, CA',
					'va' => 'NA: Vancouver, CA',
					'adl' => 'OC: Adelaide, AU',
					'auc' => 'OC: Auckland, NZ',
					'brb' => 'OC: Brisbane, AU',
					'gu' => 'OC: Hagatna: GU',
					'mel' => 'OC: Melbourne, AU',
					'per' => 'OC: Perth, AU',
					'syd' => 'OC: Sydney, SYD',
					'co' => 'SA: Bogota, SA',
					'ar' => 'SA: Buenos Aires, AR',
					'cwb' => 'SA: Curitiba, BR',
					'lap' => 'SA: La Paz, BO',
					'pe' => 'SA: Lima, PE',
					'ec' => 'SA: Quito, EC',
					'rj' => 'SA: Rio de Janeiro, BR',
					'ssa' => 'SA: Salvador, BR',
					'cl' => 'SA: Santiago, CL',
					'br' => 'SA: Sao Paulo, BR',
				]
			],
		]
	],
	"ilab-media-cloud-upload-handling" => [
		"title" => "Upload Handling",
		"dynamic" => true,
		"description" => "The following options control how the storage tool handles uploads.",
		"options" => [
		]
	],
	"ilab-media-cloud-signed-urls" => [
		"title" => "Secure URL Settings",
		"description" => "Pre-signed URLs aren't supported with Bunny CDN.",
		"dynamic" => true,
		"options" => [
			"mcloud-storage-bunnycdn-token-auth-key" => [
				"title" => "URL Token Auth Key",
				"description" => "The auth key for signing URLs.",
				"display-order" => 1,
				"type" => "password",
			],
			"mcloud-storage-bunnycdn-signed-matches" => [
				"title" => "Signed URL Patterns",
				"description" => "List of URL wildcard patterns that for the URLs to be signed.  For example, <code>videos/*</code> would mean that any video file that starts with <code>videos/</code> would be signed.  You'll want to be sure that you've set up matching Edge Rules in Bunny CDN dashboard to match.  The rules must <strong>Enable Token Authentication</strong>.",
				"display-order" => 17,
				"type" => "text-area"
			],
		]
	],
];