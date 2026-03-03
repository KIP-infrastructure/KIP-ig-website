# PlanDefinitionLatest - KIP Infrastructure v2.19.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **PlanDefinitionLatest**

## SearchParameter: PlanDefinitionLatest 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/SearchParameter/PlanDefinitionLatest | *Version*:2.19.1 |
| Active as of 2026-03-03 | *Computable Name*:PlanDefinitionLatest |

 
Search PlanDefinition for 'latest' extension 



## Resource Content

```json
{
  "resourceType" : "SearchParameter",
  "id" : "PlanDefinitionLatest",
  "url" : "https://kip.rkkp.dk/fhir/SearchParameter/PlanDefinitionLatest",
  "version" : "2.19.1",
  "name" : "PlanDefinitionLatest",
  "status" : "active",
  "date" : "2026-03-03T14:14:05+00:00",
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
