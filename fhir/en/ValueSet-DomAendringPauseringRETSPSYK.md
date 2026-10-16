# Dom - Ændring/pausering (RETSPSYK) - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Dom - Ændring/pausering (RETSPSYK)**

## ValueSet: Dom - Ændring/pausering (RETSPSYK) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/DomAendringPauseringRETSPSYK | *Version*:2.27.0 |
| Active as of 2022-10-03 | *Computable Name*:DomAendringPauseringRETSPSYK |

 
Dom - Ændring/pausering (RETSPSYK) 

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
  "id" : "DomAendringPauseringRETSPSYK",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/DomAendringPauseringRETSPSYK",
  "version" : "2.27.0",
  "name" : "DomAendringPauseringRETSPSYK",
  "title" : "Dom - Ændring/pausering (RETSPSYK)",
  "status" : "active",
  "date" : "2022-10-03T00:00:00+02:00",
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
  "description" : "Dom - Ændring/pausering (RETSPSYK)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/Verdict",
      "concept" : [{
        "code" : "change",
        "display" : "Ændring af dom"
      },
      {
        "code" : "pause",
        "display" : "Pausering af dom"
      }]
    }]
  }
}

```
