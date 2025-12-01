# EHS - Incisional hernia classification - KIP Infrastructure v2.14.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **EHS - Incisional hernia classification**

## CodeSystem: EHS - Incisional hernia classification 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/EHSIncisionalHerniaClassification | *Version*:2.14.2 |
| Active as of 2022-06-28 | *Computable Name*:EHSIncisionalHerniaClassification |

 
EHS (European Hernia Society) - Incisional hernia classification; Link: https://www.ncbi.nlm.nih.gov/pmc/articles/PMC2719726/ 

 This Code system is referenced in the content logical definition of the following value sets: 

* [EHSVentralHernieLateral](ValueSet-EHSVentralHernieLateral.md)
* [EHSVentralHernieMidtlinie](ValueSet-EHSVentralHernieMidtlinie.md)
* [EHSVentralHernieSamlet](ValueSet-EHSVentralHernieSamlet.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "EHSIncisionalHerniaClassification",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/EHSIncisionalHerniaClassification",
  "version" : "2.14.2",
  "name" : "EHSIncisionalHerniaClassification",
  "title" : "EHS - Incisional hernia classification",
  "status" : "active",
  "date" : "2022-06-28T00:00:00+02:00",
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
  "description" : "EHS (European Hernia Society) - Incisional hernia classification; Link: https://www.ncbi.nlm.nih.gov/pmc/articles/PMC2719726/",
  "caseSensitive" : false,
  "content" : "complete",
  "count" : 17,
  "concept" : [
    {
      "code" : "m1",
      "display" : "M1",
      "definition" : "M1 - Subxiphoidal"
    },
    {
      "code" : "m2",
      "display" : "M2",
      "definition" : "M2 - Epigastric"
    },
    {
      "code" : "m3",
      "display" : "M3",
      "definition" : "M3 - Umbilical"
    },
    {
      "code" : "m4",
      "display" : "M4",
      "definition" : "M4 - Infraumbilical"
    },
    {
      "code" : "m5",
      "display" : "M5",
      "definition" : "M5 - Suprapubic"
    },
    {
      "code" : "l1",
      "display" : "L1",
      "definition" : "L1 - Subcostal"
    },
    {
      "code" : "l2",
      "display" : "L2",
      "definition" : "L2 - Flank"
    },
    {
      "code" : "l3",
      "display" : "L3",
      "definition" : "L3 - Iliac"
    },
    {
      "code" : "l4",
      "display" : "L4",
      "definition" : "L4 - Lumbar"
    },
    {
      "code" : "l1l",
      "display" : "L1",
      "definition" : "L1 - Subcostal (Left)"
    },
    {
      "code" : "l2l",
      "display" : "L2",
      "definition" : "L2 - Flank (Left)"
    },
    {
      "code" : "l3l",
      "display" : "L3",
      "definition" : "L3 - Iliac (Left)"
    },
    {
      "code" : "l4l",
      "display" : "L4",
      "definition" : "L4 - Lumbar (Left)"
    },
    {
      "code" : "l1r",
      "display" : "L1",
      "definition" : "L1 - Subcostal (Right)"
    },
    {
      "code" : "l2r",
      "display" : "L2",
      "definition" : "L2 - Flank (Right)"
    },
    {
      "code" : "l3r",
      "display" : "L3",
      "definition" : "L3 - Iliac (Right)"
    },
    {
      "code" : "l4r",
      "display" : "L4",
      "definition" : "L4 - Lumbar (Right)"
    }
  ]
}

```
