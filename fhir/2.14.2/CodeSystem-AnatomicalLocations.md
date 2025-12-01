# Anatomy locations, not specified in classifcations (SKS, etc.) - KIP Infrastructure v2.14.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Anatomy locations, not specified in classifcations (SKS, etc.)**

## CodeSystem: Anatomy locations, not specified in classifcations (SKS, etc.) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/AnatomicalLocations | *Version*:2.14.2 |
| Active as of 2022-06-14 | *Computable Name*:AnatomicalLocations |

 
Anatomy locations, not specified in classifcations (SKS, etc.) 

 This Code system is referenced in the content logical definition of the following value sets: 

* [AnatomiskLokation1](ValueSet-AnatomiskLokation1.md)
* [AnatomiskLokation2](ValueSet-AnatomiskLokation2.md)
* [AnatomiskLokation4](ValueSet-AnatomiskLokation4.md)
* [BrusklaesionPlaceringDKRR](ValueSet-BrusklaesionPlaceringDKRR.md)
* [LedbaandsrekonstruktionDKRR](ValueSet-LedbaandsrekonstruktionDKRR.md)
* [LokationAneurismeSAH](ValueSet-LokationAneurismeSAH.md)
* [OperationerDKRR](ValueSet-OperationerDKRR.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "AnatomicalLocations",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/AnatomicalLocations",
  "version" : "2.14.2",
  "name" : "AnatomicalLocations",
  "title" : "Anatomy locations, not specified in classifcations (SKS, etc.)",
  "status" : "active",
  "date" : "2022-06-14T00:00:00+02:00",
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
  "description" : "Anatomy locations, not specified in classifcations (SKS, etc.)",
  "content" : "complete",
  "count" : 36,
  "concept" : [
    {
      "code" : "acarotistop",
      "display" : "Top of arteria carotis",
      "definition" : "Top of arteria catoris"
    },
    {
      "code" : "acerebellisuperior",
      "display" : "Arteria cerebelli superior",
      "definition" : "Arteria cerebelli superior"
    },
    {
      "code" : "acerebelliantinf",
      "display" : "Arteria cerebelli anterior inferior",
      "definition" : "Arteria cerebelli anterior inferior"
    },
    {
      "code" : "acerebelliposinf",
      "display" : "Arteria cerebelli posterior inferior",
      "definition" : "Arteria cerebelli posterior inferior"
    },
    {
      "code" : "acerebrimedia-acommunicanspos",
      "display" : "Arteria cerebri media =< arteria communicans posterior",
      "definition" : "Arteria cerebri media =< arteria communicans posterior"
    },
    {
      "code" : "ileocolica_centralt",
      "display" : "Ileocolica centralt",
      "definition" : "Ileocolica centralt"
    },
    {
      "code" : "ileocolica_perifert",
      "display" : "Ileocolica perifert",
      "definition" : "Ileocolica perifert"
    },
    {
      "code" : "a_colica_media_centralt",
      "display" : "A. colica media centralt",
      "definition" : "A. colica media centralt"
    },
    {
      "code" : "a_colica_media_hoejre",
      "display" : "Højre gren af a. colica media",
      "definition" : "Højre gren af a. colica media"
    },
    {
      "code" : "a_colica_media_venstre",
      "display" : "Venstre gren af  a. colica media",
      "definition" : "Venstre gren af  a. colica media"
    },
    {
      "code" : "a_mesenterica_inferior",
      "display" : "A. mesenterica inf.",
      "definition" : "A. mesenterica inf."
    },
    {
      "code" : "a_colica_sinistra",
      "display" : "A. colica sin.",
      "definition" : "A. colica sin."
    },
    {
      "code" : "a_mesenterica_inferior_perifert",
      "display" : "A. mesenterica inf perifert",
      "definition" : "A. mesenterica inf perifert"
    },
    {
      "code" : "aa_sigmoideae",
      "display" : "Aa. sigmoideae",
      "definition" : "Aa. sigmoideae"
    },
    {
      "code" : "a_rectalis_superior",
      "display" : "A. rectalis superior",
      "definition" : "A. rectalis superior"
    },
    {
      "code" : "vena_sacralis",
      "display" : "Vena sacralis",
      "definition" : "Vena sacralis / Sakralvene"
    },
    {
      "code" : "gastrocolic_ligament",
      "display" : "Gastrokoliske ligament",
      "definition" : "Gastrokoliske ligament"
    },
    {
      "code" : "adneks",
      "display" : "Adneks",
      "definition" : "Adneks"
    },
    {
      "code" : "lymfeknude_lateral",
      "display" : "Lateralt lymfeknudecompartment på bækken væg",
      "definition" : "Lateralt lymfeknudecompartment på bækken væg"
    },
    {
      "code" : "other",
      "display" : "Other",
      "definition" : "Other"
    },
    {
      "code" : "acl",
      "display" : "ACL",
      "definition" : "ACL"
    },
    {
      "code" : "pcl",
      "display" : "PCL",
      "definition" : "PCL"
    },
    {
      "code" : "mcl",
      "display" : "MCL",
      "definition" : "MCL"
    },
    {
      "code" : "lcl",
      "display" : "LCL",
      "definition" : "LCL"
    },
    {
      "code" : "plc",
      "display" : "PLC",
      "definition" : "PLC"
    },
    {
      "code" : "all",
      "display" : "ALL",
      "definition" : "ALL"
    },
    {
      "code" : "lateral_meniscus",
      "display" : "Lateral meniscus",
      "definition" : "Lateral meniscus / Laterale menisk"
    },
    {
      "code" : "medial_meniscus",
      "display" : "Medial meniscus",
      "definition" : "Medial meniscus / Mediale menisk"
    },
    {
      "code" : "cartilage",
      "display" : "Cartilage",
      "definition" : "Cartilage / Brusk"
    },
    {
      "code" : "Patella_medial",
      "display" : "Patella (mediale facet)",
      "definition" : "Patella (mediale facet)"
    },
    {
      "code" : "Patella_lateral",
      "display" : "Patella (laterale facet)",
      "definition" : "Patella (laterale facet)"
    },
    {
      "code" : "Trochlea_femoris",
      "display" : "Trochlea femoris",
      "definition" : "Trochlea femoris"
    },
    {
      "code" : "Med_femur_kondyl",
      "display" : "Med. femur kondyl",
      "definition" : "Med. femur kondyl"
    },
    {
      "code" : "Med_tibia_plateau",
      "display" : "Med. tibia plateau",
      "definition" : "Med. tibia plateau"
    },
    {
      "code" : "Lat_femur_kondyl",
      "display" : "Lat. femur kondyl",
      "definition" : "Lat. femur kondyl"
    },
    {
      "code" : "Lat_tibia_plateau",
      "display" : "Lat. tibia plateau",
      "definition" : "Lat. tibia plateau"
    }
  ]
}

```
