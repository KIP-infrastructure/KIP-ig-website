# PlanDefinition url+version - KIP Infrastructure v1.25.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **PlanDefinition url+version**

## SearchParameter: PlanDefinition url+version 

| | |
| :--- | :--- |
| *Official URL*:http://kip.sundk.dk/fhir/SearchParameter/SP-PlanDefinition-urlversion | *Version*:1.25.1 |
| Active as of 2026-09-09 | *Computable Name*:urlversion |

 
SearchParameter to match PlanDefinition by both url and version 



## Resource Content

```json
{
  "resourceType" : "SearchParameter",
  "id" : "SP-PlanDefinition-urlversion",
  "url" : "http://kip.sundk.dk/fhir/SearchParameter/SP-PlanDefinition-urlversion",
  "version" : "1.25.1",
  "name" : "urlversion",
  "status" : "active",
  "date" : "2026-09-09T09:26:10+00:00",
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
  "description" : "SearchParameter to match PlanDefinition by both url and version",
  "code" : "urlversion",
  "base" : ["PlanDefinition"],
  "type" : "token",
  "expression" : "PlanDefinition.url & '_' & PlanDefinition.version"
}

```
