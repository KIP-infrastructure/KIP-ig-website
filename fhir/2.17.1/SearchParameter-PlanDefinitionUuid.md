# PlanDefinitionUuid - KIP Infrastructure v2.17.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **PlanDefinitionUuid**

## SearchParameter: PlanDefinitionUuid 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/SearchParameter/PlanDefinitionUuid | *Version*:2.17.1 |
| Active as of 2025-12-09 | *Computable Name*:PlanDefinitionUuid |

 
Search by uuid in PlanDefinition 



## Resource Content

```json
{
  "resourceType" : "SearchParameter",
  "id" : "PlanDefinitionUuid",
  "url" : "https://kip.rkkp.dk/fhir/SearchParameter/PlanDefinitionUuid",
  "version" : "2.17.1",
  "name" : "PlanDefinitionUuid",
  "status" : "active",
  "date" : "2025-12-09T08:48:57+00:00",
  "publisher" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
  "contact" : [
    {
      "name" : "Sundhedsvæsenets Kvalitetsinstitut with Trifork Digital Health A/S",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://trifork.com"
        },
        {
          "system" : "email",
          "value" : "rbk@trifork.com"
        }
      ]
    }
  ],
  "description" : "Search by uuid in PlanDefinition",
  "code" : "uuid",
  "base" : ["PlanDefinition"],
  "type" : "token",
  "expression" : "PlanDefinition.extension.where(url='uuid')",
  "comparator" : ["eq"]
}

```
