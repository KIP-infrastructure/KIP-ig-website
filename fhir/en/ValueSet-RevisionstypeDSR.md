# Revisionstype (DSR) - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Revisionstype (DSR)**

## ValueSet: Revisionstype (DSR) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/RevisionstypeDSR | *Version*:2.27.0 |
| Active as of 2022-10-07 | *Computable Name*:RevisionstypeDSR |

 
Revisionstype (DSR) 

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
  "id" : "RevisionstypeDSR",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/RevisionstypeDSR",
  "version" : "2.27.0",
  "name" : "RevisionstypeDSR",
  "title" : "Revisionstype (DSR)",
  "status" : "active",
  "date" : "2022-10-07T00:00:00+02:00",
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
  "description" : "Revisionstype (DSR)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/RevisionType",
      "concept" : [{
        "code" : "one-stage",
        "display" : "One-stage"
      },
      {
        "code" : "two-stage_step_1",
        "display" : "Two-stage - trin 1"
      },
      {
        "code" : "two-stage_step_2",
        "display" : "Two-stage - trin 2"
      }]
    },
    {
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/GenericValues",
      "concept" : [{
        "code" : "other",
        "display" : "Anden"
      }]
    }]
  }
}

```
