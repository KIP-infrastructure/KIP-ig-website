# Kliniske symptomer (DCCG) - KIP Infrastructure v2.13.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Kliniske symptomer (DCCG)**

## CodeSystem: Kliniske symptomer (DCCG) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/CodeSystem/KliniskeSymptomerDCCG | *Version*:2.13.0 |
| Active as of 2022-11-09 | *Computable Name*:KliniskeSymptomerDCCG |

 
Kliniske symptomer (DCCG) 

 This Code system is referenced in the content logical definition of the following value sets: 

* [KliniskeSymptomerDCCG](ValueSet-KliniskeSymptomerDCCG.md)



## Resource Content

```json
{
  "resourceType" : "CodeSystem",
  "id" : "KliniskeSymptomerDCCG",
  "url" : "https://kip.rkkp.dk/fhir/CodeSystem/KliniskeSymptomerDCCG",
  "version" : "2.13.0",
  "name" : "KliniskeSymptomerDCCG",
  "title" : "Kliniske symptomer (DCCG)",
  "status" : "active",
  "date" : "2022-11-09T00:00:00+02:00",
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
  "description" : "Kliniske symptomer (DCCG)",
  "content" : "complete",
  "count" : 6,
  "concept" : [
    {
      "code" : "ileus",
      "display" : "Ileus",
      "definition" : "Ileus"
    },
    {
      "code" : "spontan_perf",
      "display" : "Spontan perforation",
      "definition" : "Spontan perforation"
    },
    {
      "code" : "bloedning",
      "display" : "Blødning",
      "definition" : "Blødning"
    },
    {
      "code" : "endoscopi_foelge",
      "display" : "Følge efter endoskopi",
      "definition" : "Følge efter endoskopi"
    },
    {
      "code" : "endoscopi_lokalresek_foelge",
      "display" : "Følge efter endoskopisk lokalresektion",
      "definition" : "Følge efter endoskopisk lokalresektion"
    },
    {
      "code" : "stent_foelge",
      "display" : "Følge af stentanlæggelse",
      "definition" : "Følge af stentanlæggelse"
    }
  ]
}

```
