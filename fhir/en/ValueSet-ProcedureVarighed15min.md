# Procedure varighed; over/under 15 min. - KIP Infrastructure v2.27.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Procedure varighed; over/under 15 min.**

## ValueSet: Procedure varighed; over/under 15 min. 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/ProcedureVarighed15min | *Version*:2.27.0 |
| Active as of 2022-06-29 | *Computable Name*:ProcedureVarighed15min |

 
Procedure varighed; over/under 15 min. 

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
  "id" : "ProcedureVarighed15min",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/ProcedureVarighed15min",
  "version" : "2.27.0",
  "name" : "ProcedureVarighed15min",
  "title" : "Procedure varighed; over/under 15 min.",
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
  "description" : "Procedure varighed; over/under 15 min.",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ProcedureDuration",
      "concept" : [{
        "code" : ">15",
        "display" : "Over 15 min."
      },
      {
        "code" : "=<15",
        "display" : "Under eller lig 15 min."
      }]
    }]
  }
}

```
