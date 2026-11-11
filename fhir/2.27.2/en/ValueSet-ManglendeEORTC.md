# EORTC skema mangler - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **EORTC skema mangler**

## ValueSet: EORTC skema mangler 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/ManglendeEORTC | *Version*:2.27.2 |
| Active as of 2022-09-06 | *Computable Name*:ManglendeEORTC |

 
Årsag til manglende EORTC skema 

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
  "id" : "ManglendeEORTC",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/ManglendeEORTC",
  "version" : "2.27.2",
  "name" : "ManglendeEORTC",
  "title" : "EORTC skema mangler",
  "status" : "active",
  "date" : "2022-09-06T00:00:00+02:00",
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
  "description" : "Årsag til manglende EORTC skema",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/TreatmentNotGiven",
      "concept" : [{
        "code" : "bad_condition",
        "display" : "For dårlig"
      },
      {
        "code" : "unwanted",
        "display" : "Afslog"
      },
      {
        "code" : "died",
        "display" : "Ikke i live"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "none",
        "display" : "Ikke begrundet"
      }]
    }]
  }
}

```
