# ATC - Antibiotikaprofylakse (DKR) - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ATC - Antibiotikaprofylakse (DKR)**

## ValueSet: ATC - Antibiotikaprofylakse (DKR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/ATCAntibiotikaprofylakseDKR | *Version*:2.27.2 |
| Active as of 2022-10-14 | *Computable Name*:ATCAntibiotikaprofylakseDKR |

 
ATC - Antibiotikaprofylakse (DKR) 

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
  "id" : "ATCAntibiotikaprofylakseDKR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/ATCAntibiotikaprofylakseDKR",
  "version" : "2.27.2",
  "name" : "ATCAntibiotikaprofylakseDKR",
  "title" : "ATC - Antibiotikaprofylakse (DKR)",
  "status" : "active",
  "date" : "2022-10-14T00:00:00+02:00",
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
  "description" : "ATC - Antibiotikaprofylakse (DKR)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ATC",
      "concept" : [{
        "code" : "J01DC02",
        "display" : "Cefuroxim"
      },
      {
        "code" : "J01CF01",
        "display" : "Dicloxacillin"
      },
      {
        "code" : "J01XA01",
        "display" : "Vancomycin"
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
