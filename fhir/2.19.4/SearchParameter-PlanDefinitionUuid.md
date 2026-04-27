# PlanDefinitionUuid - KIP Infrastructure v2.19.4

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **PlanDefinitionUuid**

## SearchParameter: PlanDefinitionUuid 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/SearchParameter/PlanDefinitionUuid | *Version*:2.19.4 |
| Active as of 2026-04-27 | *Computable Name*:PlanDefinitionUuid |

 
Search by uuid in PlanDefinition 



## Resource Content

```json
{
  "resourceType" : "SearchParameter",
  "id" : "PlanDefinitionUuid",
  "url" : "https://kip.rkkp.dk/fhir/SearchParameter/PlanDefinitionUuid",
  "version" : "2.19.4",
  "name" : "PlanDefinitionUuid",
  "status" : "active",
  "date" : "2026-04-27T07:58:16+00:00",
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
