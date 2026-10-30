# Procedure varighed; over/under 5 min. - KIP Infrastructure v2.27.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Procedure varighed; over/under 5 min.**

## ValueSet: Procedure varighed; over/under 5 min. 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/ValueSet/ProcedureVarighed5min | *Version*:2.27.1 |
| Active as of 2022-06-29 | *Computable Name*:ProcedureVarighed5min |

 
Procedure varighed; over/under 5 min. 

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
  "id" : "ProcedureVarighed5min",
  "url" : "https://kip.rkkp.dk/fhir/ValueSet/ProcedureVarighed5min",
  "version" : "2.27.1",
  "name" : "ProcedureVarighed5min",
  "title" : "Procedure varighed; over/under 5 min.",
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
  "description" : "Procedure varighed; over/under 5 min.",
  "compose" : {
    "include" : [{
      "system" : "https://kip.rkkp.dk/fhir/CodeSystem/ProcedureDuration",
      "concept" : [{
        "code" : ">5",
        "display" : "Over 5 min."
      },
      {
        "code" : "=<5",
        "display" : "Under eller lig 5 min."
      }]
    }]
  }
}

```
