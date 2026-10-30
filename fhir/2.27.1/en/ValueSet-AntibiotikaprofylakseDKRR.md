# Antibiotikaprofylakse (DKRR) - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Antibiotikaprofylakse (DKRR)**

## ValueSet: Antibiotikaprofylakse (DKRR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/AntibiotikaprofylakseDKRR | *Version*:2.27.1 |
| Active as of 2022-09-19 | *Computable Name*:AntibiotikaprofylakseDKRR |

 
Antibiotikaprofylakse (DKRR) 

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
  "id" : "AntibiotikaprofylakseDKRR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/AntibiotikaprofylakseDKRR",
  "version" : "2.27.1",
  "name" : "AntibiotikaprofylakseDKRR",
  "title" : "Antibiotikaprofylakse (DKRR)",
  "status" : "active",
  "date" : "2022-09-19T00:00:00+02:00",
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
  "description" : "Antibiotikaprofylakse (DKRR)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ATC",
      "concept" : [{
        "code" : "J01CF01",
        "display" : "Diclosil"
      },
      {
        "code" : "J01DC02",
        "display" : "Zinacef"
      },
      {
        "code" : "J01CF02",
        "display" : "Cloxacillin"
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
