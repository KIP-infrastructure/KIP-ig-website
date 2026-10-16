# Dom - Afslutning (RETSPSYK) - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Dom - Afslutning (RETSPSYK)**

## ValueSet: Dom - Afslutning (RETSPSYK) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/DomAfslutningRETSPSYK | *Version*:2.27.0 |
| Active as of 2022-10-03 | *Computable Name*:DomAfslutningRETSPSYK |

 
Dom - Afslutning (RETSPSYK) 

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
  "id" : "DomAfslutningRETSPSYK",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/DomAfslutningRETSPSYK",
  "version" : "2.27.0",
  "name" : "DomAfslutningRETSPSYK",
  "title" : "Dom - Afslutning (RETSPSYK)",
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
  "description" : "Dom - Afslutning (RETSPSYK)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/Verdict",
      "concept" : [{
        "code" : "cancellation",
        "display" : "Dom ophæves"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "death",
        "display" : "Død"
      }]
    }]
  }
}

```
