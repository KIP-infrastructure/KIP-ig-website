# PlanDefinitionUuid - KIP Infrastructure v2.24.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **PlanDefinitionUuid**

## SearchParameter: PlanDefinitionUuid 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/SearchParameter/PlanDefinitionUuid | *Version*:2.24.0 |
| Active as of 2026-08-05 | *Computable Name*:PlanDefinitionUuid |

 
Search by uuid in PlanDefinition 



## Resource Content

```json
{
  "resourceType" : "SearchParameter",
  "id" : "PlanDefinitionUuid",
  "url" : "https://kip.rkkp.dk/fhir/SearchParameter/PlanDefinitionUuid",
  "version" : "2.24.0",
  "name" : "PlanDefinitionUuid",
  "status" : "active",
  "date" : "2026-08-05T12:34:48+00:00",
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
  "description" : "Search by uuid in PlanDefinition",
  "code" : "uuid",
  "base" : ["PlanDefinition"],
  "type" : "token",
  "expression" : "PlanDefinition.extension.where(url='uuid')",
  "comparator" : ["eq"]
}

```
