# ScoreTyper HOFTER - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **ScoreTyper HOFTER**

## ValueSet: ScoreTyper HOFTER 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/ScoreTyperHOFTER | *Version*:2.27.0 |
| Active as of 2024-10-07 | *Computable Name*:ScoreTyperHOFTER |

 
Score type brugt ved vurdering af funktionsniveau 

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
  "id" : "ScoreTyperHOFTER",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/ScoreTyperHOFTER",
  "version" : "2.27.0",
  "name" : "ScoreTyperHOFTER",
  "title" : "ScoreTyper HOFTER",
  "status" : "active",
  "date" : "2024-10-07T00:00:00+02:00",
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
  "description" : "Score type brugt ved vurdering af funktionsniveau",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/FunctionalScoreTypes",
      "concept" : [{
        "code" : "CAS",
        "display" : "CAS"
      },
      {
        "code" : "NMS",
        "display" : "NMS"
      }]
    }]
  }
}

```
