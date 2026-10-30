# Kliniske symptomer (DCCG) - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Kliniske symptomer (DCCG)**

## ValueSet: Kliniske symptomer (DCCG) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/KliniskeSymptomerDCCG | *Version*:2.27.1 |
| Active as of 2022-11-09 | *Computable Name*:KliniskeSymptomerDCCG |

 
Kliniske symptomer (DCCG) 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

### Logical Definition (CLD)

 

### Expansion

-------

 [Description of the above table(s)](http://build.fhir.org/ig/FHIR/ig-guidance/readingIgs.html#terminology). 



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "KliniskeSymptomerDCCG",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/KliniskeSymptomerDCCG",
  "version" : "2.27.1",
  "name" : "KliniskeSymptomerDCCG",
  "title" : "Kliniske symptomer (DCCG)",
  "status" : "active",
  "date" : "2022-11-09T00:00:00+02:00",
  "publisher" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
  "contact" : [{
    "name" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
    "telecom" : [{
      "system" : "url",
      "value" : "https://trifork.com"
    },
    {
      "system" : "email",
      "value" : "rbk@trifork.com"
    }]
  }],
  "description" : "Kliniske symptomer (DCCG)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/KliniskeSymptomerDCCG",
      "concept" : [{
        "code" : "ileus",
        "display" : "Ileus"
      },
      {
        "code" : "spontan_perf",
        "display" : "Spontan perforation"
      },
      {
        "code" : "bloedning",
        "display" : "Blødning"
      },
      {
        "code" : "endoscopi_foelge",
        "display" : "Følge efter endoskopi"
      },
      {
        "code" : "endoscopi_lokalresek_foelge",
        "display" : "Følge efter endoskopisk lokalresektion"
      },
      {
        "code" : "stent_foelge",
        "display" : "Følge af stentanlæggelse"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "other",
        "display" : "Andet"
      }]
    }]
  }
}

```
