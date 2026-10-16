# ATC - Tromboseprofylakse (DKR) - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ATC - Tromboseprofylakse (DKR)**

## ValueSet: ATC - Tromboseprofylakse (DKR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/ATCTromboseprofylakseDKR | *Version*:2.27.0 |
| Active as of 2022-10-14 | *Computable Name*:ATCTromboseprofylakseDKR |

 
ATC - Tromboseprofylakse (DKR) 

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
  "id" : "ATCTromboseprofylakseDKR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/ATCTromboseprofylakseDKR",
  "version" : "2.27.0",
  "name" : "ATCTromboseprofylakseDKR",
  "title" : "ATC - Tromboseprofylakse (DKR)",
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
  "description" : "ATC - Tromboseprofylakse (DKR)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ATC",
      "concept" : [{
        "code" : "B01AF01",
        "display" : "Rivaroxaban (Xarelto)"
      },
      {
        "code" : "B01AB04",
        "display" : "Dalteparin (Fragmin)"
      },
      {
        "code" : "B01AB05",
        "display" : "Enoxaparin (Klexane)"
      },
      {
        "code" : "B01AE07",
        "display" : "Dabigatranetexilat (Pradaxa)"
      },
      {
        "code" : "B01AF02",
        "display" : "Apixaban (Eliquis)"
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
