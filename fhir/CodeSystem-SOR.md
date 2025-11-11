# Sundhedsvæsenets Organisationsregister (SOR) - KIP Infrastructure v2.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Sundhedsvæsenets Organisationsregister (SOR)**

## CodeSystem: Sundhedsvæsenets Organisationsregister (SOR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/SOR | *Version*:2.13.0 |
| Active as of 2022-09-06 | *Computable Name*:SOR |

 
Sundhedsvæsenets OrganisationsregisterR (SOR) - Udvalgte koder i RKKP. 

 This Code system is referenced in the content logical definition of the following value sets: 

* [AfdelingDandem](ValueSet-AfdelingDandem.md)
* [SORAfdelingerDNSL](ValueSet-SORAfdelingerDNSL.md)
* [SORAfdelingerHaema](ValueSet-SORAfdelingerHaema.md)
* [SORAfdelingerUHDNSL](ValueSet-SORAfdelingerUHDNSL.md)
* [SORNeurokirurgiskeAfdelingerDAP](ValueSet-SORNeurokirurgiskeAfdelingerDAP.md)
* [SORNeurologiskeAfdelingerDAP](ValueSet-SORNeurologiskeAfdelingerDAP.md)
* [SOROverflytningRETSPSYK](ValueSet-SOROverflytningRETSPSYK.md)
* [SOROverflytningRETSPSYKHS](ValueSet-SOROverflytningRETSPSYKHS.md)
* [SOROverflytningRETSPSYKMJ](ValueSet-SOROverflytningRETSPSYKMJ.md)
* [SOROverflytningRETSPSYKNJ](ValueSet-SOROverflytningRETSPSYKNJ.md)
* [SOROverflytningRETSPSYKSD](ValueSet-SOROverflytningRETSPSYKSD.md)
* [SOROverflytningRETSPSYKSJ](ValueSet-SOROverflytningRETSPSYKSJ.md)
* [SORTrombolyseenhedDAP](ValueSet-SORTrombolyseenhedDAP.md)
* [SORafdSkema3Duga](ValueSet-SORafdSkema3Duga.md)
* [TransplantationcenterALG](ValueSet-TransplantationcenterALG.md)
* [UdfoerendeLAB](ValueSet-UdfoerendeLAB.md)
* [UndersoendeLAB](ValueSet-UndersoendeLAB.md)

This case-insensitive code system `https://kip.rkkp.dk/fhir/CodeSystem/SOR` provides **a fragment** that includes following codes:



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "SOR",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/SOR",
  "version" : "2.13.0",
  "name" : "SOR",
  "title" : "Sundhedsvæsenets Organisationsregister (SOR)",
  "status" : "active",
  "date" : "2022-09-06T00:00:00+02:00",
  "publisher" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
  "contact" : [
    {
      "name" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://trifork.com"
        },
        {
          "system" : "email",
          "value" : "rbk@trifork.com"
        }
      ]
    }
  ],
  "description" : "Sundhedsvæsenets OrganisationsregisterR (SOR) - Udvalgte koder i RKKP.",
  "caseSensitive" : false,
  "content" : "fragment",
  "concept" : [
    {
      "code" : "223601000016004",
      "display" : "ROS Neurologisk Afd.",
      "definition" : "Region Sjællands Sygehusvæsen - ROS Neurologisk Afd. (Shak: 3800A80)"
    },
    {
      "code" : "239081000016004",
      "display" : "OUH Hæmatologisk Afsnit X (Odense)",
      "definition" : "Odense Universitetshospital - Svendborg - OUH Hæmatologisk Afsnit X (Odense) (Shak: 4202560)"
    },
    {
      "code" : "239981000016003",
      "display" : "OUH Neurokirurgisk Afsnit U (Odense)",
      "definition" : "Odense Universitetshospital - Svendborg - OUH Neurokirurgisk Afsnit U (Odense) (Shak: 4202150)"
    },
    {
      "code" : "240121000016005",
      "display" : "OUH Neurologisk Afsnit N",
      "definition" : "Odense Universitetshospital - Svendborg - OUH Neurologisk Afsnit N (Shak: 4202160)"
    },
    {
      "code" : "244701000016009",
      "display" : "SVS Blodsygdomme Afsnit (Esbjerg)",
      "definition" : "Sydvestjysk Sygehus - SVS Blodsygdomme Afsnit (Esbjerg) (Shak: 5501053)"
    },
    {
      "code" : "245291000016005",
      "display" : "SVS Stroke Afsnit (Esbjerg)",
      "definition" : "Sydvestjysk Sygehus - SVS Stroke Afsnit (Esbjerg) (Shak: 550105B)"
    },
    {
      "code" : "252961000016000",
      "display" : "Operation",
      "definition" : "Rigshospitalet - Operation (Shak: 1301211)"
    },
    {
      "code" : "253081000016000",
      "display" : "Sengeafsnit 2094",
      "definition" : "Rigshospitalet - Sengeafsnit 2094 (Shak: 1301221)"
    },
    {
      "code" : "253121000016002",
      "display" : "Hukommelsesklinikken, N7",
      "definition" : "Rigshospitalet - Hukommelsesklinikken, N7 (Shak: 1301227)"
    },
    {
      "code" : "257721000016006",
      "display" : "Neurologisk afd. akut apopleksi",
      "definition" : "Bispebjerg og Frederiksberg Hospitaler - Neurologisk afd. akut apopleksi (Shak: 1309170)"
    },
    {
      "code" : "265621000016001",
      "display" : "Medicinsk sengeafd.",
      "definition" : "Bornholms Hospital - Medicinsk sengeafd. (Shak: 4001030)"
    },
    {
      "code" : "275981000016003",
      "display" : "Alb Neurologisk afd.",
      "definition" : "Aalborg Universitetshospital - Alb Neurologisk afd. (Shak: 8001191)"
    },
    {
      "code" : "275721000016002",
      "display" : "Alb Hæmatologisk afd.",
      "definition" : "Aalborg Universitetshospital - Alb Hæmatologisk afd. (Shak: 8001101)"
    },
    {
      "code" : "275991000016001",
      "display" : "Alb Neurologisk amb.",
      "definition" : "Aalborg Universitetshospital - Alb Neurologisk amb. (Shak: 8001199)"
    },
    {
      "code" : "276361000016000",
      "display" : "Alb Neurokir. Afd.",
      "definition" : "Aalborg Universitetshospital - Alb Neurokir. Afd. (Shak: 8001311)"
    },
    {
      "code" : "380011000016000",
      "display" : "ROS Hæmatologisk Afd.",
      "definition" : "Region Sjællands Sygehusvæsen - ROS Hæmatologisk Afd.(Shak: 3800A20)"
    },
    {
      "code" : "384851000016002",
      "display" : "SLB Hæmatologisk Afsnit (Vejle)",
      "definition" : "Sygehus Lillebælt - SLB Hæmatologisk Afsnit (Vejle) (Shak: 6008260)"
    },
    {
      "code" : "440051000016002",
      "display" : "Hjerne- og Rygkirurgi",
      "definition" : "Aarhus Universitetshospital - Hjerne- og Rygkirurgi (Shak: 6620131)"
    },
    {
      "code" : "440081000016006",
      "display" : "Neurologisk Sengeafdeling",
      "definition" : "Aarhus Universitetshospital - Neurologisk Sengeafdeling (Shak: 6620151)"
    },
    {
      "code" : "440781000016009",
      "display" : "Blodsygdomme Sengeafsnit",
      "definition" : "Aarhus Universitetshospital - Blodsygdomme Sengeafsnit (Shak: 6620141)"
    },
    {
      "code" : "503321000016003",
      "display" : "SHS Hjerne- og Nervesygdomme Sengeafsnit (Aabenraa)",
      "definition" : "Sygehus Sønderjylland - SHS Hjerne- og Nervesygdomme Sengeafsnit (Aabenraa) (Shak: 5000520)"
    },
    {
      "code" : "588351000016004",
      "display" : "Neurologisk Kl. senge GLO",
      "definition" : "Rigshospitalet - Neurologisk Kl. senge GLO (Shak: 130122B)"
    },
    {
      "code" : "637201000016005",
      "display" : "SLB Hjerne- og Nervesygdomme Senge (Kolding)",
      "definition" : "Sygehus Lillebælt - SLB Hjerne- og Nervesygdomme Senge (Kolding) (Shak: 6007320)"
    },
    {
      "code" : "900651000016000",
      "display" : "Klinik for Blodsygdomme Gødstrup - RHG",
      "definition" : "Regionshospitalet Gødstrup - Klinik for Blodsygdomme Gødstrup - RHG (Shak: 664038K)"
    },
    {
      "code" : "900791000016001",
      "display" : "Neurologisk Afsnit Gødstrup - RHG",
      "definition" : "Regionshospitalet Gødstrup - Neurologisk Afsnit Gødstrup - RHG (Shak: 6640401)"
    },
    {
      "code" : "911061000016003",
      "display" : "Alb Demensenheden, RN",
      "definition" : "Aalborg Universitetshospital - Alb Demensenheden, RN (Shak: 800119D)"
    },
    {
      "code" : "926731000016006",
      "display" : "Blodsygdomme L, Senge",
      "definition" : "Rigshospitalet - Blodsygdomme L, Senge (Shak: 1301101)"
    },
    {
      "code" : "1095041000016007",
      "display" : "SHS Blodsygdomme Ambulatorium (Sønderborg)",
      "definition" : "Sygehus Sønderjylland - SHS Blodsygdomme Ambulatorium (Sønderborg) (Shak: 500061A)"
    },
    {
      "code" : "1125141000016005",
      "display" : "Neurologisk Stroke Klinik Gødstrup - RHG",
      "definition" : "Regionshospitalet Gødstrup - Neurologisk Stroke Klinik Gødstrup - RHG (Shak: 664040I)"
    },
    {
      "code" : "1060711000016001",
      "display" : "TM Psyk Amb Thy-Mors Psykose",
      "definition" : "TM Psyk Amb Thy-Mors Psykose"
    },
    {
      "code" : "1060741000016000",
      "display" : "TM Psyk Amb Thy-Mors Bosted",
      "definition" : "TM Psyk Amb Thy-Mors Bosted"
    },
    {
      "code" : "1066921000016005",
      "display" : "Frh Psyk Amb Frederikshavn Psykose",
      "definition" : "Frh Psyk Amb Frederikshavn Psykose"
    },
    {
      "code" : "1199951000016004",
      "display" : "ADA Klinik for Depression - AUH",
      "definition" : "ADA Klinik for Depression - AUH"
    },
    {
      "code" : "1200011000016005",
      "display" : "ADA Klinik for Bipolar Sygdom - AUH",
      "definition" : "Psykiatrien Region Midtjylland - ADA Klinik for Bipolar Sygdom - AUH"
    },
    {
      "code" : "1223721000016002",
      "display" : "RPG Enhed for Retspsykiatri – Gødstrup",
      "definition" : "RPG Enhed for Retspsykiatri – Gødstrup"
    },
    {
      "code" : "1223761000016008",
      "display" : "RPG Team for Retspsykiatri - Gødstrup",
      "definition" : "RPG Team for Retspsykiatri - Gødstrup"
    },
    {
      "code" : "235611000016000",
      "display" : "Sjælland",
      "definition" : "Sjælland"
    },
    {
      "code" : "235631000016006",
      "display" : "Psykiatri ØST Overafd. 01",
      "definition" : "Psykiatri ØST Overafd. 01"
    },
    {
      "code" : "235901000016009",
      "display" : "Psykiatri ØST Overafd. 05",
      "definition" : "Psykiatri ØST Overafd. 05"
    },
    {
      "code" : "236121000016006",
      "display" : "Psykiatri VEST Overafd. 10",
      "definition" : "Psykiatri VEST Overafd. 10"
    },
    {
      "code" : "236351000016001",
      "display" : "Psykiatri VEST Overafd. 15 ",
      "definition" : "Psykiatri VEST Overafd. 15"
    },
    {
      "code" : "236831000016003",
      "display" : "Psykiatri SYD Overafd. 25",
      "definition" : "Psykiatri SYD Overafd. 25"
    },
    {
      "code" : "237021000016009",
      "display" : "Afdeling For Retspsykiatri - Ledelse",
      "definition" : "Region Sjællands Sygehusvæsen - Afdeling For Retspsykiatri - Ledelse"
    },
    {
      "code" : "237031000016006",
      "display" : "PSL Retspsykiatri",
      "definition" : "PSL Retspsykiatri"
    },
    {
      "code" : "237041000016004",
      "display" : "PSL Retspsykiatrisk Afd.",
      "definition" : "Region Sjællands Sygehusvæsen - PSL Retspsykiatrisk Afd."
    },
    {
      "code" : "237131000016005",
      "display" : "PSL Sikringsafd. ",
      "definition" : "PSL Sikringsafd. "
    },
    {
      "code" : "243921000016002",
      "display" : "PSY Retspsykiatrisk afdeling (Middelfart)",
      "definition" : "Psykiatrien Region Syddanmark - PSY Retspsykiatrisk afdeling (Middelfart)"
    },
    {
      "code" : "243951000016005",
      "display" : "PSY Retspsykiatrisk Ambulatorium (Middelfart)",
      "definition" : "Psykiatrien Region Syddanmark - PSY Retspsykiatrisk Ambulatorium (Middelfart)"
    },
    {
      "code" : "261341000016001",
      "display" : "Psyk. Center Amager, overafd.",
      "definition" : "Region Hovedstadens Psykiatri - Psyk. Center Amager, overafd."
    },
    {
      "code" : "261431000016003",
      "display" : "Børne- og Ungdomspsykiatrisk overafdeling, Bispebjerg, B1",
      "definition" : "Region Hovedstadens Psykiatri - Børne- og Ungdomspsykiatrisk overafdeling, Bispebjerg, B1"
    },
    {
      "code" : "261501000016006",
      "display" : "Psyk. Center København, overafd. N, Nørrebro-afdelingen",
      "definition" : "Region Hovedstadens Psykiatri - Psyk. Center København, overafd. N,  Nørrebro-afdelingen"
    },
    {
      "code" : "262181000016004",
      "display" : "Psyk. Center Sct. Hans, Retspsyk. overafd. R",
      "definition" : "Region Hovedstadens Psykiatri - Psyk. Center Sct. Hans, Retspsyk. overafd. R"
    },
    {
      "code" : "262191000016002",
      "display" : "Sct. Hans, Retspsykiatrisk sengeafd. R",
      "definition" : "Sct. Hans, Retspsykiatrisk sengeafd. R"
    },
    {
      "code" : "262221000016007",
      "display" : "Psyk. Center Sct. Hans, overafd. M",
      "definition" : "Region Hovedstadens Psykiatri - Psyk. Center Sct. Hans, overafd. M"
    },
    {
      "code" : "262391000016004",
      "display" : "Psyk. Center Ballerup, overafd. Ballerup",
      "definition" : "Region Hovedstadens Psykiatri - Psyk. Center Ballerup, overafd. Ballerup"
    },
    {
      "code" : "262511000016000",
      "display" : "Psyk. Center Nordsjælland, overafd.",
      "definition" : "Region Hovedstadens Psykiatri - Psyk. Center Nordsjælland, overafd."
    },
    {
      "code" : "262671000016009",
      "display" : "Psyk. Center Glostrup, overafd.",
      "definition" : "Region Hovedstadens Psykiatri - Psyk. Center Glostrup, overafd."
    },
    {
      "code" : "262681000016006",
      "display" : "PCGL, Psyk. sengeafd.",
      "definition" : "Region Hovedstadens Psykiatri - PCGL, Psyk. sengeafd."
    },
    {
      "code" : "278121000016009",
      "display" : "PS Almenpsykiatrisk Afdeling, Nord",
      "definition" : "Psykiatrien Nordjylland - PS Klinik Nord"
    },
    {
      "code" : "278131000016006",
      "display" : "PS Almenpsykiatrisk, Nord Sengeafsnit",
      "definition" : "PS Almenpsykiatrisk, Nord Sengeafsnit"
    },
    {
      "code" : "278191000016007",
      "display" : "PS Ældrepsykiatrisk Afdeling",
      "definition" : "PS Ældrepsykiatrisk Afdeling"
    },
    {
      "code" : "278201000016009",
      "display" : "PS Ældrepsykiatrisk Sengeafsnit",
      "definition" : "PS Ældrepsykiatrisk Sengeafsnit"
    },
    {
      "code" : "278211000016006",
      "display" : "PS Ældrepsykiatrisk Ambulatorier",
      "definition" : "PS Ældrepsykiatrisk Ambulatorier"
    },
    {
      "code" : "278221000016002",
      "display" : "PS Retspsykiatrisk Afdeling",
      "definition" : "Psykiatrien Nordjylland - PS Retspsykiatri"
    },
    {
      "code" : "278231000016000",
      "display" : "PS Retspsykiatrisk Sengeafsnit",
      "definition" : "Psykiatrien Nordjylland - PS Klinik Syd Retspsykiatri"
    },
    {
      "code" : "278291000016004",
      "display" : "PS Almenpsykiatrisk Afdeling, Syd",
      "definition" : "Psykiatrien Nordjylland  - PS Klinik Syd"
    },
    {
      "code" : "278301000016000",
      "display" : "PS Almenpsykiatrisk, Syd Sengeafsnit",
      "definition" : "PS Almenpsykiatrisk, Syd Sengeafsnit"
    },
    {
      "code" : "278321000016007",
      "display" : "PS Almenpsykiatrisk, Syd Ambulatorier",
      "definition" : "Psykiatrien Nordjylland - PS Klinik Syd Ambulatorier"
    },
    {
      "code" : "282651000016004",
      "display" : "Psyk. Center Bornholm",
      "definition" : "Region Hovedstadens Psykiatri - Psyk. Center Bornholm"
    },
    {
      "code" : "339031000016008",
      "display" : "Børne- og Ungdomspsyk. Center Bispebjerg, B",
      "definition" : "Region Hovedstadens Psykiatri - Børne- og Ungdomspsyk. Center Bispebjerg, B"
    },
    {
      "code" : "366121000016007",
      "display" : "Frh Psyk Amb Frederikshavn",
      "definition" : "Frh Psyk Amb Frederikshavn"
    },
    {
      "code" : "366381000016006",
      "display" : "Alb Amb Personlighedsforstyrrelser",
      "definition" : "Alb Amb Personlighedsforstyrrelser"
    },
    {
      "code" : "366391000016008",
      "display" : "Alb Amb Angst og Tvangssygdom",
      "definition" : "Alb Amb Angst og Tvangssygdom"
    },
    {
      "code" : "366411000016008",
      "display" : "Alb Amb Psykose specialafsnit",
      "definition" : "Alb Amb Psykose specialafsnit"
    },
    {
      "code" : "366431000016002",
      "display" : "Alb Amb for Depression",
      "definition" : "Alb Amb for Depression"
    },
    {
      "code" : "387101000016000",
      "display" : "PVE Ambulant psykose enhed - vest",
      "definition" : "Psykiatrien Region Midtjylland - PVE Ambulant psykose enhed - vest"
    },
    {
      "code" : "391151000016008",
      "display" : "PMI Regionspsykiatrien Midt",
      "definition" : "Psykiatrien Region Midtjylland - PMI Regionspsykiatrien Midt"
    },
    {
      "code" : "391171000016001",
      "display" : "Regionspsykiatrien Randers",
      "definition" : "Regionspsykiatrien Randers"
    },
    {
      "code" : "438091000016005",
      "display" : "Alb Amb Unge med Skizofreni",
      "definition" : "Alb Amb Unge med Skizofreni"
    },
    {
      "code" : "454401000016004",
      "display" : "PMI Sengeafsnit - Regionspsykiatri Midt",
      "definition" : "Psykiatrien Region Midtjylland - PMI Sengeafsnit - Regionspsykiatri Midt"
    },
    {
      "code" : "454411000016002",
      "display" : "PMI Klinik for depression og mani - Midt",
      "definition" : "PMI Klinik for depression og mani - Midt"
    },
    {
      "code" : "454451000016003",
      "display" : "PMI Klinik for psykoser - Midt",
      "definition" : "Psykiatrien Region Midtjylland - PMI Klinik for psykoser - Midt"
    },
    {
      "code" : "454461000016000",
      "display" : "PMI Klinik for retspsykiatri - Midt",
      "definition" : "Psykiatrien Region Midtjylland - PMI Klinik for retspsykiatri - Midt"
    },
    {
      "code" : "456481000016000",
      "display" : "Brø Amb Personlighedspsykiatri"
    },
    {
      "code" : "463791000016008",
      "display" : "PMI Sengeafsnit retspsykiatri - Viborg",
      "definition" : "Psykiatrien Region Midtjylland - PMI Sengeafsnit retspsykiatri - Viborg"
    },
    {
      "code" : "479221000016009",
      "display" : "PHO O1 Sengeafsnit Regionspsykiatri - Horsens",
      "definition" : "Psykiatrien Region Midtjylland - PHO O1 Sengeafsnit Regionspsykiatri - Horsens"
    },
    {
      "code" : "486741000016006",
      "display" : "PRA Psykiatrisk Klinik 2 - Randers",
      "definition" : "Psykiatrien Region Midtjylland - PRA Psykiatrisk Klinik 2 - Randers"
    },
    {
      "code" : "495051000016001",
      "display" : "Thy Psyk Amb Thy-Mors",
      "definition" : "Thy Psyk Amb Thy-Mors"
    },
    {
      "code" : "508591000016003",
      "display" : "Alb Amb for ADHD Voksne",
      "definition" : "Alb Amb for ADHD Voksne"
    },
    {
      "code" : "576481000016005",
      "display" : "Brø Amb Psyk Udviklingshæmmede",
      "definition" : "Brø Amb Psyk Udviklingshæmmede"
    },
    {
      "code" : "603271000016004",
      "display" : "PMI R1 Sengeafsnit retspsykiatri - Viborg",
      "definition" : "PMI R1 Sengeafsnit retspsykiatri - Viborg"
    },
    {
      "code" : "603281000016002",
      "display" : "PMI R2 Sengeafsnit retspsykiatri - Viborg",
      "definition" : "PMI R2 Sengeafsnit retspsykiatri - Viborg"
    },
    {
      "code" : "603291000016000",
      "display" : "PHO O1 Akutsengeafsnit - Horsens",
      "definition" : "Psykiatrien Region Midtjylland - PHO O1 Akutsengeafsnit - Horsens"
    },
    {
      "code" : "625211000016002",
      "display" : "Brø Amb Angst og Tvangssygdom",
      "definition" : "Brø Amb Angst og Tvangssygdom"
    },
    {
      "code" : "685871000016000",
      "display" : "Alb Amb for Bipolar Lidelse",
      "definition" : "Alb Amb for Bipolar Lidelse"
    },
    {
      "code" : "687931000016002",
      "display" : "PMI Særlige Pladser - Viborg",
      "definition" : "PMI Særlige Pladser - Viborg"
    },
    {
      "code" : "694221000016003",
      "display" : "Retspsykiatrisk Afdeling - AUH",
      "definition" : "Psykiatrien Region Midtjylland - Retspsykiatrisk Afdeling - AUH"
    },
    {
      "code" : "694231000016001",
      "display" : "RET Psykiatri Sengeafsnit for Retspsykiatri - AUH",
      "definition" : "Psykiatrien Region Midtjylland - RET Psykiatri Sengeafsnit for Retspsykiatri  - AUH"
    },
    {
      "code" : "694251000016006",
      "display" : "RET Retspsykiatrisk Klinik - AUH",
      "definition" : "Psykiatrien Region Midtjylland - RET Retspsykiatrisk Klinik - AUH"
    },
    {
      "code" : "694271000016004",
      "display" : "RET Retspsykiatri - Sengeafsnit 1 - AUH",
      "definition" : "RET Retspsykiatri - Sengeafsnit 1 - AUH"
    },
    {
      "code" : "694281000016002",
      "display" : "RET Retspsykiatri - Sengeafsnit 2 - AUH",
      "definition" : "RET Retspsykiatri - Sengeafsnit 2 - AUH"
    },
    {
      "code" : "694291000016000",
      "display" : "RET Retspsykiatri - Sengeafsnit 3 - AUH",
      "definition" : "RET Retspsykiatri - Sengeafsnit 3 - AUH"
    },
    {
      "code" : "694301000016001",
      "display" : "RET Retspsykiatri - Sengeafsnit 4 - AUH",
      "definition" : "RET Retspsykiatri - Sengeafsnit 4 - AUH"
    },
    {
      "code" : "694331000016005",
      "display" : "RET Retspsykiatrisk Opsøgende Team - AUH",
      "definition" : "RET Retspsykiatrisk Opsøgende Team - AUH"
    },
    {
      "code" : "694351000016000",
      "display" : "Afdeling for Depression og Angst - AUH",
      "definition" : "Afdeling for Depression og Angst - AUH"
    },
    {
      "code" : "694441000016007",
      "display" : "BUA Psykiatrisk Klinik for Unge",
      "definition" : "BUA Psykiatrisk Klinik for Unge"
    },
    {
      "code" : "694461000016008",
      "display" : "BUA Børne- og Ungdomspsykiatri - Sengeafsnit",
      "definition" : "BUA Børne- og Ungdomspsykiatri - Sengeafsnit"
    },
    {
      "code" : "694681000016004",
      "display" : "BUA Klinik for Mentalobservation - AUH",
      "definition" : "Psykiatrien Region Midtjylland - BUA Klinik for Mentalobservation - AUH"
    },
    {
      "code" : "694841000016009",
      "display" : "ADA Klinik for Personlighedsforstyrrelser - AUH",
      "definition" : "Psykiatrien Region Midtjylland - ADA Klinik for Personlighedsforstyrrelser - AUH"
    },
    {
      "code" : "694891000016001",
      "display" : "ADA Klinik for Angst og OCD - AUH",
      "definition" : "Psykiatrien Region Midtjylland - ADA Klinik for Angst og OCD - AUH"
    },
    {
      "code" : "694901000016000",
      "display" : "ADA Klinik for PTSD og Transkulturel Psykiatri - AUH",
      "definition" : "Psykiatrien Region Midtjylland - ADA Klinik for PTSD og Transkulturel Psykiatri - AUH"
    },
    {
      "code" : "695161000016000",
      "display" : "AFP Psykiatri Sengeafsnit for Psykoser - AUH",
      "definition" : "Psykiatrien Region Midtjylland - AFP Psykiatri Sengeafsnit for Psykoser - AUH"
    },
    {
      "code" : "695251000016007",
      "display" : "AFP Psykiatrisk Klinik 1 - AUH",
      "definition" : "Psykiatrien Region Midtjylland - AFP Psykiatrisk Klinik 1 - AUH"
    },
    {
      "code" : "695281000016003",
      "display" : "AFP Psykiatrisk Klinik 2 - AUH",
      "definition" : "Psykiatrien Region Midtjylland - AFP Psykiatrisk Klinik 2 - AUH"
    },
    {
      "code" : "697531000016008",
      "display" : "Psykiatri SYD Overafd. 27",
      "definition" : "Psykiatri SYD Overafd. 27"
    },
    {
      "code" : "698861000016003",
      "display" : "Brø Amb Midtv. Affektiv",
      "definition" : "Psykiatrien Nordjylland - Brø Amb Midtv. Affektiv"
    },
    {
      "code" : "884321000016003",
      "display" : "PMI Team for psykoser - Silkeborg",
      "definition" : "PMI Team for psykoser - Silkeborg"
    },
    {
      "code" : "884331000016001",
      "display" : "PMI Klinik for retspsykiatri - Viborg-Skive",
      "definition" : "PMI Klinik for retspsykiatri - Viborg-Skive"
    },
    {
      "code" : "886951000016001",
      "display" : "Psyk. Center Nordsjælland, overafd. - N4",
      "definition" : "Region Hovedstadens Psykiatri - Psyk. Center Nordsjælland, overafd. - N4"
    },
    {
      "code" : "983001000016004",
      "display" : "Alm Amb Psykose Aalborg Nord",
      "definition" : "Alm Amb Psykose Aalborg Nord"
    },
    {
      "code" : "983011000016002",
      "display" : "Alb Amb Psykose Aalborg Centrum",
      "definition" : "Alb Amb Psykose Aalborg Centrum"
    },
    {
      "code" : "983021000016006",
      "display" : "Alb Amb Psykose Aalborg SydØst",
      "definition" : "Alb Amb Psykose Aalborg SydØst"
    },
    {
      "code" : "983031000016008",
      "display" : "Alb Amb Psykose Himmerland",
      "definition" : "Alb Amb Psykose Himmerland"
    },
    {
      "code" : "983041000016001",
      "display" : "Brø Amb Midtv. Hjør. Psykose",
      "definition" : "Psykiatrien Nordjylland - Brø Amb Midtv. Hjør. Psykose"
    },
    {
      "code" : "983051000016003",
      "display" : "Brø Amb Midtv. Brøn. Psykose",
      "definition" : "Psykiatrien Nordjylland - Brø Amb Midtv. Brøn. Psykose"
    },
    {
      "code" : "986621000016007",
      "display" : "Regionspsykiatrien Gødstrup",
      "definition" : "Regionspsykiatrien Gødstrup"
    },
    {
      "code" : "986631000016009",
      "display" : "RPG Sengeafdeling Regionpsykiatrien - Gødstrup",
      "definition" : "RPG Sengeafdeling Regionpsykiatrien - Gødstrup"
    },
    {
      "code" : "479201000016002",
      "display" : "PHO Klinik 1 for Psykiatriske Lidelser - Horsens",
      "definition" : "PHO Klinik 1 for Psykiatriske Lidelser - Horsens"
    },
    {
      "code" : "934471000016008",
      "display" : "PHO Team for Retspsykiatri - Horsens",
      "definition" : "PHO Team for Retspsykiatri - Horsens"
    },
    {
      "code" : "391161000016006",
      "display" : "PHO Regionspsykiatrien Horsens",
      "definition" : "PHO Regionspsykiatrien Horsens"
    },
    {
      "code" : "884181000016000",
      "display" : "PMI Team for OCD og Angstlidelser - Silkeborg",
      "definition" : "PMI Team for OCD og Angstlidelser - Silkeborg"
    },
    {
      "code" : "884201000016001",
      "display" : "PMI Team for depression og mani - Silkeborg",
      "definition" : "PMI Team for depression og mani - Silkeborg"
    },
    {
      "code" : "884301000016005",
      "display" : "PMI ADHD og Rusmiddelteam - Silkeborg",
      "definition" : "PMI ADHD og Rusmiddelteam - Silkeborg"
    },
    {
      "code" : "695151000016003",
      "display" : "Afdeling for Psykoser - AUH",
      "definition" : "Afdeling for Psykoser - AUH"
    },
    {
      "code" : "989231000016003",
      "display" : "Hillerød, HI Endokrinologisk og Nefrologisk Overafd. (989231000016003)"
    },
    {
      "code" : "264781000016005",
      "display" : "Herlev, Nefrologisk overafd. B (264781000016005)"
    },
    {
      "code" : "252441000016006",
      "display" : "Rigshospitalet, Nefrologisk Klinik, P (252441000016006)"
    },
    {
      "code" : "265611000016005",
      "display" : "Rønne, Medicinsk overafd. (265611000016005)"
    },
    {
      "code" : "227011000016003",
      "display" : "Holbæk, HOL Medicin – Overafdeling (227011000016003)"
    },
    {
      "code" : "223181000016000",
      "display" : "Roskilde og Nykøbing Falster Sygehus, ROS Medicin – Overafdeling (223181000016000)"
    },
    {
      "code" : "239831000016009",
      "display" : "OUH Nyremedicinsk Afdeling Y (239831000016009)"
    },
    {
      "code" : "246501000016005",
      "display" : "Esbjerg, SVS Medicinsk Område (246501000016005)"
    },
    {
      "code" : "247441000016006",
      "display" : "Fredericia, SLB Medicinske Sygdomme (Kolding) (247441000016006)"
    },
    {
      "code" : "504361000016006",
      "display" : "Sønderborg, SHS Diabetes, Hormon- og Nyresygdomme (504361000016006)"
    },
    {
      "code" : "453111000016005",
      "display" : "Aarhus/Skejby, Nyresygdomme Overafdeling (453111000016005)"
    },
    {
      "code" : "900231000016007",
      "display" : "Holstebro, Gødstrup, Medicinsk Afdeling – RHG (900231000016007)"
    },
    {
      "code" : "507561000016008",
      "display" : "Viborg, Klinik for Nyresygdomme Viborg (507561000016008)"
    },
    {
      "code" : "275931000016002",
      "display" : "Aalborg, Nyremedicinsk område (275931000016002)"
    },
    {
      "code" : "590021000016006",
      "display" : "Amager og Hvidovre Hospital, Gynækologisk sengeafdeling"
    },
    {
      "code" : "590371000016007",
      "display" : "Amager og Hvidovre Hospital, Gynækologisk dagkirurgisk afsnit"
    },
    {
      "code" : "265661000016007",
      "display" : "Bornholms Hospital, Kirurgisk sengeafd."
    },
    {
      "code" : "264671000016001",
      "display" : "Herlev og gentofte Hospital, Gynækologisk afdeling G-1"
    },
    {
      "code" : "264711000016000",
      "display" : "Herlev og gentofte Hospital, Gynækologisk ambulatorium G-1a"
    },
    {
      "code" : "219021000016009",
      "display" : "Nordsjællands Hospital, HI Gynækologisk Afd., senge"
    },
    {
      "code" : "218901000016007",
      "display" : "Nordsjællands Hospital, HI Gynækologisk Afd., amb."
    },
    {
      "code" : "976201000016009",
      "display" : "Rigshospitalet, Gynækologisk Klinik GYN, heldøgn"
    },
    {
      "code" : "226461000016007",
      "display" : "Holbæk Gyn afd., HOL Gynækologisk Afd."
    },
    {
      "code" : "226531000016003",
      "display" : "Holbæk Gyn afd., HOL Gynækologisk Amb."
    },
    {
      "code" : "229981000016001",
      "display" : "Nykøbing F, NFS Gynækologisk Afd."
    },
    {
      "code" : "230071000016009",
      "display" : "Nykøbing F, NFS Gynækologisk Amb."
    },
    {
      "code" : "222641000016008",
      "display" : "Roskilde, ROS Gynækologisk Afd."
    },
    {
      "code" : "222751000016004",
      "display" : "Roskilde Gyn afd."
    },
    {
      "code" : "229441000016002",
      "display" : "Slagelse, SLA Gynækologisk Afd."
    },
    {
      "code" : "229591000016006",
      "display" : "Slagelse, SLA Gynækologisk Amb."
    },
    {
      "code" : "246971000016008",
      "display" : "Kolding Sygehus, SLB Kvindesygdomme og Fødsler (Kolding)"
    },
    {
      "code" : "246931000016006",
      "display" : "Kolding Sygehus, SLB Kvindesygdomme Ambulatorium (Kolding)"
    },
    {
      "code" : "238721000016006",
      "display" : "OUH Gynækologisk Afsnit (Odense)"
    },
    {
      "code" : "238741000016001",
      "display" : "OUH Gynækologisk Ambulatorium"
    },
    {
      "code" : "239391000016000",
      "display" : "OUH Kirurgisk Afsnit A"
    },
    {
      "code" : "241141000016008",
      "display" : "OUH Urinvejskirurgisk Ambulatorium L"
    },
    {
      "code" : "501671000016009",
      "display" : "SHS Kvindesygdomme Sengeafsnit (Aabenraa)"
    },
    {
      "code" : "501711000016005",
      "display" : "SHS Kvindesygdomme Dagkirurgi (Sønderborg)"
    },
    {
      "code" : "245971000016004",
      "display" : "SVS Kvindesygdomme Afsnit (Esbjerg)"
    },
    {
      "code" : "245951000016006",
      "display" : "SVS Kvindesygdomme Ambulatorium (Esbjerg)"
    },
    {
      "code" : "453211000016004",
      "display" : "AUH Kvindesygdomme"
    },
    {
      "code" : "453221000016008",
      "display" : "AUH, Dagkirurgi - Kvindesygdomme og Fødsler"
    },
    {
      "code" : "455661000016001",
      "display" : "AUH Urinvejskirurgi"
    },
    {
      "code" : "507481000016002",
      "display" : "Hospitalsenhed Midt, Kvindesygdomme og Fødsler Viborg"
    },
    {
      "code" : "485441000016009",
      "display" : "Hospitalsenhed Midt, Kvindeklinikken Viborg"
    },
    {
      "code" : "899591000016008",
      "display" : "Regionshospitalet Gødstrup, Afsnit for Kvindesygdomme Gødstrup - RHG"
    },
    {
      "code" : "899651000016003",
      "display" : "Regionshospitalet Gødstrup, Klinik for Kvindesygdomme Gødstrup - RHG"
    },
    {
      "code" : "899781000016001",
      "display" : "Regionshospitalet Gødstrup, Kvindesygdomme Ambulant Kirurgi Gødstrup - RHG"
    },
    {
      "code" : "265971000016007",
      "display" : "Regionshospitalet Horsens, Sengeafdeling for Kvindesygdomme og Fødsler"
    },
    {
      "code" : "266001000016005",
      "display" : "Regionshospitalet Horsens, Dagkirurgi, Kvindesygdomme"
    },
    {
      "code" : "271211000016002",
      "display" : "Regionshospitalet Randers, Kvindesygdomme og Fødsler - Randers"
    },
    {
      "code" : "271221000016006",
      "display" : "Regionshospitalet Randers, Kvindesygdomsklinikken - Randers"
    },
    {
      "code" : "275611000016002",
      "display" : "Aalborg Universitetshospital, Alb Gyn.-Obst. Afdeling"
    },
    {
      "code" : "275641000016001",
      "display" : "Aalborg Universitetshospital, Alb Gyn. Ambulatorium"
    },
    {
      "code" : "276431000016003",
      "display" : "Aalborg Universitetshospital, Alb Urologisk afd."
    },
    {
      "code" : "275661000016000",
      "display" : "Aalborg Universitetshospital, Hob Gyn. Ambulatorium Hobro"
    },
    {
      "code" : "274781000016002",
      "display" : "Aalborg Universitetshospital, Thisted, Thy Gyn.-Obst. sengeafd."
    },
    {
      "code" : "277201000016005",
      "display" : "Regionshospital Nordjylland, Hjr Gyn.Obst. Amb."
    },
    {
      "code" : "277161000016004",
      "display" : "Regionshospital Nordjylland, Hjr Gyn.-Obst. Sengeafd."
    },
    {
      "code" : "464271000016003",
      "display" : "Regionshospital Nordjylland, Hjr Dagafsnit for Kvindesygdomme"
    },
    {
      "code" : "606291000016007",
      "display" : "Regionshospital Nordjylland, Hjr Uro-gyn Amb"
    },
    {
      "code" : "1041431000016004",
      "display" : "Adeas Parken"
    },
    {
      "code" : "492011000016005",
      "display" : "Aleris Privathospitaler, Esbjerg"
    },
    {
      "code" : "652991000016006",
      "display" : "Aleris Privathospitaler, Ringsted"
    },
    {
      "code" : "491731000016006",
      "display" : "Aleris Privathospitaler, København"
    },
    {
      "code" : "491911000016003",
      "display" : "Aleris Privathospitaler, Aalborg"
    },
    {
      "code" : "491831000016002",
      "display" : "Aleris Hospitaler, Aarhus, urologi og gynækologi"
    },
    {
      "code" : "302311000016004",
      "display" : "AROS privathospital, beh. Afsnit"
    },
    {
      "code" : "293191000016008",
      "display" : "Capio A/S - Hellerup sengeafsnit"
    },
    {
      "code" : "293271000016004",
      "display" : "Capio A/S - Odense sengeafsnit"
    },
    {
      "code" : "596991000016007",
      "display" : "Capio A/S - Odense ambulatorium"
    },
    {
      "code" : "688881000016009",
      "display" : "CPH Privathospital A/S, kirurgisk afsnit"
    },
    {
      "code" : "299421000016004",
      "display" : "Gråbrødreklinikken, beh. afsnit"
    },
    {
      "code" : "293511000016005",
      "display" : "Privathospitalet Danmark, Charlottenlund"
    },
    {
      "code" : "574681000016001",
      "display" : "Privathospitalet Mølholm Aarhus, Højbjerg beh.afsnit"
    },
    {
      "code" : "300771000016007",
      "display" : "Privathospitalet Mølholm Vejle, beh. afsnit"
    },
    {
      "code" : "298241000016003",
      "display" : "Privathospitalet Møn, Gynækologisk sengeafsnit"
    },
    {
      "code" : "1048581000016009",
      "display" : "Søernes Privathospital, beh.afsnit"
    },
    {
      "code" : "106021000016002",
      "display" : "Aagaard Gynækologiske Klinik"
    },
    {
      "code" : "404261000016009",
      "display" : "Aarhus universitetshospital"
    },
    {
      "code" : "8031000016007",
      "display" : "Rigshospitalet"
    },
    {
      "code" : "682641000016004",
      "display" : "Afdeling for blodprøver og biokemi, Aarhus Universitetshospital"
    },
    {
      "code" : "256631000016003",
      "display" : "Afdeling for Klinisk Biokemi – Blegdamsvej"
    }
  ]
}

```
