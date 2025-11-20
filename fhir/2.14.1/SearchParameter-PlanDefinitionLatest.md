# PlanDefinitionLatest - KIP Infrastructure v2.14.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **PlanDefinitionLatest**

## SearchParameter: PlanDefinitionLatest 

| | |
| :--- | :--- |
| *Official URL*:https://kip.rkkp.dk/fhir/SearchParameter/PlanDefinitionLatest | *Version*:2.14.1 |
| Active as of 2025-11-20 | *Computable Name*:PlanDefinitionLatest |

 
Search PlanDefinition for 'latest' extension 

## PlanDefinitionLatest

Parameter `latest`:`token`

Search PlanDefinition for 'latest' extension

| | |
| :--- | :--- |
| Resource | [PlanDefinition](http://hl7.org/fhir/R4/plandefinition.html) |
| Expression | `PlanDefinition.extension.where(url='latest').value` |
| Multiples | * multipleAnd: It's up to the server whether the parameter may repeat in order to specify multiple values that must all be true
* multipleOr: It's up to the server whether the parameter can have multiple values (separated by comma) where at least one must be true
 |
| Comparators | Allowed: eq |



## Resource Content

```json
{
  "resourceType" : "SearchParameter",
  "id" : "PlanDefinitionLatest",
  "url" : "https://kip.rkkp.dk/fhir/SearchParameter/PlanDefinitionLatest",
  "version" : "2.14.1",
  "name" : "PlanDefinitionLatest",
  "status" : "active",
  "date" : "2025-11-20T08:55:33+00:00",
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
  "description" : "Search PlanDefinition for 'latest' extension",
  "code" : "latest",
  "base" : ["PlanDefinition"],
  "type" : "token",
  "expression" : "PlanDefinition.extension.where(url='latest').value",
  "comparator" : ["eq"]
}

```
