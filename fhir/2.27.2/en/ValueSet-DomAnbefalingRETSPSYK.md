# Dom - Anbefaling (RETSPSYK) - KIP Infrastructure v2.27.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Dom - Anbefaling (RETSPSYK)**

## ValueSet: Dom - Anbefaling (RETSPSYK) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/DomAnbefalingRETSPSYK | *Version*:2.27.2 |
| Active as of 2022-10-03 | *Computable Name*:DomAnbefalingRETSPSYK |

 
Dom - Anbefaling (RETSPSYK) 

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
  "id" : "DomAnbefalingRETSPSYK",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/DomAnbefalingRETSPSYK",
  "version" : "2.27.2",
  "name" : "DomAnbefalingRETSPSYK",
  "title" : "Dom - Anbefaling (RETSPSYK)",
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
  "description" : "Dom - Anbefaling (RETSPSYK)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/Verdict",
      "concept" : [{
        "code" : "sustainment",
        "display" : "Opretholdelse"
      },
      {
        "code" : "extension_time",
        "display" : "Forlængelse af længstetid"
      },
      {
        "code" : "extension_measure",
        "display" : "Forlængelse af foranstaltning"
      },
      {
        "code" : "cancellation",
        "display" : "Ophævelse"
      },
      {
        "code" : "intensification",
        "display" : "Skærpelse"
      },
      {
        "code" : "relaxation",
        "display" : "Lempelse"
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
