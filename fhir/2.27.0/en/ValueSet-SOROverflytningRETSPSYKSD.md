# SOR: Overflytning Syddanmark (RETSPSYK) - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **SOR: Overflytning Syddanmark (RETSPSYK)**

## ValueSet: SOR: Overflytning Syddanmark (RETSPSYK) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/SOROverflytningRETSPSYKSD | *Version*:2.27.0 |
| Active as of 2024-03-13 | *Computable Name*:SOROverflytningRETSPSYKSD |

 
SOR: Overflytning Syddanmark (RETSPSYK) 

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
  "id" : "SOROverflytningRETSPSYKSD",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/SOROverflytningRETSPSYKSD",
  "version" : "2.27.0",
  "name" : "SOROverflytningRETSPSYKSD",
  "title" : "SOR: Overflytning Syddanmark (RETSPSYK)",
  "status" : "active",
  "date" : "2024-03-13T00:00:00+02:00",
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
  "description" : "SOR: Overflytning Syddanmark (RETSPSYK)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/SOR",
      "concept" : [{
        "code" : "243921000016002",
        "display" : "PSY Retspsykiatrisk afdeling (Middelfart)"
      },
      {
        "code" : "243951000016005",
        "display" : "PSY Retspsykiatrisk Ambulatorium (Middelfart)"
      }]
    }]
  }
}

```
