# Dom - Pausering, årsag (RETSPSYK) - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Dom - Pausering, årsag (RETSPSYK)**

## ValueSet: Dom - Pausering, årsag (RETSPSYK) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/DomPauseringAarsagRETSPSYK | *Version*:2.27.2 |
| Active as of 2022-10-03 | *Computable Name*:DomPauseringAarsagRETSPSYK |

 
Dom - Pausering, årsag (RETSPSYK) 

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
  "id" : "DomPauseringAarsagRETSPSYK",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/DomPauseringAarsagRETSPSYK",
  "version" : "2.27.2",
  "name" : "DomPauseringAarsagRETSPSYK",
  "title" : "Dom - Pausering, årsag (RETSPSYK)",
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
  "description" : "Dom - Pausering, årsag (RETSPSYK)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/Verdict",
      "concept" : [{
        "code" : "expelled",
        "display" : "Udsendt"
      },
      {
        "code" : "travelled_away",
        "display" : "Udrejst"
      },
      {
        "code" : "missing",
        "display" : "Forsvundet i længere tid"
      }]
    }]
  }
}

```
