# PlanDefinition url+version - KIP Infrastructure v2.14.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **PlanDefinition url+version**

## SearchParameter: PlanDefinition url+version 

| | |
| :--- | :--- |
| *Official URL*:http://kip.sundk.dk/fhir/SearchParameter/SP-PlanDefinition-urlversion | *Version*:2.14.0 |
| Active as of 2025-11-13 | *Computable Name*:urlversion |

 
SearchParameter to match PlanDefinition by both url and version 

## urlversion

Parameter `urlversion`:`token`

SearchParameter to match PlanDefinition by both url and version

| | |
| :--- | :--- |
| Resource | [PlanDefinition](http://hl7.org/fhir/R4/plandefinition.html) |
| Expression | `PlanDefinition.url & '_' & PlanDefinition.version` |
| Multiples | * multipleAnd: It's up to the server whether the parameter may repeat in order to specify multiple values that must all be true
* multipleOr: It's up to the server whether the parameter can have multiple values (separated by comma) where at least one must be true
 |



## Resource Content

```json
{
  "resourceType" : "SearchParameter",
  "id" : "SP-PlanDefinition-urlversion",
  "url" : "http://kip.sundk.dk/fhir/SearchParameter/SP-PlanDefinition-urlversion",
  "version" : "2.14.0",
  "name" : "urlversion",
  "status" : "active",
  "date" : "2025-11-13T13:58:05+00:00",
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
  "description" : "SearchParameter to match PlanDefinition by both url and version",
  "code" : "urlversion",
  "base" : ["PlanDefinition"],
  "type" : "token",
  "expression" : "PlanDefinition.url & '_' & PlanDefinition.version"
}

```
