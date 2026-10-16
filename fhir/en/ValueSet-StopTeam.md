# Teammedlemmer på stopholdet - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Teammedlemmer på stopholdet**

## ValueSet: Teammedlemmer på stopholdet 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/StopTeam | *Version*:2.27.0 |
| Active as of 2022-06-29 | *Computable Name*:StopTeam |

 
Teammedlemmer/personale på stopholdet 

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
  "id" : "StopTeam",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/StopTeam",
  "version" : "2.27.0",
  "name" : "StopTeam",
  "title" : "Teammedlemmer på stopholdet",
  "status" : "active",
  "date" : "2022-06-29T00:00:00+02:00",
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
  "description" : "Teammedlemmer/personale på stopholdet",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/StopTeam",
      "concept" : [{
        "code" : "anastesiLaege",
        "display" : "Anæstesilæge(r)"
      },
      {
        "code" : "anastesiSP",
        "display" : "Anæstesisygeplejerske(r)"
      },
      {
        "code" : "kardiolog",
        "display" : "Kardiolog(er)"
      },
      {
        "code" : "SP",
        "display" : "Sygeplejerske(r)"
      },
      {
        "code" : "portor",
        "display" : "Portør/serviceass."
      },
      {
        "code" : "andre",
        "display" : "Andre"
      }]
    }]
  }
}

```
