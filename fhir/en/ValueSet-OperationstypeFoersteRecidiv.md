# Operationstype (første gangs/recidiv) - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Operationstype (første gangs/recidiv)**

## ValueSet: Operationstype (første gangs/recidiv) 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/OperationstypeFoersteRecidiv | *Version*:2.27.0 |
| Active as of 2022-07-20 | *Computable Name*:OperationstypeFoersteRecidiv |

 
Operationstype (første gangs/recidiv) 

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
  "id" : "OperationstypeFoersteRecidiv",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/OperationstypeFoersteRecidiv",
  "version" : "2.27.0",
  "name" : "OperationstypeFoersteRecidiv",
  "title" : "Operationstype (første gangs/recidiv)",
  "status" : "active",
  "date" : "2022-07-20T00:00:00+02:00",
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
  "description" : "Operationstype (første gangs/recidiv)",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/OperationType",
      "concept" : [{
        "code" : "first_time",
        "display" : "1. gangs operation"
      },
      {
        "code" : "recurrent",
        "display" : "Recidiv operation"
      }]
    }]
  }
}

```
