# PlanDefinitionLatest - KIP Infrastructure v2.19.3

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **PlanDefinitionLatest**

## SearchParameter: PlanDefinitionLatest 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/SearchParameter/PlanDefinitionLatest | *Version*:2.19.3 |
| Active as of 2026-04-23 | *Computable Name*:PlanDefinitionLatest |

 
Search PlanDefinition for 'latest' extension 



## Resource Content

```json
{
  "resourceType" : "SearchParameter",
  "id" : "PlanDefinitionLatest",
  "url" : "https://kip.rkkp.dk/fhir/SearchParameter/PlanDefinitionLatest",
  "version" : "2.19.3",
  "name" : "PlanDefinitionLatest",
  "status" : "active",
  "date" : "2026-04-23T11:46:51+00:00",
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
  "description" : "Search PlanDefinition for 'latest' extension",
  "code" : "latest",
  "base" : ["PlanDefinition"],
  "type" : "token",
  "expression" : "PlanDefinition.extension.where(url='latest').value",
  "comparator" : ["eq"]
}

```
